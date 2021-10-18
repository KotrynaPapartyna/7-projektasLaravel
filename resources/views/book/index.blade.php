@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card-header">{{ __('BOOKS') }}</div>

    {{--zinute- atvaizduojama pagal veiksma--}}
    @if(session()->has('success_message'))
        <div class="alert alert-success">
            {{session()->get("success_message")}}
        </div>
    @endif


    <table class="table table-striped">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Author </th>
        <th>Actions</th>


    @foreach ($books as $book)

    </tr>
                <td>{{$book->id}}</td>
                <td>{{$book->name}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->bookAuthor->name}} {{$book->bookAuthor->surname}}</td>
            <td>
                <a href="{{route('book.edit',[$book])}}" class="btn btn-primary">Edit </a>
                <a href="{{route('book.show',[$book])}}" class="btn btn-success">Show </a>

                <form method="POST" action="{{route('book.destroy', [$book]) }}">

                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>


            </td>

        </tr>

    @endforeach


    </table>
</div>

@endsection
