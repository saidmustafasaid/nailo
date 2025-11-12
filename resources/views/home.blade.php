<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nailo - Smart Recycling Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #198754;
        }
        .navbar-brand, .nav-link, .navbar-toggler-icon {
            color: white !important;
        }
        .hero {
            background: url('https://images.unsplash.com/photo-1607860108855-37ec8a5170d2?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
            color: white;
            text-align: center;
            padding: 120px 20px;
            position: relative;
        }
        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background-color: rgba(0,0,0,0.5);
        }
        .hero h1, .hero p {
            position: relative;
            z-index: 2;
        }
        .btn-whatsapp {
            background-color: #25D366;
            color: white;
            border: none;
            transition: 0.3s;
        }
        .btn-whatsapp:hover {
            background-color: #1EBE5D;
        }
        footer {
            background-color: #198754;
            color: white;
            text-align: center;
            padding: 15px 10px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Nailo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1 class="display-4 fw-bold">Welcome to Nailo</h1>
        <p class="lead">Your platform for smart plastic recycling and community sustainability.</p>
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg me-2">Admin Login</a>
        <a href="{{ route('submissions.create') }}" class="btn btn-light btn-lg">Submit Plastic</a>
    </div>
</section>

<!-- Contact via WhatsApp -->
<section class="container text-center my-5">
    <h3 class="text-success mb-4">Contact Us on WhatsApp</h3>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
        <a href="https://wa.me/255712345678" target="_blank" class="btn btn-whatsapp">
            <i class="bi bi-whatsapp me-2"></i> Chat with Nailo Team 1
        </a>
        <a href="https://wa.me/255798765432" target="_blank" class="btn btn-whatsapp">
            <i class="bi bi-whatsapp me-2"></i> Chat with Nailo Team 2
        </a>
    </div>
</section>

<!-- About Section -->
<section class="container text-center my-5">
    <h2 class="fw-bold text-success mb-4">Our Mission</h2>
    <p class="text-muted">
        At Nailo, we empower communities to recycle and earn rewards while keeping our environment clean.
        Together, we build a cleaner, smarter future.
    </p>
</section>

<!-- Footer -->
<footer>
    <p class="mb-0">Smart Solution for Clean Future 🌍</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
