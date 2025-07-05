<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinTrack - Personal Finance Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #2ecc71;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            background-color: var(--primary-color) !important;
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 100px 0;
        }

        .feature-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }

        .cta-section {
            background-color: #f8f9fa;
            padding: 80px 0;
        }

        .btn-primary {
            background-color: var(--secondary-color);
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
        }

        .btn-primary:hover {
            background-color: var(--primary-color);
        }

        .btn-outline-light {
            border-width: 2px;
            padding: 12px 30px;
            border-radius: 25px;
        }

        .btn-outline-light:hover {
            background-color: white;
            color: var(--primary-color);
        }

        .navbar-toggler {
            border: none;
            padding: 0;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 60px 0;
            }

            .feature-card {
                margin-bottom: 20px;
            }

            .cta-section {
                padding: 60px 0;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">FinTrack</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="nav-link btn btn-primary" href="<?= base_url('/Login'); ?>">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start mb-5 mb-lg-0">
                    <h1 class="display-4 fw-bold mb-4">Take Control of Your Finances</h1>
                    <p class="lead mb-4">Track your expenses, set budgets, and achieve your financial goals with our
                        easy-to-use personal finance management tool.</p>
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start">
                        <a href="<?php echo base_url('auth/register'); ?>" class="btn btn-light btn-lg">Get Started
                            Free</a>
                        <a href="#features" class="btn btn-outline-light btn-lg">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/600x400" alt="Finance Dashboard"
                        class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Key Features</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card p-4">
                        <div class="card-body text-center">
                            <i class="fas fa-chart-line feature-icon"></i>
                            <h3 class="h5">Expense Tracking</h3>
                            <p class="text-muted">Easily track your daily expenses and income with detailed
                                categorization.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card p-4">
                        <div class="card-body text-center">
                            <i class="fas fa-piggy-bank feature-icon"></i>
                            <h3 class="h5">Budget Planning</h3>
                            <p class="text-muted">Set and manage budgets for different categories to stay on track.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card p-4">
                        <div class="card-body text-center">
                            <i class="fas fa-chart-pie feature-icon"></i>
                            <h3 class="h5">Visual Reports</h3>
                            <p class="text-muted">Get detailed insights with beautiful charts and financial reports.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container text-center">
            <h2 class="mb-4">Ready to Start Your Financial Journey?</h2>
            <p class="lead mb-4">Join thousands of users who are already managing their finances better.</p>
            <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                <a href="<?php echo base_url('auth/register'); ?>" class="btn btn-primary btn-lg">Create Free
                    Account</a>
                <a href="#contact" class="btn btn-outline-primary btn-lg">Contact Sales</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-4 mb-md-0">
                    <h5 class="mb-3">FinTrack</h5>
                    <p class="text-muted mb-0">Your personal finance management solution.</p>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-md-end gap-3">
                        <a href="#" class="text-muted text-decoration-none">Privacy Policy</a>
                        <a href="#" class="text-muted text-decoration-none">Terms of Service</a>
                        <a href="#" class="text-muted text-decoration-none">Contact Us</a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="text-muted mb-0">&copy; 2024 FinTrack. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>