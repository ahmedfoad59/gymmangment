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
                                <h4 class="card-title">Coashes List</h4>
                                <br>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div id="table" class="table-editable">
                                <table class="table table-bordered table-responsive-md table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Salary</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    @foreach($coashes as $coash)
                                        <tbody>
                                        <tr>
                                            <td>#{{$coash->id}}</td>
                                            <td class="text-center"><img src="{{$coash->image}}" style="width: 70px; height: 70px;"></td>
                                            <td class="text-center">{{$coash->name}}</td>
                                            <td>{{$coash->phone_number}}</td>
                                            <td>{{$coash->salary}}</td>
                                            <td>
                                            <a class="text-danger" href="{{route('admin.destroy-coash' , $coash -> id)}}">Delete</a>
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
