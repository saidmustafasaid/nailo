<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nailo Smart Company Limited — Recycle & Earn</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
    }
    .navbar-brand img {
      height: 60px;
      border-radius: 12px;
    }
    .hero {
      background: linear-gradient(to right, #00a859, #007a4d);
      color: white;
      padding: 100px 0;
      text-align: center;
    }
    .btn-whatsapp {
      background-color: #25d366;
      color: white;
      border-radius: 50px;
    }
    .btn-whatsapp:hover {
      background-color: #1ebe57;
    }
    footer {
      background-color: #007a4d;
      color: white;
      padding: 15px 0;
      text-align: center;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold text-success" href="#">
        <img src="{{ asset('images/logo.png') }}" alt="Nailo Logo" class="me-2">
        Nailo Smart Co. Ltd
      </a>
      <div class="ms-auto">
        <button id="langToggle" class="btn btn-outline-success">Swahili</button>
      </div>
    </div>
  </nav>

  <main class="mt-5 pt-5">
    <!-- Hero Section -->
    <section class="hero">
      <div class="container">
        <h1 id="heroTitle" class="display-4 fw-bold">Welcome to Nailo</h1>
        <p id="heroText" class="lead">Your platform for smart plastic recycling and community sustainability.</p>
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg me-2" id="adminLogin">Admin Login</a>
        <a href="{{ route('sell-plastics') }}" class="btn btn-light btn-lg" id="submitPlastic">Submit Plastic</a>
      </div>
    </section>

    <!-- Feedback Section -->
    <section class="container my-5">
      <h3 id="feedbackTitle" class="text-center mb-4">We value your feedback</h3>
      <form action="{{ route('submit.feedback') }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        <div class="mb-3">
          <label id="nameLabel" for="name" class="form-label">Your Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
          <label id="messageLabel" for="message" class="form-label">Your Message</label>
          <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-success" id="feedbackBtn">Send Feedback</button>
      </form>
    </section>

    <!-- WhatsApp Section -->
    <section class="container text-center my-5">
      <h3 id="contactTitle" class="text-success mb-4">Contact Us on WhatsApp</h3>
      <div class="d-flex justify-content-center gap-3 flex-wrap">
        <a href="https://wa.me/255712345678" target="_blank" class="btn btn-whatsapp">
          <i class="bi bi-whatsapp me-2"></i> Chat with Nailo Team 1
        </a>
        <a href="https://wa.me/255798765432" target="_blank" class="btn btn-whatsapp">
          <i class="bi bi-whatsapp me-2"></i> Chat with Nailo Team 2
        </a>
      </div>
    </section>
  </main>

  <footer>
    <p id="footerText" class="mb-0">Nailo Smart Company Limited — Smart Solution for a Clean Future</p>
  </footer>

  <script>
    // Language toggle
    const toggleBtn = document.getElementById('langToggle');
    let isSwahili = false;

    toggleBtn.addEventListener('click', () => {
      isSwahili = !isSwahili;
      if (isSwahili) {
        document.getElementById('heroTitle').textContent = 'Karibu Nailo';
        document.getElementById('heroText').textContent = 'Jukwaa lako la kisasa la kuchakata plastiki na kulinda mazingira.';
        document.getElementById('adminLogin').textContent = 'Ingia Admin';
        document.getElementById('submitPlastic').textContent = 'Tuma Plastiki';
        document.getElementById('feedbackTitle').textContent = 'Tunathamini maoni yako';
        document.getElementById('nameLabel').textContent = 'Jina Lako';
        document.getElementById('messageLabel').textContent = 'Ujumbe Wako';
        document.getElementById('feedbackBtn').textContent = 'Tuma Maoni';
        document.getElementById('contactTitle').textContent = 'Wasiliana Nasi Kupitia WhatsApp';
        document.getElementById('footerText').textContent = 'Nailo Smart Company Limited — Suluhisho Bora kwa Mazingira Safi';
        toggleBtn.textContent = 'English';
      } else {
        document.getElementById('heroTitle').textContent = 'Welcome to Nailo';
        document.getElementById('heroText').textContent = 'Your platform for smart plastic recycling and community sustainability.';
        document.getElementById('adminLogin').textContent = 'Admin Login';
        document.getElementById('submitPlastic').textContent = 'Submit Plastic';
        document.getElementById('feedbackTitle').textContent = 'We value your feedback';
        document.getElementById('nameLabel').textContent = 'Your Name';
        document.getElementById('messageLabel').textContent = 'Your Message';
        document.getElementById('feedbackBtn').textContent = 'Send Feedback';
        document.getElementById('contactTitle').textContent = 'Contact Us on WhatsApp';
        document.getElementById('footerText').textContent = 'Nailo Smart Company Limited — Smart Solution for a Clean Future';
        toggleBtn.textContent = 'Swahili';
      }
    });
  </script>
</body>
</html>
