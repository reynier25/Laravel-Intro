<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('public//css/style.css') }}" />

</head>
<body>

    <a href="/post/create">Add Post</a>
    <a href="/post">Sort by creation date!</a>
    <br>
    <br>

    <!-- <input type="radio" id="sort-by-q" name="sort by" value="sort by q" checked>
    <label for="sort by q">Sort by q</label><br>

    <input type="radio" id="sort-by-creation" name="sort by" value="sort by creation" >
    <label for="sort by creation">Sort by creation</label><br> -->

    
    <?php

    $posts = App\Models\Post::all();
    $postsByQ = App\Models\Post::orderByRaw("CASE WHEN content = 'q' THEN '1'
              ELSE content END ASC")->get();

    foreach ($postsByQ as $post) {
        // echo "Title: $post->title";
        
        echo "<div id=$post->id class='post'>
            <h2>Title: $post->title</h2>
            
            <a href='/post/{$post->id}/edit' class='edit'>Edit Post</a>
            <br>
            
            <div class='id'>Post ID: $post->id</div>
            <br>
            
            <div class='content'>Content: $post->content</div>
            <br>
            
            <div class='created-at'>Created at: $post->created_at</div>
            <br>
            
            <div class='updated-at'>Updated at: $post->updated_at</div>
            <br>
            <br>
         </div>";

        echo "<div>
            <div>
                <div>hellow</div>
            </div>
        </div>";
    }
        echo "whats up";
    ?>


</body>

    <!-- <script>
            var sort_by_q = document.getElementById('sort-by-q');
            var sort_by_creation = document.getElementById('sort-by-creation');
            
            if (sort_by_q.checked === true) {
                // console.log("hello world!");
                posts = document.getElementsByClassName('created-at');
                for (let i = 0; i < posts.length; i++) {
                    posts[i].style.fontFamily = 'Comic Sans MS';
                }
            }
    </script> -->
    
</html>