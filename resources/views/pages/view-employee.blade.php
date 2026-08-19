<x-layout>
    <style>
        main {
            width: 90%;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #ffffff;
            color: var(--text-dark);
            display: flex;
            min-height: 100vh;
            font-family: 'Manrope', sans-serif;

        }

        /* --- SIDEBAR --- */
        .sidebar {
            width: 240px;
            background-color: #06414F;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            padding: 20px;
            position: fixed;
            height: 100vh;
            left: 0;
            top: 0;
            z-index: 100;
            transition: transform 0.3s ease;
        }

        .sidebar-close{
            display: none;
         }

        .logo-container {
            padding: 0 24px 40px 24px;
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

        .setting-link{
            display: none;
        }


        .nav-links {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 8px;
            padding: 0 12px;
            margin-top: 31px;
        }

        .nav-item a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            color: #B7B7B7;
            text-decoration: none;
            font-weight: 500;
            border-radius: 6px;
            transition: all 0.2s ease;
            font-size: 16px;
        }

        .nav-item a:hover {
            color: #06414F;
            background-color: #ffffff;
        }

        .sidebar-footer {
            margin-top: auto;
            padding: 0 12px;
            display: flex;
            flex-direction: column;
            gap: 8px;
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

        /* --- MAIN CONTENT AREA --- */
        .main-wrapper {
            margin-left: 230px;
            flex: 1;
            padding: 30px;
            background-color: #ffffff;
            min-height: 100vh;
            /* width: calc(100% - var(--sidebar-width)); */
        }

        /* Top Header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .breadcrumb {
            font-size: 25px;
            font-weight: 700;
            margin-left: 3px;
        }

        .breadcrumb span {
            color: #000000;
            font-weight: 600;

        }

        .user-profile-top {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .notification-btn {
            /* background: var(--bg-light); */
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            position: relative;
        }

        .notification-dot {
            width: 8px;
            height: 8px;
            background-color: #ef4444;
            border-radius: 50%;
            position: absolute;
            top: 10px;
            right: 12px;
        }

        .admin-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .admin-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .admin-name {
            font-size: 14px;
            font-weight: 600;
        }

        .admin-role {
            font-size: 12px;
            color: var(--text-muted);
        }

        /* Tabs Navigation */
        .tabs-container {
            display: flex;
            background-color: #ffffff;
            padding: 4px;
            border-radius: 8px;
            width: fit-content;
            margin-bottom: 32px;
        }

        .tabs-container a {
            text-decoration: none;
            color: #06414F;
            cursor: pointer;
        }

        .tabs-container a:hover {
            background: #06414F;
            color: white;
        }


        .tabs-container a {
            padding: 10px;
            border: none;
            background: transparent;
            font-size: 16px;
            font-weight: 500;
            color: #06414F;
            border: 1px solid #06414F;
            border-radius: 2px;
            cursor: pointer;
            margin-left: -1px;
            transition: all 0.2s ease;
        }

        .tab-btn:hover {
            background-color: #06414F;
            color: #ffffff;
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

        /* --- DASHBOARD GRID SYSTEM --- */
        .dashboard-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 24px;
            align-items: start;

        }

        /* --- Profile Info Card --- */
        .profile-card {
            padding: 32px;
            display: grid;
            grid-template-columns: 180px 1fr;
            gap: 32px;
            border: 1px solid #EDEDED;
            border-radius: 8px;
        }

        .profile-left {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            text-align: center;
        }

        .profile-avatar {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 16px;
        }

        .profile-pic {
            width: 140px;
            height: 140px;
            background-color: #E2EEF9;
            color: #06414F;
            font-weight: 700;
            font-size: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-transform: uppercase;
            border: 1px solid #C5DCF2;
        }

        .emp-name {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 4px;
            margin-top: 6px;
        }

        .emp-role {
            font-size: 13px;
            color: var(--text-muted);
        }

        .info-section-title {
            /* font-size: 16px;
            font-weight: 600; */
            margin-bottom: 16px;
            font-family: Inter;
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 0px;
        }

        .info-section-titles {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 16px;
        }

        .gender-selector {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            color: var(--text-dark);
            margin-bottom: 24px;
        }

        .gender-dot {
            width: 14px;
            height: 14px;
            border: 1.5px solid #ffffff;
            outline: 1px solid #9D9C9C;
            background-color: #06414F;
            border-radius: 50%;
        }

        .details-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 32px;
        }

        .detail-group label {
            display: block;
            font-size: 12px;
            font-weight: 400;
            font-style: Regular;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;
            margin-bottom: 5px;
        }

        .detail-group p {
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .back a {
            color: #B7B7B7;
            text-decoration: none;
            background-color: #06414F;
            border: 5px;
            margin-bottom: 25px;
            padding: 6px;
            font-size: 14px;
            border-radius: 8px;


        }

        .back {
            border-radius: 3px;
        }

        .address-section {
            /* border-top: 1px solid var(--border-color); */
            padding-top: 24px;
        }

        /* --- RESPONSIVE METRIC CARDS (RIGHT COLUMN) --- */
        .metrics-column {
            display: flex;
            flex-direction: column;
            gap: 24px;
            width: 100%;
        }

        .metric-card {
            background-color: #F6F8FA;
            border-radius: 6px;
            padding: 24px;
            width: 100%;
        }

        .metric-card.white-bg {
            background-color: #ffffff;
            border: 1px solid #EDEDED;
            box-shadow: #00000040 0px 4px 10px;

        }

        .metric-title {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        /* RESPONSIVE PROGRESS BAR */
        .progress-container {
            width: 100%;
        }

        .progress-header {
            display: flex;
            justify-content: space-between;
            font-size: 13px;
            margin-bottom: 8px;
        }

        .progress-label {
            color: var(--text-muted);
            font-weight: 500;
        }

        .progress-value {
            font-weight: 600;
        }

        .progress-bar-bg {
            width: 100%;
            background-color: #C3D7DC;
            border-radius: 4px;
            height: 10px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .progress-bar-fill {
            height: 100%;
            background-color: #06414F;
            width: 53.75%;
            /* (4.30 / 8.0) * 100 */
            border-radius: 4px;
            transition: width 0.4s ease-in-out;
        }

        .target-box {
            background-color: #C3D7DC;
            border-radius: 4px;
            padding: 12px;
            width: fit-content;
            color: #06414F;
        }

        .target-label {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--primary-dark);
            font-weight: 600;
        }

        .target-val {
            font-size: 20px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-top: 2px;
        }

        .target-val span {
            font-size: 12px;
            font-weight: 500;
        }

        /* RESPONSIVE ATTENDANCE DONUT CHART */
        .attendance-analytics {
            display: flex;
            align-items: center;
            gap: 24px;
            width: 100%;
            flex-wrap: wrap;
            /* Wraps cleanly on narrow spaces */
        }

        /* The wrapper scales fluidly based on parent container width */
        .chart-container {
            position: relative;
            width: min(140px, 100%);
            max-width: 120px;
            /* Upper bounds size boundary */
            aspect-ratio: 1 / 1;
            /* Maintains square ratio automatically */
            flex: 0 0 auto;
        }

        /* SVG scale matching containing frame box perfectly */
        .donut-chart {
            transform: rotate(-90deg);
            width: 100%;
            height: 100%;
            display: block;
        }

        .donut-bg {
            fill: none;
            stroke: #A3DCBC;
            stroke-width: 14;
        }

        .donut-fill {
            fill: none;
            stroke: #00A64A;
            stroke-width: 14;
            stroke-dasharray: 251.2;
            stroke-dashoffset: 37.68;
            /* 85% computed value */
            stroke-linecap: round;
        }

        .chart-center-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: calc(14px + 0.2vw);
            /* Responsive text scaling */
            font-weight: 700;
        }

        .attendance-stats {
            display: flex;
            flex-direction: column;
            gap: 12px;
            flex: 2 1 0%;
            min-width: 120px;
        }

        .stat-group label {
            text-transform: uppercase;
            display: block;
            font-weight: 500;

            font-weight: 600;
            font-style: SemiBold;
            font-size: 10px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .stat-group p {
            /* font-size: 15px;
            font-weight: 600; */

            font-weight: 600;
            font-style: SemiBold;
            font-size: 18px;
            line-height: 24px;
            letter-spacing: 0px;
            vertical-align: middle;

        }

        /* .stat-group p span {
            font-size: 14px;
            font-weight: 400;
            color: var(--text-muted);
            margin-left: 4px;
        } */

        /* Mobile Menu Button */
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-dark);
        }

        /* --- RESPONSIVE BREAKPOINTS --- */
        @media (max-width: 1024px) {
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            body{
            background: #ffffff;
        }

        .main-wrapper {
            margin-left: 0;
            padding: 16px;
        }

        .header{
            display: flex;
            flex-direction: column;
        }

        .mobile-brand{
            gap: 222px;
        } 

        .mobile-brand img{
            margin-left: 60px;
        }

        .breadcrumb {
            display: flex;
            /* flex-direction: column; */
        }
        .dashboard-container{
            display: block;
            width: 100%;
            height: auto;
            position: relative;
        }

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

    .sidebar-footer a.setting-links {
    display: none !important;
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

    .user-email {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 12px;
        margin-bottom: 8px;
        width: 100%;
        margin-left: -30px;
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

    .mobile-brand{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:8px;
            gap: 342px;

        }

        .mobile-brand img{
            width: 68px;
            height: 40px;
            margin-left: 128px;
            display:block;
        }

        .admin-info {
            display: none;
        }
 
        /* .mobile-brand img{
            width:60px;
            height:auto;
            display:block;
        } */

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

        .nav-links{
            margin-left: -30px;
        }

        .nav-item a {
            font-size: 18px;
        }

        .metrics-column{
            display: flex;
            flex-direction: row;
        }

        .breadcrumb{
            font-weight: 600;
            font-size: 16px;
            margin-right: 159px;
        }

     body {
        background: #ffffff;
    }

    .main-wrapper {
        margin-left: 0;
        padding: 16px;
    }

    /* --- Header & Navigation Bar --- */
    .header {
        display: flex;
        flex-direction: column;
        align-items: stretch;
        margin-bottom: 16px;
    }

    .mobile-brand {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        margin-left: 50px;
        margin-bottom: 12px;
    }

   
    .mobile-brand img {
        width: 68px;
        height: 30px;
        margin-left: -51px;
        display: block;
    }

    .hamburger-btn {
        display: flex;
        align-items: center;
        /* justify-content: center; */
        width: 36px;
        height: 36px;
        padding: 0;
        border: none;
        background: none;
    }

    .breadcrumb {
        font-weight: 700;
        font-size: 18px;
        margin-right: 0;
        margin-left: 0;
        width: 100%;
        text-align: left;
    }


    .admin-info {
        display: none;
    }

  
    .tabs-container {
        display: flex;
        width: 400px;
        background-color: #ffffff;
        border: 1px solid #06414F;
        border-radius: 8px;
        padding: 0px;
        margin-left: -1px;
        margin-bottom: 24px;
        box-sizing: border-box;
    }

    .tabs-container a {
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

   
    .tabs-container a.active,
    .tabs-container a:hover {
        background-color: #06414F;
        color: #ffffff;
    }

    /* --- Profile Details Card --- */
    .profile-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 0;
        border: none;
        margin-left: 29px;
        border-radius: 0;
        width: 100%;
    }

    .profile-left {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin-bottom: 24px;
    }

    .emp-name {
        font-size: 18px;
        font-weight: 700;
        margin-top: 0;
    }

    .emp-role {
        font-size: 13px;
        color: #6B7280;
    }

    .profile-right {
        width: 100%;
    }

    .gender-selector {
        display: none;
    }

    .info-section-titles {
        font-size: 15px;
        font-weight: 700;
        margin-bottom: 16px;
    }

    .details-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 19px 56px;
        margin-bottom: 24px;
    }

    .detail-group label {
        font-size: 11px;
        color: #6B7280;
        margin-bottom: 4px;
    }
    .mobile-details{
        margin-left: 30px;
    }

    .detail-group p {
        font-size: 13px;
        font-weight: 600;
    }

    .address-section {
        padding-top: 16px;
        border-top: none;
    }

    
    .dashboard-grid {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .metrics-column {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
        width: 100%;
        margin-left: 28px;
    }

    .metric-card, 
    .metric-card.white-bg {
        background-color: #F8FAFC;
        border: 1px solid #E2E8F0;
        border-radius: 10px;
        padding: 12px;
        box-shadow: none;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .metric-title {
        font-size: 13px;
        font-weight: 700;
        margin-bottom: 12px;
    }

    .progress-header {
        font-size: 10px;
        margin-bottom: 4px;
    }

    .progress-bar-bg {
        height: 6px;
        margin-bottom: 12px;
    }

    .target-box {
        padding: 6px 10px;
        border-radius: 6px;
    }

    .target-label {
        font-size: 9px;
    }

    .target-val {
        font-size: 15px;
    }

    .attendance-analytics {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 10px;
    }

    .chart-container {
        width: 54px;
        max-width: 54px;
    }

    .chart-center-text {
        font-size: 11px;
    }

    .attendance-stats {
        gap: 8px;
    }

    .stat-group label {
        font-size: 8px;
    }

    .stat-group p {
        font-size: 13px;
        line-height: 1.1;
    }

    /* --- Back Button --- */
    .back {
        display: none;
    }

    .profile-pic{
        width: 50px !important;
        height: 50px !important;
        font-size: 16px !important;
    }

}

        

        
    </style>
    </head>

    <body>

        <nav class="sidebar" id="sidebar">
            <div class="logo-container">
                <div class="logo">
                    <img src="{{ asset('images/Artboard 1 2.svg') }}" alt="">
                </div>
            </div>
            <ul class="nav-links">
                <li class="nav-item">
                    <a href="{{ route('admin-dashboard.index') }}"><i><img src="{{ asset('images/dash.svg') }}"
                                alt=""></i>
                        Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin-employee.index') }}"><i><img src="{{ asset('images/employee.svg') }}"
                                alt=""></i>
                        Employees</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin-attendance.index') }}"><i><img src="{{ asset('images/attendance.svg') }}"
                                alt=""></i>
                        Attendance</a>
                </li>
                <li>
                    <a href="{{ route('admin-setting.index') }}" class="setting-link">
                        <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <div class="nav-item">

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
                        <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
                        <span>Settings</span>
                    </a>
                </div>
                <div style="margin-left: -30px;">
                <x-adminlogout />
                </div>
            </div>
            <button class="sidebar-close" id="sidebarClose">
                ×
            </button>
    
        </nav>

        
        <div class="sidebar-overlay" id="sidebarOverlay"></div>

        <main class="main-wrapper">

            <header class="header">
                <div class="mobile-brand">
                    <img src="{{ asset('images/Artboard 1-1 2.svg') }}" class="mobile-logo" alt="HTG">
            
                    <button class="hamburger-btn" id="openSidebar">
                        <img src="{{ asset('images/breadcrumb.svg') }}">
                        {{-- <i class="fa-solid fa-align-right"></i> --}}
                    </button>
                </div>
                
                <div class="breadcrumb">
                    Employee Overview
                </div>
                <div class="user-profile-top">
                    {{-- <button class="notification-btn" aria-label="Notifications">
                        <i><img src="{{ asset('images/bell.png') }}" alt=""></i>
                        <div class="notification-dot"></div>
                    </button> --}}
                    <div class="admin-info">
                        @php
                            $firstInitial = substr($adminUser->first_name, 0, 1);
                            $lastInitial = substr($adminUser->last_name, 0, 1);

                            $initials = strtoupper($firstInitial . $lastInitial);

                        @endphp
                        <a href="{{ route('admin-setting.index') }}" style="text-decoration: none">
                            <div class="initials">
                                {{ $initials }}
                            </div>
                        </a>
                        <div>
                            <div class="admin-name">{{ $adminUser->first_name }} {{$adminUser->last_name  }}</div>
                            <div class="admin-role">Admin</div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="tabs-container">
                <a href="{{ route('view-employee.show', $user->uuid) }}" class="active">
                    Employee Profile</a>
                <a href="{{ route('view-details.show', $user->uuid) }}">
                    Attendance Details</a>
            </div>

            <div class="dashboard-grid">

                <section class="profile-card">
                    <div class="profile-left">
                        @php
                            $firstInitial = substr($user->first_name, 0, 1);
                            $lastInitial = substr($user->last_name, 0, 1);
                            $initials = strtoupper($firstInitial . $lastInitial);
                        @endphp

                        <div class="profile-pic" style="overflow: hidden; 
                        width: 140px; 
                        height: 140px; 
                        background-color: #E2EEF9; 
                        color: #06414F; 
                        border-radius: 50%; 
                        display: flex; 
                        align-items: center; 
                        justify-content: center; 
                        font-weight: 700; 
                        font-size: 40px;
                        flex-shrink: 0;
                        padding: 0;">

                            @if ($user->avatar)
                                <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar"
                                    style="width:100%;height:100%;object-fit:cover;border-radius:50%;">
                            @else
                                {{ $initials }}
                            @endif
                        </div>

                        <div class="emp-meta-wrapper">

                            <h2 class="emp-name">{{ $user->first_name }} {{ $user->last_name }}</h2>
                            <p class="emp-role">{{ $user->position }}</p>
                        </div>
                    </div>
                    <div class="profile-right">

                        <div class="gender-selector">
                        </div>

                        <h3 class="info-section-titles">Personal Details</h3>
                        <div class="details-grid">
                            <div class="detail-group">
                                <label>First Name</label>
                                <p>{{ $user->first_name }}</p>
                            </div>
                            <div class="detail-group">
                                <label>Last Name</label>
                                <p>{{ $user->last_name }}</p>
                            </div>
                            <div class="detail-group">
                                <label>Email Address</label>
                                <p>{{ $user->email }}</p>
                            </div>
                            <div class="detail-group">
                                <label>Phone</label>
                                <p>{{ $user->phone }}</p>
                            </div>
                            <div class="detail-group">
                                <label>Position</label>
                                <p>{{ $user->position }}</p>
                            </div>
                            <div class="detail-group">
                                <label>Gender</label>
                                <p>{{ $user->gender }}</p>
                            </div>
                        </div>

                        <div class="address-section">
                            <h3 class="info-section-titles">Address</h3>
                            <div class="details-grid">
                                <div class="detail-group">
                                    <label>Country</label>
                                    <p>{{ $user->country }}</p>
                                </div>
                                <div class="detail-group">
                                    <label class="mobile-details">City/State</label>
                                    <p class="mobile-details">{{ $user->state }}</p>
                                </div>
                            </div>
                            <div class="detail-group" style="margin-top: 4px;">
                                <label>Residential Address</label>
                                <p>{{ $user->address }}</p>
                            </div>
                        </div>
                    </div>
                </section>

                <aside class="metrics-column">

                    <div class="metric-card">
                        <h3 class="metric-title">Today's Progress</h3>
                        <div class="progress-container">
                            <div class="progress-header">
                                <span class="progress-label">Hours Logged</span>
                                <span class="progress-value">{{ number_format($hoursLogged, 1) }} / 8.0 hrs</span>
                            </div>
                            <div class="progress-bar-bg">
                                <div class="progress-bar-fill"
                                    title="Logged {{ number_format($hoursLogged, 1) }} of 8.00 hours ({{ $progressPercent }}% complete)"
                                    style="width: {{ $progressPercent }}% !important; height: 100%; background-color: green; border-radius: 4px; transition: width 0.4s ease;"
                                    aria-label="Logged {{ number_format($hoursLogged, 1) }} of 8.00 hours, {{ $progressPercent }}% complete">
                                </div>
                            </div>
                        </div>
                        <div class="target-box">
                            <div class="target-label">Target</div>
                            <div class="target-val">40h<span>/wk</span></div>
                        </div>
                    </div>

                    <div class="metric-card white-bg">
                        <h3 class="metric-title">Attendance</h3>
                        <div class="attendance-analytics">
                            <div class="chart-container">
                                <svg class="donut-chart" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid meet">
                                    <circle class="donut-bg" cx="50" cy="50" r="40"></circle>
                                    <circle class="donut-fill" stroke-dasharray="251.2"
                                        stroke-dashoffset="{{ $strokeDashOffset }}"
                                        style="stroke-dasharray: 251.2 !important; stroke-dashoffset: {{ $strokeDashOffset }}px !important; transition: stroke-dashoffset 0.5s ease; stroke: #00A64A; fill: transparent; stroke-width: 8;"
                                        title="Attendance completion:{{ $attendancePercentage }}% on time"
                                        aria-label="Attendance completion is {{ $attendancePercentage }}% on time"
                                        cx="50" cy="50" r="40">
                                    </circle>
                                </svg>
                                <div class="chart-center-text">{{ $attendancePercentage }}%</div>
                            </div>
                            <div class="attendance-stats">
                                <div class="stat-group">
                                    <label>On Time</label>
                                    <p>{{ $onTimeDays }} <span>{{ Str::plural('Day', $onTimeDays) }}</span></p>
                                </div>
                                <div class="stat-group">
                                    <label>Late/Missed</label>
                                    <p>{{ $lateOrMissedDays }} <span>{{ Str::plural('Day', $lateOrMissedDays) }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>
            <br>
            <br>

            <div class="back">
                <a href="{{ route('admin-employee.index') }}">Back</a>
            </div>
        </main>

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
    </body>

    </html>
</x-layout>