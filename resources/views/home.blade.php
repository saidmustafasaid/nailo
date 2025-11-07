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
    }

    /* === Language Switcher & Admin Button === */
    .top-controls {
      position: fixed;
      top: 15px;
      right: 15px;
      z-index: 1000;
      display: flex;
      gap: 10px; /* Space between buttons */
      align-items: center;
    }
    .top-controls button, .top-controls a {
      border-radius: 20px;
      padding: 5px 15px;
      border: none;
      color: white;
      transition: all 0.3s;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      font-size: 0.85rem;
      font-weight: 600;
    }
    .lang-btn {
      background-color: #198754;
    }
    .lang-btn:hover {
      background-color: #157347;
      transform: scale(1.05);
    }
    .admin-btn {
      background-color: #0d6efd; /* Use primary blue for admin access */
    }
    .admin-btn:hover {
      background-color: #0b5ed7;
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

    /* Contact Links Section */
    .contact-links {
      padding: 20px;
      background-color: #e9ecef;
      border-radius: 10px;
      margin-bottom: 50px;
      text-align: center;
    }
    .contact-links a {
      color: #198754;
      font-weight: 600;
      margin: 0 15px;
      text-decoration: none;
    }
    .contact-links i {
      font-size: 1.2rem;
      margin-right: 5px;
    }

    /* Sections */
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

    /* Footer */
    .footer {
      background-color: #198754;
      color: white;
      text-align: center;
      padding: 25px;
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
    
  <div class="top-controls">
    <a href="{{ route('admin.submissions') }}" class="admin-btn">
      <i class="bi bi-person-lock me-1"></i> 
      <span data-lang-en="Admin" data-lang-sw="Msimamizi">Admin</span>
    </a>
    <button class="lang-btn" onclick="switchLang('en')">🇬🇧 EN</button>
    <button class="lang-btn" onclick="switchLang('sw')">🇹🇿 SW</button>
  </div>

  <section class="hero">
    <h1 data-lang-en="Turn Your Plastic Waste into Money" data-lang-sw="Geuza Takataka Zako za Plastiki Kuwa Pesa">Turn Your Plastic Waste into Money</h1>
    <p data-lang-en="Join Nailo in building a cleaner, greener Tanzania by recycling plastics for cash."
       data-lang-sw="Jiunge na Nailo kujenga Tanzania safi na kijani kwa kurecycle plastiki na kupata pesa.">
      Join Nailo in building a cleaner, greener Tanzania by recycling plastics for cash.
    </p>
    <a href="#sell" class="btn btn-glow mt-4" data-lang-en="Sell Your Plastics" data-lang-sw="Uza Plastiki Zako">Sell Your Plastics</a>
  </section>

  <section class="container mt-5">
    <div class="contact-links shadow-sm">
        <h5 class="mb-3 text-success" data-lang-en="Quick Contact" data-lang-sw="Mawasiliano ya Haraka">Quick Contact</h5>
        <a href="https://wa.me/255677051932" target="_blank">
            <i class="bi bi-whatsapp"></i> <span data-lang-en="WhatsApp" data-lang-sw="WhatsApp">WhatsApp</span>
        </a>
        <a href="mailto:info@nailosmart.co.tz">
            <i class="bi bi-envelope"></i> <span data-lang-en="Email" data-lang-sw="Barua Pepe">Email</span>
        </a>
        <a href="tel:+255677051932">
            <i class="bi bi-phone"></i> <span data-lang-en="Call Us" data-lang-sw="Tupigie Simu">Call Us</span>
        </a>
    </div>
  </section>

  <section class="section container about">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4">
        <img src="https://images.unsplash.com/photo-1601758124065-27e0b9c9414a?auto=format&fit=crop&w=1200&q=80" alt="Recycling">
      </div>
      <div class="col-md-6">
        <h2 class="section-title" data-lang-en="About Nailo Smart Company Limited" data-lang-sw="Kuhusu Nailo Smart Company Limited">About Nailo Smart Company Limited</h2>
        <p data-lang-en="Nailo Smart Company Limited empowers individuals and businesses by collecting plastic packaging waste, such as crates and bottle holders, at 500 TZS per kilogram. We collect, weigh, and pay instantly to support a cleaner Tanzania."
           data-lang-sw="Nailo Smart Company Limited inawawezesha watu na biashara kwa kukusanya takataka za vifungashio vya plastiki, kama vile kreti na vifungo vya chupa, kwa Tsh 500 kwa kilo. Tunakusanya, tunapima, na tunalipa papo hapo kusaidia Tanzania safi.">
          Nailo Smart Company Limited empowers individuals and businesses by collecting plastic packaging waste, such as crates and bottle holders, at 500 TZS per kilogram. We collect, weigh, and pay instantly to support a cleaner Tanzania.
        </p>
      </div>
    </div>
  </section>

  <section class="section container text-center">
    <h2 class="section-title" data-lang-en="How It Works" data-lang-sw="Jinsi Inavyofanya Kazi">How It Works</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="icon-box">
          <i class="bi bi-box-seam"></i>
          <h5 data-lang-en="Collect Plastic Holders" data-lang-sw="Kusanya Vifungo vya Plastiki">Collect Plastic Holders</h5>
          <p data-lang-en="Gather plastic crates and packaging materials (not bottles) used for drinks."
             data-lang-sw="Kusanya kreti za plastiki na vifungashio (sio chupa) vilivyotumika kwa vinywaji.">Gather plastic crates and packaging materials (not bottles) used for drinks.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="icon-box">
          <i class="bi bi-chat-dots"></i>
          <h5 data-lang-en="Submit & Schedule" data-lang-sw="Tuma & Panga Pickup">Submit & Schedule</h5>
          <p data-lang-en="Submit your details on the form below to schedule a pickup via WhatsApp or call."
             data-lang-sw="Tuma maelezo yako kwenye fomu hapa chini kupanga muda wa kuchukua kupitia WhatsApp au simu.">Submit your details on the form below to schedule a pickup via WhatsApp or call.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="icon-box">
          <i class="bi bi-currency-dollar"></i>
          <h5 data-lang-en="Get Paid Instantly" data-lang-sw="Pata Pesa Papo Hapo">Get Paid Instantly</h5>
          <p data-lang-en="We weigh your plastics and pay you instantly 500 TZS per kg."
             data-lang-sw="Tunapima plastiki zako na tunakulipa papo hapo Tsh 500 kwa kilo.">We weigh your plastics and pay you instantly 500 TZS per kg.</p>
        </div>
      </div>
    </div>
  </section>
  
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

  <section id="feedback" class="section container">
    <h2 class="section-title" data-lang-en="User Feedback" data-lang-sw="Maoni ya Mtumiaji">User Feedback</h2>
    <form action="{{ route('submit.feedback') }}" method="POST" class="mx-auto p-4 bg-white rounded shadow-sm" style="max-width: 600px;">
      @csrf
      <p data-lang-en="We value your experience! Share your comments and suggestions below."
         data-lang-sw="Tunathamini uzoefu wako! Shiriki maoni na mapendekezo yako hapa chini." class="text-center mb-4 text-muted">
         We value your experience! Share your comments and suggestions below.
      </p>
      <div class="mb-3">
        <label for="feedback_name" data-lang-en="Your Name (optional)" data-lang-sw="Jina lako (hiari)">Your Name (optional)</label>
        <input type="text" id="feedback_name" name="name" class="form-control" placeholder="Jina lako">
      </div>
      <div class="mb-3">
        <label for="feedback_comment" data-lang-en="Your Feedback" data-lang-sw="Maoni Yako">Your Feedback</label>
        <textarea id="feedback_comment" name="comment" class="form-control" rows="4" required placeholder="Andika maoni yako..."></textarea>
      </div>
      <button type="submit" class="btn btn-primary w-100" data-lang-en="Submit Feedback" data-lang-sw="Tuma Maoni">Submit Feedback</button>
    </form>
  </section>

  <footer class="footer">
    <div class="container">
      <p class="mb-2" data-lang-en="Contact: WhatsApp (+255 677 051 932) | Email: info@nailosmart.co.tz"
         data-lang-sw="Mawasiliano: WhatsApp (+255 677 051 932) | Barua Pepe: info@nailosmart.co.tz">
         Contact: WhatsApp (+255 677 051 932) | Email: info@nailosmart.co.tz
      </p>
      <p class="mb-0" data-lang-en="&copy; {{ date('Y') }} Nailo Smart Company Limited — Recycling for a Better Tomorrow. All rights reserved."
         data-lang-sw="&copy; {{ date('Y') }} Nailo Smart Company Limited — Kurecycle kwa Kesho Bora. Haki zote zimehifadhiwa.">
        &copy; {{ date('Y') }} Nailo Smart Company Limited — Recycling for a Better Tomorrow. All rights reserved.
      </p>
    </div>
  </footer>

  <script>
    // Initialize language based on default
    document.addEventListener('DOMContentLoaded', () => {
        // Default to Swahili since most users use it
        switchLang('sw'); 
    });

    function switchLang(lang) {
      document.querySelectorAll('[data-lang-en]').forEach(el => {
        el.innerText = lang === 'en' ? el.dataset.langEn : el.dataset.langSw;
      });
    }
  </script>
</body>
</html>