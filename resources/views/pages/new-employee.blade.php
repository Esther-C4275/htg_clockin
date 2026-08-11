<x-layout>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #f4f4f4;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        /* SIDEBAR */

        .sidebar {
            width: 230px;
            background: #06414F;
            color: #fff;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 20px;
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
        }

        .menu a:hover {
            background: white;
            color: #06414F;
        }

        .bottom-menu {
            display: flex;
            flex-direction: column;
            gap: 12px;
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
        }

        .bottom-menu a:hover {
            background: white;
            color: #06414F;
        }

        /* MAIN CONTENT */

        .main {
            flex: 1;
            padding: 30px;
            margin-left: 270px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 50px;
        }

        .topbar h2 {
            font-size: 32px;
            font-weight: 600;
            font-style: Semi Bold;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .profile {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .notification {
            position: relative;
            font-size: 18px;
            cursor: pointer;
        }

        .notification span {
            position: absolute;
            top: -2px;
            right: -2px;
            width: 8px;
            height: 8px;
            background: red;
            border-radius: 50%;
        }

        .user {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            object-fit: cover;
        }

        .user-text h4 {
            font-size: 14px;
            font-weight: 600;
        }

        .user-text p {
            font-size: 12px;
            color: #5E5D5D;
        }

        /* FORM */

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 28px 60px;
            max-width: 900px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #111;
        }

        .form-group input {
            height: 43px;
            width: 420px;
            border: 1px solid #767676;
            border-radius: 10px;
            padding: 0 16px;
            font-size: 16px;
            background: transparent;
            outline: none;
        }

        .form-group input::placeholder {
            color: #767676;
        }

        .full-width {
            grid-column: span 2;
        }

        .btn {
            margin-top: 70px;
            width: 100%;
            max-width: 900px;
            height: 54px;
            border: none;
            background: #06414F;
            color: white;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
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


        /* RESPONSIVE */

        @media(max-width:950px) {

            .container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .full-width {
                grid-column: span 1;
            }

            .topbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }

            .topbar h2 {
                font-size: 34px;
            }
        }
    </style>
    </head>

    <body>

        <div class="container">

            <!-- SIDEBAR -->

            <aside class="sidebar">

                <div>

                    <div class="logo"> <img src="{{ asset('images/Artboard 1 2.svg') }}" alt=""> </div>

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
                    </div>

                </div>

                <div class="bottom-menu">
                    <a href="{{ route('admin-setting.index') }}">
                        <i><img src="{{ asset('images/setting.png') }}" alt=""></i>
                        Settings
                    </a>

                    <x-adminlogout />
                </div>

            </aside>

            <!-- MAIN -->

            <main class="main">

                <div class="topbar">

                    <h2>Add New Employee</h2>

                    <div class="profile">

                        <div class="notification">
                            <i><img src="{{ asset('images/bell.png') }}" alt=""></i>

                        </div>

                        <div class="user">
                            @php
                                $firstInitial = substr($adminUser->first_name, 0, 1);
                                $lastInitial = substr($adminUser->last_name, 0, 1);

                                $initials = strtoupper($firstInitial . $lastInitial);
                               @endphp
                            <div class="initials">
                                <a href="{{ route('admin-setting.index') }}"
                                    style="text-decoration: none; color:#06414F ;">
                                    {{ $initials }}
                                </a>
                            </div>
                            <div class="user-text">
                                <h4>{{ $adminUser->first_name }} {{ $adminUser->last_name }}</h4>
                                <p>Admin</p>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- FORM -->

                <form action="{{ route('admin-employee.store') }}" method="POSt">
                    @if ($errors->any())
                        <div
                            style="background: #FEE2E2; color: #991B1B; padding: 15px; border-radius: 6px; margin-bottom: 20px;">
                            <strong>Fix these errors to save:</strong>
                            <ul style="margin-top: 5px; padding-left: 20px;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-grid">

                        <div class="form-group">
                            <label>First name</label>
                            <input type="text" name="first_name" placeholder="Enter first name" required>
                        </div>

                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" name="last_name" placeholder="Enter last name" required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Enter email" required>
                        </div>

                        <div class="form-group">
                            <label>Department</label>
                            <input type="text" name="department" placeholder="Enter department" required>
                        </div>

                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" name="position" placeholder="Enter position" required>
                        </div>

                        <div class="form-group">
                            <label>Phone number</label>
                            <input type="tel" name="phone" placeholder="Enter phone number" required>
                        </div>

                        <div class="form-group">
                            <label>Date of joining</label>
                            <input type="date" name="date" placeholder="select date" required>
                        </div>

                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" name="company" placeholder="Hizo/Trazo/Glyde" required>
                        </div>

                    </div>

                    <button type="submit" class="btn">Add Employee</button>

                </form>

            </main>

        </div>

</x-layout>