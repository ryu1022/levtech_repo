<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        

        <title>Posts</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body class="antialiased">
        <h1>BlogName</h1>
       <form action="/posts/{{ $post->id }}"method="POST">
           @csrf
           @method('PUT')
           <div class="title">
               <h2>title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value={{ $post->title }}>
                <p class='title__error' style="color:red">{{ $errors->first('post.title') }}</p>
               
               
           </div>
           <div class="body">
               <h2>Body</h2>
               <textarea name="post[body]" placeholder="今日も一日お疲れ様でした" value={{ $post->body }}></textarea>
               <p class='body__error' style="color:red">{{ $errors->first('post.body') }}</p>
               
           </div>
          
           <input type="submit" value="update"/>
       </form>>
        <div class="footer">
        <a href="/posts/{{ $post->id }}">戻る</a>
        </div>
    </body>
</html>
