<x-layout>
    <style>
        /* ==========================================================================
       1. Initial Variable Setup & Reset Rules
       ========================================================================== */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }


        body {
            font-family: 'Inter', 'Inter var', sans-serif;
            background-color: #ffffff;
            color: #000000;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .dashboard-container {
            display: flex;
            width: 100vw;
            height: 100vh;
        }

        /* ==========================================================================
       2. Master Viewport Sidebar Panel Component
       ========================================================================== */
        .sidebar {
            width: 260px;
            background-color: #06414F;
            display: flex;
            flex-direction: column;
            padding: 24px 0;
            flex-shrink: 0;
        }

        .brand-section {
            padding: 0 24px 48px 24px;
        }

        .menu-links {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }

        .nav-list {
            list-style-type: none;
            display: flex;
            flex-direction: column;
            gap: 8px;
            padding: 0 16px;
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

        /* ==========================================================================
       3. Top Application Bar Element Styles
       ========================================================================== */
        .main-viewport {
            flex: 1;
            padding: 40px 50px;
            overflow-y: auto;
            background-color: #ffffff;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 32px;
        }

        .parent-route {
            font-size: 24px;
            font-weight: 700;
            display: block;
            margin-bottom: 24px;
        }

        .page-title {
            font-size: 24px;
            font-weight: 700;
        }

        .live-date-string {
            font-size: 14px;
            color: #777777;
            font-weight: 500;
            margin-top: 4px;
        }

        .user-profile-widget {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .notification-bell {
            position: relative;
            font-size: 1.25rem;
            color: #333;
        }

        .bell-badge {
            position: absolute;
            top: 0;
            right: 0;
            width: 6px;
            height: 6px;
            background-color: #ef4444;
            border-radius: 50%;
        }

        .profile-details {
            display: flex;
            align-items: center;
            gap: 12px;
            border-radius: 30px;
        }

        .profile-email {
            font-size: 12px;
            font-weight: 400;
        }

        .profile-avatar-fallback {
            width: 32px;
            height: 32px;
            background-color: #FAFAFA;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 12px;
        }

        /* ==========================================================================
       4. Dual Column Fluid Workspace Grid Layout System
       ========================================================================== */
        .portal-grid {
            display: grid;
            grid-template-columns: 1fr 340px;
            gap: 32px;
            max-width: 1200px;
        }

        .grid-column-left,
        .grid-column-right {
            display: flex;
            flex-direction: column;
            gap: 32px;
        }

        /* Standard Base Modular Card Sizing rules */
        section {
            border: 1px solid #EBEBEB;
            border-radius: 16px;
            padding: 32px;



        }

        /* ==========================================================================
       5. Interactive Functional Shift Card Component Elements
       ========================================================================== */
        .control-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid #EBEBEB;

            width: 670px;
            height: 232px;
            border-radius: 4px;
            opacity: 1;
            padding-top: 32px;
            padding-right: 32px;
            padding-bottom: 79px;
            padding-left: 32px;
            border-width: 1px;
        }

        .timer-display-box {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .status-pill {
            font-size: 0.72rem;
            font-weight: 800;
            color: #ffffff;
            padding: 6px 14px;
            border-radius: 20px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 16px;
            letter-spacing: 0.2px;
        }

        .status-out {
            background-color: #08B040;
        }

        .status-in {
            background-color: #ef4444;
        }

        .status-pill .dot {
            width: 6px;
            height: 6px;
            background-color: #ffffff;
            border-radius: 50%;
        }

        .meta-label {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        #timer-counter {
            font-size: 48px;
            font-weight: 800;
            letter-spacing: -1px;
        }

        /* Action Trigger Elements */
        .action-buttons-group {
            display: flex;
            flex-direction: column;
            gap: 12px;
            width: 200px;
        }

        .btn-action {
            width: 100%;
            padding: 16px;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.2s ease;
        }

        .active-in {
            background-color: #08B040;
            color: #ffffff;
        }

        .disable-in {
            background-color: #F1F1F1;
            color: #A5A6A5;
            cursor: not-allowed;
        }

        .active-out {
            background-color: #FFDAD6;
            color: #93000A;
        }

        .disable-out {
            background-color: #FFDAD6;
            color: #93000A;
            cursor: not-allowed;
        }

        /* ==========================================================================
       6. Activity Logs Components Layout Design
       ========================================================================== */
        .activity-log-card {
            width: 670px;
            height: 340px;
            border-radius: 8px;
            gap: 32px;
            opacity: 1;
            padding-top: 32px;
            padding-right: 32px;
            padding-bottom: 62px;
            padding-left: 32px;
            border-width: 1px;

        }

        .section-card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;

        }

        .section-card-header h3 {
            font-size: 20px;
            font-weight: 700;
        }

        .view-all-link {
            font-size: 14px;
            font-weight: 600;
            color: #06414F;
            text-decoration: none;
        }

        .activity-feed-wrapper {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .feed-item {
            display: flex;
            align-items: center;
            background-color: #F6F8FA;
            padding: 14px 20px;
            border-radius: 12px;
        }

        .feed-icon-box {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            margin-right: 16px;
        }


        .feed-details {
            flex: 1;
        }

        .feed-details h4 {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 2px;
        }

        .feed-details p {
            font-size: 12px;
            font-weight: 400;
        }

        .feed-timestamp {
            text-align: right;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .feed-timestamp .time {
            font-size: 14px;
            font-weight: 600;
        }

        .feed-timestamp .status-tag.verified {
            font-size: 10px;
            font-weight: 700;
            color: #00A64A;
        }

        /* ==========================================================================
       7. Right Sidebar Progress and Analytics Widgets
       ========================================================================== */
        .progress-widget-card {
            background: #F6F8FA;
            border-radius: 4px;
            border: none !important;
        }


        .grid-column-right h3 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 20px;

        }

        /* Progress Linear Bar Element */
        .metric-progress-header {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 10px;

        }

        .metric-value {
            font-weight: 700;
        }

        .progress-bar-track {
            width: 100%;
            height: 10px;
            background-color: #C3D7DC;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 24px;
        }

        .progress-bar-fill {
            height: 100%;
            background-color: #06414F;
            border-radius: 20px;
            transition: width 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .target-block-pill {
            background-color: #C3D7DC;
            border-radius: 8px;
            padding: 12px 16px;
            display: inline-flex;
            flex-direction: column;
            width: 100px;
        }

        .target-title {
            font-size: 10px;
            font-weight: 800;
            color: #06414F;
            letter-spacing: 0px;
        }

        .target-amount {
            font-size: 24px;
            font-weight: 600;
            color: #06414F;
        }

        .target-amount small {
            font-size: 12px;
            font-weight: 400;
        }

        /* Attendance Radial Analytics Panel Components */
        .attendance-analytics-card {
            width: 340px;
            height: 200px;
            border-radius: 8px;
            justify-content: space-between;
            opacity: 1;
            padding: 24px;
            border-width: 1px;

        }

        .attendance-analytics-card h3 {
            
            font-weight: 700;
            font-style: Bold;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: 0px;
            vertical-align: middle;

            margin-bottom: 20px;
        }

        .analytics-radial-content {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .chart-donut-wrapper {
            position: relative;
            width: 100px;
            height: 100px;
        }

        .donut-fill {
            /* transform: rotate(-90deg); */
            transform-origin: 50px 50px;
        }

        .donut-percentage {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-weight: 800;
            font-style: Extra Bold;
            font-size: 20px;
            line-height: 28px;
            letter-spacing: 0px;
            vertical-align: middle;

        }

        .data-legends {
            display: flex;
            flex-direction: column;
            gap: 12px;
            flex: 1;
        }

        .legend-row {
            display: flex;
            flex-direction: column;
        }

        .legend-label {
            
            font-weight: 600;
            font-style: SemiBold;
            font-size: 10px;
            line-height: 100%;
            letter-spacing: 0px;
            vertical-align: middle;
            color: #4F4E4E;

        }

        .legend-value {

            color: #000000;
            
            font-weight: 600;
            font-style: SemiBold;
            font-size: 18px;
            line-height: 24px;
            letter-spacing: 0px;
            vertical-align: middle;

        }

        /* Quick Actions List Utilities */
        .quick-actions-card {
            width: 340px;
            height: 145px;
            border-radius: 8px;
            gap: 8px;
            opacity: 1;
            padding: 24px;
            border-width: 1px;

        }

        .quick-actions-card {
            font-weight: 700;
            font-style: Bold;
            font-size: 16px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .action-links-list {
            list-style-type: none;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .action-links-list a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #000000;
            text-decoration: none;
            font-weight: 500;
            font-style: Medium;
            font-size: 14px;
            line-height: 20px;
            letter-spacing: 0px;
            vertical-align: middle;
            margin-bottom: 15px;

        }

        .action-links-list a i {
            font-size: 15px;
            color: #000000;
        }

        .profile-pic{
            width: 35px;
            height: 35px;
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

        /* .action-links-list a:hover {
      text-decoration: underline;
    } */

        /* ==========================================================================
       8. Viewport Breakpoint Adaptability Rule Blocks
       ========================================================================== */
        @media (max-width: 1100px) {
            .portal-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .dashboard-container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                padding: 16px 0;
            }

            .brand-section {
                padding-bottom: 16px;
            }

            .footer-nav {
                display: none;
            }

            .main-viewport {
                padding: 24px;
            }

            .top-bar {
                flex-direction: column;
                gap: 16px;
            }

            .control-card {
                flex-direction: column;
                align-items: flex-start;
                gap: 24px;
            }

            .action-buttons-group {
                width: 100%;
            }
        }
    </style>

    </head>

    <body>

        <div class="dashboard-container">

            <aside class="sidebar">
                <div class="brand-section">
                    <div class="logo">
                        <img src="/images/htg.png" alt="">
                    </div>
                </div>

                <nav class="menu-links">
                    <ul class="nav-list">
                        <li>
                            <a href="{{ route('index.staff') }}" class="nav-link">
                                <i><img src="/images/dash.png" alt=""></i> Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('index.frontId') }}" class="nav-link">
                                <i><img src="/images/employee.png" alt=""></i> ID Card
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('index.registry') }}" class="nav-link">
                                <i><img src="/images/attendance.png" alt=""></i> Registry
                            </a>
                        </li>
                    </ul>

                    <ul class="nav-list footer-nav">
                        <li>
                            <a href="{{ route('staff-edit.index') }}" class="nav-link">
                                <i><img src="/images/setting.png" alt=""></i> Settings
                            </a>
                        </li>
                        <li>
                            <x-logout />
                        </li>
                    </ul>
                </nav>
            </aside>

            <main class="main-viewport">

                <header class="top-bar">
                    <div class="breadcrumb">
                        <span class="parent-route">Dashboard</span>
                        <h1 class="page-title">Welcome back, {{ $user->first_name }}</h1>
                        <p class="live-date-string">
    Today is {{ now()->format('l, F jS Y - h:i A') }}
</p>
                    </div>

                    <div class="user-profile-widget">
                        <div class="notification-bell">
                            <i class="fa-regular fa-bell"></i>
                            <span class="bell-badge"></span>
                        </div>
                        <div class="profile-details">
                            <span class="profile-email">{{ $user->email }}</span>
                            @php
                            $firstInitial = substr($user->first_name, 0, 1);
                        @endphp
                        
                        <div class="profile-pic">
                            @if($user->avatar)
                        <img src="{{ asset('storage/' . $user->avatar) }}" alt="Profile"
                            style="width: 100%; height: 100%; object-fit: cover; border-radius: 100%;">
                    @else
                        {{ $firstInitial }}
                    @endif
                           
                        </div>
                        </div>
                    </div>
                </header>

                <div class="portal-grid">

                    <div class="grid-column-left">

                        <!-- first section -->
                        <section class="control-card">
                            <div class="timer-display-box">
                                <div id="status-pill" class="status-pill {{ $today && $today->clock_in && !$today->clock_out ? 'status-in' : 'status-out' }}">
                                    <span class="dot"></span> 
                                    {{ $today && $today->clock_in && !$today->clock_out ? 'CURRENTLY CLOCKED IN' : 'CURRENTLY CLOCKED OUT' }}
                                </div>
                                <span class="meta-label">Shift Duration</span>
                                <h2 id="timer-counter">00:00:00</h2>
                            </div>
                            
                            <div class="action-buttons-group">
                                <button id="btn-clock-in" 
                                        class="btn-action {{ $today && $today->clock_in ? 'disable-in' : 'active-in' }}"
                                        @if($today && $today->clock_in) disabled @endif>
                                    <i><img src="/images/Group 82.png" alt=""></i> Clock-In
                                </button>
                                
                                <button id="btn-clock-out"
                                        class="btn-action {{ !$today || !$today->clock_in || $today->clock_out ? 'disable-out' : 'active-out' }}"
                                        @if(!$today || !$today->clock_in || $today->clock_out) disabled @endif>
                                    <i><img src="/images/Group 81.png" alt=""></i> Clock-Out
                                </button>
                            </div>
                        </section>

                        <!-- second section -->

                        <section class="activity-log-card">
                            <div class="section-card-header">
                                <h3>Recent Activity Log</h3>
                                <a href="#" class="view-all-link">View All</a>
                            </div>

                            <div class="activity-feed-wrapper">

                                <div class="activity-feed-wrapper">

                                    @foreach($activities as $activity)
                                    
                                        @if($activity->clock_in)
                                            <div class="feed-item">
                                                <div class="feed-icon-box check-in-theme">
                                                    <i><img src="/images/Frame 83.png" alt=""></i>
                                                </div>
                                    
                                                <div class="feed-details">
                                                    <h4>Clock-In</h4>
                                                    <p>{{ \Carbon\Carbon::parse($activity->clock_in)->format('l, jS F Y') }}</p>
                                                </div>
                                    
                                                <div class="feed-timestamp">
                                                    <span class="time">{{ \Carbon\Carbon::parse($activity->clock_in)->format('h:i A') }}</span>
                                                    <span class="status-tag verified">Verified</span>
                                                </div>
                                            </div>
                                        @endif
                                    
                                    
                                        @if($activity->clock_out)
                                            <div class="feed-item">
                                                <div class="feed-icon-box check-out-theme">
                                                    <i><img src="/images/Frame 84.png" alt=""></i>
                                                </div>
                                    
                                                <div class="feed-details">
                                                    <h4>Clock-Out</h4>
                                                    <p>{{ \Carbon\Carbon::parse($activity->clock_out)->format('l, jS F Y') }}</p>
                                                </div>
                                    
                                                <div class="feed-timestamp">
                                                    <span class="time">{{ \Carbon\Carbon::parse($activity->clock_out)->format('h:i A') }}</span>
                                                    <span class="status-tag verified">Verified</span>
                                                </div>
                                            </div>
                                        @endif
                                    
                                    @endforeach
                                    
                                    </div>

                                <!--<div class="feed-item">
                                    <div class="feed-icon-box check-out-theme">
                                        <i> <img src="/images/Frame 84.png" alt=""></i>
                                    </div>
                                    <div class="feed-details">
                                        <h4>Clock-Out</h4>
                                        <p>Monday, 20th April 2026</p>
                                    </div>
                                    <div class="feed-timestamp">
                                        <span class="time">06:08 PM</span>
                                        <span class="status-tag verified">Verified</span>
                                    </div>
                                </div>

                                <div class="feed-item">
                                    <div class="feed-icon-box check-in-theme">
                                        <i> <img src="/images/Frame 83.png" alt=""> </i>
                                    </div>
                                    <div class="feed-details">
                                        <h4>Clock-In</h4>
                                        <p>Friday, 17th April 2026</p>
                                    </div>
                                    <div class="feed-timestamp">
                                        <span class="time">10:00 Am</span>
                                        <span class="status-tag verified">Verified</span>
                                    </div>
                                </div> -->

                            </div>
                        </section>
                    </div>


                    <!-- third section -->
                    <div class="grid-column-right">

                        <section class="progress-widget-card">
                            <h3>Today's Progress</h3>
                            <div class="metric-progress-header">
                                <span class="metric-label">Hours Logged</span>
                                <span id="logged-hours-value" class="metric-value">0.0 / 8.0 hrs</span>
                            </div>
                            <div class="progress-bar-track">
                                <div id="progress-bar-fill" class="progress-bar-fill" style="width: 0%; height: 8px; background-color: #00A64A; border-radius: 4px; transition: width 0.4s ease-in-out;">></div>
                            </div>

                            <div class="target-block-pill">
                                <span class="target-title">TARGET</span>
                                <span class="target-amount">40h<small>/wk</small></span>
                            </div>
                        </section>

                        <section class="attendance-analytics-card">
                            <h3>Attendance</h3>
                            <div class="analytics-radial-content">
                                <div class="chart-donut-wrapper">
                                    <svg width="100" height="100" viewBox="0 0 100 100">
                                        <circle class="donut-track" cx="50" cy="50" r="40" fill="transparent"
                                            stroke="#A3DCBC" stroke-width="8" />
                                            @php
                                            $radius = 40;
                                            $circumference = 2 * M_PI * $radius; 
                                            $offset = $circumference - ($attendancePercentage / 100) * $circumference;
                                        @endphp

                                        <circle class="donut-fill" cx="50" cy="50" r="{{ $radius }}" fill="transparent"
                                            stroke="#00A64A" stroke-width="8" stroke-dasharray="{{ $circumference }}"
                                            stroke-dashoffset="{{ $offset }}" />
                                    </svg>
                                    <div class="donut-percentage">{{ $attendancePercentage }}%</div>
                                </div>
                                <div class="data-legends">
                                    <div class="legend-row">
                                        <span class="legend-label">ON TIME</span>
                                        <span class="legend-value">{{ $onTimeDays }} {{ Str::plural('Day', $onTimeDays) }}</span>
                                    </div>
                                    <div class="legend-row">
                                        <span class="legend-label">LATE/MISSED</span>
                                        <span class="legend-value">{{ $lateDays }} {{ Str::plural('Day', $lateDays) }}</span>
                                    </div>
                                </div>
                            </div>
                        </section>

                        

                    </div>

                </div>
            </main>

        </div>

        
            
        <script>
            document.addEventListener("DOMContentLoaded", () => {
            
                const timerDisplay = document.getElementById("timer-counter");
                const statusPill   = document.getElementById("status-pill");
                const btnClockIn   = document.getElementById("btn-clock-in");
                const btnClockOut  = document.getElementById("btn-clock-out");
            
                let timerInterval = null;
                let seconds = 0;
            
                
                const clockInTimestamp = @json($today && $today->clock_in ? \Carbon\Carbon::parse($today->clock_in)->timestamp : null);
                const clockOutTimestamp = @json($today && $today->clock_out ? \Carbon\Carbon::parse($today->clock_out)->timestamp : null);
            
                let isClockedIn = clockInTimestamp !== null && clockOutTimestamp === null;
            
                const csrf = document.querySelector('meta[name="csrf-token"]') 
                    ? document.querySelector('meta[name="csrf-token"]').getAttribute('content') 
                    : "{{ csrf_token() }}";
            
                function formatTime(s) {
                    let h = Math.floor(s / 3600);
                    let m = Math.floor((s % 3600) / 60);
                    let sec = s % 60;
                    return `${h.toString().padStart(2,'0')}:${m.toString().padStart(2,'0')}:${sec.toString().padStart(2,'0')}`;
                }
            
                function updateProgressMetrics(totalSeconds) {
                    const progressValueText = document.getElementById("logged-hours-value");
                    const progressBarFill = document.getElementById("progress-bar-fill");
            
                    if (!progressValueText || !progressBarFill) return;
            
                    const hoursDecimal = (totalSeconds / 3600).toFixed(1);
                    const targetHoursCap = 8.0;
                    const progressPercentage = Math.min((hoursDecimal / targetHoursCap) * 100, 100);
            
                    progressValueText.textContent = `${hoursDecimal} / ${targetHoursCap} hrs`;
                    progressBarFill.style.width = `${progressPercentage}%`;
                }
            
                
                if (clockInTimestamp) {
                    if (clockOutTimestamp) {
                     
                        seconds = clockOutTimestamp - clockInTimestamp;
                        timerDisplay.textContent = formatTime(seconds);
                        updateProgressMetrics(seconds);
                        
                        btnClockIn.disabled = true;
                        btnClockIn.className = "btn-action disable-in";
                        btnClockOut.disabled = true;
                        btnClockOut.className = "btn-action disable-out";
                        statusPill.innerHTML = `<span class="dot"></span> SHIFT COMPLETE`;
                        statusPill.className = "status-pill status-out";
                    } else {
                        
                        const calculateElapsed = () => {
                            seconds = Math.floor(Date.now() / 1000) - clockInTimestamp;
                            timerDisplay.textContent = formatTime(seconds);
                            updateProgressMetrics(seconds);
                        };
            
                        calculateElapsed();
                        timerInterval = setInterval(calculateElapsed, 1000);
                    }
                }
            
           
                btnClockIn.addEventListener("click", () => {
                    if (isClockedIn) return;
            
                    fetch('{{ route("clock.in") }}', {
                        method: 'POST',
                        headers: { 
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrf 
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.status) {
                            location.reload(); 
                        } else {
                            alert(data.message);
                        }
                    })
                    .catch(() => alert("Error connecting to server"));
                });
            
                
                btnClockOut.addEventListener("click", () => {
                    if (!isClockedIn) return;
            
                    fetch('{{ route("clock.out") }}', {
                        method: 'POST',
                        headers: { 
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrf 
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.status) {
                            clearInterval(timerInterval);
                            location.reload();
                        } else {
                            alert(data.message);
                        }
                    })
                    .catch(() => alert("Error connecting to server"));
                });
            });
            </script>
       



    </body>

    </html>
</x-layout>