@if($submission->photo && $submission->photo !== 'N/A')
    <img src="{{ asset('storage/' . $submission->photo) }}" style="max-width: 100%;">
@else
    <p>No photo available.</p>
@endif
