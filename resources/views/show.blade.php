@if(!empty($submission->photo_path))
    <img src="{{ asset('storage/' . $submission->photo_path) }}" style="max-width: 100%;">
@else
    <p>No photo available.</p>
@endif
