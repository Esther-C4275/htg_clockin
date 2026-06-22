<x-layout>
    <div class="dashboard">

        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <!-- <h1>HTG</h1>
              <span>TIME PORTAL</span> -->
                <img class="HGT" src="/images/htg.png" alt="">
            </div>

            <nav>
                <ul>
                    <li>
                        <a href="{{ route('admin-dashboard.index') }}">
                            <img src="/images/dash.png">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin-employee.index') }}">
                            <img src="/images/attendance.png">
                            Employees
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin-attendance.index') }}">
                            <img src="/images/employee.png" alt="">
                            Attendance
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="sidebar-bottom">
                <div class="both">

                    <img class="bots" src="/images/setting.png" alt="">
                    <a href="{{ route('admin-setting.index') }}">
                        <p> Settings</p>
                    </a>
                </div>

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
                    <img src="/images/bell.png" alt="">
                    <div class="user-profile">
                        <a href="{{ route('admin-setting.index') }}" style="text-decoration: none">
                            @php
                                $firstInitial = substr($adminUser->first_name,0,1);
                                $lastInitial = substr($adminUser->last_name,0,1);

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
               
               
                    <a href="{{ route('view-employee.index',['employee_id' => $user->id]) }}">Employee Profile</a>
                
               
                    <a href="{{ route('view-details.index',['employee_id' => $user->id]) }}" >Attendance Details</a>  
            </div>
           
            <!-- Filters -->
            <section class="filters">
                

                <div>
                    <label>Month</label>
                    <select>
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>
                    </select>
                </div>

                <div>
                    <label>Year</label>
                    <!-- <input type="number" min="2000" max="2100" placeholder="2026"> -->
                    <select name="year" id="year">

                        <option value="">Select Year</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>

                    </select>

                </div>
            </section>

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
                                $logDate = \Carbon\Carbon::parse($record->date);
                                
                               
                                if ($record->clock_in && $record->clock_out) {
                                    $start = \Carbon\Carbon::parse($record->clock_in);
                                    $end = \Carbon\Carbon::parse($record->clock_out);
                                    $hours = (int) $start->diffInHours($end);
                                    $minutes = $start->diffInMinutes($end) % 60;
                                    $durationStr = "{$hours}h {$minutes}m";
                                } else {
                                    $durationStr = $record->clock_in ? "Active Now" : "—";
                                }
                            @endphp
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $logDate->format('d-m-Y') }}</td>
                                <td>{{ $logDate->format('l') }}</td>
                                <td>{{ $record->clock_in ? \Carbon\Carbon::parse($record->clock_in)->format('g:i A') : '—' }}</td>
                                <td>{{ $record->clock_out ? \Carbon\Carbon::parse($record->clock_out)->format('g:i A') : '—' }}</td>
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
            margin-bottom: 50px;
        }

        .sidebar ul li {
            padding: 14px;
            margin-bottom: 10px;
            border-radius: 6px;
            cursor: pointer;
            display: flex;
            gap: 12px;
            align-items: center;
            color: #B7B7B7;
        }

        .sidebar ul li:hover {
            background: #FFFFFF;
            color: #06414F;
        }

        .sidebar a {
            text-decoration: none;
            color: #B7B7B7;
            display: flex;
            align-items: center;
            gap: 12px;
            width: 100%;
        }

        .sidebar a:hover {
            color: #06414F;
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
        .tabs a{
            text-decoration: none;
            color: #06414F;
        }
        .tabs a:hover{
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