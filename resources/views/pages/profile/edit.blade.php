@extends('layouts.app')
@push('styles')
<link href="{{ asset('resources/css/postjob.css') }}" rel="stylesheet">

@endpush
@section('content')

<div class="inject-section">
    @component('includes.title')
    Edit your profile
    @endcomponent

    @if(!empty($user))

    <div class="form-wrapper">



    <form method="POST" action="/profile/{{ $user->post->id}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="file">Upload picture</label>
                        <div>
                        <img src="{{url('/images/posts/'. $userPhoto->filename)}}" id="profile-img-tag" width="276px">
                        </div>
                        <input type="file" name="file" id="profile-img">
                    </div>

                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="phone" id="phone"
                    value="{{ $user->email}}">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone"
                    value="{{ $user->post->phone }}">
                    </div>

                    <div class="form-group">
                        <label for="city">City</label>
                    <input type="text" class="form-control" name="city" id="city" value="{{ $user->post->city}}">
                    </div>
                    <div class="form-group">
                        <label for="state">state</label>
                    <input type="text" class="form-control" name="state" id="state" value="{{ $user->post->state}}">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" value="{{ $user->post->address }}">
                    </div>

                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select class="form-control" name="category_id">
                            <option disabled selected>select a category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id}}" {{ $user->post->category_id == $category->id ? 'selected': ''}}>{{ $category->name }}</option>
                                @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                    <textarea class="form-control" rows="2" name="description">{{ $user->post->description}}</textarea>
                    </div>


    <button type="submit" class="btn-save">Save Profile</button>

                   

                    @component('includes.formErrors')

                    @endcomponent

                </div>



            </div>


        </form>
    </div>
    @endif

</div>

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
</script>




@if(Session::has('flash_guest'))
<div class="flash_message">
    {{ Session('flash_guest')}}
</div>
@endif
@endsection
