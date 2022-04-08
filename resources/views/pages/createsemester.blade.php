@extends('layouts.app')

@section('content')
<div class="container">

          <p class="lead">Create Semesters</p>

          <form action="{{route('semester.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Name</label>
              <input required type="text" name="name" class="form-control" >
            </div>

<br>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">Create</button>
              </div>
          </form>

</div>
@endsection
