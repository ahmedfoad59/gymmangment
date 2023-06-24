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
                                <h4 class="card-title">Add New User</h4>
                                <br>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form class="form-horizontal" action="{{route('admin.store-user')}} " novalidate="" method="POST" enctype="multipart/form-data">
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
                                       <label for="name">Image URL</label>
                                       <input type="text" class="form-control" name="image_url" id="image_url" placeholder="Image URL" >
                                   </div>
                               </div>
                               <br>

                                <div class="row">
                                    <div class="col">
                                        <label for="height">age</label>
                                        <input type="text" class="form-control" name="age" id="age" placeholder="age" >
                                    </div>
                                    <div class="col">
                                        <label for="last_name">fat</label>
                                        <input type="text" class="form-control" name="fat" id="fat" placeholder="fat" >
                                    </div>
                                </div>

                                <br>


                                <div class="row">
                                    <div class="col">
                                        <label for="height">height</label>
                                        <input type="text" class="form-control" name="height" id="height" placeholder="height" >
                                    </div>
                                    <div class="col">
                                        <label for="last_name">weight</label>
                                        <input type="text" class="form-control" name="weight" id="weight" placeholder="weight" >
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col">
                                        <label for="first_name">Phone Number</label>
                                        <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Phone Number" >
                                    </div>
                                    <div class="col">
                                        <label for="last_name">Password</label>
                                        <input type="text" class="form-control" name="password" id="password" placeholder="Password" >
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col">
                                        <label for="first_name">coash_name</label>
                                        <input type="text" class="form-control" name="coash_name" id="coash_name" placeholder="coash_name" >
                                    </div>
                                    <div class="col">
                                        <label for="last_name">gender</label>
                                        <input type="text" class="form-control" name="gender" id="gender" placeholder="gender" >
                                    </div>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="exampleInputText1">membership</label>
                                    <input type="text" class="form-control" id="membership" name="membership" placeholder="membership" >
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="exampleInputText1">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" >
                                </div>
                                

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




    @endsection
