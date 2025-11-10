@if($submission->photo && $submission->photo_path !== 'N/A')
    <img src="{{ asset('storage/' . $submission->photo_path) }}" style="max-width: 100%;">
@else
    <p>No photo available.</p>
@endif
