@extends('layouts.app')
@push('styles')
<link href="{{ asset('resources/css/search.css') }}" rel="stylesheet">
@endpush

@section('content')

<div class="container filter-space">
    <div class="search-wrapper filter-wrapper">

@include('includes.searchForm')
<a href="{{ url('/search')}}" class="all-post-link">See all posts</a>

@if ($posts)

@include('includes.searchList')
@else
    <div>Sorry no post found.</div>
@endif
    </div>
</div>

@endsection
