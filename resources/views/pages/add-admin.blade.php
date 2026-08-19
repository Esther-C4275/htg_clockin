<x-layout>
    <style>
        main {
            background: white;
            width: auto;
        }
        body {
            height: 100vh;
            padding: 0;
            margin: 0;
            font-family: "Inter", sans-serif;
            background-color: #fafafa;
        }
        .container {
            display: flex;
            height: 100vh;
        }
        .sidebar {
            width: 230px;
            background: #06414F;
            color: #fff;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 15px;
            position: fixed;
            top: 0;
            left: 0;
            overflow: hidden;
            z-index: 1000;
        }
        .logo {
            margin-bottom: 50px;
        }
        .sidebar-close {
            display: none;
        }
        .menu {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-left: -13px;
        }
        .menu a {
            text-decoration: none;
            color: #B7B7B7;
            padding: 10px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 16px;
            transition: 0.3s;
            width: 177.5px;
        }
        .menu a:hover {
            background: white;
            color: #06414F;
        }
        .bottom-menu {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-bottom: 50px;
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
            width: 177.5px;
            font-size: 16px;
            margin-left: -10px;
        }
        .bottom-menu a:hover {
            background: white;
            color: #06414F;
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
        .main {
            flex: 1;
            padding: 30px;
            margin-left: 270px;
        }
        .admin {
            display: flex;
            gap: 700px;
        }
        .admin h1 {
            font-weight: 600;
            font-size: 32px;
            line-height: 100%;
            letter-spacing: 0px;
            margin-bottom: 30px;
        }
        .admin-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .admin-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin-left: 25px;
        }
        .admin-name {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: -10px;
            margin-left: -2px;
        }
        .admin-role {
            font-size: 12px;
            color: var(--text-muted);
        }
        /* CONTENT AREA */
        .content {
            display: grid;
            grid-template-columns: 260px 1fr;
            gap: 25px;
            width: 66%;
        }
        /* LEFT SETTINGS */
        .settings-card {
            border: 1px solid #EDEDED;
            border-radius: 8px;
            padding: 20px;
            width: 210px;
            height: 650px;
            margin-top: 18px;
        }
        .settings-card h3 {
            font-size: 18px;
            margin-bottom: 8px;
            font-weight: 600;
            margin-top: -5px;
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
        }
        .settings-links a:hover {
            color: #06414F;
            font-weight: 600;
        }
        /* FORM */
        form {
            width: 44%;
        }
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 32px;
            width: 790px;
            margin-top: 22px;
            margin-left: -330px;
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
            height: 39px;
            width: 100%;
            border: 1px solid #767676;
            border-radius: 10px;
            padding: 0 16px;
            font-size: 16px;
            background: transparent;
            outline: none;
            box-sizing: border-box;
            transition: border-color 0.2s;
        }
        .form-select {
            padding: 9px 16px;
            border-radius: 10px;
            font-size: 16px;
            border: 1px solid #767676;
            background: transparent;
            outline: none;
            transition: border-color 0.2s, color 0.2s;
        }
        .form-group input[type="date"] {
            color: #767676;
        }
        .form-group input[type="date"]:valid {
            color: #000000;
        }
        .form-group input[type="date"]::-webkit-calendar-picker-indicator {
            cursor: pointer;
            opacity: 0.6;
        }
        .form-group input[type="date"]:valid::-webkit-calendar-picker-indicator {
            opacity: 1;
        }
        .form-select:invalid {
            color: #767676;
        }
        .form-select option[value=""][disabled] {
            color: #767676;
        }
        .form-select:valid {
            color: #000;
        }
        .form-select option {
            color: #000;
        }
        .form-select option[value=""] {
            color: #9CA3AF;
        }
        .form-group input::placeholder {
            color: #767676;
        }
        .full-width {
            grid-column: span 2;
        }
        .btn {
            margin-top: 70px;
            width: 790px;
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
            margin-left: -333px;
        }
        .both {
            display: flex;
            gap: 20px;
            width: 100%;
            align-items: flex-start;
        }
        .initials {
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
        #setting-link {
            display: none;
        }

        .mobile-tabs{
            display: none;
        }

        .mobile-profile{
            display: none;
        }

        

    
        /* ===== MOBILE STYLES ===== */
        @media (max-width: 768px) {
            html,
            body {
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
                overflow-x: hidden;
                background: #fff;
            }

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
                backdrop-filter: blur(20px);
                -webkit-backdrop-filter: blur(3px);
                z-index: 1500;
            }
            .sidebar-overlay.active {
                display: block;
            }

            
            .setting-links,
            
            .settings-card,
            .admin-info,
            .admin h1,
            .content {
                display: none !important;
            }

           
            .mobile-brand {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 16px 0 8px;   
                margin-bottom: 0;
                width: 100%;
            }
            .mobile-brand img {
                width: 60px;
                height: 26px;
                display: block;
            }
            .hamburger-btn {
                display: flex !important;
                align-items: center;
                justify-content: center;
                width: 40px;
                height: 40px;
                padding: 0;
                border: none;
                background: none;
                flex-shrink: 0;
            }
            .hamburger-btn img {
                width: 22px;
                height: 22px;
            }

          
            .main {
                margin-left: 0 !important;
                padding: 0 20px 40px !important;   
                width: 100%;
                box-sizing: border-box;
                overflow-x: hidden;
            }

            .both {
                display: block;
                width: 100%;
            }

            /* Profile row */
            .mobile-profile {
                display: flex;
                align-items: center;
                gap: 12px;
                padding: 8px 0 16px;
                width: 100%;
            }
            .mobile-profile .avatar {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background: #E2EEF9;
                color: #06414F;
                font-weight: 700;
                font-size: 14px;
                display: flex;
                align-items: center;
                justify-content: center;
                border: 1px solid #C5DCF2;
                overflow: hidden;
                flex-shrink: 0;
            }
            .mobile-profile .avatar img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .mobile-profile .info h2 {
                font-size: 14px;
                font-weight: 600;
                margin: 0;
                color: #111;
            }
            .mobile-profile .info p {
                font-size: 12px;
                color: #6B7280;
                margin: 0;
            }
            .mobile-profile .notif {
                margin-left: auto;
                width: 36px;
                height: 36px;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-shrink: 0;
            }

            
            .mobile-tabs {
                display: flex;
                gap: 2px;
                margin-bottom: 24px;
                /* overflow-x: auto; */
                padding-bottom: 4px;
                width: 100%;
                background-color: #F9F9FB;
                width: 360px;
                height: 38px;
                gap: 4px;
                opacity: 1;
                border-radius: 100px;
                border-width: 1px;
                padding: 7px;
            }

            .mobile-tabs a {
                flex-shrink: 0;
                 padding: 10px 16px; 
                border-radius: 9999px;
                font-size: 13px;
                font-weight: 500;
                text-decoration: none;
                color: black;
                background: #FFFFFF;
                white-space: nowrap;
            }
            .mobile-tabs a.active {
                background: #06414F;
                color: #fff;
            }

            /* Form – single column */
            form {
                width: 100% !important;
                margin: 0 !important;
                box-sizing: border-box;
            }
            .form-grid {
                display: flex !important;
                flex-direction: column;
                gap: 20px;
                width: 100% !important;
                margin: 0 !important;
            }
            .form-group {
                width: 100%;
            }
            .form-group label {
                font-size: 14px;
                font-weight: 600;
                margin-bottom: 8px;
                color: #111;
            }
            .form-group input,
            .form-select {
                height: 48px;
                width: 100%;
                border: 1px solid #D1D5DB;
                border-radius: 10px;
                padding: 0 16px;
                font-size: 15px;
                background: #fff;
                box-sizing: border-box;
            }
            .form-group input::placeholder,
            .form-select:invalid {
                color: #9CA3AF;
            }

            /* Button */
            .btn {
                margin-top: 32px !important;
                margin-left: 0 !important;
                width: 100% !important;
                height: 52px;
                border-radius: 10px;
                font-size: 16px;
                font-weight: 600;
                background: #06414F;
            }

            /* Sidebar menu adjustments */
            .menu {
                margin-left: -14px;
                font-size: 18px;
                margin-top: 10px;
            }
            .menu a {
                margin-bottom: 10px;
                width: auto;
                font-size: 18px;
            }
            #setting-link {
                display: flex;
                align-items: center;
                justify-content: flex-start;
                padding: 12px;
                gap: 5px;
                width: 100%;
                text-decoration: none;
                font-size: 18px;
                margin-left: -5px;
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
                margin: 0;
            }
            #setting-link i img {
                width: 100%;
                height: 100%;
                object-fit: contain;
            }
            #setting-link span {
                line-height: 1;
            }
            .user-email {
                display: flex;
                align-items: center;
                gap: 12px;
                padding: 10px 12px;
                margin-bottom: 18px;
                width: 100%;
                margin-left: -14px;
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
        }
    </style>

    <body>
        <aside class="sidebar">
            <div>
                <div class="logo">
                    <img src="{{ asset('images/Artboard 1 2.svg') }}" alt="">
                </div>
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
                    <a href="{{ route('admin-setting.index') }}" id="setting-link">
                        <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
                        <span>Settings</span>
                    </a>
                </div>
            </div>
            <div class="bottom-menu">
                <div class="user-email" style="color: #B7B7B7">
                    @php
                        $firstInitial = $user ? strtoupper(substr($user->first_name, 0, 1)) : 'U';
                    @endphp
                    <div class="profile-pic">
                        @if($user && $user->avatar)
                            <img src="{{ asset('storage/' . $user->avatar) }}" alt="Profile"
                                style="width: 100%; height: 100%; object-fit: cover; border-radius: 100%;">
                        @else
                            <span>{{ $firstInitial }}</span>
                        @endif
                    </div>
                    <span class="user-email-text">
                        {{ $user->email ?? '' }}
                    </span>
                </div>
            
                <a href="{{ route('admin-setting.index') }}" class="setting-links">
                    <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
                    <span>Settings</span>
                </a>
            
                <div style="margin-left: -10px">
                    <x-adminlogout />
                </div>
            </div> 
            </div>
            <button class="sidebar-close" id="sidebarClose">×</button>
        </aside>

        <div class="sidebar-overlay" id="sidebarOverlay"></div>

        <main class="main">
            
            <div class="mobile-brand">
                <img src="{{ asset('images/Artboard 1-1 2.svg') }}" class="mobile-logo" alt="HTG">
                <button class="hamburger-btn" id="openSidebar">
                    <img src="{{ asset('images/breadcrumb.svg') }}" alt="Menu">
                </button>
            </div>

         
            <div class="admin">
                <h1>Add New Admin</h1>
                <div class="admin-info">
                    @php
                        $firstInitial = substr($user->first_name, 0, 1);
                        $lastInitial = substr($user->last_name, 0, 1);
                        $initials = strtoupper($firstInitial . $lastInitial);
                    @endphp
                    <div class="initials-pic">
                        {{ $initials }}
                    </div>
                    <div>
                        <h2 class="admin-name">{{ $user->first_name }} {{ $user->last_name }}</h2>
                        <p class="admin-role">Admin</p>
                    </div>
                </div>
            </div>

           
            <div class="mobile-profile">
                @php
                    $firstInitial = strtoupper(substr($user->first_name, 0, 1));
                    $lastInitial  = strtoupper(substr($user->last_name, 0, 1));
                    $initials     = $firstInitial . $lastInitial;
                @endphp
                <div class="avatar">
                    @if($user->avatar)
                        <img src="{{ asset('storage/' . $user->avatar) }}" alt="Profile">
                    @else
                        {{ $initials }}
                    @endif
                </div>
                <div class="info">
                    <h2>{{ $user->first_name }} {{ $user->last_name }}</h2>
                    <p>Admin</p>
                </div>
                
            </div>

            <!-- Mobile tabs -->
            <div class="mobile-tabs">
                <a href="{{ route('admin-setting.index') }}">My Profile</a>
                <a href="{{ route('security.index') }}">Security Options</a>
                <a href="{{ route('index.add') }}" class="active">Add New Admin</a>
            </div>

            <div class="both">
                <!-- Desktop settings card -->
                <div class="content">
                    <div class="settings-card">
                        <h3>Settings</h3>
                        <p class="small-text">You can find all settings here</p>
                        <div class="settings-links">
                            <a href="{{ route('admin-setting.index') }}"
                                style="font-weight: 600; color: {{ request()->is('admin-setting*') ? '#03343b' : '#BCBCBC' }}">
                                <i class="fa-solid fa-user"></i>
                                My Profile
                            </a>
                            <a href="{{ route('security.index') }}"
                                style="font-weight: 600; color: {{ request()->is('security-options*') ? '#03343b' : '#BCBCBC' }}">
                                <i class="fa-solid fa-lock"></i>
                                Security Options
                            </a>
                            <a href="{{ route('index.add') }}"
                                style="font-weight: 600; color: {{ request()->is('add-admin*') ? '#03343b' : '#BCBCBC' }}">
                                <i class="fa-solid fa-file-circle-plus"></i>
                                Add Admin
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <form action="{{ route('admin.store') }}" method="POST">
                    @csrf
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

                    <div class="form-grid">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" placeholder="Enter first name" value="{{ old('first_name') }}" required>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" placeholder="Enter last name" value="{{ old('last_name') }}" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Enter email" value="{{ old('email') }}" required>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="tel" name="phone" placeholder="Enter phone number" value="{{ old('phone') }}" required>
                        </div>
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" name="position" placeholder="Position" value="{{ old('position') }}" required>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select class="form-select" name="gender" required>
                                <option value="" disabled {{ !old('gender') ? 'selected' : '' }}>Select gender</option>
                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <select name="country" class="form-select" required>
                                <option value="" disabled {{ !old('country') ? 'selected' : '' }}>Select country</option>
                                <option value="Nigeria" {{ old('country') == 'Nigeria' ? 'selected' : '' }}>Nigeria</option>
                                <option value="Ghana" {{ old('country') == 'Ghana' ? 'selected' : '' }}>Ghana</option>
                                <option value="United Kingdom" {{ old('country') == 'United Kingdom' ? 'selected' : '' }}>United Kingdom</option>
                                <option value="United States" {{ old('country') == 'United States' ? 'selected' : '' }}>United States</option>
                                <option value="Kenya" {{ old('country') == 'Kenya' ? 'selected' : '' }}>Kenya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>State</label>
                            <select class="form-select" name="state" required>
                                <option value="" disabled {{ !old('state') ? 'selected' : '' }}>Select state of origin</option>
                                <option value="abia">Abia</option>
                                <option value="adamawa">Adamawa</option>
                                <option value="akwa-ibom">Akwa Ibom</option>
                                <option value="anambra">Anambra</option>
                                <option value="bauchi">Bauchi</option>
                                <option value="bayelsa">Bayelsa</option>
                                <option value="benue">Benue</option>
                                <option value="borno">Borno</option>
                                <option value="cross-river">Cross River</option>
                                <option value="delta">Delta</option>
                                <option value="ebonyi">Ebonyi</option>
                                <option value="edo">Edo</option>
                                <option value="ekiti">Ekiti</option>
                                <option value="enugu">Enugu</option>
                                <option value="fct">Federal Capital Territory</option>
                                <option value="gombe">Gombe</option>
                                <option value="imo">Imo</option>
                                <option value="jigawa">Jigawa</option>
                                <option value="kaduna">Kaduna</option>
                                <option value="kano">Kano</option>
                                <option value="katsina">Katsina</option>
                                <option value="kebbi">Kebbi</option>
                                <option value="kogi">Kogi</option>
                                <option value="kwara">Kwara</option>
                                <option value="lagos">Lagos</option>
                                <option value="nasarawa">Nasarawa</option>
                                <option value="niger">Niger</option>
                                <option value="ogun">Ogun</option>
                                <option value="ondo">Ondo</option>
                                <option value="osun">Osun</option>
                                <option value="oyo">Oyo</option>
                                <option value="plateau">Plateau</option>
                                <option value="rivers">Rivers</option>
                                <option value="sokoto">Sokoto</option>
                                <option value="taraba">Taraba</option>
                                <option value="yobe">Yobe</option>
                                <option value="zamfara">Zamfara</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Address" value="{{ old('address') }}" required>
                        </div>
                    </div>

                    <button type="submit" class="btn">Add New Admin</button>
                </form>
            </div>
        </main>

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
    </body>
</x-layout>