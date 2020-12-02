<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/post" method="post">
    @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" autocomplete="off" value="{{ old('title') }}">
            @error('title') <p style="color: red">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="content">Content</label>
            <input type="text" name="content" autocomplete="off" value="{{ old('content') }}">
            @error('content') <p style="color: red">{{ $message }}</p> @enderror
        </div>

        <button>Create Post</button>
    </form>
</body>
</html>
