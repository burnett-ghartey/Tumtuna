@extends('layouts.admin')



@section('content')

<div class="col-sm-11">
    @component('admin.includes.title')
   Categories
    @endcomponent
    <div class="row">
        <div class="col-sm-4">
            <table class="table table-striped admin_users_table">
<thead>
    <tr>
        <th>#</th>
        <td>Category Name</td>
    </tr>
</thead>
<tbody>
    @if($categories)
        @foreach($categories as $category)
        <tr>
         
            <th>{{$category->id}}</th>
            <th>
                <a href="{{ url('/admin/categories/'. $category->id.'/edit')}}">{{$category->name}}</a>
            </th>        
        </tr>
        @endforeach
    @endif
</tbody>
            </table>
        </div>
        <div class="col-sm-5">
            <form method="POST" action="/admin/categories">
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter a category">
            </div>
            <button type="submit" class="btn btn-primary">Add Category</button>
                
            @component('admin.includes.formErrors')
            @endcomponent
            </form>
        </div>
    </div>
</div>
@endsection
