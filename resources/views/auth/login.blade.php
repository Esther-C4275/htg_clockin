<x-layout>
    <div class="container">

        <!-- Left Side (Image) -->
        <div class="left">
            <img src="{{ asset('images/test.png') }}" alt="team work">
        </div>

        <!-- Right Side (Form) -->
        <div class="right">
            <div class="form-box">
                <h2>Welcome Back!</h2>
                <p>Welcome back please enter your details.</p>

                <form action="{{ route('login.authenticate') }}" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div
                            style="background: #FEE2E2; color: #991B1B; padding: 15px; border-radius: 6px; margin-bottom: 20px;">
                            <strong>Fix these errors to save:</strong>
                            <ul style="margin-top: 5px; padding-left: 20px;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Enter your email" required>

                    <label>Password</label>
                    <input type="password" name="password" placeholder="**************">

                    <div class="options">
                        <div class="check">
                            <input type="checkbox">
                            <label> Remember me</label>
                        </div>

                        <a href="{{ route('password.request') }}">Forgot Password</a>
                    </div>

                    <button type="submit" class="btn">Sign in</button>

                    <button class="google-btn">
                        <img src="{{ asset('images/google.jpeg') }}" />
                        Sign in with Google
                    </button>

                    <p class="signup">
                        Don't have an account? <a href="{{ route('register') }}">Sign up</a>
                    </p>
                </form>
            </div>
        </div>

    </div>



    <style>
        body {
            /* background: linear-gradient(to bottom, #e6f0ff, #ffffff); */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;

        }

        .container {
            display: flex;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
        }

        /* Left section */
        .left {
            width: 50%;
            height: 100%;
            overflow: hidden;
        }


        .left img {
            width: 100%;
            height: 100%;
            object-fit: cover;

        }

        /* Right section */
        .right {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .form-box {
            width: 100%;
            max-width: 300px;
        }

        .form-box h2 {
            margin-bottom: 10px;
            font-family: Inter;
            font-weight: 700;
            font-style: Bold;
            font-size: 40px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .form-box p {
            color: #605F5F;
            margin-bottom: 20px;
            font-family: Inter;
            font-weight: 500;
            font-style: Medium;
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        form label {
            display: block;
            margin-top: 10px;
            font-family: Inter;
            font-weight: 500;
            font-style: Medium;
            font-size: 16px;
            line-height: 100%;
            letter-spacing: 0px;


        }

        form input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: center;
            font-size: 12px;
            margin-top: 10px;
        }

        .check {
            display: flex;
            align-items: center;
            text-align: center;
        }

        .check>label {
            font-size: 14px !important;
            white-space: nowrap;
            margin: 0px;
        }

        .options a {
            text-decoration: none;
            color: #000000;
            font-family: Inter;
            font-weight: 700;
            font-style: Bold;
            font-size: 14px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .btn {
            width: 100%;
            margin-top: 15px;
            padding: 10px;
            background: #06414F;
            color: #FFFFFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            font-style: Medium;
            font-size: 16px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        /* .btn:hover {
  background: #1a202c;
} */

        .google-btn {
            width: 100%;
            margin-top: 10px;
            padding: 7px;
            background: #fff;
            border: 1px solid #AAA8A8;
            border-radius: 5px;
            cursor: pointer;
            font-family: Inter;
            font-weight: 500;
            font-style: Medium;
            font-size: 14px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .google-btn img {
            margin-left: 3px;
            vertical-align: middle;
            width: 28px;
            height: 28px;
            opacity: 1;

        }

        .signup {
            text-align: center;
            margin-top: 15px;
            font-weight: 500 !important;
            font-size: 16px !important;
            line-height: 100% !important;
            letter-spacing: 0px !important;
            color: #000000 !important;

        }

        .signup a {
            text-decoration: none;
            color: #06414F;
            font-family: Inter;
            font-weight: 600;
            font-size: 16px;
            line-height: 100%;
            letter-spacing: 0px;

        }
    </style>
</x-layout>