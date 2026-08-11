<x-layout>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #ffffff;
            display: flex;
        }

        /* SIDEBAR */

        .sidebar {
            width: 255px;
            height: 100vh;
            background: #06414F;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
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
            padding: 17px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            font-size: 18px;
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
            width: 96%;
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
            font-size: 30px;
            margin-left: 40px
        }

        .top-profile {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .profile-top {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 13px;
        }

        .profile-top span {
            font-weight: 400;
            font-style: Regular;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;
        }

        .user-initials {
            font-weight: 400;
            font-style: Regular;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;
            padding: 8px 12px;
            opacity: 1;
            border-radius: 100px;
            background: #FAFAFA;


        }

        /* CONTENT */

        .content {
            display: grid;
            grid-template-columns: 250px 1fr;
            gap: 20px;
        }

        /* Profile Card */

        .profile-card {
            width: 250px;
            border: 1px solid #EBEBEB;
            border-radius: 8px;
            padding: 25px 20px;
            text-align: center;
            margin-left: 40px;
        }

        .profile-image {
            position: relative;
            width: 120px;
            margin: auto;
        }

        .profile-image-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
        }

        .edit-icon {
            position: absolute;
            right: 0;
            padding: 7px;
            bottom: 50px;
            background: #06414F;
            width: 33px;
            height: 33px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile-card h4 {
            font-size: 16px;
            margin-top: 10px;
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 14px;
            line-height: 100%;
            letter-spacing: 0px;
            margin-bottom: 3px;

        }

        .profile-card p {
            color: #616161;
            font-weight: 400;
            font-style: Regular;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-card button {
            border: none;
            background: none;
            padding: 12px;
            margin-bottom: 10px;
            text-align: left;
            cursor: pointer;


            width: 177px;
            height: 38px;
            top: 257.47px;
            left: 16.5px;
            gap: 8px;
            opacity: 1;
            border-radius: 100px;
            padding-top: 10px;
            padding-right: 16px;
            padding-bottom: 10px;
            padding-left: 16px;

        }

        .profile-card button i {
            margin-right: 10px;
            color: #06414F !important;
        }

        .btn span {
            font-weight: 500;
            font-style: Medium;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .btn:hover {
            background-color: #76ABB8;
            color: #F6F8FA;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: flex-start;
            width: 190px;
            height: 38px;
            border: none;
            background: transparent;
            border-radius: 100px;
            padding: 10px 16px;
            margin: 6px auto;
            text-decoration: none;
            cursor: pointer;
            font-family: 'Inter', sans-serif;
            transition: all 0.2s ease-in-out;
            color: #06414F;
        }

        .profile-card .btn i.fa-lock {
            margin-right: 10px;
            font-size: 14px;
            width: 16px;
            text-align: center;
            color: #06414F !important;
        }

        .profile-card .btn i.fa-user {
            margin-right: 10px;
            font-size: 14px;
            width: 16px;
            text-align: center;
            color: #06414F !important;
        }


        /* RIGHT CONTENT */

        .right-content {
            background: #fff;
            border: 1px solid #e6e6e6;
            border-radius: 12px;
            padding: 25px;
            margin-left: 50px;
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
                    <img src="{{ asset('images/htg.svg') }}" alt="">
                </div>

                <div class="menu">

                    <a href="{{ route('index.staff') }}">
                        <i> <img src="{{ asset('images/dash.svg') }}" alt=""></i>
                        Dashboard
                    </a>

                    <a href="{{ route('index.frontId') }}">
                        <i> <img src="{{ asset('images/employee.svg') }}" alt=""></i>
                        ID Card
                    </a>

                    <a href="{{ route('index.registry') }}">
                        <i> <img src="{{ asset('images/attendance.svg') }}" alt=""></i>
                        Registry
                    </a>

                </div>

            </div>

            <div class="bottom-menu">

                <a href="{{ route('staff-edit.index') }}">
                    <i> <img src="{{ asset('images/setting.svg') }}" alt=""></i>
                    Settings
                </a>

                <x-logout />

            </div>

        </div>

        <!-- MAIN -->

        <div class="main">

            <!-- TOPBAR -->

            <div class="topbar">

                <h2>Dashboard</h2>

                <div class="top-profile">


                    <div class="profile-top">
                        {{-- <i><img src="{{ asset('images/bell.png') }}" alt=""></i> --}}
                        <span>{{ $user->email }}</span>
                        <span class="user-initials" style="overflow: hidden; 
                        width: 35px; 
                        height: 35px; 
                        background-color: #E2EEF9; 
                        color: #06414F; 
                        border-radius: 50%; 
                        display: flex; 
                        align-items: center; 
                        justify-content: center; 
                        font-weight: 700; 
                        font-size: 13px;
                        flex-shrink: 0;
                        padding: 0;">

                            @if($user->avatar)

                                <img src="{{ asset('storage/' . $user->avatar) }}" alt="Profile"
                                    style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            @else
                                @php
                                    $firstInitial = substr($user->first_name, 0, 1);
                                @endphp
                                {{ $firstInitial }}
                            @endif
                        </span>
                    </div>

                </div>

            </div>

            <!-- CONTENT -->

            <div class="content">

                <!-- Profile Card -->
                <div class="profile-card">

                    <div class="profile-image">
                        @php
                            $firstInitial = substr($user->first_name, 0, 1);
                            $lastInitial = substr($user->last_name, 0, 1);

                            $initials = strtoupper($firstInitial . $lastInitial);
                        @endphp
                        <div class="profile-image-img" style="
                            background-color: #E2EEF9;
                            color: #06414F;
                            display: flex; 
                            align-items: center; 
                            justify-content: center; 
                            font-size: 40px; 
                            font-weight: 700; 
                            letter-spacing: 1px;
                            overflow: hidden">
                            @if(Auth::user()->avatar)
                                <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Profile"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            @else
                                {{ strtoupper(substr(Auth::user()->first_name, 0, 1) . substr(Auth::user()->last_name, 0, 1)) }}
                            @endif

                        </div>



                    </div>

                    <h4>{{ $user->last_name }} {{ $user->first_name }}</h4>
                    <p>{{ $user->position }}</p>

                    <a href="{{ route('staff-edit.index') }}" class="btn">
                        <i class="fa-solid fa-user"></i>
                        <span>Personal Information</span>
                    </a>

                    <a href="{{ route('staff-setting.index') }}" class="btn">
                        <i class="fa-solid fa-lock"></i>
                        <span>Login & Password</span>
                    </a>


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
                        <a href="{{ route('staff-edit.index') }}" class="edit-btn" style="text-decoration: none">
                            <i class="fa-solid fa-arrow-left"></i>
                            Back
                        </a>

                    </div>

                    <!-- FORM -->
                    @if ($errors->any())
                        <div class="alert alert-danger" style="color: #DC2626; margin-bottom: 20px; font-size: 14px;">
                            <ul style="list-style: none; padding: 0;">
                                @foreach ($errors->all() as $error)
                                    <li><i class="fa-solid fa-circle-exclamation"></i> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('staff-setting.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">

                            <label>
                                Current Password <span class="required">*</span>
                            </label>

                            <div class="input-box">
                                <input type="password" name="current_password"
                                    placeholder="Enter your current password">
                            </div>

                        </div>

                        <div class="form-group">

                            <label>
                                New Password <span class="required">*</span>
                            </label>

                            <div class="input-box">
                                <input type="password" name="password" placeholder="Create a new password">
                            </div>

                        </div>

                        <div class="form-group">

                            <label>
                                Confirm New Password <span class="required">*</span>
                            </label>

                            <div class="input-box">
                                <input type="password" name="password_confirmation" placeholder="Re-enter new password">
                            </div>

                        </div>


                        <!-- BUTTONS -->

                        <div class="buttons">

                            <button type="submit" class="cancel-btn">
                                Cancel
                            </button>

                            <button type="submit" class="save-btn">
                                Save Changes
                            </button>

                        </div>
                    </form>
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

</x-layout>