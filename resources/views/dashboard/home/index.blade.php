@extends('dashboard.constants.layout')
@section('content')


<br>
<br>

 <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 fw-bold fs-3">Dashboard</div>
    </div>
    <div class="row mt-2">
      <div class="col-md-3 mb-3">
        <div class="card text-white bg-info h-100">
          <div class="card-header fw-bold"><h5 class="text-dark">Header</h5></div>
          <div class="card-body">
            <h5 class="text-dark">Primary card title</h5>
            <p class="text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="card text-white bg-success h-100">
          <div class="card-header fw-bold"><h5 class="text-dark">Header</h5></div>
          <div class="card-body">
            <h5 class="text-dark">Primary card title</h5>
            <p class="text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="card text-white bg-warning h-100">
          <div class="card-header fw-bold"><h5 class="text-dark">Header</h5></div>
          <div class="card-body">
            <h5 class="text-dark">Primary card title</h5>
            <p class="text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="card text-white bg-danger h-100">
          <div class="card-header fw-bold"><h5 class="text-dark">Header</h5></div>
          <div class="card-body">
            <h5 class="text-dark">Primary card title</h5>
            <p class="text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12 fw-bold fs-3">Coaches Statistics</div>
    </div>
    <div class="row mt-2">
      <div class="col-md-12">
        <div class="card-table">
          <div class="card-header">
          Coaches Datatables
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table data-table" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 4; $i++)
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    @endfor

                </tbody>
            
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>


    <div class="row">
      <div class="col-md-12 fw-bold fs-3">Customers Statistics</div>
    </div>
    <div class="row mt-2">
      <div class="col-md-12">
        <div class="card-table">
          <div class="card-header">
          Customers Datatables
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table data-table" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- for loop 10 times -->
                    @for ($i = 0; $i < 7; $i++)
                    <tr>
                        <td>{{$i+1}}</td>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    @endfor
                </tbody>
            
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection
