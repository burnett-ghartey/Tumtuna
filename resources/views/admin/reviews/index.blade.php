@extends('layouts.admin')

@section('content')


@if(count($reviews) > 0)
<h1>Reviews</h1>
<table class="table">
    <thead>
        <tr>
<td>id</td>
<td>name</td>
<td>email</td>
<td>headline</td>
<td>description</td>

        </tr>
    </thead>
    <tbody>
        @foreach($reviews as $review)
        <tr>
        <td>{{$review->id}}</td>
        <td>{{$review->user->name}}</td>
        <td>{{$review->user->email}}</td>
        <td>{{$review->headline}}</td>
        <td>{{$review->description}}</td>
        <td><a href="{{url('/profile-details/'.$review->post->slug)}}">view post</a></td>
        <td>
        <form method="post" action="/admin/reviews/{{$review->id}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
           </form>
        </td>
        

            
        </tr>
        @endforeach
    </tbody>
</table>
@else
<h1 class="text-center">No Comments</h1>

@endif

@stop