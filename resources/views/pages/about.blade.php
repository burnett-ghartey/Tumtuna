@extends('layouts.app')

@push('styles')
<link href="{{asset('resources/css/about.css')}}" rel="stylesheet">
@endpush

@section('content')

<div class="about-wrapper">
   
    <div class="ab-drop-lem">
        <h1 class="about-name">ABOUT TUMTUNA</h1>
    </div>
 
    <div class="container about-width">
        <div class="main-block">
            <div class="top-sc-pag">
                <div>
                    <h2 class="wc-head">WELCOME</h2>
                </div>
                <div>
                    <p>Are you a professional handyman who improves others' homes? Do you manage a home services
                        company?<br> Well, in both cases.
                    </p>
                </div>
                <div class=" display-pt"></div>
            </div>
            <div class="keynotes">
                <div>
                    <h2><span class="flashy-underline">What is Tumtuna?</span></h2>
                </div>
                <div class="len-in-wr">We are ique in our approach because we are not focused on a certain theme or
                    idea. We always try to match the client’s vision with our design process. Our approach is ‘Do What
                    Wants to Be Done, Not What Wants to Be Done’. With a mix of bold, contemporary design and classic
                    Scandinavian furniture, we are able to create a unique and intimate setting that takes the client’s
                    needs into account.</div>
            </div>

        </div>

    </div>
</div>


    @endsection 
