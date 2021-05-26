@extends('layout.main')
@section('form')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10 mb-5">
                        <h4>
                           Payroll Processing
                        </h4>
                    </div> 

            

                    <div class="col-12">
                        <form class="row g-3">
                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">Contribution Type=</label>
                                <input type="email" class="form-control" id="inputEmail4">
                            </div> 
                            <div class="col-md-8">
                                <label for="inputEmail4" class="form-label">base Range</label>
                                <input type="email" class="form-control" id="inputEmail4">
                            </div> 
                        </div> 
                            
                      <div class="col-md-4">    
                            <label for="inputEmail4" class="form-label">Monthly Contribution</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div> 
                             

                        
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Employee Share</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div> 
                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">Employer share</label>
                                <input type="email" class="form-control" id="inputEmail4">
                            </div> 
                            

                 
                    
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
              </form>
            </div>


                      
                  

                  
@endsection