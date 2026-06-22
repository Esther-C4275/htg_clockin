<x-layout>
    <aside class="sidebar">

        <div>

            <div class="logo"> <img src="/images/htg.png" alt=""> </div>

            <div class="menu">
                <a href="{{ route('admin-dashboard.index') }}">
                    <i><img src="/images/dash.png" alt=""></i>
                    Dashboard
                </a>

                <a href="{{ route('admin-employee.index') }}" class="active">
                    <i><img src="/images/employee.png" alt=""></i>
                    Employees
                </a>

                <a href="{{ route('admin-attendance.index') }}">
                    <i><img src="/images/attendance.png" alt=""></i>
                    Attendance
                </a>
            </div>

        </div>

        <div class="bottom-menu">
            <a href="{{ route('admin-setting.index') }}">
                <i><img src="/images/setting.png" alt=""></i>
                Settings
            </a>
            <x-adminlogout />
        </div>

    </aside>


    <!-- main content -->
    <main class="main">
        <div class="topbar">
            <h2>Dashboard</h2>

            <div class="user">


                <img src="/images/bell.png" alt="Notifications" />
                @php
                    $firstInitial = substr($adminUser->first_name, 0, 1);
                    $lastInitial = substr($adminUser->last_name, 0, 1);

                    $initials = strtoupper($firstInitial . $lastInitial);
                @endphp

                <div class="avatar-initials">
                    <a href="{{ route('admin-setting.index') }}" style="text-decoration:none; color: #06414F">
                        {{ $initials }}
                    </a>
                </div>
                <div>
                    <p>{{ $adminUser->first_name }} {{ $adminUser->last_name }}</p>
                    <small>Admin</small>
                </div>
            </div>
        </div>

        <div class="stat-cards">
            <div class="card">
                <div class="card-info">
                    <h3>{{ $totalEmployees }}</h3>
                    <p>Total staff</p>
                </div>
                <div class="card-icon"><img src="/images/Frame 62.png" alt="" /></div>

            </div>

            <div class="card">
                <div class="card-info">
                    <h3>{{ $hizoStaff }}</h3>
                    <p>Hizo staff</p>
                </div>
                <div class="card-icon"><img src="/images/Frame 62.png" alt="" /></div>
            </div>
            <div class="card">
                <div class="card-info">
                    <h3>{{ $glydeStaff }}</h3>
                    <p>Glyde staff</p>
                </div>
                <div class="card-icon"><img src="/images/Frame 62.png" alt="" /></div>
            </div>
            <div class="card">
                <div class="card-info">
                    <h3>{{ $trazoStaff }}</h3>
                    <p>Trazo staff</p>
                </div>
                <div class="card-icon"><img src="/images/Frame 62.png" alt="" /></div>
            </div>
        </div>

        <div class="charts-container">
            <div class="chart-card large">
                <div class="chart-header">
                    <div>
                        <h3>Attendance</h3>
                        <div class="chart-legend-custom">
                            <span class="legend-dot absent"></span> Total Absent
                            <span class="legend-dot present"></span> Total Present
                        </div>
                    </div>

                </div>
                <div class="chart-wrapper">
                    <canvas id="attendanceBarChart"></canvas>
                </div>
            </div>

            <div class="chart-card small">
                <div class="chart-header">
                    <h3>Total Employees</h3>
                    <button type="submit" class="view-members-btn">All member</button>
                </div>
                <div class="chart-wrapper doughnut-box">
                    <canvas id="employeesDoughnutChart"></canvas>
                    <div class="doughnut-center-text">
                        <h2>{{ $totalEmployees }}</h2>
                    </div>
                </div>
                <div class="doughnut-footer-legend">
                    <div><span class="legend-dot hizo"></span> Hizo staff</div>
                    <div><span class="legend-dot trazo"></span> Trazo staff</div>
                    <div><span class="legend-dot glyde"></span> Glyde staff</div>
                </div>
            </div>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Employee Name</th>
                        <th>Position</th>
                        <th>Company</th>
                        <th>Clock-In</th>
                        <th>Clock-Out</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $user) <!-- named employees in controller not user-->
                        <tr>
                            <td>
                                <div class="both-td">
                                    <input type="checkbox" class="employee-checkbox" />
                                    @php
                                        $firstInitial = substr($user->first_name, 0, 1);
                                        $lastInitial = substr($user->last_name, 0, 1);

                                        $initials = strtoupper($firstInitial . $lastInitial);
                                    @endphp

                                    <div class="initials" style="overflow: hidden; 
                                    width: 35px; 
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
                                        @if ($user->avatar)
                                            <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar"
                                                style="width:100%;height:100%;object-fit:cover;border-radius:50%;">
                                        @else
                                            {{ $initials }}
                                        @endif
                                    </div>
                                    <h1 class="names"> {{ $user->first_name }} {{ $user->last_name }}</h1>
                                </div>
                            </td>

                            <td>{{ $user->position }}</td>
                            <td>{{ $user->company }}</td>

                            <td id="time-ins">
                                <div style="display: flex; flex-direction: column; gap: 2px;">
                                    <span>{{ $user->today_clock_in }}</span>
                                    @if($user->today_status === 'On Time')
                                        <span style="color: #00A64A; font-size: 10px; font-weight: bold;">● ON TIME</span>
                                    @elseif($user->today_status === 'Late')
                                        <span style="color: #D9383A; font-size: 10px; font-weight: bold;">● LATE</span>
                                    @else
                                        <span style="color: #718096; font-size: 10px; font-weight: bold;">● ABSENT</span>
                                    @endif
                                </div>
                            </td>

                            <td class="time-outs">
                                <div style="display: flex; flex-direction: column; gap: 2px;">
                                    @if($user->today_clock_out === 'Active')
                                        <span style="color: #00A64A; font-style: italic;">On Shift...</span>
                                    @elseif($user->out_status === 'Early Out')
                                        <span style="color: #D69E2E; font-weight: 500;">{{ $user->today_clock_out }}</span>
                                        <span style="color: #D69E2E; font-size: 10px; font-weight: bold;">● EARLY OUT</span>
                                    @else
                                        <span>{{ $user->today_clock_out }}</span>
                                    @endif
                                </div>
                            </td>

                            <td>
                                <div class="menu-container">
                                    <button class="menu-btn">⋮</button>
                                    <div class="menu-dropdown">
                                        <a href="{{ route('view-details.index') }}">View Details</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach









                    <!--<tr>
                        <td>
                            <div class="both-td">
                                <input type="checkbox" class="employee-checkbox" />
                                <img class="box-img" src="./images/Frame 208.png" alt="" />
                                <h1 class="names"> Favour Obi</h1>
                            </div>
                        </td>

                        <td>Frontend Dev.</td>
                        <td>Glyde</td>
                        <td class="time-in">09:03 AM</td>
                        <td id="time-outs">05:40 PM</td>
                        <td>
                            <div class="menu-container">
                                <button class="menu-btn">⋮</button>
                                <div class="menu-dropdown">
                                    <a href="#">View Details</a>
                                   
                                </div>
                            </div>
                        </td>
                    </tr>




                    <tr>
                        <td>
                            <div class="both-td">
                                <input type="checkbox" class="employee-checkbox" />
                                <img class="box-img" src="./images/Frame 208.png" alt="" />
                                <h1 class="names"> John Doe</h1>
                            </div>
                        </td>
                        <td>Backend Developer</td>
                        <td>Trazo</td>
                        <td id="time-ins">10:03 AM</td>
                        <td class="time-out">07:00 PM</td>
                        <td>
                            <div class="menu-container">
                                <button class="menu-btn">⋮</button>
                                <div class="menu-dropdown">
                                    <a href="#">View Details</a>
                                   
                                </div>
                            </div>
                        </td>
                    </tr>








                    <tr>
                        <td>
                            <div class="both-td">
                                <input type="checkbox" class="employee-checkbox" />
                                <img class="box-img" src="./images/Frame 208.png" alt="" />
                                <h1 class="names">Mark.J.Lopez</h1>
                            </div>
                        </td>

                        <td>Full Stack Developer</td>
                        <td>DevHub</td>
                        <td class="time-in">09:03 AM</td>
                        <td class="time-out">07:00 PM</td>
                        <td>
                            <div class="menu-container">
                                <button class="menu-btn">⋮</button>
                                <div class="menu-dropdown">
                                    <a href="#">View Details</a>
                                   
                                </div>
                            </div>
                        </td>
                    </tr> -->



                </tbody>
            </table>
        </div>
    </main>
    </div>
    </body>

    </html>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // 1. Weekly Attendance Breakdown Chart
            const ctxBar = document
                .getElementById("attendanceBarChart")
                .getContext("2d");

            new Chart(ctxBar, {
                type: "bar",
                data: {
                    labels: ["Mon", "Tue", "Wed", "Thu", "Fri"],
                    datasets: [
                        {
                            label: "Total Absent",
                            data: @json($absentData),
                            backgroundColor: "#CBB1E2",
                            borderRadius: 4,
                            barThickness: 12,
                        },
                        {
                            label: "Total Present",
                            data: @json($presentData),
                            backgroundColor: "#A2D9E1",
                            borderRadius: 4,
                            barThickness: 12,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: {
                        x: { grid: { display: false } },
                        y: {
                            border: { dash: [5, 5] },
                            grid: { color: "#EDEDED" },
                            min: 0,

                            max: {{ $totalEmployees }},
                            ticks: {
                                stepSize: Math.ceil({{ $totalEmployees }} / 4)
                            },
                        },
                    },
                },
            });

            // 2. Company Staff Breakdown Segment Donut
            const ctxDoughnut = document
                .getElementById("employeesDoughnutChart")
                .getContext("2d");
            new Chart(ctxDoughnut, {
                type: "doughnut",
                data: {
                    labels: ["Hizo staff", "Glyde staff", "Trazo staff"],
                    datasets: [
                        {
                            data: [{{ $hizoStaff }}, {{ $glydeStaff }}, {{ $trazoStaff }}],
                            backgroundColor: ["#06414F", "#A3E7D8", "#2ED4A1"],
                            borderWidth: 0,
                            cutout: "75%",
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                },
            });

            // Action Menu Toggles Dropdown Row Controls
            const menuBtns = document.querySelectorAll(".menu-btn");
            menuBtns.forEach((btn) => {
                btn.addEventListener("click", function (e) {
                    e.stopPropagation();
                    document.querySelectorAll(".menu-dropdown").forEach((menu) => {
                        if (menu !== this.nextElementSibling) menu.classList.remove("active");
                    });
                    this.nextElementSibling.classList.toggle("active");
                });
            });

            document.addEventListener("click", function (e) {
                if (!e.target.closest(".menu-container")) {
                    document
                        .querySelectorAll(".menu-dropdown")
                        .forEach((menu) => menu.classList.remove("active"));
                }
            });
        });
    </script>

    <style>
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

        .menu {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .menu a {
            text-decoration: none;
            color: #B7B7B7;
            padding: 14px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 16px;
            transition: 0.3s;
            width: 177.5px;
            /* height: 40px; */
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
        }

        .bottom-menu a:hover {
            background: white;
            color: #06414F;
        }

        /* LIQUID RESPONSIVE FLUID VIEW CONTAINER MAIN PANEL */
        .main {
            flex: 1;
            padding: 30px;
            margin-left: 270px;
        }

        .avatar-initials {
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

        /* HEADER COMPONENTS PROFILE CONTROL */
        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 25px;
        }

        .topbar h2 {
            font-size: 24px;
            font-weight: 700;
            color: #000000;
            margin: 0;
        }

        .topbar input {
            width: 260px;
            padding: 10px;
            border-radius: 20px;
            border: 1px solid #e2e2e2;
            font-size: 14px;
        }

        .search {
            background-color: #06414f;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            margin-left: 8px;
            cursor: pointer;
            font-size: 14px;
        }

        .user {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user img {
            width: 50px;
            height: 50px;
            opacity: 1;
            border-radius: 100px;

        }

        .user p {
            margin: 0;
            font-weight: 600;
            font-size: 14px;
        }

        .user small {
            color: #5E5D5D;
            font-size: 12px;
        }

        /* METRIC STAT CARDS ROW LAYOUT CONFIGURATION */
        .stat-cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 25px;
        }

        .card {
            background: #ffffff;
            border: 1px solid #ededed;
            border-radius: 12px;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card:hover {
            background-color: #06414F;
            color: white;
            color: #DFDEDE;

        }


        .card h3 {
            font-size: 28px;
            font-weight: 700;
            margin: 0 0 4px 0;
        }

        .card p {
            margin: 0;
            font-size: 14px;
            color: #7a7a7a;
        }



        .card-icon img {
            width: 24px;
            height: 24px;
            background-color: #F0F0F0;
            opacity: 1;
            gap: 10px;
            padding: 10px;
            border-radius: 100px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-width: 0px 1px 1px 0px;
            border-style: solid;
            border-color: #06414F;


        }

        /* CHARTS CONTAINER GRID MATRIX */
        .charts-container {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            margin-bottom: 25px;
        }

        .chart-header {
            display: flex;
            justify-content: space-between;
        }

        .chart-card {
            background: #ffffff;
            border: 1px solid #ededed;
            border-radius: 12px;
            padding: 24px;
            display: flex;
            flex-direction: column;
        }

        .chart-header h3 {
            font-size: 18px;
            font-weight: 600;
            margin: 0 0 6px 0;

        }

        .chart-legend-custom {
            font-size: 12px;
            color: #616060;
            display: flex;
            gap: 12px;
            align-items: center;
        }

        .legend-dot {
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
        }

        .legend-dot.absent {
            background-color: #D8C8F5;
        }

        .legend-dot.present {
            background-color: #C8E6F1;
        }

        .legend-dot.hizo {
            background-color: #06414F;
        }

        .legend-dot.glyde {
            background-color: #C8E6F1;
        }

        .legend-dot.trazo {
            background-color: #3CDF90;
        }

        .chart-dropdown,
        .view-members-btn {
            border: 1px solid #858484;
            background: #fff;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            cursor: pointer;
        }

        .chart-dropdown {
            border: none;
            background: #FAFAFA;

        }

        .chart-wrapper {
            position: relative;
            width: 100%;
            height: 240px;
        }

        .doughnut-box {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .doughnut-center-text {
            position: absolute;
            text-align: center;
        }

        .doughnut-center-text h2 {
            font-size: 32px;
            font-weight: 700;
            margin: 0;
        }

        .doughnut-footer-legend {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-top: 15px;
            font-size: 13px;
        }

        /* DATA LOG TABLE UI ARCHITECTURE */
        .table-wrapper {
            background: #ffffff;
            border: 1px solid #E9EDF0;
            border-radius: 12px;
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 14px;
        }

        th {
            /* background: #f9fafb; */
            padding: 16px;
            font-weight: 600;
            color: #4b5563;
            border-bottom: 1px solid #E9EDF0;
        }

        td {
            padding: 16px;
            border-bottom: 1px solid #E9EDF0;
            color: #1f2937;
        }

        .both-td {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .box-img {
            width: 32px;
            height: 32px;
            border-radius: 50%;
        }

        .names {
            font-size: 14px;
            font-weight: 500;
            margin: 0;
        }

        #time-ins {
            color: #ef4444;
            font-weight: 500;
        }

        .time-out {
            color: #C87B33;
            font-weight: 500;
        }

        #time-outs {
            color: #ef4444;
            font-weight: 500;
        }

        .menu-container {
            position: relative;
        }

        .menu-btn {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 18px;
        }

        .menu-dropdown {
            display: none;
            position: absolute;
            right: 0;
            background: white;
            border: 1px solid #ededed;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            border-radius: 6px;
            z-index: 10;
        }

        .menu-dropdown.active {
            display: block;
        }

        .menu-dropdown a {
            padding: 10px 16px;
            display: block;
            text-decoration: none;
            color: #333;
        }

        .menu-dropdown a:hover {
            background: #f9fafb;
        }

        /* FLUID TABLET VIEW COMPRESSION BREAKPOINT */
        @media (max-width: 1024px) {
            .charts-container {
                grid-template-columns: 1fr;
            }

            .stat-cards {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>

</x-layout>