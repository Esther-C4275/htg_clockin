<x-layout>
    <aside class="sidebar">

        <div>

            <div class="logo">
                <a href="{{ route('admin-dashboard.index') }}" class="logo-link">
                    <img src="{{ asset('images/Artboard 1 2.svg') }}" alt="Home">
                </a>
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
                <a href="{{ route('admin-setting.index') }}" class="setting-link">
                    <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
                    <span>Settings</span>
                </a>
            </div>

        </div>

        <div class="bottom-menu">
            <div class="user-email" style="color: #B7B7B7">
                @php
                    $firstInitial = strtoupper(substr($adminUser->first_name, 0, 1));
                @endphp

                <div class="profile-pic">
                    @if($adminUser->avatar)
                        <img src="{{ asset('storage/' . $adminUser->avatar) }}" alt="Profile"
                            style="width: 100%; height: 100%; object-fit: cover; border-radius: 100%;">
                    @else
                        <span>{{ $firstInitial }}</span>
                    @endif
                </div>

                <span class="user-email-text" title="{{ $adminUser->email }}">
                    {{ $adminUser->email }}
                </span>
            </div>
            <a href="{{ route('admin-setting.index') }}" class="setting-links">
                <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
                <span>Settings</span>
            </a>
            <div style="margin-left: -15px;">
                <x-adminlogout />
            </div>
        </div>

        <button class="sidebar-close" id="sidebarClose">
            ×
        </button>

    </aside>

    <div class="sidebar-overlay" id="sidebarOverlay"></div>


    <!-- main content -->
    <main class="main">
        <div class="topbar">
            <div class="mobile-brand">
                <a href="{{ route('admin-dashboard.index') }}" class="mobile-logo-link">
                    <img src="{{ asset('images/Artboard 1-1 2.svg') }}" class="mobile-logo" alt="HTG">
                </a>
            </div>
            <div class="hamburger">
                <button class="hamburger-btn" id="openSidebar">
                    <img src="{{ asset('images/breadcrumb.svg') }}">
                </button>
            </div>

            <div class="user">
                @php
                    $firstInitial = substr($adminUser->first_name, 0, 1);
                    $lastInitial = substr($adminUser->last_name, 0, 1);

                    $initials = strtoupper($firstInitial . $lastInitial);
                @endphp

                <div class="avatar-initials">
                    <a href="{{ route('admin-setting.index') }}" style="text-decoration:none; color: #06414F">
                        @if($adminUser->avatar)
                            <img src="{{ asset('storage/' . $adminUser->avatar) }}" alt="Profile"
                                style="width: 100%; height: 100%; object-fit: cover; border-radius: 100%;">
                        @else
                            {{ $initials }}
                        @endif
                    </a>
                </div>
                <div>
                    <p>{{ $adminUser->first_name }} {{ $adminUser->last_name }}</p>
                    <small>Admin</small>
                </div>
            </div>

            <h2>Dashboard</h2>
        </div>

        <div class="stat-cards">
            <div class="card">
                <div class="card-info">
                    <h3>{{ $totalEmployees }}</h3>
                    <p>Total staff</p>
                </div>
                <div class="card-icon"><img src="{{ asset('images/Frame 62.png') }}" alt="" /></div>
            </div>

            <div class="card">
                <div class="card-info">
                    <h3>{{ $hizoStaff }}</h3>
                    <p>Hizo staff</p>
                </div>
                <div class="card-icon"><img src="{{ asset('images/Frame 62.png') }}" alt="" /></div>
            </div>
            <div class="card">
                <div class="card-info">
                    <h3>{{ $glydeStaff }}</h3>
                    <p>Glyde staff</p>
                </div>
                <div class="card-icon"><img src="{{ asset('images/Frame 62.png') }}" alt="" /></div>
            </div>
            <div class="card">
                <div class="card-info">
                    <h3>{{ $trazoStaff }}</h3>
                    <p>Trazo staff</p>
                </div>
                <div class="card-icon"><img src="{{ asset('images/Frame 62.png') }}" alt="" /></div>
            </div>
        </div>

        {{-- <div class="charts-container">
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
        </div> --}}


        <div class="charts-container">
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
                    @foreach ($employees as $user)
                        <tr>
                            <td>
                                <div class="both-td">

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
                                        <a href="{{ route('view-employee.show', $user->uuid) }}">View Details</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

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
                            barThickness: 10,
                        },
                        {
                            label: "Total Present",
                            data: @json($presentData),
                            backgroundColor: "#A2D9E1",
                            borderRadius: 4,
                            barThickness: 10,
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
                            backgroundColor: ["#06414F", "#C8E6F1", "#2ED4A1"],
                            borderWidth: 0,
                            cutout: "80%",
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

        .sidebar-close {
            display: none;
        }

        .logo {
            margin-bottom: 50px;
            margin-top: 8px;
            margin-left: 5px;
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
            padding: 14px;
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

        .setting-links {
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

        .setting-links:hover {
            background-color: #ffffff;
            color: #06414F;
        }

        .menu a.setting-link {
            display: none;
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
            margin-left: -13px;
            font-size: 16px;
            gap: 12px;
            border-radius: 6px;
            transition: 0.3s;
            width: 177.5px;
        }

        .bottom-menu a:hover {
            background: white;
            color: #06414F;
        }

        

        .mobile-brand {
            display: none;
        }

        .user-email {
            display: none;
        }

        /* MAIN PANEL */
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

        /* HEADER COMPONENTS */
        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 25px;
            flex-direction: row-reverse;
        }

        .topbar h2 {
            font-size: 24px;
            font-weight: 700;
            color: #000000;
            margin: 0;
        }

        .user {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: -22px;
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

        /* METRIC STAT CARDS */
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

        .card:hover,
        .card.active-card {
            background-color: #06414F;
            color: white;
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

        .card:hover p,
        .card.active-card p {
            color: #DFDEDE;
        }

        .card-icon img {
            width: 24px;
            height: 24px;
            background-color: #F0F0F0;
            opacity: 1;
            gap: 10px;
            padding: 10px;
            border-radius: 100px;
            border: 1px solid #06414F;
        }

        /* CHARTS CONTAINER */
        .charts-container {
            display: flex;
            flex-direction: row-reverse;
            gap: 20px;
            align-items: stretch;
            margin-bottom: 25px;
        }


        .chart-card.large {
            flex: 1.6;
            min-width: 0;
        }

        .chart-card.small {
            flex: 1;
            min-width: 0;
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

        .view-members-btn {
            border: 1px solid #858484;
            background: #fff;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            cursor: pointer;
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

        .attendance-card {
            order: 1;
            flex: 1.5;
        }

        .donut-card {
            order: 2;
            flex: 1;
        }

        /* DATA TABLE */
        .table-wrapper {
            background: #ffffff;
            border: 1px solid #E9EDF0;
            border-radius: 12px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 14px;
        }

        th {
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
            gap: 8px;
        }

        th {
            position: static;
            /* Header stays in place relative to table content */
        }

        .names {
            font-size: 14px;
            font-weight: 500;
            margin: 0;
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

        .hamburger{
            display: none;
        }

        @media (max-width: 1024px) {
            .charts-container {
                grid-template-columns: 1fr;
            }

            .stat-cards {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            body {
                background: #FFFFFF;
            }

            main {
                margin-left: 0 !important;
                padding: 7px !important;
            }

            .table-wrapper {
                max-height: 380px;
                overflow-y: auto;
                overflow-x: auto;
            }

            table {
                border-collapse: separate;
                border-spacing: 0;
                min-width: 580px;
            }

            th {
                top: 0;
            }


            .table-wrapper::-webkit-scrollbar {
                width: 5px;
                height: 5px;
            }

            .table-wrapper::-webkit-scrollbar-thumb {
                background: #CBD5E1;
                border-radius: 6px;
            }


            .topbar {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                margin-bottom: 20px;
                gap: 12px;
            }

            .mobile-brand {
                display: flex !important;
                width: 100%;
                justify-content: space-between;
                align-items: center;
            }

            .mobile-brand .mobile-logo {
                width: 68px;
                height: 30px;
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
                margin-top: -65px;
                margin-right: -18px;
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

            .user {
                display: flex;
                align-items: center;
                gap: 12px;
                order: 2;
                margin-top: 4px;
            }

            .user .avatar-initials {
                width: 50px;
                height: 50px;
                font-size: 13px;
            }

            .topbar h2 {
                font-size: 20px;
                font-weight: 700;
                order: 3;
                margin-top: 6px;
            }


            .stat-cards {
                display: flex !important;
                overflow-x: auto;
                gap: 12px;
                margin-bottom: 20px;
                padding-bottom: 6px;
                scroll-snap-type: x mandatory;
                -webkit-overflow-scrolling: touch;
            }

            .stat-cards::-webkit-scrollbar {
                display: none;
            }

            .card {
                flex: 0 0 calc(50% - 6px);
                min-width: 135px;
                padding: 14px 16px;
                border-radius: 12px;
                scroll-snap-align: start;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .card h3 {
                font-size: 22px;
            }

            .card p {
                font-size: 12px;
                white-space: nowrap;
            }

            .card-icon img {
                width: 18px;
                height: 18px;
                padding: 6px;
            }


            .charts-container {
                display: flex;
                flex-direction: column;
                gap: 16px;
                margin-bottom: 20px;
            }

            .chart-card {
                padding: 16px;
                border-radius: 12px;
            }

            .chart-card.small {
                order: 1;
            }

            .chart-card.large {
                order: 2;
            }

            .chart-wrapper {
                height: 200px;
            }


            .sidebar {
                position: fixed;
                top: 0;
                left: -100%;
                width: 78%;
                max-width: 300px;
                height: 100%;
               
                background: #06414F;
                padding: 24px 20px calc(24px + env(safe-area-inset-bottom, 0px)) 20px;
                z-index: 2000;
                transition: left .3s ease;
                border-top-right-radius: 40px;
                border-bottom-right-radius: 40px;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                box-sizing: border-box;
                overflow: hidden;
            }

            .sidebar.active {
                left: 0;
            }

            .sidebar-close {
                display: flex !important;
                position: absolute;
                top: 25px;
                right: 14px;
                width: 24px;
                height: 24px;
                align-items: center;
                justify-content: center;
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
                background: rgba(6, 65, 79, 0.5);
                backdrop-filter: blur(4px);
                z-index: 1500;
            }

            .sidebar-overlay.active {
                display: block;
            }

            .bottom-menu .setting-links {
                display: none !important;
            }

            .setting-link {
                display: flex !important;
                align-items: center;
                gap: 12px;
                padding: 12px;
                color: #B7B7B7;
                text-decoration: none;
                font-size: 16px;
            }

            .user-email {
                display: flex !important;
                align-items: center;
                gap: 10px;
                padding: 10px 0;
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
                font-size: 18px;
                flex-shrink: 0;
                overflow: hidden;
            }

            .menu {
                margin-left: -15px;

            }

            .menu a {
                font-size: 18px;
            }

            .view-members-btn {
                display: none;
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
</x-layout>