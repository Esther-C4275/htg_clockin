<x-layout>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            /* background: #eff5fb; */
        }

        .page-wrap {
            width: 100%;
            max-width: 420px;
            padding: 20px;
        }

        .reset-card {
            width: 450px;
            height: 350px;
            border: 1px solid #EDEDED;
            border-radius: 18px;
            padding: 40px 32px;
            text-align: center;
        }

        .reset-card h1 {
            color: #000000;
            margin-bottom: 10px;
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 24px;
            line-height: 100%;
            letter-spacing: 0px;
            text-align: center;
            vertical-align: middle;

        }

        .subtitle {
            color: #7A7979;
            margin-bottom: 32px;

            font-weight: 400;
            font-size: 14px;
            line-height: 100%;
            letter-spacing: 0px;
            text-align: center;
            vertical-align: middle;



        }

        .form-group {
            text-align: left;
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            color: #111827;
            margin-bottom: 10px;
            text-transform: uppercase;
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;
            margin-top: 30px;


        }

        .input-box {
            position: relative;
            display: flex;
            align-items: center;
            gap: 8px;
            background: #FCFCFC;
            border: 1px solid #EDEDED;
            border-radius: 12px;
            padding: 12px 14px;
        }

        .input-box input {
            width: 100%;
            border: none;
            background: transparent;
            outline: none;
            font-size: 14px;
            color: #111827;
        }

        .primary-btn {
            display: inline-block;
            width: 100%;
            background: #06414F;
            color: #ffffff;
            border: none;
            border-radius: 12px;
            padding: 14px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 6px;
            text-decoration: none;

        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 20px;
            font-size: 15px;
            color: #06414F;
            text-decoration: none;
        }


        @media (max-width: 768px) {

            .reset-card {
                border: 0px;
                width: 100%;
            }

            .reset-card h1 {
                font-size: 16px;
            }

            .subtitle {
                font-size: 12px;
            }

            .back-link {
                font-size: 14px;
            }
        }
    </style>


    <body>
        <div class="page-wrap">
            <div class="reset-card">
                <h1>Set new password</h1>


                <form action="{{ route('password.update-setup', $user->id) }}" method="POST">
                    @csrf
                
                    @if ($errors->any())
                        <div style="color: red; margin-bottom: 15px;">
                            {{ $errors->first() }}
                        </div>
                    @endif
                
                    <div class="form-group">
                        <label for="new-password">New Password</label>
                        <div class="input-box">
                            <input id="new-password" name="password" type="password" placeholder="Enter new password" required />
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label for="confirm-password">Confirm New Password</label>
                        <div class="input-box">
                            <input id="confirm-password" name="password_confirmation" type="password" placeholder="Repeat new password" required />
                        </div>
                    </div>
                
                    <button type="submit" class="primary-btn">Save Password</button>
                </form>
            </div>
        </div>
    </body>

</x-layout>