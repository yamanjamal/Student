@extends('layouts.app')

@section('content')
<div class="container">

          <p class="lead">Session</p>
           <a type="button" class=" mb-2 btn btn-info"
            href="/session/create">Create Session</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Date</th>
            <th scope="col">ٍSubject</th>
            <th scope="col">Actins</th>

          </tr>
        </thead>
        <tbody>

          @foreach ($sessions as $session)
          <tr>
            <th scope="row">{{$loop->index}}</th>
            <td>{{$session->date}}</td>
            <td>{{$session->Subject->name}}</td>
            <td class=" row">


                        <form action="{{route('session.destroy',['session'=>$session])}}" method="post">
                            <input class="btn btn-danger" type="submit" value="Delete" />
                            @method('delete')
                            @csrf
                        </form>

                        <a class="ml-2 btn btn-success" href="{{route('session.edit',['session'=>$session])}}">Add students</a>
                        <a class="ml-2 btn btn-primary" href="{{route('session.show',['session'=>$session])}}">Show Records</a>

            </td>

          </tr>

          @endforeach


        </tbody>
      </table>
</div>
@endsection
