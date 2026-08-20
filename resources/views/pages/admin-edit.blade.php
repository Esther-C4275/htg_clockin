<x-layout>
    <aside class="sidebar">
        <div class="logo">
            <img src="{{ asset('images/Artboard 1 2.svg') }}" alt="">
        </div>

        <ul class="menu">
            <li>
                <a href="{{ route('admin-dashboard.index') }}">
                    <img src="{{ asset('images/dash.svg') }}" alt=""> Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('admin-employee.index') }}">
                    <img src="{{ asset('images/employee.svg') }}"> Employees
                </a>
            </li>
            <li>
                <a href="{{ route('admin-attendance.index') }}">
                    <img src="{{ asset('images/attendance.svg') }}" alt=""> Attendance
                </a>
            </li>
            <li>
                <a href="{{ route('admin-setting.index') }}" id="setting-link">
                    <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>

        <div class="bottom">
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
                <span class="user-email-text">{{ $user->email }}</span>
            </div>

            <a href="{{ route('admin-setting.index') }}" class="setting-links">
                <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
                <span>Settings</span>
            </a>
            <x-adminlogout />
        </div>

        <button class="sidebar-close" id="sidebarClose">×</button>
    </aside>

    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- MAIN -->
    <main class="main">

        <!-- TOPBAR -->
        <div class="topbar">
            <div class="mobile-brand">
                <img src="{{ asset('images/Artboard 1-1 2.svg') }}" class="mobile-logo" alt="HTG">
                <button class="hamburger-btn" id="openSidebar">
                    <img src="{{ asset('images/breadcrumb.svg') }}">
                </button>
            </div>

            <h2 class="desktop-title">Dashboard</h2>

            <div class="top-right">
                <div class="user">
                    @php
                        $firstInitial = substr($user->first_name, 0, 1);
                        $lastInitial = substr($user->last_name, 0, 1);
                        $initials = strtoupper($firstInitial . $lastInitial);
                    @endphp
                    <div class="initials">{{ $initials }}</div>
                    <div>
                        <h5>{{ $user->first_name }} {{ $user->last_name }}</h5>
                        <span>Admin</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="content">

            <!-- SETTINGS PANEL -->
            <div class="settings">
              
                <div class="mobile-profile-header">
                    @php
                        $firstInitial = substr($user->first_name, 0, 1);
                        $lastInitial = substr($user->last_name, 0, 1);
                        $initials = strtoupper($firstInitial . $lastInitial);
                    @endphp
                    <div class="mobile-avatar">{{ $initials }}</div>
                    <h4>{{ $user->first_name }} {{ $user->last_name }}</h4>
                    <p>Admin</p>
                </div>

                <h3>Settings</h3>
                <p class="settings-desc">You can find all settings here</p>

                <ul class="profile-links">
                    <li>
                        <a href="{{ route('admin-setting.index') }}" class="active">
                            <i class="fa-solid fa-user"></i> My Profile
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('security.index') }}">
                            <i class="fa-solid fa-lock"></i> Security Options
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('index.add') }}">
                            <i class="fa-solid fa-file-circle-plus"></i> Add Admin
                        </a>
                    </li>
                </ul>
            </div>

            <!-- PROFILE CARD / FORM -->
            <div class="card">
                <h2 class="desktop-only">Profile Information</h2>

                <div class="card-header desktop-only">
                    <div class="profile">
                        @php
                            $firstInitial = substr($user->first_name, 0, 1);
                            $lastInitial = substr($user->last_name, 0, 1);
                            $initials = strtoupper($firstInitial . $lastInitial);
                        @endphp
                        <div class="initials">{{ $initials }}</div>
                        <div>
                            <h3>{{ $user->first_name }} {{ $user->last_name }}</h3>
                            <span>Admin</span>
                        </div>
                    </div>
                </div>

                <form method="POST" action="{{ route('admin-setting.update', Auth::id()) }}">
                    @csrf
                    @method('PUT')

                    @if ($errors->any())
                        <div style="background: #FEE2E2; color: #991B1B; padding: 15px; border-radius: 6px; margin-bottom: 20px;">
                            <strong>Fix these errors to save:</strong>
                            <ul style="margin-top: 5px; padding-left: 20px;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <h4>Personal Details</h4>

                    <div class="grid">
                        <div>
                            <label>First Name</label>
                            <input type="text" name="first_name" value="{{ old('first_name', $user->first_name) }}">
                        </div>
                        <div>
                            <label>Last Name</label>
                            <input type="text" name="last_name" value="{{ old('last_name', $user->last_name) }}">
                        </div>
                        <div>
                            <label>Email Address</label>
                            <input type="email" name="email" value="{{ old('email', $user->email) }}">
                        </div>
                        <div>
                            <label>Phone</label>
                            <input type="text" name="phone" value="{{ old('phone', $user->phone) }}">
                        </div>
                        <div>
                            <label>Position</label>
                            <input type="text" name="position" value="{{ old('position', $user->position) }}">
                        </div>
                        <div>
                            <label>Gender</label>
                            <select name="gender">
                                <option value="Female" {{ old('gender', $user->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Male" {{ old('gender', $user->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                            </select>
                        </div>
                        <div>
                            <label>Date of Birth</label>
                            <input type="date" name="date_of_birth" value="{{ old('date_of_birth', $user->date_of_birth) }}">
                        </div>
                    </div>

                    <h4>Address</h4>

                    <div class="grid">
                        <div>
                            <label>Country</label>
                            <select name="country">
                                <option value="" disabled {{ !old('country', $user->country) ? 'selected' : '' }}>Select country</option>
                                <option value="Nigeria" {{ old('country', $user->country) == 'Nigeria' ? 'selected' : '' }}>Nigeria</option>
                                <option value="Ghana" {{ old('country', $user->country) == 'Ghana' ? 'selected' : '' }}>Ghana</option>
                                <option value="United Kingdom" {{ old('country', $user->country) == 'United Kingdom' ? 'selected' : '' }}>United Kingdom</option>
                                <option value="United States" {{ old('country', $user->country) == 'United States' ? 'selected' : '' }}>United States</option>
                                <option value="Kenya" {{ old('country', $user->country) == 'Kenya' ? 'selected' : '' }}>Kenya</option>
                            </select>
                        </div>
                        <div>
                            <label>City/State</label>
                            <select name="state">
                                <option value="" disabled {{ !old('state', $user->state) ? 'selected' : '' }}>Select state</option>
                                <option value="Delta" {{ old('state', $user->state) == 'Delta' ? 'selected' : '' }}>Delta</option>
                                <option value="Lagos" {{ old('state', $user->state) == 'Lagos' ? 'selected' : '' }}>Lagos</option>
                                <!-- keep the rest of your state options -->
                                <option>Abia</option>
                                <option>Adamawa</option>
                                <option>Akwa Ibom</option>
                                <option>Anambra</option>
                                <option>Bauchi</option>
                                <option>Bayelsa</option>
                                <option>Benue</option>
                                <option>Borno</option>
                                <option>Cross River</option>
                                <option>Ebonyi</option>
                                <option>Edo</option>
                                <option>Ekiti</option>
                                <option>Enugu</option>
                                <option>Federal Capital Territory</option>
                                <option>Gombe</option>
                                <option>Imo</option>
                                <option>Jigawa</option>
                                <option>Kaduna</option>
                                <option>Kano</option>
                                <option>Katsina</option>
                                <option>Kebbi</option>
                                <option>Kogi</option>
                                <option>Kwara</option>
                                <option>Nasarawa</option>
                                <option>Niger</option>
                                <option>Ogun</option>
                                <option>Ondo</option>
                                <option>Osun</option>
                                <option>Oyo</option>
                                <option>Plateau</option>
                                <option>Rivers</option>
                                <option>Sokoto</option>
                                <option>Taraba</option>
                                <option>Yobe</option>
                                <option>Zamfara</option>
                            </select>
                        </div>
                        <div class="full">
                            <label>Residential Address</label>
                            <input type="text" name="address" value="{{ old('address', $user->address) }}">
                        </div>
                    </div>

                    <div class="form-buttons">
                        <a href="{{ route('admin-setting.index') }}" class="cancel-btn">Cancel</a>
                        <button type="submit" class="save-btn">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

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

        body {
            background: #f4f6f8;
        }

        /* SIDEBAR */
        .sidebar {
            width: 260px;
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

        .sidebar-close { 
            display: none; 
        }

        .logo img { 
            width: 80px; 
        }

        .menu {
            list-style: none;
            margin-top: 40px;
            margin-left: -18px;
        }

        .menu li {
            padding: 12px 16px;
            margin-bottom: 6px;
            cursor: pointer;
            border-radius: 8px;
        }

        .menu li a {
            text-decoration: none;
            color: #B7B7B7;
            display: flex;
            align-items: center;
            gap: 12px;
            width: 100%;
            font-size: 16px;
        }

        .menu li:hover,
        .menu li a:hover {
            background: #FFFFFF;
            color: #06414F;
        }

        .setting-links {
            display: flex;
            align-items: center;
            padding: 14px;
            color: #B7B7B7;
            gap: 8px;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            border-radius: 8px;
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
            background: transparent; 
            border: none; 
            cursor: pointer; 
        }

        .mobile-brand { 
            display: none;
         }

        .user-email { 
            display: none;
         }

        .bottom {
            margin-top: auto;
            margin-bottom: 20px;
        }

        /* MAIN */
        .main {
            flex: 1;
            padding: 20px;
            margin-left: 270px;
        }

        /* TOPBAR */
        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .topbar h2 {
            font-weight: 600;
            font-size: 24px;
        }

        .top-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user h5 {
            font-weight: 600;
            font-size: 14px;
        }

        .user span {
            font-size: 12px;
            color: #5E5D5D;
        }

        /* CONTENT */
        .content {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        /* SETTINGS PANEL */
        .settings {
            width: 265px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #EBEBEB;
            margin-top: 27px;
        }

        .settings h3 {
            font-weight: 600;
            font-size: 18px;
        }

        .settings-desc {
            font-size: 12px;
            color: #616060;
            margin: 12px 0 30px;
        }

        .profile-links {
            list-style: none;
        }

        .profile-links li {
            margin-bottom: 8px;
        }

        .profile-links a {
            text-decoration: none;
            color: #BCBCBC;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
            font-weight: 600;
            padding: 10px;
            border-radius: 8px;
            transition: 0.2s;
        }

        .profile-links a:hover,
        .profile-links a.active {
            color: #03343b;
        }

        /* CARD */
        .card {
            flex: 1;
            background: white;
            padding: 20px;
            border: 1px solid #EBEBEB;
            border-radius: 10px;
            margin-top: 27px;
        }

        .card h2 {
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .profile h3 {
            font-size: 16px;
            font-weight: 600;
        }

        .profile span {
            font-size: 13px;
            color: #6B7280;
        }

        h4 {
            font-weight: 600;
            font-size: 16px;
            margin: 20px 0 15px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .full { grid-column: span 2; }

        label {
            font-size: 13px;
            color: #6B7280;
            display: block;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 10px 12px;
            border-radius: 8px;
            border: 1px solid #D1D5DB;
            font-size: 14px;
            background: #fff;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #06414F;
        }

        .form-buttons {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            margin-top: 30px;
        }

        .cancel-btn, .save-btn {
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .cancel-btn {
            border: 1px solid #D1D5DB;
            background: white;
            color: #374151;
        }

        .save-btn {
            border: none;
            background: #06414F;
            color: white;
        }

        .cancel-btn:hover {
            background: #F3F4F6;
        }

        .save-btn:hover {
            background: #052f38;
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
            border: 1px solid #C5DCF2;
        }

        /* Hidden helpers */
        .mobile-profile-header { display: none; }
        .desktop-only { display: block; }
        .desktop-title { display: block; }

        /* ========== MOBILE – matches Figma ========== */
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
                z-index: 1500;
            }

            .sidebar-overlay.active { display: block; }

            .setting-links { 
                display: none; 
            }

            #setting-link {
                display: flex;
                align-items: center;
                padding: 12px;
                gap: 8px;
                width: 100%;
                text-decoration: none;
                font-size: 16px;
                font-weight: 500;
                color: #b7b7b7;
                border-radius: 8px;
                margin-left: -10px;
                margin-top: -12px;
            }

            .user-email {
                display: flex;
                align-items: center;
                gap: 12px;
                padding: 10px 12px;
                margin-bottom: 8px;
                width: 100%;
            }

            .bottom{
                margin-left: -20px;
            }

            .menu {
                margin-left: -20px;
            }

            .menu li{
                margin-bottom: 19px;
            }

            .user-email .profile-pic {
                width: 32px;
                height: 32px;
                border-radius: 50%;
                background: #fff;
                color: #06414F;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: 700;
                font-size: 13px;
                overflow: hidden;
            }

            /* Main */
            .main {
                margin-left: 0;
                padding: 16px 16px 40px;
            }

            /* Topbar – only logo + hamburger */
            .topbar {
                margin-bottom: 16px;
            }

            .desktop-title,
            .top-right {
                display: none !important;
            }

            .mobile-brand {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
            }

            .mobile-brand img {
                width: 60px;
                height: 26px;
            }

            .hamburger-btn {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 36px;
                height: 36px;
            }

            /* Content single column */
            .content {
                flex-direction: column;
                gap: 0;
                margin-top: 0;
            }

            /* Settings panel → becomes header + pills */
            .settings {
                width: 100%;
                border: none;
                padding: 0;
                margin-top: 0;
                background: transparent;
            }

            .mobile-profile-header {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                margin-bottom: 24px;
            }

            .mobile-avatar {
                width: 72px;
                height: 72px;
                background: #E2EEF9;
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
                margin-top: 2px;
            }

            .mobile-profile-header p {
                font-size: 14px;
                color: #6B7280;
            }

            .settings h3 {
                font-size: 16px;
                margin-bottom: 4px;
            }

            .settings-desc {
                margin-bottom: 16px;
                font-size: 13px;
            }

            /* Horizontal pills – My Profile active */
            .profile-links {
                display: flex;
                gap: 17px;
                /* overflow-x: auto; */
                padding: 6px;
                margin-bottom: 20px;
                background-color: #F9F9FB;
                border-radius: 22px;
                width: 385px;
            }

            .profile-links li {
                margin: 0;
                flex-shrink: 0;
            }

            .profile-links a {
                padding: 10px 16px;
                border-radius: 999px;
                background: #FFFFFF;
                color: black !important;
                font-size: 10px;
                font-weight: 500;
                gap: 6px;
                white-space: nowrap;
            }

            .profile-links a.active {
                background: #06414F !important;
                color: #fff !important;
            }

            .profile-links a i {
                font-size: 12px;
            }

            /* Card */
            .card {
                margin-top: 0;
                padding: 0;
                border: none;
            }

            .desktop-only { display: none !important; }

            h4 {
                font-size: 15px;
                margin: 24px 0 12px;
            }

            .grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .full { grid-column: span 1; }

            input, select {
                padding: 12px 14px;
                font-size: 15px;
                border-radius: 10px;
            }

            .form-buttons {
                flex-direction: row;
                justify-content: space-between;
                margin-top: 32px;
                gap: 12px;
            }

            .cancel-btn, .save-btn {
                flex: 1;
                padding: 14px;
                font-size: 15px;
                border-radius: 10px;
            }

            .save-btn {
                background: #06414F;
            }
        }
    </style>
</x-layout>