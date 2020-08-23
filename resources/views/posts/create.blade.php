@extends('layouts.app')
@push('styles')
<link href="{{ asset('resources/css/postjob.css') }}" rel="stylesheet">

@endpush
@section('content')


<div class="inject-section">
    @component('includes.title')
    Let's Other People Find You<br>
    Any industry. Any location. Any experience level.
    @endcomponent

    <div class="form-wrapper">
        <form method="POST" action="/post-a-job" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="file">Your pic</label>
                        <div>
                            <img src="{{ url('resources/img/no_movie_ph.png')}}" id="profile-img-tag" width="276px">
                        </div>
                        <input type="file" name="file" id="profile-img">
                    </div>

                </div>
                <div class="col-sm-4">

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone"
                            placeholder="Enter a phone number">
                    </div>

                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter your city">
                    </div>
                    <div class="form-group">
                        <label for="state">state</label>
                        <input type="text" class="form-control" name="state" id="state" placeholder="Enter your state">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address"
                            placeholder="Enter your address">
                    </div>

                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select class="form-control" name="category_id">
                            <option disabled selected>select a category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id}}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" rows="2" name="description"></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Add Post</button>

                    @component('includes.formErrors')

                    @endcomponent

                </div>
            </div>
        </form>
    </div>

</div>



{{-- 
<script>
    function readURL(input){
        if(input.files && input.files[0]){
            var reader = new FileReader();

            reader.onload = function(e){
                $('#profile-img-tag').attr('src',e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#profile-img').change(function(){
        readURL(this);
    });
</script> --}}




@if(Session::has('flash_guest'))
<div class="flash_message">
    {{ Session('flash_guest')}}
</div>
@endif
@endsection
