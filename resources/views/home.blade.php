@extends('layouts.app')


@section('content')


    <div class="jumbotron jumbotron-fluid">
        <div class="heading-letter">
            <h1 class="display-4">Let's make your next <br> great hire. Fast.</h1>
            <p class="lead">You know who you're looking for.<br>
                We'll help you find them..</p>
          <a href="{{ url('/post-a-job/create')}}" class="post-job-btn">Post a job</a>
        </div>
    </div>
    
    
    <section class="show-sc">
        <div class="container">
                <div class="nd-hg-bl">
                    <div class="sm-section">
                        <img src="resources/img/sm-carp.jpg" class="card-img-top" alt="...">
                        <h3 class="c-heading">CARPENTRY</h3>
                        <div class="c-paragraph"><p>Get instant savings on the Surface Pro 7 and Type Cover Bundle.</p>
                        </div>
                        <a class="c-call-to-action c-glyph" aria-label="Shop Surface Pro 7 and Type Cover bundles" data-m="{&quot;cN&quot;:&quot;Shop now&quot;,&quot;cT&quot;:&quot;0&quot;,&quot;id&quot;:&quot;n1c1m1r3a2&quot;,&quot;sN&quot;:1,&quot;aN&quot;:&quot;c1m1r3a2&quot;,&quot;assetid&quot;:&quot;SSAGPTSS_117020_64424_161_a&quot;,&quot;tags&quot;:{&quot;ms.linkid&quot;:&quot;SSAGPTSS_117020_64424_161_a&quot;}}" href="{{ url('/carpentry')}}">
                            <span>Learn more</span>
                        </a>
                    </div>
                    <div class="sm-section">
                        <img src="resources/img/sm-plumb.jpg" class="card-img-top" alt="...">
                        <h3 class="c-heading">PLUMBING</h3>
                        <div class="c-paragraph"><p>Get instant savings on the Surface Pro 7 and Type Cover Bundle.</p>
                        </div>
                        <a class="c-call-to-action c-glyph" aria-label="Shop Surface Pro 7 and Type Cover bundles" data-m="{&quot;cN&quot;:&quot;Shop now&quot;,&quot;cT&quot;:&quot;0&quot;,&quot;id&quot;:&quot;n1c1m1r3a2&quot;,&quot;sN&quot;:1,&quot;aN&quot;:&quot;c1m1r3a2&quot;,&quot;assetid&quot;:&quot;SSAGPTSS_117020_64424_161_a&quot;,&quot;tags&quot;:{&quot;ms.linkid&quot;:&quot;SSAGPTSS_117020_64424_161_a&quot;}}" href="{{ url('/plumbing')}}">
                            <span>Learn more</span>
                        </a>
                    </div>
                    <div class="sm-section">
                        <img src="resources/img/sm-elec.jpg" class="card-img-top" alt="...">
                        <h3 class="c-heading">ELECTRICIAN</h3>
                        <div class="c-paragraph"><p>Get instant savings on the Surface Pro 7 and Type Cover Bundle.</p>
                        </div>
                        <a class="c-call-to-action c-glyph" aria-label="Shop Surface Pro 7 and Type Cover bundles" data-m="{&quot;cN&quot;:&quot;Shop now&quot;,&quot;cT&quot;:&quot;0&quot;,&quot;id&quot;:&quot;n1c1m1r3a2&quot;,&quot;sN&quot;:1,&quot;aN&quot;:&quot;c1m1r3a2&quot;,&quot;assetid&quot;:&quot;SSAGPTSS_117020_64424_161_a&quot;,&quot;tags&quot;:{&quot;ms.linkid&quot;:&quot;SSAGPTSS_117020_64424_161_a&quot;}}" href="{{ url('/electrician')}}">
                            <span>Learn more</span>
                        </a>
                    </div>
                    <div class="sm-section">
                        <img src="resources/img/sm-pain.jpg" class="card-img-top" alt="...">
                        <h3 class="c-heading">PAINTING</h3>
                        <div class="c-paragraph"><p>Get instant savings on the Surface Pro 7 and Type Cover Bundle.</p>
                        </div>
                        <a class="c-call-to-action c-glyph" aria-label="Shop Surface Pro 7 and Type Cover bundles" data-m="{&quot;cN&quot;:&quot;Shop now&quot;,&quot;cT&quot;:&quot;0&quot;,&quot;id&quot;:&quot;n1c1m1r3a2&quot;,&quot;sN&quot;:1,&quot;aN&quot;:&quot;c1m1r3a2&quot;,&quot;assetid&quot;:&quot;SSAGPTSS_117020_64424_161_a&quot;,&quot;tags&quot;:{&quot;ms.linkid&quot;:&quot;SSAGPTSS_117020_64424_161_a&quot;}}" href="{{ url('/painting')}}">
                            <span>Learn more</span>
                        </a>
                    </div>
                </div>
    
    
        </div>
    </section>
    
    <section class="bg-fixed">
        <div class="container-fluid">
            <div class="row">
                <div class="bg-sum col  split-left" style=" margin: 1% 0 1% 0%;"></div>
                <div class="bg-sum col  split-right" style=" margin: 1% 0 1% 0%;">
                    <div class="rt-spt">
                        <h1>A LITTLE BIT ABOUT US</h1>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour, or randomised words which don't look even slightly
                            believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                            anything embarrassing hidden in the middle of text.</p>
                    </div>
                </div>
            </div>
        </div>
    
    </section>

    <section class="testimonial">
        <div class="testml-center">
            <div class="tstm-ctnr">
                <h1>TESTIMONIAL</h1>
                <p><img class="_imgtest" src="resources/img/fa2.jpg" alt="impressed user"></p>
                <p class="long-ts">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                    in some form, by injected humour.</p>
                <h6 class="testimony-author">JOHN DOE</h6>
            </div>
        </div>
    </section>



    @if(Session::has('flash_guest'))
    <div class="flash_message">
        {{ Session('flash_guest')}}
    </div>
    @endif
    
@endsection

<script type="text/javascript" src="resources/js/jquery-3.4.1.min.js"></script>

