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
    body { font-family: 'Poppins', sans-serif; overflow-x: hidden; background-color: #f0f2f5; }
    .top-controls { position: fixed; top: 15px; right: 15px; z-index: 1000; display: flex; gap: 10px; align-items: center; }
    .top-controls button, .top-controls a { border-radius: 20px; padding: 5px 15px; border: none; color: white; text-decoration: none; display: inline-flex; align-items: center; font-size: 0.85rem; font-weight: 600; transition: all 0.3s; }
    .lang-btn { background-color: #198754; }
    .lang-btn:hover { background-color: #157347; transform: scale(1.05); }
    .admin-btn { background-color: #0d6efd; }
    .admin-btn:hover { background-color: #0b5ed7; transform: scale(1.05); }

    .hero { background: linear-gradient(to right, rgba(25, 135, 84, 0.85), rgba(13, 110, 253, 0.85)), url('https://images.unsplash.com/photo-1602163845564-f07f8e8b13e8?auto=format&fit=crop&w=1500&q=80') center/cover no-repeat; height: 100vh; color: white; display: flex; align-items: center; justify-content: center; text-align: center; flex-direction: column; padding: 0 20px; }
    .hero h1 { font-size: 3rem; font-weight: 700; animation: fadeInDown 1.5s ease; }
    .hero p { font-size: 1.3rem; margin-top: 15px; animation: fadeInUp 2s ease; }
    @keyframes fadeInDown { from {opacity: 0; transform: translateY(-30px);} to {opacity: 1; transform: translateY(0);} }
    @keyframes fadeInUp { from {opacity: 0; transform: translateY(30px);} to {opacity: 1; transform: translateY(0);} }

    .btn-glow { background-color: #198754; color: white; border: none; padding: 12px 30px; border-radius: 30px; transition: all 0.3s; box-shadow: 0 0 10px rgba(25,135,84,0.5); }
    .btn-glow:hover { background-color: #157347; transform: scale(1.05); }

    .contact-links { padding: 20px; background-color: #e9ecef; border-radius: 10px; margin-bottom: 50px; text-align: center; }
    .contact-links a { color: #198754; font-weight: 600; margin: 0 15px; text-decoration: none; }
    .contact-links i { font-size: 1.2rem; margin-right: 5px; }

    .section { padding: 80px 20px; }
    .section-title { font-weight: 700; color: #198754; text-align: center; margin-bottom: 50px; }

    .icon-box { text-align: center; padding: 20px; transition: transform 0.3s, box-shadow 0.3s; border-radius: 15px; background-color: white; box-shadow: 0 3px 8px rgba(0,0,0,0.1); }
    .icon-box:hover { transform: translateY(-10px); box-shadow: 0 8px 20px rgba(0,0,0,0.15); }
    .icon-box i { font-size: 3rem; color: #198754; margin-bottom: 15px; }

    .footer { background-color: #198754; color: white; text-align: center; padding: 25px; margin-top: 60px; }
    .about img { border-radius: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); max-width: 100%; }

    /* Logo */
    .logo { position: absolute; top: 20px; left: 20px; width: 30%; max-width: 400px; height: auto; }
  </style>
</head>
<body>

  <!-- Logo -->
  <img src="{{ asset('images/logo.png') }}" alt="Nailo Logo" class="logo">

  <!-- Top Controls -->
  <div class="top-controls">
    <a href="{{ route('admin.submissions') }}" class="admin-btn"><i class="bi bi-person-lock me-1"></i> Admin</a>
    <button class="lang-btn" onclick="switchLang('en')">🇬🇧 EN</button>
    <button class="lang-btn" onclick="switchLang('sw')">🇹🇿 SW</button>
  </div>

  <!-- Hero Section -->
  <section class="hero">
    <h1>Smart solution for clean future</h1>
    <p>Join Nailo in building a cleaner, greener Tanzania by recycling plastics for cash.</p>
    <a href="#sell" class="btn btn-glow mt-4">Sell Your Plastics</a>
  </section>

  <!-- Contact Links Section -->
  <section class="container mt-5">
    <div class="contact-links shadow-sm">
        <h5 class="mb-3 text-success">Quick Contact</h5>

        <!-- WhatsApp 1 -->
        <a href="https://wa.me/255627759597" target="_blank">
            <i class="bi bi-whatsapp"></i> WhatsApp 1
        </a>

        <!-- WhatsApp 2 -->
        <a href="https://wa.me/255798765432" target="_blank">
            <i class="bi bi-whatsapp"></i> WhatsApp 2
        </a>

        <!-- Email -->
        <a href="mailto:Info@NailoSmartcompany.com">
            <i class="bi bi-envelope"></i> Email
        </a>

        <!-- Phone -->
        <a href="tel:+255627759597">
            <i class="bi bi-phone"></i> Call Us
        </a>
    </div>
  </section>

  <!-- About Section -->
  <section class="section container about">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4">
        <img src="https://images.unsplash.com/photo-1601758124065-27e0b9c9414a?auto=format&fit=crop&w=1200&q=80" alt="Recycling">
      </div>
      <div class="col-md-6">
        <h2 class="section-title">About Nailo Smart Company Limited</h2>
        <p>
          Nailo Smart Company Limited empowers individuals and businesses by collecting plastic packaging waste, such as crates and bottle holders, at 500 TZS per kilogram. We collect, weigh, and pay instantly to support a cleaner Tanzania.
        </p>
      </div>
    </div>
  </section>

  <!-- How It Works Section -->
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

  <!-- User Feedback Form -->
  <section id="feedback" class="section container">
    <h2 class="section-title">User Feedback</h2>
    <form action="{{ route('submit.feedback') }}" method="POST" class="mx-auto p-4 bg-white rounded shadow-sm" style="max-width: 600px;">
      @csrf
      <div class="mb-3">
        <label for="feedback_name">Your Name (optional)</label>
        <input type="text" id="feedback_name" name="name" class="form-control" placeholder="Jina lako">
      </div>
      <div class="mb-3">
        <label for="feedback_comment">Your Feedback</label>
        <textarea id="feedback_comment" name="comment" class="form-control" rows="4" required placeholder="Write your feedback..."></textarea>
      </div>
      <button type="submit" class="btn btn-primary w-100">Submit Feedback</button>
    </form>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <p class="mb-2">Contact: WhatsApp (+255 627 759 597 / +255 798 765 432) | Email: Info@NailoSmartcompany.com</p>
      <p class="mb-0">&copy; {{ date('Y') }} Nailo Smart Company Limited — Smart solution for clean future. All rights reserved.</p>
    </div>
  </footer>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
