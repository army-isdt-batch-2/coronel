<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
 public funCtion index()
    {
     return view('login');   
    } 

public funCtion table()
    {
     return view('table');   
    }
    // 

public funCtion layout()
    {
     return view('layout');   
    }
    //

public funCtion department()
    {
     return view('department');   
    }

    public function payslipview() {
        return view('payslipview');   
       }


    


public funCtion employees()
    {
     return view('employees');   
    }

public funCtion loans()
    {
     return view('loans');   
    }
    //
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
    //


    public funCtion form()
    {
     return view('form');   
    }
    


    //




}