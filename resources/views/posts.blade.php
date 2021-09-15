<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="container cars-container">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">author</th>
        <th scope="col">content</th>
        <th scope="col">img_path</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->author}}</td>
                <td>{{$post->content}}</td>
                <td><img src="{{$post->img_path}}" alt=""> </td>
                <td><a href="{{ route('posts.show', $post) }}"><i class="bi bi-zoom-in"></i></a></td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection

</body>
</html>