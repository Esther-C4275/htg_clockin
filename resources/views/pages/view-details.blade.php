<x-layout>
    <div class="dashboard">

        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <!-- <h1>HTG</h1>
              <span>TIME PORTAL</span> -->
                <img class="HGT" src="{{ asset('images/Artboard 1 2.svg') }}" alt="">
            </div>

            <nav>
                <ul>
                    <li>
                        <a href="{{ route('admin-dashboard.index') }}">
                            <img src="{{ asset('images/dash.svg') }}">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin-employee.index') }}">
                            <img src="{{ asset('images/attendance.svg') }}">
                            Employees
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin-attendance.index') }}">
                            <img src="{{ asset('images/employee.svg') }}" alt="">
                            Attendance
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin-setting.index') }}" id="setting-link">
                            <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="sidebar-bottom">

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
                    <img src="{{ asset('images/setting.svg') }}" alt="Settings">
                    <span>Settings</span>
                </a>
              <div style="margin-left:-20px">
                <x-adminlogout />
            </div>

                <button class="sidebar-close" id="sidebarClose">
                    ×
                </button>
            </div>
        </aside>

        <div class="sidebar-overlay" id="sidebarOverlay"></div>


        <!-- Main Content -->
        <main class="main-content">

            <!-- Topbar -->
            <header class="topbar">
                <div class="mobile-brand">
                    <img src="{{ asset('images/Artboard 1-1 2.svg') }}" class="mobile-logo" alt="HTG">
            
                    <button class="hamburger-btn" id="openSidebar">
                        <img src="{{ asset('images/breadcrumb.svg') }}">
                        {{-- <i class="fa-solid fa-align-right"></i> --}}
                    </button>
                </div>
                <h2>Employee Overview</h2>

                <div class="topbar-right">


                    <!-- <i class="fa-regular fa-bell notification"></i> -->
                    {{-- <img src="{{ asset('images/bell.png') }}" alt=""> --}}
                    <div class="user-profile">
                        <a href="{{ route('admin-setting.index') }}" style="text-decoration: none">
                            @php
                                $firstInitial = substr($adminUser->first_name, 0, 1);
                                $lastInitial = substr($adminUser->last_name, 0, 1);

                                $initials = strtoupper($firstInitial . $lastInitial);
                            @endphp
                            <div class="initials">
                                {{ $initials }}
                            </div>
                        </a>
                        <div>
                            <h4>{{ $adminUser->first_name }} {{ $adminUser->last_name }}</h4>
                            <span>Admin</span>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Tabs -->
            <div class="tabs">


                <a href="{{ route('view-employee.show', $user->uuid) }}">Employee Profile</a>


                <a href="{{ route('view-details.show', $user->uuid) }}" class="active">Attendance Details</a>
            </div>

            <!-- Filters -->
            <form id="filterForm" method="GET" action="{{ url()->current() }}">

                <input type="hidden" name="employee_id" value="{{ $user->id }}">

                <section class="filters">
                    <div>
                        <label for="month">Month</label>
                        <select name="month" id="month" onchange="document.getElementById('filterForm').submit()">
                            <option value="1" {{ $selectedMonth == 1 ? 'selected' : '' }}>January</option>
                            <option value="2" {{ $selectedMonth == 2 ? 'selected' : '' }}>February</option>
                            <option value="3" {{ $selectedMonth == 3 ? 'selected' : '' }}>March</option>
                            <option value="4" {{ $selectedMonth == 4 ? 'selected' : '' }}>April</option>
                            <option value="5" {{ $selectedMonth == 5 ? 'selected' : '' }}>May</option>
                            <option value="6" {{ $selectedMonth == 6 ? 'selected' : '' }}>June</option>
                            <option value="7" {{ $selectedMonth == 7 ? 'selected' : '' }}>July</option>
                            <option value="8" {{ $selectedMonth == 8 ? 'selected' : '' }}>August</option>
                            <option value="9" {{ $selectedMonth == 9 ? 'selected' : '' }}>September</option>
                            <option value="10" {{ $selectedMonth == 10 ? 'selected' : '' }}>October</option>
                            <option value="11" {{ $selectedMonth == 11 ? 'selected' : '' }}>November</option>
                            <option value="12" {{ $selectedMonth == 12 ? 'selected' : '' }}>December</option>
                        </select>
                    </div>

                    <div>
                        <label for="year">Year</label>
                        <select name="year" id="year" onchange="document.getElementById('filterForm').submit()">
                            <option value="">Select Year</option>
                            <option value="2018" {{ $selectedYear == 2018 ? 'selected' : '' }}>2018</option>
                            <option value="2019" {{ $selectedYear == 2019 ? 'selected' : '' }}>2019</option>
                            <option value="2020" {{ $selectedYear == 2020 ? 'selected' : '' }}>2020</option>
                            <option value="2021" {{ $selectedYear == 2021 ? 'selected' : '' }}>2021</option>
                            <option value="2022" {{ $selectedYear == 2022 ? 'selected' : '' }}>2022</option>
                            <option value="2023" {{ $selectedYear == 2023 ? 'selected' : '' }}>2023</option>
                            <option value="2024" {{ $selectedYear == 2024 ? 'selected' : '' }}>2024</option>
                            <option value="2025" {{ $selectedYear == 2025 ? 'selected' : '' }}>2025</option>
                            <option value="2026" {{ $selectedYear == 2026 ? 'selected' : '' }}>2026</option>
                        </select>
                    </div>
                </section>
            </form>
            <!-- Summary Table -->
            <section class="summary-table">
                <table>
                    <thead>
                        <tr>
                            <th>Month</th>
                            <th>Average On Time</th>
                            <th>Present Days</th>
                            <th>Absent Days</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $currentMonthName }}</td>
                            <td>{{ $averageOnTime }}</td>
                            <td>{{ $presentDaysCount }} {{ Str::plural('day', $presentDaysCount) }}</td>
                            <td>{{ $absentDaysCount }} {{ Str::plural('day', $absentDaysCount) }}</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- Attendance Records -->
            <section class="attendance-table">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Date</th>
                            <th>Day</th>
                            <th>Clock-In</th>
                            <th>Clock-Out</th>
                            <th>Duration</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($attendanceRecords as $index => $record)
                            @php
                                $dateValue = $record->date ?? $record->clock_in;
                                $logDate = $dateValue ? \Carbon\Carbon::parse($dateValue) : null;

                                if ($record->clock_in && $record->clock_out) {
                                    $start = \Carbon\Carbon::parse($record->clock_in);
                                    $end = \Carbon\Carbon::parse($record->clock_out);
                                    $hours = (int) $start->diffInHours($end);
                                    $minutes = $start->diffInMinutes($end) % 60;
                                    $durationStr = "{$hours}h {$minutes}m";
                                } else {
                                    $durationStr = ($record->clock_in && $logDate && $logDate->isToday()) ? "Active Now" : "—";
                                }
                            @endphp
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $logDate ? $logDate->format('d-m-Y') : '—' }}</td>
                                <td>{{ $logDate ? $logDate->format('l') : '—' }}</td>
                                <td>{{ $record->clock_in ? \Carbon\Carbon::parse($record->clock_in)->format('g:i A') : '—' }}
                                </td>
                                <td>{{ $record->clock_out ? \Carbon\Carbon::parse($record->clock_out)->format('g:i A') : '—' }}
                                </td>
                                <td>{{ $durationStr }}</td>
                            </tr>
                        @endforeach


                        <!-- <tr>
                            <td>2</td>
                            <td>02-04-2026</td>
                            <td>Thursday</td>
                            <td>09:48 AM</td>
                            <td>06:00 PM</td>
                            <td>8h 12m</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>03-04-2026</td>
                            <td>Thursday</td>
                            <td class="late">10:30 AM</td>
                            <td>06:00 PM</td>
                            <td>7h 30m</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>04-04-2026</td>
                            <td>Thursday</td>
                            <td>09:48 AM</td>
                            <td>06:00 PM</td>
                            <td>8h 12m</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>04-04-2026</td>
                            <td>Thursday</td>
                            <td>09:48 AM</td>
                            <td>06:00 PM</td>
                            <td>8h 12m</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>04-04-2026</td>
                            <td>Thursday</td>
                            <td>09:48 AM</td>
                            <td>06:00 PM</td>
                            <td>8h 12m</td>
                        </tr>


                        <tr>
                            <td>7</td>
                            <td>04-04-2026</td>
                            <td>Thursday</td>
                            <td>09:48 AM</td>
                            <td>06:00 PM</td>
                            <td>8h 12m</td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>04-04-2026</td>
                            <td>Thursday</td>
                            <td>09:48 AM</td>
                            <td>06:00 PM</td>
                            <td>8h 12m</td>
                        </tr>


                        <tr>
                            <td>9</td>
                            <td>04-04-2026</td>
                            <td>Thursday</td>
                            <td>09:48 AM</td>
                            <td>06:00 PM</td>
                            <td>8h 12m</td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td>04-04-2026</td>
                            <td>Thursday</td>
                            <td>09:48 AM</td>
                            <td>06:00 PM</td>
                            <td>8h 12m</td>
                        </tr>

                        <tr>
                            <td>11</td>
                            <td>04-04-2026</td>
                            <td>Thursday</td>
                            <td>09:48 AM</td>
                            <td>06:00 PM</td>
                            <td>8h 12m</td>
                        </tr>

                        <tr>
                            <td>12</td>
                            <td>04-04-2026</td>
                            <td>Thursday</td>
                            <td>09:48 AM</td>
                            <td>06:00 PM</td>
                            <td>8h 12m</td>
                        </tr> -->

                    </tbody>
                </table>
                <div class="pagination-wrapper mt-4">
                    {{ $attendanceRecords->links() }}
                </div>
            </section>

        </main>

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

        body {
            background: #f5f6f8;
            color: #111;
            font-family: 'Inter', sans-serif;
        }

        .dashboard {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 240px;
            background: #06414F;
            color: #B7B7B7;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 24px;
            height: 100vh;
            overflow: hidden;
            position: fixed;
            left: 0;
            top: 0;
        }

        .sidebar ul {
            list-style: none;
            margin-top: 66px;
            margin-bottom: 180px;
            margin-left: -20px;
        }

        .sidebar ul li {

            margin-bottom: 10px;

        }



        .sidebar a {
            text-decoration: none;
            color: #B7B7B7;
            display: flex;
            align-items: center;
            gap: 12px;
            width: 100%;
            padding: 14px;
            border-radius: 6px;
            transition: all 0.2s ease;
        }

        .sidebar a:hover {
            background: #FFFFFF;
            color: #06414F;
        }

        .sidebar-bottom {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-top: auto;
        }


        .sidebar-bottom-link {
            text-decoration: none;
            color: #B7B7B7;
            display: flex;
            align-items: center;
            gap: 12px;
            width: 100%;
            padding: 14px;
            border-radius: 6px;
            transition: all 0.2s ease;
            cursor: pointer;
        }


        .sidebar-bottom-link:hover {
            background: #FFFFFF;
            color: #06414F;
        }


        .sidebar-bottom-link img {
            width: 24px;
            height: 24px;
        }



        .sidebar-bottom p {
            margin: 14px;
            cursor: pointer;
            display: flex;
            /* gap: 10px; */
            align-items: center;
        }

        .sidebar-close{
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
            margin-left: -20px;
            border-radius: 8px;
        }

        .setting-links:hover{
            background-color: #ffffff;
            color: #06414F;
        }

        #setting-link{
            display: none ;
        }


        .both {
            display: flex;
            align-items: center;
            text-align: center;
            color: #B7B7B7;

        }

        .both:hover {
            background: #FFFFFF;
            color: #06414F;
            width: 150px;
            height: 30px;
            border-radius: 4px;
            padding: 7px;
        }



        .bots {
            width: 24px;
            height: 24px;
            /* opacity: 1; */
            align-items: center;
            text-align: center;
            margin-left: 15px;

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

        .user-email{
            display: none;
        }

        .mobile-pagination{
            display: none;
        }

        /* Main */
        .main-content {
            flex: 1;
            padding: 28px;
            margin-left: 240px;
        }

        /* Topbar */
        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .search-box {
            display: flex;
            align-items: center;
            background: white;
            padding: 10px;
            border: 1px solid #B4B4B4;
            border-radius: 8px;
        }

        .search-box input {
            border: none;
            outline: none;
            margin-left: 10px;
        }

        .notification {
            /* font-size: 18px; */
            cursor: pointer;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-profile img {
            border-radius: 50%;
        }

        .user-profile h4 {
            font-size: 14px;
        }

        .user-profile span {
            font-size: 12px;
            color: gray;
        }

        /* Tabs */
        .tabs {
            margin-top: 10px;
            margin-bottom: 40px;
        }

        .tabs a {
            padding: 12px;
            border: 1px solid #06414F;
            background: white;
            color: #06414F;
            cursor: pointer;
            font-weight: 500;
            font-size: 16px;
            margin-right: -5px;

        }

        .tabs button.active:hover {
            background: #06414F;
            color: white;
        }

        .tabs button:hover {
            background: #06414F;
            color: white;
        }

        .tabs a {
            text-decoration: none;
            color: #06414F;
        }

        .tabs a:hover {
            background: #06414F;
            color: white;
        }

        /* Filters */
        .filters {
            display: flex;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 28px;
        }

        .filters label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 14px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .filters input,
        .filters select {
            width: 300px;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
        }

        /* Tables */
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        thead {
            background: #06414F;
            color: white;
        }

        th,
        td {
            padding: 14px;
            text-align: left;
            font-size: 14px;
        }

        tbody tr {
            border-bottom: 1px solid #eee;
        }

        .summary-table,
        .attendance-table {
            margin-bottom: 28px;
            overflow: hidden;
        }

        .late {
            color: red;
            font-weight: 600;
        }

        .attendance-table thead {
            background-color: #F8F9FB;
            color: #000000;
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

        .pagination-wrapper{
            display:none;
        }

        @media (max-width: 768px) {

            html, body {
                width: 100%;
                max-width: 100vw;
                margin: 0;
                padding: 0;
                overflow-x: hidden; /* Prevents side-scrolling */
            }

            body {
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }
/* 
            .main-content{
                width: 100% !important;
                max-width: 100% !important;
                flex: 1;
                box-sizing: border-box;
            } */

        /* ===== Sidebar ===== */
        .sidebar{
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

        .sidebar.active{
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
        background:#06414F80;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(3px);
        z-index: 1500;
        }


        .sidebar-overlay.active {
        display: block;
        }

        .setting-links{
            display: none !important; 
        }
        
        #setting-link{
        display: flex;
        align-items: center;
        justify-content: flex-start;
        text-align: left;
        padding: 12px;
        gap: 9px;
        margin-right: 0;
        width: 100%;
        text-decoration: none;
        font-size: 18px;
        margin-left: -1px;
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
        line-height: 1 ;
    }

    .user-email {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 12px;
        margin-bottom: 8px;
        width: 100%;
        margin-left: -20px;
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

   .user-profile{
    display: none;
   }

    .mobile-brand{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:8px;
            gap: 310px;
        }

       
 
        .mobile-brand img{
            width:60px;
            height:27px;
            display:block;
            margin-left: -11px;
        }

        .hamburger-btn{
            display:flex;
            align-items:center;
            justify-content:center;
            width:36px;
            height:36px;
            padding:0;
            border:none;
            background:none;
        }

        .hamburger-btn i{
            font-size: 22px;
            color: #111827;
        }

        /* ===== Mobile Pagination (matches Figma) ===== */
        .mobile-pagination {
            display: flex;
            flex-direction: column;
            gap: 16px;
            margin-top: 20px;
            padding: 0 2px 8px;
            font-size: 13px;
            color: #555;
        }

        .per-page-selector {
            display: flex;
            align-items: center;
            gap: 6px;
            flex-wrap: wrap;
            color: #555;
        }

        .per-page-selector span {
            white-space: nowrap;
        }

        .per-page-selector select {
            padding: 5px 28px 5px 10px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 13px;
            background: #fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath fill='%23666' d='M1 1l5 5 5-5'/%3E%3C/svg%3E") no-repeat right 8px center;
            appearance: none;
            -webkit-appearance: none;
            cursor: pointer;
            min-width: 52px;
        }

        .pagination-nav {
            display: flex;
            align-items: center;
            gap: 6px;
            flex-wrap: wrap;
        }

        .page-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 32px;
            height: 32px;
            padding: 0 8px;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            background: #fff;
            color: #06414F;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            user-select: none;
        }

        .page-btn.active {
            background: #06414F;
            color: #fff;
            border-color: #06414F;
        }

        .page-btn:not(.active):hover {
            background: #f3f4f6;
        }

        .dots {
            color: #9ca3af;
            font-size: 14px;
            letter-spacing: 1px;
            padding: 0 2px;
        }

        .next-btn {
            display: flex;
            align-items: center;
            height: 32px;
            padding: 0 14px;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            background: #fff;
            color: #06414F;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
        }

        .next-btn:hover {
            background: #f3f4f6;
        }

            .main-content {
            margin-left: 0;
            padding: 16px 16px 32px;
            width: 100%;
        }

    
        .summary-table {
            margin-bottom: 20px;
            border-radius: 8px;
            overflow-x: auto;      
            -webkit-overflow-scrolling: touch;
            border: 1px solid #e5e7eb;
        }

        .summary-table table {
            width: 100%;
            min-width: 500px;        
            border-collapse: collapse;
        }

        .summary-table thead {
            background: #06414F;
            color: #fff;
        }

        .summary-table th,
        .summary-table td {
            padding: 12px 14px;
            font-size: 13px;
            text-align: left;
            white-space: nowrap;
        }


        .attendance-table {
            margin-bottom: 24px;
            border-radius: 8px;
            overflow-x: auto;         
            -webkit-overflow-scrolling: touch;
            border: 1px solid #e5e7eb;
        }

        .attendance-table table {
            width: 100%;
            min-width: 650px;         
            border-collapse: collapse;
        }

        .attendance-table thead {
            background: #F8F9FB;
            color: #000;
        }

        .attendance-table th,
        .attendance-table td {
            padding: 12px 14px;
            font-size: 13px;
            text-align: left;
            white-space: nowrap;
            border-bottom: 1px solid #eee;
        }

        .filters {
            display: flex;
            gap: 12px;
            margin-bottom: 20px;
            overflow-x: auto;                
            -webkit-overflow-scrolling: touch;
            padding-bottom: 4px;            
        }

        .filters select {
            width: 100%;
            min-width: 160px;
            padding: 10px 12px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 6px;
            background: #fff;
            appearance: none;
            -webkit-appearance: none;
        }

        .tabs{
            display: flex;
        width: 352px;
        background-color: #ffffff;
        border: 1px solid #06414F;
        border-radius: 8px;
        padding: 0px;
        margin-left: 9px;
        margin-bottom: 24px;
        box-sizing: border-box;
        }

        .tabs a{
            flex: 1;
        text-align: center;
        padding: 10px 0;
        font-size: 13px;
        font-weight: 600;
        border: none;
        border-radius: 6px;
        margin-left: 0;
        color: #06414F;
        text-decoration: none;
        display: block;
        width: 50%;              
            
                        
            
        }
        
        .tabs a.active,
        .tabs a:hover {
        background-color: #06414F;
        color: #ffffff;
    }

    .topbar{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
        margin-bottom: 16px;
    }

    .topbar h2 {
        font-size: 18px;
        font-weight: 700;
        margin: 0;
        width: 100%;
        text-align: left;
    }

    .sidebar ul{
        margin-left: -20px;
        margin-top: 48px;
        font-size: 18px;
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

    

    

    }

    </style>

</x-layout>