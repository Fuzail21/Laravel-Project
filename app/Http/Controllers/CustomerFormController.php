<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerRegistration;

class CustomerFormController extends Controller
{
    public function render(){
        $title = 'User Registration Form';
        $url = ('/customer-form');
        $data = compact('url' , 'title');
        return view('registration')->with($data);
      }

      public function store(Request $request)
      {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'DOB' => 'required',
        ]);

        echo "<pre>";
        print_r($request->all());


    // INSERT QUERY
        $customers = new CustomerRegistration;
        $customers->Name =  $request['name'];
        $customers->Email =  $request['email'];
        $customers->Password =  md5($request['password']);
        $customers->Country =  $request['country'];
        $customers->City =  $request['city'];
        $customers->Address =  $request['address'];
        $customers->Gender =  $request['gender'];
        $customers->DOB =  $request['DOB'];
        $customers->save();

        return redirect('/customer-form');
        // INSERT QUERY
    }
    public function view( Request $request ){
        $search = $request['search'] ?? "";
        if ($search != '') {
            $customers = CustomerRegistration::where('name' , 'LIKE' , "%$search%")->get();
        } else {
            $customers = CustomerRegistration::all();
        }

        $data = compact('customers' , 'search');
        return view('layouts.customers-view')->with($data);
    }

    public function delete($id){
        $customers = CustomerRegistration::find($id);
        if (!is_null($customers)) {
            $customers->delete();
            return redirect('customer-form');
        }

    }

    public function edit($id){

        $customers = CustomerRegistration::find($id);
        if (is_null($customers)) {
            return redirect('customer-form');
        } else {
            $title = 'Update Customer Information';
            $url = ('/customer-form/update'). "/" . $id;
            $data = compact('customers' , 'url' , 'title');
            return view('registration')->with($data);
        }

    }

    public function update($id , Request $request){
        $customers = CustomerRegistration::find($id);
        $customers->Name =  $request['name'];
        $customers->Email =  $request['email'];
        $customers->Country =  $request['country'];
        $customers->City =  $request['city'];
        $customers->Address =  $request['address'];
        $customers->Gender =  $request['gender'];
        $customers->DOB =  $request['DOB'];
        $customers->save();

        return redirect('/customer-form');
    }
};
