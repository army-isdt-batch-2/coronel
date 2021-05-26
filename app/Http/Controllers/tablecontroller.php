<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tableController extends Controller
{
    public funCtion index()
    {
     return view('table');   
    }

    
    
    
    public funCtion layout()
    {
     return view('layout');   
    }


    


    public funCtion payslipview()
    {
     return view('layout');   
    }
    

    
    public funCtion employees()
    {
     return view('employees');   
    }


    public funCtion timekeepingview()
    {
     return view('layout');   
    }



    public funCtion deparment()
    {
     return view('department');   
    }


    public funCtion loans()
    {
     return view('loans');   
     
    }


    public funCtion leaves()
    {
     return view('leaves');   
    }

     public funCtion deduction()
     {
      return view('deduction');   
     
    }



    public funCtion timekeeping()
    {
     return view('timekeeping');   
    }



    public funCtion payslip()
    {
     return view('payslip');   
    }



    public funCtion position()
    {
     return view('position');   
    }



    public funCtion form()
    {
     return view('form');   
    }


    public funCtion create_form_department()
    {
     return view('create_form.department');   
    }

    public funCtion  create_form_employees()
    {
     return view(' create_form.employees');   
    }

    public funCtion create_form_leaves()
    {
     return view('create_form.leaves');   
    }

    public funCtion create_form_loans()
    {
     return view('create_form.loans');   
    }
    

    public funCtion create_form_deductions()
    {
     return view('create_form.deductions');   
    }


    public funCtion create_form_payslip()
    {
     return view('create_form.payslip');   
    }


    public funCtion create_form_timekeeping()
    {
     return view('create_form.timekeeping');   
    }

    
  }
  

