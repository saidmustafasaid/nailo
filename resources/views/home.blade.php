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
    .top-controls button, .top-controls a {
      border-radius: 20px; padding: 5px 15px; border: none; color: white;
      text-decoration: none; display: inline-flex; align-items: center;
      font-size: 0.85rem; font-weight: 600; transition: all 0.3s;
    }
    .lang-btn { background-color: #198754; }
    .lang-btn:hover { background-color: #157347; transform: scale(1.05); }
    .admin-btn { background-color: #0d6efd; }
    .admin-btn:hover { background-color: #0b5ed7; transform: scale(1.05); }

    /* Hero Section */
    .hero {
      background: linear-gradient(to right, rgba(25,135,84,0.85), rgba(13,110,253,0.85)),
                  url('https://images.unsplash.com/photo-1602163845564-f07f8e8b13e8?auto=format&fit=crop&w=1500&q=80')
                  center/cover no-repeat;
      height: 100vh; color: white; display: flex; align-items: center; justify-content: center;
      text-align: center; flex-direction: column; padding: 0 20px; position: relative;
    }

    /* LOGO */
    .hero-logo {
      max-width: 350px;
      width: 40%;
      margin-bottom: 20px;
    }

    .hero h1 {
      font-size: 2rem;
      font-weight: 700;
      margin-top: 10px;
    }

    .hero p {
      font-size: 1.2rem;
      margin-top: 10px;
    }

    .btn-glow {
      background-color: #198754; color: white; border: none;
      padding: 12px 30px; border-radius: 30px; transition: all 0.3s;
      box-shadow: 0 0 10px rgba(25,135,84,0.5);
    }
    .btn-glow:hover { background-color: #157347; transform: scale(1.05); }

    .contact-links {
      padding: 20px; background-color: #e9ecef; border-radius: 10px;
      margin-bottom: 50px; text-align: center;
    }
    .contact-links a { color: #198754; font-weight: 600; margin: 0 15px; text-decoration: none; }
    .contact-links i { font-size: 1.2rem; margin-right: 5px; }

    .section { padding: 80px 20px; }
    .section-title { font-weight: 700; color: #198754; text-align: center; margin-bottom: 50px; }

    .icon-box {
      text-align: center; padding: 20px; border-radius: 15px; background-color: white;
      box-shadow: 0 3px 8px rgba(0,0,0,0.1); transition: 0.3s;
    }
    .icon-box:hover { transform: translateY(-10px); box-shadow: 0 8px 20px rgba(0,0,0,0.15); }
    .icon-box i { font-size: 3rem; color: #198754; margin-bottom: 15px; }

    .footer { background-color: #198754; color: white; text-align: center; padding: 25px; margin-top: 60px; }
  </style>
</head>
<body>

  <!-- Top Controls -->
  <div class="top-controls">
    <a href="{{ route('admin.submissions') }}" class="admin-btn"><i class="bi bi-person-lock me-1"></i> Admin</a>
    <button class="lang-btn" onclick="switchLang('en')">🇬🇧 EN</button>
    <button class="lang-btn" onclick="switchLang('sw')">🇹🇿 SW</button>
  </div>

  <!-- HERO SECTION -->
  <section class="hero">

    <!-- LOGO -->
    <img src="{{ asset('images/logo.png') }}" class="hero-logo" alt="Nailo Logo">

    <h1 id="hero-title"
        data-en="Smart solution for clean future"
        data-sw="Suluhisho la akili kwa siku ya kesho safi">
        Smart solution for clean future
    </h1>

    <p id="hero-desc"
       data-en="Join Nailo in building a cleaner, greener Tanzania by recycling plastics for cash."
       data-sw="Jiunge na Nailo kujenga Tanzania safi na kijani kwa kurecycle plastiki na kupata pesa.">
       Join Nailo in building a cleaner, greener Tanzania by recycling plastics for cash.
    </p>

    <a href="#sell" class="btn btn-glow mt-4"
       id="hero-btn"
       data-en="Sell Your Plastics"
       data-sw="Uza Plastiki Yako">
       Sell Your Plastics
    </a>

  </section>

  <!-- CONTACT SECTION -->
  <section class="container mt-5">
    <div class="contact-links shadow-sm">
        <h5 id="contact-title" data-en="Quick Contact" data-sw="Mawasiliano ya Haraka" class="mb-3 text-success">Quick Contact</h5>
        <a href="https://wa.me/255627759597" target="_blank"><i class="bi bi-whatsapp"></i> WhatsApp 1</a>
        <a href="https://wa.me/255798765432" target="_blank"><i class="bi bi-whatsapp"></i> WhatsApp 2</a>
        <a href="mailto:Info@NailoSmartcompany.com"><i class="bi bi-envelope"></i> Email</a>
        <a href="tel:+255627759597"><i class="bi bi-phone"></i> Call Us</a>
    </div>
  </section>

  <!-- (OTHER SECTIONS: About, Steps, Form, Feedback, Footer — EXACTLY SAME) -->

  <script>
    function switchLang(lang) {
      const elements = document.querySelectorAll('[data-en]');
      elements.forEach(el => {
        el.textContent = el.getAttribute(lang === 'en' ? 'data-en' : 'data-sw');
      });
    }
  </script>

</body>
</html>
