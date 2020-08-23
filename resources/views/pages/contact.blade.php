@extends('layouts.app')
@push('styles')
<link href="{{ asset('resources/css/contact.css')}}" rel="stylesheet">
@endpush

@section('content')

    <div class="box-wrapper">
        <div class="contact-wrapper">
            <div class="contact-title">
                <h1>GET IN TOUCH</h1>
            </div>
            <div>
                <p>Reach us and tell us about any problem you are facing.</p>
            </div>
        </div>

<div class="form-wrapper">
    <div class="row">
            <div class="col-sm-6 ">
                <div class="contact-form">
                    <form method="POST" action="/support">
                        @csrf
                        <div class="row">
   <div class="col-sm-6">
                            <div class="form-group">
                                <label for="fname">First name</label>
                                <input type="text" class="form-control" id="fname" name="firstname">
                            </div>
                       </div>
                       <div class="col-sm-6">
                           <div class="form-group">
                                <label for="lname">Last name</label>
                                <input type="text" class="form-control" id="lname" name="lastname">
                            </div>
                       </div>
                   

                        <div class="col-sm-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="phone" class="form-control" id="phone" name="phone">
                        </div>
                   </div>
                   <div class="col-sm-6">
                       <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                   </div>
                
                   <div class="col-sm-12">
                       <div class="form-group">
                           <label for="message">Drop your message here</label>
                           <textarea rows="3" type="text" class="form-control" name="message"></textarea>
                       </div>
                   </div>
                   <div class="col-sm-12">
                       <button class="btn btn-primary" type="submit">Contact me</button>
                   </div>
                   @component('includes.formErrors')

                   @endcomponent
                            
                        </div>
                       
                         
                       
  
                       
                    </form>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="cmpy-deta">
                    <div>
                        <ul class="fnd-s">
                            <li>
                            <img class="fnd-ic" src="{{ asset('resources/img/map-pin.svg')}}" width="25px">
                                <p>737 South Liberty Road<br>
                                    Dekalb, IL 60115</p>
                            </li>
                            <li>
                                <img class="fnd-ic" src="{{ asset('resources/img/mail.svg')}}" width="25px">
                                <p><a href="mailTo:" class="ml-link">ionoxalis@banhammer.network</a></p>
                            </li>
                            <li>
                                <img class="fnd-ic" src="{{ asset('resources/img/phone.svg')}}" width="25px">
                                <p>+233 456-435-1123 ( +233 206-190-3067 )</p>
                              
                            </li>
                         

                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
        
    </div>

    @if(Session::has('flash_guest'))
    <div class="flash_message">
        {{ Session('flash_guest')}}
    </div>
    @endif
@endsection
