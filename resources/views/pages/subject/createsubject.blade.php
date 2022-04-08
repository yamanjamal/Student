@extends('layouts.app')

@section('content')
<div class="container">

          <p class="lead">Create Subject</p>

          <form action="{{route('subject.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Name</label>
              <input id="exampleFormControlInput1" required type="text" name="name" class="form-control" >
            </div>

            <div class="form-group">
                <label >Semester</label>
                <select required name="semester_id" class="custom-select">
@foreach ($semesters as $semester)
<option value={{$semester->id}}>{{$semester->name}}</option>
@endforeach

                  </select>
              </div>


<br>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">Create</button>
              </div>
          </form>

</div>
@endsection
