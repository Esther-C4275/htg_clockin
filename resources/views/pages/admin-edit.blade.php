<x-layout>
    <aside class="sidebar">
        <div class="logo">
            <img src="/images/htg.png" alt="">
        </div>

        <ul class="menu">
            <li>
                <a href="{{ route('admin-dashboard.index') }}">
                    <img src="/images/dash.png" alt=""> Dashboard</a>
            </li>

            <li>
                <a href="{{ route('admin-employee.index') }}">
                    <img src="/images/employee.png"> Employees</a>
            </li>
            <li>
                <a href="{{ route('admin-employee.index') }}">
                    <img src="/images/attendance.png" alt=""> Attendance </a>
            </li>
        </ul>

        <div class="bottom">
            <p class="btn-settings active">
                <a href="{{ route('admin-setting.index') }}">

                    <img class="bots" src="/images/setting.png" alt=""> Settings
            </p>
            </a>
           <x-adminlogout />
        </div>
        
    </aside>

    <!-- MAIN -->
    <main class="main">

        <!-- TOPBAR -->
        <div class="topbar">
            <h2>Dashboard</h2>

            <div class="top-right">


                <img src="/images/bell.png" alt="" class="notification">

                <div class="user">
                    @php
                    $firstInitial = substr($user->first_name, 0, 1);
                    $lastInitial = substr($user->last_name, 0, 1);

                    $initials = strtoupper($firstInitial . $lastInitial);
                @endphp
                <div class="initials">
                    {{ $initials }}
                </div>
                    <div>
                        <h5>{{ $user->first_name }} {{$user->last_name }}</h5>
                        <span>Admin</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="content">

            <!-- SETTINGS PANEL -->
            <div class="settings">
                <h3>Settings</h3>
                <br>
                <p>You can find all settings here</p>

                <ul class="profile-links">
                    <li>
                        <a href="{{ route('admin-setting.index') }}" style="text-decoration: none; color:#BCBCBC; font-weight-600">
                        <i class="fa-solid fa-user"></i> My Profile</li>
                    </a>
                    <li>
                        <a href="{{ route('security.index') }}" style="text-decoration: none; color:#BCBCBC">
                        <i class="fa-solid fa-lock"></i> Security
                        Options</li>
                        </a>

                </ul>
            </div>

            <!-- PROFILE CARD -->
            <div class="card">
                <h2>Profile Information</h2>
                <div class="card-header">

                    <div class="profile">
                        @php
                    $firstInitial = substr($user->first_name, 0, 1);
                    $lastInitial = substr($user->last_name, 0, 1);

                    $initials = strtoupper($firstInitial . $lastInitial);
                @endphp
                <div class="initials">
                    {{ $initials }}
                </div>
                        <div>
                            <h3>{{ $user->first_name }} {{$user->last_name }}</h3>
                            <span>Admin</span>
                        </div>
                    </div>


                </div>
                <form method="POST" action="{{ route('admin-setting.update', Auth::id()) }}">
                    @csrf
                    @method('PUT')
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
                    <h4>Personal Details</h4>

                    <div class="grid">
                        <div>
                            <label>First Name</label>
                            <input type="text" name="first_name" value="{{ $user->first_name}}">
                        </div>

                        <div>
                            <label>Last Name</label>
                            <input type="text" name="last_name" value="{{ $user->last_name }}">
                        </div>

                        <div>
                            <label for="html">Email Address</label>
                            <input type="email" name="email" value="{{ $user->email }}">
                        </div>

                        <div>
                            <label>Phone</label>
                            <input type="number" name="phone" value="{{ $user->phone }}">
                        </div>

                        <div>
                            <label>Position</label>
                            <input type="text" name="position" value="{{ $user->position }}">
                        </div>

                        <div>
                            <label>Gender</label>
                            <select name="gender">
                                <option value="Female" {{ $user->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Male" {{ $user->gender == 'Male' ? 'selected' : '' }}>Male</option>
                            </select>
                        </div>

                        <div>
                            <label>Date of Birth</label>
                            <input type="date" name="date_of_birth" value="{{ $user->date_of_birth }}">
                        </div>
                    </div>

                    <h4>Address</h4>

                    <div class="grid">
                        <div>
                            <label>Country</label>
                            <select name="country">
                                <option>Select Country</option>
                                <option>Afghanistan</option>
                                <option>Albania</option>
                                <option>Algeria</option>
                                <option>Andorra</option>
                                <option>Angola</option>
                                <option>Antigua and Barbuda</option>
                                <option>Argentina</option>
                                <option>Armenia</option>
                                <option>Australia</option>
                                <option>Austria</option>
                                <option>Azerbaijan</option>
                                <option>Bahamas</option>
                                <option>Bahrain</option>
                                <option>Bangladesh</option>
                                <option>Barbados</option>
                                <option>Belarus</option>
                                <option>Belgium</option>
                                <option>Belize</option>
                                <option>Benin</option>
                                <option>Bhutan</option>
                                <option>Bolivia</option>
                                <option>Bosnia and Herzegovina</option>
                                <option>Botswana</option>
                                <option>Brazil</option>
                                <option>Brunei</option>
                                <option>Bulgaria</option>
                                <option>Burkina Faso</option>
                                <option>Burundi</option>
                                <option>Cambodia</option>
                                <option>Cameroon</option>
                                <option>Canada</option>
                                <option>Cape Verde</option>
                                <option>Central African Republic</option>
                                <option>Chad</option>
                                <option>Chile</option>
                                <option>China</option>
                                <option>Colombia</option>
                                <option>Comoros</option>
                                <option>Congo</option>
                                <option>Costa Rica</option>
                                <option>Croatia</option>
                                <option>Cuba</option>
                                <option>Cyprus</option>
                                <option>Czech Republic</option>
                                <option>Democratic Republic of Congo</option>
                                <option>Denmark</option>
                                <option>Djibouti</option>
                                <option>Dominica</option>
                                <option>Dominican Republic</option>
                                <option>East Timor</option>
                                <option>Ecuador</option>
                                <option>Egypt</option>
                                <option>El Salvador</option>
                                <option>Equatorial Guinea</option>
                                <option>Eritrea</option>
                                <option>Estonia</option>
                                <option>Eswatini</option>
                                <option>Ethiopia</option>
                                <option>Fiji</option>
                                <option>Finland</option>
                                <option>France</option>
                                <option>Gabon</option>
                                <option>Gambia</option>
                                <option>Georgia</option>
                                <option>Germany</option>
                                <option value="Ghana" {{ $user->country == 'Ghana' ? 'selected' : '' }}>Ghana</option>
                                <option>Greece</option>
                                <option>Grenada</option>
                                <option>Guatemala</option>
                                <option>Guinea</option>
                                <option>Guinea-Bissau</option>
                                <option>Guyana</option>
                                <option>Haiti</option>
                                <option>Honduras</option>
                                <option>Hungary</option>
                                <option>Iceland</option>
                                <option>India</option>
                                <option>Indonesia</option>
                                <option>Iran</option>
                                <option>Iraq</option>
                                <option>Ireland</option>
                                <option>Israel</option>
                                <option>Italy</option>
                                <option>Ivory Coast</option>
                                <option>Jamaica</option>
                                <option>Japan</option>
                                <option>Jordan</option>
                                <option>Kazakhstan</option>
                                <option>Kenya</option>
                                <option>Kiribati</option>
                                <option>Kosovo</option>
                                <option>Kuwait</option>
                                <option>Kyrgyzstan</option>
                                <option>Laos</option>
                                <option>Latvia</option>
                                <option>Lebanon</option>
                                <option>Lesotho</option>
                                <option>Liberia</option>
                                <option>Libya</option>
                                <option>Liechtenstein</option>
                                <option>Lithuania</option>
                                <option>Luxembourg</option>
                                <option>Madagascar</option>
                                <option>Malawi</option>
                                <option>Malaysia</option>
                                <option>Maldives</option>
                                <option>Mali</option>
                                <option>Malta</option>
                                <option>Marshall Islands</option>
                                <option>Mauritania</option>
                                <option>Mauritius</option>
                                <option>Mexico</option>
                                <option>Micronesia</option>
                                <option>Moldova</option>
                                <option>Monaco</option>
                                <option>Mongolia</option>
                                <option>Montenegro</option>
                                <option>Morocco</option>
                                <option>Mozambique</option>
                                <option>Myanmar</option>
                                <option>Namibia</option>
                                <option>Nauru</option>
                                <option>Nepal</option>
                                <option>Netherlands</option>
                                <option>New Zealand</option>
                                <option>Nicaragua</option>
                                <option>Niger</option>
                                <option value="Nigeria" {{ $user->country == 'Nigeria' ? 'selected' : '' }}>Nigeria
                                </option>
                                <option>North Korea</option>
                                <option>North Macedonia</option>
                                <option>Norway</option>
                                <option>Oman</option>
                                <option>Pakistan</option>
                                <option>Palau</option>
                                <option>Palestine</option>
                                <option>Panama</option>
                                <option>Papua New Guinea</option>
                                <option>Paraguay</option>
                                <option>Peru</option>
                                <option>Philippines</option>
                                <option>Poland</option>
                                <option>Portugal</option>
                                <option>Qatar</option>
                                <option>Romania</option>
                                <option>Russia</option>
                                <option>Rwanda</option>
                                <option>Saint Kitts and Nevis</option>
                                <option>Saint Lucia</option>
                                <option>Saint Vincent and Grenadines</option>
                                <option>Samoa</option>
                                <option>San Marino</option>
                                <option>Sao Tome and Principe</option>
                                <option>Saudi Arabia</option>
                                <option>Senegal</option>
                                <option>Serbia</option>
                                <option>Seychelles</option>
                                <option>Sierra Leone</option>
                                <option>Singapore</option>
                                <option>Slovakia</option>
                                <option>Slovenia</option>
                                <option>Solomon Islands</option>
                                <option>Somalia</option>
                                <option>South Africa</option>
                                <option>South Korea</option>
                                <option>South Sudan</option>
                                <option>Spain</option>
                                <option>Sri Lanka</option>
                                <option>Sudan</option>
                                <option>Suriname</option>
                                <option>Sweden</option>
                                <option>Switzerland</option>
                                <option>Syria</option>
                                <option>Taiwan</option>
                                <option>Tajikistan</option>
                                <option>Tanzania</option>
                                <option>Thailand</option>
                                <option>Togo</option>
                                <option>Tonga</option>
                                <option>Trinidad and Tobago</option>
                                <option>Tunisia</option>
                                <option>Turkey</option>
                                <option>Turkmenistan</option>
                                <option>Tuvalu</option>
                                <option>Uganda</option>
                                <option>Ukraine</option>
                                <option>United Arab Emirates</option>
                                <option>United Kingdom</option>
                                <option value="USA" {{ $user->country == 'USA' ? 'selected' : '' }}>United States</option>
                                <option>Uruguay</option>
                                <option>Uzbekistan</option>
                                <option>Vanuatu</option>
                                <option>Vatican City</option>
                                <option>Venezuela</option>
                                <option>Vietnam</option>
                                <option>Yemen</option>
                                <option>Zambia</option>
                                <option>Zimbabwe</option>
                            </select>
                        </div>

                        <div>
                            <label>City/State</label>
                            <select name="state">
                                <option>select state</option>
                                <option>Abia</option>
                                <option>Adamawa</option>
                                <option>Akwa Ibom</option>
                                <option>Anambra</option>
                                <option>Bauchi</option>
                                <option>Bayelsa</option>
                                <option>Benue</option>
                                <option>Borno</option>
                                <option>Cross River</option>
                                <option value="Delta" {{ $user->state == 'Delta' ? 'selected' : '' }}>Delta</option>
                                <option>Ebonyi</option>
                                <option>Edo</option>
                                <option>Ekiti</option>
                                <option>Enugu</option>
                                <option>Federal Capital Territory</option>
                                <option>Gombe</option>
                                <option>Imo</option>
                                <option>Jigawa</option>
                                <option>Kaduna</option>
                                <option>Kano</option>
                                <option>Katsina</option>
                                <option>Kebbi</option>
                                <option>Kogi</option>
                                <option>Kwara</option>
                                <option value="Lagos" {{ $user->state == 'Lagos' ? 'selected' : '' }}>Lagos</option>
                                <option>Nasarawa</option>
                                <option>Niger</option>
                                <option>Ogun</option>
                                <option>Ondo</option>
                                <option>Osun</option>
                                <option>Oyo</option>
                                <option>Plateau</option>
                                <option>Rivers</option>
                                <option>Sokoto</option>
                                <option>Taraba</option>
                                <option>Yobe</option>
                                <option>Zamfara</option>
                            </select>
                        </div>

                        <div class="full">
                            <label>Residential Address</label>
                            <input type="text" name="address" value="{{ $user->address}}">
                        </div>
                    </div>

                    <div class="form-buttons">
                        <button type="button" class="cancel-btn">Cancel</button>
                        <button type="submit" class="save-btn">Save Changes</button>
                    </div>

            </div>

        </div>
        </form>

    </main>

    </div>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: #f4f6f8;
        }

        .container {
            display: flex;
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

        /* .logo h1 {
  font-size: 26px;
} */

        .logo span {
            font-size: 12px;
            opacity: 0.7;
        }

        .menu {
            list-style: none;
            margin-top: 40px;
        }

        .menu li {
            padding: 12px;
            margin-bottom: 10px;
            cursor: pointer;
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .menu li a {
            text-decoration: none;
            color: #B7B7B7;
            display: flex;
            align-items: center;
            gap: 12px;
            width: 100%;
        }

        .menu li a:hover {
            background: #FFFFFF;
            color: #06414F;
        }


        .menu li:hover {
            background: #FFFFFF;
            color: #06414F;
            border-radius: 6px;
        }

        /* .bottom {
  margin-top: auto;
} */

        /* .settings-btn {
  width: 100%;
  padding: 10px;
  border: none;
  background: #e6f4f1;
  color: #0f4c55;
  border-radius: 6px;
  cursor: pointer;
} */

        /* .logout {
  margin-top: 10px;
  cursor: pointer;
} */


        .bottom {
            margin: 10px;
            margin-top: auto;
            cursor: pointer;
            font-weight: 500;
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 0px;
            padding-left: 2px;
            margin-bottom: 30px;

        }

        .bottom p a {
            text-decoration: none;
            color: #B7B7B7;
            display: flex;
            align-items: center;
         font-weight: 400;
            width: 100%;
            
        }

        .bottom a:hover {
            color: #06414F;
        }


        .bottom p {
            display: flex;
            align-items: center;
            padding: 10px 12px;
            border-radius: 6px;
            margin-bottom: 8px;
            transition: all 0.3s ease;
        }

        p {
            color: #B7B7B7;
        }

        .btn-settings {
            /* background: #e6f4f1; */
            color: #B7B7B7;
            margin-left: 5px;
        }

        .btn-settings:hover {
            background: #FFFFFF;
            color: #06414F;
        }

        .btn-logout {
            color: #B7B7B7;
        }

        .btn-logout:hover {
            background: #FFFFFF;
            color: #06414F;
        }

        .bots {
            width: 24px;
            height: 24px;
            opacity: 1;
            align-items: center;
            text-align: center;
            margin-right: 15px;

        }

        /* MAIN */
        .main {
            flex: 1;
            padding: 20px;
            margin-left: 270px;
        }

        /* TOPBAR */
        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .topbar h2 {
            color: #000000;
            font-family: Inter;
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 24px;
            line-height: 100%;
            letter-spacing: 0px;
            text-align: center;
        }

        .top-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .search {
            padding: 8px;
            border: 1px solid #B4B4B4;
            border-radius: 6px;
            width: 268;
            height: 40;
            border-radius: 12px;
            border-width: 1px;
            opacity: 1;
            gap: 10px;
            padding-top: 8px;
            padding-right: 10px;
            padding-bottom: 8px;
            padding-left: 10px;

        }

        .profile-links a:hover {
            color: #06414F;
        }

        .user {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user img {
            /* border-radius: 50%; */
            width: 50px;
            height: 50px;
            border-radius: 100px;
            opacity: 1;

        }

        .user h5 {
            font-family: Inter;
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 14px;
            line-height: 100%;
            letter-spacing: 0px;
            color: #000000;
        }

        .user span {
            font-family: Inter;
            font-weight: 500;
            font-style: Medium;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;
            color: #5E5D5D;
        }

        /* CONTENT */
        .content {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        /* SETTINGS PANEL */
        .settings {
            width: 250px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            border: solid 1px #EBEBEB;
        }

        .settings h3 {
            font-family: Inter;
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .settings p {
            font-family: Inter;
            font-weight: 500;
            font-style: Medium;
            font-size: 12px;
            line-height: 100%;
            letter-spacing: 0px;
            color: #616060;
            margin-bottom: 30px;
        }

        .settings ul {
            list-style: none;
        }

        .settings li {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 6px;
            cursor: pointer;
            display: flex;
            gap: 10px;
            color: #BCBCBC;
        }

       

        .settings li.active {
            color: #06414F;
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

          


        .set-p {
            width: 18px;
            height: 18px;
            top: 10px;
            left: 10px;
            opacity: 1;
        }




        .settings li.active {
            background: #e6f4f1;
            color: #0f766e;
        }

        .settings li.logout {
            color: red;
        }

        /* CARD */

        .card h2 {
            font-family: Inter;
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 0px;
            margin-bottom: 20px;

        }

        .card {
            flex: 1;
            background: white;
            padding: 20px;
            border: solid 1px #EBEBEB;
            border-radius: 10px;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .profile {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .profile img {
            /* border-radius: 50%; */
            width: 50;
            height: 50;
            border-radius: 100px;
            opacity: 1;

        }

        .edit {
            background: #0f766e;
            color: #fff;
            border: none;
            padding: 8px;
            border-radius: 6px;
            cursor: pointer;
        }

        /* FORM */
        h4 {
            /* margin: 20px; */
            font-family: Inter;
            font-weight: 600;
            font-style: Semi Bold;
            font-size: 16px;
            line-height: 100%;
            letter-spacing: 0px;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .full {
            grid-column: span 2;
        }

        label {
            font-size: 13px;
            color: gray;
            display: block;
            margin-bottom: 5px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        .form-buttons {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 30px;
        }

        .cancel-btn {
            padding: 10px;
            border: 1px solid #939191;
            background: white;
            color: #434343;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }

        .cancel-btn:hover {
            background: #06414F;
            color: white;
        }

        .save-btn {
            padding: 10px;
            border: none;
            border: 1px solid #939191;
            background: white;
            color: #434343;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }

        .save-btn:hover {
            background: #06414F;
            color: white;
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

    </style>

</x-layout>