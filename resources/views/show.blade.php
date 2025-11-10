@extends('layouts.app')

@section('content')
<h2>Submission Details</h2>

<p><strong>Name:</strong> {{ $submission->name }}</p>
<p><strong>Phone:</strong> {{ $submission->phone }}</p>
<p><strong>Location:</strong> {{ $submission->location }}</p>
<p><strong>Kgs:</strong> {{ $submission->kgs }} kg</p>
<p><strong>Date:</strong> {{ $submission->created_at->format('M d, H:i') }}</p>

@if($submission->photo)
    <p><strong>Photo:</strong></p>
    <img src="{{ asset('storage/' . $submission->photo) }}" style="max-width: 300px;">
@else
    <p><strong>Photo:</strong> N/A</p>
@endif

<a href="{{ route('admin.submissions') }}">Back to list</a>
@endsection
