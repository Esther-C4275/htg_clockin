@props(['user'])

<style>
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

  .breadcrumb {
    margin-right: 400px;
  }

  #breadcrumbs {
    display: none;
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

  .sidebar-close {
    display: none;
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

  .setting-links {
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

  .setting-links:hover {
    background-color: #ffffff;
    color: #06414F;
  }

  .setting-link {
    display: none;
  }

  .user-email {
    display: none;
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
    text-align: center;
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
    width: 35px;
    height: 35px;
    background-color: #E2EEF9;
    ;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    color: #06414F;
    font-style: Regular;
    font-size: 14px;
    line-height: 100%;
    letter-spacing: 0px;
    border: 1px solid #C5DCF2;

  }


  .profile-avatar-fallbacks {
    width: 100%;
    height: 100%;
    color: #43E292;
    background-color: #0a292c;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 44px;


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
    background-image: url(./images/HIZO\ ID\ CARD\ \(2\).png);
    width: 312px;
    height: 504px;
    background-repeat: no-repeat;
    padding: 0 0 16px 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    overflow: hidden;
    text-align: center;
    position: relative;
    margin-left: 80px;

  }

  .hizo-logo {
    background-color: #FFFFFF;
    width: 290px;
    height: 200px;
    gap: 24px;
    opacity: 1;
    left: 11px;
    border-bottom-right-radius: 50px;
    border-bottom-left-radius: 50px;
    padding-top: 32px;
    padding-right: 24px;
    padding-bottom: 24px;
    padding-left: 24px;


  }

  .hizo-logo p {
    font-weight: 500;
    font-size: 14px;
    line-height: 100%;
    letter-spacing: 0%;
    text-align: left;

  }

  .hizo-logo span {
    font-weight: 600;
    font-style: Semi Bold;
    font-size: 14px;
    line-height: 100%;
    letter-spacing: 0%;

  }





  .badge-footer {
    width: 80%;

    padding-top: 16px;
    margin-top: auto;
    color: #3FDE91;
    display: inline-block;
    align-items: center;
    justify-content: center;
    gap: 6px;
    font-weight: 700;
    font-style: Bold;
    font-size: 18px;
    line-height: 100%;
    letter-spacing: 0%;
    text-align: start;
    vertical-align: middle;

    margin-left: 115px;
  }


  .codes-Qr {
    width: 110px;
    height: 110px;
  }



  .qr-code {
    margin-top: -28px;
    background-color: #ffffff;
    border-radius: 12px;
    padding: 10px;
    box-shadow: 0px 4px 5px 0px #00000040;
    box-shadow: 4px 0px 4px 0px #00000040;
    top: 201px;
    left: 96px;
    gap: 10px;
    opacity: 1;


  }

  .office-details {
    font-weight: 500;
    font-style: Medium;
    font-size: 16px;
    line-height: 125%;
    letter-spacing: 0%;
    color: #3DE091;
    margin-top: 30px;
    margin-right: 170px;



  }

  .office-detail {
    font-weight: 400;
    font-size: 14px;
    line-height: 100%;
    letter-spacing: 5%;
    color: #ffffff;
    margin-left: 10px;
    text-align: left;

  }

  */

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
    padding: 20px;
    display: flex;
    gap: 16px;
    margin-top: 30px;
    width: 80%;
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
    margin-right: 122px;
    border-radius: 8px;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: background-color 0.2s ease;
    margin-top: 10px;
    width: 148px;
    height: 54px;
    gap: 8px;
    opacity: 1;
    border-radius: 8px;
    padding: 16px;

  }

  .badge-card-front {
    background-image: url('/images/HIZO ID CARD.svg');
    background-repeat: no-repeat;
    padding: 16px;
    display: flex;
    flex-direction: column;
    align-items: center;
    overflow: hidden;
    text-align: center;
    position: relative;
    width: 312px;
    height: 504px;
    margin-left: 80px;
  }

  .badge-avatar-container {
    margin-top: 101px;
    z-index: 1;
  }

  .badge-form {
    border: 5px solid #3DE091;
    background-color: #0B2E32;
    width: 280px;
    height: 165px;
    opacity: 1;
    top: 267px;
    left: 16px;
    gap: 24px;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    border-bottom-left-radius: 30px;
    border-width: 5px;
    padding: 16px;
    margin-top: -28px;


  }

  .personal {
    margin-right: 175px;
  }

  .personal-info {
    display: flex;
    margin-top: 20px;
    text-align: center;
    align-items: center;
    background-color: #3DE091;
    width: 248px;
    height: 58px;
    opacity: 1;
    gap: 12px;
    padding: 10px;
    border-radius: 100px;

  }

  .personal-info h3 {
    font-weight: 500;
    font-style: Medium;
    font-size: 16px;
    line-height: 100%;
    letter-spacing: 0%;
    text-align: center;

  }

  .name-small {
    font-weight: 500;
    font-style: Medium;
    font-size: 18px;
    line-height: 100%;
    letter-spacing: -2%;
    color: #ffffff;

  }

  .name-big {
    font-family: Inter;
    font-weight: 700;
    font-style: Bold;
    font-size: 24px;
    line-height: 100%;
    letter-spacing: -2%;
    text-align: center;
    color: #ffffff;

  }



  /* Standard graphic baseline accent decoration match */
  .badge-footer {
    width: 80%;
    /* border-top: 4px solid var(--primary-teal); */
    padding-top: 16px;
    margin-top: auto;
    color: #3FDE91;
    display: inline-block;
    align-items: center;
    justify-content: center;
    gap: 6px;
    font-weight: 400;
    font-style: Semi Bold;
    font-size: 14px;
    line-height: 15px;
    letter-spacing: 20%;
    text-align: start;
    vertical-align: middle;
    text-transform: uppercase;
    margin-right: 100px;
  }


  .badge-footer2 {
    width: 80%;

    padding-top: 16px;
    margin-top: auto;
    color: #3FDE91;
    display: inline-block;
    align-items: center;
    justify-content: center;
    gap: 6px;
    font-weight: 700;
    font-style: Semi Bold;
    font-size: 18px;
    line-height: 15px;
    text-align: center;
    vertical-align: middle;

  }

  .badge-qr-code {
    position: absolute;
    bottom: 1px;
    background-color: #06414f;
    border-radius: 10px;
    width: 420px;
    height: 4.840000152587891px;
    opacity: 1;
    border-bottom-right-radius: 30px;
    border-bottom-left-radius: 30px;
  }

  .id-card-container {
    width: 312px;
    height: 504px;
    perspective: 1200px;
  }

  .id-card {
    width: 100%;
    height: 100%;
    position: relative;
    transform-style: preserve-3d;
    transition: transform .8s ease;
  }

  .id-card.flip {
    transform: rotateY(180deg);
  }

  .id-card-front,
  .id-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
  }

  .id-card-back {
    transform: rotateY(180deg);
  }

  /* ==========================================================================
   8. Strict Production Print Engine Isolator (Hizo Single-Page Side-by-Side)
   ========================================================================== */
  @media print {

    .sidebar,
    .top-bar,
    .info-panel,
    .protocol-banner,
    .actions-wrapper,
    .brand-section,
    header,
    nav {
      display: none !important;
    }


    html,
    body {
      background: #ffffff !important;
      color: #000000 !important;
      margin: 0 !important;
      padding: 0 !important;
      width: auto !important;
      height: auto !important;
    }


    .dashboard-container,
    .main-viewport,
    .content-grid,
    .badge-preview-column {
      display: block !important;
      position: static !important;
      width: 100% !important;
      height: auto !important;
      margin: 0 !important;
      padding: 0 !important;
      transform: none !important;
    }


    .id-card-container {
      display: flex !important;
      flex-direction: row !important;
      gap: 20px !important;
      width: 100% !important;
      height: auto !important;
      justify-content: center !important;
      margin: 40px auto !important;
      perspective: none !important;
      left: 0 !important;


      transform: scale(0.85) !important;
      transform-origin: top center !important;
    }


    .id-card {
      display: flex !important;
      flex-direction: row !important;
      gap: 20px !important;
      width: auto !important;
      height: auto !important;
      transform: none !important;
      transform-style: flat !important;
    }


    .id-card-front,
    .id-card-back {
      position: relative !important;
      width: 312px !important;
      height: 504px !important;
      backface-visibility: visible !important;
      transform: none !important;
      top: 0 !important;
      left: 0 !important;
    }


    .badge-card-front,
    .badge-card {
      margin-left: 0 !important;
      position: relative !important;
      left: 0 !important;
      top: 0 !important;
      width: 312px !important;
      height: 504px !important;
    }


    .badge-footer i,
    .badge-footer2 i {
      display: none !important;
    }


    * {
      -webkit-print-color-adjust: exact !important;
      print-color-adjust: exact !important;
    }
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
      padding-left: 10px;
      padding-right: 10px;
    }

    .badge-card {
      width: 100%;
      max-width: 400px;
    }
  }

  @media (max-width: 768px) {
    body {
      overflow-x: hidden;
    }

    .dashboard-container {
      flex-direction: column;
    }

    /* Sidebar Drawer Reset */
         .sidebar {
              position: fixed;
                top: 0;
                left: -100%;
                width: 78%;
                max-width: 300px;
                height: 100vh;
                height: 100dvh;
                background: #06414F;
                padding: 24px 20px calc(24px + env(safe-area-inset-bottom, 0px)) 20px;
                z-index: 2000;
                transition: left .3s ease;
                border-top-right-radius: 40px;
                border-bottom-right-radius: 40px;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                box-sizing: border-box;
                overflow: hidden;
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
      font-size: 18px;
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

    .logo {
      margin-left: -13px;
    }

    .setting-links {
      display: none;
    }

    .setting-link {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      text-align: left;
      padding: 12px;
      gap: 5px;
      margin-left: -5px;
      width: 100%;
      text-decoration: none;
      font-size: 18px;
      font-weight: 500;
      color: #b7b7b7;
      border-radius: 8px;
    }

    .setting-link i {
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
      line-height: 1;
    }

    .nav-links {
      display: none;
    }


    .user-email {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 10px 12px;
      margin-bottom: -12px;
      width: 100%;
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

    .user-profile-item .profile-pic img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 50%;
    }



    .main-viewport {
      padding: 16px;
      width: 100%;
      box-sizing: border-box;
    }

    .top-bar {
      display: block;
      margin-bottom: 20px;
    }

    .breadcrumb {
      display: none;
    }

    #breadcrumbs {
      display: flex;
      flex-direction: column;
      gap: 2px;
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
      margin-top: -56px;
      margin-left: 346px;
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

    .mobile-brand {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 8px;
    }

    .mobile-brand img {
      width: 68px;
      height: 30px;
    }

    .user-profile-widget,
    .parent-route {
      display: none;
    }

    .page-title {
      margin-top: 15px;
    }


    .badge-preview-column {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      padding: 0;
    }

    .id-card-container {
      perspective: 1000px;
    }

    .id-card-front,
    .id-card-back {
      backface-visibility: hidden !important;
      -webkit-backface-visibility: hidden !important;
      transform-style: preserve-3d;
      -webkit-transform-style: preserve-3d;
    }


    .id-card.flip .id-card-front {
      visibility: hidden !important;
      pointer-events: none;
    }

    .id-card:not(.flip) .id-card-back {
      visibility: hidden !important;
      pointer-events: none;
    }


    .badge-card-front,
    .badge-card,
    .id-card-back {
      margin-left: 0 !important;
    }


    .badge-details-column {
      width: 100%;
      align-items: center;
    }

    .info-panel {
      width: 100%;
      max-width: 393px;
      height: auto;
    }

    .panel-header {
      width: 100%;
    }

    .protocol-banner {
      width: 100%;
      max-width: 393px;
      height: auto;
      margin-top: 12px;
    }

    .banner-text h3 {
      font-weight: 600;
      font-size: 12px;
    }

    .banner-text p {
      font-size: 11px;
      line-height: 1.4;
    }

    .actions-wrapper {
      width: 100%;
      justify-content: center;
    }

    .btn-print {
      margin-right: 0;
    }

    .brand-section {
      padding: 0 12px 32px 12px;
    }


    .nav-list {
      list-style-type: none;
      display: flex;
      flex-direction: column;
      gap: 8px;
      padding: 0 8px;
      margin-left: -28px
    }


    .nav-link {
      display: flex;
      align-items: center;
      text-decoration: none;
      padding: 10px 12px;
      color: #B7B7B7;
      gap: 8px;
      font-size: 18px;
      font-weight: 500;
      border-radius: 8px;
    }



    .user-email-text {
      max-width: 157px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      display: block;
    }
  }
</style>

<link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="dashboard-container">

    <aside class="sidebar">
      <div class="brand-section">
        <div class="logo">
          <a href="{{ route('index.staff') }}" class="logo-link">
            <img src="{{ asset('images/Artboard 1 2.svg') }}" alt="Home">
          </a>
        </div>
      </div>

      <nav class="menu-links">
        <ul class="nav-list">
          <li>
            <a href="{{ route('index.staff') }}" class="nav-link">
              <i><img src="{{ asset('images/dash.svg') }}" alt=""></i> Dashboard
            </a>
          </li>
          <li>
            <a href="{{ route('index.frontId') }}" class="nav-link">
              <i><img src="{{ asset('images/employee.svg') }}" alt=""></i> ID Card
            </a>
          </li>
          <li>
            <a href="{{ route('index.registry') }}" class="nav-link">
              <i><img src="{{ asset('images/attendance.svg') }}" alt=""></i> Registry
            </a>
          </li>
          <li>
            <a href="{{ route('staff-edit.index') }}" class="setting-link">
              <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
              <span>Settings</span>
            </a>
          </li>
        </ul>

        <ul class="nav-list footer-nav">
          <li>
            <div class="user-email" style="color: #B7B7B7">
              @php
                $firstInitial = strtoupper(substr($user->first_name, 0, 1));
              @endphp

              <div class="profile-pic">
                @if($user->avatar)
                  <img src="{{ asset('storage/' . $user->avatar) }}" alt="Profile"
                    style="width: 100%; height: 100%; object-fit: cover; border-radius: 100%;">
                @else
                  <span>{{ $firstInitial }}</span>
                @endif
              </div>

              <span class="user-email-text" title="{{ $user->email }}">
                {{ $user->email }}
              </span>
            </div>
          </li>

          <li>
            <a href="{{ route('staff-edit.index') }}" class="setting-links">
              <i><img src="{{ asset('images/setting.svg') }}" alt="Settings"></i>
              <span>Settings</span>
            </a>
          </li>
          <li>
            <x-logout />
          </li>
        </ul>
      </nav>

      <button class="sidebar-close" id="sidebarClose">
        ×
      </button>

    </aside>

    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <main class="main-viewport">

      <header class="top-bar">
        <div class="mobile-brand">
          <a href="{{ route('index.staff') }}" class="mobile-logo-link">
            <img src="{{ asset('images/Artboard 1-1 2.svg') }}" class="mobile-logo" alt="HTG">
          </a>
        </div>
        <div class="hamburger">

          <button class="hamburger-btn" id="openSidebar">
            <img src="{{ asset('images/breadcrumb.svg') }}">
            {{-- <i class="fa-solid fa-align-right"></i> --}}
          </button>
        </div>
        <div class="breadcrumb">
          <span class="parent-route">ID Card</span>
          <h1 class="page-title">Employee Identity Card</h1>
        </div>

        <div id="breadcrumbs">
          <span class="parent-route">ID Card</span>
          <h1 class="page-title">Employee Identity Card</h1>
        </div>

        <div class="user-profile-widget">



          <div class="profile-details">
            <span class="profile-email">{{ $user->email }}</span>
            <div class="profile-avatar-fallback">
              <div class="profile-avatar-fallback" style="overflow: hidden; 
                width: 100%; 
                height: 100%; 
                color: #06414F; 
                border-radius: 50%; 
                display: flex; 
                align-items: center; 
                justify-content: center; 
                font-weight: 700; 
                font-size: 13px;
                flex-shrink: 0;
                padding: 0;">


                @if($user->avatar)

                  <img src="{{ asset('storage/' . $user->avatar) }}" alt="Profile"
                    style="width: 100%; height: 100%; object-fit: cover; display: block;">
                @else
                  @php
                    $firstInitial = substr($user->first_name, 0, 1);

                   @endphp
                  <div class="profile-avatar-fallback">{{ $firstInitial }}</div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="content-grid">

        <section class="badge-preview-column">

          <div class="id-card-container">

            <div class="id-card" id="idCard">

              <!-- FRONT -->
              <div class="id-card-front">

                <div class="badge-card-front">

                  <div class="badge-avatar-container" style="overflow: hidden; 
                   overflow: hidden; 
                  width: 160px; 
                  height: 160px; 
                  border-radius: 50%; 
                  display: flex; 
                  align-items: center; 
                  justify-content: center; 
                  flex-shrink: 0;
                  padding: 0;
                  border-left: 5px solid #3DDE93;">



                    @if($user->avatar)

                      <img src="{{ asset('storage/' . $user->avatar) }}" alt="Profile"
                        style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    @else
                      @php
                        $firstInitial = substr($user->first_name, 0, 1);
                        $lastInitial = substr($user->last_name, 0, 1);

                        $initials = strtoupper($firstInitial . $lastInitial)
                       @endphp
                      <div class="profile-avatar-fallbacks">{{ $initials }}</div>
                    @endif
                  </div>

                  <div class="badge-form">

                    <div class="personal">
                      <h5 class="name-small">{{ $user->first_name }}</h5>
                      <h6 class="name-big">{{ $user->last_name }}</h6>
                    </div>

                    <div class="personal-info">
                      <img src="{{ asset('images/Frame 1283.png') }}" alt="">
                      <h3>{{ $user->position }}</h3>
                    </div>

                  </div>

                  <div class="badge-footer">
                    HIZO TECHNOLOGIES
                    <i class="fa-solid fa-arrows-rotate" onclick="flipCard()" style="cursor:pointer;"></i>
                  </div>

                </div>

              </div>

              <!-- BACK -->
              <div class="id-card-back">

                <div class="badge-card">

                  <div class="hizo-logo">
                    <img src="{{ asset('images/HIZO LOGO.png') }}" alt="">
                    <p>
                      This card is a recognized property of
                      <span>Hizo Technologies</span>.
                      Please if found kindly return to the designated address present on this card.
                    </p>
                  </div>

                  <div class="qr-code">

                    <img
                      src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ urlencode(route('staff.id', $user->uuid)) }}"
                      alt="Employee Profile QR Code" style="width: 110px; height: 110px; object-fit: contain;">

                  </div>

                  <h3 class="office-details">
                    Office Address:
                  </h3>

                  <span class="office-detail">
                    2nd Floor, Contemporary Building,
                    Interbua Roundabout,
                    Summit Rd,
                    Asaba, Delta State.
                  </span>

                  <div class="badge-footer2">
                    hizo.africa
                    <i class="fa-solid fa-arrows-rotate" onclick="flipCard()"
                      style="font-size:12px; cursor:pointer;"></i>
                  </div>

                </div>

              </div>

            </div>

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
              <p>This ID card is the property of HTG Time Portal. The QR code contains encrypted employee credentials .
                Do not share the digital image of this card on public social media.</p>
            </div>
          </div>

          <div class="actions-wrapper">
            <button class="btn-print" onclick="window.print()">
              <i><img src="{{ asset('images/Group 107.png') }}" alt="" /></i> Print Card
            </button>
          </div>

        </section>

      </div>
    </main>

  </div>

  <script>
    function flipCard() {
      document.getElementById('idCard').classList.toggle('flip');
    }

    const sidebar = document.querySelector('.sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    const openBtn = document.getElementById('openSidebar');
    const closeBtn = document.getElementById("sidebarClose");


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

</body>