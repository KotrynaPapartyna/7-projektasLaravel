@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card-header">{{ __('AUTHORS') }}</div>
        <table class="table table-striped">

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Total books</th>
                    <th>Actions</th>

                </tr>

    {{--tikrinama- kokia yra sesija ir tada atvaizduojama atitinkama zinute--}}
    @if(session()->has('error_message'))
        <div class="alert alert-danger">
            {{session()->get("error_message")}}
        </div>
    @endif

    @if(session()->has('success_message'))
        <div class="alert alert-success">
            {{session()->get("success_message")}}
        </div>
    @endif



    @foreach ($authors as $author)


                <td>{{$author->id}}</td>
                <td>{{$author->name}}</td>
                <td>{{$author->surname}}</td>
                {{--kiek knygu turi auutorius eilute--}}
                <td>{{$author->authorBooks->count()}}</td>

            <td>
                <a href="{{route('author.show', [$author])}}" class="btn btn-secondary">Show</a>
                <form method="POST" action="{{route('author.destroy', [$author]) }}">

                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>

    @endforeach


    </table>
</div>

@endsection
