@extends('layouts.app')

@section('content')
<div class="container">

          <p class="lead">Session</p>


            <div class="form-group">
              <label for="exampleFormControlInput1">Date : {{$session->date}}</label>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Subject : {{$session->Subject->name}}</label>
              </div>

              <label for="exampleFormControlInput1">Session Students :</label>

              @foreach ($session->Students as $student)
              <div class="form-group form-check">
                <label class="form-check-label">- {{$student->name}}</label>
             </div>
             @endforeach

 <div class="form-group">
                <label for="exampleFormControlInput1">Records :</label>
              </div>

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Students name</th>
                    <th scope="col">Attendance</th>

                    <th scope="col">Actions</th>


                  </tr>
                </thead>
                <tbody>


                  @foreach ($session->Records as $record)
                  <tr>
                    <th scope="row">{{$loop->index}}</th>

                    <td >
                        {{$record->Student->name}}
                    </td>


                    <td >

                        @if ($record->appear==0)
                        <i style=" color: red !important;" class="fas fa-times"></i>

                        @else
                        <i style=" color: green !important;" class="fas fa-check"></i>

                        @endif





                    </td>

                      <td>
                        <form action="{{route('record.update',['record'=>$record])}}" method="post">
                            @method('PUT')
                            @csrf
<input type="text" hidden name="student_id" value="{{$record->Student->id}}">
<input type="text" hidden name="session_id" value="{{$session->id}}">

<input type="text" hidden name="appear" value="{{$record->appear==0?1:0}}">


                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Change Attendance</button>
                              </div>

                        </form>
                    </td>

                  </tr>
                  @endforeach


                </tbody>
              </table>



<br>



</div>
@endsection
