<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:100',
            'lastName'  => 'required|string|max:100',
            'email'     => 'required|email',
            'phone'     => 'nullable|string|max:50',
            'service'   => 'nullable|string|max:100',
            'message'   => 'required|string',
            'g-recaptcha-response' => 'required'
        ]);

        try {

            /*
            |--------------------------------------------------------------------------
            | Verify Google Recaptcha
            |--------------------------------------------------------------------------
            */

            $response = Http::asForm()->post(
                'https://www.google.com/recaptcha/api/siteverify',
                [
                    'secret'   => config('services.recaptcha.secret'),
                    'response' => $request->input('g-recaptcha-response'),
                ]
            );

            $responseKeys = $response->json();

            if (!isset($responseKeys['success']) || !$responseKeys['success']) {

                return response('CAPTCHA verification failed.', 422);

            }

            /*
            |--------------------------------------------------------------------------
            | Send Email
            |--------------------------------------------------------------------------
            */

            Mail::send(
                'emails.contact',
                [
                    'data' => $request->all()
                ],
                function ($mail) use ($request) {

                    $mail->to('info@sgilogistics.com', 'SGI Logistics')
                        ->replyTo(
                            $request->email,
                            $request->firstName . ' ' . $request->lastName
                        )
                        ->subject('New Contact Form Submission');

                }
            );

            return response('Message has been sent successfully!');

        } catch (\Exception $e) {

            return response(
                'Message could not be sent. Error: ' . $e->getMessage(),
                500
            );

        }
    }
}