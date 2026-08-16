<x-layout>
    {{-- <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #f4f4f4;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */

        .sidebar {
            width: 230px;
            background: #06414F;
            color: #fff;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            overflow: hidden;
            z-index: 1000;
        }

        .logo {
            margin-bottom: 50px;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .menu a {
            text-decoration: none;
            color: #B7B7B7;
            padding: 14px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 16px;
            transition: 0.3s;
        }

        .menu a:hover {
            background: white;
            color: #06414F;
        }

        .bottom-menu {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .bottom-menu a {
            text-decoration: none;
            color: #B7B7B7;
            padding: 12px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-radius: 6px;
            transition: 0.3s;
        }

        .bottom-menu a:hover {
            background: white;
            color: #06414F;
        }

        /* MAIN CONTENT */

        .main {
            flex: 1;
            padding: 30px;
            margin-left: 270px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 50px;
        }

        .topbar h2 {
            font-size: 32px;
            font-weight: 600;
            font-style: Semi Bold;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .profile {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .notification {
            position: relative;
            font-size: 18px;
            cursor: pointer;
        }

        .notification span {
            position: absolute;
            top: -2px;
            right: -2px;
            width: 8px;
            height: 8px;
            background: red;
            border-radius: 50%;
        }

        .user {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            object-fit: cover;
        }

        .user-text h4 {
            font-size: 14px;
            font-weight: 600;
        }

        .user-text p {
            font-size: 12px;
            color: #5E5D5D;
        }

        /* FORM */

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 28px 60px;
            max-width: 900px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #111;
        }

        .form-group input {
            height: 43px;
            width: 420px;
            border: 1px solid #767676;
            border-radius: 10px;
            padding: 0 16px;
            font-size: 16px;
            background: transparent;
            outline: none;
        }

        .form-group input::placeholder {
            color: #767676;
        }

        .full-width {
            grid-column: span 2;
        }

        .btn {
            margin-top: 70px;
            width: 100%;
            max-width: 900px;
            height: 54px;
            border: none;
            background: #06414F;
            color: white;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .initials {
            width: 50px;
            height: 50px;
            background-color: #E2EEF9;
            color: #06414F;
            font-weight: 700;
            font-size: 14px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-transform: uppercase;
            border: 1px solid #C5DCF2;
        }


        /* RESPONSIVE */

        @media(max-width:950px) {

            .container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .full-width {
                grid-column: span 1;
            }

            .topbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }

            .topbar h2 {
                font-size: 34px;
            }
        }
    </style>
    </head>

    <body>

        <div class="container">

            <!-- SIDEBAR -->

            <aside class="sidebar">

                <div>

                    <div class="logo"> <img src="{{ asset('images/Artboard 1 2.svg') }}" alt=""> </div>

                    <div class="menu">
                        <a href="{{ route('admin-dashboard.index') }}">
                            <i><img src="{{ asset('images/dash.svg') }}" alt=""></i>
                            Dashboard
                        </a>

                        <a href="{{ route('admin-employee.index') }}" class="active">
                            <i><img src="{{ asset('images/employee.svg') }}" alt=""></i>
                            Employees
                        </a>

                        <a href="{{ route('admin-attendance.index') }}">
                            <i><img src="{{ asset('images/attendance.svg') }}" alt=""></i>
                            Attendance
                        </a>
                    </div>

                </div>

                <div class="bottom-menu">
                    <a href="{{ route('admin-setting.index') }}">
                        <i><img src="{{ asset('images/setting.svg') }}" alt=""></i>
                        Settings
                    </a>

                    <x-adminlogout />
                </div>

            </aside>

            <!-- MAIN -->

            <main class="main">

                <div class="topbar">

                    <h2>Add New Employee</h2>

                    <div class="profile">

                        {{-- <div class="notification">
                            <i><img src="{{ asset('images/bell.png') }}" alt=""></i>

                        </div> --}}
                        {{--
                        <div class="user">
                            @php
                            $firstInitial = substr($adminUser->first_name, 0, 1);
                            $lastInitial = substr($adminUser->last_name, 0, 1);

                            $initials = strtoupper($firstInitial . $lastInitial);
                            @endphp
                            <div class="initials">
                                <a href="{{ route('admin-setting.index') }}"
                                    style="text-decoration: none; color:#06414F ;">
                                    {{ $initials }}
                                </a>
                            </div>
                            <div class="user-text">
                                <h4>{{ $adminUser->first_name }} {{ $adminUser->last_name }}</h4>
                                <p>Admin</p>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- FORM -->

                <form action="{{ route('admin-employee.store') }}" method="POSt">
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

                    <div class="form-grid">

                        <div class="form-group">
                            <label>First name</label>
                            <input type="text" name="first_name" placeholder="Enter first name" required>
                        </div>

                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" name="last_name" placeholder="Enter last name" required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Enter email" required>
                        </div>

                        <div class="form-group">
                            <label>Department</label>
                            <input type="text" name="department" placeholder="Enter department" required>
                        </div>

                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" name="position" placeholder="Enter position" required>
                        </div>

                        <div class="form-group">
                            <label>Phone number</label>
                            <input type="tel" name="phone" placeholder="Enter phone number" required>
                        </div>

                        <div class="form-group">
                            <label>Date of joining</label>
                            <input type="date" name="date" placeholder="select date" required>
                        </div>

                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" name="company" placeholder="Hizo/Trazo/Glyde" required>
                        </div>

                    </div>

                    <button type="submit" class="btn">Add Employee</button>

                </form>

            </main>

        </div> --}}

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }


            body {
                font-family: "Inter", sans-serif;
                background: #fff;
                color: #111;
            }

            main{
                width: 100%;
            }


            /* =========================================
   MAIN LAYOUT
========================================= */

            .dashboard {
                display: flex;
                width: 100%;
                min-height: 100vh;
            }


            /* =========================================
   SIDEBAR
========================================= */

            .sidebar {

                width: 230px;
                height: 100vh;
                position: fixed;
                left: 0;
                top: 0;
                background: #064A58;
                color: white;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                padding: 35px 12px;
            }


            /* Logo */

            .logo {
                margin-bottom: 55px;
            }

            .logo img {
                width: 80px;
                height: 36.89453125px;
                opacity: 1;
                display: block;
            }


            /* =========================================
   SIDEBAR MENU
========================================= */

            .menu,
            .bottom-menu {
                display: flex;
                flex-direction: column;
            }

            .menu {
                gap: 10px;
            }

            .bottom-menu {
                gap: 10px;
            }

            .menu a {
                width: 100%;
                height: 38px;
                display: flex;
                align-items: center;
                gap: 21px;
                padding: 24px;
                border-radius: 3px;
                color: #B7B7B7;
                text-decoration: none;
                font-size: 16px;
                transition: 0.2s ease;
            }

            .bottom-menu a {
                width: 100%;
                height: 38px;
                display: flex;
                align-items: center;
                gap: 21px;
                padding: 24px;
                border-radius: 3px;
                color: #B7B7B7;
                text-decoration: none;
                font-size: 16px;
                transition: 0.2s ease;
                margin-left: -18px;
            }

            .menu a i,
            .bottom-menu a i {
                width: 14px;
                text-align: center;

            }

            .menu a:hover,
            .bottom-menu a:hover {
                background: white;
                color: #06414F;
            }

            .user-email {
                display: none;
            }

            .menu a.setting-link {
                display: none;
            }

            /* =========================================
   MAIN
========================================= */

            .main {
                margin-left: 247px;
                padding: 35px 50px;
                width: 975px;
                height: 694px;
                opacity: 1;
                gap: 61px;
                top: 26px;
            }


            /* =========================================
   HEADER
========================================= */

            .top-header {
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 55px;
            }

            .page-title {
                font-weight: 600;
                font-style: Semi Bold;
                font-size: 32px;
                line-height: 100%;
                letter-spacing: 0px;

            }


            /* =========================================
   ADMIN PROFILE
========================================= */

            .admin-area {
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .user {
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .user img {
                width: 45px;
                height: 45px;
                border-radius: 50%;
                object-fit: cover;
            }

            .user-text h4 {
                font-size: 14px;
                font-weight: 600;
            }

            .user-text p {
                font-size: 12px;
                color: #5E5D5D;
            }

            .initials {
                width: 50px;
                height: 50px;
                background-color: #E2EEF9;
                color: #06414F;
                font-weight: 700;
                font-size: 14px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                text-transform: uppercase;
                border: 1px solid #C5DCF2;
            }




            /* =========================================
   FORM
========================================= */

            .employee-form {
                width: 100%;
            }


            /* IMPORTANT:
   The form now grows with the screen.
*/

            .form-grid {
                width: 100%;
                max-width: 1000px;
                display: grid;
                grid-template-columns: 1fr 1fr;
                column-gap: 70px;
                row-gap: 35px;

            }


            /* =========================================
   FORM GROUP
========================================= */

            .form-group {
                width: 100%;
                display: flex;
                flex-direction: column;
            }

            .form-group label {
                font-weight: 600;
                font-style: Semi Bold;
                font-size: 16px;
                line-height: 100%;
                letter-spacing: 0px;

            }

            .form-group input,
            .form-group select {
                width: 100%;
                height: 36px;
                border: 1px solid #767676;
                border-radius: 5px;
                padding: 0 13px;
                background: #fff;
                font-size: 10px;
                outline: none;
                font-weight: 400;
                font-style: Regular;
                font-size: 16px;
                line-height: 100%;
                letter-spacing: 0px;

            }

            .form-group input::placeholder {
                color: #999;
            }

            .form-group input:focus,
            .form-group select:focus {
                border-color: #064A58;
            }


            /* =========================================
   DATE
========================================= */

            .date-input {
                color: #777;
            }

            .date-input::-webkit-calendar-picker-indicator {
                cursor: pointer;
                opacity: .65;
            }



            /* =========================================
   BUTTON
========================================= */

            .submit-button {
                width: min(60vw, 850px);

                height: 43px;

                margin-top: 75px;

                border: none;

                border-radius: 5px;

                background: #064A58;

                color: white;

                font-size: 16px;

                font-weight: 600;

                cursor: pointer;

                transition: .2s ease;
            }


            /* =========================================
   HAMBURGER + CANCEL - DESKTOP
========================================= */

            .sidebar-close {
                display: none;
            }

            .mobile-menu-btn {
                display: none;
            }

            .mobile-logo {
                display: none;
            }





            /* =========================================================
   MOBILE SCREEN
========================================================= */

            @media (max-width: 768px) {

                html,
                body {
                    width: 100%;
                    height: 100vh;
                    margin: 0;
                    padding: 0;
                    overflow-x: hidden;
                }

                body {
                    background: #fff;
                }

                /* =====================================================
       DASHBOARD
    ===================================================== */

                .dashboard {
                    display: block;
                    width: 100%;
                    min-height: 100vh;
                }


                /* =====================================================
       MAIN
    ===================================================== */

                .main {
                    width: 100%;
                    min-height: 100vh;
                    margin-left: 0;
                    padding: 38px 10px 25px;
                    box-sizing: border-box;
                    position: relative;
                }


                /* =====================================================
       MOBILE HEADER
    ===================================================== */

                .top-header {
                    width: 100%;
                    height: auto;
                    display: flex;
                    flex-direction: column-reverse;
                    align-items: flex-start;
                    margin-bottom: 22px;
                    position: relative;
                }


                /* =====================================================
       MOBILE LOGO

       Uses your existing .logo class
    ===================================================== */

                .mobile-logo {
                    display: block;
                    width: 45px;
                    height: auto;
                    margin: 0 0 12px 3px;

                }

                .main .mobile-logo img {
                    display: block;
                    width: 50px;
                    height: 23.6px;
                }


                /* =====================================================
       HAMBURGER
    ===================================================== */

                .mobile-menu-btn {
                    display: flex;
                    position: absolute;
                    top: 2px;
                    right: 1px;
                    width: 28px;
                    height: 28px;
                    align-items: center;
                    justify-content: center;
                    padding: 0;
                    border: none;
                    background: transparent;
                    color: #111;
                    font-size: 18px;
                    line-height: 1;
                    cursor: pointer;
                    margin-top: 25px;
                    z-index: 100;
                }


                /* =====================================================
       PROFILE
    ===================================================== */

                .admin-area {
                    width: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: flex-start;
                    gap: 7px;
                    margin: 0;
                    padding: 0;
                    margin-top: 10px;
                }


                .profile-image {
                    width: 34px;
                    height: 34px;
                    border-radius: 50%;
                    object-fit: cover;
                }


                .profile-details {
                    display: flex;
                    flex-direction: column;
                    gap: 1px;
                }


                .profile-name {
                    font-weight: 600;
                    font-size: 14px;
                    line-height: 100%;
                    letter-spacing: 0px;

                }


                .profile-role {
                    font-size: 12px;
                    color: #5E5D5D;
                    line-height: 100%;
                }


                /* =====================================================
       PAGE TITLE
    ===================================================== */

                .page-title {
                    font-size: 14px;
                    font-weight: 600;
                    line-height: 1.2;
                    margin: 18px 0 0 0;
                }


                /* =====================================================
       FORM
    ===================================================== */

                .employee-form {
                    width: 100%;
                }


                .form-grid {
                    width: 100%;
                    max-width: none;
                    display: grid;
                    grid-template-columns: 1fr;
                    column-gap: 0;
                    row-gap: 12px;
                    box-sizing: border-box;
                }


                /* =====================================================
       FORM GROUP
    ===================================================== */

                .form-group {
                    width: 100%;
                    display: flex;
                    flex-direction: column;
                }


                .form-group label {
                    font-size: 14px;
                    font-weight: 600;
                    line-height: 1.2;
                    margin-bottom: 5px;
                }


                .form-group input,
                .form-group select {
                    padding: 0 9px;
                    border: 1px solid #9B9B9B;
                    outline: none;
                    box-sizing: border-box;
                    font-weight: 400;
                    font-style: Regular;
                    font-size: 12px;
                    line-height: 100%;
                    letter-spacing: 0px;
                    width: 415px;
                    height: 40px;
                    opacity: 1;
                    gap: 10px;
                    border-radius: 4px;
                    border-width: 1px;
                    padding-top: 12px;
                    padding-right: 10px;
                    padding-bottom: 12px;
                    padding-left: 10px;

                }


                .form-group input::placeholder {
                    color: #9B9B9B;
                }


                .form-group input:focus,
                .form-group select:focus {
                    border-color: #064A58;
                }


                /* =====================================================
       COMPANY

       Keep company in normal flow on mobile
    ===================================================== */

                .company-field {
                    grid-column: auto;
                }


                /* =====================================================
       DATE
    ===================================================== */

                .date-input {
                    color: #9B9B9B;
                }


                .date-input::-webkit-calendar-picker-indicator {
                    width: 12px;
                    height: 12px;

                    cursor: pointer;

                    opacity: .65;
                }


                /* =====================================================
       ADD EMPLOYEE BUTTON
    ===================================================== */

                .submit-button {
                    margin-top: 16px;
                    border: none;
                    background: #064A58;
                    color: #fff;
                    font-size: 14px;
                    font-weight: 600;
                    cursor: pointer;

                    width: 414px;
                    height: 49px;
                    opacity: 1;
                    gap: 10px;
                    border-radius: 4px;
                    padding-top: 16px;
                    padding-right: 32px;
                    padding-bottom: 16px;
                    padding-left: 32px;

                }


                /* =====================================================
       MOBILE SIDEBAR
    ===================================================== */

                .sidebar {
                    width: 300px;
                    height: calc(100vh - 1px);
                    position: fixed;
                    /* top: 10px; */
                    left: -100%;
                    padding: 30px 16px;
                    background: #064A58;
                    border-top-right-radius: 40px;
                    border-bottom-right-radius: 40px;
                    z-index: 2000;
                    transition: left .3s ease;
                    box-sizing: border-box;
                }


                .sidebar.open {
                    left: 0;
                }


                /* =====================================================
       SIDEBAR LOGO
    ===================================================== */

                .sidebar .logo {
                    display: block;
                    margin-bottom: 45px;
                }


                .sidebar .logo img {
                    width: 58px;
                    height: auto;
                }


                /* =====================================================
       SIDEBAR MENU
    ===================================================== */

                .menu {
                    display: flex;
                    flex-direction: column;
                    gap: 12px;
                    margin-left: -10px;
                }


                .menu a,
                .bottom-menu a {
                    width: 100%;
                    height: 40px;
                    padding: 0 10px;
                    display: flex;
                    align-items: center;
                    gap: 12px;
                    font-size: 18px;
                    box-sizing: border-box;
                }

                .menu a i {
                    width: 25px;
                    height: 25px;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                }


                /* =====================================================
       BOTTOM MENU
    ===================================================== */

                .bottom-menu {
                    display: flex;
                    flex-direction: column;
                    gap: 8px;
                }


                .bottom-menu a {
                    height: 38px;
                }


                /* =====================================================
       SIDEBAR CLOSE BUTTON
    ===================================================== */

                .sidebar-close {
                    display: flex;
                    position: absolute;
                    top: 25px;
                    right: 14px;
                    width: 24px;
                    height: 24px;
                    align-items: center;
                    justify-content: center;
                    padding: 0;
                    border: none;
                    background: transparent;
                    color: #fff;
                    font-size: 18px;
                    cursor: pointer;
                }


                /* =====================================================
       OVERLAY
    ===================================================== */

                .mobile-overlay {
                    display: none;
                    position: fixed;
                    inset: 0;
                    background: #06414F80;
                    backdrop-filter: blur(20px);
                    -webkit-backdrop-filter: blur(3px);
                    z-index: 1500;
                }


                .mobile-overlay.active {
                    display: block;
                }



                .bottom-menu a.setting-links {
                    display: none !important;
                }

                .setting-link {
                    display: flex;
                    align-items: center;
                    justify-content: flex-start;
                    text-align: left;
                    padding: 12px;
                    gap: 5px;
                    margin-right: 0;
                    width: 100%;
                    text-decoration: none;
                    font-size: 18px;
                    font-weight: 400;
                    color: #b7b7b7;
                    border-radius: 8px;
                }

                .setting-link i {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    width: 30px;
                    height: 20px;
                    flex-shrink: 0;
                    margin: 0;
                }

                .setting-link i img {
                    width: 100%;
                    height: 100%;
                    object-fit: contain;
                }

                .setting-link span {
                    line-height: 1;
                }

                .user-email {
                    display: flex;
                    align-items: center;
                    gap: 12px;
                    padding: 10px 12px;
                    margin-bottom: -2px;
                    width: 100%;
                    margin-left: -8px;
                }

                .user-email .profile-pic {
                    width: 32px;
                    height: 32px;
                    border-radius: 50%;
                    background-color: #ffffff;
                    color: #06414F;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-weight: 700;
                    font-size: 13px;
                    flex-shrink: 0;
                    overflow: hidden;
                }

                .user-profile-item .profile-pic img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    border-radius: 50%;
                }
            }




            /* =========================================================
   SMALL PHONES
========================================================= */

            @media (max-width: 380px) {

                .main {
                    padding-left: 10px;
                    padding-right: 10px;
                }

                .main .logo,
                .main .logo img {
                    width: 44px;
                }

                .form-grid {
                    row-gap: 11px;
                }

                .form-group label {
                    font-size: 9px;
                }

                .form-group input,
                .form-group select {
                    height: 31px;
                    font-size: 8px;
                }

                .submit-button {
                    height: 37px;
                    font-size: 9px;
                }
            }


            /* =========================================================
   VERY SMALL PHONES
========================================================= */

            @media (max-width: 340px) {

                .main {
                    padding-left: 9px;
                    padding-right: 9px;
                }

                .form-group input,
                .form-group select {
                    height: 30px;
                }

                .sidebar {
                    width: 210px;
                }
            }


            /* =========================================================
   VERY SMALL PHONES
   ========================================================= */

            @media (max-width: 340px) {

                .main {
                    padding-left: 9px;
                    padding-right: 9px;
                }

                .form-group input,
                .form-group select {
                    height: 25px;
                }

                .sidebar {
                    width: 210px;
                }
            }
        </style>
        </head>


        <body>

            <div class="dashboard">

                <!-- =====================================
             SIDEBAR
        ====================================== -->

                <aside class="sidebar" id="sidebar">

                    <div>

                        <!-- Logo -->
                        <div class="logo">
                            <img src="{{ asset('images/Artboard 1 2.svg') }}" alt="">
                        </div>


                        <!-- Main Menu -->
                        <nav class="menu">

                            <a href="{{ route('admin-dashboard.index') }}">
                                <i><img src="{{ asset('images/dash.svg') }}" alt=""></i>
                                Dashboard
                            </a>

                            <a href="{{ route('admin-employee.index') }}" class="active">
                                <i><img src="{{ asset('images/employee.svg') }}" alt=""></i>
                                Employees
                            </a>

                            <a href="{{ route('admin-attendance.index') }}">
                                <i><img src="{{ asset('images/attendance.svg') }}" alt=""></i>
                                Attendance
                            </a>
                            <a href="{{ route('admin-setting.index') }}" class="setting-link">
                                <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
                                <span>Settings</span>
                            </a>

                        </nav>

                    </div>


                    <!-- Bottom Menu -->
                    <nav class="bottom-menu">

                        <div class="user-email" style="color: #B7B7B7">
                            @php
                                $firstInitial = strtoupper(substr($adminUser->first_name, 0, 1));
                            @endphp

                            <div class="profile-pic">
                                @if($adminUser->avatar)
                                    <img src="{{ asset('storage/' . $adminUser->avatar) }}" alt="Profile"
                                        style="width: 100%; height: 100%; object-fit: cover; border-radius: 100%;">
                                @else
                                    <span>{{ $firstInitial }}</span>
                                @endif
                            </div>

                            <span class="user-email-text">
                                {{ $adminUser->email }}
                            </span>
                        </div>
                        <a href="{{ route('admin-setting.index') }}" class="setting-links">
                            <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
                            <span>Settings</span>
                        </a>
                        <div style="margin-left: -8px">
                            <x-adminlogout />
                        </div>

                    </nav>

                    <button class="sidebar-close" id="sidebarClose">
                        ×
                    </button>

                </aside>


                <div class="mobile-overlay" id="mobileOverlay"></div>

                <!-- =====================================
             MAIN
        ====================================== -->

                <main class="main">
                    <div class="mobile-logo">
                        <img src="{{ asset('images/Artboard 1-1 2.svg') }}" alt="">
                    </div>

                    <button class="mobile-menu-btn" id="mobileMenuBtn">
                        <img src="{{ asset('images/breadcrumb.svg') }}">
                    </button>


                    <!-- TOP HEADER -->

                    <header class="top-header">



                        <h1 class="page-title">
                            Add New Employee
                        </h1>


                        <!-- Admin -->

                        <div class="admin-area">



                            <div class="user">
                                @php
                                    $firstInitial = substr($adminUser->first_name, 0, 1);
                                    $lastInitial = substr($adminUser->last_name, 0, 1);

                                    $initials = strtoupper($firstInitial . $lastInitial);
                                   @endphp
                                <div class="initials">
                                    <a href="{{ route('admin-setting.index') }}"
                                        style="text-decoration: none; color:#06414F ;">
                                        {{ $initials }}
                                    </a>
                                </div>
                                <div class="user-text">
                                    <h4>{{ $adminUser->first_name }} {{ $adminUser->last_name }}</h4>
                                    <p>Admin</p>
                                </div>
                            </div>
                        </div>

                    </header>


                    <!-- =====================================
                 EMPLOYEE FORM
            ====================================== -->

                    <form action="{{ route('admin-employee.store') }}" method="POSt">
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

                        <div class="form-grid">


                            <div class="form-group">

                                <label for="first-name">First name</label>

                                <input type="text" name="first_name" placeholder="Enter first name">

                            </div>




                            <div class="form-group">

                                <label for="last-name">Last name</label>

                                <input type="text" name="last_name" placeholder="Enter last name">

                            </div>




                            <div class="form-group">

                                <label for="email">Email</label>

                                <input type="email" name="email" placeholder="Enter email">

                            </div>


                            <!-- Department -->

                            <div class="form-group">

                                <label for="department">Department</label>

                                <input type="text" name="department" placeholder="Enter department">

                            </div>


                            <!-- Role -->

                            <div class="form-group">

                                <label for="role">Role</label>

                                <input type="text" name="position" placeholder="Enter position">

                            </div>


                            <!-- Phone -->

                            <div class="form-group">

                                <label for="phone">Phone number</label>

                                <input type="tel" name="phone" placeholder="Enter phone number">

                            </div>


                            <!-- Date -->

                            <div class="form-group">

                                <label for="joining-date">Date of joining</label>

                                <input type="date" name="date" class="date-input">

                            </div>


                            <!-- Company -->

                            <div class="form-group company-field">

                                <label for="company">Company</label>

                                <input type="text" name="company" placeholder="Hizo/Trazo/Glyde">

                            </div>

                        </div>


                        <!-- Submit -->

                        <button type="submit" class="submit-button">
                            Add Employee
                        </button>

                    </form>

                </main>

            </div>



            <script>
                const menuBtn = document.getElementById("mobileMenuBtn");
                const sidebar = document.getElementById("sidebar");
                const overlay = document.getElementById("mobileOverlay");
                const closeBtn = document.getElementById("sidebarClose");

                menuBtn.addEventListener("click", function () {
                    sidebar.classList.add("open");
                    overlay.classList.add("active");
                });

                closeBtn.addEventListener("click", function () {
                    sidebar.classList.remove("open");
                    overlay.classList.remove("active");
                });

                overlay.addEventListener("click", function () {
                    sidebar.classList.remove("open");
                    overlay.classList.remove("active");
                });
            </script>

        </body>



</x-layout>