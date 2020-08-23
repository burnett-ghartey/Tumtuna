
<section class="result-bx">

        @if($posts)
        @foreach($posts as $post)
    
    
        <div class="search-dsp-wrapper">
            <div class="tp-card">
                <div class="tp-card_inner">
                    <img src="{{url('/images/posts/'. $post->photo['filename'])}}" class="tp-card_avatar" width="70px">
                    <div class="tp-card_header">
    
                        <a class="pro-name" href="{{ url('/profile-details/'.$post->slug)}}" rel="noopener">
                            <h3 class="tp-card_heading tp-card_heading--wide" meta="" itemprop="name">
                                {{ $post->user->name }}</h3>
                        </a>
    
                        <p class="tp-card_sub-heading">
                            {{$post->category->name}}
                        </p>
                        <div class="tp-card-rating">
                            <div class="stars">
                                
                                <star-rating :rating="{{ round($post->getStarRating())}}" v-bind:star-size="20"
                                    :show-rating="false" :read-only="true"></star-rating>
                            </div>
                            <span><a class="rp-local_text-link tp-card_link" href="/profile/valentin-alecu/#ratings"
                                    rel="noopener">Read reviews</a></span>
                        </div>
    
                    </div>
                    <div class="tp-card_body">
                        <p class="tp-card_description" itemprop="description">{{ $post->description}}</p>
                    </div>
                    <div class="tp-card_review">
                        <p class="tp-card_review_heading font-label">Latest handyman review</p>
                        <div class="tp-card_review_summary tp-card_rating clearfix">
                            <div class="stars stars--small tp-card_review_summary_stars tp-card_rating_stars tp-card_rating_stars--small">
                                {{-- <div class="stars_inner stars--small_inner" style="width:100%">
                                    </div>  --}}
    
                                @foreach($post->reviews as $review)
                                @if($loop->last)
                                <star-rating :rating="{{ $review->rating }}" v-bind:star-size="20" :show-rating="false"
                                    :read-only="true"></star-rating>
                                @endif
                                @endforeach
    
                            </div>
                            <span class="tp-card_rating_reviewer">
    
                                Reviewed by @foreach($post->reviews as $review)
                                @if($loop->last)
                                {{ $review->user->name}}
                                @endif
                                @endforeach
    
                                @foreach($post->reviews as $review)
                                @if($loop->last)
                                {{ $review->created_at->diffForHumans()}}
                                @endif
                                @endforeach
                            </span>
                        </div>
    
                        <p class="tp-card_review_txt">
                            @foreach($post->reviews as $review)
                            @if($loop->last)
                            {{$review->description}}
                            @endif
                            @endforeach
                        </p>
                    </div>
                    {{-- <div class="tp-card_btn-group">
                        <a rel="noopener" href="{{ url('/profile-details/'.$post->user->id)}}"
                            class="gtm-view-profile tp-card_btn-group_btn" data-gtm-vis-first-on-screen-137830_926="9298"
                            data-gtm-vis-total-visible-time-137830_926="100" data-gtm-vis-has-fired-137830_926="1">
                            <div class="icon icon-bike">&nbsp;</div>
                    </div> --}}
    
                </div>
            </div>
            
        </div>
       
    
        @endforeach
        @endif 
    
        
</section>