@extends('layouts.app')

@section('content')
<div class="container">

<a class="btn btn-small btn-info" href="{{ URL::to('books') }}">View All books</a>

<h1>Edit Book "{{$book->id}}"</h1>

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<form method="PUT" action="{{ url('books', $book->id) }}" >
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Book title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="text" name="description" class="form-control" placeholder="Book description">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update book</button>
        </div>
    </div>
</form>

</div>
@endsection
