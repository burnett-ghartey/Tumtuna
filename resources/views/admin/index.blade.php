@extends('layouts.admin');
@push('styles')
<link href="{{asset('css/admin/dashboard.css')}}" rel="stylesheet">
@endpush

@section('content')
<div class="grid">
    <div class="at-spl-bx">
        <div class="om-fr-sd">
            <span class="ps-at-0">Total Users</span>
        <div  class="ps-at-1">{{ count($users)}}</div>
        </div>
    </div>
    <div class="at-spl-bx">
        <div class="om-fr-sd">
            <span class="ps-at-0">Total handymen</span>
            <div  class="ps-at-1">{{ count($posts)}}</div>
        </div>
    </div>
    <div class="at-spl-bx">
        <div class="om-fr-sd">
            <span class="ps-at-0">Total Reviews</span>
            <div class="ps-at-1">{{ count($reviews)}}</div>
        </div>
    </div>
</div>

@endsection