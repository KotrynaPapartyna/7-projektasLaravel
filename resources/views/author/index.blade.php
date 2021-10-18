@extends('layouts.app')

@section('content')

<div class="container">
<table class="table table-striped">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>



    @foreach ($authors as $author)

    </tr>
                <td>{{$author->id}}</td>
                <td>{{$author->name}}</td>
                <td>{{!!$author->surname!!}}</td>

            <td>
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
