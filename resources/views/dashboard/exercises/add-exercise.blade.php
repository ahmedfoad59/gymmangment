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
                                <h4 class="card-title">Add New Exercise</h4>
                                <br>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form class="form-horizontal" action="{{route('admin.store-exercise')}} " novalidate="" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" >
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col">
                                        <label for="description">Description</label>
                                        <input type="text" class="form-control" name="description" id="description" placeholder="Description" >
                                    </div>
                                </div>
                                
                                <br>

                               
                                <div class="row">
                                    <div class="col">
                                        <label for="image">Image URL</label>
                                        <input type="text" class="form-control" name="image" id="image" placeholder="Image URL" >
                                    </div>
                                </div>
                               
                                <br>
                                <div class="row">
                                    <div class="form-outline">
                                        <label class="form-label" for="groups">Groups</label>
                                        <input type="number" name="groups" id="groups"  class="form-control" />
                                    </div>

                                <br>
                                <div class="form-outline">
                                    <label class="form-label" for="groupcount">Group Count</label>
                                    <input type="number" name="groupcount" id="groupcount"  class="form-control" />
                                </div>
                                </div>

                             
                                <div class="col">
                                            <label for="muscle_id">Select Muscle</label>
                                            <select class="form-control" id="muscle_id" name="muscle_id">
                                                <option value="1">Choose Muscle</option>
                                                @if($muscles && $muscles -> count() > 0)
                                                    @foreach($muscles as $muscle)
                                                        <option
                                                            value="{{$muscle -> id }}">{{$muscle -> name}}</option>
                                                    @endforeach
                                                @endif
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
