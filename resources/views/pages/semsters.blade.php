@extends('layouts.app')

@section('content')
<div class="container">

          <p class="lead">All Semesters</p>
           <a type="button" class=" mb-2 btn btn-info"
            href="/semester/create">Create Semeste</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Actins</th>

          </tr>
        </thead>
        <tbody>

          @foreach ($Semesters as $semster)
          <tr>
            <th scope="row">{{$loop->index}}</th>
            <td>{{$semster->name}}</td>
            <td>

                <form action="{{route('semester.destroy',['semester'=>$semster])}}" method="post">
                    <input class="btn btn-danger" type="submit" value="Delete" />
                    @method('delete')
                    @csrf
                </form>

            </td>

          </tr>

          @endforeach


        </tbody>
      </table>
</div>
@endsection
