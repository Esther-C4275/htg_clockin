<x-layout>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        main {
            background: #ffffff;
            display: flex;
        }

        /* SIDEBAR */

        .sidebar {
            width: 230px;
            height: 100vh;
            background: #06414F;
            position: fixed;
            top: 0;
            left: 0;
            padding: 35px 18px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .menu,
        .bottom-menu {
            display: flex;
            flex-direction: column;

        }


        .menu {
            margin-top: 60px;
        }

        .menu a,
        .bottom-menu a {
            text-decoration: none;
            color: #B7B7B7;
            padding: 12px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            font-size: 15px;
            transition: 0.3s;
            gap: 12px;
        }

        .menu a:hover,
        .bottom-menu a:hover {
            background: #ffffff;
            color: #06414F;
        }



        /* MAIN */

        .main {
            width: 100%;
            margin-left: 230px;
            padding: 12px;
        }

        /* TOPBAR */

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .topbar h2 {
            font-size: 32px;
        }

        .top-profile {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .notification {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .profile img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile h4 {
            font-size: 14px;
        }

        .profile p {
            font-size: 12px;
            color: #5E5D5D;
        }

        /* CONTENT */

        .content {
            display: grid;
            grid-template-columns: 250px 1fr;
            gap: 20px;
        }

        /* SETTINGS PANEL */

        .settings-panel {
            border: 1px solid #e6e6e6;
            border-radius: 8px;
            padding: 22px;
        }

        .settings-panel h3 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .settings-panel span {
            color: #616060;
            font-size: 12px;
        }

        .settings-links {
            margin-top: 45px;
            display: flex;
            flex-direction: column;
            gap: 22px;
        }

        .settings-links a {
            text-decoration: none;
            color: #BCBCBC;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 16px;
            font-weight: 600;
        }

        
        /* RIGHT CONTENT */

        .right-content {
            background: #fff;
            border: 1px solid #e6e6e6;
            border-radius: 12px;
            padding: 25px;
        }

        /* HEADER */

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 30px;
        }

        .section-header h3 {
            font-size: 18px;
            margin-bottom: 6px;
        }

        .section-header p {
            color: #53555B;
            font-size: 14px;
        }

        .edit-btn {
            border: 1px solid #EDEDED;
            cursor: pointer;
            font-size: 13px;
            color: #494848;
            background-color: white;
            width: 71px;
            height: 31px;
            gap: 5px;
            opacity: 1;
            border-radius: 5px;
            border-width: 1px;
            padding: 8px;

        }

        /* FORM */

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
            font-weight: 600;
        }

        .required {
            color: red;
        }

        .input-box {
            position: relative;
        }

        .input-box input {
            border: 1px solid #D3D3D4;
            font-size: 14px;
            width: 681px;
            height: 38px;
            justify-content: space-between;
            opacity: 1;
            border-radius: 5px;
            border-width: 1px;
            padding-top: 10px;
            padding-right: 16px;
            padding-bottom: 10px;
            padding-left: 16px;

        }

        .input-box i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #656565;
            cursor: pointer;
            font-size: 14px;
        }

        /* BUTTONS */

        .buttons {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            margin-top: 10px;
            margin-bottom: 45px;
        }

        .cancel-btn {
            border: 1px solid #939191;
            background: #ffffff;
            color: #434343;
            padding: 10px;
            border-radius: 6px;
            cursor: pointer;
        }

        .save-btn {
            border: 1px solid #939191;
            background: #ffffff;
            color: #434343;
            cursor: pointer;
            width: 127px;
            height: 37px;
            gap: 10px;
            opacity: 1;
            border-radius: 5px;
            padding-top: 10px;
            padding-right: 16px;
            padding-bottom: 10px;
            padding-left: 16px;

        }

        .cancel-btn:hover {
            background: #06414F;
            color: #ffffff;
        }

        .save-btn:hover {
            background: #06414F;
            color: #ffffff;
        }

        /* SECURITY OPTIONS */

        .security-options {
            display: flex;
            flex-direction: column;
            gap: 35px;
        }

        .security-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .security-text h4 {
            font-size: 14px;
            margin-bottom: 8px;
        }

        .security-text p {
            font-size: 12px;
            color: #454444;
            max-width: 420px;
            line-height: 1.5;
        }

        /* TOGGLE SWITCH */

        .switch {
            position: relative;
            width: 48px;
            height: 26px;
        }

        .switch input {
            display: none;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #E5E7EB;
            border-radius: 30px;
            transition: 0.3s;
        }


        .slider::before {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #033d4a;
            top: 3px;
            left: 3px;
            transition: 0.3s;
        }

        .switch input:checked+.slider {

            background-color: #06414F;
        }

        .switch input:checked+.slider::before {
            transform: translateX(22px);
            background: white;


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

        @media(max-width:1000px) {

            .content {
                grid-template-columns: 1fr;
            }
        }

        @media(max-width:768px) {

            .sidebar {
                display: none;
            }

            .main {
                margin-left: 0;
            }

            .topbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 18px;
            }

            .section-header {
                flex-direction: column;
                gap: 18px;
            }

            .security-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
        }
    </style>
    </head>

    <body>

        <!-- SIDEBAR -->

        <div class="sidebar">

            <div>

                <div class="logo">
                    <img src="/images/htg.png" alt="">
                </div>

                <div class="menu">

                    <a href="{{ route('admin-dashboard.index') }}">
                        <i> <img src="/images/dash.png" alt=""></i>
                        Dashboard
                    </a>

                    <a href="{{ route('admin-employee.index') }}">
                        <i> <img src="/images/employee.png" alt=""></i>
                        Employees
                    </a>

                    <a href="{{ route('admin-attendance.index') }}">
                        <i> <img src="/images/attendance.png" alt=""></i>
                        Attendance
                    </a>

                </div>

            </div>

            <div class="bottom-menu">

                <a href="{{ route('admin-setting.index') }}">
                    <i> <img src="/images/setting.png" alt=""></i>
                    Settings
                </a>

                <x-adminlogout />
            </div>

        </div>

        <!-- MAIN -->

        <div class="main">

            <!-- TOPBAR -->

            <div class="topbar">

                <h2>Dashboard</h2>

                <div class="top-profile">

                    <div class="notification">
                        <i><img src="/images/bell.png" alt=""></i>
                    </div>

                    <div class="profile">
                        @php
                            $firstInitial = substr($user->first_name, 0, 1);
                            $lastInitial = substr($user->last_name, 0, 1);

                            $initials = strtoupper($firstInitial . $lastInitial);

                        @endphp
                        <div class="initials">
                            {{ $initials }}
                        </div>


                        <div>
                            <h4>{{ $user->first_name }} {{ $user->last_name }}</h4>
                            <p>Admin</p>
                        </div>

                    </div>

                </div>

            </div>

            <!-- CONTENT -->

            <div class="content">

                <!-- SETTINGS PANEL -->

                <div class="settings-panel">

                    <h3>Settings</h3>

                    <span>You can find all settings here</span>

                    <div class="settings-links">

                        <a href="{{ route('admin-setting.index') }}">
                            <i class="fa-solid fa-user"></i>
                            My Profile
                        </a>

                        <a href="{{ route('security.index') }}" style="text-decoration: none; font-weight: 600; color: {{ request()->is('security-options*') ? '#03343b' : '#BCBCBC' }}">
                            <i class="fa-solid fa-lock"></i>
                            Security Options
                        </a>

                    </div>

                </div>

                <!-- RIGHT CONTENT -->

                <div class="right-content">

                    <!-- HEADER -->

                    <div class="section-header">

                        <div>
                            <h3>Update Your Password</h3>

                            <p>
                                Keep your account secure by setting a strong, unique password.
                            </p>
                        </div>


                    </div>

                    <!-- FORM -->
                    <form action="{{ route('security.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        @if ($errors->any())
                            <div class="alert alert-danger" style="color: #DC2626; margin-bottom: 20px; font-size: 14px;">
                                <ul style="list-style: none; padding: 0;">
                                    @foreach ($errors->all() as $error)
                                        <li><i class="fa-solid fa-circle-exclamation"></i> {{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                            <label>
                                Current Password <span class="required">*</span>
                            </label>
                            <div class="input-box">
                                <input type="password" name="current_password" placeholder="Enter your current password"
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>
                                New Password <span class="required">*</span>
                            </label>
                            <div class="input-box">
                                <input type="password" name="password" placeholder="Create a new password" required>
                            </div>
                        </div>
                        @error('password')
                            <span class="error-text"
                                style="color: #b71c1c; font-size: 13px; display: block; margin-top: 4px;">
                                {{ $message }}
                            </span>
                        @enderror

                        <div class="form-group">
                            <label>
                                Confirm New Password <span class="required">*</span>
                            </label>
                            <div class="input-box">
                                <input type="password" name="password_confirmation" placeholder="Re-enter new password"
                                    required>
                            </div>
                        </div>

                        <div class="buttons">
                            <a href="{{ route('admin-setting.index') }}" class="cancel-btn"
                                style="text-decoration: none; display: inline-block; text-align: center;">
                                Cancel
                            </a>
                            <button type="submit" class="save-btn">
                                Save Changes
                            </button>

                        </div>

                        <!-- SECURITY OPTIONS -->

                        <div class="security-options">

                            <div class="security-item">

                                <div class="security-text">

                                    <h4>Primary Email</h4>

                                    <p>
                                        Use your registered email to receive security codes and notifications
                                    </p>

                                </div>

                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                </label>

                            </div>

                            <div class="security-item">

                                <div class="security-text">

                                    <h4>SMS Authentication</h4>

                                    <p>
                                        Receive verification codes via SMS to your phone
                                    </p>

                                </div>

                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                </label>

                            </div>

                            <div class="security-item">

                                <div class="security-text">

                                    <h4>Backup Codes</h4>

                                    <p>
                                        Save one-time backup codes to access your account if you lose your device.
                                    </p>

                                </div>

                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider"></span>
                                </label>

                            </div>

                        </div>

                </div>

            </div>

        </div>

    </body>

    </html>
</x-layout>