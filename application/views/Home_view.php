<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedora - Smart Workshop Scheduler untuk Perusahaan</title>
    <meta name="description" content="Platform penjadwalan workshop perusahaan yang mudah dan efisien. Kelola ruangan, peserta, dan absensi dalam satu aplikasi.">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            /* Schedora Brand Colors */
            --primary-blue: #2563EB;
            --primary-blue-hover: #1D4ED8;
            --accent-green: #16A34A;
            --accent-green-hover: #15803D;
            --light-blue: #EFF6FF;
            --light-green: #F0FDF4;
            --text-primary: #111827;
            --text-secondary: #6B7280;
            --bg-gradient: linear-gradient(135deg, #2563EB 0%, #16A34A 100%);
            --shadow-soft: 0 4px 16px -4px rgba(37, 99, 235, 0.15);
            --shadow-medium: 0 8px 32px -8px rgba(37, 99, 235, 0.2);
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text-primary);
        }

        /* Custom Gradients */
        .bg-gradient-hero {
            background: var(--bg-gradient);
        }

        .bg-gradient-soft {
            background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
        }

        .text-gradient {
            background: var(--bg-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Custom Buttons */
        .btn-hero {
            background: var(--bg-gradient);
            border: none;
            color: white;
            font-weight: 600;
            padding: 12px 32px;
            border-radius: 8px;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-soft);
        }

        .btn-hero:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
            color: white;
        }

        .btn-accent {
            background-color: var(--accent-green);
            border: none;
            color: white;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-accent:hover {
            background-color: var(--accent-green-hover);
            color: white;
        }

        /* Header */
        .navbar-custom {
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid #e5e7eb;
        }

        .navbar-brand-custom {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--text-primary);
            text-decoration: none;
        }

        .brand-icon {
            width: 32px;
            height: 32px;
            background: var(--bg-gradient);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        /* Hero Section */
        .hero-section {
            min-height: 100vh;
            background: var(--bg-gradient-soft);
            display: flex;
            align-items: center;
            padding-top: 80px;
            position: relative;
            overflow: hidden;
        }

        .hero-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .hero-dashboard {
            border-radius: 16px;
            box-shadow: var(--shadow-medium);
            max-width: 100%;
            height: auto;
        }

        .floating-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            padding: 16px;
            position: absolute;
            box-shadow: var(--shadow-soft);
        }

        .floating-card-1 {
            top: 25%;
            left: -20px;
        }

        .floating-card-2 {
            bottom: 25%;
            right: -20px;
        }

        /* Feature Icons */
        .feature-icon {
            width: 48px;
            height: 48px;
            background: var(--bg-gradient);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            transition: transform 0.3s ease;
        }

        .feature-icon:hover {
            transform: scale(1.1);
        }

        /* Cards */
        .card-custom {
            border: none;
            border-radius: 16px;
            box-shadow: var(--shadow-soft);
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
        }

        .card-custom:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-medium);
        }

        .card-popular {
            transform: scale(1.05);
            border: 2px solid var(--primary-blue);
            position: relative;
        }

        .popular-badge {
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--bg-gradient);
            color: white;
            padding: 4px 16px;
            border-radius: 16px;
            font-size: 0.875rem;
            font-weight: 600;
        }

        /* Testimonials */
        .testimonial-card {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
            border: none;
            border-radius: 16px;
            position: relative;
        }

        .quote-icon {
            position: absolute;
            top: -12px;
            left: 24px;
            width: 24px;
            height: 24px;
            background: var(--bg-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.75rem;
        }

        /* Contact Form */
        .form-control:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 0.2rem rgba(37, 99, 235, 0.25);
        }

        /* Footer */
        .footer-custom {
            background: var(--bg-gradient-soft);
            border-top: 1px solid #e5e7eb;
        }

        /* Utilities */
        .text-primary-custom {
            color: var(--primary-blue);
        }

        .text-accent-custom {
            color: var(--accent-green);
        }

        .text-muted-custom {
            color: var(--text-secondary);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .floating-card {
                display: none;
            }
            
            .hero-section {
                padding-top: 60px;
            }
            
            .card-popular {
                transform: none;
            }
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Section spacing */
        .section-padding {
            padding: 80px 0;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand-custom" href="#home">
                <div class="brand-icon">
                    <i class="bi bi-calendar-event"></i>
                </div>
                Schedora
            </a>
            
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#packages">Paket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
                
                <div class="d-flex gap-2">
                    <button class="btn btn-outline-primary">Masuk</button>
                    <button class="btn btn-hero">Coba Gratis</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <h1 class="display-4 fw-bold mb-4">
                            Atur Jadwal Workshop dengan 
                            <span class="text-gradient">Mudah & Efisien</span>
                        </h1>
                        <p class="lead text-muted-custom mb-4">
                            Schedora membantu perusahaan Anda mengelola workshop, ruangan, peserta, dan absensi dalam satu platform yang terintegrasi.
                        </p>
                    </div>

                    <!-- Key Benefits -->
                    <div class="row g-3 mb-5">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <div class="feature-icon" style="width: 40px; height: 40px;">
                                        <i class="bi bi-calendar-check"></i>
                                    </div>
                                </div>
                                <span class="fw-medium">Penjadwalan Otomatis</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <div class="feature-icon" style="width: 40px; height: 40px; background-color: var(--accent-green);">
                                        <i class="bi bi-people"></i>
                                    </div>
                                </div>
                                <span class="fw-medium">Kelola Peserta</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <div class="feature-icon" style="width: 40px; height: 40px;">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                </div>
                                <span class="fw-medium">Manajemen Ruangan</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <div class="feature-icon" style="width: 40px; height: 40px; background-color: var(--accent-green);">
                                        <i class="bi bi-graph-up"></i>
                                    </div>
                                </div>
                                <span class="fw-medium">Laporan Lengkap</span>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="d-flex flex-column flex-sm-row gap-3 mb-5">
                        <button class="btn btn-hero btn-lg">Coba Gratis</button>
                        <button class="btn btn-outline-primary btn-lg">Lihat Demo</button>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="pt-3">
                        <p class="small text-muted-custom mb-2">Dipercaya oleh 100+ perusahaan di Indonesia</p>
                        <div class="d-flex flex-wrap gap-3 small text-muted-custom">
                            <span>✓ Keamanan Tingkat Enterprise</span>
                            <span>✓ Support 24/7</span>
                            <span>✓ Free Trial 14 Hari</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="position-relative">
                        <div class="hero-float">
                            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                                 alt="Schedora Dashboard Interface" class="hero-dashboard img-fluid">
                        </div>
                        
                        <!-- Floating Cards -->
                        <div class="floating-card floating-card-1 d-none d-lg-block">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <div class="rounded-circle" style="width: 12px; height: 12px; background-color: var(--accent-green);"></div>
                                </div>
                                <div>
                                    <div class="fw-medium small">Workshop Active</div>
                                    <div class="text-muted small">12 peserta online</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="floating-card floating-card-2 d-none d-lg-block">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <div class="rounded-circle" style="width: 12px; height: 12px; background-color: var(--primary-blue);"></div>
                                </div>
                                <div>
                                    <div class="fw-medium small">Ruang Meeting A</div>
                                    <div class="text-muted small">Tersedia hingga 15:00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-4">
                    Fitur Lengkap untuk 
                    <span class="text-gradient">Manajemen Workshop</span>
                </h2>
                <p class="lead text-muted-custom">
                    Solusi komprehensif yang menggabungkan semua kebutuhan manajemen workshop dalam satu platform
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card card-custom h-100">
                        <div class="card-body p-4">
                            <div class="feature-icon mb-4">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <h5 class="card-title mb-3">Kelola Ruangan</h5>
                            <p class="card-text text-muted-custom mb-3">
                                Manajemen ruang meeting dan workshop dengan sistem booking yang terintegrasi
                            </p>
                            <ul class="list-unstyled small text-muted-custom">
                                <li class="mb-1">• Real-time availability</li>
                                <li class="mb-1">• Kapasitas otomatis</li>
                                <li class="mb-1">• Equipment tracking</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card card-custom h-100">
                        <div class="card-body p-4">
                            <div class="feature-icon mb-4">
                                <i class="bi bi-calendar-check"></i>
                            </div>
                            <h5 class="card-title mb-3">Penjadwalan Otomatis</h5>
                            <p class="card-text text-muted-custom mb-3">
                                Sistem penjadwalan cerdas yang menghindari konflik dan mengoptimalkan penggunaan ruang
                            </p>
                            <ul class="list-unstyled small text-muted-custom">
                                <li class="mb-1">• Smart scheduling</li>
                                <li class="mb-1">• Conflict detection</li>
                                <li class="mb-1">• Auto-reminders</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card card-custom h-100">
                        <div class="card-body p-4">
                            <div class="feature-icon mb-4" style="background-color: var(--accent-green);">
                                <i class="bi bi-people"></i>
                            </div>
                            <h5 class="card-title mb-3">Penugasan Peserta</h5>
                            <p class="card-text text-muted-custom mb-3">
                                Undang dan kelola peserta workshop dengan sistem notifikasi otomatis
                            </p>
                            <ul class="list-unstyled small text-muted-custom">
                                <li class="mb-1">• Bulk invitation</li>
                                <li class="mb-1">• RSVP tracking</li>
                                <li class="mb-1">• Waitlist management</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card card-custom h-100">
                        <div class="card-body p-4">
                            <div class="feature-icon mb-4">
                                <i class="bi bi-clipboard-check"></i>
                            </div>
                            <h5 class="card-title mb-3">Absensi Digital</h5>
                            <p class="card-text text-muted-custom mb-3">
                                Sistem absensi digital dengan QR code dan integrasi real-time
                            </p>
                            <ul class="list-unstyled small text-muted-custom">
                                <li class="mb-1">• QR code check-in</li>
                                <li class="mb-1">• Real-time tracking</li>
                                <li class="mb-1">• Late alerts</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card card-custom h-100">
                        <div class="card-body p-4">
                            <div class="feature-icon mb-4" style="background-color: var(--accent-green);">
                                <i class="bi bi-graph-up"></i>
                            </div>
                            <h5 class="card-title mb-3">Laporan & Monitoring</h5>
                            <p class="card-text text-muted-custom mb-3">
                                Dashboard analytics lengkap untuk memantau performa workshop perusahaan
                            </p>
                            <ul class="list-unstyled small text-muted-custom">
                                <li class="mb-1">• Attendance analytics</li>
                                <li class="mb-1">• Usage reports</li>
                                <li class="mb-1">• ROI tracking</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card card-custom h-100">
                        <div class="card-body p-4">
                            <div class="feature-icon mb-4">
                                <i class="bi bi-gear"></i>
                            </div>
                            <h5 class="card-title mb-3">Integrasi Enterprise</h5>
                            <p class="card-text text-muted-custom mb-3">
                                Integrasikan dengan sistem HR dan calendar perusahaan yang sudah ada
                            </p>
                            <ul class="list-unstyled small text-muted-custom">
                                <li class="mb-1">• HR system sync</li>
                                <li class="mb-1">• Calendar integration</li>
                                <li class="mb-1">• SSO support</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <div class="d-inline-flex align-items-center bg-white rounded-pill px-4 py-3 shadow-sm">
                    <div class="me-2">
                        <div class="rounded-circle" style="width: 8px; height: 8px; background-color: var(--accent-green); animation: pulse 2s infinite;"></div>
                    </div>
                    <span class="small fw-medium">Semua fitur tersedia dalam trial gratis 14 hari</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Features/Packages Section -->
    <section id="packages" class="section-padding bg-gradient-soft">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-4">
                    Paket yang Sesuai dengan 
                    <span class="text-gradient">Kebutuhan Anda</span>
                </h2>
                <p class="lead text-muted-custom">
                    Pilih paket yang tepat untuk mengoptimalkan manajemen workshop perusahaan Anda
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Free Trial -->
                <div class="col-lg-4 col-md-6">
                    <div class="card card-custom h-100">
                        <div class="card-body text-center p-4">
                            <h5 class="card-title mb-3">Free Trial</h5>
                            <div class="mb-3">
                                <span class="h3 fw-bold text-primary-custom">Gratis</span>
                                <span class="text-muted-custom">/14 hari</span>
                            </div>
                            <p class="text-muted-custom mb-4">Cocok untuk mencoba fitur dasar</p>
                            
                            <ul class="list-unstyled text-start mb-4">
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Hingga 5 workshop per bulan</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Maksimal 20 peserta</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>1 ruang meeting virtual</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Laporan dasar</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Email support</li>
                            </ul>
                            
                            <button class="btn btn-outline-primary w-100">Mulai Trial</button>
                        </div>
                    </div>
                </div>

                <!-- Basic -->
                <div class="col-lg-4 col-md-6">
                    <div class="card card-custom card-popular h-100">
                        <div class="popular-badge">
                            <i class="bi bi-star-fill me-1"></i>Paling Populer
                        </div>
                        <div class="card-body text-center p-4">
                            <h5 class="card-title mb-3">Basic</h5>
                            <div class="mb-3">
                                <span class="h3 fw-bold text-primary-custom">Rp 299.000</span>
                                <span class="text-muted-custom">/per bulan</span>
                            </div>
                            <p class="text-muted-custom mb-4">Untuk tim kecil dan startup</p>
                            
                            <ul class="list-unstyled text-start mb-4">
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Hingga 25 workshop per bulan</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Maksimal 100 peserta</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>5 ruang meeting</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Absensi digital</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Laporan & analytics</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Chat support</li>
                            </ul>
                            
                            <button class="btn btn-hero w-100">Pilih Basic</button>
                        </div>
                    </div>
                </div>

                <!-- Pro -->
                <div class="col-lg-4 col-md-6">
                    <div class="card card-custom h-100">
                        <div class="card-body text-center p-4">
                            <h5 class="card-title mb-3">Pro</h5>
                            <div class="mb-3">
                                <span class="h3 fw-bold text-primary-custom">Rp 599.000</span>
                                <span class="text-muted-custom">/per bulan</span>
                            </div>
                            <p class="text-muted-custom mb-4">Untuk perusahaan menengah ke atas</p>
                            
                            <ul class="list-unstyled text-start mb-4">
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Workshop unlimited</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Peserta unlimited</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Ruang meeting unlimited</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Advanced analytics</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Custom branding</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>API integration</li>
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Priority support</li>
                            </ul>
                            
                            <button class="btn btn-accent w-100">Pilih Pro</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <p class="text-muted-custom mb-3">
                    Butuh paket enterprise? Kami siap membantu dengan solusi custom.
                </p>
                <button class="btn btn-outline-primary">Hubungi Tim Sales</button>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-4">
                    Apa Kata 
                    <span class="text-gradient">Pengguna Kami</span>
                </h2>
                <p class="lead text-muted-custom">
                    Bergabung dengan ratusan perusahaan yang telah merasakan manfaat Schedora
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card testimonial-card h-100">
                        <div class="quote-icon">
                            <i class="bi bi-quote"></i>
                        </div>
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <blockquote class="text-muted-custom mb-4">
                                "Schedora sangat membantu kami mengorganisir training bulanan. Sebelumnya butuh 2 hari untuk koordinasi, sekarang cukup 30 menit. Tim HR sangat terbantu dengan automation features-nya."
                            </blockquote>
                            <div class="d-flex align-items-center">
                                <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&w=60&h=60&fit=crop&crop=face" 
                                     alt="Sarah Putri" class="rounded-circle me-3" style="width: 40px; height: 40px; object-fit: cover;">
                                <div>
                                    <div class="fw-semibold small">Sarah Putri</div>
                                    <div class="text-muted small">HR Manager, PT Teknologi Maju</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card testimonial-card h-100">
                        <div class="quote-icon">
                            <i class="bi bi-quote"></i>
                        </div>
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <blockquote class="text-muted-custom mb-4">
                                "Interface yang user-friendly dan customer support yang responsive. Fitur absensi digital-nya sangat akurat dan real-time reporting membantu kami track ROI dari setiap workshop."
                            </blockquote>
                            <div class="d-flex align-items-center">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&w=60&h=60&fit=crop&crop=face" 
                                     alt="Budi Santoso" class="rounded-circle me-3" style="width: 40px; height: 40px; object-fit: cover;">
                                <div>
                                    <div class="fw-semibold small">Budi Santoso</div>
                                    <div class="text-muted small">Training Coordinator, CV Berkah Sejahtera</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card testimonial-card h-100">
                        <div class="quote-icon">
                            <i class="bi bi-quote"></i>
                        </div>
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <blockquote class="text-muted-custom mb-4">
                                "Setelah menggunakan Schedora, conflict scheduling hampir tidak pernah terjadi lagi. Automated reminder feature-nya juga meningkatkan attendance rate workshop kami hingga 35%."
                            </blockquote>
                            <div class="d-flex align-items-center">
                                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&w=60&h=60&fit=crop&crop=face" 
                                     alt="Diana Sari" class="rounded-circle me-3" style="width: 40px; height: 40px; object-fit: cover;">
                                <div>
                                    <div class="fw-semibold small">Diana Sari</div>
                                    <div class="text-muted small">Operations Manager, PT Digital Indonesia</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats -->
            <div class="row g-4 mt-5">
                <div class="col-6 col-md-3 text-center">
                    <div class="h2 fw-bold text-primary-custom mb-2">100+</div>
                    <div class="small text-muted-custom">Perusahaan</div>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <div class="h2 fw-bold text-accent-custom mb-2">15K+</div>
                    <div class="small text-muted-custom">Workshop Terjadwal</div>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <div class="h2 fw-bold text-primary-custom mb-2">98%</div>
                    <div class="small text-muted-custom">Kepuasan User</div>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <div class="h2 fw-bold text-accent-custom mb-2">24/7</div>
                    <div class="small text-muted-custom">Customer Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding bg-gradient-soft">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4">
                        Tentang 
                        <span class="text-gradient">Schedora</span>
                    </h2>
                    <div class="text-muted-custom">
                        <p class="mb-4">
                            Schedora hadir sebagai solusi digital untuk mengatasi kompleksitas manajemen workshop dan training di perusahaan. Kami memahami bahwa koordinasi acara internal seringkali memakan waktu dan rentan terhadap kesalahan.
                        </p>
                        <p class="mb-4">
                            Platform kami dikembangkan khusus untuk mendukung efisiensi perusahaan dalam mengelola knowledge sharing dan pelatihan internal. Dengan teknologi cloud-based dan interface yang intuitif, Schedora memungkinkan tim HR dan Training Coordinator untuk fokus pada hal yang lebih strategis.
                        </p>
                        <p class="mb-0">
                            Didukung oleh tim developer berpengalaman dan customer success yang memahami kebutuhan perusahaan Indonesia, kami berkomitmen memberikan solusi yang tidak hanya canggih, tetapi juga mudah digunakan.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h3 class="h4 fw-semibold mb-4">Mengapa Memilih Schedora?</h3>
                    
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="card card-custom">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-start">
                                        <div class="feature-icon me-3" style="width: 40px; height: 40px;">
                                            <i class="bi bi-shield-check"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-2">Keamanan Enterprise</h6>
                                            <p class="small text-muted-custom mb-0">
                                                Enkripsi end-to-end dan compliance dengan standar keamanan internasional
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card card-custom">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-start">
                                        <div class="feature-icon me-3" style="width: 40px; height: 40px;">
                                            <i class="bi bi-clock"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-2">Efisiensi Waktu</h6>
                                            <p class="small text-muted-custom mb-0">
                                                Hemat hingga 80% waktu dalam koordinasi workshop dan manajemen peserta
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card card-custom">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-start">
                                        <div class="feature-icon me-3" style="width: 40px; height: 40px; background-color: var(--accent-green);">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-2">Support Lokal</h6>
                                            <p class="small text-muted-custom mb-0">
                                                Tim customer success berbahasa Indonesia siap membantu 24/7
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card card-custom">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-start">
                                        <div class="feature-icon me-3" style="width: 40px; height: 40px;">
                                            <i class="bi bi-award"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-2">Proven Results</h6>
                                            <p class="small text-muted-custom mb-0">
                                                Dipercaya 100+ perusahaan dengan track record peningkatan produktivitas
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mission Statement -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-10">
                    <div class="card card-custom text-center">
                        <div class="card-body p-5">
                            <h4 class="fw-semibold mb-4">Misi Kami</h4>
                            <p class="lead text-muted-custom mb-0">
                                "Memberdayakan setiap perusahaan dengan teknologi yang memudahkan pengelolaan knowledge sharing, 
                                sehingga tim dapat fokus pada pengembangan SDM dan inovasi yang lebih bermakna."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-4">
                    Hubungi 
                    <span class="text-gradient">Tim Kami</span>
                </h2>
                <p class="lead text-muted-custom">
                    Siap membantu implementasi Schedora di perusahaan Anda. Konsultasi gratis tersedia!
                </p>
            </div>

            <div class="row g-5">
                <!-- Contact Form -->
                <div class="col-lg-6">
                    <div class="card card-custom">
                        <div class="card-header bg-transparent border-0 pt-4">
                            <h5 class="card-title mb-0">Kirim Pesan</h5>
                        </div>
                        <div class="card-body p-4">
                            <form id="contactForm">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="nama" class="form-label">Nama Lengkap *</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required placeholder="John Doe">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email *</label>
                                        <input type="email" class="form-control" id="email" name="email" required placeholder="john@perusahaan.com">
                                    </div>
                                    <div class="col-12">
                                        <label for="perusahaan" class="form-label">Nama Perusahaan *</label>
                                        <input type="text" class="form-control" id="perusahaan" name="perusahaan" required placeholder="PT Contoh Perusahaan">
                                    </div>
                                    <div class="col-12">
                                        <label for="pesan" class="form-label">Pesan</label>
                                        <textarea class="form-control" id="pesan" name="pesan" rows="4" placeholder="Ceritakan kebutuhan workshop management di perusahaan Anda..."></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-hero w-100">Kirim Pesan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="col-lg-6">
                    <div class="mb-4">
                        <h5 class="fw-semibold mb-3">Informasi Kontak</h5>
                        <p class="text-muted-custom">
                            Tim customer success kami siap membantu Anda dengan implementasi yang smooth dan training yang komprehensif.
                        </p>
                    </div>

                    <div class="row g-3 mb-4">
                        <div class="col-12">
                            <div class="card card-custom">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="feature-icon me-3" style="width: 40px; height: 40px;">
                                            <i class="bi bi-envelope"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Email Support</h6>
                                            <div class="text-primary-custom fw-medium small">support@schedora.id</div>
                                            <div class="text-muted small">Respon dalam 2 jam kerja</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card card-custom">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="feature-icon me-3" style="width: 40px; height: 40px; background-color: var(--accent-green);">
                                            <i class="bi bi-whatsapp"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">WhatsApp Business</h6>
                                            <div class="text-primary-custom fw-medium small">+62 812-3456-7890</div>
                                            <div class="text-muted small">Chat langsung dengan tim</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card card-custom">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="feature-icon me-3" style="width: 40px; height: 40px;">
                                            <i class="bi bi-telephone"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Phone Support</h6>
                                            <div class="text-primary-custom fw-medium small">+62 21-5555-0123</div>
                                            <div class="text-muted small">Senin-Jumat, 09:00-17:00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card card-custom">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="feature-icon me-3" style="width: 40px; height: 40px; background-color: var(--accent-green);">
                                            <i class="bi bi-geo-alt"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-1">Kantor Jakarta</h6>
                                            <div class="text-primary-custom fw-medium small">Menara BCA, Thamrin</div>
                                            <div class="text-muted small">Kunjungi untuk demo langsung</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-primary">
                            <i class="bi bi-whatsapp me-2"></i>Chat via WhatsApp
                        </button>
                        <button class="btn btn-accent">
                            <i class="bi bi-telephone me-2"></i>Request Demo Call
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-custom pt-5 pb-4">
        <div class="container">
            <div class="row g-4">
                <!-- Company Info -->
                <div class="col-lg-4">
                    <div class="navbar-brand-custom mb-3">
                        <div class="brand-icon">
                            <i class="bi bi-calendar-event"></i>
                        </div>
                        Schedora
                    </div>
                    <p class="text-muted-custom mb-4">
                        Platform penjadwalan workshop perusahaan yang membantu efisiensi koordinasi dan manajemen peserta dalam satu sistem terintegrasi.
                    </p>
                    <div class="small text-muted-custom">
                        <div class="mb-2">
                            <i class="bi bi-envelope me-2"></i>support@schedora.id
                        </div>
                        <div class="mb-2">
                            <i class="bi bi-telephone me-2"></i>+62 21-5555-0123
                        </div>
                        <div class="mb-2">
                            <i class="bi bi-geo-alt me-2"></i>Menara BCA, Jakarta Pusat
                        </div>
                    </div>
                </div>

                <!-- Product -->
                <div class="col-6 col-lg-2">
                    <h6 class="fw-semibold mb-3">Produk</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#services" class="text-muted-custom text-decoration-none small">Fitur</a></li>
                        <li class="mb-2"><a href="#packages" class="text-muted-custom text-decoration-none small">Paket Harga</a></li>
                        <li class="mb-2"><a href="#contact" class="text-muted-custom text-decoration-none small">Demo</a></li>
                        <li class="mb-2"><a href="#" class="text-muted-custom text-decoration-none small">API Documentation</a></li>
                    </ul>
                </div>

                <!-- Company -->
                <div class="col-6 col-lg-2">
                    <h6 class="fw-semibold mb-3">Perusahaan</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#about" class="text-muted-custom text-decoration-none small">Tentang Kami</a></li>
                        <li class="mb-2"><a href="#" class="text-muted-custom text-decoration-none small">Karir</a></li>
                        <li class="mb-2"><a href="#" class="text-muted-custom text-decoration-none small">Blog</a></li>
                        <li class="mb-2"><a href="#" class="text-muted-custom text-decoration-none small">Press Kit</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div class="col-6 col-lg-2">
                    <h6 class="fw-semibold mb-3">Dukungan</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted-custom text-decoration-none small">Help Center</a></li>
                        <li class="mb-2"><a href="#contact" class="text-muted-custom text-decoration-none small">Kontak</a></li>
                        <li class="mb-2"><a href="#" class="text-muted-custom text-decoration-none small">Status</a></li>
                        <li class="mb-2"><a href="#" class="text-muted-custom text-decoration-none small">Panduan</a></li>
                    </ul>
                </div>

                <!-- Legal -->
                <div class="col-6 col-lg-2">
                    <h6 class="fw-semibold mb-3">Legal</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted-custom text-decoration-none small">Privacy Policy</a></li>
                        <li class="mb-2"><a href="#" class="text-muted-custom text-decoration-none small">Terms of Service</a></li>
                        <li class="mb-2"><a href="#" class="text-muted-custom text-decoration-none small">Cookie Policy</a></li>
                        <li class="mb-2"><a href="#" class="text-muted-custom text-decoration-none small">GDPR</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <hr class="mt-5 mb-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="small text-muted-custom mb-0">
                        © 2024 Schedora. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <span class="small text-muted-custom">Made with ❤️ in Indonesia</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Contact form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // Show success message (replace with actual API call)
            alert('Pesan berhasil dikirim! Tim kami akan menghubungi Anda dalam 24 jam.');
            
            // Reset form
            this.reset();
        });

        // Add navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-custom');
            if (window.scrollY > 50) {
                navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
            } else {
                navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.9)';
            }
        });

        // Add animation to stats when in view
        const observerOptions = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe cards for animation
        document.querySelectorAll('.card-custom').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'all 0.6s ease';
            observer.observe(card);
        });
    </script>
</body>
</html>