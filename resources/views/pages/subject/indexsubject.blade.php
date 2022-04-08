@extends('layouts.app')

@section('content')
<div class="container">

          <p class="lead">All Subjects</p>
           <a type="button" class=" mb-2 btn btn-info"
            href="/subject/create">Create Subject</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Subject Name</th>
            <th scope="col">Semester Name</th>
            <th scope="col">Actins</th>

          </tr>
        </thead>
        <tbody>

          @foreach ($subjects as $subject)
          <tr>
            <th scope="row">{{$loop->index}}</th>
            <td>{{$subject->name}}</td>
                <td>{{$subject->semester->name}}</td>
            <td>

                <form action="{{route('subject.destroy',['subject'=>$subject])}}" method="post">
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
