<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 

    ?>


    <form action="/post/{{$post->id}}" method="post">
        @method('PUT')
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" autocomplete="off" value="{{ $post->title }}">
        </div>
        @error('title') <p style="color: red">{{ $message }}</p> @enderror
        <div>
            <label for="content">Content</label>
            <input type="text" name="content" autocomplete="off" value="{{ $post->content }}">
        </div>
        @error('content') <p style="color: red">{{ $message }}</p> @enderror
        <button>Update Post</button>
    </form>
</body>
</html>
