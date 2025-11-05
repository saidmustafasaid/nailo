<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nailo Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      display: flex;
    }
    .sidebar {
      width: 230px;
      height: 100vh;
      background: #198754;
      color: white;
      position: fixed;
      padding: 20px 15px;
    }
    .sidebar h4 {
      font-weight: bold;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      margin: 15px 0;
      font-size: 16px;
    }
    .sidebar a:hover {
      text-decoration: underline;
    }
    .main-content {
      margin-left: 230px;
      padding: 30px;
      width: 100%;
    }
    .card {
      border: none;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <h4 class="mb-4">♻️ Nailo Admin</h4>
    <a href="/admin">Dashboard</a>
    <a href="/">Go to Site</a>

    <form method="POST" action="/logout" class="mt-4">
      @csrf
      <button class="btn btn-light btn-sm w-100">Logout</button>
    </form>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <h2 class="mb-4">Admin Dashboard</h2>

    <!-- Dashboard Stats -->
    <div class="row mb-4">
      <div class="col-md-4">
        <div class="card p-3 bg-success text-white">
          <h5>Total Sellers</h5>
          <h2>{{ $totalSellers }}</h2>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3 bg-primary text-white">
          <h5>Total Kilograms</h5>
          <h2>{{ number_format($totalKilograms, 2) }} kg</h2>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-3 bg-warning text-white">
          <h5>Submissions with Photos</h5>
          <h2>{{ $totalPhotos }}</h2>
        </div>
      </div>
    </div>

    <!-- Submissions Table -->
    <div class="card p-3 bg-white">
      <h4 class="mb-3">📦 Plastic Submissions</h4>
      <table class="table table-bordered">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Location</th>
            <th>Kilograms</th>
            <th>Photo</th>
            <th>Submitted At</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($submissions as $submission)
            <tr>
              <td>{{ $submission->id }}</td>
              <td>{{ $submission->name }}</td>
              <td>{{ $submission->phone }}</td>
              <td>{{ $submission->location }}</td>
              <td>{{ $submission->kilograms }} kg</td>
              <td>
                @if ($submission->photo)
                  <img src="{{ asset('storage/' . $submission->photo) }}" width="70" class="rounded">
                @else
                  <em>No photo</em>
                @endif
              </td>
              <td>{{ $submission->created_at->format('Y-m-d H:i') }}</td>
            </tr>
          @empty
            <tr><td colspan="7" class="text-center">No submissions yet.</td></tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
