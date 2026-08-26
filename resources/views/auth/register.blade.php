<x-layout>

    <div class="registration-wrapper">
        <div class="container">

            <!-- FORM SECTION -->
            <form action="{{ route('register.store') }}" method="POST">
                @csrf

                <div class="form-section">
                    <h1>Create Account</h1>

                    @if ($errors->any())
                        <div class="error-alert">
                            <strong>Fix these errors to save:</strong>
                            <ul>
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

                        <!-- Personal Info Column -->
                        <div class="form-group">
                            <h3 class="section-title">Personal Information</h3>

                            <label for="first_name">First Name</label>
                            <input type="text" id="first_name" name="first_name" placeholder="First name" required>

                            <label for="last_name">Last Name</label>
                            <input type="text" id="last_name" name="last_name" placeholder="Last name" required>

                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email Address" required>

                            <label for="date_of_birth">Date of birth</label>
                            <input type="date" id="date_of_birth" name="date_of_birth" required>

                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

                            <label for="gender">Gender</label>
                            <select id="gender" name="gender" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>

                            <h3 class="section-title security-title">Security</h3>
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Must be at least 8 characters" required>

                            <label for="password_confirmation">Confirm password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password">
                        </div>

                        <!-- Work Info Column -->
                        <div class="form-group">
                            <h3 class="section-title">Work Information</h3>

                            <label for="company">Company</label>
                            <input type="text" id="company" name="company" placeholder="Hizo/Glyde/Trazo" required>

                            <label for="position">Position</label>
                            <input type="text" id="position" name="position" placeholder="e.g Developer" required>

                            <label for="department">Department</label>
                            <input type="text" id="department" name="department" placeholder="e.g Engineering" required>

                            <h3 class="section-title">Address</h3>

                            <label for="address">Residential Address</label>
                            <input type="text" id="address" name="address" placeholder="No.34 Nwaeze street" required>

                            <label for="country">Country</label>
                            <select name="country" id="country" required>
                                <option value="" disabled {{ !old('country') ? 'selected' : '' }}>Select country</option>
                                <option value="Nigeria" {{ old('country') == 'Nigeria' ? 'selected' : '' }}>Nigeria</option>
                                <option value="Ghana" {{ old('country') == 'Ghana' ? 'selected' : '' }}>Ghana</option>
                                <option value="United Kingdom" {{ old('country') == 'United Kingdom' ? 'selected' : '' }}>United Kingdom</option>
                                <option value="United States" {{ old('country') == 'United States' ? 'selected' : '' }}>United States</option>
                                <option value="Kenya" {{ old('country') == 'Kenya' ? 'selected' : '' }}>Kenya</option>
                            </select>

                            <label for="state-of-origin">State Of Origin</label>
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

            <div class="divider-line"></div>

            <!-- RIGHT SIDE (IMAGE) -->
            <div class="image-section">
                <img src="{{ asset('images/pic.jpeg') }}" alt="Registration Illustration">
            </div>

        </div>
    </div>

    <style>
        /* Base Setup */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        main{
            width: 100%;
        }

        body {
            background-color: #ffffff;;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            min-height: 100vh;
        }

        .registration-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            min-height: 100vh;
            padding: 0;
        }

        /* Container Layout */
        .container {
            display: flex;
            width: 100vw; 
            min-height: 100vh; 
            max-width: 100%; 
            background: #ffffff;
            border-radius: 0; 
            box-shadow: none; 
            overflow: hidden;
        }

        form {
            flex: 2;
            width: 100%;
        }

        .form-section {
            padding: 40px;
        }

        .form-section h1 {
            font-size: 28px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #64748b;
            font-size: 14px;
            margin-bottom: 28px;
        }

        .error-alert {
            background: #FEE2E2;
            color: #991B1B;
            padding: 14px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        /* Form Grid */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .section-title {
            font-size: 16px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 16px;
            margin-top: 8px;
        }

        .security-title {
            margin-top: 24px;
        }

        /* Input Controls */
        label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #334155;
            margin-bottom: 6px;
        }

        input, select {
            width: 100%;
            padding: 12px 14px;
            margin-bottom: 16px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 14px;
            color: #0f172a;
            background-color: #ffffff;
            outline: none;
            transition: border-color 0.2s ease;
        }

        input:focus, select:focus {
            border-color: #06414F;
            box-shadow: 0 0 0 3px rgba(6, 65, 79, 0.1);
        }

        /* Button */
        .btn {
            width: 100%;
            padding: 14px;
            background: #06414F;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            margin-top: 12px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 700;
            transition: background 0.2s ease;
        }

        .btn:hover {
            background: #042f39;
        }

        /* Divider & Right Side Image */
        .divider-line {
            width: 1px;
            background-color: #e2e8f0;
            margin: 20px 0;
        }

        .image-section {
            flex: 1;
            
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .image-section img {
            width: 100%;
            max-width: 450px;
            height: auto;
            border-radius: 12px;
            object-fit: cover;
        }

        /* Mobile Breakpoint Rules */
        @media (max-width: 900px) {
            .registration-wrapper {
                padding: 16px 12px;
            }

            .container {
                box-shadow: none;
                border-radius: 12px;
            }

            .form-section {
                padding: 24px 16px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .image-section,
            .divider-line {
                display: none !important;
            }

            .form-section h1 {
                font-size: 24px;
            }

            .subtitle {
                font-size: 13px;
                margin-bottom: 20px;
            }
        }

       
@media (max-width: 768px) {
    .registration-wrapper {
        padding: 9px;
        align-items: flex-start; 
    }

    .container {
        flex-direction: column;
        min-height: auto;
        box-shadow: none;
        border-radius: 12px;
    }

    form {
        flex: none;
        width: 100%;
    }

    .form-section {
        padding: 28px 20px;
    }

    .form-section h1 {
        font-size: 24px;
        margin-bottom: 6px;
    }

    .subtitle {
        font-size: 13px;
        margin-bottom: 22px;
    }

   
    .form-grid {
        grid-template-columns: 1fr;
        gap: 8px;
    }

    .section-title {
        font-size: 15px;
        margin-top: 12px;
        margin-bottom: 12px;
    }

    .security-title {
        margin-top: 20px;
    }

    
    label {
        font-size: 13px;
        margin-bottom: 5px;
    }

    input,
    select {
        padding: 11px 13px;
        margin-bottom: 14px;
        font-size: 14px;
    }

    .btn {
        padding: 13px;
        font-size: 15px;
        margin-top: 8px;
    }

   
    .image-section,
    .divider-line {
        display: none !important;
    }

    input[type="date"] {
                width: 100% !important;
                max-width: 100% !important;
                box-sizing: border-box !important;
                -webkit-appearance: none;
                min-height: 46px;
            }
}
    </style>
</x-layout>