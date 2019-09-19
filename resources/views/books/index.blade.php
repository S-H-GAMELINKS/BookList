@foreach($books as $book)
    {{ $book->title }}
@endforeach

<a href="/books/create">New Book</a>