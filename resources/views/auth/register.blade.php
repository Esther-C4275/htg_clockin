<x-layout>

    <div class="container">

        <!-- LEFT SIDE (FORM) -->
        <form action="{{ route('register.store') }}" method="POST">
            @csrf

            <div class="form-section">
                <h1>Create Account</h1>

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
                <p class="subtitle">
                    Join the portal to clock in, track time and stay organized.
                </p>

                <div class="form-grid">

                    <!-- Personal Info -->
                    <div class="form-group">
                        <h3>Personal Information</h3>

                        <label for="html">First Name</label>
                        <input type="text" name="first_name" placeholder="First name" required>

                        <label for="html">Last Name</label>
                        <input type="text" name="last_name" placeholder="Last name" required>

                        <label for="html">Email</label>
                        <input type="email" name="email" placeholder="Email Address" required>

                        <label for="html">Date of birth</label>
                        <input type="date" name="date_of_birth" required>

                        <label for="html">Phone Number</label>
                        <input type="tel" name="phone" placeholder="Enter your phone number" required>



                        <label for="html">Gender</label>
                        <select class="gender" name="gender" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>



                        <h3>Security</h3>
                        <label for="html">Password</label>
                        <input type="password" name="password" placeholder="Must be at least 8 characters" required>
                        <label for="html">Confirm password</label>
                        <input type="password" name="password_confirmation">
                    </div>

                    <!-- Work Info -->
                    <div class="form-group">
                        <h3>Work Information</h3>

                        <label for="html">Company</label>
                        <input type="text" name="company" placeholder="Hizo/Glyde/Trazo" required>

                        <label for="html">Position</label>
                        <input type="text" name="position" placeholder="e.g Developer" required>

                        <label for="html">Department</label>
                        <input type="text" name="department" placeholder="e.g Engineering" required>

                        <h3>Address</h3>

                        <label for="html">Residential Address</label>
                        <input type="text" name="address" placeholder="No.34 Nwaeze street" required>


                        <label for="html">Country</label>
                        <select name="country" id="country" required>
                            <option value="" disabled {{ !old('country') ? 'selected' : '' }}>Select country</option>
                            <option value="Nigeria" {{ old('country') == 'Nigeria' ? 'selected' : '' }}>Nigeria</option>
                            <option value="Ghana" {{ old('country') == 'Ghana' ? 'selected' : '' }}>Ghana</option>
                            <option value="United Kingdom" {{ old('country') == 'United Kingdom' ? 'selected' : '' }}>
                                United Kingdom</option>
                            <option value="United States" {{ old('country') == 'United States' ? 'selected' : '' }}>United
                                States</option>
                            <option value="Kenya" {{ old('country') == 'Kenya' ? 'selected' : '' }}>Kenya</option>
                        </select>

                        <br>
                        <br>

                        <label for="html">State Of Origin</label>
                        <select id="state-of-origin" name="state" required>
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

                </div>

                <button type="submit" class="btn">Sign Up</button>
            </div>
        </form>

        <span></span>
        <!-- RIGHT SIDE (IMAGE) -->
        <div class="image-section">
            <img src="{{ asset('images/pic.jpeg') }}" alt="test">
        </div>

    </div>




    <style>
        body {
            background: #f5f7fb;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }

        /* MAIN CONTAINER */
        .container {
            display: flex;
            align-items: center;
            width: 100%;
            background: #FFFFFF;
            overflow-y: auto;
            margin-top: 100px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            gap: 10px;
        }

        /* LEFT SIDE */
        .form-section {
            flex: 2;
            padding: 40px;
        }

        .form-section h1 {
            margin-bottom: 10px;
        }

        .subtitle {
            color: #605F5F;
            margin-bottom: 30px;
        }

        /* GRID */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
        }

        /* INPUT GROUP */
        .form-group h3 {
            margin-bottom: 10px;
            color: #000000;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            outline: none;
        }

        .form-group input:focus {
            border-color: #0a66c2;
        }

        select {
            border: 1px solid #D6D3D3;
            width: 100%;
            border-radius: 8px;
            /* rounded corners */
            padding: 8px;
            /* space inside */
            outline: none;
            /* removes default focus outline */
        }

        select.gender {
            display: block;
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #D6D3D3;
            border-radius: 6px;
            outline: none;
            font-size: 14px;
            color: #333333;
            background-color: #ffffff;
            box-sizing: border-box;

        }



        span {
            border-left: 1px solid black;
            height: 790px;
            margin-top: 20px;
        }

        /* BUTTON */
        .btn {
            width: 100%;
            padding: 14px;
            background: #06414F;
            color: #fff;
            border: none;
            border-radius: 6px;
            margin-top: 20px;
            cursor: pointer;
            font-size: 16px;
        }

        /* .btn:hover {
  background: #06414F;
} */

        /* RIGHT SIDE */
        .image-section {
            flex: 1;
            background: #fafafa;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-section img {
            width: 529.07px;
            height: 857.25px;
            opacity: 1;
            border-radius: 12px;
            top: 9.75px;
            left: 743px;

        }

        /* RESPONSIVE */
        @media (max-width: 640px) {
            .container {
                flex-direction: column;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .image-section {
                display: none;
            }
        }
    </style>
</x-layout>