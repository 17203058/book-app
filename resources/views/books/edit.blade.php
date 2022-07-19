<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="form" action="/books/{{$book->id}}/update" method="post">
        @csrf
        @method('put')
        <h2 class="header">Post your Book</h2>
        <div class="form__div">
          <input type="text" name="title" required value="{{$book->title}}">
          <label for="" class="form__label">Title</label>
        </div>
        <div class="form__div">
          <textarea name="description" required cols="30" rows="10" >{{$book->description}}</textarea>
          <label for="" class="form__label">Description</label>
        </div>
        <div class="form__div">
          <input class="submit" type="submit">
        </div>
      </form>
    {{-- <form action="/book/store" method="post">
        @csrf

        <label for="">nama</label>
        <input type="text" name="title" id="">
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <button>
            menghantar
        </button>
    </form> --}}
</body>
</html>