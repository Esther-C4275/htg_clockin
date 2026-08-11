{{-- <x-layout>

    <aside class="sidebar">
        <div class="logo">
            <!-- <h1>HTG</h1>
    <span>TIME PORTAL</span> -->
            <img class="HGT" src="{{ asset('images/Artboard 1 2.png') }}" alt="">
        </div>

        <nav>
            <ul>
                <li>
                    <a href="{{ route('admin-dashboard.index') }}">
                        <img src="{{ asset('images/dash.png') }}">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin-employee.index') }}">
                        <img src="{{ asset('images/attendance.png') }}">
                        Employees
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin-attendance.index') }}">
                        <img src="{{ asset('images/employee.png') }}" alt="">
                        Attendance
                    </a>
                </li>
            </ul>

        </nav>

        <div class="bottom">
            <div class="both">
                <a href="{{ route('admin-setting.index') }}">
                    <img class="bots" src="{{ asset('images/setting.png') }}">
                    Settings
                </a>
            </div>

            <div class="both">

                <x-logout />
            </div>

        </div>
    </aside>

    <style>
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
    </style>

</x-layout> --}}