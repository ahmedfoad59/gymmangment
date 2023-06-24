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
                                <h4 class="card-title">Add New Muscle</h4>
                                <br>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form class="form-horizontal" action="{{route('admin.store-muscle')}} " novalidate="" method="POST" enctype="multipart/form-data">
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
