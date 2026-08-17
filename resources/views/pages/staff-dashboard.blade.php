<x-layout>
    <style>
        /* ==========================================================================
       1. Initial Variable Setup & Reset Rules
       ========================================================================== */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        main{
            flex: 1;
    
        }


        body {
            font-family: 'Inter', 'Inter var', sans-serif;
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

         .sidebar-close{
            display: none;
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

        .nav-links{
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
        .nav-links:hover {
            background-color: #ffffff;
            color: #06414F;
            /* font-weight: 700; */
        }

        .nav-link .icon {
            margin-right: 12px;
        }

        .nav-link:hover {
            background-color: #ffffff;
            color: #06414F;
            /* font-weight: 700; */
        }

        .setting-links{
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

        .setting-links:hover{
            background-color: #ffffff;
            color: #06414F;
        }

        .setting-link{
            display: none;
        }

        .footer-nav {
            margin-top: auto;
            padding-top: 16px;
        }

        /* ==========================================================================
       3. Top Application Bar Element Styles
       ========================================================================== */
        .main-viewport {
            flex: 1;
            padding: 40px 50px;
            overflow-y: auto;
            background-color: #ffffff;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 32px;
        }

        .parent-route {
            font-size: 24px;
            font-weight: 700;
            display: block;
            margin-bottom: 24px;
        }

        .page-title {
            font-size: 24px;
            font-weight: 700;
        }

        .live-date-string {
            font-size: 14px;
            color: #777777;
            font-weight: 500;
            margin-top: 4px;
        }

        .user-profile-widget {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .notification-bell {
            position: relative;
            font-size: 1.25rem;
            color: #333;
        }

        .bell-badge {
            position: absolute;
            top: 0;
            right: 0;
            width: 6px;
            height: 6px;
            background-color: #ef4444;
            border-radius: 50%;
        }

        .profile-details {
            display: flex;
            align-items: center;
            gap: 12px;
            border-radius: 30px;
        }

        .profile-email {
            font-size: 12px;
            font-weight: 400;
        }

        .profile-avatar-fallback {
            width: 32px;
            height: 32px;
            background-color: #FAFAFA;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 12px;
        }

        /* ==========================================================================
       4. Dual Column Fluid Workspace Grid Layout System
       ========================================================================== */
        .portal-grid {
            display: grid;
            grid-template-columns: 1fr 340px;
            gap: 32px;
            max-width: 1200px;
        }

        .grid-column-left,
        .grid-column-right {
            display: flex;
            flex-direction: column;
            gap: 32px;
        }

        /* Standard Base Modular Card Sizing rules */
        section {
            border: 1px solid #EBEBEB;
            border-radius: 16px;
            padding: 32px;



        }

        .activity-log-card-mobile{
            display:none;
        }

        /* ==========================================================================
       5. Interactive Functional Shift Card Component Elements
       ========================================================================== */
        .control-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid #EBEBEB;

            width: 670px;
            height: 232px;
            border-radius: 4px;
            opacity: 1;
            padding-top: 32px;
            padding-right: 32px;
            padding-bottom: 79px;
            padding-left: 32px;
            border-width: 1px;
        }

        .timer-display-box {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .status-pill {
            font-size: 0.72rem;
            font-weight: 800;
            color: #ffffff;
            padding: 6px 14px;
            border-radius: 20px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 16px;
            letter-spacing: 0.2px;
        }

        .status-out {
            background-color: #08B040;
        }

        .status-in {
            background-color: #ef4444;
        }

        .status-pill .dot {
            width: 6px;
            height: 6px;
            background-color: #ffffff;
            border-radius: 50%;
        }

        .meta-label {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        #timer-counter {
            font-size: 48px;
            font-weight: 800;
            letter-spacing: -1px;
        }

        /* Action Trigger Elements */
        .action-buttons-group {
            display: flex;
            flex-direction: column;
            gap: 12px;
            width: 200px;
            margin-left: 102px;
            margin-top: 30px;
        }

        .btn-action {
            width: 109%;
            padding: 16px;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.2s ease;
        }

        .active-in {
            background-color: #08B040;
            color: #ffffff;
        }

        .disable-in {
            background-color: #F1F1F1;
            color: #A5A6A5;
            cursor: not-allowed;
        }

        .active-out {
            background-color: #FFDAD6;
            color: #93000A;
        }

        .disable-out {
            background-color: #FFDAD6;
            color: #93000A;
            cursor: not-allowed;
        }

        /* ==========================================================================
       6. Activity Logs Components Layout Design
       ========================================================================== */
        .activity-log-card {
            width: 670px;
            height: auto;
            border-radius: 8px;
            gap: 32px;
            opacity: 1;
            padding-top: 32px;
            padding-right: 32px;
            padding-bottom: 62px;
            padding-left: 32px;
            border-width: 1px;

        }

        .section-card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;

        }

        .section-card-header h3 {
            font-size: 20px;
            font-weight: 700;
        }

        .view-all-link {
            font-size: 14px;
            font-weight: 600;
            color: #06414F;
            text-decoration: none;
        }

        .activity-feed-wrapper {
            display: flex;
            flex-direction: column;
            gap: 12px;
            
        }

        .feed-item {
            display: flex;
            align-items: center;
            background-color: #F6F8FA;
            padding: 14px 20px;
            border-radius: 12px;
        }

        .feed-icon-box {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            margin-right: 16px;
        }


        .feed-details {
            flex: 1;
        }

        .feed-details h4 {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 2px;
        }

        .feed-details p {
            font-size: 12px;
            font-weight: 400;
        }

        .feed-timestamp {
            text-align: right;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .feed-timestamp .time {
            font-size: 14px;
            font-weight: 600;
        }

        .feed-timestamp .status-tag.verified {
            font-size: 10px;
            font-weight: 700;
            color: #00A64A;
        }

        /* ==========================================================================
       7. Right Sidebar Progress and Analytics Widgets
       ========================================================================== */
        .progress-widget-card {
            background: #F6F8FA;
            border-radius: 4px;
            border: none !important;
        }


        .grid-column-right h3 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 20px;

        }

        /* Progress Linear Bar Element */
        .metric-progress-header {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 10px;

        }

        .metric-value {
            font-weight: 700;
        }

        .progress-bar-track {
            width: 100%;
            height: 10px;
            background-color: #C3D7DC;
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 24px;
        }

        .progress-bar-fill {
            height: 100%;
            
            border-radius: 20px;
            transition: width 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .target-block-pill {
            background-color: #C3D7DC;
            border-radius: 8px;
            padding: 12px 16px;
            display: inline-flex;
            flex-direction: column;
            width: 100px;
        }

        .target-title {
            font-size: 10px;
            font-weight: 800;
            color: #06414F;
            letter-spacing: 0px;
        }

        .target-amount {
            font-size: 24px;
            font-weight: 600;
            color: #06414F;
        }

        .target-amount small {
            font-size: 12px;
            font-weight: 400;
        }

        /* Attendance Radial Analytics Panel Components */
        .attendance-analytics-card {
            width: 340px;
            height: 200px;
            border-radius: 8px;
            justify-content: space-between;
            opacity: 1;
            padding: 24px;
            border-width: 1px;

        }

        .attendance-analytics-card h3 {
            
            font-weight: 700;
            font-style: Bold;
            font-size: 16px;
            line-height: 24px;
            letter-spacing: 0px;
            vertical-align: middle;

            margin-bottom: 20px;
        }

        .analytics-radial-content {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .chart-donut-wrapper {
            position: relative;
            width: 100px;
            height: 100px;
        }

        .donut-fill {
            /* transform: rotate(-90deg); */
            transform-origin: 50px 50px;
        }

        .donut-percentage {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-weight: 800;
            font-style: Extra Bold;
            font-size: 20px;
            line-height: 28px;
            letter-spacing: 0px;
            vertical-align: middle;

        }

        .data-legends {
            display: flex;
            flex-direction: column;
            gap: 12px;
            flex: 1;
        }

        .legend-row {
            display: flex;
            flex-direction: column;
        }

        .legend-label {
            
            font-weight: 600;
            font-style: SemiBold;
            font-size: 10px;
            line-height: 100%;
            letter-spacing: 0px;
            vertical-align: middle;
            color: #4F4E4E;

        }

        .legend-value {

            color: #000000;
            
            font-weight: 600;
            font-style: SemiBold;
            font-size: 18px;
            line-height: 24px;
            letter-spacing: 0px;
            vertical-align: middle;

        }

        /* Quick Actions List Utilities */
        .quick-actions-card {
            width: 340px;
            height: 145px;
            border-radius: 8px;
            gap: 8px;
            opacity: 1;
            padding: 24px;
            border-width: 1px;

        }

        .quick-actions-card {
            font-weight: 700;
            font-style: Bold;
            font-size: 16px;
            line-height: 100%;
            letter-spacing: 0px;

        }

        .action-links-list {
            list-style-type: none;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .action-links-list a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #000000;
            text-decoration: none;
            font-weight: 500;
            font-style: Medium;
            font-size: 14px;
            line-height: 20px;
            letter-spacing: 0px;
            vertical-align: middle;
            margin-bottom: 15px;

        }

        .action-links-list a i {
            font-size: 15px;
            color: #000000;
        }

        .profile-pic{
            width: 35px;
            height: 35px;
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

        /* Modal UI Card */
        .scanner-modal-card {
            background: #ffffff;
            padding: 30px;
            border-radius: 20px;
            max-width: 400px;
            width: 90%;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            text-align: center;
        }
        .scanner-modal-title {
            color: #0f172a;
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 4px;
        }
        .scanner-modal-subtitle {
            color: #64748b;
            font-size: 0.85rem;
            margin-bottom: 16px;
        }

        /* NEW: GPS & Verification Status Banner */
        #scanner-status-msg {
            display: none;
            margin-bottom: 16px;
            padding: 10px 14px;
            border-radius: 8px;
            font-size: 0.85rem;
            font-weight: 600;
            text-align: center;
            transition: all 0.2s ease-in-out;
        }

        .scanner-viewport-wrapper {
            position: relative;
            width: 280px;
            height: 280px;
            margin: 0 auto;
            border-radius: 16px;
            overflow: hidden;
            background: #000000;
        }

        #qr-reader {
            border: none !important;
            width: 100% !important;
            height: 100% !important;
        }
        #qr-reader video {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
        }

        #qr-reader__dashboard, 
        #qr-reader__status_span,
        #qr-reader div[style*="padding: 20px"] {
            display: none !important;
        }

        .scanner-hud-overlay {
            position: absolute;
            top: 25px;
            left: 25px;
            width: 230px;
            height: 230px;
            pointer-events: none; 
            box-sizing: border-box;
        }

        .scanner-laser-line {
            position: absolute;
            width: 100%;
            height: 3px;
            background: linear-gradient(to right, transparent, #00A64A, transparent);
            box-shadow: 0 0 8px #00A64A;
            animation: laserScan 2.5s infinite ease-in-out;
        }

        @keyframes laserScan {
            0% { top: 0%; }
            50% { top: 100%; }
            100% { top: 0%; }
        }

        .scanner-corner {
            position: absolute;
            width: 20px;
            height: 20px;
            border: 4px solid #00A64A;
        }
        .top-left {
            top: 0; left: 0;
            border-right: none; border-bottom: none;
            border-top-left-radius: 8px;
        }
        .top-right {
            top: 0; right: 0;
            border-left: none; border-bottom: none;
            border-top-right-radius: 8px;
        }
        .bottom-left {
            bottom: 0; left: 0;
            border-right: none; border-top: none;
            border-bottom-left-radius: 8px;
        }
        .bottom-right {
            bottom: 0; right: 0;
            border-left: none; border-top: none;
            border-bottom-right-radius: 8px;
        }

        .scanner-modal-cancel-btn {
            margin-top: 24px;
            width: 100%;
            padding: 12px;
            background-color: #f1f5f9;
            color: #64748b;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.2s ease;
        }
        .scanner-modal-cancel-btn:hover {
            background-color: #e2e8f0;
            color: #0f172a;
        }

        #qr-reader button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #00A64A !important;
            color: white !important;
            border: none !important;
            padding: 12px 20px !important;
            border-radius: 8px !important;
            font-weight: 600 !important;
            font-size: 0.9rem !important;
            cursor: pointer !important;
            box-shadow: 0 4px 6px -1px rgba(0, 166, 74, 0.3);
            z-index: 10;
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

        .user-email{
            display: none;
        }


        /* .action-links-list a:hover {
      text-decoration: underline;
    } */

        /* ==========================================================================
       8. Viewport Breakpoint Adaptability Rule Blocks
       ========================================================================== */
        @media (max-width: 1100px) {
            .portal-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width:390px){

        .grid-column-right{
            display:grid;
            grid-template-columns:repeat(2, 1fr)!important;
            gap:20px;
            width:100%;
        }

        .progress-widget-card,
        .attendance-analytics-card{
            width:100%;
        }
        }
       
        @media (max-width: 768px) {

        body{
            background: #ffffff;
        }

        .dashboard-container{
            display: block;
            width: 100%;
            height: auto;
            position: relative;
        }

        /* ===== Sidebar ===== */
        .sidebar{
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

        .sidebar.active{
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
        background:#06414F80;
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(3px);
        z-index: 1500;
    }


    .sidebar-overlay.active {
        display: block;
    }


        .brand-section{
            padding: 0 0 28px 0;
        }

        .menu-links{
            height: calc(100% - 90px);
        }

        .nav-list{
            padding: 3px;
            gap: 10px;
            margin-left: -18px;
        }

        .nav-link{
            padding: 14px 16px;
            font-size: 18px;
            border-radius: 12px;
        }

        .nav-link.active{
            background: #ffffff;
            color: #06414F;
        }

        .setting-links{
            display: none;
        }
        .setting-link{
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
        line-height: 1 ;
    }
        .nav-links{
            display: none;
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

     .footer-nav{
            display: block;
            margin-top: auto;
            padding-top: 18px;
           
        }

        /* ===== Main ===== */
        .main-viewport{
            width: 100%;
            padding: 27px 16px 28px;
            overflow: visible;
        }

        /* ===== Top bar with hamburger ===== */
        .top-bar{
            display:block;
            margin-bottom:20px;
        }

        .mobile-brand{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:8px;
        }

        .mobile-brand img{
            width: 68px;
            height: auto;
        }
 
        .mobile-brand img{
            width:60px;
            height:auto;
            display:block;
        }

        .hamburger-btn{
            display:flex;
            align-items:center;
            justify-content:center;
            width:36px;
            height:36px;
            padding:0;
            border:none;
            background:none;
        }

        .hamburger-btn i{
            font-size: 22px;
            color: #111827;
        }

        /* hide desktop profile */
        .user-profile-widget{
            display: none;
        }

        .breadcrumb{
            display: flex;
            flex-direction: column;
            gap: 2px;
    }

        .parent-route{
            display: none; 
        }

        .page-title{
            font-family: "Inter", sans-serif;
            font-size:16px;
            font-weight:500;
            margin:0;
            line-height:24px;
            letter-spacing: 0;
            margin-top: 14px;
        }

        .live-date-string{
            font-family: "Inter", sans-serif;
            margin-top:-2px;
            font-size:12px;
            font-weight: 400;
            line-height: 18px;
            color:#6B7280;
        }

        /* ===== Grid ===== */
        .portal-grid{
            display: flex;
            flex-direction: column;
            gap: 14px;
            max-width: 100%;
        }

        .grid-column-left,
        .grid-column-right{
            gap: 14px;
        }

        section{
            width: 100% !important;
            border-radius: 16px;
            padding: 16px;
        }

        /* ===== Control card ===== */
        .control-card{
            width: 100% !important;
            height: auto !important;
            padding: 16px !important;
            border-radius: 16px;
            display: flex;
            flex-direction: column;
            align-items: stretch;
            gap: 16px;
        }

        .status-pill{
            margin-bottom: 12px;
            font-size: 11px;
            padding: 6px 12px;
        }

        .meta-label{
            font-size: 14px;
            margin-bottom: 6px;
        }

        #timer-counter{
            font-size: 42px;
            line-height: 1;
            letter-spacing: -1px;
        }

        .action-buttons-container{
            margin-top: 0 !important;
            width: 100%;
        }

        .action-buttons-group{
            width: 100%;
            margin: 0;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .btn-action{
            width: 100%;
            min-height: 54px;
            padding: 10px;
            font-size: 15px;
            border-radius: 12px;
            gap: 8px;
        }

        .btn-action img{
            width: 18px;
            height: 18px;
        }

        /* ===== Progress + Attendance ===== */
        .grid-column-right{
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            
        }

        .progress-widget-card,
        .attendance-analytics-card{
            width: 100% !important;
            min-height: 172px;
            padding: 16px;
            border-radius: 16px;
        }

        .grid-column-right h3{
            font-size: 18px;
            margin-bottom: 14px;
            font-weight: 600;
        }

        .metric-progress-header{
            font-size: 13px;
        }

        .progress-bar-track{
            height: 8px;
            margin-bottom: 18px;
        }

        .target-block-pill{
            width: 92px;
            padding: 10px 12px;
            border-radius: 10px;
        }

        .target-amount{
            font-size: 26px;
            line-height: 1;
        }

        .analytics-radial-content{
            align-items: center;
            gap: 12px;
        }

        .chart-donut-wrapper{
            width: 86px;
            height: 86px;
            flex-shrink: 0;
        }

        .chart-donut-wrapper svg{
            width: 86px;
            height: 86px;
        }

        .donut-percentage{
            font-size: 18px;
        }

        .legend-label{
            font-size: 10px;
        }

        .legend-value{
            font-size: 18px;
            line-height: 1.1;
        }

        /* ===== Activity ===== */
        .activity-log-card{
            display: none;
           
        }

        .activity-log-card-mobile{
            display: flex !important;
            flex-direction: column;
            width: 100%;
            padding: 16px;
            border-radius: 16px;
            grid-column: span 2;
            border: none;
        }

        .section-card-header{
            margin-bottom: 14px;
        }

        .section-card-header h3{
            font-size: 18px;
            font-weight: 500;
        }

        .feed-item{
            padding: 12px 14px;
            border-radius: 12px;
            align-items: center;
        }

        .feed-icon-box{
            width: 40px;
            height: 40px;
            margin-right: 12px;
        }

        .feed-details h4{
            font-size: 14px;
        }

        .feed-details p{
            font-size: 12px;
            color: #6B7280;
        }

        .feed-timestamp .time{
            font-size: 13px;
        }


        
}
    </style>

    </head>

    <body>

        <div class="dashboard-container">

            <aside class="sidebar">
                <div class="brand-section">
                    <div class="logo">
                        <img src="{{ asset('images/Artboard 1 2.svg') }}" alt="">
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
                            <img src="{{ asset('images/breadcrumb.svg') }}">
                            {{-- <i class="fa-solid fa-align-right"></i> --}}
                        </button>
                    </div>
                
                    <div class="breadcrumb">
                        <span class="parent-route">Dashboard</span>
                        <h1 class="page-title">Welcome back, {{ $user->first_name }}</h1>
                        <p class="live-date-string">
                          Today is {{ now()->format('l, F jS Y - h:i A') }}
                        </p>
                    </div>

                    <div class="user-profile-widget">
                        {{-- <div class="notification-bell">
                            <i class="fa-regular fa-bell"></i>
                            <span class="bell-badge"></span>
                        </div> --}}
                        <div class="profile-details">
                            <span class="profile-email">{{ $user->email }}</span>
                            @php
                            $firstInitial = substr($user->first_name, 0, 1);
                        @endphp
                        
                        <div class="profile-pic">
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

                <div class="portal-grid">

                    <div class="grid-column-left">

                        <section class="control-card">
                            <div class="timer-display-box">
                                <div id="status-pill" class="status-pill {{ $today && $today->clock_in && !$today->clock_out ? 'status-in' : 'status-out' }}">
                                    <span class="dot"></span> 
                                    {{ $today && $today->clock_in && !$today->clock_out ? 'CURRENTLY CLOCKED IN' : 'CURRENTLY CLOCKED OUT' }}
                                </div>
                                <span class="meta-label">Shift Duration</span>
                                <h2 id="timer-counter">00:00:00</h2>
                            </div>
                            
                            <div class="action-buttons-container" style="margin-top: 25px; width: 100%;">
    
                                <div id="qr-scanner-wrapper" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(15, 23, 42, 0.75); backdrop-filter: blur(4px); z-index: 9999; align-items: center; justify-content: center;">
                                    <div class="scanner-modal-card">
                                        
                                        <h3 id="scanner-title" class="scanner-modal-title">Scanning to Clock In</h3>
                                        <p class="scanner-modal-subtitle">Align the printed QR code inside the frame to scan automatically.</p>
                                        
                                        <!-- Status indicator for GPS acquisition & verification errors -->
                                        <div id="scanner-status-msg" style="display: none; margin: 10px 0; padding: 8px 12px; border-radius: 6px; font-size: 13px; font-weight: 500; text-align: center;"></div>
                                
                                        <div class="scanner-viewport-wrapper">
                                            <div id="camera-preview-container" style="width: 100%; height: 100%; overflow: hidden; border-radius: 12px;">
                                                <div id="qr-reader" style="width: 100%; height: 100%; border: none;"></div>
                                            </div>
                                            
                                            <div class="scanner-hud-overlay">
                                                <div class="scanner-laser-line"></div>
                                                <div class="scanner-corner top-left"></div>
                                                <div class="scanner-corner top-right"></div>
                                                <div class="scanner-corner bottom-left"></div>
                                                <div class="scanner-corner bottom-right"></div>
                                            </div>
                                        </div>
                                        
                                        <button id="btn-cancel-scan" class="scanner-modal-cancel-btn">
                                            Cancel Scanning
                                        </button>
                                    </div>
                                </div>
                                <div class="action-buttons-group">
                                    <button id="btn-clock-in" 
                                            data-action="clock-in"
                                            class="btn-action {{ $today && $today->clock_in ? 'disable-in' : 'active-in' }}"
                                            @if($today && $today->clock_in) disabled @endif >
                                        <i><img src="{{ asset('images/Group 82.png') }}" alt="" style="margin-top: 8px"></i> Scan to Clock-In
                                    </button>
                                    
                                    <button id="btn-clock-out"
                                            data-action="clock-out"
                                            class="btn-action {{ !$today || !$today->clock_in || $today->clock_out ? 'disable-out' : 'active-out' }}"
                                            @if(!$today || !$today->clock_in || $today->clock_out) disabled @endif >
                                           
                                        <i><img src="{{ asset('images/Group 81.png') }}" alt="" style="margin-top: 8px"></i> Scan to Clock-Out
                                    </button>
                                </div>
                            
                            </div>
                        </section>
                    
                        <section class="activity-log-card">
                            <div class="section-card-header">
                                <h3>Recent Activity Log</h3>
                                <a href="{{ route('index.registry') }}" class="view-all-link">View All</a>
                            </div>
                    
                            <div class="activity-feed-wrapper">
                                @foreach($activities as $activity)
                                    @if($activity->clock_in)
                                        <div class="feed-item">
                                            <div class="feed-icon-box check-in-theme">
                                                <i><img src="{{ asset('images/Frame 83.png') }}" alt=""></i>
                                            </div>
                                            <div class="feed-details">
                                                <h4>Clock-In</h4>
                                                <p>{{ \Carbon\Carbon::parse($activity->clock_in)->format('l, jS F Y') }}</p>
                                            </div>
                                            <div class="feed-timestamp">
                                                <span class="time">{{ \Carbon\Carbon::parse($activity->clock_in)->format('h:i A') }}</span>
                                                <span class="status-tag verified">Verified</span>
                                            </div>
                                        </div>
                                    @endif
                                    
                                    @if($activity->clock_out)
                                        <div class="feed-item">
                                            <div class="feed-icon-box check-out-theme">
                                                <i><img src="{{ asset('images/Frame 84.png') }}" alt=""></i>
                                            </div>
                                            <div class="feed-details">
                                                <h4>Clock-Out</h4>
                                                <p>{{ \Carbon\Carbon::parse($activity->clock_out)->format('l, jS F Y') }}</p>
                                            </div>
                                            <div class="feed-timestamp">
                                                <span class="time">{{ \Carbon\Carbon::parse($activity->clock_out)->format('h:i A') }}</span>
                                                <span class="status-tag verified">Verified</span>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </section>
                    </div>
                    
                    <div class="grid-column-right">
                        <section class="progress-widget-card">
                            <h3>Today's Progress</h3>
                            <div class="metric-progress-header">
                                <span class="metric-label">Hours Logged</span>
                                <span id="logged-hours-value" class="metric-value">0.0 / 8.0 hrs</span>
                            </div>
                            <div class="progress-bar-track">
                                <div id="progress-bar-fill" class="progress-bar-fill" style="width: 0%; height: 10px; background-color: #00A64A; border-radius: 4px; transition: width 0.4s ease-in-out;"></div>
                            </div>
                            <div class="target-block-pill">
                                <span class="target-title">TARGET</span>
                                <span class="target-amount">40h<small>/wk</small></span>
                            </div>
                        </section>
                    
                        <section class="attendance-analytics-card">
                            <h3>Attendance</h3>
                            <div class="analytics-radial-content">
                                <div class="chart-donut-wrapper">
                                    <svg width="100" height="100" viewBox="0 0 100 100">
                                        <circle class="donut-track" cx="50" cy="50" r="40" fill="transparent" stroke="#A3DCBC" stroke-width="8" />
                                        @php
                                            $radius = 40;
                                            $circumference = 2 * M_PI * $radius; 
                                            $offset = $circumference - ($attendancePercentage / 100) * $circumference;
                                        @endphp
                                        <circle class="donut-fill" cx="50" cy="50" r="{{ $radius }}" fill="transparent"
                                            stroke="#00A64A" stroke-width="8" stroke-dasharray="{{ $circumference }}"
                                            stroke-dashoffset="{{ $offset }}" />
                                    </svg>
                                    <div class="donut-percentage">{{ $attendancePercentage }}%</div>
                                </div>
                                <div class="data-legends">
                                    <div class="legend-row">
                                        <span class="legend-label">ON TIME</span>
                                        <span class="legend-value">{{ $onTimeDays }} {{ Str::plural('Day', $onTimeDays) }}</span>
                                    </div>
                                    <div class="legend-row">
                                        <span class="legend-label">LATE/MISSED</span>
                                        <span class="legend-value">{{ $lateDays }} {{ Str::plural('Day', $lateDays) }}</span>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <section class="activity-log-card-mobile">
                            <div class="section-card-header">
                                <h3>Recent Activity Log</h3>
                                <a href="{{ route('index.registry') }}" class="view-all-link">View All</a>
                            </div>
                    
                            <div class="activity-feed-wrapper">
                                @foreach($activities as $activity)
                                    @if($activity->clock_in)
                                        <div class="feed-item">
                                            <div class="feed-icon-box check-in-theme">
                                                <i><img src="{{ asset('images/Frame 83.png') }}" alt=""></i>
                                            </div>
                                            <div class="feed-details">
                                                <h4>Clock-In</h4>
                                                <p>{{ \Carbon\Carbon::parse($activity->clock_in)->format('l, jS F Y') }}</p>
                                            </div>
                                            <div class="feed-timestamp">
                                                <span class="time">{{ \Carbon\Carbon::parse($activity->clock_in)->format('h:i A') }}</span>
                                                <span class="status-tag verified">Verified</span>
                                            </div>
                                        </div>
                                    @endif
                                    
                                    @if($activity->clock_out)
                                        <div class="feed-item">
                                            <div class="feed-icon-box check-out-theme">
                                                <i><img src="{{ asset('images/Frame 84.png') }}" alt=""></i>
                                            </div>
                                            <div class="feed-details">
                                                <h4>Clock-Out</h4>
                                                <p>{{ \Carbon\Carbon::parse($activity->clock_out)->format('l, jS F Y') }}</p>
                                            </div>
                                            <div class="feed-timestamp">
                                                <span class="time">{{ \Carbon\Carbon::parse($activity->clock_out)->format('h:i A') }}</span>
                                                <span class="status-tag verified">Verified</span>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </section>
                    </div>
                    
                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            const timerDisplay   = document.getElementById("timer-counter");
                            const statusPill     = document.getElementById("status-pill");
                            const btnClockIn     = document.getElementById("btn-clock-in");
                            const btnClockOut    = document.getElementById("btn-clock-out");
                            const scannerWrapper = document.getElementById("qr-scanner-wrapper");
                            const scannerTitle   = document.getElementById("scanner-title");
                            const btnCancelScan  = document.getElementById("btn-cancel-scan");
                            const statusMsg      = document.getElementById("scanner-status-msg");
                        
                            let timerInterval = null;
                            let seconds = 0;
                            let html5QrcodeScanner = null;
                            let activeAction = ""; 
                        
                            const clockInTimestamp  = @json($today && $today->clock_in ? strtotime($today->clock_in) : null);
                            const clockOutTimestamp = @json($today && $today->clock_out ? strtotime($today->clock_out) : null);
                        
                            function formatTime(s) {
                                let h = Math.floor(s / 3600);
                                let m = Math.floor((s % 3600) / 60);
                                let sec = s % 60;
                                return String(h).padStart(2,'0') + ":" + String(m).padStart(2,'0') + ":" + String(sec).padStart(2,'0');
                            }
                        
                            function updateProgressMetrics(totalSeconds) {
                                const progressValueText = document.getElementById("logged-hours-value");
                                const progressBarFill   = document.getElementById("progress-bar-fill");
                        
                                if (!progressValueText || !progressBarFill) return;
                        
                                const hoursDecimal = (totalSeconds / 3600).toFixed(1);
                                const targetHoursCap = 8.0;
                                const progressPercentage = Math.min((hoursDecimal / targetHoursCap) * 100, 100);
                        
                                progressValueText.textContent = hoursDecimal + " / " + targetHoursCap + " hrs";
                                progressBarFill.style.width = progressPercentage + "%";
                            }
                        
                            if (clockInTimestamp) {
                                if (clockOutTimestamp) {
                                    seconds = clockOutTimestamp - clockInTimestamp;
                                    if (timerDisplay) timerDisplay.textContent = formatTime(seconds);
                                    updateProgressMetrics(seconds);
                                    
                                    setDisabledStyles(btnClockIn, "Shift Completed");
                                    setDisabledStyles(btnClockOut, "Clocked Out");
                                    
                                    if (statusPill) {
                                        statusPill.innerHTML = '<span class="dot"></span> SHIFT COMPLETE';
                                        statusPill.className = "status-pill status-out";
                                    }
                                } else {
                                    setDisabledStyles(btnClockIn, "✓ Already Clocked In");
                        
                                    const calculateElapsed = () => {
                                        seconds = Math.floor(Date.now() / 1000) - clockInTimestamp;
                                        if (timerDisplay) timerDisplay.textContent = formatTime(seconds);
                                        updateProgressMetrics(seconds);
                                    };
                                    calculateElapsed();
                                    timerInterval = setInterval(calculateElapsed, 1000);
                                }
                            }
                        
                            function setDisabledStyles(button, text) {
                                if (!button) return;
                                button.disabled = true;
                                button.style.setProperty('background-color', '#cbd5e1', 'important');
                                button.style.setProperty('background', '#cbd5e1', 'important');
                                button.style.setProperty('color', '#64748b', 'important');
                                button.style.setProperty('border-color', '#cbd5e1', 'important');
                                button.style.cursor = "not-allowed";
                                button.innerHTML = text;
                            }
                        
                            function stopCameraAndCloseModal() {
                                if (statusMsg) statusMsg.style.display = "none";
                                
                                if (html5QrcodeScanner && html5QrcodeScanner.isScanning) {
                                    html5QrcodeScanner.stop().then(() => {
                                        html5QrcodeScanner.clear();
                                        if (scannerWrapper) scannerWrapper.style.display = "none";
                                    }).catch(() => {
                                        if (scannerWrapper) scannerWrapper.style.display = "none";
                                    });
                                } else {
                                    if (scannerWrapper) scannerWrapper.style.display = "none";
                                }
                            }
                        
                            btnCancelScan?.addEventListener("click", (e) => {
                                e.preventDefault();
                                stopCameraAndCloseModal();
                            });
                        
                            [btnClockIn, btnClockOut].forEach(btn => {
                                if (!btn) return;
                        
                                btn.addEventListener("click", function(e) {
                                    e.preventDefault();
                        
                                    const targetBtn = e.target.closest('button') || this;
                                    if (targetBtn.disabled) return;
                        
                                    activeAction = targetBtn.getAttribute("data-action") || "clock-in";
                                    
                                    if (scannerTitle) {
                                        scannerTitle.innerText = "Scanning to " + (activeAction === 'clock-in' ? 'Clock In' : 'Clock Out');
                                    }
                                    if (statusMsg) statusMsg.style.display = "none";
                                    if (scannerWrapper) scannerWrapper.style.display = "flex";
                        
                                    if (html5QrcodeScanner) {
                                        html5QrcodeScanner.clear();
                                    }
                                    html5QrcodeScanner = new Html5Qrcode("qr-reader");
                        
                                    const qrConfig = {
                                        fps: 15,
                                        qrbox: (w, h) => { return { width: 200, height: 200 }; }
                                    };
                        
                                    Html5Qrcode.getCameras().then(devices => {
                                        if (devices && devices.length) {
                                            const selectedCameraId = devices.length > 1 ? devices[devices.length - 1].id : devices[0].id;
                                            
                                            return html5QrcodeScanner.start(
                                                selectedCameraId,
                                                qrConfig,
                                                onScanSuccess,
                                                onScanFailure
                                            );
                                        } else {
                                            return html5QrcodeScanner.start(
                                                { facingMode: "user" },
                                                qrConfig,
                                                onScanSuccess,
                                                onScanFailure
                                            );
                                        }
                                    }).catch(err => {
                                        console.error("Camera access error:", err);
                                        alert("❌ Camera access error: Could not start video feed.");
                                        stopCameraAndCloseModal();
                                    });
                                });
                            });
                        
                            function onScanSuccess(decodedText, decodedResult) {
                                if (!html5QrcodeScanner) return;
                        
                                if (statusMsg) {
                                    statusMsg.style.display = "block";
                                    statusMsg.style.backgroundColor = "#e0f2fe";
                                    statusMsg.style.color = "#0369a1";
                                    statusMsg.innerText = "📍 Verifying building coordinates...";
                                }
                        
                                if (!navigator.geolocation) {
                                    alert("❌ Geolocation is not supported by your browser.");
                                    stopCameraAndCloseModal();
                                    return;
                                }
                        
                                navigator.geolocation.getCurrentPosition(
                                    (position) => {
                                        const accuracy = position.coords.accuracy;
                        
                                        // 1. Relaxed GPS Accuracy filter from 25m to 60m
                                        if (accuracy > 60) {
                                            alert("❌ GPS signal is too weak (" + Math.round(accuracy) + "m accuracy). Please go closer to the office.");
                                            stopCameraAndCloseModal();
                                            return;
                                        }
                        
                                        html5QrcodeScanner.stop().then(() => {
                                            html5QrcodeScanner.clear();
                                            if (scannerWrapper) scannerWrapper.style.display = "none";
                        
                                            // 2. Extracted path relative to current domain to fix CORS on local environment
                                            let parsedScannedUrl = new URL(decodedText, window.location.origin);
                                            let verificationUrl = new URL(parsedScannedUrl.pathname, window.location.origin);
                        
                                            verificationUrl.searchParams.append('action', activeAction);
                                            verificationUrl.searchParams.append('latitude', position.coords.latitude);
                                            verificationUrl.searchParams.append('longitude', position.coords.longitude);
                        
                                            fetch(verificationUrl.toString(), {
                                                method: 'GET',
                                                headers: {
                                                    'X-Requested-With': 'XMLHttpRequest',
                                                    'Accept': 'application/json'
                                                }
                                            })
                                            .then(res => res.json())
                                            .then(data => {
                                                if (data.success || data.status) {
                                                    alert("🎉 " + data.message);
                                                    location.reload(); 
                                                } else {
                                                    alert("❌ Error: " + data.message);
                                                }
                                            })
                                            .catch(() => alert("Network communication error executing verification request."));
                                        }).catch(err => {
                                            console.error("Scanner tracking error:", err);
                                        });
                                    },
                                    (error) => {
                                        stopCameraAndCloseModal();
                                        alert("❌ Location access denied or timed out. Please allow high-accuracy location permissions.");
                                    },
                                    {
                                        enableHighAccuracy: true,
                                        timeout: 8000,
                                        maximumAge: 0
                                    }
                                );
                            }
                        
                            function onScanFailure(error) {}
                        });
                        
                        const sidebar  = document.querySelector('.sidebar');
                        const overlay  = document.getElementById('sidebarOverlay');
                        const openBtn  = document.getElementById('openSidebar');
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

</x-layout>