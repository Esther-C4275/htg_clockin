<x-layout>
    <div class="both">

        <div class="forgot-container">
            <div class="forgot-card">

                <div class="icon-circle">
                    <img src="/images/mail.png" alt="">
                </div>

                <h2>Check your email</h2>

                <p>We've sent password reset instructions to your inbox. Please follow the link to continue.</p>

                <form method="POST" action="{{ route('password.email') }}">

                    <button type="submit">Open Email App <img class="butt-img" src="/images/link.png" alt=""></button>

                    <p class="form-p">Didn't receive the email?<span> <a href="">Click to
                                resend</a></a></span></p>
                </form>

                <a href="{{ route('login') }}" class="back-link"> <img src="/images/back.png" alt=""> Back to
                    Login</a>

            </div>

        </div>

        <!-- Pro Tip -->
        <div class="tip-box">
            <div class="tip-icon"><img src="/images/tip.png" alt=""></div>
            <div class="tip-content">
                <strong>PRO TIP</strong>
                <p>
                    If you don't see the email in your inbox within 2-3 minutes,
                    please check your <span class="spam-pro">spam</span> or <span class="spam-pro">promotions</span>
                    folder.
                </p>
            </div>
        </div>

    </div>


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container */
        .forgot-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Card */
        .forgot-card {
            width: 360px;
            padding: 40px 30px;
            border-radius: 10px;
            text-align: center;
            border: 1px solid #EDEDED;
        }

        /* Icon */
        .icon-circle {
            width: 55px;
            height: 55px;
            background: #e8f1f4;
            color: #0b4b57;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 18px;
            font-size: 22px;
        }

        /* Headings */


        .forgot-card p {
            color: #7A7979;
            line-height: 1.5;
            margin-bottom: 25px;
            font-weight: 400;
            font-size: 15px;
            line-height: 100%;
            letter-spacing: 0px;
            text-align: center;
            vertical-align: middle;

        }

        /* Form */
        form {
            text-align: left;
        }


        /* Button */
        button {
            width: 100%;
            padding: 12px;
            background: #0b4b57;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .butt-img {
            width: 16px;
            height: 16px;
            vertical-align: middle;
            margin-left: 8px;


        }

        .form-p {
            margin-top: 12px;
            color: #000000 !important;
            text-align: center;
            font-weight: 400;
            font-size: 15px;
            line-height: 100%;
            letter-spacing: 0px;
            text-align: center;
            vertical-align: middle;

        }

        span a {
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 14px;
            line-height: 100%;
            letter-spacing: 0px;
            text-align: center;
            vertical-align: middle;
            color: #06718A;
            text-decoration: none;
        }

        /* Back Link */
        .back-link {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 18px;
            font-size: 18px;
            color: #06414F;
            text-decoration: none;
            gap: 6px;

        }


        /* Pro Tip Box */
        .tip-box {
            width: 390px;
            border-left: 4px solid #06414F;
            padding: 18px 20px;
            display: flex;
            gap: 12px;
            align-items: flex-start;
            margin-top: 10px;
            margin-left: 37px;
        }

        .tip-icon {
            font-size: 18px;
            margin-top: 2px;

            width: 24px;
            height: 24px;
            opacity: 1;

        }

        .tip-content strong {
            display: block;
            font-size: 13px;
            margin-bottom: 5px;
            color: #111827;
        }

        .spam-pro {
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 14px;
            line-height: 100%;
            letter-spacing: 0px;
            text-align: center;
            vertical-align: middle;
            color: #000000;
            text-decoration: none;


        }

        .tip-content p {
            font-size: 11px;
            color: #111827;
            line-height: 1.5;
        }
    </style>

</x-layout>