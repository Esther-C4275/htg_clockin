<x-layout>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: white;
        }

        .dashboard {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */

        .sidebar {
            width: 260px;
            background-color: #06414F;
            display: flex;
            flex-direction: column;
            padding: 20px 20px;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            height: 100vh;
            overflow: visible;
            z-index: 1000;
        }

        .logo{
            margin-left: -20px;
        }

        .brand-section {
            padding: 0 24px 48px 24px;
        }

        .menu-links {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            margin-left: -20px;
        }

        .nav-list {
            list-style-type: none;
            display: flex;
            flex-direction: column;
            gap: 8px;
            padding: 2px 13px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            text-align: center;
            text-decoration: none;
            padding: 14px;
            color: #B7B7B7;
            gap: 8px;
            text-decoration: none;
            font-size: 18px;
            font-weight: 500;
            border-radius: 8px;
        }

        .nav-link .icon {
            margin-right: 12px;
        }

        .nav-link:hover {
            background-color: #ffffff;
            color: #06414F;
            /* font-weight: 700; */
        }

        .footer-nav {
            margin-top: auto;
            padding-top: 16px;
        }

        /* Main */

        .main-content {
            flex: 1;
            padding: 20px;
            margin-left: 260px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .topbar h2 {
            font-size: 20px;
            font-weight: 700;
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

        .content-wrapper {
            display: flex;
            gap: 15px;
        }

        /* Profile Card */

        .profile-card {
            width: 250px;
            border: 1px solid #EBEBEB;
            border-radius: 8px;
            padding: 25px 20px;
            text-align: center;
            height: 600px
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
            right: -2px;
            padding: 7px;
            bottom: 5px;
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
            margin-top: 16px;
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

        /* Form Section */

        .form-section {
            flex: 1;
            background: #fff;
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            padding: 35px 20px;
        }

        .form-section h3 {
            margin-bottom: 20px;
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .gender-row {
            display: flex;
            gap: 100px;
            margin-bottom: 35px;
            appearance: none;
        }

        .gender-row input:checked {
            accent-color: #06414F;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px 24px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            margin-bottom: 8px;
            font-weight: 400;
            font-style: Regular;
            font-size: 14px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .form-group input {
            height: 42px;
            border: 1px solid #D3D3D4;
            border-radius: 4px;
            padding: 0 10px;
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;



        }

        .button-group {
            margin-top: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
        }



        .save-btn {
            height: 45px;
            color: #044A5B;
            border: none;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
            background-color: white;

            font-weight: 600;
            font-style: Semi Bold;
            font-size: 12px;
            line-height: 100%;
            border: 1px solid #06414F;
            letter-spacing: 0px;

        }

        .save-btn:hover {
            background-color: #06414F;
            color: white;
        }

        .muted-input {
            color: #A0AEC0 !important;
            font-weight: 200;
            border-color: #E2E8F0;

        }


        .muted-input:focus {
            color: #1A202C !important;
            font-weight: 500;
        }

        @media(max-width:900px) {

            .content-wrapper {
                flex-direction: column;
            }

            .profile-card {
                width: 100%;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .button-group {
                grid-template-columns: 1fr;
            }

            .sidebar {
                width: 220px;
            }
        }
    </style>
    </head>

    <body>

        <div class="dashboard">

            <!-- Sidebar -->
            <aside class="sidebar">
                <div class="brand-section">
                    <div class="logo">
                        <img src="{{ asset('images/Artboard 1 2.svg') }}" alt="">
                    </div>
                </div>

                <nav class="menu-links">
                    <ul class="nav-list">
                        <li>
                            <a href="{{ route('index.staff') }}" class="nav-link">
                                <i><img src="{{ asset('images/dash.svg') }}" alt=""></i> Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('index.frontId') }}" class="nav-link">
                                <i><img src="{{ asset('images/employee.svg') }}" alt=""></i> ID Card
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('index.registry') }}" class="nav-link">
                                <i><img src="{{ asset('images/attendance.svg') }}" alt=""></i> Registry
                            </a>
                        </li>
                    </ul>

                    <ul class="nav-list footer-nav">
                        <li>
                            <a href="{{ route('staff-edit.index') }}" class="nav-link">
                                <i><img src="{{ asset('images/setting.svg') }}" alt=""></i> Settings
                            </a>
                        </li>
                        <li>
                            <x-logout />
                        </li>
                    </ul>
                </nav>
            </aside>

            <!-- Main -->
            <main class="main-content">

                <!-- Topbar -->
                <div class="topbar">
                    <h2>Dashboard</h2>

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
                                    $initials = $firstInitial;
                                @endphp

                                <div>{{ $initials }}</div>
                            @endif
                        </span>
                    </div>
                </div>

                <!-- Content -->
                <div class="content-wrapper">
                    <form action="{{ route('avatar-update', $user->uuid) }}" method="POST" enctype="multipart/form-data"
                        id="avatarUploadForm">
                        @csrf
                        @method('PUT')

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

                                    @if($user->avatar)
                                        <img src="{{ asset('storage/' . $user->avatar) }}" alt="Profile"
                                            style="width: 100%; height: 100%; object-fit: cover;">
                                    @else
                                        {{ $initials }}
                                    @endif
                                </div>


                                <label for="avatar_hidden_input" style="cursor: pointer; margin: 0; padding: 0;">

                                    <i><img class="edit-icon" src="{{ asset('images/moon.png') }}" alt=""></i>
                                    <input type="file" id="avatar_hidden_input" name="avatar" accept="image/*"
                                        onchange="document.getElementById('avatarUploadForm').submit();"
                                        style="display: none;">
                                </label>
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
                    </form>

                    <!-- Form Section -->
                    <div class="form-section">

                        <h3>Personal Information</h3>
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
                        <!-- Gender -->


                        <form method="POST" action="{{ route('staff-edit.update', $user->uuid) }}">
                            @method('PUT')
                            @csrf

                            <div class="form-grid">

                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" class="muted-input"
                                        value="{{ $user->first_name }}">
                                </div>

                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" class="muted-input"
                                        value="{{ $user->last_name }}">
                                </div>

                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" name="email" class="muted-input" value="{{ $user->email }}">
                                </div>

                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" name="phone" class="muted-input" value="{{ $user->phone }}">
                                </div>

                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text" name="company" class="muted-input" value="{{ $user->company }}">
                                </div>

                                <div class="form-group">
                                    <label>Role/Position</label>
                                    <input type="text" name="position" class="muted-input"
                                        value="{{ $user->position }}">
                                </div>

                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" class="muted-input" value="{{ $user->address }}">
                                </div>

                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="text" name="date_of_birth" class="muted-input"
                                        value="{{ $user->date_of_birth }}">
                                </div>

                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" name="country" class="muted-input" value="{{ $user->country }}">
                                </div>

                                <div class="form-group">
                                    <label>City/State</label>
                                    <input type="text" name="state" class="muted-input" value="{{ $user->state }}">
                                </div>

                            </div>

                            <div class="button-group">
                                <a href="{{ route('staff-edit.index') }}" class="save-btn"
                                    style="text-decoration: none; display: inline-flex; align-items: center; justify-content: center;">
                                    Discard Changes
                                </a>
                                <button type="submit" class="save-btn">
                                    Save Changes
                                </button>
                            </div>

                        </form>

                    </div>

                </div>

            </main>

        </div>


</x-layout>