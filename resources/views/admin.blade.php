<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nailo Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f8f9fa; }
        .sidebar { background-color: #198754; color: white; min-height: 100vh; padding-top: 20px; }
        .sidebar a { color: #d4edda; text-decoration: none; padding: 10px 15px; display: block; cursor: pointer; }
        .sidebar a:hover, .sidebar .active { background-color: #157347; color: white; border-radius: 5px; }
        .card-header { background-color: #0d6efd; color: white; }
        .content-section { display: none; }
        .content-section.active { display: block; }
        .table-responsive { margin-top: 20px; }
        .logout-form button { width: 100%; margin-top: auto; margin-bottom: 15px; }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column" style="width: 280px;">
        <h4 class="text-center mb-4">Nailo Admin</h4>
        <a id="link-submissions" class="active"><i class="bi bi-box-seam me-2"></i> Plastic Submissions</a>
        <a id="link-feedback"><i class="bi bi-chat-left-text me-2"></i> User Feedback</a>
        <a href="{{ url('/') }}" class="mb-3"><i class="bi bi-house me-2"></i> Back to Home</a>

        <!-- Logout Form -->
        <form method="POST" action="{{ route('logout') }}" class="logout-form mt-auto px-3">
            @csrf
            <button type="submit" class="btn btn-danger">
                <i class="bi bi-box-arrow-right me-2"></i> Logout
            </button>
        </form>
    </div>

    <!-- Main Content -->
    <div class="content flex-grow-1 p-4">
        <h1 class="mb-4 text-primary">Dashboard Overview</h1>

        <!-- Plastic Submissions Section -->
        <section id="submissions-section" class="content-section active">
            <h2 class="text-success mb-3">Plastic Submissions ({{ $submissions->count() }})</h2>

            <div class="table-responsive">
                <table class="table table-striped table-hover bg-white rounded shadow-sm">
                    <thead class="card-header">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Location</th>
                            <th>Kilograms</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($submissions as $submission)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $submission->name }}</td>
                                <td>{{ $submission->phone }}</td>
                                <td>{{ $submission->location }}</td>
                                <td>{{ $submission->kilograms }} kg</td>
                                <td>{{ $submission->created_at->format('M d, H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No plastic submissions found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>

        <!-- User Feedback Section -->
        <section id="feedback-section" class="content-section">
            <h2 class="text-success mb-3">User Feedback ({{ $feedbacks->count() }})</h2>

            <div class="table-responsive">
                <table class="table table-striped table-hover bg-white rounded shadow-sm">
                    <thead class="card-header">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Comment</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($feedbacks as $feedback)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $feedback->name ?: 'Anonymous' }}</td>
                                <td>{{ $feedback->comment }}</td>
                                <td>{{ $feedback->created_at->format('M d, H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No user feedback found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const linkSub = document.getElementById('link-submissions');
    const linkFeedback = document.getElementById('link-feedback');
    const sectionSub = document.getElementById('submissions-section');
    const sectionFeedback = document.getElementById('feedback-section');

    linkSub.addEventListener('click', () => {
        sectionSub.classList.add('active');
        sectionFeedback.classList.remove('active');
        linkSub.classList.add('active');
        linkFeedback.classList.remove('active');
    });

    linkFeedback.addEventListener('click', () => {
        sectionFeedback.classList.add('active');
        sectionSub.classList.remove('active');
        linkFeedback.classList.add('active');
        linkSub.classList.remove('active');
    });
</script>

</body>
</html>
