<x-layout>
    <style>
        main {
            width: 90%;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #ffffff;
            color: var(--text-dark);
            display: flex;
            min-height: 100vh;
            font-family: 'Manrope', sans-serif;

        }

        /* --- SIDEBAR --- */
        .sidebar {
            width: 240px;
            background-color: #06414F;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            padding: 20px;
            position: fixed;
            height: 100vh;
            left: 0;
            top: 0;
            z-index: 100;
            transition: transform 0.3s ease;
        }

        .logo-container {
            padding: 0 24px 40px 24px;
        }

        .nav-links {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 8px;
            padding: 0 12px;
            margin-top: 31px;
        }

        .nav-item a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            color: #B7B7B7;
            text-decoration: none;
            font-weight: 500;
            border-radius: 6px;
            transition: all 0.2s ease;
            font-size: 16px;
        }

        .nav-item a:hover {
            color: #06414F;
            background-color: #ffffff;
        }

        .sidebar-footer {
            margin-top: auto;
            padding: 0 12px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        /* --- MAIN CONTENT AREA --- */
        .main-wrapper {
            margin-left: 230px;
            flex: 1;
            padding: 30px;
            background-color: #ffffff;
            min-height: 100vh;
            /* width: calc(100% - var(--sidebar-width)); */
        }

        /* Top Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .breadcrumb {
            font-size: 25px;
            font-weight: 700;
            margin-left: 3px;
        }

        .breadcrumb span {
            color: #000000;
            font-weight: 600;

        }

        .user-profile-top {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .notification-btn {
            /* background: var(--bg-light); */
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            position: relative;
        }

        .notification-dot {
            width: 8px;
            height: 8px;
            background-color: #ef4444;
            border-radius: 50%;
            position: absolute;
            top: 10px;
            right: 12px;
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
        }

        .admin-name {
            font-size: 14px;
            font-weight: 600;
        }

        .admin-role {
            font-size: 12px;
            color: var(--text-muted);
        }

        /* Tabs Navigation */
        .tabs-container {
            display: flex;
            background-color: #ffffff;
            padding: 4px;
            border-radius: 8px;
            width: fit-content;
            margin-bottom: 32px;
        }

        .tabs-container a {
            text-decoration: none;
            color: #06414F;
            cursor: pointer;
        }

        .tabs-container a:hover {
            background: #06414F;
            color: white;
        }


        .tabs-container a {
            padding: 10px;
            border: none;
            background: transparent;
            font-size: 16px;
            font-weight: 500;
            color: #06414F;
            border: 1px solid #06414F;
            border-radius: 2px;
            cursor: pointer;
            margin-left: -1px;
            transition: all 0.2s ease;
        }

        .tab-btn:hover {
            background-color: #06414F;
            color: #ffffff;
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

        /* --- DASHBOARD GRID SYSTEM --- */
        .dashboard-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 24px;
            align-items: start;

        }

        /* --- Profile Info Card --- */
        .profile-card {
            padding: 32px;
            display: grid;
            grid-template-columns: 180px 1fr;
            gap: 32px;
            border: 1px solid #EDEDED;
            border-radius: 8px;
        }

        .profile-left {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            text-align: center;
        }

        .profile-avatar {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 16px;
        }

        .profile-pic {
            width: 140px;
            height: 140px;
            background-color: #E2EEF9;
            color: #06414F;
            font-weight: 700;
            font-size: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-transform: uppercase;
            border: 1px solid #C5DCF2;
        }

        .emp-name {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 4px;
            margin-top: 6px;
        }

        .emp-role {
            font-size: 13px;
            color: var(--text-muted);
        }

        .info-section-title {
            /* font-size: 16px;
            font-weight: 600; */
            margin-bottom: 16px;
            font-family: Inter;
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 0px;
        }

        .info-section-titles {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 16px;
        }

        .gender-selector {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            color: var(--text-dark);
            margin-bottom: 24px;
        }

        .gender-dot {
            width: 14px;
            height: 14px;
            border: 1.5px solid #ffffff;
            outline: 1px solid #9D9C9C;
            background-color: #06414F;
            border-radius: 50%;
        }

        .details-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 32px;
        }

        .detail-group label {
            display: block;
            font-size: 12px;
            font-weight: 400;
            font-style: Regular;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;
            margin-bottom: 5px;
        }

        .detail-group p {
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .back a {
            color: #B7B7B7;
            text-decoration: none;
            background-color: #06414F;
            border: 5px;
            margin-bottom: 25px;
            padding: 6px;
            font-size: 14px;
            border-radius: 8px;


        }

        .back {
            border-radius: 3px;
        }

        .address-section {
            /* border-top: 1px solid var(--border-color); */
            padding-top: 24px;
        }

        /* --- RESPONSIVE METRIC CARDS (RIGHT COLUMN) --- */
        .metrics-column {
            display: flex;
            flex-direction: column;
            gap: 24px;
            width: 100%;
        }

        .metric-card {
            background-color: #F6F8FA;
            border-radius: 6px;
            padding: 24px;
            width: 100%;
        }

        .metric-card.white-bg {
            background-color: #ffffff;
            border: 1px solid #EDEDED;
            box-shadow: #00000040 0px 4px 10px;

        }

        .metric-title {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        /* RESPONSIVE PROGRESS BAR */
        .progress-container {
            width: 100%;
        }

        .progress-header {
            display: flex;
            justify-content: space-between;
            font-size: 13px;
            margin-bottom: 8px;
        }

        .progress-label {
            color: var(--text-muted);
            font-weight: 500;
        }

        .progress-value {
            font-weight: 600;
        }

        .progress-bar-bg {
            width: 100%;
            background-color: #C3D7DC;
            border-radius: 4px;
            height: 10px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .progress-bar-fill {
            height: 100%;
            background-color: #06414F;
            width: 53.75%;
            /* (4.30 / 8.0) * 100 */
            border-radius: 4px;
            transition: width 0.4s ease-in-out;
        }

        .target-box {
            background-color: #C3D7DC;
            border-radius: 4px;
            padding: 12px;
            width: fit-content;
            color: #06414F;
        }

        .target-label {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--primary-dark);
            font-weight: 600;
        }

        .target-val {
            font-size: 20px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-top: 2px;
        }

        .target-val span {
            font-size: 12px;
            font-weight: 500;
        }

        /* RESPONSIVE ATTENDANCE DONUT CHART */
        .attendance-analytics {
            display: flex;
            align-items: center;
            gap: 24px;
            width: 100%;
            flex-wrap: wrap;
            /* Wraps cleanly on narrow spaces */
        }

        /* The wrapper scales fluidly based on parent container width */
        .chart-container {
            position: relative;
            width: min(140px, 100%);
            max-width: 120px;
            /* Upper bounds size boundary */
            aspect-ratio: 1 / 1;
            /* Maintains square ratio automatically */
            flex: 0 0 auto;
        }

        /* SVG scale matching containing frame box perfectly */
        .donut-chart {
            transform: rotate(-90deg);
            width: 100%;
            height: 100%;
            display: block;
        }

        .donut-bg {
            fill: none;
            stroke: #A3DCBC;
            stroke-width: 14;
        }

        .donut-fill {
            fill: none;
            stroke: #00A64A;
            stroke-width: 14;
            stroke-dasharray: 251.2;
            stroke-dashoffset: 37.68;
            /* 85% computed value */
            stroke-linecap: round;
        }

        .chart-center-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: calc(14px + 0.2vw);
            /* Responsive text scaling */
            font-weight: 700;
        }

        .attendance-stats {
            display: flex;
            flex-direction: column;
            gap: 12px;
            flex: 2 1 0%;
            min-width: 120px;
        }

        .stat-group label {
            text-transform: uppercase;
            display: block;
            font-weight: 500;

            font-weight: 600;
            font-style: SemiBold;
            font-size: 10px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .stat-group p {
            /* font-size: 15px;
            font-weight: 600; */

            font-weight: 600;
            font-style: SemiBold;
            font-size: 18px;
            line-height: 24px;
            letter-spacing: 0px;
            vertical-align: middle;

        }

        /* .stat-group p span {
            font-size: 14px;
            font-weight: 400;
            color: var(--text-muted);
            margin-left: 4px;
        } */

        /* Mobile Menu Button */
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-dark);
        }

        /* --- RESPONSIVE BREAKPOINTS --- */
        @media (max-width: 1024px) {
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
                margin-right: 16px;
            }

            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .main-wrapper {
                margin-left: 0;
                padding: 20px;
                width: 100%;
            }

            .header {
                justify-content: flex-start;
            }

            .user-profile-top {
                margin-left: auto;
            }

            .profile-card {
                grid-template-columns: 1fr;
                padding: 20px;
                gap: 24px;
            }

            .profile-left {
                border-bottom: 1px solid var(--border-color);
                padding-bottom: 24px;
            }
        }

        @media (max-width: 480px) {
            .details-grid {
                grid-template-columns: 1fr;
            }

            .breadcrumb {
                font-size: 16px;
            }

            .admin-name,
            .admin-role {
                display: none;
            }

            .attendance-analytics {
                gap: 16px;
            }
        }
    </style>
    </head>

    <body>

        <nav class="sidebar" id="sidebar">
            <div class="logo-container">
                <div class="logo">
                    <img src="{{ asset('images/Artboard 1 2.svg') }}" alt="">
                </div>
            </div>
            <ul class="nav-links">
                <li class="nav-item">
                    <a href="{{ route('admin-dashboard.index') }}"><i><img src="{{ asset('images/dash.svg') }}"
                                alt=""></i>
                        Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin-employee.index') }}"><i><img src="{{ asset('images/employee.svg') }}"
                                alt=""></i>
                        Employees</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin-attendance.index') }}"><i><img src="{{ asset('images/attendance.svg') }}"
                                alt=""></i>
                        Attendance</a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <div class="nav-item">
                    <a href="{{ route('admin-setting.index') }}"><i><img src="{{ asset('images/setting.svg') }}"
                                alt=""></i>
                        Settings</a>
                </div>
                <x-adminlogout />
            </div>
        </nav>

        <main class="main-wrapper">

            <header class="header">
                <button class="menu-toggle" id="menuToggle" aria-label="Toggle Menu">
                    <i data-lucide="menu"></i>
                </button>
                <div class="breadcrumb">
                    Employee Overview
                </div>
                <div class="user-profile-top">
                    {{-- <button class="notification-btn" aria-label="Notifications">
                        <i><img src="{{ asset('images/bell.png') }}" alt=""></i>
                        <div class="notification-dot"></div>
                    </button> --}}
                    <div class="admin-info">
                        @php
                            $firstInitial = substr($adminUser->first_name, 0, 1);
                            $lastInitial = substr($adminUser->last_name, 0, 1);

                            $initials = strtoupper($firstInitial . $lastInitial);

                        @endphp
                        <a href="{{ route('admin-setting.index') }}" style="text-decoration: none">
                            <div class="initials">
                                {{ $initials }}
                            </div>
                        </a>
                        <div>
                            <div class="admin-name">{{ $adminUser->first_name }} {{$adminUser->last_name  }}</div>
                            <div class="admin-role">Admin</div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="tabs-container">
                <a href="{{ route('view-employee.show', $user->uuid) }}">
                    Employee Profile</a>
                <a href="{{ route('view-details.show', $user->uuid) }}">
                    Attendance Details</a>
            </div>

            <div class="dashboard-grid">

                <section class="profile-card">
                    <div class="profile-left">
                        @php
                            $firstInitial = substr($user->first_name, 0, 1);
                            $lastInitial = substr($user->last_name, 0, 1);
                            $initials = strtoupper($firstInitial . $lastInitial);
                        @endphp

                        <div class="profile-pic" style="overflow: hidden; 
                        width: 140px; 
                        height: 140px; 
                        background-color: #E2EEF9; 
                        color: #06414F; 
                        border-radius: 50%; 
                        display: flex; 
                        align-items: center; 
                        justify-content: center; 
                        font-weight: 700; 
                        font-size: 40px;
                        flex-shrink: 0;
                        padding: 0;">

                            @if ($user->avatar)
                                <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar"
                                    style="width:100%;height:100%;object-fit:cover;border-radius:50%;">
                            @else
                                {{ $initials }}
                            @endif
                        </div>

                        <div class="emp-meta-wrapper">

                            <h2 class="emp-name">{{ $user->first_name }} {{ $user->last_name }}</h2>
                            <p class="emp-role">{{ $user->position }}</p>
                        </div>
                    </div>
                    <div class="profile-right">

                        <div class="gender-selector">
                        </div>

                        <h3 class="info-section-titles">Personal Details</h3>
                        <div class="details-grid">
                            <div class="detail-group">
                                <label>First Name</label>
                                <p>{{ $user->first_name }}</p>
                            </div>
                            <div class="detail-group">
                                <label>Last Name</label>
                                <p>{{ $user->last_name }}</p>
                            </div>
                            <div class="detail-group">
                                <label>Email Address</label>
                                <p>{{ $user->email }}</p>
                            </div>
                            <div class="detail-group">
                                <label>Phone</label>
                                <p>{{ $user->phone }}</p>
                            </div>
                            <div class="detail-group">
                                <label>Position</label>
                                <p>{{ $user->position }}</p>
                            </div>
                            <div class="detail-group">
                                <label>Gender</label>
                                <p>{{ $user->gender }}</p>
                            </div>
                        </div>

                        <div class="address-section">
                            <h3 class="info-section-titles">Address</h3>
                            <div class="details-grid">
                                <div class="detail-group">
                                    <label>Country</label>
                                    <p>{{ $user->country }}</p>
                                </div>
                                <div class="detail-group">
                                    <label>City/State</label>
                                    <p>{{ $user->state }}</p>
                                </div>
                            </div>
                            <div class="detail-group" style="margin-top: 4px;">
                                <label>Residential Address</label>
                                <p>{{ $user->address }}</p>
                            </div>
                        </div>
                    </div>
                </section>

                <aside class="metrics-column">

                    <div class="metric-card">
                        <h3 class="metric-title">Today's Progress</h3>
                        <div class="progress-container">
                            <div class="progress-header">
                                <span class="progress-label">Hours Logged</span>
                                <span class="progress-value">{{ number_format($hoursLogged, 1) }} / 8.0 hrs</span>
                            </div>
                            <div class="progress-bar-bg">
                                <div class="progress-bar-fill"
                                    title="Logged {{ number_format($hoursLogged, 1) }} of 8.00 hours ({{ $progressPercent }}% complete)"
                                    style="width: {{ $progressPercent }}% !important; height: 100%; background-color: green; border-radius: 4px; transition: width 0.4s ease;"
                                    aria-label="Logged {{ number_format($hoursLogged, 1) }} of 8.00 hours, {{ $progressPercent }}% complete">
                                </div>
                            </div>
                        </div>
                        <div class="target-box">
                            <div class="target-label">Target</div>
                            <div class="target-val">40h<span>/wk</span></div>
                        </div>
                    </div>

                    <div class="metric-card white-bg">
                        <h3 class="metric-title">Attendance</h3>
                        <div class="attendance-analytics">
                            <div class="chart-container">
                                <svg class="donut-chart" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid meet">
                                    <circle class="donut-bg" cx="50" cy="50" r="40"></circle>
                                    <circle class="donut-fill" stroke-dasharray="251.2"
                                        stroke-dashoffset="{{ $strokeDashOffset }}"
                                        style="stroke-dasharray: 251.2 !important; stroke-dashoffset: {{ $strokeDashOffset }}px !important; transition: stroke-dashoffset 0.5s ease; stroke: #00A64A; fill: transparent; stroke-width: 8;"
                                        title="Attendance completion:{{ $attendancePercentage }}% on time"
                                        aria-label="Attendance completion is {{ $attendancePercentage }}% on time"
                                        cx="50" cy="50" r="40">
                                    </circle>
                                </svg>
                                <div class="chart-center-text">{{ $attendancePercentage }}%</div>
                            </div>
                            <div class="attendance-stats">
                                <div class="stat-group">
                                    <label>On Time</label>
                                    <p>{{ $onTimeDays }} <span>{{ Str::plural('Day', $onTimeDays) }}</span></p>
                                </div>
                                <div class="stat-group">
                                    <label>Late/Missed</label>
                                    <p>{{ $lateOrMissedDays }} <span>{{ Str::plural('Day', $lateOrMissedDays) }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>
            <br>
            <br>

            <div class="back">
                <a href="{{ route('admin-employee.index') }}">Back</a>
            </div>
        </main>

        <script>
            // Initialize Lucide SVG icons
            lucide.createIcons();

            // Responsive Hamburger Navigation Trigger Toggle
            const menuToggle = document.getElementById('menuToggle');
            const sidebar = document.getElementById('sidebar');

            menuToggle.addEventListener('click', (e) => {
                sidebar.classList.toggle('active');
                e.stopPropagation();
            });

            document.addEventListener('click', (e) => {
                if (sidebar.classList.contains('active') && !sidebar.contains(e.target) && e.target !== menuToggle) {
                    sidebar.classList.remove('active');
                }
            });
        </script>
    </body>

    </html>
</x-layout>