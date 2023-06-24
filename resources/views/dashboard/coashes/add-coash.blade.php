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
                                <h4 class="card-title">Add New Coash</h4>
                                <br>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form class="form-horizontal" action="{{route('admin.store-coash')}} " novalidate="" method="POST" enctype="multipart/form-data">
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
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" >
                                    </div>
                                </div>
                                
                                <br>

                                <div class="row">
                                    <div class="col">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Phone Number" >
                                    </div>
                                </div>
                                
                                <br>

                                <div class="row">
                                    <div class="col">
                                        <label for="password">Password</label>
                                        <input type="text" class="form-control" name="password" id="password" placeholder="PAssword" >
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
                                    <div class="col">
                                        <label for="salary">Salary</label>
                                        <input type="text" class="form-control" name="salary" id="salary" placeholder="Salary" >
                                    </div>
                                </div>
                               

                                <br>
                                
                                <div class="row">
                                    <div class="col">
                                        <label for="joined_at">Joined At</label>
                                        <input type="datetime-local" class="form-control" name="joined_at" id="joined_at" placeholder="Joined At" >
                                    </div>
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
