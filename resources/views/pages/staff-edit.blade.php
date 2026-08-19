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

        .sidebar-close {
            display: none;
        }


        .setting-link {
            display: none;
        }

        .user-email {
            display: none;
        }

        .hamburger-btn {
            display: none;
            background: transparent;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }

        .mobile-brand {
            display: none;
        }

        .logo {
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


        .nav-links {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            text-decoration: none;
            padding: 10px;
            color: #B7B7B7;
            gap: 8px;
            text-decoration: none;
            font-size: 18px;
            font-weight: 500;
            border-radius: 8px;
            padding-right: 91px;
        }

        .nav-links .icon {
            margin-right: 12px;
        }

        .nav-links:hover {
            background-color: #ffffff;
            color: #06414F;
            /* font-weight: 700; */
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
            font-size: 24px;
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
            margin-top: 50px;
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

        ..profile-card .btn{
            display:none;
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

        .both-btns{
            display: none;
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



        /* =====================================================
   SIDEBAR
   Hide desktop sidebar on mobile
===================================================== */

        @media (max-width:390px) {

            .grid-column-right {
                display: grid;
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 20px;
                width: 100%;
            }

            .progress-widget-card,
            .attendance-analytics-card {
                width: 100%;
            }
        }

        @media (max-width: 768px) {

            body {
                background: #ffffff;
            }

            .dashboard-container {
                display: block;
                width: 100%;
                height: auto;
                position: relative;
            }

            /* ===== Sidebar ===== */
            .sidebar {
                position: fixed;
                top: 0;
                left: -100%;
                width: 78%;
                max-width: 300px;
                height: 100vh;
                background: #06414F;
                padding: 24px 20px;
                z-index: 2000;
                transition: left .3s ease;
                border-top-right-radius: 40px;
                border-bottom-right-radius: 40px;
            }

            .sidebar.active {
                left: 0;
            }

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

            .sidebar-overlay {
                display: none;
                position: fixed;
                inset: 0;
                background: #06414F80;
                backdrop-filter: blur(5px);
                -webkit-backdrop-filter: blur(3px);
                z-index: 1500;
            }


            .sidebar-overlay.active {
                display: block;
            }


            .brand-section {
                padding: 0 0 28px 0;
            }

            .menu-links {
                height: calc(100% - 90px);
            }

            .logo{
                margin-left: -6px; 
            }

            .nav-list {
                padding: 3px;
                gap: 10px;
                margin-left: -6px;
            }

            .nav-link {
                padding: 14px 16px;
                font-size: 18px;
                border-radius: 12px;
            }

            .nav-link.active {
                background: #ffffff;
                color: #06414F;
            }

            .setting-links {
                display: none;
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
                font-weight: 500;
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

            .nav-links {
                display: none;
            }


            .user-email {
                display: flex;
                align-items: center;
                gap: 12px;
                padding: 10px 12px;
                margin-bottom: 8px;
                width: 100%;
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



            .footer-nav {
                display: block;
                margin-top: auto;
                padding-top: 18px;

            }


            /* =====================================================
   MAIN CONTENT
===================================================== */

            .main-content {
                width: 100%;
                min-height: 100vh;

                margin-left: 0;

                padding: 14px 8px 30px;

                box-sizing: border-box;
            }


            /* =====================================================
   MOBILE HAMBURGER
===================================================== */

            .mobile-brand {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 8px;
            }


            .mobile-brand img {
                width: 60px;
                height: 26px;
                display: block;
            }

            .hamburger-btn {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 36px;
                height: 36px;
                padding: 0;
                border: none;
                background: none;
            }

            .hamburger-btn i {
                font-size: 22px;
                color: #111827;
            }


            /* =====================================================
   TOPBAR
===================================================== */

            .topbar {
                display: block;
                margin-bottom: 20px;
            }

            .topbar h2 {
                display: none;
            }


            .profile-top {
                display: none;
            }


            .both-btns {
                display: flex;
                width: 100%;
                border: 1px solid #ddd;
                border-radius: 8px;
                overflow: hidden;
                margin-bottom: 20px;
            }

            .both-btns a {
                flex: 1;
                padding: 12px 10px;
                text-align: center;
                text-decoration: none;
                background: #fff;
                color: #c4c4c4;
            }

            .both-btns a.active {
                background: #064d59;
                color: #fff;
            }

            .both-btns a span {
                color: inherit;
            }

            .profile-card .btn i.fa-lock {
                display: none;
            }

            .profile-card .btn i.fa-user{
                display: none;
            }

            .btn:hover{
                display: none;
            }


            /* =====================================================
   CONTENT
===================================================== */

            .content-wrapper {
                width: 100%;

                display: flex;

                flex-direction: column;

                gap: 0;

                margin: 0;
            }


            /* =====================================================
   PROFILE CARD
===================================================== */

            .profile-card {
                width: 100%;

                border: none;

                border-radius: 0;

                padding: 18px 0 0;

                text-align: center;

                box-sizing: border-box;

                order: 1;
            }


            /* =====================================================
   PROFILE IMAGE
===================================================== */

            .profile-image {
                width: 72px;
                height: 72px;

                margin: 0 auto;

                position: relative;
            }


            .profile-image-img {
                width: 72px;
                height: 72px;
                margin-left: 17px;

                border-radius: 50%;

                object-fit: cover;

                display: block;
            }


            /* =====================================================
   EDIT ICON
===================================================== */

            .edit-icon {
                position: absolute;
                right: -2px;
                bottom: 0;
                width: 22px;
                height: 22px;
                padding: 0;
                background: #06414F;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
            }


            /* =====================================================
   NAME
===================================================== */

            .profile-card h4 {
                margin: 8px 0 3px;

                font-size: 12px;

                line-height: 1.2;

                font-weight: 600;

                text-align: center;
            }


            .profile-card p {
                margin: 0 0 16px;

                font-size: 9px;

                line-height: 1.2;

                color: #616161;

                text-align: center;
            }


            /* =====================================================
   PROFILE TABS
===================================================== */

            .profile-card .edit-icon {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                margin: 0;
                border-radius: 3px;
                text-align: center;
                box-sizing: border-box;
                width: 30px;
                height: 30px;
                opacity: 1;
                gap: 10px;
                border-radius: 100px;
                padding: 5px;
                margin-right: -7px;

            }


            .profile-card .edit-icon i {
                font-size: 9px;
                font-weight: 500;
                white-space: nowrap;
                width: 8.5px;
                height: 8.085786819458008px;
                opacity: 1;
                border-width: 1px;
                width: 8.5;
                border: 1px solid #FFFFFF;
            }


            .profile-card .edit-icon span {

                display: none;

            }

            .btn span{
                display: none;
            } 

        


            .profile-card .btn:first-of-type {
                /* background: #06414F; */

                color: #CCCBCB;

                border-color: #CCCBCB;
            }


            .profile-card .btns:first-of-type span {
                color: #CCCBCB;
            }


            .profile-card .btns:last-of-type {
                color: #CCCBCB;

                margin-left: 4px;
            }
            /* .btns:hover{
                color: #FFFFFF;
                background-color: #06414F;
            } */


            /* =====================================================
   FORM SECTION
===================================================== */

            .form-section {
                width: 100%;

                flex: none;

                border: none;

                border-radius: 0;

                padding: 18px 0 0;

                background: #ffffff;

                box-sizing: border-box;

                order: 2;
                margin-top: -410px;
            }


            .form-section h3 {
                display: none;
            }



            /* =====================================================
   FORM GRID
===================================================== */

            .form-grid {
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 12px 8px;
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
                margin-bottom: 5px;

                font-size: 10px;

                line-height: 1.2;

                font-weight: 400;
            }


            .form-group input {
                width: 100%;
                height: 33px;

                padding: 0 7px;

                border: 1px solid #D3D3D4;

                border-radius: 3px;

                font-family: "Inter", sans-serif;

                font-size: 12px;

                font-weight: 400;

                box-sizing: border-box;

                outline: none;
            }


            .form-group input:focus {
                border-color: #06414F;
            }


            /* =====================================================
   FULL-WIDTH FIELDS
   
   Email, Address should span both columns
===================================================== */

            .form-group:nth-child(3),
            .form-group:nth-child(7) {
                grid-column: 1 / -1;
            }


            /* =====================================================
   BUTTONS
===================================================== */

            .button-group {
                width: 100%;

                display: grid;

                grid-template-columns: 1fr 1fr;

                gap: 8px;

                margin-top: 18px;
            }


            .save-btn {
                width: 100%;

                height: 34px;

                padding: 0;

                border-radius: 3px;

                font-family: "Inter", sans-serif;

                font-size: 9px;

                font-weight: 500;
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
                        <li>
                            <a href="{{ route('staff-edit.index') }}" class="setting-link">
                                <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
                                <span>Settings</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav-list footer-nav">
                        <li>
                            <div class="user-email" style="color: #B7B7B7">
                                @php
                                    $firstInitial = strtoupper(substr($user->first_name, 0, 1));
                                @endphp

                                <div class="profile-pic">
                                    @if($user->avatar)
                                        <img src="{{ asset('storage/' . $user->avatar) }}" alt="Profile"
                                            style="width: 100%; height: 100%; object-fit: cover; border-radius: 100%;">
                                    @else
                                        <span>{{ $firstInitial }}</span>
                                    @endif
                                </div>

                                <span class="user-email-text">
                                    {{ $user->email }}
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('staff-edit.index') }}" class="nav-links">
                                <i><img src="{{ asset('images/setting.svg') }}" alt=""></i> Settings
                            </a>
                        </li>
                        <li>
                            <x-logout />
                        </li>
                    </ul>
                </nav>

                <button class="sidebar-close" id="sidebarClose">
                    ×
                </button>
            </aside>

            <div class="sidebar-overlay" id="sidebarOverlay"></div>


            <!-- Main -->
            <main class="main-content">

                <!-- Topbar -->
                <div class="topbar">
                    <div class="mobile-brand">
                        <img src="{{ asset('images/Artboard 1-1 2.svg') }}" class="mobile-logo" alt="HTG">

                        <button class="hamburger-btn" id="openSidebar">
                            <img src="{{ asset('images/breadcrumb.svg') }}">
                            {{-- <i class="fa-solid fa-align-right"></i> --}}
                        </button>
                    </div>
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
                                     margin-left:17px;
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

                            <div class="both-btns">
                                <a href="{{ route('staff-edit.index') }}" class="active">
                                    <span>Personal Information</span>
                                </a>
                            
                                <a href="{{ route('staff-setting.index') }}">
                                    <span>Login & Password</span>
                                </a>
                            </div>
                            <div class="both-btn">
                                <a href="{{ route('staff-edit.index') }}" class="btn">
                                    <i class="fa-solid fa-user"></i>
                                    <span>Personal Information</span>
                                </a>
    
                                <a href="{{ route('staff-setting.index') }}" class="btn">
                                    <i class="fa-solid fa-lock"></i>
                                    <span>Login & Password</span>
                                </a>
                            </div>


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

        <script>
            const sidebar = document.querySelector('.sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            const openBtn = document.getElementById('openSidebar');
            const closeBtn = document.getElementById("sidebarClose");

            openBtn?.addEventListener('click', () => {
                sidebar?.classList.add('active');
                overlay?.classList.add('active');
            });

            overlay?.addEventListener('click', () => {
                sidebar?.classList.remove('active');
                overlay?.classList.remove('active');
            });

            closeBtn?.addEventListener('click', () => {
                sidebar?.classList.remove('active');
                overlay?.classList.remove('active');
            });
        </script>


</x-layout>