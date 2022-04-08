@extends('layouts.app')

@section('content')
<div class="container">

          <p class="lead">Show Student</p>


            <div class="form-group">
              <label for="exampleFormControlInput1">Name: {{$student->name}}</label>
            </div>

            <label for="exampleFormControlInput1">Subjects:</label>

              @foreach ($student->Subjects as $subject)
              <div class="form-group form-check">
                <label class="form-check-label" for="{{$subject->id}}" >{{$subject->name}}</label>
             </div>
             @endforeach



</div>
@endsection
