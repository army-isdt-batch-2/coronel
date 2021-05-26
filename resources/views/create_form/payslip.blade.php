@extends('layout.main')
@section('form')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10 mb-5">
                        <h4>
                           Process Payroll
                        </h4>
                    </div> 

            

                    <div class="col-12">
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Cut-off Start</label>
                                <input type="date" class="form-control" id="inputEmail4">
                            </div>
                            
    
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Cut-end Start</label>
                                        <input type="date" class="form-control" id="inputEmail4">
                                    </div>
                                    

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Process</button>
                            </div>
                      </form>
                    </div>
                        
          
@endsection