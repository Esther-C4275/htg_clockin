<x-layout>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Inter', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      overflow-x: hidden;
    }

    .login-container {
      display: flex;
      width: 100vw;
      height: 100vh;
      /* background-color: #ffffff; */
    }

    .left-panel {
      flex: 1;
      background-color: #06414F;
      display: block;
    }

    .right-panel {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #ffffff;
      padding: 40px;
      position: relative;
      box-shadow: inset 0px 0px 25px -2px #00000080;
      z-index: 5;
    }

    .form-wrapper {
      width: 100%;
      max-width: 440px;
    }

    /* Typography Header */
    .form-header h1 {
      font-size: 32px;
      font-weight: 700;
      font-style: Bold;
      font-size: 32px;
      line-height: 100%;
      letter-spacing: 0%;
      margin-bottom: 8px;

    }

    .form-header p {
      font-size: 16px;
      font-weight: 500;
      font-style: Medium;
      line-height: 100%;
      letter-spacing: 0%;
      color: #605F5F;
      margin-bottom: 32px;

    }

    .input-group {
      margin-bottom: 24px;
    }

    .input-group label {
      display: block;
      font-weight: 500;
      font-style: Medium;
      font-size: 16px;
      line-height: 100%;
      letter-spacing: 0px;
      margin-bottom: 8px
    }

    .input-wrapper {
      position: relative;
      display: flex;
      align-items: center;
    }

    .input-wrapper input {
      width: 100%;
      padding: 16px 20px;
      background-color: #ECECEC;
      /* Light grey block style inputs */
      border: none;
      border-radius: 25px;
      /* Fully rounded capsule input elements */
      font-size: 0.95rem;
      font-family: inherit;
      color: #222222;
      outline: none;
      /* transition: background-color 0.2s ease; */
    }

    .input-wrapper input::placeholder {
      color: #aaaaaa;
    }

    /* Padding adjustments for input layout based on icons */
    #email {
      padding-left: 45px;
    }

    #password {
      padding-right: 45px;
    }

    /* Styling internal decorators */
    .input-icon {
      position: absolute;
      color: #A1A1A1;
      font-size: 1.1rem;
      display: flex;
      align-items: center;
      justify-content: center;
      pointer-events: none;
    }

    .left-icon {
      background: #FFFFFF;
      font-weight: 400;
      padding: 21px;
      border-radius: 100px;
      left: 0px;
      list-style: none;
      width: 24px;
      height: 24px;

    }

    .right-icon {
      right: 0px;
      background: #FFFFFF;
      font-weight: 400;
      padding: 21px;
      border-radius: 100px;
      width: 24px;
      height: 24px;
    }

    /* ==========================================================================
           6. Form Options Row
           ========================================================================== */
    .form-options {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 0.85rem;
      margin-bottom: 40px;
    }

    /* Checkbox Restyle */
    .checkbox-container {
      display: flex;
      align-items: center;
      cursor: pointer;
      font-weight: 500;
      user-select: none;
      font-style: Medium;
      font-size: 14px;
      line-height: 100%;
      letter-spacing: 0px;

    }

    .checkbox-container input {
      margin-right: 8px;
      accent-color: #064452;
      width: 15px;
      height: 15px;
    }

    .forgot-password {
      color: #000000;
      text-decoration: none !important;
      font-weight: 800;

    }

    /* ==========================================================================
           7. Buttons & Footers
           ========================================================================== */
    .login-btn {
      width: 100%;
      padding: 16px;
      background-color: #06414F;
      color: #ffffff;
      border: none;
      border-radius: 25px;
      font-size: 18px;
      font-weight: 500;
      letter-spacing: 0px;
      cursor: pointer;
      margin-bottom: 24px;
    }


    .login-btn:active {
      transform: scale(0.99);
    }

    .form-footer {
      text-align: center;

      font-weight: 500;
      font-style: Medium;
      font-size: 16px;
      line-height: 100%;
      letter-spacing: 0px;

    }

    .signup-link {
      color: #064452;
      text-decoration: none;
      font-weight: 700;
      margin-left: 4px;
    }


    /* ==========================================================================
           8. Responsive Media Queries
           ========================================================================== */
    @media (max-width: 900px) {

      /* Collapse layout into a standard single card for tablet/mobile viewports */
      .left-panel {
        display: none;
      }

      .right-panel {
        flex: 1;
        box-shadow: none;
        padding: 24px;
      }
    }
  </style>

  <body>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const showPasswordCheckbox = document.getElementById('show-password');

        if (showPasswordCheckbox) {
          showPasswordCheckbox.addEventListener('change', function () {

            const passwordField = document.querySelector('input[name="password"]')
              || document.querySelector('input[type="password"]')
              || document.querySelector('.form-group input');

            if (passwordField) {

              passwordField.type = this.checked ? 'text' : 'password';
            } else {
              console.error("Could not find the password input element on the page.");
            }
          });
        } else {
          console.error("Could not find the checkbox element with id='show-password'.");
        }
      });
    </script>


    <div class="login-container">

      <!-- Left Decorative Side Panel -->
      <div class="left-panel"></div>

      <!-- Right Form Panel -->
      <div class="right-panel">
        <div class="form-wrapper">

          <header class="form-header">
            <h1>USER LOGIN</h1>
            <p>Welcome back kindly enter your details</p>
          </header>

          <form action="{{ route('login.authenticate') }}" method="POST">
            @csrf
            @if ($errors->any())
              <div style="background: #FEE2E2; color: #991B1B; padding: 15px; border-radius: 6px; margin-bottom: 20px;">
                <strong>Fix these errors to save:</strong>
                <ul style="margin-top: 5px; padding-left: 20px;">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <!-- Email Input Group -->
            <div class="input-group">
              <label for="email">Email Address</label>

              <div class="input-wrapper">
                <span class="input-icon left-icon">
                  <li><img src="{{ asset('images/Frame 113.png') }}" alt=""></li>
                </span>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
              </div>
            </div>

            <!-- Password Input Group -->
            <div class="input-group">
              <label for="password">Password</label>
              <div class="input-wrapper">
                <input type="password" id="password-field" name="password" placeholder="Enter your password" required>
                <span class="input-icon right-icon"><i><img src="{{ asset('images/Frame 112.png') }}" alt=""></i></span>
              </div>
            </div>

            <!-- Options Row (Remember / Forgot) -->
            <div class="form-options">
              <label class="checkbox-container">
                <input type="checkbox" id="show-password">
                <span class="checkmark"></span>
                Show password
              </label>
              <a href="{{ route('password.request') }}"
                style="text-decoration: none; font-weight: 700; color: black;">Forgot Password</a>
            </div>

            <!-- Action Button -->
            <button type="submit" class="login-btn">LOGIN</button>

          </form>

          <!-- Footer Navigation -->
          <footer class="form-footer">
            <p>Don't have an account? <a href="{{ route('register') }}" class="signup-link">Sign up</a></p>
          </footer>

        </div>
      </div>

    </div>

  </body>

</x-layout>