@foreach($books as $book)
<article>
    <h1><a href='/books/{{$book->id}}'>{{$book->title}}</a></h1>
    <p>{{$book->description}}</p>
</article>


@endforeach
<a href='/books/create'> add Book</a>
