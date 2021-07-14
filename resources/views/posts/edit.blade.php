<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name') }}</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <main>
    <div class="container">
      <h1 class="text-center my-2">My Blog</h1>

      <form class="w-50 mx-auto mt-5" method="POST" action="/posts/{{$post->id}}">
        @method('PUT')
        @csrf
        <label for="post-title">Title</label>
        <input class="form-control" type="text" name="title" id="post-title" value="{{$post->title}}">
        <br>
        <label for="post-content">Content</label>
        <textarea class="form-control" name="content" id="post-content">{{ $post->content }}</textarea>
        <input class="btn btn-primary mt-2" type="submit" value="submit" name="submit">
      </form>
        
    </div>
  </main>
</body>
</html>