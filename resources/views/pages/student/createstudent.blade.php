@extends('layouts.app')

@section('content')
<div class="container">

          <p class="lead">Create Student</p>

          <form action="{{route('student.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Name</label>
              <input required type="text" name="name" class="form-control" >
            </div>

            <label for="exampleFormControlInput1">Subjects</label>

              @foreach ($Subjects as $subject)
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="{{$subject->id}}" name="subject_id[]" type="checkbox" value="{{$subject->id}}">
                <label class="form-check-label" for="{{$subject->id}}" >{{$subject->name}}</label>
                | <label class="form-check-label">Semester : {{$subject->Semester->name}}</label>
             </div>
             @endforeach

<br>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">Create</button>
              </div>
          </form>

</div>
@endsection
