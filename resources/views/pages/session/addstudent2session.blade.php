@extends('layouts.app')

@section('content')
<div class="container">

          <p class="lead">Session</p>

          <form action="{{route('session.update',['session'=>$session])}}" method="POST">
            @csrf @method('PUT')
            <div class="form-group">
              <label for="exampleFormControlInput1">Date</label>
              <input required type="text" name="date" value="{{$session->date}}" class="form-control" >
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Subject : {{$session->Subject->name}}</label>
                <input hidden required type="text" name="subject_id" value="{{$session->Subject->id}}" class="form-control" >
              </div>

              <label for="exampleFormControlInput1">Session Students :</label>
              @foreach ($session->Students as $student)
              <div class="form-group form-check">
                <label class="form-check-label">- {{$student->name}}</label>
             </div>
             @endforeach

            <label for="exampleFormControlInput1">All Students :</label>
              @foreach ($session->Subject->Students as $student)
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="{{$student->id}}" name="student_id[]"
                 type="checkbox" value="{{$student->id}}">
                <label class="form-check-label" for="{{$student->id}}" >{{$student->name}}</label>
             </div>
             @endforeach

<br>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Update</button>
              </div>
          </form>

</div>
@endsection
