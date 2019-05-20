@extends('layouts.app')
@section('content')

<h2 class="card text-center">
    Create New Post

</h2>

    <form action="{{route('post.create')}}" method="POST">
    {{csrf_field()}}
    <div class="form-group">
        <label for="title">Title </label>
        <input type="text" name="title" class="form-control">

        
    </div>
    <div class="form-group">
        <label for="featured">Featured Image</label>
        <input type="file" name="feature" class="form-control">

        </div>
    
        <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
          </div>


        <div class="form-group">
            <div class="text-center">
                <button type="submit" class="btn btn-success">
                    Sucess
        </div>
        </div>
    </form>
@stop