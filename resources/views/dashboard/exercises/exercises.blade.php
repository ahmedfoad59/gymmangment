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
                                <h4 class="card-title">Exercises List</h4>
                                <br>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div id="table" class="table-editable">
                                <table class="table table-bordered table-responsive-md table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Muscle</th>
                                        <th>groups</th>
                                        <th>group-count</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    @foreach($exercises as $exercise)
                                        <tbody>
                                        <tr>
                                            <td>#{{$exercise->id}}</td>
                                            <td class="text-center">{{$exercise->name}}</td>
                                            <td>{{$exercise->description}}</td>
                                            <td class="text-center"><img src="{{$exercise->image}}" style="width: 100px; height: 100px;"></td>
                                            <td>{{!empty($exercise->muscle->name)?$exercise->muscle->name:'not found'}}</td>
                                            <td>{{$exercise->groups}}</td>
                                            <td>{{$exercise->group_count}}</td>
                                            <td><a class="text-danger" href="{{route('admin.destroy-exercise' , $exercise -> id)}}">Delete</a>
                                            
                                            
                                        
                                            </td>
                                        </tr>
                                        </tbody>

                                    @endforeach
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
