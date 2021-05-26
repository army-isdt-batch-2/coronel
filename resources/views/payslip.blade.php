@extends('layout.main')
@section('title', 'payslip ')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                            Payslip
                        </h4>
                    </div>
                    <div class="col-1 text-end"> 
                        <a href="/create_form/payslip" class="btn btn-dark pull-right">Create</a>
                    </div> 
                        <div class="col-1 text-end"> 

                        <a href="/payslipview" class="btn btn-dark pull-right">view</a>
                    </div> 
                    <div class="col-12">
                        <hr>    
                    </div>

                    <div class="col-8"></div>
                    <div class="col-4 text-end"> 
                        <input type="text" class="form-control" placeholder="Search">
                    </div> 

                    <div class="col-12">
                        
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th class="text-muted" scope="col">#</th>
                                    <th class="text-muted" scope="col">Processed</th>
                                    <th class="text-muted" scope="col">Cut off Start	</th>
                                    <th class="text-muted" scope="col">Cut off End	</th>
                                    <th class="text-muted" scope="col">Action</th>
                                    <th class="text-muted" scope="col">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr> 
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr> 
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection