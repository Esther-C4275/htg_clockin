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
        padding: 0 16px 36px 16px;
    }

    .menu-links {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    .sidebar-close {
        display: none;
    }

    .nav-list {
        list-style-type: none;
        display: flex;
        flex-direction: column;
        gap: 8px;
        padding: 0 8px;
    }

    .nav-link {
        display: flex;
        align-items: center;
        text-decoration: none;
        padding: 12px;
        color: #b7b7b7;
        gap: 12px;
        font-size: 16px;
        font-weight: 500;
        border-radius: 8px;
        transition: all 0.2s ease;
    }

    .nav-link:hover,
     {
        background-color: #ffffff;
        color: #06414f;
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

    .user-email{
        display:none;
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
        display: block;
        margin-bottom: 12px;
    }

    .page-title {
        font-weight: 600;
        font-size: 24px;
        line-height: 100%;
    }

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
    }

    /* ==========================================================================
     4. Display Matrix Content Grid
     ========================================================================== */
    .content-grid {
        display: grid;
        grid-template-columns: 350px 1fr;
        gap: 40px;
        align-items: start;
        width: 100%;
        max-width: 1100px;
    }

    /* ==========================================================================
     5. Flip Card Engine Wrapper Container
     ========================================================================== */
    .id-card-container {
        width: 312px;
        height: 504px;
        perspective: 1200px;
        margin: 0 auto;
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

    /* WebKit Bleed Fix for Mobile Safari */
    .id-card.flip .id-card-front {
        visibility: hidden !important;
        pointer-events: none;
    }

    .id-card:not(.flip) .id-card-back {
        visibility: hidden !important;
        pointer-events: none;
    }

    /* TRAZO FRONT CARD */
    .trazo-card {
        background-image: url('/images/TRAZO ID CARD.svg');
        width: 312px;
        height: 504px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .trazo-avatar-container {
        margin-top: 140px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .avatar {
        border: 10px solid #9be801;
        width: 160px;
        height: 160px;
        border-radius: 12px;
        box-shadow: 4px 4px 4px 0px #aff50b66;
    }

    .small-avatar {
        width: 44px;
        height: 44px;
        margin-top: -22px;
        margin-left: 100px;
    }

    .trazo-form {
        margin-top: 24px;
        text-align: center;
    }

    .trazo-form h3 {
        font-weight: 600;
        font-size: 24px;
        color: #FFFFFF;
    }

    .trazo-form h5 {
        font-weight: 500;
        font-size: 16px;
        color: #FFFFFF;
        margin-top: 6px;
    }

    .badge-footer {
        width: 100%;
        padding-top: 16px;
        margin-top: auto;
        color: #FFFFFF;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        font-size: 14px;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    /* TRAZO BACK CARD */
    .trazo-cardback {
        width: 312px;
        height: 504px;
        background-image: url('/images/trazo back.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .qr-code-container {
        background: #ffffff;
        padding: 8px;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        margin-top: 42px;
        margin-bottom: 16px;
    }

    .qr-code-container img {
        display: block;
        width: 100px;
        height: 100px;
    }

    .trazo-contact-link {
        display: flex;
        flex-direction: column;
        gap: 8px;
        align-items: center;
        width: 100%;
    }

    .trazo-contact-item,
    .trazoo-contact-item {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .contact-text,
    .contact-texts {
        font-weight: 500;
        font-size: 14px;
    }

    .Location-img {
        margin-top: 16px;
        height: 26px;
    }

    .trazo-lost-found {
        font-weight: 500;
        font-size: 12px;
        text-align: center;
        padding: 8px 16px;
        color: #03651A;
    }

    .line-decoration {
        margin: 6px 0;
        width: 100%;
    }

    .badge-footer2 {
        width: 100%;
        margin-top: auto;
        margin-bottom: 20px;
        color: #03651A;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        font-weight: 700;
        font-size: 16px;
    }

    /* ==========================================================================
     6. Details Column & Banner
     ========================================================================== */
    .badge-details-column {
        display: flex;
        flex-direction: column;
        gap: 24px;
        width: 100%;
    }

    .info-panel {
        border: 1px solid #bababa;
        overflow: hidden;
        width: 100%;
        max-width: 483px;
        border-radius: 12px;
    }

    .panel-header {
        background-color: #f1f3ff;
        padding: 16px 24px;
        font-weight: 600;
        font-size: 18px;
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
        font-size: 16px;
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
        max-width: 483px;
    }

    .banner-text h3 {
        font-weight: 600;
        font-size: 14px;
        margin-bottom: 4px;
    }

    .banner-text p {
        font-size: 13px;
        line-height: 1.5;
    }

    .actions-wrapper {
        display: flex;
        justify-content: flex-start;
        max-width: 483px;
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
        gap: 10px;
        width: 148px;
        height: 50px;
    }

    /* ==========================================================================
     7. Mobile Responsiveness Breakpoints
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
        }
    }

    @media (max-width: 768px) {

        html,
        body {
            max-width: 100vw;
            overflow-x: hidden;
        }

        .dashboard-container {
            flex-direction: column !important;
            width: 100% !important;
            height: auto !important;
        }

        /* Sidebar Off-Screen Drawer */
        .sidebar {
            position: fixed;
            top: 0;
            left: -100%;
            width: 78%;
            max-width: 300px;
            height: 100vh;
            background: #06414F;
            padding: 24px 20px;
            z-index: 2000;
            transition: left .3s ease;
            border-top-right-radius: 40px;
            border-bottom-right-radius: 40px;
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
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(3px);
            z-index: 1500;
        }


        .sidebar-overlay.active {
            display: block;
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
            margin-right: 0;
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

        .user-email {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 12px;
            margin-bottom: 8px;
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

        .menu-links{
            margin-left:-24px;
        }

        .logo{
            margin-left:-14px;
        }
        .main-viewport {
            width: 100% !important;
            padding: 16px !important;
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
        }

        .mobile-brand {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }

        .user-profile-widget,
        .parent-route {
            display: none;
        }

        .badge-preview-column {
            width: 100% !important;
            display: flex;
            justify-content: center;
            padding: 0;
        }

        .id-card-container,
        .id-card-front,
        .id-card-back,
        .trazo-card,
        .trazo-cardback {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

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
        }

        .actions-wrapper {
            width: 100%;
            justify-content: center;
        }

        .btn-print {
            margin-left: 0 !important;
        }
    }

    /* ==========================================================================
     8. Print Styling Overrides
     ========================================================================== */
    @media print {

        .sidebar,
        .top-bar,
        .info-panel,
        .protocol-banner,
        .actions-wrapper,
        nav {
            display: none !important;
        }

        body {
            background: #ffffff !important;
        }

        .dashboard-container,
        .main-viewport,
        .content-grid,
        .badge-preview-column {
            display: block !important;
            width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        .id-card-container {
            margin: 20px auto !important;
        }
    }
</style>

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
                        <a href="{{ route('index.frontId') }}" class="nav-link active">
                            <i><img src="{{ asset('images/employee.svg') }}" alt="" /></i> ID Card
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('index.registry') }}" class="nav-link">
                            <i><img src="{{ asset('images/attendance.svg') }}" alt="" /></i> Registry
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

                            <span class="user-email-text">
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
                    <img src="{{ asset('images/Artboard 1-1 2.svg') }}" class="mobile-logo" alt="HTG">
                    <button class="hamburger-btn" id="openSidebar">
                        <img src="{{ asset('images/breadcrumb.svg') }}" alt="Menu">
                    </button>
                </div>
                <div class="breadcrumb">
                    <span class="parent-route">ID Card</span>
                    <h1 class="page-title">Employee Identity Card</h1>
                </div>

                <div class="user-profile-widget">
                    <div class="profile-details">
                        <span class="profile-email">{{ $user->email }}</span>
                        <div class="profile-avatar-fallback">
                            @if($user->avatar)
                                <img src="{{ asset('storage/' . $user->avatar) }}" alt="Profile"
                                    style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
                            @else
                                {{ strtoupper(substr($user->first_name, 0, 1)) }}
                            @endif
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
                                <div class="trazo-card">
                                    <div class="trazo-avatar-container">
                                        <div class="avatar"
                                            style="display: flex; align-items: center; justify-content: center; background-color: #14532D; color: #ffffff; font-weight: 700; font-size: 64px; overflow: hidden;">
                                            @if($user->avatar)
                                                <img src="{{ asset('storage/' . $user->avatar) }}" alt="Profile"
                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                            @else
                                                {{ strtoupper(substr($user->first_name, 0, 1) . substr($user->last_name, 0, 1)) }}
                                            @endif
                                        </div>
                                        <img class="small-avatar" src="{{ asset('images/Frame 112.svg') }}" alt="">
                                    </div>

                                    <div class="trazo-form">
                                        <h3>{{ $user->first_name }} {{ $user->last_name }}</h3>
                                        <h5>{{ $user->position }}</h5>
                                    </div>

                                    <div class="badge-footer" onclick="flipCard()" style="cursor: pointer;">
                                        TRAZO <i class="fa-solid fa-arrows-rotate"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- BACK -->
                            <div class="id-card-back">
                                <div class="trazo-cardback">
                                    <div class="qr-code-container">
                                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ urlencode(route('staff.id', $user->uuid)) }}"
                                            alt="Employee Profile QR Code">
                                    </div>

                                    <div class="trazo-contact-link">
                                        <div class="trazo-contact-item">
                                            <img src="{{ asset('images/Frame 114 (1).svg') }}" alt="Phone">
                                            <span class="contact-text">+234 (916) 063 9876</span>
                                        </div>
                                        <div class="trazoo-contact-item">
                                            <img src="{{ asset('images/Frame 113.svg') }}" alt="Email">
                                            <span class="contact-texts">Contact@trazo.ng</span>
                                        </div>
                                    </div>

                                    <img class="Location-img" src="{{ asset('images/Group 113.svg') }}" alt="Location">

                                    <div class="trazo-lost-found">
                                        <h4>2nd floor, Contemporary Building, Interbua Roundabout, Summit Road, Asaba.
                                        </h4>
                                        <img class="line-decoration" src="{{ asset('images/Line 52.svg') }}" alt="">
                                        <h5>If found, should be returned to the above address, phone number or nearest
                                            police station.</h5>
                                    </div>

                                    <div class="badge-footer2" onclick="flipCard()" style="cursor: pointer;">
                                        trazo.ng <i class="fa-solid fa-arrows-rotate" style="font-size: 12px;"></i>
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
                            <i><img src="{{ asset('images/protocol.png') }}" alt="" /></i>
                        </div>
                        <div class="banner-text">
                            <h3>Security Protocol</h3>
                            <p>This ID card is the property of HTG Time Portal. The QR code contains encrypted employee
                                credentials. Do not share the digital image of this card on public social media.</p>
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