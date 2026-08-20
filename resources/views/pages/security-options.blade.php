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

       
        .sidebar {
            width: 260px;
            height: 100vh;
            background: #06414F;
            position: fixed;
            top: 0;
            left: 0;
            padding: 35px 18px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            z-index: 100;
        }

        .sidebar-close { 
            display: none;
         }

        .menu,
        .bottom-menu {
            display: flex;
            flex-direction: column;
        }

        .menu { 
            margin-top: 36px;
            margin-left: -20px;
        }

        .menu a,
        .bottom-menu a {
            text-decoration: none;
            color: #B7B7B7;
            padding: 16px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            font-size: 16px;
            transition: 0.3s;
            gap: 12px;
        }

        .menu a:hover,
        .bottom-menu a:hover {
            background: #ffffff;
            color: #06414F;
        }

        .setting-links {
            display: flex;
            align-items: center;
            text-decoration: none;
            padding: 14px;
            color: #B7B7B7;
            gap: 8px;
            font-size: 18px;
            font-weight: 500;
            border-radius: 8px;
            margin-left: -20px;
        }

        .setting-links:hover {
            background-color: #ffffff;
            color: #06414F;
        }

        #setting-link { 
            display: none;
         }

        .hamburger-btn { 
            display: none;
         }

        .mobile-brand {
             display: none; 
            }

        .user-email {
             display: none;
             }

       
        .main {
            width: 100%;
            margin-left: 260px;
            padding: 30px;
            min-height: 100vh;
            background: #fff;
        }

        
        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .topbar h2 {
            font-weight: 600;
            font-size: 24px;
            margin-left: 0;
        }

        .top-profile {
            display: flex;
            align-items: center;
            gap: 18px;
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
             font-size: 12px; color: #5E5D5D;
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

      
        .content {
            display: grid;
            grid-template-columns: 265px 1fr;
            gap: 24px;
        }

       
        .settings-panel {
            border: 1px solid #e6e6e6;
            border-radius: 8px;
            padding: 20px;
            width: 100%;
           
        }

        .settings-panel h3 {
            font-size: 18px;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .settings-panel > span {
            color: #616060;
            font-size: 12px;
        }

        .settings-links {
            margin-top: 32px;
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .settings-links a {
            text-decoration: none;
            color: #BCBCBC;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
            font-weight: 600;
            transition: 0.2s;
        }

        .settings-links a.active {
            color: #03343b;
        }

      
        .right-content {
            background: #fff;
            border: 1px solid #e6e6e6;
            border-radius: 12px;
            padding: 28px 32px;
        }

       
        .mobile-profile-header,
        .mobile-tabs {
            display: none;
        }

       
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 28px;
        }

        .section-header h3 {
            font-size: 18px;
            margin-bottom: 6px;
            font-weight: 600;
        }

        .section-header p {
            color: #53555B;
            font-size: 14px;
            line-height: 1.45;
        }

        .edit-btn {
            border: 1px solid #EDEDED;
            cursor: pointer;
            font-size: 13px;
            color: #494848;
            background: white;
            height: 32px;
            border-radius: 6px;
            padding: 0 12px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

       
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 15px;
            font-weight: 600;
            color: #111;
        }

        .required { color: #DC2626; }

        .input-box {
            position: relative;
        }

        .input-box input {
            border: 1px solid #D3D3D4;
            font-size: 14px;
            width: 100%;
            height: 44px;
            border-radius: 8px;
            padding: 0 44px 0 16px;
            outline: none;
            transition: border-color 0.2s;
        }

        .input-box input:focus {
            border-color: #06414F;
        }

        .input-box i {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #656565;
            cursor: pointer;
            font-size: 15px;
        }

       
        .buttons {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            margin-top: 8px;
            margin-bottom: 40px;
        }

        .cancel-btn,
        .save-btn {
            height: 42px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            padding: 0 20px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.2s;
        }

        .cancel-btn {
            border: 1px solid #939191;
            background: #fff;
            color: #434343;
        }

        .save-btn {
            border: 1px solid #06414F;
            background: #06414F;
            color: #fff;
            min-width: 130px;
        }

        .cancel-btn:hover {
            background: #f5f5f5;
        }

        .save-btn:hover {
            background: #05353f;
        }

        
        .security-options {
            display: flex;
            flex-direction: column;
            gap: 28px;
        }

        .security-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
        }

        .security-text h4 {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 4px;
            color: #111;
        }

        .security-text p {
            font-size: 13px;
            color: #53555B;
            line-height: 1.45;
            max-width: 420px;
        }

        /* TOGGLE */
        .switch {
            position: relative;
            width: 48px;
            height: 26px;
            flex-shrink: 0;
        }

        .switch input { display: none; }

        .slider {
            position: absolute;
            cursor: pointer;
            inset: 0;
            background: #E5E7EB;
            border-radius: 30px;
            transition: 0.25s;
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
            transition: 0.25s;
        }

        .switch input:checked + .slider {
            background: #06414F;
        }

        .switch input:checked + .slider::before {
            transform: translateX(22px);
            background: #fff;
        }

        .profile-links{
            display: none;
        }

      
        @media (max-width: 768px) {
            body { background: #fff; }

            .sidebar {
                position: fixed;
                top: 0;
                left: -100%;
                width: 78%;
                max-width: 300px;
                height: 100vh;
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
                top: 22px;
                right: 16px;
                width: 28px;
                height: 28px;
                align-items: center;
                justify-content: center;
                background: transparent;
                border: none;
                color: #fff;
                font-size: 22px;
                cursor: pointer;
            }

            .sidebar-overlay {
                display: none;
                position: fixed;
                inset: 0;
                background: #06414F80;
                backdrop-filter: blur(4px);
                z-index: 1500;
            }

            .sidebar-overlay.active { 
                display: block;
             }

            .setting-links { 
                display: none !important;
             }

            #setting-link {
                display: flex;
                align-items: center;
                gap: 14px;
                padding: 14px 12px;
                color: #b7b7b7;
                text-decoration: none;
                font-size: 18px;
                border-radius: 8px;
                margin-left: 3px;
            }

            .user-email {
                display: flex;
                align-items: center;
                gap: 12px;
                padding: 10px 12px;
                margin-bottom: 12px;
                color: #B7B7B7;
                margin-left: -20px;
            }

            .user-email .profile-pic {
                width: 36px;
                height: 36px;
                border-radius: 50%;
                background: #fff;
                color: #06414F;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: 700;
                font-size: 13px;
                overflow: hidden;
                flex-shrink: 0;
            }

            .user-email .profile-pic img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

           
            .main {
                margin-left: 0;
                padding: 0 20px 40px;
                width: 100%;
            }

            
            .topbar h2,
            .top-profile {
                display: none !important;
            }

            .mobile-brand {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 16px 0 8px;
                width: 100%;
            }

            .mobile-brand img {
                height: 28px;
                width: auto;
            }

            .hamburger-btn {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 40px;
                height: 40px;
                background: none;
                border: none;
                padding: 0;
            }

            .hamburger-btn img {
                width: 23px;
                height: 23px;
                margin-right: -22px;
            }

           
            .settings-panel {
                display: none !important;
            }

           
            .content {
                display: block;
                margin-top: 8px;
            }

            
            .mobile-profile-header {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                margin: 12px 0 24px;
            }

            .mobile-profile-header .avatar {
                width: 88px;
                height: 88px;
                border-radius: 50%;
                object-fit: cover;
                margin-bottom: 12px;
                border: 3px solid #f0f0f0;
            }

            .mobile-profile-header .avatar-fallback {
                width: 70px;
                height: 70px;
                border-radius: 50%;
                background: #E2EEF9;
                color: #06414F;
                font-weight: 700;
                font-size: 28px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 12px;
               
            }

            .mobile-profile-header h3 {
                font-size: 18px;
                font-weight: 600;
                color: #111;
                margin-bottom: 2px;
            }

            .mobile-profile-header p {
                font-size: 13px;
                color: #6B7280;
            }

            
            .mobile-tabs {
                display: flex;
                width: 100%;
                border-radius: 10px;
                padding: 0px;
                margin-bottom: 28px;
                border: 1px solid #06414F;
            }

            .mobile-tabs a {
                flex: 1;
                text-align: center;
                padding: 10px 8px;
                border-radius: 8px;
                font-size: 14px;
                font-weight: 500;
                text-decoration: none;
                color: #6B7280;
                transition: all 0.2s;
            }

            .mobile-tabs a.active {
                background: #06414F;
                color: #fff;
                box-shadow: 0 1px 3px rgba(0,0,0,0.12);
            }

            
            .right-content {
                border: none;
                border-radius: 0;
                padding: 0;
                margin: 0;
            }

            .section-header {
                margin-bottom: 24px;
            }

            .section-header h3 {
                font-size: 17px;
            }

            .section-header p {
                font-size: 13px;
            }

            .form-group label {
                font-size: 14px;
            }

            .input-box input {
                height: 46px;
                font-size: 15px;
                border-radius: 10px;
            }

            .buttons {
                justify-content: stretch;
                gap: 12px;
                margin-bottom: 36px;
            }

            .cancel-btn,
            .save-btn {
                flex: 1;
                height: 46px;
                border-radius: 10px;
                font-size: 15px;
            }

            .security-options {
                gap: 26px;
            }

            .security-text h4 {
                font-size: 15px;
            }

            .security-text p {
                font-size: 13px;
                max-width: none;
            }

            .menu{
                margin-left: -20px;
                
            }

            .menu a{
                font-size: 18px;
            }

            .profile-links {
                display: flex;
                gap: 9px;
                /* overflow-x: auto; */
                padding: 9px;
                margin-bottom: 21px;
                padding-top: 11px;
                padding-bottom: 14px;
               
                border-radius: 22px;
                width: 322px;
                list-style-type: none;
                margin-left: 1px;
            }

            .profile-links li {
                margin: 0;
                flex-shrink: 0;
            }

            .profile-links a {
                padding: 10px 16px;
                border-radius: 999px;
                background-color: #F9F9FB;
                color: black !important;
                font-size: 10px;
                font-weight: 500;
                gap: 2px;
                white-space: nowrap;
                text-decoration: none;
                
            }

            .profile-links a.active {
                background: #06414F !important;
                color: #fff !important;
            }

            .profile-links a i {
                font-size: 12px;
            }
        }
    </style>

    <body>
        <!-- SIDEBAR -->
        <div class="sidebar">
            <div>
                <div class="logo">
                    <img src="{{ asset('images/Artboard 1 2.svg') }}" alt="HTG">
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
                <div class="user-email">
                    @php
                        $firstInitial = strtoupper(substr($user->first_name, 0, 1));
                    @endphp
                    <div class="profile-pic">
                        @if($user->avatar)
                            <img src="{{ asset('storage/' . $user->avatar) }}" alt="Profile">
                        @else
                            <span>{{ $firstInitial }}</span>
                        @endif
                    </div>
                    <span class="user-email-text">{{ $user->email }}</span>
                </div>

                <a href="{{ route('admin-setting.index') }}" class="setting-links">
                    <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
                    <span>Settings</span>
                </a>
               <div style="margin-left:-20px;">
                <x-adminlogout />
            </div>

                <button class="sidebar-close" id="sidebarClose">×</button>
            </div>
        </div>

        <div class="sidebar-overlay" id="sidebarOverlay"></div>

        <!-- MAIN -->
        <div class="main">
            <!-- TOPBAR -->
            <div class="topbar">
                <div class="mobile-brand">
                    <img src="{{ asset('images/Artboard 1-1 2.svg') }}" class="mobile-logo" alt="HTG">
                    <button class="hamburger-btn" id="openSidebar">
                        <img src="{{ asset('images/breadcrumb.svg') }}" alt="Menu">
                    </button>
                </div>

                <h2>Dashboard</h2>

                <div class="top-profile">
                    <div class="profile">
                        @php
                            $firstInitial = substr($user->first_name, 0, 1);
                            $lastInitial  = substr($user->last_name, 0, 1);
                            $initials     = strtoupper($firstInitial . $lastInitial);
                        @endphp
                        <div class="initials">{{ $initials }}</div>
                        <div>
                            <h4>{{ $user->first_name }} {{ $user->last_name }}</h4>
                            <p>Admin</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONTENT -->
            <div class="content">
                <!-- SETTINGS PANEL (desktop only) -->
                <div class="settings-panel">
                    <h3>Settings</h3>
                    <span>You can find all settings here</span>

                    <div class="settings-links">
                        <a href="{{ route('admin-setting.index') }}">
                            <i class="fa-solid fa-user"></i>
                            My Profile
                        </a>
                        <a href="{{ route('security.index') }}"
                           class="{{ request()->is('security-options*') || request()->routeIs('security.*') ? 'active' : '' }}">
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

                <!-- RIGHT CONTENT -->
                <div class="right-content">
                    <!-- Mobile-only profile header + tabs (Figma style) -->
                    <div class="mobile-profile-header">
                        @if($user->avatar)
                            <img src="{{ asset('storage/' . $user->avatar) }}" alt="Profile" class="avatar">
                        @else
                            <div class="avatar-fallback">{{ $initials ?? strtoupper(substr($user->first_name,0,1).substr($user->last_name,0,1)) }}</div>
                        @endif
                        <h3>{{ $user->first_name }} {{ $user->last_name }}</h3>
                        <p>Admin</p>
                    </div>

                    <ul class="profile-links">
                        <li>
                            <a href="{{ route('admin-setting.index') }}" >
                                <i class="fa-solid fa-user"></i> My Profile
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('security.index') }}" class="active">
                                <i class="fa-solid fa-lock"></i> Security Options
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('index.add') }}">
                                <i class="fa-solid fa-file-circle-plus"></i> Add Admin
                            </a>
                        </li>
                    </ul>

                    <!-- HEADER -->
                    <div class="section-header">
                        <div>
                            <h3>Update Your Password</h3>
                            <p>Keep your account secure by setting a strong, unique password.</p>
                        </div>
                    </div>

                    <!-- FORM -->
                    <form action="{{ route('security.update') }}" method="POST">
                        @csrf
                        @method('PUT')

                        @if ($errors->any())
                            <div class="alert alert-danger" style="color:#DC2626;margin-bottom:20px;font-size:14px;">
                                <ul style="list-style:none;padding:0;">
                                    @foreach ($errors->all() as $error)
                                        <li><i class="fa-solid fa-circle-exclamation"></i> {{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            <label>Current Password <span class="required">*</span></label>
                            <div class="input-box">
                                <input type="password" name="current_password" placeholder="Enter your current password" required>
                                <i class="fa-regular fa-eye"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>New Password <span class="required">*</span></label>
                            <div class="input-box">
                                <input type="password" name="password" placeholder="Create a new password" required>
                                <i class="fa-regular fa-eye"></i>
                            </div>
                        </div>
                        @error('password')
                            <span style="color:#b71c1c;font-size:13px;display:block;margin-top:-12px;margin-bottom:12px;">
                                {{ $message }}
                            </span>
                        @enderror

                        <div class="form-group">
                            <label>Confirm New Password <span class="required">*</span></label>
                            <div class="input-box">
                                <input type="password" name="password_confirmation" placeholder="Re-enter new password" required>
                                <i class="fa-regular fa-eye"></i>
                            </div>
                        </div>

                        <div class="buttons">
                            <a href="{{ route('admin-setting.index') }}" class="cancel-btn">Cancel</a>
                            <button type="submit" class="save-btn">Save Changes</button>
                        </div>
                    </form>

                    <!-- SECURITY OPTIONS -->
                    <div class="security-options">
                        <div class="security-item">
                            <div class="security-text">
                                <h4>Primary Email</h4>
                                <p>Use your registered email to receive security codes and notifications</p>
                            </div>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider"></span>
                            </label>
                        </div>

                        <div class="security-item">
                            <div class="security-text">
                                <h4>SMS Authentication</h4>
                                <p>Receive verification codes via SMS to your phone</p>
                            </div>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </div>

                        <div class="security-item">
                            <div class="security-text">
                                <h4>Backup Codes</h4>
                                <p>Save one-time backup codes to access your account if you lose your device.</p>
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
            const sidebar  = document.querySelector('.sidebar');
            const overlay  = document.getElementById('sidebarOverlay');
            const openBtn  = document.getElementById('openSidebar');
            const closeBtn = document.getElementById('sidebarClose');

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

            // Optional: password visibility toggles
            document.querySelectorAll('.input-box i').forEach(icon => {
                icon.addEventListener('click', () => {
                    const input = icon.previousElementSibling;
                    if (input.type === 'password') {
                        input.type = 'text';
                        icon.classList.replace('fa-eye', 'fa-eye-slash');
                    } else {
                        input.type = 'password';
                        icon.classList.replace('fa-eye-slash', 'fa-eye');
                    }
                });
            });
        </script>
    </body>
</x-layout>