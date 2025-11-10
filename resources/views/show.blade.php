@if(!empty($submission->photo_path) && file_exists(storage_path('app/public/' . $submission->photo_path)))
    <img src="{{ asset('storage/' . $submission->photo_path) }}" style="max-width: 100%; height: auto;">
@else
    <p>No photo available.</p>
@endif
