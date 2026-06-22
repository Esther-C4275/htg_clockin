<x-layout>
    <div class="container">

        <!-- Sidebar -->
        <aside class="sidebar">
            <img class="HGT" src="/images/htg.png" alt="">
            <!-- <h2 class="logo">HTG<br><span>TIME PORTAL</span></h2> -->

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

            <div class="bottom">
                <div class="both">

                    <img class="bots" src="/images/setting.png">
                    <a href="{{ route('admin-setting.index') }}">
                        <p> Settings</p>
                    </a>
                </div>


                <x-adminlogout />


            </div>

        </aside>

        <!-- Main Content -->
        <main class="main">

            <!-- Top Bar -->
            <div class="topbar">
                <h2>Employees</h2>

                <div class="user">

                    <form action="{{ route('admin-employee.index') }}" method="GET">


                        <input type="text" name="first_name" placeholder="🔍 Search by first name..."
                            value="{{ request('first_name') }}">

                    </form>

                    <img src="/images/bell.png" alt="">
                    <a href="{{ route('admin-setting.index') }}" style="text-decoration: none;">
                        @php
                            $firstInitial = substr($adminUser->first_name, 0, 1);
                            $lastInitial = substr($adminUser->last_name, 0, 1);

                            $initials = strtoupper($firstInitial . $lastInitial);
                        @endphp

                        <div class="avatar-initials">
                            {{ $initials }}
                        </div>
                    </a>
                    <div>
                        <p>{{ $adminUser->first_name}} {{ $adminUser->last_name}}</p>
                        <small>Admin</small>

                    </div>
                </div>
            </div>

            <!-- Filters -->
            <div class="filters">

                <a href="{{ route('admin-employee.create') }}">
                    <button>Add New Employee</button>
                </a>
            </div>

            <!-- Table -->
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Position</th>
                            <th>Department</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($employees as $user)
                            <tr>
                                <td>
                                    <div class="both-td">
                                        <input type="checkbox" class="employee-checkbox">
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
                                        <h1 class="names">{{ $user->first_name }} {{ $user->last_name }}</h1>
                                    </div>


                                </td>
                                <td>{{ $user->company }}</td>
                                <td>{{ $user->position }}</td>
                                <td>{{ $user->department }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if($user->row_status === 'Active')
                                        <span class="status active">Active</span>
                                    @else
                                        <span class="status active" style="background-color:red">Absent</span>
                                    @endif

                                    <div class="menu-container">
                                        <button class="menu-btn">⋮</button>
                                        <div class="menu-dropdown">

                                            <a href="{{ route('view-employee.index', ['employee_id' => $user->id]) }}">View
                                                Details</a>

                                        </div>
                                    </div>

                                </td>



                            </tr>
                        @endforeach

                        {{-- <tr>
                            <td>
                                <div class="both-td">
                                    <input type="checkbox" class="employee-checkbox">
                                    <img class="box-img" src="/images/frame.png" alt="">
                                    <h1 class="names">Ilumetozer Onome</h1>
                                </div>
                            </td>
                            <td>Trazo</td>
                            <td>Accountant</td>
                            <td>Accounting</td>
                            <td>mark@gmail.com</td>
                            <td><span class="status active">Active</span></td>
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
                                    <input type="checkbox" class="employee-checkbox">
                                    <img class="box-img" src="/images/frame.png" alt="">
                                    <h1 class="names">Ilumetozer Onome</h1>
                                </div>
                            </td>

                            <td>Glyde</td>
                            <td>Backend Dev</td>
                            <td>Engineering</td>
                            <td>david@gmail.com</td>
                            <td><span class="status absent">Absent</span></td>
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
                                    <input type="checkbox" class="employee-checkbox">
                                    <img class="box-img" src="/images/frame.png" alt="">
                                    <h1 class="names">Ilumetozer Onome</h1>
                                </div>
                            </td>

                            <td>Glyde</td>
                            <td>Frontend Dev</td>
                            <td>Engineering</td>
                            <td>favour@gmail.com</td>
                            <td><span class="status idle">Active</span></td>
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
                                    <input type="checkbox" class="employee-checkbox">
                                    <img class="box-img" src="/images/frame.png" alt="">
                                    <h1 class="names">Ilumetozer Onome</h1>
                                </div>
                            </td>

                            <td>Glyde</td>
                            <td>Frontend Dev</td>
                            <td>Engineering</td>
                            <td>favour@gmail.com</td>
                            <td><span class="status idle">Active</span></td>
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
                                    <input type="checkbox" class="employee-checkbox">
                                    <img class="box-img" src="/images/frame.png" alt="">
                                    <h1 class="names">Ilumetozer Onome</h1>
                                </div>
                            </td>

                            <td>Glyde</td>
                            <td>Frontend Dev</td>
                            <td>Engineering</td>
                            <td>favour@gmail.com</td>
                            <td><span class="status idle">Absent</span></td>
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
                                    <input type="checkbox" class="employee-checkbox">
                                    <img class="box-img" src="/images/frame.png" alt="">
                                    <h1 class="names">Ilumetozer Onome</h1>
                                </div>
                            </td>
                            <td>Glyde</td>
                            <td>Frontend Dev</td>
                            <td>Engineering</td>
                            <td>favour@gmail.com</td>
                            <td><span class="status idle">Absent</span></td>
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
                                    <input type="checkbox" class="employee-checkbox">
                                    <img class="box-img" src="/images/frame.png" alt="">
                                    <h1 class="names">Ilumetozer Onome</h1>
                                </div>
                            </td>
                            <td>Glyde</td>
                            <td>Frontend Dev</td>
                            <td>Engineering</td>
                            <td>favour@gmail.com</td>
                            <td><span class="status idle">Active</span></td>
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
                                    <input type="checkbox" class="employee-checkbox">
                                    <img class="box-img" src="/images/frame.png" alt="">
                                    <h1 class="names">Ilumetozer Onome</h1>
                                </div>
                            </td>
                            <td>Glyde</td>
                            <td>Frontend Dev</td>
                            <td>Engineering</td>
                            <td>favour@gmail.com</td>
                            <td><span class="status idle">active</span></td>
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
                                    <input type="checkbox" class="employee-checkbox">
                                    <img class="box-img" src="/images/frame.png" alt="">
                                    <h1 class="names">Ilumetozer Onome</h1>
                                </div>
                            </td>
                            <td>Glyde</td>
                            <td>Frontend Dev</td>
                            <td>Engineering</td>
                            <td>favour@gmail.com</td>
                            <td><span class="status idle">active</span></td>
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
                                    <input type="checkbox" class="employee-checkbox">
                                    <img class="box-img" src="/images/frame.png" alt="">
                                    <h1 class="names">Ilumetozer Onome</h1>
                                </div>
                            </td>
                            <td>Glyde</td>
                            <td>Frontend Dev</td>
                            <td>Engineering</td>
                            <td>favour@gmail.com</td>
                            <td><span class="status idle">active</span></td>
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
                                    <input type="checkbox" class="employee-checkbox">
                                    <img class="box-img" src="/images/frame.png" alt="">
                                    <h1 class="names">Ilumetozer Onome</h1>
                                </div>
                            </td>
                            <td>Glyde</td>
                            <td>Frontend Dev</td>
                            <td>Engineering</td>
                            <td>favour@gmail.com</td>
                            <td><span class="status idle">active</span></td>
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
                                    <input type="checkbox" class="employee-checkbox">
                                    <img class="box-img" src="/images/frame.png" alt="">
                                    <h1 class="names">Ilumetozer Onome</h1>
                                </div>
                            </td>
                            <td>Glyde</td>
                            <td>Frontend Dev</td>
                            <td>Engineering</td>
                            <td>favour@gmail.com</td>
                            <td><span class="status idle">active</span></td>
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
                                    <input type="checkbox" class="employee-checkbox">
                                    <img class="box-img" src="/images/frame.png" alt="">
                                    <h1 class="names">Ilumetozer Onome</h1>
                                </div>
                            </td>
                            <td>Glyde</td>
                            <td>Frontend Dev</td>
                            <td>Engineering</td>
                            <td>favour@gmail.com</td>
                            <td><span class="status idle">active</span></td>
                            <td>
                                <div class="menu-container">
                                    <button class="menu-btn">⋮</button>
                                    <div class="menu-dropdown">

                                        <a href="#">View Details</a>

                                    </div>
                                </div>
                            </td>
                        </tr> --}}

                    </tbody>
                </table>

            </div>

        </main>
    </div>
    <script>
        // Menu functionality
        function initializeMenus() {
            const menuBtns = document.querySelectorAll('.menu-btn');

            menuBtns.forEach(btn => {
                btn.addEventListener('click', function (e) {
                    e.stopPropagation();

                    // Close all other menus
                    document.querySelectorAll('.menu-dropdown').forEach(menu => {
                        if (menu !== this.nextElementSibling) {
                            menu.classList.remove('active');
                        }
                    });

                    // Toggle current menu
                    const dropdown = this.nextElementSibling;
                    dropdown.classList.toggle('active');
                });
            });
        }

        // Close menus when clicking outside
        document.addEventListener('click', function (e) {
            if (!e.target.closest('.menu-container')) {
                document.querySelectorAll('.menu-dropdown').forEach(menu => {
                    menu.classList.remove('active');
                });
            }
        });

        // Get all status elements
        const statusElements = document.querySelectorAll('.status');

        // Add click event listener to each status
        statusElements.forEach(status => {
            status.style.cursor = 'pointer';

            status.addEventListener('click', function () {
                // Toggle between active and absent
                if (this.classList.contains('active')) {
                    this.classList.remove('active');
                    this.classList.add('absent');
                    this.textContent = 'Absent';
                } else if (this.classList.contains('absent')) {
                    this.classList.remove('absent');
                    this.classList.add('active');
                    this.textContent = 'Active';
                } else if (this.classList.contains('idle')) {
                    // If status is "Not clocked in", switch to active first
                    this.classList.remove('idle');
                    this.classList.add('absent');
                    this.textContent = 'Absent';
                }
            });
        });

        // Checkbox functionality
        const selectAllCheckbox = document.getElementById('select-all');
        const employeeCheckboxes = document.querySelectorAll('.employee-checkbox');

        // Select all checkbox
        if (selectAllCheckbox) {
            selectAllCheckbox.addEventListener('change', function () {
                employeeCheckboxes.forEach(checkbox => {
                    checkbox.checked = this.checked;
                });
            });
        }

        // View More Button functionality
        const viewMoreBtn = document.getElementById('view-more-btn');
        const tableBody = document.querySelector('tbody');
        let loadMoreCount = 0;

        const additionalEmployees = [
            { name: 'Sarah Mitchell', company: 'Vertex', position: 'QA Engineer', dept: 'QA', email: 'sarah@gmail.com', status: 'Active' },
            { name: 'James Wilson', company: 'Nexus', position: 'DevOps Eng', dept: 'Infrastructure', email: 'james@gmail.com', status: 'Absent' },
            { name: 'Emma Davis', company: 'CloudSync', position: 'UX Designer', dept: 'Design', email: 'emma@gmail.com', status: 'Active' },
            { name: 'Michael Brown', company: 'DataFlow', position: 'Data Analyst', dept: 'Analytics', email: 'michael@gmail.com', status: 'Active' },
            { name: 'Jessica Lee', company: 'AppWorks', position: 'Full Stack Dev', dept: 'Engineering', email: 'jessica@gmail.com', status: 'Absent' }
        ];

        if (viewMoreBtn) {
            viewMoreBtn.addEventListener('click', function () {
                let rowsAdded = 0;
                for (let i = 0; i < 3 && loadMoreCount < additionalEmployees.length; i++) {
                    const emp = additionalEmployees[loadMoreCount];
                    const newRow = document.createElement('tr');
                    newRow.innerHTML = `
              <td><input type="checkbox" class="employee-checkbox"></td>
              <td>${emp.name}</td>
              <td>${emp.company}</td>
              <td>${emp.position}</td>
              <td>${emp.dept}</td>
              <td>${emp.email}</td>
              <td><span class="status ${emp.status === 'Active' ? 'active' : 'absent'}">${emp.status}</span></td>
              <td>
                <div class="menu-container">
                  <button class="menu-btn">⋮</button>
                  <div class="menu-dropdown">
                    <a href="#">Edit</a>
                    <a href="#">View Details</a>
                    <a href="#" class="delete">Delete</a>
                  </div>
                </div>
              </td>
            `;
                    tableBody.appendChild(newRow);
                    loadMoreCount++;
                    rowsAdded++;
                }

                // Add event listeners to new status badges
                const newStatusElements = document.querySelectorAll('.status');
                newStatusElements.forEach(status => {
                    status.style.cursor = 'pointer';
                    status.removeEventListener('click', handleStatusClick);
                    status.addEventListener('click', handleStatusClick);
                });

                // Add event listeners to new checkboxes
                const newCheckboxes = document.querySelectorAll('.employee-checkbox');
                newCheckboxes.forEach(checkbox => {
                    checkbox.removeEventListener('change', handleCheckboxChange);
                    checkbox.addEventListener('change', handleCheckboxChange);
                });

                // Reinitialize menus for new rows
                initializeMenus();

                // Hide button if no more employees to load
                if (loadMoreCount >= additionalEmployees.length && viewMoreBtn) {
                    viewMoreBtn.style.display = 'none';
                }
            });
        }

        // Extract status click handler for reuse
        function handleStatusClick() {
            if (this.classList.contains('active')) {
                this.classList.remove('active');
                this.classList.add('absent');
                this.textContent = 'Absent';
            } else if (this.classList.contains('absent')) {
                this.classList.remove('absent');
                this.classList.add('active');
                this.textContent = 'Active';
            } else if (this.classList.contains('idle')) {
                this.classList.remove('idle');
                this.classList.add('absent');
                this.textContent = 'Absent';
            }
        }

        function handleCheckboxChange() {
            if (!this.checked) {
                selectAllCheckbox.checked = false;
            } else if (Array.from(employeeCheckboxes).every(cb => cb.checked)) {
                selectAllCheckbox.checked = true;
            }
        }

        // Initialize menus on page load
        initializeMenus();
    </script>

    <style>
        body {
            height: 100vh;
            padding: 0px;
            margin: 0px;
            font-family: 'Inter', sans-serif;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 207px;
            height: 100vh;
            opacity: 1;
            left: 0.22px;
            background: #06414F;
            color: #fff;
            padding: 20px;
            display: flex;
            flex-direction: column;
            position: fixed;
        }

        .logo {
            font-size: 20px;
        }

        .logo span {
            font-size: 12px;
            font-weight: normal;
        }

        .sidebar ul {
            list-style: none;
            padding-left: 2px;
            text-align: center;
            align-items: center;
            padding-right: 52px;
        }

        li {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sidebar li {
            padding: 14px;
            cursor: pointer;
            border-radius: 8px;
            color: #B7B7B7;
            gap: 12px;
            font-size: 16px;
            line-height: 100%;
            letter-spacing: 0px;
            text-align: center;
            align-items: center;

        }

        .sidebar li:hover {
            background: #FFFFFF;
            color: #06414F;
            width: 100%;
            margin: 0px;
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



        .active {
            width: 24px;
            height: 24px;
            opacity: 1;
            align-items: center;
            text-align: center;
            margin-right: 15px;


        }

        .bottom {
            margin: 10px;
            margin-top: auto;
            cursor: pointer;
            font-weight: 500;
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 0px;
            /* padding-left: 2px; */
            margin-bottom: 30px;

        }

        .bottom p {
            font-size: 16px
        }

        .both {
            background: transparent;

            margin-bottom: 0;
            display: flex;

            align-items: center;
            text-align: center;
            color: #B7B7B7;

        }

        .both p {
            font-size: 18px;
        }

        .both:hover {
            background: #FFFFFF;
            color: #06414F;
            width: 100%;
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
            margin-right: 15px;

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

        .initials {
            width: 35px;
            height: 35px;
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


        /* Main */
        .main {
            flex: 1;
            padding: 20px;
            background: #fff;
            margin-left: 247px;
            height: 882PX;
            gap: 25px;
            opacity: 1;
            overflow-y: auto;

        }

        .HGT {
            width: 153.671875px;
            height: 64.2109375px;
            margin-bottom: 20px;
        }

        /* Topbar */
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
            color: #000000;
            margin: 0;
            min-width: 120px;
        }

        .topbar input {
            flex: 1;
            width: 268px;
            padding: 12px;
            border-radius: 12px;
            border: 1px solid #B4B4B4;
            font-size: 14px;
            background: white;
        }

        .topbar input::placeholder {
            color: #B4B4B4;
        }

        .user {
            display: flex;
            align-items: center;
            gap: 6px;
            margin-left: auto;
        }

        .user img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .user div {
            text-align: right;
        }

        .user p {
            margin: 0;
            font-family: Inter;
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 14px;
            line-height: 100%;
            letter-spacing: 0px;
            color: #000000;
        }

        .user small {
            margin: 0;
            font-family: Inter;
            font-weight: 500;
            font-style: Medium;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;
            color: #5E5D5D;
            margin-right: 37px;
        }

        /* Filters */
        .filters {
            margin-bottom: 30px;
            display: flex;
            gap: 12px;
        }

        .filters button {
            padding: 12px;
            border: 1px solid #E0E0E0;
            border-radius: 8px;
            cursor: pointer;
            background: #FFFFFF;
            color: #525151;
            font-family: Inter;
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 13px;
            line-height: 100%;
            letter-spacing: 0px;
            width: 152px;
            height: 43px;
            /* transition: all 0.3s ease; */
        }

        .filters button a {
            cursor: pointer;
        }


        /* .abust{

  gap: 10px;
  opacity: 1;
  border-radius: 8px;
  padding: 16px;
  border-width: 1px;

} */
        /* 
.filters button:first-child {
  background: #06414F;
  color: #FFFFFF;
  border-color: #06414F;
} */

        .filters button:hover {
            background: #06414F;
            color: #FFFFFF;
            /* border-color: #06414F; */
        }


        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            text-align: left;
            background: #F8F9FB;
            font-size: 16px;
            /* margin-right: 10px; */
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #eee;

        }

        input[type="checkbox"] {
            width: 16px;
            height: 16px;
            opacity: 1;
        }

        .both-td {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .box-img {
            /* margin-left: 5px; */
            width: 25px;
            height: 25px;
            opacity: 1;
            border-radius: 100px;
            /* display: flex;
  flex-direction: column; */

        }

        .names {
            font-family: Inter;
            font-weight: 400;
            font-style: Medium;
            font-size: 16px;
            line-height: 100%;
            letter-spacing: 0px;
            color: #000000;
            /* display: flex;
  flex-direction: column; */
        }

        /* badges  */
        .status {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            color: #fff;
        }

        .status.active {
            background: #2ecc71;
        }

        .status.absent {
            background: #e74c3c;
        }

        .status.idle {
            background: #95a5a6;
        }

        /* Checkboxes */
        input[type="checkbox"] {
            cursor: pointer;
            width: 18px;
            height: 18px;
            accent-color: #0d3b3f;
        }

        input[type="checkbox"]:hover {
            opacity: 0.8;
        }

        /* Menu Button */
        .menu-container {
            position: relative;
            display: inline-block;
        }

        .menu-btn {
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: #333;
            padding: 5px 10px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .menu-btn:hover {
            background: #f0f0f0;
            color: #06414F;
        }

        .menu-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            background: #fff;
            height: 30px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            min-width: 80px;
            display: none;
            z-index: 1000;
            margin-top: 5px;
            padding: 5px 0;
        }

        .menu-dropdown.active {
            display: block;
        }

        .menu-dropdown a {
            display: block;


            text-decoration: none;
            color: #333;
            font-size: 14px;

        }

        .menu-dropdown a:hover {
            background: #f5f5f5;
            color: #06414F;

        }

        .menu-dropdown a.delete {
            color: #e74c3c;
        }

        .menu-dropdown a.delete:hover {
            background: #ffe0e0;
        }
    </style>
</x-layout>