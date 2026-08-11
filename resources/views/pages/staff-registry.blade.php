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

        /* Main */

        .main-content {
            flex: 1;
            padding: 25px;
            margin-left: 260px;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .top-bar h2 {
            font-size: 28px;
            font-weight: 600;
            font-style: Semi Bold;
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
            font-style: Regular;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .user-initials {
            font-weight: 400;
            font-style: Regular;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;
            padding: 8px 12px;
            opacity: 1;
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
            opacity: 1;
            border-radius: 100px;


        }

        .profile h3 {
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 0px;
            margin-bottom: 5px;
        }

        .profile p {
            color: #7D7C7C;
            font-weight: 500;
            font-style: Medium;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        select {
            border: 1px solid #ddd;
            padding: 12px 18px;
            border-radius: 8px;
            background: white;
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
            width: 220px;
            height: 87px;
            opacity: 1;
            gap: 9px;
            border-radius: 8px;
            border-width: 1px;
            padding-top: 16px;
            padding-bottom: 16px;
            padding-left: 10px;
            border: 1px solid #EDEDED;

        }

        .card h4 {
            font-weight: 500;
            font-style: Medium;
            font-size: 14px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .cardh3 {
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .card span {
            font-weight: 500;
            font-style: Medium;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .card p {
            font-weight: 400;
            font-style: Regular;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
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
            margin-bottom: 20px;
        }

        .table-header h3 {
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 14px;
            line-height: 100%;
            letter-spacing: 0px;
        }

        .table-actions {
            display: flex;
            gap: 10px;
        }

        .table-actions input {
            padding: 10px;
            border: 1px solid #F2F2F2;
            font-family: Inter;
            font-weight: 400;
            font-style: Regular;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;
            border-radius: 4px;

        }

        .table-actions button {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            background: white;
            border: 1px solid #F2F2F2;
            align-items: center;

        }

        .table-actions button span {
            font-weight: 400;
            font-style: Regular;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;
            margin-left: 5px;
            margin-bottom: 2px;
            text-align: center;

        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            padding: 15px;
            background: #FBFBFD;
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 14px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        td {
            padding: 18px 15px;
            border-bottom: 1px solid #EBEBEB;
            font-weight: 500;
            font-style: Medium;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .status {
            padding: 6px 18px;
            border-radius: 100px;
            font-size: 13px;
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
            opacity: 1;
            border-radius: 100px;
            padding-top: 7px;
            padding-right: 26px;
            padding-bottom: 7px;
            padding-left: 26px;

        }

        .late-time {
            color: #EFC005;
            font-weight: 600;
        }

        .initials {
            width: 60px;
            height: 60px;
            background-color: #E2EEF9;
            color: #06414F;
            font-weight: 700;
            font-size: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-transform: uppercase;
            border: 1px solid #C5DCF2;
        }

        /* Responsive */

        @media(max-width:992px) {

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

        @media(max-width:768px) {

            .container {
                flex-direction: column;
            }

            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .main-content {
                margin-left: 0;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .table-box {
                overflow-x: auto;
            }
        }
    </style>
    </head>

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
                    </ul>

                    <ul class="nav-list footer-nav">
                        <li>
                            <a href="{{ route('staff-edit.index') }}" class="nav-link">
                                <i><img src="{{ asset('images/setting.svg') }}" alt=""></i> Settings
                            </a>
                        </li>
                        <li>
                            <x-logout />
                        </li>
                    </ul>
                </nav>
            </aside>

            <!-- Main Content -->
            <main class="main-content">

                <!-- Header -->
                <div class="top-bar">

                    <h2>Personal Attendance Registry</h2>

                    <div class="user-actions">
                        {{-- <i><img src="{{ asset('images/bell.png') }}" alt=""></i> --}}
                        <span>{{ $user->email }}</span>
                        <div class="user-initials" style="overflow: hidden; width: 35px; 
                                  height: 35px; 
                                  background-color: #E2EEF9; 
                                  color: #06414F; 
                                  border-radius: 50%; 
                                  display: flex; 
                                  align-items: center; 
                                  justify-content: center; 
                                  font-weight: 700; 
                                  font-size: 13px;
                                  flex-shrink: 0;
                                  padding: 0;">

                            @if($user->avatar)
                                <img src="{{ asset('storage/' . $user->avatar) }}" alt="Profile"
                                    style="width: 100%; height: 100%; object-fit: cover; display: block;">
                            @else
                                @php
                                    $firstInitial = substr($user->first_name, 0, 1);
                                 @endphp
                                {{ strtoupper($firstInitial) }}
                            @endif


                        </div>

                    </div>

                </div>

                <!-- User Info -->
                <div class="profile-row">

                    <div class="profile">
                        @php
                            $firstInitial = substr($user->first_name, 0, 1);
                            $lastInitial = substr($user->last_name, 0, 1);
                            $initials = strtoupper($firstInitial . $lastInitial);
                        @endphp
                        <div class="initials">
                            @if(Auth::user()->avatar)
                                <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Profile"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            @else
                                {{ strtoupper(substr(Auth::user()->first_name, 0, 1) . substr(Auth::user()->last_name, 0, 1)) }}
                            @endif
                        </div>

                        <div>
                            <h3>{{ $user->first_name }} {{ $user->last_name }}</h3>
                            <p>{{ $user->department }} | {{ $user->position }}</p>
                        </div>
                    </div>


                </div>

                <!-- Stats -->
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

                <!-- Table Section -->
                <div class="table-box">

                    <div class="table-header">

                        <h3>Attendance Record</h3>



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

                            <!-- <tr>
                                <td>2 April 2026</td>
                                <td>Tuesday</td>
                                <td>09:48 AM</td>
                                <td>06:00 PM</td>
                                <td>8h 12m</td>
                                <td><span class="status present">Present</span></td>
                                <td>Early</td>
                            </tr>

                            <tr>
                                <td>3 April 2026</td>
                                <td>Wednesday</td>
                                <td>—</td>
                                <td>—</td>
                                <td>—</td>
                                <td><span class="status absent">Absent</span></td>
                                <td>—</td>
                            </tr>

                            <tr>
                                <td>4 April 2026</td>
                                <td>Thursday</td>
                                <td class="late-time">10:48 AM</td>
                                <td>06:00 PM</td>
                                <td>8h 12m</td>
                                <td><span class="status late">Late</span></td>
                                <td>Late by 48m</td>
                            </tr>



                            <tr>
                                <td>5 April 2026</td>
                                <td>Friday</td>
                                <td>09:48 AM</td>
                                <td>06:00 PM</td>
                                <td>8h 12m</td>
                                <td><span class="status present">Present</span></td>
                                <td>Early</td>
                            </tr>



                            <tr>
                                <td>6 April 2026</td>
                                <td>Monday</td>
                                <td>09:48 AM</td>
                                <td>06:00 PM</td>
                                <td>8h 12m</td>
                                <td><span class="status present">Present</span></td>
                                <td>Early</td>
                            </tr>


                            <tr>
                                <td>7 April 2026</td>
                                <td>Tuesday</td>
                                <td>09:48 AM</td>
                                <td>06:00 PM</td>
                                <td>8h 12m</td>
                                <td><span class="status present">Present</span></td>
                                <td>Early</td>
                            </tr>



                            <tr>
                                <td>8 April 2026</td>
                                <td>Wednesday</td>
                                <td>09:48 AM</td>
                                <td>06:00 PM</td>
                                <td>8h 12m</td>
                                <td><span class="status present">Present</span></td>
                                <td>Early</td>
                            </tr>



                            <tr>
                                <td>9 April 2026</td>
                                <td>Thursday</td>
                                <td>09:48 AM</td>
                                <td>06:00 PM</td>
                                <td>8h 12m</td>
                                <td><span class="status present">Present</span></td>
                                <td>Early</td>
                            </tr>



                            <tr>
                                <td>10 April 2026</td>
                                <td>Friday</td>
                                <td>09:48 AM</td>
                                <td>06:00 PM</td>
                                <td>8h 12m</td>
                                <td><span class="status present">Present</span></td>
                                <td>Early</td>
                            </tr> -->

                        </tbody>

                    </table>

                </div>

            </main>

        </div>

</x-layout>