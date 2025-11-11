@if(!empty($submission->photo_path))
    <img src="https://ypboqeeentntlesfufxl.supabase.co/storage/v1/object/public/submissions/{{ urlencode($submission->photo_path) }}" style="max-width:100%; height:auto;">
@else
    <p>No photo available.</p>
@endif
