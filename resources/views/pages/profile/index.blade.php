@extends('layouts.app')
@push('styles')
<link href="{{ asset('css\guest\profile\accountOverview.css') }}" rel="stylesheet">

@endpush
@section('content')
<div class="wrapper">
    <div class="inject-section">

        <div class="row">
            <div class="col-sm-3 sidebar-fpstf">
                <div class="side-mv-jk">
                    <div class="account-pic">
                        <img src="{{ url('/images/posts/'. $photo['filename'])}}" class="img-for-account" width="130px">
                        <ul class="Menu__list--rOjOe">
                            <li class="Menu__menuItem--2MjVq Menu__active--30Fs0" id="overview"><a
                                    class="Menu__menuLink--3F9Kb" href="{{ url('/profile')}}">
                                    <img class="side_menu_img" src="{{url('resources\img\home.svg')}}"> Account
                                    overview</a></li>
                            <li class="Menu__menuItem--2MjVq" id="profile"><a class="Menu__menuLink--3F9Kb"
                                href="{{ url('/profile/'.$user->id.'/edit')}}"><img class="side_menu_img"
                                        src="{{url('resources\img\edit.svg')}}"> Edit profile</a></li>

                    </div>

                </div>
            </div>

            <div class="col-sm-7">
                <div class="side-lk-jwek">
                    @component('includes.title')
                    Your Profile
                    @endcomponent
                    <h3 class="bmolDe">Profile</h3>
                    <section class="account-listing">

                        <table class="ProfileSection__table--uNaVm">
                            <colgroup>
                                <col class="ProfileSection__labelCol--30yrP">
                                <col class="ProfileSection__valueCol--DrIkK">
                            </colgroup>
                            <tbody>
                                <tr class="ProfileSection__field--1bFJX">
                                    <td class="ProfileSection__labelCell--hmbFT"><label><span
                                                class="Type__TypeElement-sc-9snywk-0 iljoFL ProfileSection__label--1sXcz">Name</span></label>
                                    </td>
                                    <td class="ProfileSection__valueCell--1fz0K">
                                        <p class="Type__TypeElement-sc-9snywk-0 iljoFL ProfileSection__value--1bo-L"
                                            data-hj-suppress="true" data-qa="Profile Field: Username">{{$user->name}}
                                        </p>
                                    </td>
                                </tr>
                                <tr class="ProfileSection__field--1bFJX">
                                    <td class="ProfileSection__labelCell--hmbFT"><label><span
                                                class="Type__TypeElement-sc-9snywk-0 iljoFL ProfileSection__label--1sXcz">Email</span></label>
                                    </td>
                                    <td class="ProfileSection__valueCell--1fz0K">
                                        <p class="Type__TypeElement-sc-9snywk-0 iljoFL ProfileSection__value--1bo-L"
                                            data-hj-suppress="true" data-qa="Profile Field: Username">{{$user->email}}
                                        </p>
                                    </td>
                                </tr>

                                <tr class="ProfileSection__field--1bFJX">
                                    <td class="ProfileSection__labelCell--hmbFT"><label><span
                                                class="Type__TypeElement-sc-9snywk-0 iljoFL ProfileSection__label--1sXcz">Phone</span></label>
                                    </td>
                                    <td class="ProfileSection__valueCell--1fz0K">
                                        <p class="Type__TypeElement-sc-9snywk-0 iljoFL ProfileSection__value--1bo-L"
                                            data-hj-suppress="true" data-qa="Profile Field: Username">
                                            {{ $postID->phone}}
                                        </p>
                                    </td>
                                </tr>
                                <tr class="ProfileSection__field--1bFJX">
                                    <td class="ProfileSection__labelCell--hmbFT"><label><span
                                                class="Type__TypeElement-sc-9snywk-0 iljoFL ProfileSection__label--1sXcz">City</span></label>
                                    </td>
                                    <td class="ProfileSection__valueCell--1fz0K">
                                        <p class="Type__TypeElement-sc-9snywk-0 iljoFL ProfileSection__value--1bo-L"
                                            data-hj-suppress="true" data-qa="Profile Field: Username">{{$postID->city}}
                                        </p>
                                    </td>
                                </tr>
                                <tr class="ProfileSection__field--1bFJX">
                                    <td class="ProfileSection__labelCell--hmbFT"><label><span
                                                class="Type__TypeElement-sc-9snywk-0 iljoFL ProfileSection__label--1sXcz">State</span></label>
                                    </td>
                                    <td class="ProfileSection__valueCell--1fz0K">
                                        <p class="Type__TypeElement-sc-9snywk-0 iljoFL ProfileSection__value--1bo-L"
                                            data-hj-suppress="true" data-qa="Profile Field: Username">{{$postID->state}}
                                        </p>
                                    </td>
                                </tr>
                                <tr class="ProfileSection__field--1bFJX">
                                    <td class="ProfileSection__labelCell--hmbFT"><label><span
                                                class="Type__TypeElement-sc-9snywk-0 iljoFL ProfileSection__label--1sXcz">Address</span></label>
                                    </td>
                                    <td class="ProfileSection__valueCell--1fz0K">
                                        <p class="Type__TypeElement-sc-9snywk-0 iljoFL ProfileSection__value--1bo-L"
                                            data-hj-suppress="true" data-qa="Profile Field: Username">
                                            {{$postID->address}}
                                        </p>
                                    </td>
                                </tr>
                                <tr class="ProfileSection__field--1bFJX">
                                    <td class="ProfileSection__labelCell--hmbFT"><label><span
                                                class="Type__TypeElement-sc-9snywk-0 iljoFL ProfileSection__label--1sXcz">Category</span></label>
                                    </td>
                                    <td class="ProfileSection__valueCell--1fz0K">
                                        <p class="Type__TypeElement-sc-9snywk-0 iljoFL ProfileSection__value--1bo-L"
                                            data-hj-suppress="true" data-qa="Profile Field: Username">
                                            {{$category->name}}
                                        </p>
                                    </td>
                                </tr>
                                <tr class="ProfileSection__field--1bFJX">
                                    <td class="ProfileSection__labelCell--hmbFT"><label><span
                                                class="Type__TypeElement-sc-9snywk-0 iljoFL ProfileSection__label--1sXcz">Description</span></label>
                                    </td>
                                    <td class="ProfileSection__valueCell--1fz0K">
                                        <p class="Type__TypeElement-sc-9snywk-0 iljoFL ProfileSection__value--1bo-L"
                                            data-hj-suppress="true" data-qa="Profile Field: Username">
                                            {{$postID->description}}
                                        </p>
                                    </td>
                                </tr>
                                <tr class="ProfileSection__field--1bFJX">
                                    <td>
                                        <div class="edit_btn_wrapper">
                                        <a class="edit_profile_btn" href="{{ url('/profile/'.$user->id.'/edit')}}">Edit profile</a>
                                        </div>
                                    </td>
                                  
                                    <td>
                                        {{-- <p class="Type__TypeElement-sc-9snywk-0 iljoFL ProfileSection__value--1bo-L"
                                            data-hj-suppress="true" data-qa="Profile Field: Username">
                                            {{$postID->description}}
                                        </p> --}}
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </section>

                </div>


            </div>
        </div>

    </div>



</div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#profile-img').change(function () {
        readURL(this);
    });

    $('.edit_btn_wrapper').click(function(){
        window.location = $(this).find("a").attr("href");
        return false;
    });

</script>




@if(Session::has('flash_guest'))
<div class="flash_message">
    {{ Session('flash_guest')}}
</div>
@endif


@endsection
