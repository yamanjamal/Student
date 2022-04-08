@extends('layouts.app')

@section('content')
<div class="container">

          <p class="lead">Students</p>
           <a type="button" class=" mb-2 btn btn-info"
            href="/student/create">Create Student</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Actins</th>

          </tr>
        </thead>
        <tbody>

          @foreach ($Students as $student)
          <tr>
            <th scope="row">{{$loop->index}}</th>
            <td>{{$student->name}}</td>
            <td>


                    <div class="row">

                        <form action="{{route('student.destroy',['student'=>$student])}}" method="post">
                            <input class="btn btn-danger" type="submit" value="Delete" />
                            @method('delete')
                            @csrf
                        </form>


                        <a class="ml-2 btn btn-primary" href="{{route('student.show',['student'=>$student])}}">Show</a>


                    </div>






            </td>

          </tr>

          @endforeach


        </tbody>
      </table>
</div>
@endsection
