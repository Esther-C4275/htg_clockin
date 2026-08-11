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
                </ul>
            </nav>

            <div class="sidebar-bottom">
                <a href="{{ route('admin-setting.index') }}" class="sidebar-bottom-link">
                    <img src="{{ asset('images/setting.svg') }}" alt="Settings">
                    <span>Settings</span>
                </a>

                <x-adminlogout />
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">

            <!-- Topbar -->
            <header class="topbar">
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


                <a href="{{ route('view-details.show', $user->uuid) }}">Attendance Details</a>
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
            </section>

        </main>

    </div>


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
            margin-top: 73px;
            margin-bottom: 180px;
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
    </style>

</x-layout>