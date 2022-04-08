@extends('layouts.app')

@section('content')
<div class="container">

          <p class="lead">Create Session</p>

          <form action="{{route('session.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Date</label>
              <input required type="text" name="date" class="form-control" >
            </div>


            <div class="form-group">
                <label for="exampleFormControlInput1">Subjects</label>
                <select required name="subject_id" class="custom-select">
@foreach ($subjects as $subject)
<option value={{$subject->id}}>{{$subject->name}}</option>
@endforeach
                  </select>
              </div>


{{--
            <label for="exampleFormControlInput1">Students</label>

              @foreach ($students as $student)
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="{{$student->id}}" name="student_id[]" type="checkbox" value="{{$student->id}}">
                <label class="form-check-label" for="{{$student->id}}" >{{$student->name}}</label>
             </div>
             @endforeach --}}

<br>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">Create</button>
              </div>
          </form>

</div>
@endsection
