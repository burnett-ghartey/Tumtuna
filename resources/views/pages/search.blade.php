@extends('layouts.app')
@push('styles')
<link href="{{ asset('resources/css/search.css') }}" rel="stylesheet">
@endpush

@section('content')



<div class="search-wrapper">
   
    @include('includes.searchForm')
 
    @include('includes.searchList')

 
        {{ $posts->links() }}
    
    
   
   
</div>







@endsection
