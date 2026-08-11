<x-layout>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #ffffff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

      
        .landing-container {
            max-width: 1100px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
            padding: 40px;
        }

        .illustration-wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 550px;
        }

        .illustration-wrapper img {
            width: 100%;
            height: auto;
            object-fit: contain;
        }

      
        .content-wrapper {
            flex: 1;
            max-width: 480px;
        }

        .content-wrapper h1 {
            font-family: Roboto Condensed;
            font-weight: 600;
            font-style: SemiBold;
            font-size: 40px;
            line-height: 100%;
            letter-spacing: -3%;
            margin-bottom: 16px;
        }

        .content-wrapper p {
            font-family: Roboto;
            font-weight: 500;
            font-style: Condensed Medium;
            font-size: 24px;
            line-height: 100%;
            letter-spacing: -3%;
            margin-bottom: 32px;
        }

      
        .portal-toggle-container {
            display: inline-flex;
            background: #F9F9FB;
            border: 1px solid #EDEFF2;
            border-radius: 100px;
            padding: 4px;
            width: 100%;
            max-width: 380px;
        }

        .portal-btn {
            flex: 1;
            padding: 12px 24px;
            border: none;
            border-radius: 100px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            text-align: center;
            font-family: Roboto Condensed;
            font-weight: 400;
            font-style: Regular;
            font-size: 20px;
            line-height: 100%;
            letter-spacing: -3%;
            color:#111827;   

        }

       
        .portal-btn.active {
            background-color: #06414F;
            color: #ffffff;
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(6, 65, 79, 0.15);
        }


      
        @media (max-width: 900px) {
            .landing-container {
                flex-direction: column;
                text-align: center;
                gap: 30px;
                padding: 20px 10px;
            }

            .content-wrapper {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .content-wrapper h1 {
                font-size: 30px;
            }

            .content-wrapper p {
                font-size: 15px;
            }

            .illustration-wrapper {
                max-width: 400px;
                margin-bottom: 40px;
            }
        }

        @media (max-width: 480px) {
            .content-wrapper h1 {
                font-size: 26px;
            }

            .portal-toggle-container {
                max-width: 100%;
            }

            .portal-btn {
                padding: 10px 16px;
                font-size: 13px;
            }
        }
    </style>
</head>
<body>

    <main class="landing-container">
        
        
        <div class="illustration-wrapper">
          
            <img src="{{ asset('images/image 321.svg') }}">
        </div>

        
        <div class="content-wrapper">
            <h1>Attendance Made Simple</h1>
            <p>Keep every check-in and check-out organized with a fast and reliable attendance system.</p>
            
           
            <div class="portal-toggle-container">
                <a href="{{ route('login') }}" class="portal-btn active" type="button" id="adminBtn">Admin Portal</a>
                <a href="{{ route('register') }}" class="portal-btn" type="button" id="userBtn">User Portal</a>
            </div>
        </div>

    </main>

   
    <script>
        const adminBtn = document.getElementById('adminBtn');
        const userBtn = document.getElementById('userBtn');

        adminBtn.addEventListener('click', () => {
            adminBtn.classList.add('active');
            userBtn.classList.remove('active');
           
        });

        userBtn.addEventListener('click', () => {
            userBtn.classList.add('active');
            adminBtn.classList.remove('active');
            
        });
    </script>

</body>
</x-layout>
