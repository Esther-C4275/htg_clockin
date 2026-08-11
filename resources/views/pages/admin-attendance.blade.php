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
      background: #f4f5f7;
      display: flex;
    }

    .container {
      display: flex;
      height: 100vh;
    }

    /* SIDEBAR */

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

    }

    .logo {
      margin-bottom: 40px;
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
      font-size: 15px;
      transition: 0.3s;
    }

    .bottom-menu a:hover {
      background: #FFFFFF;
      color: #06414F;
    }

    /* MAIN */

    .main {
      flex: 1;
      padding: 28px;
      margin-left: 240px;
    }

    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 25px;
    }

    .topbar h2 {
      font-size: 24px;
      font-weight: 700;
      color: #000000;
      font-weight: 600;
      font-style: Semi Bold;
      line-height: 100%;
      letter-spacing: 0px;
      text-align: center;
      margin-left: 10px;

    }

    .top-actions {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    select {
      padding: 16px;
      border: 1px solid #BAB7B7;
      border-radius: 8px;
      outline: none;
      background: #FFFFFF;
      cursor: pointer;
      font-size: 14px;
      width: 152px;
      height: 42px;
      justify-content: space-between;
      opacity: 1;
      border-radius: 8px;
      border-width: 1px;
      padding-top: 10px;
      padding-right: 16px;
      padding-bottom: 10px;
      padding-left: 16px;

    }

    .btn {
      background: #06414F;
      color: #FFFFFF;
      border: none;
      padding: 16px;
      border-radius: 8px;
      cursor: pointer;
      font-weight: 600;
      width: 152px;
      height: 42px;
      gap: 10px;
      opacity: 1;
      border-radius: 8px;
      padding-top: 10px;
      padding-right: 16px;
      padding-bottom: 10px;
      padding-left: 16px;

    }

    /* DOTS */

    .dots {
      display: flex;
      gap: 17px;
      align-items: center;
      margin-bottom: 18px;
      font-weight: 600;
      font-style: Semi Bold;
      font-size: 14px;
      line-height: 100%;
      letter-spacing: 0px;
      margin-left: 10px;

    }


    /* CARDS */

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
      font-style: Medium;
      line-height: 100%;
      letter-spacing: 0px;

    }


    .card h3 {
      margin-top: 6px;
      font-size: 30px;
    }

    /* TABLE */

    .table-container {
      background: #FFFFFF;
      overflow: hidden;

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
    }

    .pro-pic {
      width: 25px;
      height: 25px;
    }

    td {
      padding: 16px;
      border-top: 1px solid #eee;
      font-size: 14px;
      color: #222;
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

    .inactive {
      background: #efefef;
      color: #333;
    }

    .late-time {
      color: red;
      font-weight: 600;
    }

    .early {
      color: #f2a300;
      font-weight: 600;
    }

    .menu-icon {
      color: #777;
      cursor: pointer;
    }

    .avatar-initials {
      width: 25px;
      height: 25px;
      background-color: #E2EEF9;
      color: #06414F;
      font-weight: 500;
      font-size: 14px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      text-transform: uppercase;
      border: 1px solid #C5DCF2;

    }


    @media(max-width:1100px) {

      .cards {
        grid-template-columns: repeat(2, 1fr);
      }

      .sidebar {
        display: none;
      }
    }

    @media(max-width:700px) {

      .cards {
        grid-template-columns: 1fr;
      }

      .topbar {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
      }

      table {
        min-width: 1000px;
      }

      .table-container {
        overflow-x: auto;
      }
    }
  </style>



  <!-- SIDEBAR -->

  <div class="sidebar">

    <div>

      <div class="logo">
        <img src="{{ asset('images/Artboard 1 2.svg') }}" alt="">
      </div>

      <div class="menu">
        <a href="{{ route('admin-dashboard.index') }}"><i><img src="{{ asset('images/dash.svg') }}" alt=""></i>
          Dashboard</a>

        <a href="{{ route('admin-employee.index') }}"><i><img src="{{ asset('images/employee.svg') }}" alt=""></i>
          Employees</a>

        <a href="{{ route('admin-attendance.index') }}">
          <i><img src="{{ asset('images/attendance.svg') }}" alt=""></i> Attendance </a>
      </div>

    </div>

    <div class="bottom-menu">

      <a href="{{ route('admin-setting.index') }}"><i><img src="{{ asset('images/setting.svg') }}"
            alt=""></i>Settings</a>

      <x-adminlogout />

    </div>

  </div>

  <!-- MAIN CONTENT -->

  <div class="main">

    <div class="topbar">

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

    <!-- DOTS -->

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

    <!-- CARDS -->

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

    <!-- TABLE -->

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
                  <div>
                    @php

                      $firstInitial = substr($employee->first_name, 0, 1);
                      $lastInitial = substr($employee->last_name, 0, 1);
                      $initials = strtoupper($firstInitial . $lastInitial);
                    @endphp

                    <div class="avatar-initials" style="overflow: hidden; 
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

                      @if ($employee->avatar)
                        <img src="{{ asset('storage/' . $employee->avatar) }}" alt="Avatar"
                          style="width:100%;height:100%;object-fit:cover;border-radius:50%;">
                      @else
                        {{ $initials }}
                      @endif
                    </div>
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
                  <span class="status active" style="background-color: red">Absent</span>
                @endif
              </td>
              <td><i class="fa-solid fa-ellipsis-vertical menu-icon"></i></td>
            </tr>
          @endforeach


          <!--<tr>
                <td>
                  <div class="user">
                    <input type="checkbox">
                    <div><img class="pro-pic" src="./images/Frame 208.png') }}" alt="Mark.J Lopez"></div>
                    Mark.J Lopez
                  </div>
                </td>
                <td>Trazo</td>
                <td>Accountant</td>
                <td>10:00 AM - 06:00 PM</td>
                <td>8h 00m</td>
                <td><span class="status active">Active</span></td>
                <td><i class="fa-solid fa-ellipsis-vertical menu-icon"></i></td>
              </tr>
    
              <tr>
                <td>
                  <div class="user">
                    <input type="checkbox">
                    <div><img class="pro-pic" src="./images/Frame 208.png') }}" alt="Daniel Smith"></div>
                    Daniel Smith
                  </div>
                </td>
                <td>Glyde</td>
                <td>Backend Dev.</td>
                <td>- - : - -</td>
                <td>—</td>
                <td><span class="status absent">Absent</span></td>
                <td><i class="fa-solid fa-ellipsis-vertical menu-icon"></i></td>
              </tr>
    
              <tr>
                <td>
                  <div class="user">
                    <input type="checkbox">
                    <div><img class="pro-pic" src="./images/Frame 208.png') }}" alt="Obi Lucy"></div>
                    Obi Lucy
                  </div>
                </td>
                <td>Glyde</td>
                <td>Frontend Dev.</td>
                <td><span class="late-time">10:30 AM</span> - 06:00 PM</td>
                <td>7h 30m</td>
                <td><span class="status inactive">Not clocked in</span></td>
                <td><i class="fa-solid fa-ellipsis-vertical menu-icon"></i></td>
              </tr>
    
              <tr>
                <td>
                  <div class="user">
                    <input type="checkbox">
                    <div><img class="pro-pic" src="./images/Frame 208.png') }}" alt="Victoria Tory"></div>
                    Victoria Tory
                  </div>
                </td>
                <td>Hizo</td>
                <td>UI Intern</td>
                <td>10:00 AM - <span class="early">05:45 PM</span></td>
                <td>7h 45m</td>
                <td><span class="status active">Active</span></td>
                <td><i class="fa-solid fa-ellipsis-vertical menu-icon"></i></td>
              </tr>
    
    
                <tr>
                <td>
                  <div class="user">
                    <input type="checkbox">
                    <div><img class="pro-pic" src="./images/Frame 208.png') }}" alt="Daniel Smith"></div>
                    Daniel Smith
                  </div>
                </td>
                <td>Glyde</td>
                <td>Backend Dev.</td>
                <td>- - : - -</td>
                <td>—</td>
                <td><span class="status absent">Absent</span></td>
                <td><i class="fa-solid fa-ellipsis-vertical menu-icon"></i></td>
              </tr>
    
    
                <tr>
                <td>
                  <div class="user">
                    <input type="checkbox">
                    <div><img class="pro-pic" src="./images/Frame 208.png') }}" alt="Mark.J Lopez"></div>
                    Mark.J Lopez
                  </div>
                </td>
                <td>Trazo</td>
                <td>Accountant</td>
                <td>10:00 AM - 06:00 PM</td>
                <td>8h 00m</td>
                <td><span class="status active">Active</span></td>
                <td><i class="fa-solid fa-ellipsis-vertical menu-icon"></i></td>
              </tr>
    
    
                <tr>
                <td>
                  <div class="user">
                    <input type="checkbox">
                    <div><img class="pro-pic" src="./images/Frame 208.png') }}" alt="Mark.J Lopez"></div>
                    Mark.J Lopez
                  </div>
                </td>
                <td>Trazo</td>
                <td>Accountant</td>
                <td>10:00 AM - 06:00 PM</td>
                <td>8h 00m</td>
                <td><span class="status active">Active</span></td>
                <td><i class="fa-solid fa-ellipsis-vertical menu-icon"></i></td>
              </tr>
    
    
                <tr>
                <td>
                  <div class="user">
                    <input type="checkbox">
                    <div><img class="pro-pic" src="./images/Frame 208.png') }}" alt="Mark.J Lopez"></div>
                    Mark.J Lopez
                  </div>
                </td>
                <td>Trazo</td>
                <td>Accountant</td>
                <td>10:00 AM - 06:00 PM</td>
                <td>8h 00m</td>
                <td><span class="status active">Active</span></td>
                <td><i class="fa-solid fa-ellipsis-vertical menu-icon"></i></td>
              </tr> -->

        </tbody>

      </table>

    </div>

  </div>


  <script>
    const menuToggle = document.getElementById("menuToggle");
    const sidebar = document.getElementById("sidebar");
    const closeBtn = document.getElementById("closeBtn");

    menuToggle.addEventListener("click", () => {
      sidebar.classList.add("active");
    });

    closeBtn.addEventListener("click", () => {
      sidebar.classList.remove("active");
    });
  </script>


</x-layout>