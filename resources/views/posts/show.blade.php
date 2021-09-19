@extends('layouts.app')

@section('content')
<div class="container posts-container">
   {{$post->author}}
   <img src="{{$post->img_path}}" alt="" >
</div>
@endsection