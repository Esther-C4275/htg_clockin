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
            overflow-x: hidden;
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

        .sidebar-close {
            display: none;
        }


        .logo {
            margin-left: 1px;
        }

        .menu,
        .bottom-menu {
            display: flex;
            flex-direction: column;
            margin-left: -18px;

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

        .setting-link {
            display: none !important;
        }

        .menu a:hover,
        .bottom-menu a:hover {
            background: #ffffff;
            color: #06414F;
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

        .user-email {
            display: none;
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
            font-size: 22px;
            margin-left: -700px;
            font-weight: 700;
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
            /* Fixed profile card, flexible right column */
            gap: 20px;
            width: 100%;

        }

        /* Profile Card */

        .profile-card {
            width: 250px;
            border: 1px solid #EBEBEB;
            border-radius: 8px;
            padding: 25px 20px;
            text-align: center;
            margin-left: 20px;
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

        .both-btns {
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


        /* RIGHT CONTENT */

        .right-content {
            background: #fff;
            border: 1px solid #e6e6e6;
            border-radius: 12px;
            padding: 25px;
            margin-left: 9px;
            width: 99%;
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

            body {
                background: #ffffff;
                display: block;
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

            .menu a.setting-link {
                display: flex !important;
                margin-left: -1px;
            }

            /* .setting-link i {
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
        line-height: 1 ;
    }

    .setting-links{
        display:none;
    } */

            .mobile-brand {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 8px;
            }



            .mobile-brand img {
                width: 68px;
                height: 30px;
                display: block;
            }

            .hamburger {
                display: flex;
                align-items: center;
                justify-content: center;
                margin-left: auto; 
                        }

            .hamburger-btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                min-width: 48px;
                min-height: 48px;
                padding: 12px;
                margin-top: -52px;
                margin-left: 356px;
                background: transparent;
                border: none;
                outline: none;
                cursor: pointer;
                -webkit-tap-highlight-color: transparent;
                touch-action: manipulation;
            }


            .hamburger-btn img {
                width: 24px;
                height: auto;
                display: block;
                pointer-events: none; 
            }


            .hamburger-btn:hover {
                opacity: 0.8;
            }


            /* =========================
       MAIN
       ========================= */

            .main {
                width: 100%;
                margin-left: 0;
                padding: 16px;

            }


            .topbar {
                display: block;
                margin-bottom: 20px;
            }

            .topbar h2,
            .top-profile {
                display: none;
            }


            /* =========================
       CONTENT
       ========================= */

            .content {
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 18px;
                margin: 0;
            }


            /* =========================
       PROFILE CARD
       ========================= */

            .profile-card {
                width: 100%;
                border: none;
                padding: 0;
                margin: 0;
                text-align: center;
                background: #ffffff;
            }

            .profile-image {
                width: 62px;
                height: 62px;
                margin: 0 auto 10px;
            }

            .profile-image-img {
                width: 62px;
                height: 62px;
                border-radius: 50%;
                object-fit: cover;
            }

            .edit-icon {
                width: 20px;
                height: 20px;
                padding: 0;
                right: -2px;
                bottom: 0;
                font-size: 9px;
            }

            .profile-card h4 {
                margin: 0 0 5px;
                font-size: 12px;
                line-height: 1.2;
            }

            .profile-card p {
                margin: 0 0 22px;
                font-size: 10px;
                line-height: 1.2;
                color: #616161;
            }


            /* =========================
       PERSONAL INFO / LOGIN TABS
       ========================= */

            .profile-card .btn {
                width: 100%;
                height: 36px;
                display: inline-flex;
                align-items: center;
                justify-content: center;

                margin: 0;
                padding: 0 10px;

                border: 1px solid #D8D8D8;
                border-radius: 6px;

                background: #ffffff;
                color: #06414F;

                font-size: 11px;
                text-decoration: none;
            }

            .profile-card .btn+.btn {
                margin-left: -5px;
            }

            .profile-card .btn i {
                display: none;
            }

            .profile-card .btn:hover {
                background: #ffffff;
                color: #06414F;
            }


            /*
       The current page = Login & Password

       Only this page gets the teal active state.
    */

            .profile-card .btn[href*="staff-setting"] {
                background: #06414F;
                color: #ffffff;
                border-color: #06414F;
            }

            .profile-card .btn[href*="staff-edit"] {
                background: #ffffff;
                color: #B7B7B7;
                border-color: #D8D8D8;
            }

            .profile-card .btn[href*="staff-setting"] i,
            .profile-card .btn[href*="staff-edit"] i {
                color: inherit !important;
            }


            /* =========================
       RIGHT CONTENT
       ========================= */

            .right-content {
                width: 100%;
                margin: 0;
                padding: 0;
                border: none;
                border-radius: 0;
                background: #ffffff;
            }


            /* =========================
       HEADER
       ========================= */

            .section-header {
                width: 100%;
                display: flex;
                align-items: flex-start;
                justify-content: space-between;
                margin: 0 0 22px;
            }

            .section-header h3 {
                margin: 0 0 5px;
                font-size: 12px;
                line-height: 1.2;
            }

            .section-header p {
                max-width: 220px;
                margin: 0;
                color: #53555B;
                font-size: 9px;
                line-height: 1.35;
            }

            .edit-btn {
                flex-shrink: 0;
                width: 48px;
                height: 28px;

                display: flex;
                align-items: center;
                justify-content: center;
                gap: 4px;

                padding: 0;
                border: 1px solid #EDEDED;
                border-radius: 5px;

                background: #ffffff;
                color: #494848;

                font-size: 9px;
                text-decoration: none;
            }


            /* =========================
       FORM
       ========================= */

            .form-group {
                width: 100%;
                margin-bottom: 15px;
            }

            .form-group label {
                display: block;
                margin-bottom: 7px;
                font-size: 11px;
                font-weight: 600;
            }

            .required {
                color: #DC2626;
            }

            .input-box {
                width: 100%;
                position: relative;
            }

            .input-box input {
                width: 100%;
                height: 34px;

                padding: 8px 12px;

                border: 1px solid #D3D3D4;
                border-radius: 5px;

                background: #ffffff;

                font-family: 'Inter', sans-serif;
                font-size: 10px;
                color: #222222;
            }

            .input-box input::placeholder {
                color: #999999;
            }

            .input-box i {
                right: 11px;
                font-size: 11px;
            }


            /* =========================
       BUTTONS
       ========================= */

            .buttons {
                width: 100%;
                display: flex;
                justify-content: flex-end;
                gap: 7px;

                margin-top: 5px;
                margin-bottom: 40px;
            }

            .profile-card .btn {
                display: none;
            }

            .bottom-menu a {
                display: none;
            }

            .cancel-btn,
            .save-btn {
                height: 34px;
                border-radius: 5px;
                font-family: 'Inter', sans-serif;
                font-size: 10px;
                cursor: pointer;
            }

            .cancel-btn {
                min-width: 72px;
                padding: 0 12px;
                border: 1px solid #939191;
                background: #ffffff;
                color: #434343;
            }

            .save-btn {
                width: 100px;
                padding: 0 10px;
                border: 1px solid #06414F;
                background: #06414F;
                color: #ffffff;
            }

            .cancel-btn:hover {
                background: #ffffff;
                color: #434343;
            }

            .save-btn:hover {
                background: #06414F;
                color: #ffffff;
            }


            /* =========================
       SECURITY OPTIONS
       ========================= */

            .security-options {
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 25px;
            }

            .security-item {
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 15px;
            }

            .security-text {
                flex: 1;
                min-width: 0;
            }

            .security-text h4 {
                margin: 0 0 5px;
                font-size: 11px;
                line-height: 1.2;
            }

            .security-text p {
                max-width: 250px;
                margin: 0;
                font-size: 9px;
                line-height: 1.35;
                color: #454444;
            }


            /* =========================
       TOGGLE
       ========================= */

            .switch {
                flex-shrink: 0;
                width: 32px;
                height: 18px;
            }

            .slider {
                border-radius: 20px;
            }

            .slider::before {
                width: 12px;
                height: 12px;
                top: 3px;
                left: 3px;
            }

            .switch input:checked+.slider::before {
                transform: translateX(14px);
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

            .user-email-text {
                max-width: 157px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                display: block;
            }


        }
    </style>
    </head>

    <body>

        <!-- SIDEBAR -->

        <div class="sidebar">

            <div>

                <div class="logo">
                    <a href="{{ route('index.staff') }}" class="logo-link">
                        <img src="{{ asset('images/Artboard 1 2.svg') }}" alt="Home">
                    </a>
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
                    <a href="{{ route('staff-edit.index') }}" class="setting-link">
                        <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
                        <span>Settings</span>
                    </a>

                </div>

            </div>

            <div class="bottom-menu">

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

                    <span class="user-email-text" title="{{ $user->email }}">
                        {{ $user->email }}
                    </span>
                </div>

                <a href="{{ route('staff-edit.index') }}" class="setting-links">
                    <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
                    <span>Settings</span>
                </a>

                <x-logout />

            </div>
            <button class="sidebar-close" id="sidebarClose">
                ×
            </button>

        </div>

        <div class="sidebar-overlay" id="sidebarOverlay"></div>


        <!-- MAIN -->

        <div class="main">

            <!-- TOPBAR -->

            <div class="topbar">
                <div class="mobile-brand">
                    <a href="{{ route('index.staff') }}" class="mobile-logo-link">
                        <img src="{{ asset('images/Artboard 1-1 2.svg') }}" class="mobile-logo" alt="HTG">
                    </a>
                </div>
                <div class="hamburger">

                    <button class="hamburger-btn" id="openSidebar">
                        <img src="{{ asset('images/breadcrumb.svg') }}">
                        {{-- <i class="fa-solid fa-align-right"></i> --}}
                    </button>
                </div>

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

                    <div class="both-btns">
                        <a href="{{ route('staff-edit.index') }}">
                            <span>Personal Information</span>
                        </a>

                        <a href="{{ route('staff-setting.index') }}" class="active">
                            <span>Login & Password</span>
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