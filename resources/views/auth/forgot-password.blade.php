<x-layout>

    <div class="forgot-container">
        <div class="forgot-card">

            <div class="icon-circle">
                <img src="/images/forgot.png" alt="">
            </div>

            <h2>Forgot Password?</h2>

            <p>
                Enter your email address below and we'll send you a link
                to reset your password.
            </p>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <label>EMAIL ADDRESS</label>
                <div class="input-box">
                    <i> <img src="/images/mailer.png" alt=""></i>
                    <input type="email" name="email" placeholder="Name@gmail.com" required>
                </div>

                <button type="submit">Send Reset Link <img class="butt-img" src="/images/link.png" alt=""></button>
            </form>

            <a href="{{ route('login') }}" class="back-link"> <img src="/images/back.png" alt=""> Back to Login</a>

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
            border-radius: 12px;
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
        .forgot-card h2 {
            margin-bottom: 12px;
            color: #000000;
            font-weight: 700;
            font-style: Bold;
            font-size: 24px;
            line-height: 100%;
            letter-spacing: 0px;
            text-align: center;
            vertical-align: middle;

        }

        .forgot-card p {
            color: #7A7979;
            line-height: 1.5;
            margin-bottom: 25px;
            font-weight: 400;
            font-size: 14px;
            line-height: 100%;
            letter-spacing: 0px;
            text-align: center;
            vertical-align: middle;

        }

        /* Form */
        form {
            text-align: left;
        }

        label {
            /* display: block; */
            font-size: 12px;
            font-weight: 500;
            margin-bottom: 8px;
            color: #000000;
            font-weight: 600;
            font-style: Bold;
            line-height: 16px;
            letter-spacing: 0.6px;


        }

        .input-box {
            display: flex;
            align-items: center;
            border: 1px solid #868686;
            border-radius: 6px;
            padding: 10px 12px;
            margin-bottom: 20px;
        }

        .input-box i {
            color: #9ca3af;
            margin-right: 10px;
        }

        .input-box input {
            border: none;
            outline: none;
            width: 100%;
            font-size: 14px;
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

        /* button:hover {
  background:#06414F;
} */

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

        /* .back-link:hover {
  color: #0b4b57;
} */
    </style>
</x-layout>