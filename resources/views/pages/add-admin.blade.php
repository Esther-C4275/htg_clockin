<x-layout>

    {{-- <div class="p-8 max-w-7xl mx-auto">

        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Settings</h1>
                <p class="text-sm text-gray-500">Manage portal access and system settings</p>
            </div>

            <div class="flex items-center gap-3">
                <img src="{{ asset('avatar.jpg') }}" class="w-10 h-10 rounded-full" alt="Avatar">
                <div>
                    <p class="text-sm font-semibold text-gray-800">Kelly Smith</p>
                    <span class="text-xs text-gray-500">Admin</span>
                </div>
            </div>
        </div>


        <div class="bg-white rounded-xl border border-gray-200 shadow-sm flex overflow-hidden">


            <div class="w-64 bg-gray-50/50 p-6 border-r border-gray-200 flex-shrink-0">
                <h3 class="font-bold text-gray-900 text-lg mb-1">Settings</h3>
                <p class="text-xs text-gray-500 mb-6">Find all settings here</p>

                <nav class="space-y-1">
                    <a href="#"
                        class="flex items-center gap-3 px-3 py-2 text-sm font-medium text-gray-400 rounded-lg hover:bg-gray-100">
                        <svg class="w-4 h-4" ...></svg> My Profile
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 px-3 py-2 text-sm font-medium text-gray-400 rounded-lg hover:bg-gray-100">
                        <svg class="w-4 h-4" ...></svg> Security Options
                    </a>
                    <a href="#"
                        class="flex items-center gap-3 px-3 py-2 text-sm font-semibold text-[#0B4654] bg-teal-50 rounded-lg">
                        <svg class="w-4 h-4 text-[#0B4654]" ...></svg> Add Admin
                    </a>
                </nav>
            </div>


            <div class="flex-1 p-8">
                <div class="max-w-2xl">
                    <h2 class="text-xl font-bold text-gray-900 mb-6">Add New Admin</h2>

                    <form action="{{ route('admin.store') }}" method="POST" class="space-y-5">
                        @csrf


                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                                <input type="text" name="first_name" placeholder="Enter first name"
                                    class="w-full px-3.5 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0B4654] focus:border-transparent outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                                <input type="text" name="last_name" placeholder="Enter last name"
                                    class="w-full px-3.5 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0B4654] focus:border-transparent outline-none">
                            </div>
                        </div>


                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" name="email" placeholder="Enter email"
                                    class="w-full px-3.5 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0B4654] focus:border-transparent outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                <input type="text" name="phone" placeholder="Enter phone number"
                                    class="w-full px-3.5 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0B4654] focus:border-transparent outline-none">
                            </div>
                        </div>


                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Date of Joining</label>
                                <input type="date" name="date"
                                    class="w-full px-3.5 py-2.5 border border-gray-300 rounded-lg text-gray-600 focus:ring-2 focus:ring-[#0B4654] focus:border-transparent outline-none">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Temporary Password</label>
                                <input type="password" name="password" placeholder="••••••••"
                                    class="w-full px-3.5 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#0B4654] focus:border-transparent outline-none">
                            </div>
                        </div>


                        <div class="pt-4">
                            <button type="submit"
                                class="bg-[#0B4654] hover:bg-[#083540] text-white font-medium px-6 py-2.5 rounded-lg transition-colors shadow-sm">
                                Add New Admin
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div> --}}

    <style>
        main {
            background: white;
            width: auto;
        }

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
            padding: 10px;
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
            font-size: 16px;
        }

        .bottom-menu a:hover {
            background: white;
            color: #06414F;
        }

        .main {
            flex: 1;
            padding: 30px;
            margin-left: 270px;

        }

        .admin {
            display: flex;
            gap: 700px;
        }

        .admin h1 {
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 32px;
            leading-trim: NONE;
            line-height: 100%;
            letter-spacing: 0px;
            margin-bottom: 30px;

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
            margin-left: 25px;
        }

        .admin-name {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: -10px;
            margin-left: -2px;
        }

        .admin-role {
            font-size: 12px;
            color: var(--text-muted);
        }

        /* CONTENT AREA */

        .content {
            display: grid;
            grid-template-columns: 260px (0, 1fr);
            gap: 25px;
            width: 66%;

        }

        /* LEFT SETTINGS */

        .settings-card {
            border: 1px solid #EDEDED;
            border-radius: 8px;
            padding: 20px;
            width: 210px;
            height: 650px;
            opacity: 1;
            border-radius: 8px;
            border-width: 1px;
            margin-top: 18px;
        }

        .settings-card h3 {
            font-size: 18px;
            margin-bottom: 8px;
            font-weight: 600;
            margin-top: -5px;
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

        /* FORM */

        form {
            width: 44%;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 32px;
            width: 790px;
            margin-top: 22px;
            margin-left: -330px;

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
            height: 39px;
            width: 100%;
            border: 1px solid #767676;
            border-radius: 10px;
            padding: 0 16px;
            font-size: 16px;
            background: transparent;
            outline: none;
            box-sizing: border-box;
            transition: border-color 0.2s;
        }

        .form-select {
            padding: 9px 16px;
            border-radius: 10px;
            font-size: 16px;
            border: 1px solid #767676;
            background: transparent;
            outline: none;
            transition: border-color 0.2s, color 0.2s;
        }

        .form-group input[type="date"] {
            color: #767676;
        }


        .form-group input[type="date"]:valid {
            color: #000000;
        }

        .form-group input[type="date"]::-webkit-calendar-picker-indicator {
            cursor: pointer;
            opacity: 0.6;
        }

        .form-group input[type="date"]:valid::-webkit-calendar-picker-indicator {
            opacity: 1;
        }

        .form-select:invalid {
            color: #767676;
        }

        .form-select option[value=""][disabled] {
            color: #767676;
        }


        .form-select:valid {
            color: #000;
        }

        .form-select option {
            color: #000;
        }

        .form-select option[value=""] {
            color: #9CA3AF;
        }

        .form-input[type="date"] {
            color: #000;
        }

        .form-input[type="date"]:invalid {
            color: #9CA3AF;
        }



        .form-group input::placeholder {
            color: #767676;
        }

        .full-width {
            grid-column: span 2;
        }

        .btn {
            margin-top: 70px;
            width: 790px;
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
            margin-left: -333px;
        }

        .both {
            display: flex;
            gap: 20px;
            width: 100%;
            align-items: flex-start;


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

    <body>
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
                    <i><img src="{{ asset('images/setting.svg') }}" alt=""></i>
                    Settings
                </a>
                <x-adminlogout />
            </div>

        </aside>

        <main class="main">

            <div class="admin">
                <h1>Add New Admin</h1>

                <div class="admin-info">
                    @php
                        $firstInitial = substr($user->first_name, 0, 1);
                        $lastInitial = substr($user->last_name, 0, 1);

                        $initials = strtoupper($firstInitial . $lastInitial);

                    @endphp
                    <div class="initials-pic">
                        {{ $initials }}
                    </div>
                    <div>
                        <h2 class="admin-name">{{ $user->first_name }} {{ $user->last_name }}</h2>
                        <p class="admin-role">Admin</p>
                    </div>
                </div>
            </div>

            <div class="both">

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
                </div>



                <form action="{{ route('admin.store') }}" method="POST">
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
                            <label for="html">First Name</label>
                            <input type="text" name="first_name" placeholder="Enter first name" required>
                        </div>

                        <div class="form-group">
                            <label for="html">Last Name</label>
                            <input type="text" name="last_name" placeholder="Enter last name" required>
                        </div>

                        <div class="form-group">
                            <label for="html">Email</label>
                            <input type="email" name="email" placeholder="Enter email" required>
                        </div>

                        <div class="form-group">
                            <label for="html">Phone number</label>
                            <input type="number" name="phone" placeholder="Enter phone number" required>
                        </div>
                        <div class="form-group">
                            <label for="html">Position</label>
                            <input type="text" name="position" placeholder="Position" required>
                        </div>
                        <div class="form-group">
                            <label for="html">Gender</label>
                            <select class="form-select" name="gender" required>
                                <option value="" disabled selected hidden>Select gender</option>
                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="html">Date of Birth</label>
                            <input type="date" name="date_of_birth" placeholder="Date of birth" required>
                        </div>
                        <div class="form-group">
                            <label for="html">Country</label>
                            <select name="country" class="form-select" required>
                                <option value="" disabled {{ !old('country') ? 'selected' : '' }}>Select country
                                </option>
                                <option value="Nigeria" {{ old('country') == 'Nigeria' ? 'selected' : '' }}>Nigeria
                                </option>
                                <option value="Ghana" {{ old('country') == 'Ghana' ? 'selected' : '' }}>Ghana</option>
                                <option value="United Kingdom" {{ old('country') == 'United Kingdom' ? 'selected' : '' }}>
                                    United Kingdom</option>
                                <option value="United States" {{ old('country') == 'United States' ? 'selected' : '' }}>
                                    United
                                    States</option>
                                <option value="Kenya" {{ old('country') == 'Kenya' ? 'selected' : '' }}>Kenya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="html">State</label>
                            <select class="form-select" name="state" required>
                                <option value="">Select State of Origin</option>
                                <option value="abia">Abia</option>
                                <option value="adamawa">Adamawa</option>
                                <option value="akwa-ibom">Akwa Ibom</option>
                                <option value="anambra">Anambra</option>
                                <option value="bauchi">Bauchi</option>
                                <option value="bayelsa">Bayelsa</option>
                                <option value="benue">Benue</option>
                                <option value="borno">Borno</option>
                                <option value="cross-river">Cross River</option>
                                <option value="delta">Delta</option>
                                <option value="ebonyi">Ebonyi</option>
                                <option value="edo">Edo</option>
                                <option value="ekiti">Ekiti</option>
                                <option value="enugu">Enugu</option>
                                <option value="fct">Federal Capital Territory</option>
                                <option value="gombe">Gombe</option>
                                <option value="imo">Imo</option>
                                <option value="jigawa">Jigawa</option>
                                <option value="kaduna">Kaduna</option>
                                <option value="kano">Kano</option>
                                <option value="katsina">Katsina</option>
                                <option value="kebbi">Kebbi</option>
                                <option value="kogi">Kogi</option>
                                <option value="kwara">Kwara</option>
                                <option value="lagos">Lagos</option>
                                <option value="nasarawa">Nasarawa</option>
                                <option value="niger">Niger</option>
                                <option value="ogun">Ogun</option>
                                <option value="ondo">Ondo</option>
                                <option value="osun">Osun</option>
                                <option value="oyo">Oyo</option>
                                <option value="plateau">Plateau</option>
                                <option value="rivers">Rivers</option>
                                <option value="sokoto">Sokoto</option>
                                <option value="taraba">Taraba</option>
                                <option value="yobe">Yobe</option>
                                <option value="zamfara">Zamfara</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="html">Address</label>
                            <input type="text" name="address" placeholder="Address" required>
                        </div>
                    </div>

                    <button type="submit" class="btn">Add New Admin</button>

                </form>

            </div>


        </main>



    </body>

</x-layout>