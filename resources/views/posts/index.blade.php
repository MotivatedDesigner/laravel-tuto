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

      @foreach ($posts as $post)
        <div class="card mt-4 p-2">
          <h2 class="card-title">{{$post->title}}</h2>
          <p class="card-body">{{$post->content}}</p>
        </div>
      @endforeach
        
    </div>
  </main>
</body>
</html>