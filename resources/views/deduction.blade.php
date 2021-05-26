@extends('layout.main')
@section('title', 'layouts test')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                            All Records 
                        </h4>
                    </div>
                    <div class="col-2 text-end"> 
                        <a href="/create_form/deductions" class="btn btn-dark pull-right">Create</a>
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
                                    <th class="text-muted" scope="col">Contribution type</th>
                                    <th class="text-muted" scope="col">base range</th>
                                    <th class="text-muted" scope="col">Monthly Contribution</th>
                                    <th class="text-muted" scope="col">Employee share</th>
                                    <th class="text-muted" scope="col">Employer share</th>
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