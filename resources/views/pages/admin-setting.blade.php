<x-layout>

    <body>

        <!-- SIDEBAR -->

        <div class="sidebar">

            <div>

                <div class="logo">
                    <img src="{{ asset('images/htg.svg') }}" alt="">
                </div>

                <div class="menu">

                    <a href="{{ route('admin-dashboard.index') }}">
                        <i><img src="{{ asset('images/dash.svg') }}" alt=""></i>
                        Dashboard
                    </a>

                    <a href="{{ route('admin-employee.index') }}">
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

                <a href="{{ route('admin-setting.index') }}" class="active">
                    <i><img src="{{ asset('images/setting.svg') }}" alt=""></i>
                    Settings
                </a>

                <x-adminlogout />

            </div>

        </div>

        <!-- MAIN -->

        <div class="main">

            <!-- TOPBAR -->

            <div class="topbar">

                <h2>Dashboard</h2>

                <div class="profile-top">

                    {{-- <div class="notification">
                        <i><img src="{{ asset('images/bell.png') }}" alt=""></i>
                    </div> --}}

                    <div class="profile">
                        @php
                            $firstInitial = substr($user->first_name, 0, 1);
                            $lastInitial = substr($user->last_name, 0, 1);

                            $initials = strtoupper($firstInitial . $lastInitial);

                        @endphp
                        <div class="initials-pic">
                            {{ $initials }}
                        </div>

                        <div>
                            <h4>{{ $user->first_name }} {{$user->last_name }}</h4>
                            <p>Admin</p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- CONTENT -->

            <div class="content">

                <!-- LEFT SETTINGS -->

                <div class="settings-card">

                    <h3>Settings</h3>

                    <p class="small-text">
                        You can find all settings here
                    </p>

                    <div class="settings-links">

                        <a href="{{ route('admin-setting.index') }}"
                            style="font-weight: 600; color: {{ request()->is('admin-setting*') ? '#03343b' : '#BCBCBC' }}">
                            <i class="fa-solid fa-user"></i>
                            My Profile
                        </a>

                        <a href="{{route('security.index') }}"
                            style="font-weight: 600; color: {{ request()->is('security-options*') ? '#03343b' : '#BCBCBC' }}">
                            <i class="fa-solid fa-lock"></i>
                            Security Options
                        </a>

                        <a href="{{route('index.add') }}"
                            style="font-weight: 600; color: {{ request()->is('add-admin*') ? '#03343b' : '#BCBCBC' }}">
                            <i class="fa-solid fa-file-circle-plus"></i>
                            Add Admin
                        </a>

                    </div>

                </div>

                <!-- RIGHT SECTION -->

                <div class="right-section">

                    <!-- PROFILE INFO -->

                    <div class="card">

                        <div class="card-header">
                            <h3>Profile Information</h3>
                            <a href="{{ route('admin-setting.edit', Auth::user()->id) }}">
                                <button type="submit" class="edit-btn primary">
                                    <i class="fa-solid fa-pen"></i>
                                    Edit
                                </button>
                            </a>
                        </div>

                        <div class="profile-info">

                            <div class="profile-user">
                                @php
                                    $firstInitial = substr($user->first_name, 0, 1);
                                    $lastInitial = substr($user->last_name, 0, 1);

                                    $initials = strtoupper($firstInitial . $lastInitial);

                                @endphp
                                <div class="initials">
                                    {{ $initials }}
                                </div>
                                <div>
                                    <h4>{{ $user->first_name }} {{ $user->last_name }}</h4>
                                    <p>Admin</p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- PERSONAL DETAILS -->

                    <div class="card">

                        <div class="card-header">
                            <h6>Personal Details</h6>


                        </div>

                        <div class="details-grid">

                            <div class="detail-item">
                                <h5>First Name</h5>
                                <p>{{ $user->first_name }}</p>
                            </div>

                            <div class="detail-item">
                                <h5>Last Name</h5>
                                <p>{{ $user->last_name }}</p>
                            </div>

                            <div class="detail-item">
                                <h5>Email Address</h5>
                                <p>{{ $user->email }}</p>
                            </div>

                            <div class="detail-item">
                                <h5>Phone</h5>
                                <p>+{{ $user->phone }}</p>
                            </div>

                            <div class="detail-item">
                                <h5>Position</h5>
                                <p>{{ $user->position}}</p>
                            </div>

                            <div class="detail-item">
                                <h5>Gender</h5>
                                <p>{{ $user->gender }}</p>
                            </div>

                            <div class="detail-item">
                                <h5>Date of Birth</h5>
                                <p>{{ $user->date_of_birth}}</p>
                            </div>

                        </div>

                    </div>

                    <!-- ADDRESS -->

                    <div class="card">

                        <div class="card-header">
                            <h3>Address</h3>


                        </div>

                        <div class="details-grid">

                            <div class="detail-item">
                                <h5>Country</h5>
                                <p>{{ $user->country }}</p>
                            </div>

                            <div class="detail-item">
                                <h5>City/State</h5>
                                <p>{{ $user->state }}</p>
                            </div>

                            <div class="detail-item full-width">
                                <h5>Residential Address</h5>
                                <p>{{ $user->address }}</p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Inter', sans-serif;
            }

            main {
                background: white;
                display: flex;
                width: 100%;

            }

            /* SIDEBAR */

            .sidebar {
                width: 260px;
                height: 100vh;
                background: #06414F;
                padding: 35px 20px;
                position: fixed;
                top: 0;
                left: 0;

                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            .logo img {
                width: 150px;
            }

            .menu {
                margin-top: 30px;
                display: flex;
                flex-direction: column;
                gap: 5px;

            }

            .menu a,
            .bottom-menu a {
                text-decoration: none;
                color: #B7B7B7;
                padding: 12px 16px;

                width: 100%;
                border-radius: 8px;
                display: flex;
                align-items: center;
                gap: 12px;
                transition: 0.3s;
                font-size: 18px;
            }

            .menu a:hover,
            .bottom-menu a:hover {
                background: #fff;
                color: #06414F;
            }

            .bottom-menu {
                display: flex;
                flex-direction: column;
            }

            /* MAIN CONTENT */

            .main {
                margin-left: 260px;
                width: 100%;
                padding: 30px;
            }

            /* TOPBAR */

            .topbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 35px;
            }

            .topbar h2 {
                font-weight: 600;
                font-style: Semi Bold;
                font-size: 24px;
                line-height: 100%;
                letter-spacing: 0px;
                text-align: center;

            }

            .profile-top {
                display: flex;
                align-items: center;
                gap: 18px;
            }

            .notification {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                /* box-shadow:0 2px 10px rgba(0,0,0,0.05); */
            }

            .profile {
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .profile img {
                object-fit: cover;
                width: 50px;
                height: 50px;
                opacity: 1;
                border-radius: 100px;

            }

            .profile h4 {
                font-weight: 600;
                font-style: Semi Bold;
                font-size: 14px;
                line-height: 100%;
                letter-spacing: 0px;
                margin-bottom: 4px;
            }

            .profile p {
                font-weight: 500;
                font-style: Medium;
                font-size: 12px;
                line-height: 100%;
                letter-spacing: 0px;
                color: #5E5D5D;

            }

            /* CONTENT AREA */

            .content {
                display: grid;
                grid-template-columns: 260px minmax(0, 1fr);
                gap: 25px;
                width: 100%;
            }

            /* LEFT SETTINGS */

            .settings-card {
                border: 1px solid #EDEDED;
                border-radius: 8px;
                padding: 20px;
            }

            .settings-card h3 {
                font-size: 18px;
                margin-bottom: 8px;
                font-weight: 600;
            }

            .settings-card .small-text {
                color: #616060;
                font-size: 12px;
                margin-bottom: 45px;
            }

            .settings-links {
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

            .settings-links a {
                text-decoration: none;
                color: #BCBCBC;
                display: flex;
                align-items: center;
                gap: 12px;
                font-size: 14px;
                transition: 0.3s;
            }

            .settings-links a:hover {
                color: #06414F;
                font-weight: 600;
            }

            /* RIGHT CONTENT */

            .right-section {
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

            .card {
                border: 1px solid #EDEDED;
                border-radius: 8px;
                padding: 25px;
                width: 100%;
            }

            .card-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 25px;
            }

            .card-header h6 {
                font-weight: 600;
                font-style: Semi Bold;
                font-size: 16px;
                line-height: 100%;
                letter-spacing: 0px;
            }

            .edit-btn {
                border: 1px solid #EDEDED !important;
                color: #494848;
                background-color: #FFFFFF;
                padding: 10px 16px;
                border-radius: 8px;
                cursor: pointer;
                font-size: 14px;
                /* color:; */
            }

            .edit-btn.primary {
                border: none;
            }

            .edit-btn:hover {
                background-color: #06414F;
                color: #FFFFFF;
            }

            /* PROFILE INFO */

            .profile-info {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .profile-user {
                display: flex;
                align-items: center;
                gap: 14px;
            }

            .profile-user img {
                width: 60px;
                height: 60px;
                border-radius: 50%;
                object-fit: cover;
            }

            .profile-user h4 {
                font-size: 18px;
                margin-bottom: 5px;
            }

            .profile-user p {
                color: #BCBCBC;
                font-size: 14px;
            }

            /* DETAILS GRID */

            .details-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 35px;
            }

            .detail-item h5 {
                font-size: 13px;
                margin-bottom: 10px;
                font-weight: 500;
            }

            .detail-item p {
                font-size: 15px;
                font-weight: 600;
            }

            .full-width {
                grid-column: 1 / -1;
            }

            .initials {
                width: 60px;
                height: 60px;
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

            .initials-pic {
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