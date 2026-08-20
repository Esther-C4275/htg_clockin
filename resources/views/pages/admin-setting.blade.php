<x-layout>

    <body>

        <!-- SIDEBAR -->
        <div class="sidebar">
            <div>
                <div class="logo">
                    <img src="{{ asset('images/Artboard 1 2.svg') }}" alt="">
                </div>

                <div class="menu">
                    <a href="{{ route('admin-dashboard.index') }}">
                        <i><img src="{{ asset('images/dash.svg') }}" alt=""></i>
                        Dashboard
                    </a>
                    <a href="{{ route('admin-employee.index') }}">
                        <i><img src="{{ asset('images/employee.svg') }}" alt=""></i>
                        Employees
                    </a>
                    <a href="{{ route('admin-attendance.index') }}">
                        <i><img src="{{ asset('images/attendance.svg') }}" alt=""></i>
                        Attendance
                    </a>
                    <a href="{{ route('admin-setting.index') }}" id="setting-link">
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
                    <span class="user-email-text">
                        {{ $user->email }}
                    </span>
                </div>

                <a href="{{ route('admin-setting.index') }}" class="setting-links">
                    <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
                    <span>Settings</span>
                </a>

                <x-adminlogout />
            </div>

            <button class="sidebar-close" id="sidebarClose">×</button>
        </div>

        <div class="sidebar-overlay" id="sidebarOverlay"></div>

        <!-- MAIN -->
        <div class="main">

            <!-- TOPBAR -->
            <div class="topbar">
                <div class="mobile-brand">
                    <img src="{{ asset('images/Artboard 1-1 2.svg') }}" class="mobile-logo" alt="HTG">
                    <button class="hamburger-btn" id="openSidebar">
                        <img src="{{ asset('images/breadcrumb.svg') }}">
                    </button>
                </div>

                <h2 class="desktop-title">Dashboard</h2>

                <div class="profile-top">
                    <div class="profile">
                        @php
                            $firstInitial = substr($user->first_name, 0, 1);
                            $lastInitial = substr($user->last_name, 0, 1);
                            $initials = strtoupper($firstInitial . $lastInitial);
                        @endphp
                        <div class="initials-pic">
                            {{ $initials }}
                        </div>
                        <div>
                            <h4>{{ $user->first_name }} {{$user->last_name }}</h4>
                            <p>Admin</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONTENT -->
            <div class="content">

                <!-- LEFT SETTINGS -->
                <div class="settings-card">

                    
                    <div class="mobile-profile-header">
                        @php
                            $firstInitial = substr($user->first_name, 0, 1);
                            $lastInitial = substr($user->last_name, 0, 1);
                            $initials = strtoupper($firstInitial . $lastInitial);
                        @endphp
                        <div class="mobile-avatar">
                            {{ $initials }}
                        </div>
                        <h4>{{ $user->first_name }} {{ $user->last_name }}</h4>
                        <p>Admin</p>
                    </div>

                    <h3>Settings</h3>
                    <p class="small-text">You can find all settings here</p>

                    <div class="settings-links">
                        <a href="{{ route('admin-setting.index') }}"
                           class="{{ request()->is('admin-setting*') ? 'active' : '' }}">
                            <i class="fa-solid fa-user"></i>
                            My Profile
                        </a>
                        <a href="{{ route('security.index') }}"
                           class="{{ request()->is('security-options*') ? 'active' : '' }}">
                            <i class="fa-solid fa-lock"></i>
                            Security Options
                        </a>
                        <a href="{{ route('index.add') }}"
                           class="{{ request()->is('add-admin*') ? 'active' : '' }}">
                            <i class="fa-solid fa-file-circle-plus"></i>
                            Add Admin
                        </a>
                    </div>
                </div>

                <!-- RIGHT SECTION -->
                <div class="right-section">

                    <!-- PROFILE INFO (desktop only) -->
                    <div class="card desktop-only">
                        <div class="card-header">
                            <h3>Profile Information</h3>
                            <a href="{{ route('admin-setting.edit', Auth::user()->id) }}">
                                <button type="submit" class="edit-btn primary">
                                    <i class="fa-solid fa-pen"></i>
                                    Edit
                                </button>
                            </a>
                        </div>
                        <div class="profile-info">
                            <div class="profile-user">
                                @php
                                    $firstInitial = substr($user->first_name, 0, 1);
                                    $lastInitial = substr($user->last_name, 0, 1);
                                    $initials = strtoupper($firstInitial . $lastInitial);
                                @endphp
                                <div class="initials">{{ $initials }}</div>
                                <div>
                                    <h4>{{ $user->first_name }} {{ $user->last_name }}</h4>
                                    <p>Admin</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- PERSONAL DETAILS -->
                    <div class="card">
                        <div class="card-header">
                            <h6>Personal Details</h6>
                            <a href="{{ route('admin-setting.edit', Auth::user()->id) }}" class="mobile-edit">
                                <button type="button" class="edit-btn primary">
                                    <i class="fa-solid fa-pen"></i> Edit
                                </button>
                            </a>
                        </div>

                        <div class="details-grid">
                            <div class="detail-item">
                                <h5>First Name</h5>
                                <p>{{ $user->first_name }}</p>
                            </div>
                            <div class="detail-item">
                                <h5>Last Name</h5>
                                <p>{{ $user->last_name }}</p>
                            </div>
                            <div class="detail-item">
                                <h5>Email Address</h5>
                                <p>{{ $user->email }}</p>
                            </div>
                            <div class="detail-item">
                                <h5>Phone</h5>
                                <p>+{{ $user->phone }}</p>
                            </div>
                            <div class="detail-item">
                                <h5>Position</h5>
                                <p>{{ $user->position}}</p>
                            </div>
                            <div class="detail-item">
                                <h5>Gender</h5>
                                <p>{{ $user->gender }}</p>
                            </div>
                            <div class="detail-item">
                                <h5>Date of Birth</h5>
                                <p>{{ $user->date_of_birth}}</p>
                            </div>
                        </div>
                    </div>

                    <!-- ADDRESS -->
                    <div class="card">
                        <div class="card-header">
                            <h3>Address</h3>
                        </div>
                        <div class="details-grid">
                            <div class="detail-item">
                                <h5>Country</h5>
                                <p>{{ $user->country }}</p>
                            </div>
                            <div class="detail-item">
                                <h5>City/State</h5>
                                <p>{{ $user->state }}</p>
                            </div>
                            <div class="detail-item full-width">
                                <h5>Residential Address</h5>
                                <p>{{ $user->address }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script>
            const sidebar  = document.querySelector('.sidebar');
            const overlay  = document.getElementById('sidebarOverlay');
            const openBtn  = document.getElementById('openSidebar');
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

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Inter', sans-serif;
            }

            main {
                background: white;
                display: flex;
                width: 100%;
            }

            /* SIDEBAR */
            .sidebar {
                width: 260px;
                height: 100vh;
                background: #06414F;
                padding: 35px 20px;
                position: fixed;
                top: 0;
                left: 0;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            .sidebar-close { display: none; }

            .logo img { width: 80px; }

            .menu {
                margin-top: 36px;
                display: flex;
                flex-direction: column;
                gap: 5px;
                margin-left: -18px;
            }

            .menu a,
            .bottom-menu a {
                text-decoration: none;
                color: #B7B7B7;
                padding: 14px 16px;
                width: 100%;
                border-radius: 8px;
                display: flex;
                align-items: center;
                gap: 12px;
                transition: 0.3s;
                font-size: 16px;
            }

            #setting-link{
                display: none;
            }

            .menu a:hover,
            .bottom-menu a:hover {
                background: #fff;
                color: #06414F;
            }

            .bottom-menu {
                display: flex;
                flex-direction: column;
            }

            .setting-links {
                display: flex;
                align-items: center;
                text-align: center;
                text-decoration: none;
                padding: 14px;
                color: #B7B7B7;
                gap: 8px;
                font-size: 18px;
                font-weight: 500;
                border-radius: 8px;
            }

            .setting-links:hover {
                background-color: #ffffff;
                color: #06414F;
            }

            .setting-link { display: none; }

            .hamburger-btn {
                display: none;
                background: transparent;
                border: none;
                font-size: 24px;
                cursor: pointer;
            }

            .mobile-brand { display: none; }
            .user-email { display: none; }

            /* MAIN CONTENT */
            .main {
                margin-left: 260px;
                width: 100%;
                padding: 30px;
            }

            /* TOPBAR */
            .topbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 35px;
            }

            .topbar h2 {
                font-weight: 600;
                font-size: 24px;
                line-height: 100%;
            }

            .profile-top {
                display: flex;
                align-items: center;
                gap: 18px;
            }

            .profile {
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .profile h4 {
                font-weight: 600;
                font-size: 14px;
                margin-bottom: 4px;
            }

            .profile p {
                font-weight: 500;
                font-size: 12px;
                color: #5E5D5D;
            }

            /* CONTENT AREA */
            .content {
                display: grid;
                grid-template-columns: 260px minmax(0, 1fr);
                gap: 25px;
                width: 100%;
            }

            /* LEFT SETTINGS */
            .settings-card {
                border: 1px solid #EDEDED;
                border-radius: 8px;
                padding: 20px;
            }

            .settings-card h3 {
                font-size: 18px;
                margin-bottom: 8px;
                font-weight: 600;
            }

            .settings-card .small-text {
                color: #616060;
                font-size: 12px;
                margin-bottom: 45px;
            }

            .settings-links {
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

            .settings-links a {
                text-decoration: none;
                color: #BCBCBC;
                display: flex;
                align-items: center;
                gap: 12px;
                font-size: 14px;
                transition: 0.3s;
                font-weight: 600;
            }

            .settings-links a:hover,
            .settings-links a.active {
                color: #03343b;
            }

            /* RIGHT CONTENT */
            .right-section {
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

            .card {
                border: 1px solid #EDEDED;
                border-radius: 8px;
                padding: 25px;
                width: 100%;
            }

            .card-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 25px;
            }

            .card-header h6 {
                font-weight: 600;
                font-size: 16px;
            }

            .edit-btn {
                border: 1px solid #EDEDED !important;
                color: #494848;
                background-color: #FFFFFF;
                padding: 10px 16px;
                border-radius: 8px;
                cursor: pointer;
                font-size: 14px;
            }

            .edit-btn.primary { border: none; }

            .edit-btn:hover {
                background-color: #06414F;
                color: #FFFFFF;
            }

            .profile-info {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .profile-user {
                display: flex;
                align-items: center;
                gap: 14px;
            }

            .profile-user h4 {
                font-size: 18px;
                margin-bottom: 5px;
            }

            .profile-user p {
                color: #BCBCBC;
                font-size: 14px;
            }

            .details-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 35px;
            }

            .detail-item h5 {
                font-size: 13px;
                margin-bottom: 10px;
                font-weight: 500;
            }

            .detail-item p {
                font-size: 15px;
                font-weight: 600;
            }

            .full-width { grid-column: 1 / -1; }

            .initials,
            .initials-pic {
                width: 60px;
                height: 60px;
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

            .initials-pic {
                width: 50px;
                height: 50px;
            }

            /* Hidden on desktop */
            .mobile-profile-header { display: none; }
            .mobile-edit { display: none; }
            .desktop-only { display: block; }

            /* ========== MOBILE (matches Figma) ========== */
            @media (max-width: 768px) {

                body { background: #ffffff; }

                /* Sidebar */
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

                .sidebar.active { left: 0; }

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


                .menu {
                    margin-left: -20px
                }

                .bottom-menu{
                    margin-left: -20px
                }

                .bottom-menu a {
                    display: none;
                }

                .sidebar-overlay.active { display: block; }

                /* .setting-links { display: none; } */

                #setting-link {
                    display: flex;
                    align-items: center;
                    justify-content: flex-start;
                    text-align: left;
                    padding: 12px;
                    gap: 10px;
                    width: 100%;
                    text-decoration: none;
                    font-size: 18px;
                    color: #b7b7b7;
                    border-radius: 8px;
                }

                #setting-link i {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    width: 30px;
                    height: 20px;
                    flex-shrink: 0;
                }

                #setting-link i img {
                    width: 100%;
                    height: 100%;
                    object-fit: contain;
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

                /* Main */
                .main {
                    margin-left: 0;
                    padding: 16px 16px 40px;
                    width: 100%;
                }

               
                .topbar {
                    margin-bottom: 20px;
                    padding: 0;
                }

                .desktop-title,
                .profile-top {
                    display: none !important;
                }

                .mobile-brand {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    width: 100%;
                    margin-bottom: 0;
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

                /* Content becomes single column */
                .content {
                    display: flex;
                    flex-direction: column;
                    gap: 20px;
                }

                /* Settings card – Figma style */
                .settings-card {
                    border: none;
                    padding: 0;
                    background: transparent;
                }

                .mobile-profile-header {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    text-align: center;
                    margin-bottom: 28px;
                }

                .mobile-avatar {
                    width: 72px;
                    height: 72px;
                    background-color: #E2EEF9;
                    color: #06414F;
                    font-weight: 700;
                    font-size: 22px;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #C5DCF2;
                    margin-bottom: 12px;
                }

                .mobile-profile-header h4 {
                    font-size: 18px;
                    font-weight: 600;
                    margin-bottom: 4px;
                    color: #111;
                }

                .mobile-profile-header p {
                    font-size: 14px;
                    color: #6B7280;
                }

                .settings-card h3 {
                    font-size: 16px;
                    margin-bottom: 4px;
                }

                .settings-card .small-text {
                    margin-bottom: 16px;
                    font-size: 13px;
                }

                
                .settings-links {
                    flex-direction: row;
                    gap: 9px;
                    /* overflow-x: auto; */
                    padding: 7px;
                    margin-bottom: 8px;
                    /* background-color: #F9F9FB; */
                    border-radius: 22px;
                    width: 322px;
                    
                }

                .settings-links a {
                    flex-shrink: 0;
                    padding: 10px;
                    border-radius: 999px;
                    background: #F9F9FB;
                    color: black !important;
                    font-size: 10px;
                    font-weight: 500;
                    gap: 6px;
                    white-space: nowrap;
                    width: 113px;
                }

                .settings-links a.active {
                    background: #06414F !important;
                    color: #fff !important;
                }

                .settings-links a i {
                    font-size: 12px;
                }

               
                .desktop-only { 
                    display: none !important; 
                }

                /* Cards */
                .card {
                    padding: 20px 16px;
                    border-radius: 12px;
                }

                .card-header {
                    margin-bottom: 20px;
                }

                .mobile-edit { display: block; }

                .details-grid {
                    grid-template-columns: 1fr 1fr;
                    gap: 20px 16px;
                }

                .detail-item h5 {
                    font-size: 12px;
                    color: #6B7280;
                    margin-bottom: 6px;
                }

                .detail-item p {
                    font-size: 14px;
                }

                .menu a{
                    font-size: 18px;
                }
            }
        </style>
</x-layout>