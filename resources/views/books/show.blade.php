<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <article>
        <h1>{{$book->title}}</h1>
        <p>{{$book->description}}</p>
    </article>
    <a href="/books">Go back</a>
    

    <form class="form" action="/books/delete" method="post">
        @csrf
        @method('delete')
        <input type="hidden" name='bookid' value={{$book->id}}>
        <button>
            Delete
        </button>
    </form>


</body>

</html>
