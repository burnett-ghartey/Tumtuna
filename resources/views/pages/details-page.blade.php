@extends('layouts.app')
@push('styles')
<link href="{{ asset('resources/css/details.css')}}" rel="stylesheet">
@endpush

@section('content')
<div class="review-login-alert alert-danger">
    <span>Please login to submit review</span>
</div>

<div class="details-wrapper">
    <div class="container">
        <div class="main-wrap">
            <div class="header">
                <div class="cover">
                    <img src="{{url('/images/posts/'. $post->photo['filename'])}}" class="profile-photo" width="90px">
                </div>
                <div class="profile-infomation">
                    <div>
                        <h4>{{ $post->user->name  }}</h4>
                    </div>


                    <p>Phone: {{ $post->phone}}</p>
                    <p>City: {{$post->city}}</p>
                    <p>Address: {{ $post->address}}</p>
                    <p>Description: {{ $post->description}}</p>
                </div>
                <div class="recap-review">
                    <div class="rating ends">
                        <div><star-rating :rating="{{ round($post->getStarRating())}}" v-bind:star-size="20" :show-rating="false" :read-only="true"></star-rating></div>
                        <div>Overall rating</div>
                        
                    </div>


                    <div class="count ends">{{ $post->reviews->count()}} reviews</div>
                </div>
            </div>

            <div class="review-body">
                <div class="review-wrappper">
                    <div class="review-btn-wrapper">

                        <button data-toggle="modal" data-target="#exampleModal" class="rev-btn" type="submit">Leave a
                            review</button>
                    </div>
 
                    <div class="item-wrapper">
                        @foreach($postreviews as $review)
                        <div class="review-result">
                        <span> <star-rating :rating="{{$review->rating}}" v-bind:star-size="20" :show-rating="false" :read-only="true"></star-rating></span>
                        <span>{{ $review->user->name }}</span>
                        <h5>{{ $review->headline }}</h5>
                        <p>{{ $review->description }}</p>

                        </div>
                        @endforeach
                    </div>
                </div>

                
{{-- 
                <div id="remove-row" class="more_reviews_btn">
                <button type="submit" id="btn-more" data-id="{{$review->id}}" value="{{ $post->id}}"  class="btn btn-more">See more reviews</button>
                </div> --}}

                
            </div>

        </div>
    </div>
</div>





@if(Auth::check())
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rate our handymen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div>
                     <review-form 
                :post="{{$post}}"
                 url="{{ route('postreview.store') }}">

                </review-form>
                
                </div>
               
            </div>

        </div>
    </div>
</div>
@endif

<script type="application/javascript">
$(document).ready(function(){
     var AuthUser = "{{{ (Auth::user()) ? Auth::user() : null }}}";
     if(!AuthUser){
       $('.rev-btn').on('click',function(){
        $('.review-login-alert').addClass('slide-right'); 
           setTimeout(function(){
              $('.review-login-alert').addClass('slide-left');  
           }, 3500);
       
       })      
     }
  
});
 

</script>
@endsection
