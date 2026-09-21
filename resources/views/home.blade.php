<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Modern HealthCare - Sistem Informasi Klinik Modern" />
    <title>Modern HealthCare - Sistem Informasi Klinik</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons & Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        :root {
            --brand-blue: #0B5CFF;
            --brand-navy: #0A1E3F;
            --brand-bg: #F3F7FE;
            --text-dark: #0F172A;
            --text-muted: #64748B;
            --border-light: #E2E8F0;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text-dark);
            background-color: var(--brand-bg);
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        /* 1. NAVBAR */
        .navbar-custom {
            background: #FFFFFF;
            padding: 1.2rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.02);
        }

        .brand-logo-icon {
            width: 36px;
            height: 36px;
            background-color: var(--brand-blue);
            color: white;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .brand-title {
            font-weight: 800;
            font-size: 1.25rem;
            color: var(--brand-navy);
            line-height: 1.1;
        }

        .brand-subtitle {
            font-size: 0.75rem;
            color: var(--text-muted);
            font-weight: 500;
        }

        .nav-link-custom {
            font-weight: 600;
            font-size: 0.95rem;
            color: var(--text-dark);
            margin: 0 0.8rem;
            text-decoration: none;
            position: relative;
            padding-bottom: 4px;
        }

        .nav-link-custom.active,
        .nav-link-custom:hover {
            color: var(--brand-blue);
        }

        .btn-login-header {
            background-color: var(--brand-blue);
            color: #FFFFFF;
            border-radius: 10px;
            padding: 0.65rem 1.6rem;
            font-weight: 600;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            transition: all 0.2s;
        }

        .btn-login-header:hover {
            background-color: #004AD9;
            color: #FFFFFF;
        }

        /* 2. HERO SECTION */
        .hero-wrapper {
            position: relative;
            padding: 4rem 0 6rem 0;
            background: radial-gradient(circle at 10% 20%, #E8F0FE 0%, #F3F7FE 100%);
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: #EBF2FF;
            color: var(--brand-blue);
            padding: 0.4rem 1rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.8rem;
            margin-bottom: 1.5rem;
            border: 1px solid #D0E1FF;
        }

        .hero-headline {
            font-size: 3.2rem;
            font-weight: 800;
            color: var(--brand-navy);
            line-height: 1.2;
            margin-bottom: 1.25rem;
            letter-spacing: -0.5px;
        }

        .hero-headline .highlight {
            color: var(--brand-blue);
        }

        .hero-subtext {
            color: var(--text-muted);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 2rem;
            max-width: 520px;
        }

        /* BUTTONS */
        .btn-blue-pill {
            background-color: var(--brand-blue);
            color: white;
            border-radius: 50px;
            padding: 0.85rem 1.8rem;
            font-weight: 600;
            font-size: 0.95rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 8px 20px rgba(11, 92, 255, 0.25);
            transition: all 0.2s;
        }

        .btn-blue-pill:hover {
            background-color: #004AD9;
            color: white;
            transform: translateY(-1px);
        }

        .btn-outline-pill {
            background-color: #FFFFFF;
            color: var(--text-dark);
            border: 1px solid var(--border-light);
            border-radius: 50px;
            padding: 0.85rem 1.8rem;
            font-weight: 600;
            font-size: 0.95rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.2s;
        }

        .btn-outline-pill:hover {
            border-color: var(--brand-blue);
            color: var(--brand-blue);
            background-color: #FFFFFF;
        }

        /* STATS COUNTER */
        .stats-wrapper {
            display: flex;
            align-items: center;
            gap: 2.5rem;
            margin-top: 3rem;
            padding-top: 1.5rem;
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 0.85rem;
        }

        .stat-icon {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background-color: #EBF2FF;
            color: var(--brand-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
        }

        .stat-value {
            font-weight: 800;
            font-size: 1.25rem;
            color: var(--brand-navy);
            line-height: 1;
        }

        .stat-label {
            font-size: 0.75rem;
            color: var(--text-muted);
            margin-top: 0.2rem;
        }

        /* HERO IMAGE CONTAINER & FLOATING CARDS */
        .hero-img-container {
            position: relative;
            border-radius: 28px;
            overflow: hidden;
            border: 6px solid #FFFFFF;
            box-shadow: 0 20px 40px rgba(11, 92, 255, 0.08);
            background-color: #FFFFFF;
        }

        .hero-img-container img {
            width: 100%;
            height: 440px;
            object-fit: cover;
            display: block;
        }

        .card-accreditation {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(8px);
            border-radius: 16px;
            padding: 0.75rem 1.25rem;
            display: flex;
            align-items: center;
            gap: 0.85rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.8);
            z-index: 5;
        }

        .accreditation-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #10B981;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
        }

        .accreditation-title {
            font-weight: 700;
            font-size: 0.85rem;
            color: var(--brand-navy);
        }

        .accreditation-sub {
            font-size: 0.75rem;
            color: var(--text-muted);
        }

        .card-emergency-call {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background: #FFFFFF;
            border-radius: 18px;
            padding: 0.75rem 1.25rem 0.75rem 0.85rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--border-light);
            z-index: 5;
        }

        .emergency-call-icon {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background-color: var(--brand-blue);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .emergency-call-label {
            font-size: 0.68rem;
            font-weight: 700;
            color: var(--text-muted);
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .emergency-call-number {
            font-weight: 800;
            font-size: 1.05rem;
            color: var(--brand-navy);
        }

        /* 3. QUICK FLOATING BAR */
        .quick-bar-wrapper {
            margin-top: -3rem;
            position: relative;
            z-index: 20;
        }

        .quick-bar-card {
            background: #FFFFFF;
            border-radius: 20px;
            padding: 1.25rem;
            box-shadow: 0 15px 35px rgba(11, 92, 255, 0.06);
            border: 1px solid var(--border-light);
        }

        .quick-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 0.5rem 1rem;
            text-decoration: none;
            color: var(--text-dark);
            border-right: 1px solid var(--border-light);
            transition: all 0.2s;
        }

        .quick-item:last-child {
            border-right: none;
        }

        .quick-icon-box {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background-color: #EBF2FF;
            color: var(--brand-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .quick-title {
            font-weight: 700;
            font-size: 0.9rem;
            color: var(--brand-navy);
            margin-bottom: 0.1rem;
        }

        .quick-desc {
            font-size: 0.75rem;
            color: var(--text-muted);
        }

        /* 4. PREMIUM ABOUT US SECTION */
        .about-section {
            padding: 6rem 0;
            background-color: #FFFFFF;
            position: relative;
        }

        .about-img-box {
            position: relative;
            padding-right: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .about-main-img {
            width: 100%;
            height: 460px;
            object-fit: cover;
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(10, 30, 63, 0.08);
        }

        .about-experience-badge {
            position: absolute;
            bottom: 0;
            right: 0;
            background: var(--brand-navy);
            color: #FFFFFF;
            padding: 1.5rem;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(10, 30, 63, 0.2);
            max-width: 200px;
        }

        .about-experience-num {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--brand-blue);
            line-height: 1;
        }

        .about-feature-card {
            background: var(--brand-bg);
            border: 1px solid var(--border-light);
            border-radius: 16px;
            padding: 1.25rem;
            transition: all 0.3s ease;
            height: 100%;
        }

        .about-feature-card:hover {
            background: #FFFFFF;
            border-color: var(--brand-blue);
            box-shadow: 0 10px 25px rgba(11, 92, 255, 0.08);
            transform: translateY(-3px);
        }

        .about-feature-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background-color: #FFFFFF;
            color: var(--brand-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.04);
            margin-bottom: 0.85rem;
        }

        /* 5. PREMIUM SERVICES SECTION */
        .services-section {
            padding: 6rem 0;
            background-color: var(--brand-bg);
        }

        .service-card-premium {
            background: #FFFFFF;
            border: 1px solid var(--border-light);
            border-radius: 20px;
            padding: 2rem 1.5rem;
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .service-card-premium:hover {
            border-color: var(--brand-blue);
            box-shadow: 0 15px 35px rgba(11, 92, 255, 0.1);
            transform: translateY(-5px);
        }

        .service-icon-wrapper {
            width: 56px;
            height: 56px;
            border-radius: 16px;
            background-color: #EBF2FF;
            color: var(--brand-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
        }

        .service-card-premium:hover .service-icon-wrapper {
            background-color: var(--brand-blue);
            color: #FFFFFF;
        }

        .service-title {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--brand-navy);
            margin-bottom: 0.6rem;
        }

        .service-text {
            color: var(--text-muted);
            font-size: 0.875rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }

        .service-link {
            font-weight: 700;
            font-size: 0.85rem;
            color: var(--brand-blue);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            transition: gap 0.2s ease;
        }

        .service-card-premium:hover .service-link {
            gap: 0.75rem;
        }

        /* 6. GLASSMORPHISM GALLERY SECTION */
        .gallery-section {
            padding: 6rem 0;
            background: linear-gradient(135deg, #0A1E3F 0%, #163B70 100%);
            position: relative;
            overflow: hidden;
        }

        .gallery-section::before {
            content: '';
            position: absolute;
            top: -100px;
            left: -100px;
            width: 350px;
            height: 350px;
            background: rgba(11, 92, 255, 0.35);
            border-radius: 50%;
            filter: blur(90px);
        }

        .gallery-section::after {
            content: '';
            position: absolute;
            bottom: -100px;
            right: -100px;
            width: 350px;
            height: 350px;
            background: rgba(16, 185, 129, 0.25);
            border-radius: 50%;
            filter: blur(90px);
        }

        .glass-filter-pill {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: #FFFFFF;
            border-radius: 50px;
            padding: 0.5rem 1.25rem;
            font-size: 0.85rem;
            font-weight: 600;
            transition: all 0.3s ease;
            cursor: pointer;
            display: inline-block;
            margin: 0 0.25rem 0.5rem;
        }

        .glass-filter-pill:hover,
        .glass-filter-pill.active {
            background: var(--brand-blue);
            border-color: var(--brand-blue);
            box-shadow: 0 8px 20px rgba(11, 92, 255, 0.3);
            color: #FFFFFF;
        }

        .glass-gallery-card {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
            transition: all 0.4s ease;
            height: 280px;
        }

        .glass-gallery-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .glass-gallery-card:hover img {
            transform: scale(1.08);
        }

        .glass-gallery-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(0deg, rgba(10, 30, 63, 0.85) 0%, rgba(10, 30, 63, 0.1) 100%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 1.5rem;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .glass-gallery-card:hover .glass-gallery-overlay {
            opacity: 1;
        }

        .glass-badge-tag {
            align-self: flex-start;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #FFFFFF;
            font-size: 0.72rem;
            font-weight: 700;
            padding: 0.25rem 0.75rem;
            border-radius: 30px;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .glass-gallery-title {
            color: #FFFFFF;
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 0.2rem;
        }

        .glass-gallery-desc {
            color: rgba(255, 255, 255, 0.75);
            font-size: 0.8rem;
        }

        /* 7. PREMIUM OPERATIONAL HOURS SECTION */
        .operating-section {
            padding: 6rem 0;
            background-color: #FFFFFF;
        }

        .live-status-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: #ECFDF5;
            color: #059669;
            border: 1px solid #A7F3D0;
            border-radius: 50px;
            padding: 0.35rem 0.85rem;
            font-weight: 700;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .live-pulse-dot {
            width: 8px;
            height: 8px;
            background-color: #10B981;
            border-radius: 50%;
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.25);
        }

        .operating-card-main {
            background: var(--brand-bg);
            border: 1px solid var(--border-light);
            border-radius: 24px;
            padding: 2.25rem;
            height: 100%;
        }

        .schedule-row-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 0;
            border-bottom: 1px dashed var(--border-light);
        }

        .schedule-row-item:last-child {
            border-bottom: none;
        }

        .schedule-day-label {
            font-weight: 700;
            color: var(--brand-navy);
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 0.6rem;
        }

        .schedule-time-badge {
            background: #FFFFFF;
            border: 1px solid var(--border-light);
            color: var(--brand-blue);
            font-weight: 700;
            font-size: 0.85rem;
            padding: 0.4rem 0.9rem;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
        }

        .doctor-schedule-card {
            background: #FFFFFF;
            border: 1px solid var(--border-light);
            border-radius: 18px;
            padding: 1.25rem;
            display: flex;
            align-items: center;
            gap: 1rem;
            transition: all 0.3s ease;
        }

        .doctor-schedule-card:hover {
            border-color: var(--brand-blue);
            box-shadow: 0 10px 25px rgba(11, 92, 255, 0.08);
            transform: translateY(-2px);
        }

        .doctor-avatar-box {
            width: 50px;
            height: 50px;
            border-radius: 14px;
            object-fit: cover;
            border: 2px solid #EBF2FF;
        }

        .doctor-spec-title {
            font-size: 0.75rem;
            color: var(--brand-blue);
            font-weight: 700;
            text-transform: uppercase;
        }

        .doctor-name {
            font-weight: 800;
            font-size: 0.95rem;
            color: var(--brand-navy);
            margin-bottom: 0.1rem;
        }

        .doctor-time-info {
            font-size: 0.85rem;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }

        .emergency-banner-premium {
            background: linear-gradient(135deg, var(--brand-navy) 0%, #163B70 100%);
            border-radius: 20px;
            padding: 1.75rem 2rem;
            color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1.5rem;
        }

        /* 8. MODERN PREMIUM MINIMALIST FOOTER */
        .footer-premium {
            background-color: #061329;
            color: #94A3B8;
            padding-top: 5rem;
            padding-bottom: 2rem;
            position: relative;
            border-top: 2px solid rgba(11, 92, 255, 0.2);
        }

        .footer-logo-box {
            width: 38px;
            height: 38px;
            background-color: var(--brand-blue);
            color: white;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
        }

        .footer-title-heading {
            color: #FFFFFF;
            font-size: 0.95rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
        }

        .footer-nav-list {
            list-unstyled: true;
            padding-left: 0;
            margin-bottom: 0;
        }

        .footer-nav-list li {
            list-style: none;
            margin-bottom: 0.75rem;
        }

        .footer-nav-list a {
            color: #94A3B8;
            text-decoration: none;
            font-size: 0.88rem;
            font-weight: 500;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
        }

        .footer-nav-list a:hover {
            color: #FFFFFF;
            transform: translateX(3px);
        }

        .footer-social-btn {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #94A3B8;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-social-btn:hover {
            background-color: var(--brand-blue);
            border-color: var(--brand-blue);
            color: #FFFFFF;
            transform: translateY(-2px);
        }

        .footer-contact-item {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            font-size: 0.88rem;
            color: #94A3B8;
            margin-bottom: 0.85rem;
        }

        .footer-contact-icon {
            color: var(--brand-blue);
            font-size: 1.1rem;
            margin-top: 0.1rem;
        }

        .footer-divider {
            border-color: rgba(255, 255, 255, 0.08);
            margin: 3rem 0 2rem 0;
        }

        .footer-legal-link {
            color: #64748B;
            text-decoration: none;
            font-size: 0.8rem;
            margin-left: 1.25rem;
            transition: color 0.2s;
        }

        .footer-legal-link:hover {
            color: #94A3B8;
        }

        /* RESPONSIVE */
        @media (max-width: 991.98px) {
            .hero-headline {
                font-size: 2.3rem;
            }

            .quick-item {
                border-right: none;
                border-bottom: 1px solid var(--border-light);
                padding: 0.8rem 0;
            }

            .quick-item:last-child {
                border-bottom: none;
            }

            .stats-wrapper {
                flex-wrap: wrap;
                gap: 1.5rem;
            }

            .about-img-box {
                padding-right: 0;
                padding-bottom: 0;
                margin-bottom: 3rem;
            }

            .about-experience-badge {
                position: relative;
                max-width: 100%;
                margin-top: -2rem;
            }

            .glass-gallery-overlay {
                opacity: 1;
                background: linear-gradient(0deg, rgba(10, 30, 63, 0.9) 0%, rgba(10, 30, 63, 0.2) 100%);
            }

            .footer-legal-link {
                margin-left: 0;
                margin-right: 1rem;
            }
        }
    </style>
</head>

<body>

    <!-- 1. NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <div class="brand-logo-icon">
                    <i class="bi bi-activity"></i>
                </div>
                <div>
                    <div class="brand-title">Modern HealthCare</div>
                    <div class="brand-subtitle">Sistem Informasi Klinik</div>
                </div>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto d-flex align-items-center py-2 py-lg-0">
                    <a href="#" class="nav-link-custom active">Beranda</a>
                    <a href="#about" class="nav-link-custom">Tentang Kami</a>
                    <a href="#layanan" class="nav-link-custom">Layanan</a>
                    <a href="#galeri" class="nav-link-custom">Galeri</a>
                    <a href="#jam-operasional" class="nav-link-custom">Jam Operasional</a>
                    <a href="#fitur" class="nav-link-custom">Fitur Sistem</a>
                </div>

                <div class="d-flex align-items-center gap-2">
                    <a href="/login" class="btn-login-header">
                        <i class="bi bi-person-fill"></i> Login
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <!-- 2. HERO SECTION -->
        <section class="hero-wrapper">
            <div class="container">
                <div class="row align-items-center gy-5">
                    <!-- LEFT COLUMN: TEXT CONTENT -->
                    <div class="col-lg-6">
                        <div class="hero-badge">
                            <i class="bi bi-shield-check"></i> Sistem Informasi Kesehatan Modern
                        </div>

                        <h1 class="hero-headline">
                            Layanan Kesehatan <br>
                            <span class="highlight">Terpercaya</span> & <br>
                            Terintegrasi Digital
                        </h1>

                        <p class="hero-subtext">
                            Kemudahan akses layanan medis harian. Reservasi antrean poliklinik secara online, konsolidasi rekam medis modern, serta konsultasi dokter spesialis dalam satu platform terpadu.
                        </p>

                        <div class="d-flex flex-wrap align-items-center gap-3">
                            <a href="/register" class="btn-blue-pill">
                                <i class="bi bi-calendar-check"></i> Daftar Antrean Online <i class="bi bi-arrow-right"></i>
                            </a>
                            <a href="#layanan" class="btn-outline-pill">
                                <i class="bi bi-heart-pulse"></i> Lihat Layanan
                            </a>
                        </div>

                        <!-- COUNTER STATS -->
                        <div class="stats-wrapper">
                            <div class="stat-item">
                                <div class="stat-icon">
                                    <i class="bi bi-person-badge"></i>
                                </div>
                                <div>
                                    <div class="stat-value">15+</div>
                                    <div class="stat-label">Dokter Spesialis</div>
                                </div>
                            </div>

                            <div class="stat-item">
                                <div class="stat-icon">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div>
                                    <div class="stat-value">10K+</div>
                                    <div class="stat-label">Pasien Terlayani</div>
                                </div>
                            </div>

                            <div class="stat-item">
                                <div class="stat-icon">
                                    <i class="bi bi-star-fill text-primary"></i>
                                </div>
                                <div>
                                    <div class="stat-value">4.9/5</div>
                                    <div class="stat-label">Tingkat Kepuasan</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN: HERO IMAGE & FLOATING CARDS -->
                    <div class="col-lg-6">
                        <div class="hero-img-container">
                            <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?q=80&w=800&auto=format&fit=crop" alt="Praktek Klinik Modern">

                            <!-- FLOATING CARD TOP RIGHT -->
                            <div class="card-accreditation">
                                <div class="accreditation-icon">
                                    <i class="bi bi-shield-fill-check"></i>
                                </div>
                                <div>
                                    <div class="accreditation-title">Terkreditasi Paripurna</div>
                                    <div class="accreditation-sub">Standar Pelayanan Kemenkes</div>
                                </div>
                                <i class="bi bi-chevron-right text-muted ms-2 fs-7"></i>
                            </div>

                            <!-- FLOATING CARD BOTTOM LEFT -->
                            <div class="card-emergency-call">
                                <div class="emergency-call-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div>
                                    <div class="emergency-call-label">GAWAT DARURAT 24 JAM</div>
                                    <div class="emergency-call-number">+62 (024) 7654-3210</div>
                                </div>
                                <i class="bi bi-chevron-right text-muted ms-2 fs-7"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. QUICK FLOATING BAR -->
        <section class="quick-bar-wrapper">
            <div class="container">
                <div class="quick-bar-card">
                    <div class="row g-0">
                        <div class="col-lg-3 col-md-6">
                            <a href="/register" class="quick-item">
                                <div class="quick-icon-box">
                                    <i class="bi bi-calendar3"></i>
                                </div>
                                <div>
                                    <div class="quick-title">Cari Dokter</div>
                                    <div class="quick-desc">Jadwal spesialis harian</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <a href="#about" class="quick-item">
                                <div class="quick-icon-box">
                                    <i class="bi bi-info-circle"></i>
                                </div>
                                <div>
                                    <div class="quick-title">Pusat Bantuan</div>
                                    <div class="quick-desc">Informasi & alur layanan</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <a href="/register" class="quick-item">
                                <div class="quick-icon-box">
                                    <i class="bi bi-journal-check"></i>
                                </div>
                                <div>
                                    <div class="quick-title">Janji Temu</div>
                                    <div class="quick-desc">Ambil nomor antrean</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <a href="/login" class="quick-item">
                                <div class="quick-icon-box">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <div>
                                    <div class="quick-title">Portal Pasien</div>
                                    <div class="quick-desc">Cek riwayat rekam medis</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. PREMIUM ABOUT US SECTION -->
        <section class="about-section" id="about">
            <div class="container py-4">
                <div class="row align-items-center gy-5">
                    <!-- LEFT SIDE: IMAGE & EXPERIENCES -->
                    <div class="col-lg-6">
                        <div class="about-img-box">
                            <img src="https://images.unsplash.com/photo-1551076805-e1869033e561?q=80&w=800&auto=format&fit=crop" class="about-main-img" alt="Tim Dokter Profesional">

                            <div class="about-experience-badge">
                                <div class="about-experience-num">10+</div>
                                <div class="fw-bold mt-1 fs-6">Tahun Pengabdian</div>
                                <div class="small opacity-75">Melayani dengan standar medis tertinggi</div>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT SIDE: CONTENT -->
                    <div class="col-lg-6">
                        <div class="hero-badge">
                            <i class="bi bi-building"></i> Tentang Modern HealthCare
                        </div>

                        <h2 class="fw-bold text-dark fs-1 mb-3" style="color: var(--brand-navy) !important;">
                            Mewujudkan Layanan Medis Modern yang Transparan & Ramah Pasien
                        </h2>

                        <p class="text-muted leading-relaxed mb-4">
                            <strong>Modern HealthCare</strong> hadir sebagai solusi digitalisasi poliklinik terpadu yang dirancang untuk menghilangkan kerumitan antrean fisik. Kami menggabungkan keahlian medis dari dokter spesialis berpengalaman dengan teknologi manajemen rekam medis yang aman dan cepat.
                        </p>

                        <!-- FEATURE GRID CARDS -->
                        <div class="row g-3 mb-4">
                            <div class="col-sm-6">
                                <div class="about-feature-card">
                                    <div class="about-feature-icon">
                                        <i class="bi bi-clock-history"></i>
                                    </div>
                                    <h6 class="fw-bold text-dark mb-1">Efisiensi Waktu</h6>
                                    <p class="text-muted small mb-0">Pasien dapat memantau estimasi jam panggil antrean secara real-time dari rumah.</p>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="about-feature-card">
                                    <div class="about-feature-icon">
                                        <i class="bi bi-file-earmark-medical"></i>
                                    </div>
                                    <h6 class="fw-bold text-dark mb-1">Rekam Medis Aman</h6>
                                    <p class="text-muted small mb-0">Riwayat diagnosa dan resep obat tersimpan aman dan mudah diakses kapan saja.</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-3 pt-2">
                            <a href="/register" class="btn-blue-pill">
                                Konsultasi Sekarang <i class="bi bi-arrow-right"></i>
                            </a>
                            <div class="d-flex align-items-center gap-2 ms-2">
                                <i class="bi bi-patch-check-fill text-primary fs-4"></i>
                                <span class="fw-bold text-dark small">Kemenkes Registered</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. PREMIUM SERVICES SECTION -->
        <section class="services-section" id="layanan">
            <div class="container">
                <div class="text-center max-w-600 mx-auto mb-5">
                    <div class="hero-badge mb-2"><i class="bi bi-heart-pulse-fill"></i> Layanan Medis Unggulan</div>
                    <h2 class="fw-bold text-dark fs-1" style="color: var(--brand-navy) !important;">Poliklinik & Spesialisasi</h2>
                    <p class="text-muted">Komitmen kami memberikan penanganan medis yang presisi, holistik, dan komprehensif bagi seluruh pasien.</p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card-premium">
                            <div class="service-icon-wrapper">
                                <i class="bi bi-hospital"></i>
                            </div>
                            <h3 class="service-title">Poliklinik Umum</h3>
                            <p class="service-text">
                                Layanan pemeriksaan kesehatan menyeluruh, konsultasi keluhan umum, pencegahan penyakit, serta tindakan medis tingkat dasar.
                            </p>
                            <a href="/register" class="service-link">
                                Buat Janji Temu <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card-premium">
                            <div class="service-icon-wrapper">
                                <i class="bi bi-emoji-smile"></i>
                            </div>
                            <h3 class="service-title">Poliklinik Gigi & Mulut</h3>
                            <p class="service-text">
                                Perawatan estetika dan kesehatan gigi, mulai dari scaling, penambalan, pencabutan, hingga konsultasi ortodonti.
                            </p>
                            <a href="/register" class="service-link">
                                Buat Janji Temu <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card-premium">
                            <div class="service-icon-wrapper">
                                <i class="bi bi-person-arms-up"></i>
                            </div>
                            <h3 class="service-title">Poliklinik Anak (Pediatri)</h3>
                            <p class="service-text">
                                Pelayanan tumbuh kembang anak, imunisasi rutin, dan penanganan gangguan kesehatan spesifik pada bayi dan anak.
                            </p>
                            <a href="/register" class="service-link">
                                Buat Janji Temu <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card-premium">
                            <div class="service-icon-wrapper">
                                <i class="bi bi-capsule"></i>
                            </div>
                            <h3 class="service-title">Apotek & E-Resep</h3>
                            <p class="service-text">
                                Penyediaan obat-obatan terverifikasi dan integrasi langsung dengan resep elektronik dari dokter penanggung jawab.
                            </p>
                            <a href="/register" class="service-link">
                                Buat Janji Temu <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card-premium">
                            <div class="service-icon-wrapper">
                                <i class="bi bi-activity"></i>
                            </div>
                            <h3 class="service-title">Penyakit Dalam (Internis)</h3>
                            <p class="service-text">
                                Diagnosis dan manajemen pengobatan organ dalam seperti diabetes, hipertensi, pencernaan, dan gangguan metabolik.
                            </p>
                            <a href="/register" class="service-link">
                                Buat Janji Temu <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card-premium">
                            <div class="service-icon-wrapper">
                                <i class="bi bi-clipboard2-pulse"></i>
                            </div>
                            <h3 class="service-title">Laboratorium Medis</h3>
                            <p class="service-text">
                                Fasilitas tes darah lengkap, sampel diagnostik, dan uji kesehatan rutin dengan akurasi hasil laboratorium tinggi.
                            </p>
                            <a href="/register" class="service-link">
                                Buat Janji Temu <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6. GLASSMORPHISM GALLERY SECTION -->
        <section class="gallery-section" id="galeri">
            <div class="container position-relative" style="z-index: 2;">
                <div class="text-center max-w-600 mx-auto mb-4">
                    <h2 class="fw-bold text-white fs-1 mb-2">Galeri Fasilitas & Pelayanan</h2>
                    <p class="text-white-50">Mengintip infrastruktur teknologi kesehatan, kenyamanan poliklinik, dan dedikasi tim medis kami.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="glass-gallery-card">
                            <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?q=80&w=800&auto=format&fit=crop" alt="Ruang Tunggu Pasien">
                            <div class="glass-gallery-overlay">
                                <span class="glass-badge-tag">Fasilitas</span>
                                <h4 class="glass-gallery-title">Ruang Tunggu Nyaman</h4>
                                <p class="glass-gallery-desc">Dilengkapi pendingin ruangan dan pemantau antrean layar digital.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="glass-gallery-card">
                            <img src="https://images.unsplash.com/photo-1629909615184-74f495363b67?q=80&w=800&auto=format&fit=crop" alt="Pemeriksaan Gigi">
                            <div class="glass-gallery-overlay">
                                <span class="glass-badge-tag">Poliklinik</span>
                                <h4 class="glass-gallery-title">Ruang Praktek Gigi</h4>
                                <p class="glass-gallery-desc">Peralatan kedokteran gigi mutakhir dengan sterilisasi berkala.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="glass-gallery-card">
                            <img src="https://images.unsplash.com/photo-1581595220892-b0739db3ba8c?q=80&w=800&auto=format&fit=crop" alt="Laboratorium Diagnostik">
                            <div class="glass-gallery-overlay">
                                <span class="glass-badge-tag">Laboratorium</span>
                                <h4 class="glass-gallery-title">Pusat Analisis Darah</h4>
                                <p class="glass-gallery-desc">Pemeriksaan sampel presisi tinggi dengan sistem komputerisasi.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="glass-gallery-card">
                            <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?q=80&w=800&auto=format&fit=crop" alt="Konsultasi Dokter">
                            <div class="glass-gallery-overlay">
                                <span class="glass-badge-tag">Pelayanan</span>
                                <h4 class="glass-gallery-title">Konsultasi Ramah</h4>
                                <p class="glass-gallery-desc">Pemeriksaan fisik komprehensif bersama spesialis terpercaya.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="glass-gallery-card">
                            <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?q=80&w=800&auto=format&fit=crop" alt="Instalasi Farmasi">
                            <div class="glass-gallery-overlay">
                                <span class="glass-badge-tag">Farmasi</span>
                                <h4 class="glass-gallery-title">Depo Farmasi Terpadu</h4>
                                <p class="glass-gallery-desc">Pengambilan obat cepat sesuai e-resep resmi dari dokter.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="glass-gallery-card">
                            <img src="https://images.unsplash.com/photo-1516549655169-df83a0774514?q=80&w=800&auto=format&fit=crop" alt="Unit Pengawasan Digital">
                            <div class="glass-gallery-overlay">
                                <span class="glass-badge-tag">Teknologi</span>
                                <h4 class="glass-gallery-title">Pusat Data Rekam Medis</h4>
                                <p class="glass-gallery-desc">Sistem integrasi antrean dan rekam medis terenkripsi tinggi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 8. FITUR MODUL TERPADU -->
        <section class="py-5 bg-light" id="fitur">
            <div class="container py-4 text-center">
                <div class="hero-badge"><i class="bi bi-grid-fill"></i> Modul Terpadu</div>
                <h2 class="fw-bold text-dark mt-2" style="color: var(--brand-navy) !important;">Solusi Kesehatan Terintegrasi</h2>
                <p class="text-muted max-w-600 mx-auto">Memudahkan pasien, dokter, dan admin dalam mengelola operasional poliklinik secara efektif.</p>

                <div class="row g-4 mt-3 text-start">
                    <div class="col-md-4">
                        <div class="p-4 bg-white rounded-4 border shadow-sm h-100">
                            <div class="quick-icon-box mb-3" style="width: 52px; height: 52px; font-size: 1.4rem;">
                                <i class="bi bi-person-plus-fill"></i>
                            </div>
                            <h5 class="fw-bold text-dark">Pendaftaran Pasien</h5>
                            <p class="text-muted small mb-0">Registrasi No. RM digital dan ambil antrean poliklinik dari mana saja tanpa antre fisik.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 bg-white rounded-4 border shadow-sm h-100">
                            <div class="quick-icon-box mb-3" style="width: 52px; height: 52px; font-size: 1.4rem;">
                                <i class="bi bi-stethoscope"></i>
                            </div>
                            <h5 class="fw-bold text-dark">Portal Praktik Dokter</h5>
                            <p class="text-muted small mb-0">Manajemen jadwal harian, pemeriksaan fisik, rekam medis pasien, dan e-resep otomatis.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 bg-white rounded-4 border shadow-sm h-100">
                            <div class="quick-icon-box mb-3" style="width: 52px; height: 52px; font-size: 1.4rem;">
                                <i class="bi bi-cpu-fill"></i>
                            </div>
                            <h5 class="fw-bold text-dark">Panel Manajemen Admin</h5>
                            <p class="text-muted small mb-0">Pengelolaan master data dokter, poli, jadwal klinik, hingga inventaris obat-obatan terpusat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="operating-section" id="jam-operasional">
            <div class="container py-3">
                <div class="row gy-5 align-items-stretch">
                    <div class="col-lg-6">
                        <div class="operating-card-main">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="hero-badge m-0">
                                    <i class="bi bi-clock-history"></i> Waktu Pelayanan
                                </div>
                                <div class="live-status-pill">
                                    <span class="live-pulse-dot"></span> Klinik Buka Hari Ini
                                </div>
                            </div>

                            <h3 class="fw-bold text-dark fs-2 mb-2" style="color: var(--brand-navy) !important;">
                                Jam Operasional Klinik
                            </h3>
                            <p class="text-muted small mb-4">
                                Pelayanan poliklinik reguler buka sesuai jadwal di bawah. Disarankan melakukan reservasi antrean online sebelum kedatangan.
                            </p>

                            <div class="schedule-list">
                                <div class="schedule-row-item">
                                    <div class="schedule-day-label">
                                        <i class="bi bi-calendar-week text-primary"></i> Senin - Jumat
                                    </div>
                                    <div class="schedule-time-badge">
                                        08:00 - 20:00 WIB
                                    </div>
                                </div>

                                <div class="schedule-row-item">
                                    <div class="schedule-day-label">
                                        <i class="bi bi-calendar-event text-primary"></i> Sabtu
                                    </div>
                                    <div class="schedule-time-badge">
                                        08:00 - 16:00 WIB
                                    </div>
                                </div>

                                <div class="schedule-row-item">
                                    <div class="schedule-day-label">
                                        <i class="bi bi-calendar-x text-danger"></i> Minggu & Hari Libur
                                    </div>
                                    <div class="badge bg-danger-subtle text-danger border border-danger-subtle px-3 py-2 rounded-3 fw-bold">
                                        Hanya Layanan Darurat
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="operating-card-main bg-white">
                            <div class="hero-badge mb-3">
                                <i class="bi bi-person-workspace"></i> Jadwal Dokter Spesialis
                            </div>
                            <h3 class="fw-bold text-dark fs-2 mb-2" style="color: var(--brand-navy) !important;">
                                Dokter Praktik Hari Ini
                            </h3>
                            <p class="text-muted small mb-4">
                                Jadwal dapat berubah sewaktu-waktu. Cek ketersediaan slot melalui sistem antrean.
                            </p>

                            <div class="d-flex flex-column gap-3">
                                <div class="doctor-schedule-card">
                                    <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?q=80&w=200&auto=format&fit=crop" class="doctor-avatar-box" alt="Dr. Budi Santoso">
                                    <div class="flex-grow-1">
                                        <div class="doctor-spec-title">Poliklinik Umum</div>
                                        <div class="doctor-name">dr. Budi Santoso, Sp.PD</div>
                                        <div class="doctor-time-info">
                                            <i class="bi bi-clock me-1 text-primary"></i> 08:00 - 14:00 WIB
                                        </div>
                                    </div>
                                    <a href="/register" class="btn btn-sm btn-outline-primary fw-bold rounded-3">
                                        Daftar
                                    </a>
                                </div>

                                <div class="doctor-schedule-card">
                                    <img src="https://images.unsplash.com/photo-1594824813566-888553a1f11c?q=80&w=200&auto=format&fit=crop" class="doctor-avatar-box" alt="Dr. Sarah Anindita">
                                    <div class="flex-grow-1">
                                        <div class="doctor-spec-title">Poliklinik Gigi</div>
                                        <div class="doctor-name">drg. Sarah Anindita</div>
                                        <div class="doctor-time-info">
                                            <i class="bi bi-clock me-1 text-primary"></i> 13:00 - 18:00 WIB
                                        </div>
                                    </div>
                                    <a href="/register" class="btn btn-sm btn-outline-primary fw-bold rounded-3">
                                        Daftar
                                    </a>
                                </div>

                                <div class="doctor-schedule-card">
                                    <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?q=80&w=200&auto=format&fit=crop" class="doctor-avatar-box" alt="Dr. Hendra Wijaya">
                                    <div class="flex-grow-1">
                                        <div class="doctor-spec-title">Poliklinik Anak</div>
                                        <div class="doctor-name">dr. Hendra Wijaya, Sp.A</div>
                                        <div class="doctor-time-info">
                                            <i class="bi bi-clock me-1 text-primary"></i> 16:00 - 20:00 WIB
                                        </div>
                                    </div>
                                    <a href="/register" class="btn btn-sm btn-outline-primary fw-bold rounded-3">
                                        Daftar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="emergency-banner-premium">
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-primary bg-opacity-25 p-3 rounded-circle text-info fs-3">
                                <i class="bi bi-telephone-inbound-fill"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-white mb-1">Butuh Penanganan Darurat Segera?</h5>
                                <p class="text-white-50 small mb-0">Layanan ambulans dan instalasi gawat darurat (IGD) kami siap siaga 24 jam penuh.</p>
                            </div>
                        </div>
                        <a href="tel:+6202476543210" class="btn btn-light fw-bold px-4 py-2 text-primary rounded-pill shadow-sm">
                            <i class="bi bi-telephone-fill me-1"></i> Hubungi +62 (024) 7654-3210
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- 9. MODERN PREMIUM MINIMALIST FOOTER -->
    <footer class="footer-premium" id="kontak">
        <div class="container">
            <div class="row g-4 justify-content-between">
                <!-- Col 1: Brand & Bio -->
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <div class="footer-logo-box">
                            <i class="bi bi-activity"></i>
                        </div>
                        <div>
                            <div class="fw-bold text-white fs-5 lh-1">Modern HealthCare</div>
                            <small class="text-white-50" style="font-size: 0.72rem;">Sistem Informasi Klinik</small>
                        </div>
                    </div>
                    <p class="small text-white-50 mb-4" style="line-height: 1.6;">
                        Platform digital terpadu untuk efisiensi pendaftaran poliklinik, rekam medis modern, dan pengelolaan jadwal praktik dokter secara terenkripsi dan aman.
                    </p>
                    <div class="d-flex gap-2">
                        <a href="#" class="footer-social-btn"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="footer-social-btn"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="footer-social-btn"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="footer-social-btn"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <!-- Col 2: Navigasi Cepat -->
                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-title-heading">Navigasi</h6>
                    <ul class="footer-nav-list">
                        <li><a href="#"><i class="bi bi-chevron-right text-primary"></i> Beranda</a></li>
                        <li><a href="#about"><i class="bi bi-chevron-right text-primary"></i> Tentang Kami</a></li>
                        <li><a href="#layanan"><i class="bi bi-chevron-right text-primary"></i> Layanan Poli</a></li>
                        <li><a href="#galeri"><i class="bi bi-chevron-right text-primary"></i> Galeri Klinik</a></li>
                        <li><a href="#jam-operasional"><i class="bi bi-chevron-right text-primary"></i> Jam Operasional</a></li>
                    </ul>
                </div>

                <!-- Col 3: Akses Portal -->
                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-title-heading">Akses Portal</h6>
                    <ul class="footer-nav-list">
                        <li><a href="/register">Pendaftaran Pasien</a></li>
                        <li><a href="/login">Portal Pasien (RM)</a></li>
                        <li><a href="/login">Portal Dokter Praktik</a></li>
                        <li><a href="/login">Panel Administrator</a></li>
                        <li><a href="#jam-operasional">Cek Antrean Realtime</a></li>
                    </ul>
                </div>

                <!-- Col 4: Informasi Kontak -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="footer-title-heading">Pusat Informasi</h6>
                    <div class="footer-contact-item">
                        <i class="bi bi-geo-alt-fill footer-contact-icon"></i>
                        <span>Jl. Imam Bonjol No. 207, Semarang, Jawa Tengah</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="bi bi-telephone-fill footer-contact-icon"></i>
                        <span>+62 (024) 7654-3210</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="bi bi-envelope-fill footer-contact-icon"></i>
                        <span>layanan@modernhealthcare.com</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="bi bi-clock-fill footer-contact-icon"></i>
                        <span>Senin - Sabtu (08:00 - 20:00 WIB)</span>
                    </div>
                </div>
            </div>

            <!-- Divider Line -->
            <hr class="footer-divider">

            <!-- Bottom Copyright & Legal -->
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center text-white-50 small">
                <p class="mb-2 mb-md-0">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> <strong>Modern HealthCare</strong>. Hak Cipta Dilindungi Undang-Undang.
                </p>
                <div class="d-flex flex-wrap align-items-center">
                    <a href="#" class="footer-legal-link">Kebijakan Privasi</a>
                    <a href="#" class="footer-legal-link">Syarat & Ketentuan</a>
                    <a href="#" class="footer-legal-link">Standar Kemenkes</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>