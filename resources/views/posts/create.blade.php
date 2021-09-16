@extends('layouts.app')

@section('content')
<div class="form-container">
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="author"> author </label>
            <input type="text" name="author" id="author">
        </div>

       <div class="form-group">
            <label for="content"> content </label>
            <input type="text" name="content" id="content">
       </div>

        <div class="form-group">
            <label for="img_path"> image </label>
            <input type="text" name="img_path" id="img_path">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Salva</button>
        </div>

    </form>
</div>

@endsection