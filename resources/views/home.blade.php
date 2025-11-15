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

    .hero {
      background: linear-gradient(to right, rgba(25, 135, 84, 0.85), rgba(13, 110, 253, 0.85)),
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
      position: relative;
    }
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

    .hero-logo { max-width: 320px; width: 35%; margin-bottom: 25px; opacity: 0.9; filter: drop-shadow(0 3px 5px rgba(0,0,0,0.3)); animation: fadeInDown 1.5s ease; }
  </style>
</head>
<body>

  <!-- Top Controls -->
  <div class="top-controls">
    <a href="{{ route('admin.submissions') }}" class="admin-btn"><i class="bi bi-person-lock me-1"></i> Admin</a>
    <button class="lang-btn" onclick="switchLang('en')">🇬🇧 EN</button>
    <button class="lang-btn" onclick="switchLang('sw')">🇹🇿 SW</button>
  </div>

  <!-- Hero Section -->
  <section class="hero">
    <img src="{{ asset('images/logo.png') }}" alt="Nailo Logo" class="hero-logo">
    <h1 id="hero-title" data-en="Smart solution for clean future" data-sw="Suluhisho la akili kwa siku ya kesho safi">Smart solution for clean future</h1>
    <p id="hero-desc" data-en="Join Nailo in building a cleaner, greener Tanzania by recycling plastics for cash."
                     data-sw="Jiunge na Nailo kujenga Tanzania safi na kijani kwa kurecycle plastiki na kupata pesa.">
      Join Nailo in building a cleaner, greener Tanzania by recycling plastics for cash.
    </p>
    <a href="#sell" id="hero-btn" data-en="Sell Your Plastics" data-sw="Uza Plastiki Yako" class="btn btn-glow mt-4">Sell Your Plastics</a>
  </section>

  <!-- Contact Links Section -->
  <section class="container mt-5">
    <div class="contact-links shadow-sm">
        <h5 id="contact-title" data-en="Quick Contact" data-sw="Mawasiliano ya Haraka" class="mb-3 text-success">Quick Contact</h5>
        <a href="https://wa.me/255627759597" target="_blank"><i class="bi bi-whatsapp"></i> WhatsApp 1</a>
        <a href="https://wa.me/255798765432" target="_blank"><i class="bi bi-whatsapp"></i> WhatsApp 2</a>
        <a href="mailto:Info@NailoSmartcompany.com"><i class="bi bi-envelope"></i> Email</a>
        <a href="tel:+255627759597"><i class="bi bi-phone"></i> Call Us</a>
    </div>
  </section>

  <!-- About Section -->
  <section class="section container about">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4">
        <img src="https://images.unsplash.com/photo-1601758124065-27e0b9c9414a?auto=format&fit=crop&w=1200&q=80" alt="Recycling">
      </div>
      <div class="col-md-6">
        <h2 id="about-title" data-en="About Nailo Smart Company Limited" data-sw="Kuhusu Nailo Smart Company Limited" class="section-title">About Nailo Smart Company Limited</h2>
        <p id="about-desc" data-en="Nailo Smart Company Limited empowers individuals and businesses by collecting plastic packaging waste, such as crates and bottle holders, at 500 TZS per kilogram. We collect, weigh, and pay instantly to support a cleaner Tanzania."
                          data-sw="Nailo Smart Company Limited inawawezesha watu binafsi na biashara kwa kukusanya taka za plastiki, kama vile crates na bottle holders, kwa 500 TZS kwa kilo. Tunakusanya, tunapima, na kulipa mara moja ili kusaidia Tanzania safi.">
          Nailo Smart Company Limited empowers individuals and businesses by collecting plastic packaging waste, such as crates and bottle holders, at 500 TZS per kilogram. We collect, weigh, and pay instantly to support a cleaner Tanzania.
        </p>
      </div>
    </div>
  </section>

  <!-- How It Works Section -->
  <section class="section container text-center">
    <h2 id="how-title" data-en="How It Works" data-sw="Jinsi Inavyofanya Kazi" class="section-title">How It Works</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="icon-box">
          <i class="bi bi-box-seam"></i>
          <h5 id="step1-title" data-en="Collect Plastic Holders" data-sw="Kusanya Plastiki">Collect Plastic Holders</h5>
          <p id="step1-desc" data-en="Gather plastic crates and packaging materials (not bottles) used for drinks." data-sw="Kusanya crates na vifaa vya plastiki (si chupa) vilivyotumika kwa vinywaji.">Gather plastic crates and packaging materials (not bottles) used for drinks.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="icon-box">
          <i class="bi bi-chat-dots"></i>
          <h5 id="step2-title" data-en="Submit & Schedule" data-sw="Wasilisha & Panga">Submit & Schedule</h5>
          <p id="step2-desc" data-en="Submit your details on the form below to schedule a pickup via WhatsApp or call." data-sw="Wasilisha taarifa zako kwenye fomu hapa chini kupanga pickup kupitia WhatsApp au simu.">Submit your details on the form below to schedule a pickup via WhatsApp or call.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="icon-box">
          <i class="bi bi-currency-dollar"></i>
          <h5 id="step3-title" data-en="Get Paid Instantly" data-sw="Pata Malipo Mara Moja">Get Paid Instantly</h5>
          <p id="step3-desc" data-en="We weigh your plastics and pay you instantly 500 TZS per kg." data-sw="Tunapima plastiki zako na kulipa mara moja 500 TZS kwa kilo.">We weigh your plastics and pay you instantly 500 TZS per kg.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sell Plastics Form -->
  <section id="sell" class="section sell-form bg-light">
    <div class="container">
      <h2 id="sell-title" data-en="Sell Your Plastics" data-sw="Uza Plastiki Yako" class="section-title">Sell Your Plastics</h2>
      @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
      @endif
      <form action="{{ route('sell-plastics') }}" method="POST" class="mx-auto" style="max-width: 600px;">
        @csrf
        <div class="mb-3">
          <label id="label-name" data-en="Name" data-sw="Jina">Name</label>
          <input type="text" name="name" class="form-control" placeholder="Your full name" required>
        </div>
        <div class="mb-3">
          <label id="label-phone" data-en="Phone Number" data-sw="Namba ya Simu">Phone Number</label>
          <input type="text" name="phone" class="form-control" placeholder="0712 345 678" required>
        </div>
        <div class="mb-3">
          <label id="label-location" data-en="Location" data-sw="Eneo">Location</label>
          <input type="text" name="location" class="form-control" placeholder="Your area or city" required>
        </div>
        <div class="mb-3">
          <label id="label-kilo" data-en="Kilograms of Plastic" data-sw="Kilo za Plastiki">Kilograms of Plastic</label>
          <input type="number" step="0.1" name="kilograms" class="form-control" placeholder="5.5" required>
        </div>
        <button type="submit" class="btn btn-glow w-100" data-en="Submit" data-sw="Tuma">Submit</button>
      </form>
    </div>
  </section>

  <!-- Feedback Section -->
  <section id="feedback" class="section container">
    <h2 id="feedback-title" data-en="User Feedback" data-sw="Maoni ya Watumiaji" class="section-title">User Feedback</h2>
    <form action="{{ route('submit.feedback') }}" method="POST" class="mx-auto p-4 bg-white rounded shadow-sm" style="max-width: 600px;">
      @csrf
      <div class="mb-3">
        <label id="feedback-name-label" data-en="Your Name (optional)" data-sw="Jina Lako (hi lazima)">Your Name (optional)</label>
        <input type="text" id="feedback_name" name="name" class="form-control" placeholder="Jina lako">
      </div>
      <div class="mb-3">
        <label id="feedback-comment-label" data-en="Your Feedback" data-sw="Maoni Yako">Your Feedback</label>
        <textarea id="feedback_comment" name="comment" class="form-control" rows="4" required placeholder="Write your feedback..."></textarea>
      </div>
      <button type="submit" class="btn btn-primary w-100" data-en="Submit Feedback" data-sw="Tuma Maoni">Submit Feedback</button>
    </form>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <p id="footer-contact" data-en="Contact: WhatsApp (+255 627 759 597 / +255 798 765 432) | Email: Info@NailoSmartcompany.com"
                             data-sw="Mawasiliano: WhatsApp (+255 627 759 597 / +255 798 765 432) | Barua Pepe: Info@NailoSmartcompany.com">
        Contact: WhatsApp (+255 627 759 597 / +255 798 765 432) | Email: Info@NailoSmartcompany.com
      </p>
      <p id="footer-copy" data-en="© {{ date('Y') }} Nailo Smart Company Limited — Smart solution for clean future. All rights reserved."
                          data-sw="© {{ date('Y') }} Nailo Smart Company Limited — Suluhisho la akili kwa siku ya kesho safi. Haki zote zimehifadhiwa.">
        © {{ date('Y') }} Nailo Smart Company Limited — Smart solution for clean future. All rights reserved.
      </p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    function switchLang(lang) {
        const elements = document.querySelectorAll('[data-en]');
        elements.forEach(el => {
            if(lang === 'en') el.textContent = el.getAttribute('data-en');
            else if(lang === 'sw') el.textContent = el.getAttribute('data-sw');
        });
        // Also update placeholders
        const placeholders = document.querySelectorAll('input, textarea');
        placeholders.forEach(p => {
            if(lang === 'en' && p.hasAttribute('data-en')) p.placeholder = p.getAttribute('data-en');
            else if(lang === 'sw' && p.hasAttribute('data-sw')) p.placeholder = p.getAttribute('data-sw');
        });
    }
  </script>
</body>
</html>
