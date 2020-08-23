@extends('layouts.app')
@push('styles')
<link href="{{asset('resources/css/services.css')}}" rel="stylesheet">
@endpush

@section('content')
<div class="content-body">
     <header>
         <h2>SERVICES</h2>
     </header>
      <section>
          <div class="square-margin">
            <div class="squares">
                <div class="sq-items">
                    <div class="rect">
                        <div class="image-shadow"><img src="{{ asset('resources/img/ladders.png')}}" width="40px" height="auto"></div>
                        <div class="point-name">carpentry</div>
                        <div class="pagr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</div>
                    </div>
                </div>
                <div class="sq-items">
                    <div class="rect">
                        <div class="image-shadow"><img src="{{ asset('resources/img/lightning-bolt.png')}}" width="40px" height="auto"></div>
                        <div class="point-name">electrician</div>
                        <div class="pagr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</div>
                    </div>
                </div>
                <div class="sq-items">
                    <div class="rect">
                    <div class="image-shadow"><img src="{{ asset('resources/img/icons8-support-50.png')}}" width="40px" height="auto"></div>
                        <div class="point-name">plumbing</div>
                        <div class="pagr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</div>
                    </div>
                </div>
                <div class="sq-items">
                    <div class="rect">
                        <div class="image-shadow"><img src="{{ asset('resources/img/broom.png')}}" width="40px" height="auto"></div>
                        <div class="point-name">cleaning</div>
                        <div class="pagr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</div>
                    </div>
                </div>
                <div class="sq-items">
                    <div class="rect">
                        <div class="image-shadow"><img src="{{ asset('resources/img/settings.png')}}" width="40px" height="auto"></div>
                        <div class="point-name">repair</div>
                        <div class="pagr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</div>
                    </div>
                </div>
                <div class="sq-items">
                    <div class="rect">
                        <div class="image-shadow"><img src="{{ asset('resources/img/icons8-trowel-50.png')}}" width="40px" height="auto"></div>
                        <div class="point-name">mason</div>
                        <div class="pagr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</div>
                    </div>
                </div>
                
                
            </div>
          </div>
            
      </section>
</div>
@endsection