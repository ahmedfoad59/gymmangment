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
                                <h4 class="card-title">Users List</h4>
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
                                        <th>email</th>
                                        <th>Phone Number</th>
                                        <th>Age</th>
                                        <th>Height</th>
                                        <th>weight</th>
                                        <th>Fat</th>
                                        <th>Gender</th>
                                        <th>Coash Name</th>
                                        <th>Membership</th>
                                        <th>account status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    @foreach($users as $user)
                                        <tbody>
                                        <tr>
                                            <td>#{{$user->id}}</td>
                                            <td class="text-center"><img src="{{$user->image_url}}" style="width: 60px; height: 60px;"></td>
                                            <td class="text-center">{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            @if($user->phone_number != null)
                                                <td>{{$user->phone_number}}</td>
                                            @else
                                            <td class="text-center">NULL</td>
                                            @endif
                                            <td class="text-center">{{$user -> age}}</td>
                                            <td class="text-center">{{$user -> height}}</td>
                                            <td class="text-center">{{$user -> weight}}</td>
                                            <td class="text-center">{{$user -> fat_percentage}} %</td>

                                            <td class="text-center">{{$user -> gender}} %</td>
                                            <td class="text-center">{{$user -> coash_name}} %</td>
                                            <td class="text-center">{{$user -> membership}} %</td>

                                            @if($user->account_status != "Active")
                                            <td class="text-center"><span class="badge rounded-pill bg-danger">Pending</span></td>
                                
                                            @else
                                            <td class="text-center"><span class="badge rounded-pill bg-success">Active</span></td>
                                        
                                            @endif

                                            <td>
                                        

                                        
                                            <a class="text-danger" href="{{route('admin.destroy-user' , $user -> id)}}">Delete</a>
                                            <br>
                                            @if($user->account_status != "Active")
                                            <a class="text-primary" href="{{route('admin.changeStatus-user' , $user -> id)}}">Activate</a>
                                
                                            @else
                                            <a class="text-primary" href="{{route('admin.changeStatus-user' , $user -> id)}}">Deactivate</a>
                                        
                                            @endif
                                            


                                            </td>
                                        </tr>
                                        </tbody>

                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <nav aria-label="...">
                                <ul class="pagination pagination justify-content-center">
                                    {{ $users->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
