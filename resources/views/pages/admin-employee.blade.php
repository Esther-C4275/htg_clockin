<x-layout>
    <div class="container">

        <!-- Sidebar -->
        <aside class="sidebar">
            <img class="logo" src="{{ asset('images/Artboard 1 2.svg') }}" alt="">

            <nav style="margin-top: 40px">
                <ul>
                    <li>
                        <a href="{{ route('admin-dashboard.index') }}" class="sidebar-link">
                            <img src="{{ asset('images/dash.svg') }}">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin-employee.index') }}" class="sidebar-link">
                            <img src="{{ asset('images/employee.svg') }}">
                            Employees
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin-attendance.index') }}" class="sidebar-link">
                            <img src="{{ asset('images/attendance.svg') }}" alt="">
                            Attendance
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin-setting.index') }}" class="setting-link">
                            <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="bottom">
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

                    <span class="user-email-text">
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

            <button class="sidebar-close" id="sidebarClose">×</button>
        </aside>

        <div class="sidebar-overlay" id="sidebarOverlay"></div>

       
        <main class="main">

            
            <div class="mobile-header">
                <div class="mobile-brand">
                    <img src="{{ asset('images/Artboard 1-1 2.svg') }}" class="mobile-logo" alt="HTG">
                    <button class="hamburger-btn" id="openSidebar">
                        <img src="{{ asset('images/breadcrumb.svg') }}" alt="Menu">
                    </button>
                </div>

               
                <div class="mobile-profile-row">
                    <div class="mobile-profile">
                        <div class="mobile-avatar">
                            @php
                                $firstInitial = substr($adminUser->first_name, 0, 1);
                                $lastInitial  = substr($adminUser->last_name, 0, 1);
                                $initials     = strtoupper($firstInitial . $lastInitial);
                            @endphp
                            @if($adminUser->avatar)
                                <img src="{{ asset('storage/' . $adminUser->avatar) }}" alt="Profile">
                            @else
                                {{ $initials }}
                            @endif
                        </div>
                        <div>
                            <h3>{{ $adminUser->first_name }} {{ $adminUser->last_name }}</h3>
                            <p>Admin</p>
                        </div>
                    </div>
                    
                </div>
            </div>

            
            <div class="topbar desktop-only">
                <h2>Employees</h2>

                <div class="user">
                    <form action="{{ route('admin-employee.index') }}" method="GET" class="search-form" id="searchForm">
                        <div class="search-input-wrapper">
                            <input
                                type="text"
                                name="first_name"
                                id="searchInput"
                                value="{{ request('first_name') }}"
                                placeholder="Search employee..."
                                class="search-field"
                                autocomplete="off"
                            >
                            @if(request('first_name') || request('last_name'))
                                <a href="{{ route('admin-employee.index') }}" class="clear-search-btn" title="Clear search">×</a>
                            @endif
                        </div>
                    </form>

                    <a href="{{ route('admin-setting.index') }}" style="text-decoration: none;">
                        <div class="avatar-initials">
                            {{ strtoupper(substr($adminUser->first_name, 0, 1) . substr($adminUser->last_name, 0, 1)) }}
                        </div>
                    </a>
                    <div>
                        <p>{{ $adminUser->first_name }} {{ $adminUser->last_name }}</p>
                        <small>Admin</small>
                    </div>
                </div>
            </div>

           
            <div class="section-header">
                <h2 class="page-title">Employees List</h2>
            </div>

           
            <div class="filters">
                <a href="{{ route('admin-employee.create') }}">
                    <button type="button" class="add-employee-btn">Add new employee</button>
                </a>
            </div>

            <!-- Table -->
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            {{-- <th class="checkbox-col">
                                <input type="checkbox" id="select-all">
                            </th> --}}
                            <th>Name</th>
                            <th>Company</th>
                            <th>Position</th>
                            <th class="desktop-only">Department</th>
                            <th class="desktop-only">Email</th>
                            <th class="desktop-only">Status</th>
                            <th class="desktop-only"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                {{-- <td class="checkbox-col">
                                    <input type="checkbox" class="employee-checkbox">
                                </td> --}}
                                <td>
                                    <div class="both-td">
                                        @php
                                            $firstInitial = substr($employee->first_name, 0, 1);
                                            $lastInitial  = substr($employee->last_name, 0, 1);
                                            $initials     = strtoupper($firstInitial . $lastInitial);
                                        @endphp
                                        <div class="initials">
                                            @if ($employee->avatar)
                                                <img src="{{ asset('storage/' . $employee->avatar) }}" alt="Avatar">
                                            @else
                                                {{ $initials }}
                                            @endif
                                        </div>
                                        <span class="names">{{ $employee->first_name }} {{ $employee->last_name }}</span>
                                    </div>
                                </td>
                                <td>{{ $employee->company }}</td>
                                <td>{{ $employee->position }}</td>
                                <td class="desktop-only">{{ $employee->department }}</td>
                                <td class="desktop-only">{{ $employee->email }}</td>
                                <td class="desktop-only">
                                    @if($employee->row_status === 'Active')
                                        <span class="status active">Active</span>
                                    @else
                                        <span class="status absent">Absent</span>
                                    @endif
                                </td>
                                <td class="desktop-only" style="position: relative; overflow: visible;">
                                    <div class="menu-container">
                                        <button class="menu-btn" type="button">⋮</button>
                                        <div class="menu-dropdown">
                                            <a href="{{ route('view-employee.show', $employee->uuid) }}">View Details</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

               
                <div class="mobile-pagination">
                    <div class="per-page-selector">
                        <span>Show</span>
                        <select>
                            <option>5</option>
                            <option selected>10</option>
                            <option>20</option>
                            <option>30</option>
                        </select>
                        <span>Per page of {{ $employees->count() }} results.</span>
                    </div>
                    <div class="pagination-nav">
                        <div class="page-btn active">1</div>
                        <div class="page-btn">2</div>
                        <div class="page-btn">3</div>
                        <span class="dots">......</span>
                        <button class="next-btn" type="button">Next &raquo;</button>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        
        const sidebar  = document.querySelector('.sidebar');
        const overlay  = document.getElementById('sidebarOverlay');
        const openBtn  = document.getElementById('openSidebar');
        const closeBtn = document.getElementById('sidebarClose');

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

        // ---------- Menus ----------
        function initializeMenus() {
            document.querySelectorAll('.menu-btn').forEach(btn => {
                btn.addEventListener('click', function (e) {
                    e.stopPropagation();
                    document.querySelectorAll('.menu-dropdown').forEach(menu => {
                        if (menu !== this.nextElementSibling) menu.classList.remove('active');
                    });
                    this.nextElementSibling.classList.toggle('active');
                });
            });
        }
        document.addEventListener('click', function (e) {
            if (!e.target.closest('.menu-container')) {
                document.querySelectorAll('.menu-dropdown').forEach(m => m.classList.remove('active'));
            }
        });
        initializeMenus();

        // ---------- Search clear ----------
        document.addEventListener('DOMContentLoaded', () => {
            const searchInput = document.getElementById('searchInput');
            if (searchInput) {
                searchInput.addEventListener('input', function () {
                    if (this.value.trim() === '') {
                        const urlParams = new URLSearchParams(window.location.search);
                        if (urlParams.has('first_name') || urlParams.has('last_name')) {
                            window.location.href = "{{ route('admin-employee.index') }}";
                        }
                    }
                });
            }
        });

        // ---------- Select all ----------
        const selectAllCheckbox = document.getElementById('select-all');
        const employeeCheckboxes = document.querySelectorAll('.employee-checkbox');
        if (selectAllCheckbox) {
            selectAllCheckbox.addEventListener('change', function () {
                employeeCheckboxes.forEach(cb => cb.checked = this.checked);
            });
        }
    </script>

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Inter', sans-serif;
            background: #fff;
            height: 100vh;
        }
        .container {
            display: flex;
            min-height: 100vh;
        }

        /* ========== SIDEBAR (desktop) ========== */
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #06414F;
            color: #fff;
            padding: 15px;
            display: flex;
            flex-direction: column;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 1000;
        }
        .logo {
            width: 80px;
            height: auto;
            margin-top: 5px;
            margin-bottom: 24px;
        }
        .sidebar ul { 
            list-style: none; 
            padding: 0; 
            margin: 0; 
            margin-left: -18px;
            margin-top: -13px;
        
        }

        .sidebar ul li {
             margin-bottom: 8px;
             }

        .sidebar-link {
            text-decoration: none;
            color: #B7B7B7;
            display: flex;
            align-items: center;
            gap: 14px;
            width: 100%;
            padding: 20px;
            border-radius: 6px;
            font-size: 16px;
            transition: all 0.2s ease;
            box-sizing: border-box;
        }
        .sidebar-link:hover {
             background: #FFFFFF; 
             color: #06414F; 
            }

        .sidebar-link img { 
            width: 24px; 
            height: 24px; 
        }

        .bottom {
            margin-top: auto;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        .setting-links {
            display: flex;
            align-items: center;
            text-decoration: none;
            padding: 14px;
            color: #B7B7B7;
            gap: 8px;
            font-size: 16px;
            font-weight: 500;
            border-radius: 8px;
            margin-left: -13px;
        }
        .setting-links:hover { 
            background: #fff; 
            color: #06414F;
         }

        .setting-link {
             display: none; 
            }

        .user-email{
            display:none;
        }

        .sidebar-close{
            display:none;
        }

        /* ========== MAIN ========== */
        .main {
            flex: 1;
            padding: 20px;
            background: #fff;
            margin-left: 240px;
            overflow-y: auto;
            min-height: 100vh;
        }

        /* Desktop topbar */
        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 30px;
            gap: 20px;
            padding-bottom: 20px;
        }
        .topbar h2 {
            font-size: 24px;
            font-weight: 600;
            color: #000;
            margin: 0;
        }

        .page-title{
            display: none;
        }
        .user {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-left: 800px;
            margin-top: -31px
        }
        .user p {
            margin: 0;
            font-weight: 600;
            font-size: 14px;
        }
        .user small {
            font-weight: 500;
            font-size: 12px;
            color: #5E5D5D;
        }
        .avatar-initials {
            width: 50px;
            height: 50px;
            background: #E2EEF9;
            color: #06414F;
            font-weight: 700;
            font-size: 14px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #C5DCF2;
        }
        .search-input-wrapper {
            position: relative;
            width: 220px;
        }
        .search-field {
            width: 100%;
            padding: 10px 32px 10px 12px;
            border-radius: 10px;
            border: 1px solid #B4B4B4;
            font-size: 14px;
        }
        .clear-search-btn {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: #e5e7eb;
            color: #4b5563;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
        }

        /* Section header */
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
        }
        .page-title {
            font-size: 18px;
            font-weight: 600;
            color: #111827;
        }
        .filter-icon-btn {
            width: 36px;
            height: 36px;
            border: 1px solid #E5E7EB;
            border-radius: 8px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        /* Add button */
        .filters { margin-bottom: 20px; }
        .add-employee-btn {
            padding: 10px 18px;
            border: 1px solid #E0E0E0;
            border-radius: 8px;
            background: #fff;
            color: #525151;
            font-weight: 600;
            font-size: 13px;
            cursor: pointer;
            height: 42px;
        }
        .add-employee-btn:hover {
            background: #06414F;
            color: #fff;
            border-color: #06414F;
        }

        /* Table */
        .table-wrapper { width: 100%; overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; }
        thead { background: #F8F9FB; }
        th, td {
            padding: 12px 10px;
            border-bottom: 1px solid #eee;
            text-align: left;
            font-size: 14px;
        }
        th { font-weight: 600; color: #6B7280; font-size: 13px; }
        .both-td {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .initials {
            width: 36px;
            height: 36px;
            background: #E2EEF9;
            color: #06414F;
            font-weight: 700;
            font-size: 12px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #C5DCF2;
            overflow: hidden;
            flex-shrink: 0;
        }
        .initials img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }
        .names {
            font-weight: 500;
            font-size: 14px;
            color: #111827;
        }
        .status {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            color: #fff;
            font-weight: 500;
        }
        .status.active { background: #2ecc71; }
        .status.absent { background: #e74c3c; }

        /* Menu */
        .menu-container { position: relative; display: inline-block; }
        .menu-btn {
            background: none;
            border: none;
            font-size: 18px;
            cursor: pointer;
            color: #333;
            padding: 4px 8px;
            border-radius: 4px;
        }
        .menu-dropdown {
            position: absolute;
            right: 0;
            top: 100%;
            z-index: 50;
            background: #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.12);
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            padding: 6px 0;
            min-width: 130px;
            display: none;
        }
        .menu-dropdown.active { display: block; }
        .menu-dropdown a {
            display: block;
            padding: 8px 14px;
            color: #334155;
            text-decoration: none;
            font-size: 13px;
        }
        .menu-dropdown a:hover { background: #f5f5f5; }

        /* Mobile elements – hidden on desktop */
        .mobile-header { display: none; }
        .mobile-pagination { display: none; }
        .desktop-only { display: table-cell; }

        /* ========== MOBILE (max-width: 768px) – EXACT FIGMA ========== */
        @media (max-width: 768px) {
            .main {
                margin-left: 0 !important;
                padding: 16px;
                width: 100%;
            }

            /* Hide desktop topbar */
            .desktop-only { display: none !important; }
            .topbar.desktop-only { display: none !important; }

            /* Sidebar mobile */
            .sidebar {
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
            .sidebar.active { left: 0; }
            .sidebar-close {
                display: flex;
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
                font-size: 22px;
                cursor: pointer;
            }
            .sidebar-overlay {
                display: none;
                position: fixed;
                inset: 0;
                background: #06414F80;
                backdrop-filter: blur(5px);
                z-index: 1500;
            }
            .sidebar-overlay.active { 
                display: block; 
            }
            .sidebar-link{
               margin-left: -15px;
               font-size: 18px;
               font-weight: 500;
            }



            .setting-links { 
                display: none;
             }
            .setting-link {
                display: flex;
                align-items: center;
                gap: 13px;
                padding: 12px;
                color: #b7b7b7;
                text-decoration: none;
                font-size: 18px;
                font-weight: 500;
                border-radius: 8px;
                margin-left: -8px;
            }
            .user-email {
                display: flex;
                align-items: center;
                gap: 12px;
                padding: 10px 12px;
                margin-bottom: 8px;
                margin-left: -15px;
            }
            .user-email .profile-pic {
                width: 32px;
                height: 32px;
                border-radius: 50%;
                background: #fff;
                color: #06414F;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: 700;
                font-size: 13px;
                overflow: hidden;
            }

           
            .mobile-header {
                display: block;
                margin-bottom: 20px;
            }
            .mobile-brand {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 20px;
            }
            .mobile-logo {
                width: 60px;
                height: auto;
            }
            .hamburger-btn {
                width: 36px;
                height: 36px;
                border: none;
                background: none;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
            }
            .hamburger-btn img { width: 22px; height: 22px; }

            .mobile-profile-row {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .mobile-profile {
                display: flex;
                align-items: center;
                gap: 12px;
            }
            .mobile-avatar {
                width: 48px;
                height: 48px;
                border-radius: 50%;
                background: #E2EEF9;
                color: #06414F;
                font-weight: 700;
                font-size: 16px;
                display: flex;
                align-items: center;
                justify-content: center;
                overflow: hidden;
                border: 1px solid #C5DCF2;
                flex-shrink: 0;
            }
            .mobile-avatar img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .mobile-profile h3 {
                font-size: 16px;
                font-weight: 600;
                color: #111827;
                margin-bottom: 2px;
            }
            .mobile-profile p {
                font-size: 12px;
                color: #6B7280;
                font-weight: 500;
            }
            .bell-btn {
                width: 40px;
                height: 40px;
                border: none;
                background: transparent;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
            }

            
            .section-header {
                margin-bottom: 14px;
            }
            .page-title {
                font-size: 16px;
                font-weight: 600;
            }

           
            .filters { margin-bottom: 16px; }
            .add-employee-btn {
                width: auto;
                padding: 10px 16px;
                font-size: 13px;
                border-radius: 8px;
                border: 1px solid #D1D5DB;
                background: #fff;
                color: #374151;
                font-weight: 500;
            }

            
            .table-wrapper {
                overflow-x: auto !important;          
                -webkit-overflow-scrolling: touch;    
                width: 100%;
                margin: 0;
                padding-bottom: 8px;                 
            }

            table {
                width: max-content;                  
                min-width: 100%;
                table-layout: auto;
            }

            
            th:nth-child(5),
            th:nth-child(6),
            th:nth-child(7),
            th:nth-child(8),
            td:nth-child(5),
            td:nth-child(6),
            td:nth-child(7),
            td:nth-child(8),
            .desktop-only {
                display: table-cell !important;
            }

            th, td {
                padding: 12px 10px;
                font-size: 13px;
                white-space: nowrap;                  
            }

           
            th:nth-child(1),
            td:nth-child(1) {
                width: 36px;
                position: sticky;                     
                left: 0;
                background: #fff;
                z-index: 2;
            }

            thead th:nth-child(1) {
                background: #F8F9FB;
                z-index: 3;
            }

            .both-td {
                gap: 8px;
                min-width: 160px;                    
            }

            .initials {
                width: 32px;
                height: 32px;
                font-size: 11px;
                flex-shrink: 0;
            }

            .names {
                font-size: 13px;
                white-space: nowrap;
            }

            
            .status {
                white-space: nowrap;
            }
            
            .mobile-pagination {
                display: flex;
                flex-direction: column;
                gap: 14px;
                margin-top: 20px;
                padding-top: 8px;
                font-size: 12px;
                color: #555;
            }
            .per-page-selector {
                display: flex;
                align-items: center;
                gap: 8px;
            }
            .per-page-selector select {
                padding: 4px 8px;
                border-radius: 6px;
                border: 1px solid #DDD;
                font-size: 12px;
            }
            .pagination-nav {
                display: flex;
                align-items: center;
                gap: 6px;
            }
            .page-btn {
                width: 32px;
                height: 32px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: 500;
                font-size: 13px;
                border: none;
                background: transparent;
                color: #374151;
                cursor: pointer;
            }
            .page-btn.active {
                background: #06414F;
                color: #fff;
            }
            .dots { color: #888; margin: 0 2px; }
            .next-btn {
                padding: 6px 14px;
                border: 1px solid #E5E7EB;
                border-radius: 8px;
                background: #fff;
                font-size: 12px;
                color: #555;
                cursor: pointer;
                margin-left: 4px;
            }
        }
    </style>
</x-layout>