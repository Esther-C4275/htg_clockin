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
        color: #06414f;
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
        background-color: #fafafa;
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
        max-width: 210px;
    }

    /* ==========================================================================
 5. Graphic Identity ID Badge Component
 ========================================================================== */

    /* TRAZO-ID-CARD */

    .trazo-card {
        background-image: url('/images/TRAZO ID CARD.svg');
        width: 312px;
        height: 504px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        padding-left: 10px;
        margin-left: 80px;
        display: flex;
        flex-direction: column;
    }

    .trazo-avatar-container {
        margin-top: 143px;
        padding-left: 60px;
    }

    .trazo-form {
        margin-top: 60px;
        /* padding-left: 8px; */
    }

    .avatar {
        border: 10px solid #9be801;
        width: 159.99998474121094px;
        height: 159.99998474121094px;
        border-radius: 12px;
        opacity: 1;
        top: 138.65px;
        left: 76px;
        border-width: 10px;
        box-shadow: 4px 4px 4px 0px #aff50b66;
    }

    .trazo-form h3 {
        font-weight: 600;
        font-style: Semi Bold;
        font-size: 24px;
        line-height: 100%;
        letter-spacing: 0%;
        text-align: center;
        color: #FFFFFF;

    }

    .trazo-form h5 {
        font-weight: 500;
        font-style: Medium;
        font-size: 16px;
        line-height: 100%;
        letter-spacing: 0%;
        text-align: center;
        color: #FFFFFF;
        margin-top: 8px;

    }

    .small-avatar {
        width: 44px;
        height: 44px;
        margin-left: 139px;
        margin-top: -30px;
    }


    .badge-footer {
        width: 80%;
        padding-top: 16px;
        margin-top: auto;
        color: #FFFFFF;
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
        margin-left: 100px;
        margin-bottom: 20px;
    }

    /* ==========================================================================
   6. Data Specifications Table & Alert Layout
   ========================================================================== */
    .badge-details-column {
        display: flex;
        flex-direction: column;
        gap: 24px;
        margin-left: 45px;
    }

    /* Information Container */
    .info-panel {
        border: 1px solid #bababa;
        overflow: hidden;
        width: 483px;
        height: 296px;
        opacity: 1;
        border-radius: 12px;
        border-width: 1px;
    }

    .panel-header {
        padding: 20px 24px;
        background-color: #f1f3ff;
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
        background-color: #ffede64d;
        border-left: 4px solid #06414f;
        border-radius: 8px;
        padding: 18px 20px;
        display: flex;
        gap: 16px;
    }

    .banner-icon {
        color: #06414f;
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
        background-color: #06414f;
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

    /* TRAZO-CARD */

    .trazo-cardback {
        width: 312px;
        height: 504px;
        background-image: url('/images/trazo back.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        padding-left: 10px;
        margin-left: 80px;

    }

    .trazo-contact-link {
        display: flex;
        flex-direction: column;
        gap: 12px;
        align-items: flex-start;
        width: fit-content;
    }


    .trazo-contact-item {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-left: 30px;
        text-align: center;
    }


    .contact-text {
        font-weight: 500;
        font-style: Medium;
        font-size: 16px;
        line-height: 100%;
        letter-spacing: 0%;
        text-align: center;
    }

    .trazoo-contact-item {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-left: 50px;
        text-align: center;
    }

    .contact-texts {
        font-weight: 500;
        font-style: Medium;
        font-size: 14px;
        line-height: 100%;
        letter-spacing: 0%;
        text-align: center;
    }

    .Location-img {

        margin-left: 132px;
        margin-top: 20px;
        height: 30px;
    }

    .trazo-lost-found {
        font-weight: 500;
        font-style: Medium;
        font-size: 14px;
        line-height: 100%;
        letter-spacing: 0%;
        text-align: center;
        padding: 10px;
        color: #03651A;

    }

    .trazo-lost-found h4 {
        margin-bottom: 10px;
        font-weight: 500;

    }

    .line-decoration {
        margin-bottom: 10px;
        width: 97%;
    }

    .qr-code-container {
        background: #ffffff;
        padding: 8px;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        margin-bottom: 16px;
        display: inline-block;
        margin-top: 42px;
        margin-left: 89px;
    }

    .qr-code-container svg,
    .qr-code-container img {
        display: block;
        width: 100px;
        height: 100px;
    }

    .badge-footer2 {
        width: 80%;

        padding-top: 16px;
        margin-top: 15px;
        color: #03651A;
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

    /* ==========================================================================
     5. Flip Card Engine Wrapper Container
     ========================================================================== */
    .id-card-container {
        width: 312px;
        height: 504px;
        perspective: 1200px;
        margin-left: 40px;
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

    @media print {

        .sidebar,
        .top-bar,
        .info-panel,
        .protocol-banner,
        .actions-wrapper,
        .brand-section,
        header,
        nav,
        .badge-footer,
        .badge-footer2 {
            display: none !important;
        }


        @page {
            size: A4 portrait;
            margin: 10mm;
        }

        html,
        body {
            background: #ffffff !important;
            color: #000000 !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
            height: auto !important;
            min-height: 0 !important;
            overflow: visible !important;
        }


        .dashboard-container,
        .main-viewport,
        .content-grid,
        .badge-preview-column {
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            justify-content: flex-start !important;
            position: static !important;
            width: 100% !important;
            height: auto !important;
            margin: 0 !important;
            padding: 0 !important;
            transform: none !important;
            left: auto !important;
        }


        .id-card-container,
        .id-card {
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            position: static !important;
            width: 100% !important;
            height: auto !important;
            margin: 0 auto !important;
            padding: 0 !important;
            perspective: none !important;
            transform: none !important;
        }


        .id-card-front,
        .id-card-back {
            display: flex !important;
            justify-content: center !important;
            position: relative !important;
            width: 312px !important;
            height: 504px !important;
            backface-visibility: visible !important;
            transform: none !important;
            top: 0 !important;
            left: 0 !important;
            margin: 10px auto !important;
            page-break-inside: avoid !important;
        }


        .trazo-card,
        .trazo-cardback,
        .badge-card,
        .badge-card-front {
            margin: 0 auto !important;
            padding: 0 !important;
            position: relative !important;
            left: 0 !important;
            right: 0 !important;
            top: 0 !important;
            width: 312px !important;
            height: 504px !important;
            transform: scale(0.85) !important;
            transform-origin: top center !important;
        }

        * {
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }
    }

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
    /* Prevent page horizontal shifting */
    body, .dashboard-container, .main-viewport {
        max-width: 100vw;
        overflow-x: hidden;
    }

    .main-viewport {
        padding: 16px;
        width: 100%;
    }

    /* Center and constrain card container */
    .badge-preview-column {
        width: 100%;
        display: flex;
        justify-content: center;
        padding: 0;
    }

    .id-card-container {
        margin: 0 auto !important;
        max-width: 100%;
    }

    /* Reset fixed margins on mobile card faces */
    .trazo-card,
    .trazo-cardback,
    .id-card-front,
    .id-card-back {
        margin-left: 0 !important;
    }

    /* Make details panel & banner fully fluid */
    .badge-details-column {
        width: 100%;
        margin-left: 0 !important;
        align-items: center;
    }

    .info-panel,
    .protocol-banner {
        width: 100% !important;
        max-width: 100% !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
        box-sizing: border-box;
    }

    .panel-header {
        width: 100% !important;
    }

    .actions-wrapper {
        width: 100%;
        justify-content: center;
    }

    .btn-print {
        margin-right: 0 !important;
    }
}

    
</style>


<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="brand-section">
                <div class="logo">
                    <img src="{{ asset('images/Artboard 1 2.svg') }}" alt="" />
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
                            <i><img src="{{ asset('images/employee.svg') }}" alt="" /></i>
                            ID Card
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
                            <i><img src="{{ asset('images/setting.svg') }}" alt="" /></i>
                            Settings
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
                    <i><img src="./images/Frame 32.png') }}" alt="" /></i>

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
                {{-- front --}}
                <section class="badge-preview-column">

                    <div class="id-card-container">
                        <div class="id-card" id="idCard">

                            <div class="id-card-front">
                                <div class="trazo-card">
                                    <div class="trazo-avatar-container">
                                        <div class="avatar" style="
                                           display: flex; 
                                           align-items: center; 
                                           justify-content: center; 
                                           background-color: #14532D; 
                                           color: #ffffff; 
                                           font-weight: 700; 
                                           font-size: 64px; 
                                           overflow: hidden;
                                           border-radius: 10px;">
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
                                        <img class="small-avatar" src="{{ asset('images/Frame 112.svg') }}" alt="">
                                    </div>

                                    <div class="trazo-form">
                                        <h3>{{ $user->first_name }} {{ $user->last_name }}</h3>
                                        <h5>{{ $user->position }}</h5>
                                    </div>


                                    <div class="badge-footer" onclick="flipCard()" style="cursor: pointer;">
                                        TRAZO
                                        <i class="fa-solid fa-arrows-rotate"></i>
                                    </div>


                                </div>
                            </div>


                            {{-- back --}}
                            <div class="id-card-back">

                                <div class="trazo-cardback">

                                    <div class="qr-code-container">
                                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ urlencode(route('staff.id', $user->uuid)) }}"
                                            alt="Employee Profile QR Code"
                                            style="width: 110px; height: 110px; object-fit: contain;">
                                    </div>

                                    <div class="trazo-contact-link">

                                        <div class="trazo-contact-item">
                                            <span class="icon-circle"><img src="{{ asset('images/Frame 114 (1).svg') }}"
                                                    alt="Phone"></span>
                                            <span class="contact-text">+234 (916) 063 9876</span>
                                        </div>

                                        <div class="trazoo-contact-item">
                                            <span class="icon-circle"><img src="./images/Frame 113.svg') }}"
                                                    alt="Email"></span>
                                            <span class="contact-texts">Contact@trazo.ng</span>
                                        </div>

                                    </div>

                                    <img class=" Location-img" src="{{ asset('images/Group 113.svg') }}" alt="">

                                    <div class="trazo-lost-found">
                                        <h4>2nd floor, Contemporary Building, Interbua Roundabout, Summit Road, Asaba.
                                        </h4>
                                        <img class="line-decoration" src="{{ asset('images/Line 52.svg') }} " alt="">
                                        <h5 style="font-weight: 500">If found, should be returned to the above address,
                                            phone umber or nearest
                                            police
                                            station.</h5>
                                    </div>

                                    <div class="badge-footer2" onclick="flipCard()" style="cursor: pointer;">
                                        trazo.ng
                                        <i class="fa-solid fa-arrows-rotate" style="font-size: 12px;"></i>
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
                                <span class="field-value">{{ $user->department}}</span>
                            </div>
                            <div class="info-row">
                                <span class="field-name">Work Location</span>
                                <span class="field-value">Contemporary Building</span>
                            </div>
                        </div>
                    </div>

                    <div class="protocol-banner">
                        <div class="banner-icon">
                            <i><img src="{{ asset('images/protocol.png') }}" alt="" /></i>
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