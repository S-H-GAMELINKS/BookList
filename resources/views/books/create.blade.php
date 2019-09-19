<form method="post" action="/books">
    {{ csrf_field() }}

    <input type="text" name="isbn">

    <button type="submit">Create Book</button>
</form>

<a href="/books">Back</a>