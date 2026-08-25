<x-layout>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    main {
      width: 100%;
      display: flex;
    }

    .container {
      display: flex;
      height: 100vh;
    }


    .sidebar {
      width: 260px;
      height: 100vh;
      background: #06414F;
      padding: 30px 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 100;
    }

    .sidebar-close {
      display: none;
    }

    .logo {
      margin-bottom: 40px;
      margin-top: -3px;
      margin-left: 2px;
    }

    .logo h1 {
      font-size: 42px;
      font-weight: 700;
      line-height: 1;
    }

    .logo p {
      font-size: 14px;
      letter-spacing: 1px;
      margin-top: -5px;
    }

    .menu {
      display: flex;
      flex-direction: column;
      gap: 10px;
      margin-left: -18px;
    }

    .menu a {
      text-decoration: none;
      color: #B7B7B7;
      padding: 14px 14px;
      border-radius: 6px;
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 16px;
      transition: 0.3s;
    }

    .menu a:hover {
      background: #FFFFFF;
      color: #06414F;
    }

    .bottom-menu {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .bottom-menu a {
      text-decoration: none;
      color: #B7B7B7;
      padding: 14px 14px;
      border-radius: 6px;
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 16px;
      transition: 0.3s;
    }

    .bottom-menu a:hover {
      background: #FFFFFF;
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
      font-size: 18px;
      font-weight: 500;
      border-radius: 8px;
    }

    .setting-links:hover {
      background-color: #ffffff;
      color: #06414F;
    }

    #setting-link {
      display: none;
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

    .user-email {
      display: none;
    }


    .main {
      flex: 1;
      padding: 28px;
      margin-left: 260px;
      min-height: 100vh;
    }

    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 25px;
    }

    .topbar h2 {
      font-size: 24px;
      font-weight: 600;
      color: #000000;
      line-height: 100%;
      margin-top: 10px;
    }

    .top-actions {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    select {
      padding: 10px 16px;
      border: 1px solid #BAB7B7;
      border-radius: 8px;
      outline: none;
      background: #FFFFFF;
      cursor: pointer;
      font-size: 14px;
      width: 152px;
      height: 42px;
    }


    .dots {
      display: flex;
      gap: 17px;
      align-items: center;
      margin-bottom: 18px;
      font-weight: 600;
      font-size: 14px;
      margin-left: 10px;
    }

    .dots div {
      display: flex;
      align-items: center;
      gap: 6px;
    }


    .cards {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 18px;
      margin-bottom: 20px;
      margin-left: 10px;
    }

    .card {
      background: #FFFFFF;
      border-radius: 12px;
      padding: 18px;
      border: 1px solid #E4E4E4;
    }

    .card-top {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 12px;
    }

    .icon {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-size: 14px;
    }

    .card h3 {
      margin-top: 6px;
      font-size: 30px;
      font-weight: 700;
    }


    .table-container {
      background: #FFFFFF;
      border-radius: 12px;
      overflow: hidden;
      border: 1px solid #E4E4E4;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    thead {
      background: #F8F9FB;
    }

    th {
      text-align: left;
      padding: 16px;
      font-size: 14px;
      color: #555;
      font-weight: 600;
      white-space: nowrap;
    }

    td {
      padding: 16px;
      border-top: 1px solid #eee;
      font-size: 14px;
      color: #222;
      white-space: nowrap;
    }

    .user {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .status {
      padding: 8px 20px;
      border-radius: 30px;
      color: #fff;
      font-size: 13px;
      display: inline-block;
      min-width: 90px;
      text-align: center;
    }

    .active {
      background: #20c933;
    }

    .absent {
      background: red;
    }

    .avatar-initials {
      width: 35px;
      height: 35px;
      background-color: #E2EEF9;
      color: #06414F;
      font-weight: 700;
      font-size: 13px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      text-transform: uppercase;
      border: 1px solid #C5DCF2;
      flex-shrink: 0;
      overflow: hidden;
    }

    .menu-icon {
      color: #777;
      cursor: pointer;
    }

    .pagination-wrapper {
      display: none;
    }


    @media (max-width: 1100px) {
      .cards {
        grid-template-columns: repeat(2, 1fr);
      }
    }


    @media (max-width: 768px) {
      body {
        background: #ffffff;
      }

      /* main{
        padding: 3px;
      } */


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
        transition: left 0.3s ease;
        border-top-right-radius: 40px;
        border-bottom-right-radius: 40px;
      }

      .sidebar.active {
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
        font-size: 22px;
        cursor: pointer;
      }

      .sidebar-overlay {
        display: none;
        position: fixed;
        inset: 0;
        background: #06414F80;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(3px);
        z-index: 1500;
      }

      .sidebar-overlay.active {
        display: block;
      }

      .setting-links {
        display: none !important;
      }

      #setting-link {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        text-align: left;
        padding: 12px;
        gap: 10px;
        margin-left: 2px;
        width: 100%;
        text-decoration: none;
        font-size: 18px;
        color: #b7b7b7;
        border-radius: 8px;
      }

      /* .setting-link i {
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
    } */
      .user-email {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 12px;
        margin-bottom: 8px;
        width: 100%;
        color: #B7B7B7;
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


      .main {
        margin-left: 0 !important;
        padding: 16px;
        width: 100%;

      }

      .topbar {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 12px;
        margin-bottom: 16px;
      }


      .mobile-brand {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .mobile-brand img {
        width: 68px;
        height: 30px;
        margin-left: -6px;
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
        margin-top: -12px;
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


      .topbar h2 {
        margin: 0;
        font-size: 20px;
        font-weight: 600;
        flex: 1;
      }


      .top-actions {
        margin: 0 !important;
        width: auto;
      }

      .top-actions select {
        width: 130px;
        height: 40px;
        font-size: 14px;
      }


      .dots {
        margin-left: 0;
        margin-bottom: 39px;
        margin-top: 38px;
        gap: 14px;
        font-size: 13px;
        flex-wrap: wrap;
      }


      .cards {
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
        margin-left: 0;
        margin-bottom: 16px;
      }

      .card {
        padding: 14px;
      }

      .card h3 {
        font-size: 24px;
      }

      .card-top p {
        font-size: 13px;
      }


      .table-container {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        border-radius: 12px;
        border: 1px solid #E4E4E4;
      }

      table {
        min-width: 720px;
      }

      th,
      td {
        padding: 14px 12px;
        font-size: 13px;
      }

      .avatar-initials {
        width: 32px;
        height: 32px;
        font-size: 12px;
      }

      .menu {
        margin-left: -20px;
      }

      .menu a {
        font-size: 18px;
      }

      .bottom-menu {
        margin-left: -20px;
      }

      .user-email-text {
        max-width: 157px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
      }

      .pagination-wrapper .small,
      .pagination-wrapper .text-muted,
      .pagination-wrapper .small.text-muted {
        display: none !important;
      }


      .pagination-wrapper {
        display: flex !important;
        flex-direction: column !important;
        align-items: flex-start !important;
        gap: 12px !important;
        margin-top: 20px !important;
        width: 100% !important;
      }

      .pagination-wrapper nav,
      .pagination-wrapper .d-flex {
        display: flex !important;
        flex-wrap: wrap !important;
        align-items: center !important;
        gap: 6px !important;
        width: 100% !important;
        justify-content: flex-start !important;
      }

      .pagination-wrapper .d-none,
      .pagination-wrapper .d-sm-none {
        display: flex !important;
      }

      .pagination-wrapper .pagination {
        display: flex !important;
        align-items: center !important;
        gap: 6px !important;
        list-style: none !important;
        padding: 0 !important;
        margin: 0 !important;
      }

      .pagination-wrapper .page-item {
        display: inline-flex !important;
        margin: 0 !important;
      }

      .pagination-wrapper .page-link {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        min-width: 32px !important;
        height: 32px !important;
        padding: 0 8px !important;
        border-radius: 50% !important;
        font-size: 13px !important;
        font-weight: 500 !important;
        color: #374151 !important;
        background: transparent !important;
        border: none !important;
        text-decoration: none !important;
        line-height: 1 !important;
        box-shadow: none !important;
      }

      .pagination-wrapper .page-item.active .page-link {
        background: #06414F !important;
        color: #fff !important;
      }

      .pagination-wrapper .page-link:hover {
        background: #F3F4F6 !important;
        color: #06414F !important;
      }

      .pagination-wrapper .page-item.disabled .page-link {
        color: #9CA3AF !important;
        background: transparent !important;
        pointer-events: none !important;
      }


      .pagination-wrapper .page-item:first-child .page-link,
      .pagination-wrapper .page-item:last-child .page-link {
        border-radius: 8px !important;
        min-width: auto !important;
        padding: 0 14px !important;
        border: 1px solid #E5E7EB !important;
        background: #fff !important;
        height: 32px !important;
      }

      .pagination-wrapper .page-item:first-child .page-link:hover,
      .pagination-wrapper .page-item:last-child .page-link:hover {
        background: #F9FAFB !important;
        border-color: #D1D5DB !important;
      }

    }
  </style>

  <!-- SIDEBAR -->
  <div class="sidebar">
    <div>
      <div class="logo">
        <a href="{{ route('admin-dashboard.index') }}" class="logo-link">
          <img src="{{ asset('images/Artboard 1 2.svg') }}" alt="Home">
        </a>
      </div>

      <div class="menu">
        <a href="{{ route('admin-dashboard.index') }}">
          <i><img src="{{ asset('images/dash.svg') }}" alt=""></i> Dashboard
        </a>
        <a href="{{ route('admin-employee.index') }}">
          <i><img src="{{ asset('images/employee.svg') }}" alt=""></i> Employees
        </a>
        <a href="{{ route('admin-attendance.index') }}">
          <i><img src="{{ asset('images/attendance.svg') }}" alt=""></i> Attendance
        </a>
        <a href="{{ route('admin-setting.index') }}" id="setting-link">
          <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
          <span>Settings</span>
        </a>
      </div>
    </div>

    <div class="bottom-menu">
      <div class="user-email">
        @php
          $firstInitial = strtoupper(substr($user->first_name, 0, 1));
        @endphp
        <div class="profile-pic">
          @if($user->avatar)
            <img src="{{ asset('storage/' . $user->avatar) }}" alt="Profile"
              style="width:100%;height:100%;object-fit:cover;border-radius:50%;">
          @else
            <span>{{ $firstInitial }}</span>
          @endif
        </div>
        <span class="user-email-text" title="{{ $user->email }}">
          {{ $user->email }}</span>
      </div>

      <a href="{{ route('admin-setting.index') }}" class="setting-links">
        <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
        <span>Settings</span>
      </a>
      <x-adminlogout />
    </div>

    <button class="sidebar-close" id="sidebarClose">×</button>
  </div>

  <div class="sidebar-overlay" id="sidebarOverlay"></div>


  <div class="main">
    <div class="topbar">
      <div class="mobile-brand">
          <a href="{{ route('admin-dashboard.index') }}">
              <img src="{{ asset('images/Artboard 1-1 2.svg') }}" class="mobile-logo" alt="HTG">
          </a>
          
        
          <div class="hamburger">
              <button class="hamburger-btn" id="openSidebar">
                  <img src="{{ asset('images/breadcrumb.svg') }}" alt="Menu">
              </button>
          </div>
      </div>

      <h2>Attendance List</h2>

      <div class="top-actions">
        <form action="{{ url()->current() }}" method="GET" id="attendanceRangeForm">
          <select name="filter_range" onchange="document.getElementById('attendanceRangeForm').submit();"
            class="dropdown-select">
            <option value="today" {{ $filter === 'today' ? 'selected' : '' }}>Today</option>
            <option value="yesterday" {{ $filter === 'yesterday' ? 'selected' : '' }}>Yesterday</option>
            <option value="this_week" {{ $filter === 'this_week' ? 'selected' : '' }}>This Week</option>
          </select>
        </form>
      </div>
    </div>


    <div class="dots">
      <div>
        <img src="{{ asset('images/red.png') }}" alt="">
        Late Clock-In
      </div>
      <div>
        <img src="{{ asset('images/yellow.png') }}" alt="">
        Early Clock-Out
      </div>
    </div>


    <div class="cards">
      <div class="card">
        <div class="card-top">
          <div class="icon blue">
            <i><img src="{{ asset('images/Frame 70.png') }}" alt=""></i>
          </div>
          <p>Total staff</p>
        </div>
        <h3>{{ $totalEmployees }}</h3>
      </div>

      <div class="card">
        <div class="card-top">
          <div class="icon green">
            <i><img src="{{ asset('images/Frame 70 (1).png') }}" alt=""></i>
          </div>
          <p>Active Today</p>
        </div>
        <h3>{{ $presentCount }}</h3>
      </div>

      <div class="card">
        <div class="card-top">
          <div class="icon danger">
            <i><img src="{{ asset('images/Frame 70 (2).png') }}" alt=""></i>
          </div>
          <p>Absent</p>
        </div>
        <h3>{{ $absentCount }}</h3>
      </div>

      <div class="card">
        <div class="card-top">
          <div class="icon orange">
            <i><img src="{{ asset('images/Frame 70 (3).png') }}" alt=""></i>
          </div>
          <p>Late</p>
        </div>
        <h3>{{ $lateCount }}</h3>
      </div>
    </div>


    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Company</th>
            <th>Position</th>
            <th>Clock-In & Clock-Out</th>
            <th>Total Hours</th>
            <th>Status</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($employees as $employee)
            <tr>
              <td>
                <div class="user">
                  <input type="checkbox">
                  <div class="avatar-initials">
                    @php
                      $firstInitial = substr($employee->first_name, 0, 1);
                      $lastInitial = substr($employee->last_name, 0, 1);
                      $initials = strtoupper($firstInitial . $lastInitial);
                    @endphp
                    @if ($employee->avatar)
                      <img src="{{ asset('storage/' . $employee->avatar) }}" alt="Avatar"
                        style="width:100%;height:100%;object-fit:cover;border-radius:50%;">
                    @else
                      {{ $initials }}
                    @endif
                  </div>
                  {{ $employee->first_name }} {{ $employee->last_name }}
                </div>
              </td>
              <td>{{ $employee->company }}</td>
              <td>{{ $employee->position }}</td>
              <td>{{ $employee->time_string }}</td>
              <td>{{ $employee->total_hours }}</td>
              <td>
                @if($employee->row_status === 'Active')
                  <span class="status active">Active</span>
                @else
                  <span class="status absent">Absent</span>
                @endif
              </td>
              <td><i class="fa-solid fa-ellipsis-vertical menu-icon"></i></td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <div class="pagination-wrapper mt-4">
        {{ $employees->links() }}
      </div>
    </div>
  </div>

  <script>
    const sidebar = document.querySelector('.sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    const openBtn = document.getElementById('openSidebar');
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
  </script>
</x-layout>