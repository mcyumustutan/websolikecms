@extends('layouts.master')

@section('title', $page->title)

@section('content')

<p>{{ $page->content_primary }}</p>
<p>{{ $page->content_socondary }}</p>
@endsection