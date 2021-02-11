@extends('layouts.app')

@section('content')
<div class="container">

<a class="btn btn-small btn-info" href="{{ URL::to('books/create') }}">Create a book</a>

<h1>Library</h1>

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Description</td>
            <td></td>
            <td></td>
        </tr>
    </thead>
    <tbody>
    @foreach($books as $key => $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->description }}</td>
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('books/' . $book->id . '/edit') }}">Edit this book</a>
            </td>
            <td>
            <form action="{{ route('books.destroy', $book->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
@endsection
