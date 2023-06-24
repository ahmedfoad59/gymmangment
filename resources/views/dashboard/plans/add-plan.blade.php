@extends('dashboard.constants.layout')
@section('content')



<div id="content-page" class="content-page">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <br>
                                <h4 class="card-title">Add New Plan</h4>
                                <br>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form class="form-horizontal" action="{{route('admin.store-plan')}} " novalidate="" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="col">
                                            <label for="user_id">Select User</label>
                                            <select class="form-control" id="user_id" name="user_id">
                                                <option value="1">Choose User</option>
                                                @if($users && $users -> count() > 0)
                                                    @foreach($users as $user)
                                                        <option
                                                            value="{{$user -> id }}">{{$user -> name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                </div>

                                
                                <br>

                                <div class="col">
                                            <label for="muscle_id">Select Muscle</label>
                                            <select class="form-control" id="muscles" name="muscles">
                                                <option value="1">Choose Muscle</option>
                                                @if($muscles && $muscles -> count() > 0)
                                                    @foreach($muscles as $muscle)
                                                    <input type="checkbox" name="muscles[]" value="{{$muscle->id}}">{{ $muscle->name }}<br>
                                                        {{-- <option
                                                            value="{{$muscle -> id }}">{{$muscle -> name}}</option> --}}
                                                    @endforeach
                                                @endif
                                            </select>
                                </div>
                                
                                <br>

                               
                                <div class="col">
                                            <label for="exercise_id">Select Exercise</label>
                                            <select class="form-control" id="exercises" name="exercises">
                                                <option value="1">Choose Exercise</option>
                                                @if($exercises && $exercises -> count() > 0)

                                                    @foreach($exercises as $exercise)
                                                    <input type="checkbox" name="exercises[]" value="{{$exercise->id}}">{{ $exercise->name }}<br>
                                                        {{-- <option
                                                            value="{{$exercise -> id }}">{{$exercise -> name}}</option> --}}
                                                    @endforeach
                                                @endif
                                            </select>
                                </div>
                                
                               

                                <br>

    
                                <div class="col">
                                            <label for="day">Select Day</label>
                                            <select class="form-control" id="day" name="day">
                                                <option value="1">Choose Day</option>
                                                
                                                <option value="Saturday">Saturday</option>
                                                <option value="Sunday">Sunday</option>
                                                <option value="Monday">Monday</option>
                                                <option value="Tuesday">Tuesday</option>
                                                <option value="Wednesday">Wednesday</option>
                                                <option value="Thursday">Thursday</option>
                                                <option value="Friday">Friday</option>
                                                   
                                            </select>
                                </div>
                                
                                <br>


                                <div class="form-group row">
                                    <div class="col-sm-12 col-lg-12 a">
                                        <div class="iq-card">
                                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                        </div>
                                    </div>
                                </div>



                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>




    @endsection
