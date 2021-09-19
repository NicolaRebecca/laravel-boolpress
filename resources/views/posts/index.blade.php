@extends('layouts.app')

@section('content')
<div class="container posts-container">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">author</th>
        <th scope="col">date</th>
        <th scope="col">content</th>
        <th scope="col">image</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->author}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->content}}</td>
                <td><img src="{{$post->img_path}}" alt=""></td>
                <!-- <td><a href="{{ route('posts.show', $post) }}"><i class="bi bi-zoom-in"></i></a></td> -->
                <td>
                    <a href="{{ route('posts.show', $post) }}">
                        <button class="btn btn-primary"><i class="bi bi-zoom-in"></i></button>    
                    </a>
                
                    <a href="{{ route('posts.edit', $post) }}">
                        <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>    
                    </a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection