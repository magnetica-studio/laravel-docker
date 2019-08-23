<html>
   <body>
        <h1>
            Posts
        </h1>
        <a href="posts/create">Create New</a>
        @foreach($posts as $post)
        <h2>{{$post->title}}</h2>
        <p>{{$post->content}}</p>
        @endforeach
   </body>
</html>
