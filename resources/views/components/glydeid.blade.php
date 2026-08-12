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
        font-family: "Inter", sans-serif;
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

    /* ==========================================================================
     2. Master Viewport Sidebar Panel Component
     ========================================================================== */
    .sidebar {
        width: 260px;
        background-color: #06414f;
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
        color: #b7b7b7;
        gap: 8px;
        font-size: 18px;
        font-weight: 500;
        border-radius: 8px;
    }

    .nav-link :hover {
        background-color: #ffffff;
        color: #06414f;
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
        font-size: 24px;
        line-height: 100%;
        letter-spacing: 0px;
        display: block;
        margin-bottom: 12px;
    }

    .page-title {
        font-weight: 600;
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
        font-size: 12px;
        line-height: 100%;
    }

    .profile-avatar-fallback {
        width: 30px;
        height: 30px;
        background-color: #fafafa;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 12px;
        line-height: 100%;
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
     5. Flip Card Engine Wrapper Container
     ========================================================================== */
     .id-card-container {
    width: 312px;
    height: 504px;
    perspective: 1200px;
    margin: 0 auto; /* Centered layout instead of fixed margin-left */
}

.id-card {
    width: 100%;
    height: 100%;
    position: relative;
    transform-style: preserve-3d;
    -webkit-transform-style: preserve-3d;
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
    backface-visibility: hidden !important;
    -webkit-backface-visibility: hidden !important;
    transform-style: preserve-3d;
    -webkit-transform-style: preserve-3d;
}

.id-card-back {
    transform: rotateY(180deg);
}

/* Hard toggle to prevent Mobile Safari avatar bleed when flipped */
.id-card.flip .id-card-front {
    visibility: hidden !important;
    pointer-events: none;
}

.id-card:not(.flip) .id-card-back {
    visibility: hidden !important;
    pointer-events: none;
}

    /* GLYDE CARD IMPLEMENTATION (Mockup Perfect Fit) */
    .Glyde-card {
        width: 312px;
        height: 504px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        display: flex;
        flex-direction: column;
        align-items: center;
        overflow: hidden;

        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
    }

    .front-bg {
        background-image: url('/images/Glyde front.svg');
    }

    .back-bg {
        background-image: url('/images/Glyde back (1).svg');
        padding: 24px 16px;
        align-items: center;
    }

    .Glyde-avatar-container {
        z-index: 1;
        margin-top: 143px;
        align-self: center;
        width: 160px;
        height: 160px;
        border-radius: 50%;
        border: 8px solid transparent;


        background-image:
            linear-gradient(#fffffc, #012b2c),
            linear-gradient(0deg, #2ecc71 0%, #27ae60 10%, rgba(39, 174, 96, 0) 25%);

        background-origin: border-box;
        background-clip: padding-box, border-box;



        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .Glyde-form {
        margin-top: -12px;
        display: flex;
        flex-direction: column;
        background-color: #0B2E32;
        width: 280px;
        height: 165px;
        opacity: 1;
        gap: 24px;
        padding: 16px;
        top: 52.23px;
        left: 16px;
        border-width: 5px;
        border-top-right-radius: 15px;
        border-bottom-left-radius: 15px;
        border: 5px solid #3DE091;

    }

    .personal {
        text-align: left;
        width: 100%;
    }

    .name-small {
        font-weight: 500;
        font-size: 16px;
        line-height: 120%;
        color: #ffffff;
    }

    .name-big {
        font-weight: 700;
        font-size: 24px;
        line-height: 120%;
        color: #ffffff;
        margin-top: 2px;
    }

    .personal-info {
        display: flex;
        align-items: center;
        background-color: #3DE091;
        width: 248px;
        height: 58px;
        gap: 10px;
        padding: 10px;
        border-radius: 100px;
        margin-top: -8px;
    }

    .personal-info h3 {
        font-weight: 500;
        font-size: 16px;
        line-height: 100%;
        letter-spacing: 0%;
    }

    .badge-footer {
        width: 100%;
        padding-bottom: 16px;
        margin-top: auto;
        color: #3FDE91;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        font-weight: 600;
        font-size: 13px;
        letter-spacing: 2px;
        text-transform: uppercase;
        background: transparent;
    }

    .badge-footer2 {
        width: 100%;
        padding-bottom: 16px;
        margin-top: 32px;
        color: #3FDE91;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        font-weight: 700;
        font-size: 18px;
        letter-spacing: 0%;
        background: transparent;
    }

    /* Back Card Components */
    .glyde-back-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        height: 100%;
    }

    .glyde-address-block {
        color: #032F32;
        font-size: 14px;
        text-align: center;
        line-height: 100%;
        margin-bottom: 16px;
        padding: 10px;
        font-weight: 500;
        font-style: Medium;
    }

    .contact-links-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
        width: fit-content;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 14px;
        font-weight: 500;
    }

    .icon-circle img {
        width: 32px;
        height: 32px;
    }

    .qr-code-container {
        background: #ffffff;
        border-radius: 12px;
        margin-top: 14px;
        margin-bottom: 18px;
        display: inline-block;
    }

    .qr-code-container img {
        display: block;
        width: 120px;
        height: 120px;
    }

    .disclaimer-text {
        color: #ffffff;
        font-size: 14px;
        text-align: center;
        font-weight: 500;
        line-height: 100%;
        opacity: 0.9;
        margin: 0 0 20px 0;
    }

    /* ==========================================================================
     6. Data Specifications Table & Alert Layout
     ========================================================================== */
    .badge-details-column {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .info-panel {
        border: 1px solid #bababa;
        overflow: hidden;
        width: 483px;
        border-radius: 12px;
    }

    .panel-header {
        background-color: #f1f3ff;
        width: 100%;
        height: 56px;
        font-weight: 600;
        font-size: 18px;
        display: flex;
        align-items: center;
        padding: 16px 24px;
        border-bottom: 1px solid #bababa;
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
        border-bottom: 1px dashed #c3c6d6;
    }

    .info-row:last-child {
        border-bottom: none;
    }

    .field-name {
        font-weight: 400;
        font-size: 16px;
        color: #4A4A4A;
    }

    .field-value {
        font-weight: 600;
        font-size: 14px;
    }

    .protocol-banner {
        background-color: #ffede64d;
        border-left: 4px solid #06414f;
        border-radius: 8px;
        padding: 18px 20px;
        display: flex;
        gap: 16px;
        width: 483px;
    }

    .banner-icon img {
        width: 20px;
        height: 20px;
    }

    .banner-text h3 {
        font-weight: 600;
        font-size: 14px;
        margin-bottom: 4px;
    }

    .banner-text p {
        font-size: 13px;
        line-height: 1.5;
        color: #2D2D2D;
    }

    .actions-wrapper {
        display: flex;
        justify-content: flex-start;
        margin-top: 8px;
    }

    .btn-print {
        background-color: #06414f;
        color: #ffffff;
        border: none;
        font-weight: 600;
        font-size: 16px;
        border-radius: 8px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 160px;
        height: 50px;
        padding: 12px;
        margin-left: 320px;
        transition: background-color 0.2s ease;

    }

    .btn-print:hover {
        background-color: #042e38;
    }


    /* ==========================================================================
     8. Strict Production Print Engine Isolator (Glyde Single-Page Side-by-Side)
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
            margin-left: 0 !important;


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


        .Glyde-card {
            position: relative !important;
            width: 312px !important;
            height: 504px !important;
            box-shadow: none !important;
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

    /* ==========================================================================
     7. Responsive Adaptability Configuration
     ========================================================================== */
     @media (max-width: 1024px) {
    .content-grid {
        grid-template-columns: 1fr;
        gap: 32px;
    }

    .badge-preview-column {
        display: flex;
        justify-content: center;
        width: 100%;
    }

    .badge-details-column {
        align-items: center;
        width: 100%;
    }
}

@media (max-width: 768px) {
    /* Prevent page-level horizontal overflow */
    html, body {
        overflow-x: hidden;
        max-width: 100vw;
    }

    .dashboard-container {
        flex-direction: column;
    }

    /* Sidebar Drawer */
    .sidebar {
        position: fixed;
        top: 0;
        left: -100%;
        width: 78%;
        max-width: 300px;
        height: 100vh;
        background: #06414F;
        padding: 24px 20px;
        z-index: 1000;
        transition: left .3s ease;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .sidebar.active {
        left: 0;
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

    .hamburger-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        padding: 0;
        border: none;
        background: none;
    }

    .mobile-brand {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 8px;
    }

    .user-profile-widget,
    .parent-route {
        display: none;
    }

    /* Reset all card margins that push content off screen */
    .id-card-container,
    .id-card-front,
    .id-card-back {
        margin-left: 0 !important;
        margin-right: 0 !important;
    }

    .badge-preview-column {
        display: flex;
        justify-content: center;
        width: 100%;
        padding: 0;
    }

    /* Fluid responsive details panel */
    .badge-details-column {
        width: 100%;
        margin-left: 0 !important;
        align-items: center;
    }

    .info-panel {
        width: 100% !important;
        max-width: 393px;
        height: auto;
        margin-left: 0 !important;
    }

    .protocol-banner {
        width: 100% !important;
        max-width: 393px;
        margin-left: 0 !important;
        margin-top: 12px;
        box-sizing: border-box;
    }

    .banner-text h3,
    .banner-text p {
        margin-left: 0 !important;
    }

    .actions-wrapper {
        width: 100%;
        justify-content: center;
    }

    .btn-print {
        margin-left: 0 !important; /* Centers print button on mobile */
    }
}
</style>
</head>

<body>

    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="brand-section">
                <div class="logo">
                    <img src="{{ asset('images/Artboard 1 2.svg') }}" alt="HTG Logo" />
                </div>
            </div>

            <nav class="menu-links">
                <ul class="nav-list">
                    <li>
                        <a href="{{ route('index.staff') }}" class="nav-link">
                            <i><img src="{{ asset('images/dash.svg') }}" alt="" /></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('index.frontId') }}" class="nav-link">
                            <i><img src="{{ asset('images/employee.svg') }}" alt="" /></i> ID Card
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('index.registry') }}" class="nav-link">
                            <i><img src="{{ asset('images/attendance.svg') }}" alt="" /></i> Registry
                        </a>
                    </li>
                </ul>

                <ul class="nav-list footer-nav">
                    <li>
                        <a href="{{ route('staff-edit.index') }}" class="nav-link">
                            <i><img src="{{ asset('images/setting.svg') }}" alt="" /></i> Settings
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
                <div class="mobile-brand">
                    <img src="{{ asset('images/Artboard 1-1 2.svg') }}" class="mobile-logo" alt="HTG">

                    <button class="hamburger-btn" id="openSidebar">
                        <img src="{{ asset('images/breadcrumb.svg') }}">
                        {{-- <i class="fa-solid fa-align-right"></i> --}}
                    </button>
                </div>
                <div class="breadcrumb">
                    <span class="parent-route">ID Card</span>
                    <h1 class="page-title">Employee Identity Card</h1>
                </div>

                <div class="user-profile-widget">
                    <div class="profile-details">
                        <span class="profile-email">{{ $user->email }}</span>
                        <div class="profile-avatar-fallback" style="overflow: hidden; 
                        width: 35px; 
                        height: 35px; 
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
            </header>

            <div class="content-grid">


                <section class="badge-preview-column">
                    <div class="id-card-container">
                        <div class="id-card" id="idCard">

                            <!-- FRONT PANEL VIEW -->
                            <div class="id-card-front">
                                <div class="Glyde-card front-bg">
                                    <div class="Glyde-avatar-container" style="
                                    display: flex; 
                                    align-items: center; 
                                    justify-content: center; 
                                     background-color: #012b2c;
                                    color:#012222;

                                    font-weight: 700; 
                                    font-size: 64px; 
                                    overflow: hidden;
                                    border-radius: 100%;">
                                        @if($user->avatar)
                                            <img src="{{ asset('storage/' . $user->avatar) }}" alt="Profile"
                                                style="width: 100%; height: 100%; object-fit: cover; display: block;">
                                        @else
                                            @php
                                                $firstInitial = substr($user->first_name, 0, 1);
                                                $lastInitial = substr($user->last_name, 0, 1);

                                                $initials = strtoupper($firstInitial . $lastInitial);
                                             @endphp
                                            {{ $initials }}
                                        @endif
                                    </div>

                                    <div class="Glyde-form">
                                        <div class="personal">
                                            <h5 class="name-small">{{$user->first_name}}</h5>
                                            <h6 class="name-big">{{$user->last_name}}</h6>
                                        </div>
                                        <div class="personal-info">
                                            <img src="{{ asset('images/Frame 1283 (3).png') }}" alt="">
                                            <h3>{{$user->position}}</h3>
                                        </div>
                                    </div>

                                    <div class="badge-footer" onclick="flipCard()" style="cursor: pointer;">
                                        GLYDE <i class="fa-solid fa-arrows-rotate"></i>
                                    </div>
                                </div>
                            </div>


                            <div class="id-card-back">
                                <div class="Glyde-card back-bg">
                                    <div class="glyde-back-content">

                                        <img class="Location-image" src="./images/Frame 114.svg') }}" alt="">

                                        <h6 class="glyde-address-block">
                                            2nd floor, Contemporary Building, Interbua Roundabout, Summit Road, Asaba.
                                        </h6>

                                        <div class="contact-links-group">
                                            <div class="contact-item">
                                                <span class="icon-circle"><img
                                                        src="{{ asset('images/Frame 114 (1).svg') }}"
                                                        alt="Phone"></span>
                                                <span class="contact-text">+234 (916) 063 9876</span>
                                            </div>
                                            <div class="contact-item">
                                                <span class="icon-circle"><img src="{{ asset('images/Frame 113.svg') }}"
                                                        alt="Email"></span>
                                                <span class="contact-text">Contact@Glyde.ng</span>
                                            </div>
                                        </div>

                                        <div class="qr-code-container">
                                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ urlencode(route('staff.id', $user->uuid)) }}"
                                                alt="Employee Profile QR Code"
                                                style="width: 110px; height: 110px; object-fit: contain;">
                                        </div>

                                        <p class="disclaimer-text">
                                            If found, should be returned to the above address, phone number or nearest
                                            police station.
                                        </p>

                                        <div class="badge-footer2" onclick="flipCard()" style="cursor: pointer;">
                                            glyde.ng <i class="fa-solid fa-arrows-rotate"></i>
                                        </div>

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
                            <img src="{{ asset('images/protocol.png') }}" alt="Security Indicator" />
                        </div>
                        <div class="banner-text">
                            <h3>Security Protocol</h3>
                            <p>
                                This ID card is the property of HTG Time Portal. The QR code
                                contains encrypted employee credentials . Do not share the
                                digital image of this card on public social media.
                            </p>
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


        openBtn?.addEventListener('click', () => {
            sidebar?.classList.toggle('active');
            overlay?.classList.toggle('active');
        });


        overlay?.addEventListener('click', () => {
            sidebar?.classList.remove('active');
            overlay?.classList.remove('active');
        });
    </script>
</body>