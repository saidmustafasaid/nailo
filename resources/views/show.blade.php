@if($submission->photo_url)
    <img src="{{ $submission->photo_url }}" style="max-width:100%; height:auto;">
@else
    <p>No photo available.</p>
@endif
