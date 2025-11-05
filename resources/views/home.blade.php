<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nailo — Recycle & Earn / Piga Picha & Pata Pesa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      overflow-x: hidden;
      background-color: #f0f2f5;
    }

    /* Language Switcher */
    .lang-switch {
      position: fixed;
      top: 20px;
      right: 20px;
      z-index: 1000;
    }
    .lang-switch button {
      margin-left: 5px;
      border-radius: 20px;
      padding: 5px 15px;
      border: none;
      color: white;
      background-color: #198754;
      transition: all 0.3s;
    }
    .lang-switch button:hover {
      background-color: #157347;
      transform: scale(1.05);
    }

    /* Hero Section */
    .hero {
      background: linear-gradient(to right, rgba(25, 135, 84, 0.85), rgba(13, 110, 253, 0.85)),
                  url('https://images.unsplash.com/photo-1602163845564-f07f8e8b13e8?auto=format&fit=crop&w=1500&q=80') center/cover no-repeat;
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
    @keyframes fadeInDown {
      from {opacity: 0; transform: translateY(-30px);}
      to {opacity: 1; transform: translateY(0);}
    }
    @keyframes fadeInUp {
      from {opacity: 0; transform: translateY(30px);}
      to {opacity: 1; transform: translateY(0);}
    }

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

    /* Sections */
    .section {
      padding: 80px 20px;
    }
    .section-title {
      font-weight: 600;
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

    .footer {
      background-color: #198754;
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 60px;
    }

    /* About Image */
    .about img {
      border-radius: 20px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      max-width: 100%;
    }
  </style>
</head>
<body>

  <!-- Language Switcher -->
  <div class="lang-switch">
    <button onclick="switchLang('en')">🇬🇧 English</button>
    <button onclick="switchLang('sw')">🇹🇿 Kiswahili</button>
  </div>

  <!-- Hero Section -->
  <section class="hero">
    <h1 data-lang-en="Turn Your Plastic Waste into Money" data-lang-sw="Geuza Takataka Zako za Plastiki Kuwa Pesa">Turn Your Plastic Waste into Money</h1>
    <p data-lang-en="Join Nailo in building a cleaner, greener Tanzania by recycling plastics for cash."
       data-lang-sw="Jiunge na Nailo kujenga Tanzania safi na kijani kwa kurecycle plastiki na kupata pesa.">
      Join Nailo in building a cleaner, greener Tanzania by recycling plastics for cash.
    </p>
    <a href="#sell" class="btn btn-glow mt-4" data-lang-en="Sell Your Plastics" data-lang-sw="Uza Plastiki Zako">Sell Your Plastics</a>
  </section>

  <!-- About Section -->
  <section class="section container about">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4">
        <img src="https://images.unsplash.com/photo-1601758124065-27e0b9c9414a?auto=format&fit=crop&w=1200&q=80" alt="Recycling">
      </div>
      <div class="col-md-6">
        <h2 class="section-title" data-lang-en="About Nailo" data-lang-sw="Kuhusu Nailo">About Nailo</h2>
        <p data-lang-en="Nailo is a plastic recycling company that empowers individuals and businesses to sell their used plastic bottles and crates for cash. We collect, weigh, and pay instantly at 500 TZS per kilogram."
           data-lang-sw="Nailo ni kampuni ya kurecycle plastiki inayowawezesha watu na biashara kuuza chupa na plastiki zilizotumika kwa pesa. Tunazikusanya, kuzipima, na kulipa papo hapo Tsh 500 kwa kilo.">
          Nailo is a plastic recycling company that empowers individuals and businesses to sell their used plastic bottles and crates for cash. We collect, weigh, and pay instantly at 500 TZS per kilogram.
        </p>
      </div>
    </div>
  </section>

  <!-- How It Works -->
  <section class="section container text-center">
    <h2 class="section-title" data-lang-en="How It Works" data-lang-sw="Jinsi Inavyofanya Kazi">How It Works</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="icon-box">
          <i class="bi bi-collection"></i>
          <h5 data-lang-en="Collect" data-lang-sw="Kusanya">Collect</h5>
          <p data-lang-en="Gather your plastic bottles, crates, and packaging materials."
             data-lang-sw="Kusanya chupa zako za plastiki, crates na vifungashio.">Gather your plastic bottles, crates, and packaging materials.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="icon-box">
          <i class="bi bi-wechat"></i>
          <h5 data-lang-en="Contact Us" data-lang-sw="Wasiliana Nasi">Contact Us</h5>
          <p data-lang-en="Reach us via the website form or call to schedule a pickup."
             data-lang-sw="Wasiliana nasi kupitia fomu ya tovuti au simu kupanga pickup.">Reach us via the website form or call to schedule a pickup.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="icon-box">
          <i class="bi bi-cash-stack"></i>
          <h5 data-lang-en="Get Paid" data-lang-sw="Pata Pesa">Get Paid</h5>
          <p data-lang-en="We weigh your plastics and pay you instantly — 500 TZS per kg."
             data-lang-sw="Tunapima plastiki zako na tunakulipa papo hapo — Tsh 500 kwa kilo.">We weigh your plastics and pay you instantly — 500 TZS per kg.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sell Form -->
  <section id="sell" class="section sell-form bg-light">
    <div class="container">
      <h2 class="section-title" data-lang-en="Sell Your Plastics" data-lang-sw="Uza Plastiki Zako">Sell Your Plastics</h2>
      @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
      @endif
      <form action="{{ route('sell-plastics') }}" method="POST" enctype="multipart/form-data" class="mx-auto" style="max-width: 600px;">
        @csrf
        <div class="mb-3">
          <label data-lang-en="Name" data-lang-sw="Jina">Name</label>
          <input type="text" name="name" class="form-control" placeholder="Your full name / Jina lako" required>
        </div>
        <div class="mb-3">
          <label data-lang-en="Phone Number" data-lang-sw="Nambari ya Simu">Phone Number</label>
          <input type="text" name="phone" class="form-control" placeholder="0712 345 678" required>
        </div>
        <div class="mb-3">
          <label data-lang-en="Location" data-lang-sw="Eneo lako">Location</label>
          <input type="text" name="location" class="form-control" placeholder="Your area or city" required>
        </div>
        <div class="mb-3">
          <label data-lang-en="Kilograms of Plastic" data-lang-sw="Kilo za Plastiki">Kilograms of Plastic</label>
          <input type="number" step="0.1" name="kilograms" class="form-control" placeholder="5.5" required>
        </div>
        <div class="mb-3">
          <label data-lang-en="Upload Photo (optional)" data-lang-sw="Pakia Picha (hiari)">Upload Photo (optional)</label>
          <input type="file" name="photo" class="form-control">
        </div>
        <button type="submit" class="btn btn-glow w-100" data-lang-en="Submit" data-lang-sw="Tuma">Submit</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <p data-lang-en="&copy; {{ date('Y') }} Nailo — Recycling for a Better Tomorrow. All rights reserved."
       data-lang-sw="&copy; {{ date('Y') }} Nailo — Kurecycle kwa Kesho Bora. Haki zote zimehifadhiwa.">
      &copy; {{ date('Y') }} Nailo — Recycling for a Better Tomorrow. All rights reserved.
    </p>
  </footer>

  <script>
    function switchLang(lang) {
      document.querySelectorAll('[data-lang-en]').forEach(el => {
        el.innerText = lang === 'en' ? el.dataset.langEn : el.dataset.langSw;
      });
    }
  </script>
</body>
</html>
