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

        /* sidebar */
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
            list-style-type: none;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .nav-link {
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

        .nav-link .icon {
            margin-right: 12px;
        }

        .nav-link:hover {
            background-color: #ffffff;
            color: #06414F;
        }

        .setting-link{
            display: none;
        }

        .sidebar-close{
            display: none;
        }

        .user-email{
            display: none;
        }

        .setting-links{
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

        .setting-links:hover{
            background-color: #ffffff;
            color: #06414F;
        }

        .footer-nav {
            margin-top: auto;
            padding-top: 16px;
        }

        /* Main */
        .main-content {
            flex: 1;
            padding: 25px;
            margin-left: 260px;
        }

        .mobile-brand{
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
            letter-spacing: 0px;
            text-align: center;
        }

        .user-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-actions span {
            font-weight: 400;
            font-size: 12px;
            line-height: 100%;
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

        .profile img {
            width: 50px;
            height: 50px;
            border-radius: 100px;
            object-fit: cover;
        }

        .profile h3 {
            font-weight: 600;
            font-size: 18px;
            line-height: 100%;
            margin-bottom: 5px;
        }

        .profile p {
            color: #7D7C7C;
            font-weight: 500;
            font-size: 12px;
            line-height: 100%;
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

        .filter-btn {
            width: 36px;
            height: 36px;
            border: 1px solid #E5E7EB;
            border-radius: 8px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            padding: 0;
        }

        .filter-btn img,
        .filter-btn svg {
            width: 18px;
            height: 18px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            padding: 12px 10px;
            background: #FBFBFD;
            font-weight: 600;
            font-size: 13px;
           
        }

        td {
            padding: 14px 10px;
            border-bottom: 1px solid #F3F4F6;
            font-weight: 500;
            font-size: 13px;
            color: #374151;
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
            width: 48px;
            height: 48px;
            background-color: #E2EEF9;
            color: #06414F;
            font-weight: 700;
            font-size: 18px;
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

        /* Desktop pagination (hidden on mobile by default styles) */
        .desktop-pagination {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding-top: 12px;
        }

        .mobile-pagination {
            display: none;
        }

        /* ========== RESPONSIVE ========== */
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

        @media (max-width: 768px) {
            body {
                background: #ffffff;
            }

            .main-content {
                margin-left: 0;
                padding: 16px;
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
                width: 60px;
                height: auto;
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
                cursor: pointer;
            }

            .hamburger-btn img {
                width: 22px;
                height: 22px;
            }

            /* Hide desktop header bits */
            .top-bar h2,
            .user-actions {
                display: none;
            }

            .top-bar {
                margin-bottom: 0;
            }

            /* Profile row – match Figma */
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
                font-size: 16px;
            }

            .month-select {
                padding: 8px 12px;
                font-size: 12px;
                min-width: 110px;
                padding-right: 28px;
            }

            /* 2×2 cards – match Figma spacing */
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

            /* Table – only Date / Day / Clock-In on mobile (like Figma) */
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

            /* Hide extra columns on mobile */
            th:nth-child(4),
            th:nth-child(5),
            th:nth-child(6),
            th:nth-child(7),
            td:nth-child(4),
            td:nth-child(5),
            td:nth-child(6),
            td:nth-child(7) {
                display: none;
            }

            th, td {
                padding: 12px 8px;
                font-size: 12px;
            }

            th {
                background: transparent;
                font-size: 12px;
                color: #6B7280;
            }

            /* Mobile pagination */
            .desktop-pagination {
                display: none;
            }

            .mobile-pagination {
                display: flex;
                flex-direction: column;
                gap: 14px;
                margin-top: 16px;
                padding-top: 8px;
                font-size: 12px;
                color: #555;
            }

            .per-page-selector {
                display: flex;
                align-items: center;
                gap: 8px;
            }

            .per-page-selector select {
                padding: 4px 8px;
                border-radius: 6px;
                border: 1px solid #DDD;
                font-size: 12px;
            }

            .pagination-nav {
                display: flex;
                align-items: center;
                gap: 6px;
            }

            .page-btn {
                width: 32px;
                height: 32px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                font-weight: 500;
                font-size: 13px;
                border: none;
                background: transparent;
                color: #374151;
            }

            .page-btn.active {
                background: #06414F;
                color: white;
            }

            .next-btn {
                padding: 6px 14px;
                border: 1px solid #E5E7EB;
                border-radius: 8px;
                background: white;
                cursor: pointer;
                font-size: 12px;
                color: #555;
                margin-left: 4px;
            }

            .setting-link{
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
            line-height: 1 ;
        }

        .setting-links{
            display: none;
        }

        .nav-list{
            margin-left: -15px;
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


        }
    </style>

    <body>
        <div class="container">
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

            <!-- Main Content -->
            <main class="main-content">

                <!-- Header -->
                <div class="top-bar">
                    <div class="mobile-brand">
                        <img src="{{ asset('images/Artboard 1-1 2.svg') }}" class="mobile-logo" alt="HTG">
                        <button class="hamburger-btn" id="openSidebar">
                            <img src="{{ asset('images/breadcrumb.svg') }}" alt="Menu">
                        </button>
                    </div>

                    <h2>Personal Attendance Registry</h2>

                    <div class="user-actions">
                        <span>{{ $user->email }}</span>
                        <div class="user-initials" style="overflow: hidden; width: 35px; height: 35px; background-color: #E2EEF9; color: #06414F; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 13px; flex-shrink: 0; padding: 0;">
                            @if($user->avatar)
                                <img src="{{ asset('storage/' . $user->avatar) }}" alt="Profile" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            @else
                                {{ strtoupper(substr($user->first_name, 0, 1)) }}
                            @endif
                        </div>
                    </div>
                </div>

                <!-- User Info + Month selector (matches Figma) -->
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
                        <option value="{{ $month['value'] }}"
                            {{ $selectedMonthRaw === $month['value'] ? 'selected' : '' }}>
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
                      
                        {{-- <button class="filter-btn" type="button" aria-label="Filter">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#6B7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="4" y1="6" x2="20" y2="6"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                                <line x1="11" y1="18" x2="13" y2="18"></line>
                            </svg>
                        </button> --}}
                    </div>

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

                    <!-- Mobile pagination (matches Figma) -->
                    <div class="mobile-pagination">
                        <div class="per-page-selector">
                            <span>Show</span>
                            <select id="rowsPerPage">
                                <option value="5">5</option>
                                <option value="10" selected>10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                            </select>
                            <span id="paginationInfo">Per page of 30 results.</span>
                        </div>

                        <div class="pagination-nav">
                            <div class="page-btn active" data-page="1">1</div>
                            <div class="page-btn" data-page="2">2</div>
                            <div class="page-btn" data-page="3">3</div>
                            <span style="margin: 0 4px; color: #888;">......</span>
                            <button class="next-btn" type="button" id="nextPageBtn">Next &raquo;</button>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <script>
            // Sidebar toggle
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

            // Simple client-side pagination (works with the static mobile controls)
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

                // Update active page button
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