<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nailo Smart Company Limited — Recycle & Earn / Piga Picha & Pata Pesa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      overflow-x: hidden;
      background-color: #f0f2f5;
      margin: 0;
    }

    /* 🔹 HEADER / NAVBAR */
    header {
      background: linear-gradient(90deg, #198754, #0d6efd);
      color: white;
      padding: 15px 40px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .logo-container {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .logo-container img {
      height: 60px;
      width: auto;
      border-radius: 10px;
    }

    .company-text {
      display: flex;
      flex-direction: column;
    }

    .company-text h2 {
      font-size: 1.5rem;
      margin: 0;
      font-weight: 700;
    }

    .company-text span {
      font-size: 0.9rem;
      color: #e2e6ea;
      font-weight: 500;
    }

    /* 🔹 Top buttons */
    .header-actions a {
      background: white;
      color: #198754;
      border-radius: 25px;
      padding: 6px 16px;
      text-decoration: none;
      font-weight: 600;
      margin-left: 10px;
      transition: all 0.3s;
    }

    .header-actions a:hover {
      background: #e9f7ef;
      transform: scale(1.05);
    }

    /* 🔹 Hero Section */
    .hero {
      background: linear-gradient(to right, rgba(25,135,84,0.85), rgba(13,110,253,0.85)), 
                  url('https://images.unsplash.com/photo-1602163845564-f07f8e8b13e8?auto=format&fit=crop&w=1500&q=80')
                  center/cover no-repeat;
      height: 100vh;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      flex-direction: column;
      padding: 0 20px;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
      animation: fadeInDown 1.5s ease;
    }

    .hero p {
      font-size: 1.3rem;
      margin-top: 15px;
      animation: fadeInUp 2s ease;
    }

    @keyframes fadeInDown { from {opacity: 0; transform: translateY(-30px);} to {opacity: 1; transform: translateY(0);} }
    @keyframes fadeInUp { from {opacity: 0; transform: translateY(30px);} to {opacity: 1; transform: translateY(0);} }

    .btn-glow {
      background-color: #198754;
      color: white;
      border: none;
      padding: 12px 30px;
      border-radius: 30px;
      transition: all 0.3s;
      box-shadow: 0 0 10px rgba(25,135,84,0.5);
    }

    .btn-glow:hover {
      background-color: #157347;
      transform: scale(1.05);
    }

    /* 🔹 Sections */
    .section {
      padding: 80px 20px;
    }

    .section-title {
      font-weight: 700;
      color: #198754;
      text-align: center;
      margin-bottom: 50px;
    }

    .icon-box {
      text-align: center;
      padding: 20px;
      transition: transform 0.3s, box-shadow 0.3s;
      border-radius: 15px;
      background-color: white;
      box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    }

    .icon-box:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }

    .icon-box i {
      font-size: 3rem;
      color: #198754;
      margin-bottom: 15px;
    }

    /* 🔹 Footer */
    .footer {
      background-color: #198754;
      color: white;
      text-align: center;
      padding: 25px;
      margin-top: 60px;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <div class="logo-container">
      <img src="{{ asset('images/logo.png') }}" alt="Nailo Logo">
      <div class="company-text">
        <h2>Nailo Smart Company Ltd</h2>
        <span>Smart solution for clean future</span>
      </div>
    </div>

    <div class="header-actions">
      <a href="{{ route('admin.submissions') }}"><i class="bi bi-person-lock me-1"></i> Admin</a>
      <a href="#sell" class="lang-btn">Sell Plastics</a>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <h1>Join Nailo — Recycle & Earn</h1>
    <p>Together, let’s build a cleaner and greener Tanzania.</p>
    <a href="#sell" class="btn btn-glow mt-4">Get Started</a>
  </section>

  <!-- About Section -->
  <section class="section container about">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4">
        <img src="https://images.unsplash.com/photo-1601758124065-27e0b9c9414a?auto=format&fit=crop&w=1200&q=80" alt="Recycling" class="img-fluid rounded">
      </div>
      <div class="col-md-6">
        <h2 class="section-title">About Nailo Smart Company Limited</h2>
        <p>
          Nailo Smart Company Limited empowers individuals and businesses by collecting plastic packaging waste, such as crates and bottle holders, at 500 TZS per kilogram. We collect, weigh, and pay instantly to support a cleaner Tanzania.
        </p>
      </div>
    </div>
  </section>

  <!-- How It Works -->
  <section class="section container text-center">
    <h2 class="section-title">How It Works</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="icon-box">
          <i class="bi bi-box-seam"></i>
          <h5>Collect Plastic Holders</h5>
          <p>Gather plastic crates and packaging materials (not bottles) used for drinks.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="icon-box">
          <i class="bi bi-chat-dots"></i>
          <h5>Submit & Schedule</h5>
          <p>Submit your details on the form below to schedule a pickup via WhatsApp or call.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="icon-box">
          <i class="bi bi-currency-dollar"></i>
          <h5>Get Paid Instantly</h5>
          <p>We weigh your plastics and pay you instantly 500 TZS per kg.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sell Plastics Form -->
  <section id="sell" class="section sell-form bg-light">
    <div class="container">
      <h2 class="section-title">Sell Your Plastics</h2>
      @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
      @endif
      <form action="{{ route('sell-plastics') }}" method="POST" class="mx-auto" style="max-width: 600px;">
        @csrf
        <div class="mb-3">
          <label>Name</label>
          <input type="text" name="name" class="form-control" placeholder="Your full name" required>
        </div>
        <div class="mb-3">
          <label>Phone Number</label>
          <input type="text" name="phone" class="form-control" placeholder="0712 345 678" required>
        </div>
        <div class="mb-3">
          <label>Location</label>
          <input type="text" name="location" class="form-control" placeholder="Your area or city" required>
        </div>
        <div class="mb-3">
          <label>Kilograms of Plastic</label>
          <input type="number" step="0.1" name="kilograms" class="form-control" placeholder="5.5" required>
        </div>
        <button type="submit" class="btn btn-glow w-100">Submit</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <p class="mb-2">Contact: WhatsApp (+255 627 759 597 / +255 798 765 432) | Email: Info@NailoSmartcompany.com</p>
      <p class="mb-0">&copy; {{ date('Y') }} Nailo Smart Company Limited — Smart solution for clean future. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
