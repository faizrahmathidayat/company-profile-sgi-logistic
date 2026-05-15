<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGI Logistics</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f4f7fa;
            font-family: Arial, sans-serif;
            color: #374151;
        }

        table {
            border-spacing: 0;
        }

        .wrapper {
            width: 100%;
            background: #f4f7fa;
            padding: 30px 15px;
        }

        .container {
            max-width: 650px;
            width: 100%;
            background: #ffffff;
            margin: auto;
            border-radius: 12px;
            overflow: hidden;
        }

        .header {
            background: #0d6efd;
            padding: 35px 25px;
            text-align: center;
            color: #ffffff;
        }

        .header h1 {
            margin: 0;
            font-size: 30px;
        }

        .header p {
            margin-top: 10px;
            font-size: 14px;
            opacity: 0.9;
        }

        .content {
            padding: 35px 30px;
        }

        .content h2 {
            margin-top: 0;
            color: #111827;
            font-size: 24px;
        }

        .description {
            font-size: 14px;
            line-height: 24px;
            color: #6b7280;
            margin-bottom: 30px;
        }

        .info-table {
            width: 100%;
            border-collapse: collapse;
        }

        .info-table td {
            padding: 14px 0;
            border-bottom: 1px solid #e5e7eb;
            vertical-align: top;
            font-size: 14px;
        }

        .label {
            width: 180px;
            font-weight: bold;
            color: #111827;
        }

        .message-box {
            margin-top: 35px;
        }

        .message-box h3 {
            margin-bottom: 15px;
            color: #111827;
        }

        .message-content {
            background: #f9fafb;
            border-left: 4px solid #0d6efd;
            padding: 20px;
            border-radius: 6px;
            line-height: 28px;
            font-size: 14px;
        }

        .footer {
            background: #f9fafb;
            padding: 25px;
            text-align: center;
            font-size: 13px;
            color: #6b7280;
        }

        @media only screen and (max-width: 600px) {

            .content {
                padding: 25px 20px !important;
            }

            .header h1 {
                font-size: 24px !important;
            }

            .content h2 {
                font-size: 20px !important;
            }

            .info-table td {
                display: block;
                width: 100% !important;
                border-bottom: none;
                padding: 6px 0;
            }

            .label {
                padding-top: 15px !important;
            }

            .message-content {
                font-size: 13px;
                line-height: 24px;
            }
        }
    </style>
</head>

<body>

    <div class="wrapper">

        <table class="container" width="100%">

            <!-- Header -->
            <tr>
                <td class="header">

                    <h1>SGI Logistics</h1>

                    <p>
                        New Contact Form Submission
                    </p>

                </td>
            </tr>

            <!-- Content -->
            <tr>
                <td class="content">

                    <h2>New Quote Request</h2>

                    <p class="description">
                        You have received a new inquiry from your website contact form.
                    </p>

                    <table class="info-table">

                        <tr>
                            <td class="label">Full Name</td>
                            <td>{{ strtoupper($data['firstName']) }} {{ strtoupper($data['lastName']) }}</td>
                        </tr>

                        <tr>
                            <td class="label">Email</td>
                            <td>{{ $data['email'] }}</td>
                        </tr>

                        <tr>
                            <td class="label">Phone</td>
                            <td>{{ $data['phone'] }}</td>
                        </tr>

                        <tr>
                            <td class="label">Service</td>
                            <td>{{ $data['service'] }}</td>
                        </tr>

                    </table>

                    <!-- Message -->
                    <div class="message-box">

                        <h3>Message</h3>

                        <div class="message-content">
                            {{ $data['message'] }}
                        </div>

                    </div>

                </td>
            </tr>

            <!-- Footer -->
            <tr>
                <td class="footer">

                    © {{ date('Y') }} SGI Logistics. All rights reserved.

                </td>
            </tr>

        </table>

    </div>

</body>

</html>