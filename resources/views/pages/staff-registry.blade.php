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

        /* ========== SIDEBAR ========== */
        .sidebar {
            width: 260px;
            background-color: #06414F;
            display: flex;
            flex-direction: column;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            height: 100vh;
            z-index: 1000;
            overflow-y: auto;
        }

        .logo {
            margin-left: -18px;
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
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            text-decoration: none;
            padding: 14px;
            color: #B7B7B7;
            gap: 8px;
            font-size: 18px;
            font-weight: 500;
            border-radius: 8px;
        }

        .nav-link:hover {
            background-color: #ffffff;
            color: #06414F;
        }

        .setting-link {
            display: none;
        }

        .sidebar-close {
            display: none;
        }

        .user-email {
            display: none;
        }

        .hamburger{
            display: none;
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
        }

        .setting-links:hover {
            background-color: #ffffff;
            color: #06414F;
        }

        .footer-nav {
            margin-top: auto;
            padding-top: 16px;
        }

        /* ========== MAIN ========== */
        .main-content {
            flex: 1;
            padding: 25px;
            margin-left: 260px;
            background: #fff;
            min-height: 100vh;
        }

        .mobile-brand {
            display: none;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .top-bar h2 {
            font-weight: 600;
            font-size: 18px;
            line-height: 100%;
        }

        .user-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-actions span {
            font-weight: 400;
            font-size: 12px;
        }

        .user-initials {
            font-weight: 400;
            font-size: 12px;
            padding: 8px 12px;
            border-radius: 100px;
            background: #FAFAFA;
        }

        .profile-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .profile h3 {
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 5px;
        }

        .profile p {
            color: #7D7C7C;
            font-weight: 500;
            font-size: 12px;
        }

        .month-select {
            border: 1px solid #E5E7EB;
            padding: 10px 14px;
            border-radius: 8px;
            background: white;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            min-width: 130px;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%236B7280' d='M3 4.5L6 7.5L9 4.5'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            padding-right: 32px;
        }

        /* Stats */
        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 25px;
        }

        .card {
            display: flex;
            align-items: center;
            gap: 12px;
            border-radius: 12px;
            border: 1px solid #EDEDED;
            padding: 16px 14px;
            background: #fff;
            min-height: 87px;
        }

        .card h4 {
            font-weight: 500;
            font-size: 13px;
            margin-bottom: 4px;
        }

        .card h3 {
            font-weight: 600;
            font-size: 18px;
            line-height: 1.2;
            color: #111827;
        }

        .card h3 span {
            font-weight: 500;
            font-size: 14px;
        }

        .card p {
            font-weight: 400;
            font-size: 12px;
            margin-top: 2px;
        }

        .icon {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-shrink: 0;
        }

        .icon img {
            width: 44px;
            height: 44px;
            object-fit: contain;
        }

        /* Table */
        .table-box {
            background: white;
            border-radius: 12px;
            border: 1px solid #eee;
            padding: 20px;
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
        }

        .table-header h3 {
            font-weight: 600;
            font-size: 15px;
            color: #111827;
        }

       
        .table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        table {
            width: 100%;
            min-width: 700px;          
            border-collapse: collapse;
        }

        th {
            text-align: left;
            padding: 12px 10px;
            background: #FBFBFD;
            font-weight: 600;
            font-size: 13px;
            white-space: nowrap;
        }

        td {
            padding: 14px 10px;
            border-bottom: 1px solid #F3F4F6;
            font-weight: 500;
            font-size: 13px;
            color: #374151;
            white-space: nowrap;
        }

        .status {
            padding: 6px 14px;
            border-radius: 100px;
            font-size: 12px;
            font-weight: 500;
            display: inline-block;
        }

        .present {
            background: #DAF2E3;
            color: #0A6C45;
        }

        .absent {
            background: #FFD9D9;
            color: #FF0707;
        }

        .late {
            background: #FFF3C3;
            color: #EFC005;
        }

        .late-time {
            color: #EFC005;
            font-weight: 600;
        }

        .initials {
            width: 50px;
            height: 50px;
            background-color: #E2EEF9;
            color: #06414F;
            font-weight: 700;
            font-size: 16px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-transform: uppercase;
            border: 1px solid #C5DCF2;
            overflow: hidden;
            flex-shrink: 0;
        }

        .initials img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .pagination-wrapper{
            display: none;
        }
       
        @media (max-width: 992px) {
            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .sidebar {
                width: 220px;
            }

            .main-content {
                margin-left: 220px;
            }
        }

        /* ========== MOBILE ========== */
        @media (max-width: 768px) {
            body {
                background: #ffffff;
            }

            .main-content {
                margin-left: 0 !important;
                padding: 16px !important;
                width: 100%;
            }

            /* Sidebar mobile */
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
                font-size: 22px;
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

            .mobile-brand {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
                margin-bottom: 20px;
            }

            .mobile-brand img {
                width: 68px;
                height: 30px;
                display: block;
                margin-bottom: 12px;
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
                margin-top: -33px;
                margin-right: -12px;
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


            
            .top-bar h2,
            .user-actions {
                display: none;
            }

            .top-bar {
                margin-bottom: 0;
            }

            
            .profile-row {
                align-items: center;
                margin-bottom: 20px;
            }

            .profile h3 {
                font-size: 16px;
            }

            .profile p {
                font-size: 11px;
            }

            .initials {
                width: 44px;
                height: 44px;
                font-size: 14px;
            }

            .month-select {
                padding: 8px 12px;
                font-size: 12px;
                min-width: 110px;
                padding-right: 28px;
            }

            /* 2×2 cards */
            .stats {
                grid-template-columns: repeat(2, 1fr);
                gap: 12px;
                margin-bottom: 20px;
            }

            .card {
                padding: 14px 12px;
                gap: 10px;
                min-height: 80px;
                border-radius: 10px;
            }

            .icon {
                width: 38px;
                height: 38px;
            }

            .icon img {
                width: 20px;
                height: 20px;
            }

            .card h4 {
                font-size: 12px;
            }

            .card h3 {
                font-size: 16px;
            }

            .card h3 span {
                font-size: 13px;
            }

            .card p {
                font-size: 11px;
            }

           
            .table-box {
                padding: 16px 12px;
                border-radius: 12px;
            }

            .table-header {
                margin-bottom: 12px;
            }

            .table-header h3 {
                font-size: 14px;
            }

            
            .table-responsive {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                margin: 0 -4px;          
            }

            table {
                min-width: 720px;        
                width: 100%;
            }

            th,
            td {
                padding: 12px 10px;
                font-size: 12px;
            }

            th {
                background: #FBFBFD;
                font-size: 12px;
                color: #374151;
                font-weight: 600;
            }

            td[colspan] {
                white-space: normal !important;
            }

            .setting-link {
                display: flex;
                align-items: center;
                justify-content: flex-start;
                padding: 12px;
                gap: 5px;
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
            }

            .setting-link i img {
                width: 100%;
                height: 100%;
                object-fit: contain;
            }

            .setting-links {
                display: none;
            }

            .nav-list {
                margin-left: -15px;
            }

            .user-email {
                display: flex;
                align-items: center;
                gap: 12px;
                padding: 10px 12px;
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

            .user-email .profile-pic img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 50%;
            }

            .pagination-wrapper .small,
            .pagination-wrapper .text-muted,
            .pagination-wrapper .small.text-muted {
                display: none !important;
            }

           
            .pagination-wrapper {
                display: flex !important;
                flex-direction: column !important;
                align-items: flex-start !important;
                gap: 12px !important;
                margin-top: 20px !important;
                width: 100% !important;
            }

            .pagination-wrapper nav,
            .pagination-wrapper .d-flex {
                display: flex !important;
                flex-wrap: wrap !important;
                align-items: center !important;
                gap: 6px !important;
                width: 100% !important;
                justify-content: flex-start !important;
            }

            .pagination-wrapper .d-none,
            .pagination-wrapper .d-sm-none {
                display: flex !important;
            }

            .pagination-wrapper .pagination {
                display: flex !important;
                align-items: center !important;
                gap: 6px !important;
                list-style: none !important;
                padding: 0 !important;
                margin: 0 !important;
            }

            .pagination-wrapper .page-item {
                display: inline-flex !important;
                margin: 0 !important;
            }

            .pagination-wrapper .page-link {
                display: flex !important;
                align-items: center !important;
                justify-content: center !important;
                min-width: 32px !important;
                height: 32px !important;
                padding: 0 8px !important;
                border-radius: 50% !important;
                font-size: 13px !important;
                font-weight: 500 !important;
                color: #374151 !important;
                background: transparent !important;
                border: none !important;
                text-decoration: none !important;
                line-height: 1 !important;
                box-shadow: none !important;
            }

            .pagination-wrapper .page-item.active .page-link {
                background: #06414F !important;
                color: #fff !important;
            }

            .pagination-wrapper .page-link:hover {
                background: #F3F4F6 !important;
                color: #06414F !important;
            }

            .pagination-wrapper .page-item.disabled .page-link {
                color: #9CA3AF !important;
                background: transparent !important;
                pointer-events: none !important;
            }

           
            .pagination-wrapper .page-item:first-child .page-link,
            .pagination-wrapper .page-item:last-child .page-link {
                border-radius: 8px !important;
                min-width: auto !important;
                padding: 0 14px !important;
                border: 1px solid #E5E7EB !important;
                background: #fff !important;
                height: 32px !important;
            }

            .pagination-wrapper .page-item:first-child .page-link:hover,
            .pagination-wrapper .page-item:last-child .page-link:hover {
                background: #F9FAFB !important;
                border-color: #D1D5DB !important;
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
                                        <img src="{{ asset('storage/' . $user->avatar) }}" alt="Profile">
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
                                <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li>
                            <x-logout />
                        </li>
                    </ul>
                </nav>
                <button class="sidebar-close" id="sidebarClose">×</button>
            </aside>
            <div class="sidebar-overlay" id="sidebarOverlay"></div>

           
            <main class="main-content">

                
                <div class="top-bar">
                    <div class="mobile-brand">
                        <a href="{{ route('index.staff') }}" class="mobile-logo-link">
                            <img src="{{ asset('images/Artboard 1-1 2.svg') }}" class="mobile-logo" alt="HTG">
                        </a>
                    </div>
                    <div class="hamburger">
                        <button class="hamburger-btn" id="openSidebar">
                            <img src="{{ asset('images/breadcrumb.svg') }}" alt="Menu">
                        </button>
                    </div>

                    <h2>Personal Attendance Registry</h2>

                    <div class="user-actions">
                        <span>{{ $user->email }}</span>
                        <div class="user-initials"
                            style="overflow: hidden; width: 35px; height: 35px; background-color: #E2EEF9; color: #06414F; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 13px; flex-shrink: 0; padding: 0;">
                            @if($user->avatar)
                                <img src="{{ asset('storage/' . $user->avatar) }}" alt="Profile"
                                    style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            @else
                                {{ strtoupper(substr($user->first_name, 0, 1)) }}
                            @endif
                        </div>
                    </div>
                </div>

                
                <div class="profile-row">
                    <div class="profile">
                        <div class="initials">
                            @if(Auth::user()->avatar)
                                <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Profile">
                            @else
                                {{ strtoupper(substr(Auth::user()->first_name, 0, 1) . substr(Auth::user()->last_name, 0, 1)) }}
                            @endif
                        </div>
                        <div>
                            <h3>{{ $user->first_name }} {{ $user->last_name }}</h3>
                            <p>{{ $user->department }} | {{ $user->position }}</p>
                        </div>
                    </div>

                    <select class="month-select" name="month" id="monthSelect"
                        onchange="window.location = '{{ route('index.registry') }}?month=' + this.value">
                        @foreach($availableMonths as $month)
                            <option value="{{ $month['value'] }}" {{ $selectedMonthRaw === $month['value'] ? 'selected' : '' }}>
                                {{ $month['label'] }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="stats">
                    <div class="card">
                        <div class="icon"><img src="{{ asset('images/Group 91.png') }}" alt=""></div>
                        <div>
                            <h4>Days Present</h4>
                            <h3>{{ $daysPresent }}<span>/{{ $expectedWorkingDays }}</span></h3>
                            <p>This month</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="icon"><img src="{{ asset('images/Frame 88.png') }}" alt=""></div>
                        <div>
                            <h4>Days Absent</h4>
                            <h3>{{ $daysAbsent }}<span>/{{ $expectedWorkingDays }}</span></h3>
                            <p>This month</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="icon"><img src="{{ asset('images/Frame 90.png') }}" alt=""></div>
                        <div>
                            <h4>Total Hours</h4>
                            <h3>{{ $totalHoursFormatted }}</h3>
                            <p>This month</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="icon"><img src="{{ asset('images/Frame 94.png') }}" alt=""></div>
                        <div>
                            <h4>Attendance Rate</h4>
                            <h3>{{ $attendanceRate }}%</h3>
                            <p>This month</p>
                        </div>
                    </div>
                </div>

                <div class="table-box">
                    <div class="table-header">
                        <h3>Attendance Record</h3>
                    </div>

                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Day</th>
                                    <th>Clock-In</th>
                                    <th>Clock-Out</th>
                                    <th>Hours</th>
                                    <th>Status</th>
                                    <th>Remark</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($attendanceRecords as $record)
                                    @php
                                        $recordDate = \Carbon\Carbon::parse($record->date);
                                        $clockIn = $record->clock_in ? \Carbon\Carbon::parse($record->clock_in) : null;
                                        $clockOut = $record->clock_out ? \Carbon\Carbon::parse($record->clock_out) : null;

                                        $statusClass = 'absent';
                                        $statusLabel = 'Absent';
                                        $remark = '—';
                                        $hoursText = '—';

                                        if ($clockIn) {
                                            $isLate = $clockIn->format('H:i:s') > '10:00:00';
                                            if ($isLate) {
                                                $statusClass = 'late';
                                                $statusLabel = 'Late';
                                                $cutoff = \Carbon\Carbon::parse($record->date . ' 10:00:00');
                                                $diff = $clockIn->diff($cutoff);
                                                $remark = 'Late by ';
                                                if ($diff->h > 0) {
                                                    $remark .= $diff->h . 'h ';
                                                }
                                                $remark .= $diff->i . 'm';
                                            } else {
                                                $statusClass = 'present';
                                                $statusLabel = 'Present';
                                                $remark = 'Early';
                                            }
                                        }

                                        if ($clockIn && $clockOut) {
                                            $diffHours = $clockOut->diff($clockIn);
                                            $hoursText = "{$diffHours->h}h {$diffHours->i}m";
                                        }
                                    @endphp
                                    <tr>
                                        <td>{{ $recordDate->format('j F Y') }}</td>
                                        <td>{{ $recordDate->format('l') }}</td>
                                        <td class="{{ $statusClass === 'late' ? 'late-time' : '' }}">
                                            {{ $clockIn ? $clockIn->format('h:i A') : '—' }}
                                        </td>
                                        <td>{{ $clockOut ? $clockOut->format('h:i A') : '—' }}</td>
                                        <td>{{ $hoursText }}</td>
                                        <td>
                                            <span class="status {{ $statusClass }}">{{ $statusLabel }}</span>
                                        </td>
                                        <td>{{ $remark }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" style="text-align: center; padding: 30px; color: #A0AEC0;">
                                            No attendance activities tracked for this selected month.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <div class="pagination-wrapper">
                            {{ $attendanceRecords->links() }}
                        </div>
                    </div>
                </div>

                
            </main>
        </div>

        <script>
            // Sidebar toggle
            const sidebar = document.querySelector('.sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            const openBtn = document.getElementById('openSidebar');
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

            // Client-side pagination
            const tableBody = document.querySelector('table tbody');
            const rows = Array.from(tableBody.querySelectorAll('tr')).filter(r => r.querySelectorAll('td').length > 1);
            const rowsPerPageSelect = document.getElementById('rowsPerPage');
            const paginationInfo = document.getElementById('paginationInfo');
            const nextPageBtn = document.getElementById('nextPageBtn');
            const pageBtns = document.querySelectorAll('.pagination-nav .page-btn');

            let currentPage = 1;
            let rowsPerPage = parseInt(rowsPerPageSelect?.value || 10, 10);

            function displayTable() {
                const totalRows = rows.length;
                const totalPages = Math.ceil(totalRows / rowsPerPage) || 1;

                if (currentPage > totalPages) currentPage = totalPages;
                if (currentPage < 1) currentPage = 1;

                const start = (currentPage - 1) * rowsPerPage;
                const end = start + rowsPerPage;

                rows.forEach((row, index) => {
                    row.style.display = (index >= start && index < end) ? '' : 'none';
                });

                if (paginationInfo) {
                    paginationInfo.textContent = `Per page of ${totalRows} results.`;
                }

                pageBtns.forEach(btn => {
                    const page = parseInt(btn.dataset.page, 10);
                    btn.classList.toggle('active', page === currentPage);
                });
            }

            rowsPerPageSelect?.addEventListener('change', (e) => {
                rowsPerPage = parseInt(e.target.value, 10);
                currentPage = 1;
                displayTable();
            });

            pageBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    currentPage = parseInt(btn.dataset.page, 10);
                    displayTable();
                });
            });

            nextPageBtn?.addEventListener('click', () => {
                const totalPages = Math.ceil(rows.length / rowsPerPage);
                if (currentPage < totalPages) {
                    currentPage++;
                    displayTable();
                }
            });

            displayTable();
        </script>
    </body>
</x-layout>