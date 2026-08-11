<x-layout>

  @if ($user->company === 'Hizo')
    <x-hizoid :user="$user" />
  @elseif ($user->company === 'Glyde')
    <x-glydeid :user="$user" />
  @elseif ($user->company === 'Trazo')
    <x-trazoid :user="$user" />

  @endif
  {{-- <style>
    /* ==========================================================================
       1. System Architecture / Initialization
       ========================================================================== */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }


    body {
      font-family: 'Inter', sans-serif;
      background-color: #ffffff;
      color: #000000;
      min-height: 100vh;
      overflow-x: hidden;
    }

    .dashboard-container {
      display: flex;
      width: 100vw;
      height: 100vh;
    }

    /* ==========================================================================
       2. Master Viewport Sidebar Panel Component
       ========================================================================== */
    .sidebar {
      width: 260px;
      background-color: #06414F;
      display: flex;
      flex-direction: column;
      padding: 24px 0;
      flex-shrink: 0;
    }

    .brand-section {
      padding: 0 24px 48px 24px;
    }

    .menu-links {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      height: 100%;
    }

    .nav-list {
      list-style-type: none;
      display: flex;
      flex-direction: column;
      gap: 8px;
      padding: 0 16px;
    }

    .nav-link {
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

    .nav-link .icon {
      margin-right: 12px;
    }

    .nav-link:hover {
      background-color: #ffffff;
      color: #06414F;
      /* font-weight: 700; */
    }

    .footer-nav {
      margin-top: auto;
      padding-top: 16px;
    }

    /* ==========================================================================
       3. Main Header Viewport Bar Layout
       ========================================================================== */
    .main-viewport {
      flex: 1;
      padding: 40px 60px;
      overflow-y: auto;
      display: flex;
      flex-direction: column;
    }

    .top-bar {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin-bottom: 40px;
    }

    .parent-route {
      font-weight: 600;
      font-style: Semi Bold;
      font-size: 24px;
      line-height: 100%;
      letter-spacing: 0px;
      display: block;
      margin-bottom: 12px;
    }

    .page-title {
      font-weight: 600;
      font-style: Semi Bold;
      font-size: 24px;
      line-height: 100%;
      letter-spacing: 0px;

    }

    /* Context Global Profile Actions */
    .user-profile-widget {
      display: flex;
      align-items: center;

    }


    .profile-details {
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 6px 6px 6px 16px;
      border-radius: 30px;
    }

    .profile-email {
      font-weight: 400;
      font-style: Regular;
      font-size: 12px;
      line-height: 100%;
      letter-spacing: 0px;

    }

    .profile-avatar-fallback {
      width: 30px;
      height: 30px;
      background-color: #FAFAFA;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-weight: 400;
      font-style: Regular;
      font-size: 12px;
      line-height: 100%;
      letter-spacing: 0px;

    }

    /* ==========================================================================
       4. Display Matrix Content Grid
       ========================================================================== */
    .content-grid {
      display: grid;
      grid-template-columns: 380px 1fr;
      gap: 60px;
      align-items: start;
      max-width: 1100px;
    }

    /* ==========================================================================
       5. Graphic Identity ID Badge Component
       ========================================================================== */
    .badge-card {
      background: #ffffff;
      border-radius: 30px;
      /* border: 1px solid #e2e8f0;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04); */
      padding: 0 0 16px 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      overflow: hidden;
      text-align: center;
      position: relative;

    }

    .badge-banner {
      background-color: #06414F;
      color: #ffffff;
      display: flex;
      width: 420px;
      height: 64px;
      gap: 8px;
      opacity: 1;
      padding-top: 20px;
      padding-right: 32px;
      padding-bottom: 16px;
      padding-left: 40px;
      border-top-left-radius: 40px;
      border-top-right-radius: 40px;
      text-align: center;

    }

    .badge-avatar-container {
      margin-top: 24px;
      position: relative;

    }

    .badge-avatar {
      object-fit: cover;
      margin-top: -50px;
      width: 128px;
      height: 128px;
      border-radius: 100px;
      opacity: 1;
      border-width: 5px;
      box-shadow: 0 8px 16px -2px rgba(6, 65, 79, 0.15);
      border: 5px solid #FFFFFF;


    }

    .badge-avatar h4 {
      font-weight: 400;
      font-style: Regular;
      font-size: 14px;
      line-height: 20px;
      letter-spacing: -0.35px;
      vertical-align: middle;
      text-align: center;

    }

    .gala-img {
      background-color: #046177;
      width: 40px;
      height: 40px;
      border-radius: 4px;
      gap: 10px;
      opacity: 1;
      padding: 10px;
      align-items: center;
      margin-top: -6px;

    }

    .badge-identity {
      margin-top: 16px;
    }

    .employee-name {
      font-weight: 700;
      font-style: Bold;
      font-size: 24px;
      line-height: 32px;
      letter-spacing: -0.48px;
      text-align: center;


    }

    .employee-role {
      font-weight: 600;
      font-style: Semi Bold;
      font-size: 14px;
      line-height: 100%;
      letter-spacing: -0.48px;
      text-align: center;
      vertical-align: middle;
      color: #06414F;

    }

    .badge-id-pill {
      background-color: #04617712;
      margin: 20px 0;
      display: flex;
      flex-direction: column;
      width: 150px;
      height: 51px;
      gap: 5px;
      opacity: 1;
      padding-top: 8px;
      padding-right: 16px;
      padding-bottom: 8px;
      padding-left: 16px;
      border-radius: 100px;

    }

    .badge-id-pill .label {
      font-weight: 600;
      font-style: Semi Bold;
      font-size: 12px;
      line-height: 100%;
      letter-spacing: -0.48px;
      text-align: center;
      vertical-align: middle;
      color: #6B6B6B;

    }

    .badge-id-pill .id-number {
      font-weight: 600;
      font-style: Semi Bold;
      font-size: 12px;
      line-height: 100%;
      letter-spacing: -0.48px;
      text-align: center;


    }

    .badge-metadata {
      display: flex;
      flex-direction: column;
      /* gap: 10px; */
      /* margin-bottom: 30px; */
      width: 199px;
      height: 67px;
      gap: 8px;
      opacity: 1;
    }

    .meta-row {
      display: flex;
      justify-content: flex-start;


    }

    .meta-label {
      color: #949494;
      font-weight: 500;
      font-style: Medium;
      font-size: 14px;
      line-height: 100%;
      letter-spacing: 0px;


    }

    .meta-value {
      color: #949494;
      font-weight: 500;
      font-style: Medium;
      font-size: 12px;
      letter-spacing: 0px;
      margin-bottom: 2px;
    }

    /* Standard graphic baseline accent decoration match */
    .badge-footer {
      width: 80%;
      /* border-top: 4px solid var(--primary-teal); */
      padding-top: 16px;
      margin-top: auto;
      color: #737685;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      font-weight: 600;
      font-style: Semi Bold;
      font-size: 10px;
      line-height: 15px;
      letter-spacing: 1px;
      text-align: center;
      vertical-align: middle;
      text-transform: uppercase;

    }

    .badge-qr-code {
      position: absolute;
      bottom: 1px;
      background-color: #06414F;
      border-radius: 10px;
      width: 420px;
      height: 4.840000152587891px;
      opacity: 1;
      border-bottom-right-radius: 30px;
      border-bottom-left-radius: 30px;

    }

    /* ==========================================================================
       6. Data Specifications Table & Alert Layout
       ========================================================================== */
    .badge-details-column {
      display: flex;
      flex-direction: column;
      gap: 24px;
    }

    /* Information Container */
    .info-panel {
      border: 1px solid #BABABA;
      overflow: hidden;
      width: 483px;
      height: 296px;
      opacity: 1;
      border-radius: 12px;
      border-width: 1px;

    }

    .panel-header {
      padding: 20px 24px;
      background-color: #F1F3FF;
      width: 483px;
      height: 56px;
      gap: 10px;
      opacity: 1;
      border-top-left-radius: 12px;
      border-top-right-radius: 12px;
      padding: 16px;
      border-bottom-width: 1px;
      font-weight: 600;
      font-style: Semi Bold;
      font-size: 18px;
      line-height: 24px;
      letter-spacing: 0px;
      vertical-align: middle;
      border-bottom: 1px solid #BABABA;


    }

    .panel-body {
      padding: 0 24px 12px 24px;
      background-color: #ffffff;
    }

    .info-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 16px 0;
      border-bottom: 1px dashed #C3C6D6;
    }

    .info-row:last-child {
      border-bottom: none;
    }

    .field-name {
      font-weight: 400;
      font-style: Regular;
      font-size: 16px;
      line-height: 24px;
      letter-spacing: 0px;
      vertical-align: middle;

    }

    .field-value {
      font-weight: 600;
      font-style: Semi Bold;
      font-size: 14px;
      line-height: 20px;
      letter-spacing: 0px;
      vertical-align: middle;

    }

    /* Alert Notification Strip Callout */
    .protocol-banner {
      background-color: #FFEDE64D;
      border-left: 4px solid #06414F;
      border-radius: 8px;
      padding: 18px 20px;
      display: flex;
      gap: 16px;
    }

    .banner-icon {
      color: #06414F;
      font-size: 1.1rem;
      margin-top: 2px;
    }

    .banner-text h3 {
      font-weight: 600;
      font-style: Semi Bold;
      font-size: 14px;
      line-height: 20px;
      letter-spacing: 0px;
      vertical-align: middle;
      margin-bottom: 4px;
    }

    .banner-text p {
      font-family: Inter;
      font-weight: 400;
      font-style: Regular;
      font-size: 13px;
      line-height: 21.13px;
      letter-spacing: 0px;
      vertical-align: middle;

    }

    /* Command Actions */
    .actions-wrapper {
      display: flex;
      justify-content: flex-end;
      margin-top: 8px;
    }

    .btn-print {
      background-color: #06414F;
      color: #ffffff;
      border: none;
      /* padding: 14px 28px; */
      font-weight: 600;
      font-style: Semi Bold;
      font-size: 18px;
      line-height: 100%;
      letter-spacing: 0px;
      vertical-align: middle;

      border-radius: 8px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 10px;
      transition: background-color 0.2s ease;

      width: 148px;
      height: 54px;
      gap: 8px;
      opacity: 1;
      border-radius: 8px;
      padding: 16px;

    }


    /* 
    .btn-print:hover {
      background-color: #04313b;
    } */

    /* ==========================================================================
       7. Responsive Adaptability Configuration
       ========================================================================== */
    @media (max-width: 1024px) {
      .content-grid {
        grid-template-columns: 1fr;
        gap: 40px;
      }

      .badge-preview-column {
        display: flex;
        justify-content: center;
      }

      .badge-card {
        width: 100%;
        max-width: 400px;
      }
    }

    @media (max-width: 768px) {
      .dashboard-container {
        flex-direction: column;
      }

      .sidebar {
        width: 100%;
        height: auto;
        padding: 16px 0;
      }

      .brand-section {
        padding-bottom: 16px;
      }

      .footer-nav {
        display: none;
        /* Simplify UI viewports for standard phone scales */
      }

      .main-viewport {
        padding: 24px;
      }

      .top-bar {
        flex-direction: column;
        gap: 16px;
      }
    }
  </style>


  <body>

    <div class="dashboard-container">

      <aside class="sidebar">
        <div class="brand-section">
          <div class="logo">
            <img src="{{ asset('images/htg.png') }}" alt="">
          </div>
        </div>

        <nav class="menu-links">
          <ul class="nav-list">
            <li>
              <a href="{{ route('index.staff') }}" class="nav-link">
                <i><img src="{{ asset('images/dash.png') }}" alt=""></i> Dashboard
              </a>
            </li>
            <li>
              <a href="{{ route('index.frontId') }}" class="nav-link">
                <i><img src="{{ asset('images/employee.png') }}" alt=""></i> ID Card
              </a>
            </li>
            <li>
              <a href="{{ route('index.registry') }}" class="nav-link">
                <i><img src="{{ asset('images/attendance.png') }}" alt=""></i> Registry
              </a>
            </li>
          </ul>

          <ul class="nav-list footer-nav">
            <li>
              <a href="{{ route('staff-edit.index') }}" class="nav-link">
                <i><img src="{{ asset('images/setting.png') }}" alt=""></i> Settings
              </a>
            </li>
            <li>
              <x-logout />
            </li>
          </ul>
        </nav>
      </aside>

      <main class="main-viewport">

        <header class="top-bar">
          <div class="breadcrumb">
            <span class="parent-route">ID Card</span>
            <h1 class="page-title">Employee Identity Card</h1>
          </div>

          <div class="user-profile-widget">


            <div class="profile-details">
              <span class="profile-email">{{ $user->email }}</span>
              <div class="profile-avatar-fallback">
                @php
                $firstInitial = substr($user->first_name,0,1);
                @endphp
                @if($user->avatar)
                <img src="{{ asset('storage/' . $user->avatar) }}" alt="Profile"
                  style="width: 100%; height: 100%; object-fit: cover; border-radius: 100%;">
                @else
                {{ $firstInitial }}
                @endif


              </div>
            </div>
          </div>
        </header>

        <div class="content-grid">

          <section class="badge-preview-column">
            <div class="badge-card">
              <div class="badge-banner">
                <i><img class="gala-img" src="{{ asset('images/icon.png') }}" alt=""></i>
                <h4> Clock-In Portal</h4>
              </div>

              <div class="badge-avatar-container">
                @php
                $firstInitial = substr($user->first_name,0,1);
                $lastInitial = substr($user->last_name,0,1);

                $initials = strtoupper($firstInitial . $lastInitial);
                @endphp

                <div class="badge-avatar"
                  style="display: flex; align-items: center; justify-content: center; background-color: #E2E8F0; color: #2D3748; font-size: 36px; font-weight: 700; border: 5px solid #FFFFFF; overflow:hidden">
                  @if($user->avatar)
                  <img src="{{ asset('storage/' . $user->avatar) }}" alt="ID Photo"
                    style="width: 100%; height: 100%; object-fit: cover;">
                  @else
                  {{ $initials }}
                  @endif
                </div>
              </div>

              <div class="badge-identity">
                <h2 class="employee-name">{{ $user->first_name }} {{ $user->last_name }}</h2>
                <p class="employee-role">{{ $user->position }}</p>
              </div>

              <div class="badge-id-pill">
                <span class="label">EMPLOYEE ID</span>
                <span class="id-number">{{ $user->employee_card_id }}</span>
              </div>

              <div class="badge-metadata">
                <div class="meta-row"><span class="meta-label">Company:</span> <span class="meta-value">{{
                    $user->company }}</span></div>
                <div class="meta-row"><span class="meta-label">Phone:</span> <span class="meta-value">{{ $user->phone
                    }}</span></div>
                <div class="meta-row"><span class="meta-label">Email:</span> <span class="meta-value">{{ $user->email
                    }}</span></div>
              </div>

              <div class="badge-footer">
                <a href="{{ route('index.backId') }}" style="text-decoration: none; color: #737685">
                  YOUR PROFILE IS ONE SCAN AWAY <i class="fa-solid fa-arrows-rotate"></i>
                </a>
              </div>
              <span class="badge-qr-code"></span>
            </div>
          </section>

          <section class="badge-details-column">

            <div class="info-panel">
              <div class="panel-header">Card information</div>
              <div class="panel-body">
                <div class="info-row">
                  <span class="field-name">Issue Date</span>
                  <span class="field-value">April 15, 2026</span>
                </div>
                <div class="info-row">
                  <span class="field-name">Expiry Date</span>
                  <span class="field-value">April 15, 2028</span>
                </div>
                <div class="info-row">
                  <span class="field-name">Department</span>
                  <span class="field-value">{{ $user->department }}</span>
                </div>
                <div class="info-row">
                  <span class="field-name">Work Location</span>
                  <span class="field-value">Contemporary Building</span>
                </div>
              </div>
            </div>

            <div class="protocol-banner">
              <div class="banner-icon">
                <i><img src="{{ asset('images/protocol.png') }}" alt=""></i>
              </div>
              <div class="banner-text">
                <h3>Security Protocol</h3>
                <p>This ID card is the property of HTG Time Portal. The QR code contains encrypted employee credentials
                  . Do not share the digital image of this card on public social media.</p>
              </div>
            </div>

            <div class="actions-wrapper">
              <button class="btn-print">
                <i><img src="{{ asset('images/Group 107.png') }}" alt=""></i> Print Card
              </button>
            </div>

          </section>

        </div>
      </main>

    </div>

    --}}
</x-layout>