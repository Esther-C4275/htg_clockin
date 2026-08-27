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

        .container {
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

        .setting-links {
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

        .setting-links:hover {
            background-color: #ffffff;
            color: #06414F;
        }

        .setting-link {
            display: none;
        }

        .footer-nav {
            margin-top: auto;
            padding-top: 16px;
        }

        /* Main Content */
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
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 24px;
            line-height: 100%;
            letter-spacing: 0px;
            text-align: center;

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

        /* Layout */
        .content-wrapper {
            display: flex;
            gap: 20px;
        }

        /* Profile Card */
        .profile-card {
            width: 250px;
            border: 1px solid #EBEBEB;
            border-radius: 8px;
            padding: 25px 20px;
            text-align: center;
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
            margin: 5px auto;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        a.btn:hover,
        a.btn:hover span,
        a.btn:hover i,
        a.btn:hover fa-solid {
            color: #ffffff !important;

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




        /* Details */
        .details-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;

        }

        .card {
            background: #fff;
            border: 1px solid #e8e8e8;
            border-radius: 10px;
            padding: 35px;
            height: 400px;
        }

        .card-address-card {
            background: #fff;
            border: 1px solid #e8e8e8;
            border-radius: 10px;
            padding: 35px;
            height: 250px;
        }

        .card-address-card h3 {
            margin-top: -10px;
            font-weight: 600;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .card-header a:hover {
            color: whitesmoke
        }

        .card-header h3 {
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .edit-btn {
            border: 1px solid #EDEDED;
            background-color: white;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .edit-btn:hover {
            background-color: #76ABB8;
            color: #ffffff !important;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .details-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .details-grid label,
        .address-grid label {
            display: block;
            margin-bottom: 8px;
            font-weight: 400;
            font-style: Regular;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .details-grid h5,
        .address-grid h5 {
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        /* Address */
        .address-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-top: 25px;
        }

        .full-width {
            grid-column: 1 / -1;
        }

        .both-btns {
            display: none;
        }

        /* Responsive */
        @media(max-width:768px) {

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
                height: 100dvh;
                background: #06414F;
                padding: 24px 20px calc(24px + env(safe-area-inset-bottom, 0px)) 20px;
                z-index: 2000;
                transition: left .3s ease;
                border-top-right-radius: 40px;
                border-bottom-right-radius: 40px;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                box-sizing: border-box;
                overflow: hidden;
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
                margin-bottom: -2px;
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
                margin-left: -3px;
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
                margin-top: -50px;
                margin-right: -355px;
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

            .profile-top {
                display: none;
            }

            .main-content {
                margin-left: 0;
                padding: 16px;
            }

            .topbar {
                display: none;
                /* Hide Desktop Header on Mobile */
            }

            .content-wrapper {
                flex-direction: column;
                gap: 15px;
            }

            /* Profile Card Mobile Stack */
            .profile-card {
                width: 100%;
                border: none;
                padding: 10px 0;
                margin-bottom: 5px;
            }

            .profile-image-img {
                width: 90px;
                height: 90px;
                margin-left: 17px;
            }


            .profile-card .btn {
                width: 48%;
                height: 38px;
                margin: 0;
                justify-content: center;
                border-radius: 8px;
                font-size: 12px;
                background-color: transparent;
                color: #8C8C8C !important;
            }

            .profile-card .btn i {
                display: none;
            }

            .profile-card .btn:first-of-type {

                color: #8C8C8C !important;
            }

            .profile-card .btn:first-of-type:hover {
                background-color: #06414F;
                color: #ffffff;
            }


            .card,
            .card-address-card {
                height: auto;
                padding: 20px;
            }

            .details-grid,
            .address-grid {
                gap: 18px;
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

            .btn {
                display: none;
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

        <div class="container">
            <aside class="sidebar">
                <div class="brand-section">
                    <div class="logo">
                        <a href="{{ route('index.staff') }}" class="logo-link">
                            <img src="{{ asset('images/Artboard 1 2.svg') }}" alt="Home">
                        </a>
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

                                <span class="user-email-text" title="{{ $user->email }}">
                                    {{ $user->email }}
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('staff-edit.index') }}" class="setting-links">
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
            <!-- Main Content -->
            <main class="main-content">
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

                <!-- Header -->
                <header class="topbar">
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
                                @endphp
                                <div class="user-initials">{{ $firstInitial }}</div>
                            @endif

                        </span>
                    </div>
                </header>

                <!-- Content -->
                <div class="content-wrapper">

                    <!-- Left Card -->
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

                        <h4>{{ $user->first_name }} {{ $user->last_name }}</h4>
                        <p>{{ $user->position }}</p>


                        <a href="{{ route('staff-edit.index') }}" class="btn"
                            style="text-decoration: none;color: #06414F">
                            <i class="fa-solid fa-user"></i>
                            <span>Personal Information</span>
                        </a>

                        <a href="{{ route('staff-setting.index') }}" class="btn"
                            style="text-decoration: none;color: #06414F">
                            <i class="fa-solid fa-lock"></i>
                            <span>Login & Password</span>
                        </a>

                        <div class="both-btns">
                            <a href="{{ route('staff-edit.index') }}" class="active">
                                <span>Personal Information</span>
                            </a>

                            <a href="{{ route('staff-setting.index') }}">
                                <span>Login & Password</span>
                            </a>
                        </div>

                    </div>



                    <!-- Right Section -->
                    <div class="details-section">

                        <!-- Personal Details -->
                        <div class="card">
                            <div class="card-header">
                                <h3>Personal Details</h3>

                                <a href="{{ route('staff-edit.edit', $user->uuid) }}" class="edit-btn"
                                    style="text-decoration: none; font-size: 13px; color: black;">
                                    <i><img src="{{ asset('images/editicon.png') }}" alt=""></i>
                                    Edit
                                </a>
                            </div>

                            <div class="details-grid">

                                <div>
                                    <label>First Name</label>
                                    <h5>{{ $user->first_name }}</h5>
                                </div>

                                <div>
                                    <label>Last Name</label>
                                    <h5>{{ $user->last_name }}</h5>
                                </div>

                                <div>
                                    <label>Email Address</label>
                                    <h5>{{ $user->email }}</h5>
                                </div>

                                <div>
                                    <label>Phone</label>
                                    <h5>{{ $user->phone }}</h5>
                                </div>

                                <div>
                                    <label>Position</label>
                                    <h5>{{ $user->position}}</h5>
                                </div>

                                <div>
                                    <label>Gender</label>
                                    <h5>{{ $user->gender }}</h5>
                                </div>

                                <div>
                                    <label>Date of Birth</label>
                                    <h5>{{ $user->date_of_birth}}</h5>
                                </div>

                            </div>
                        </div>

                        <!-- Address -->
                        <div class="card-address-card">
                            <h3>Address</h3>

                            <div class="address-grid">
                                <div>
                                    <label>Country</label>
                                    <h5>{{ $user->country }}</h5>
                                </div>

                                <div>
                                    <label>City/State</label>
                                    <h5>{{ $user->state }}</h5>
                                </div>

                                <div class="full-width">
                                    <label>Residential Address</label>
                                    <h5>{{ $user->address }}</h5>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </main>

        </div>

    </body>

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