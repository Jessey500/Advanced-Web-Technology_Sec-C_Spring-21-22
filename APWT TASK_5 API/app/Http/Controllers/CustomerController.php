<?php

namespace App\Http\Controllers;

use App\Models\Customer;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }

    public function customerlogin(){
        return view('customer.customerlogin');
    }

    public function customerlogininput(Request $request){
        $validate = $request->validate([
               'email' => 'required',
               'password' => 'required'
        ]);
        $email = $request->input('email');
        $password = $request->input('password');

        if($email === "Jess.jesey@gmail.com" && $password === "12345"){
           return "Login Successfull";
        }
        else{
           return 
           
           "WRONG Email / Password <br>
            Invalid Email/ Password";
                          
        }
    }
       
    public function registration(){
        return view('customer.registration');
    }

        

    public function registrationinput(Request $request){
        $validate = $request->validate([
            'name'=>'required|min:5|max:10',
            'dob'=>'required',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'email'=>'email',
            'password' => 'required'

        ],
        [
            'name.required'=>'Please put your name',
            'name.min'=>'Name must be greater than 5 charcters'
        ]
    );
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->dob = $request->dob;
        $customer->phone = $request->phone;

        $customer->save();
         return 'Registration is successful';
        //return $customer;
    }
    public function customerList(){
        $customers = Customer::all();

        // for($i=0; $i<10; $i++){
        //     $student= array(
        //         "name"=>"Student ".($i+1),
        //         "id" => "00".($i+1),
        //         "dob" => "11-11-11"
        //     );
        //     $students[]= (object)$student;
        // }
        // return view('pages.customer.list')->with('customers', $customers);
        
    }
      function list($customer_id=null)
    {
        return $customer_id?customer::find($customer_id):customer::all();
    }
      function add(Request $req)
      {
          $customer= new Customer;
        //   $customer->customer_id=$req->customer_id;
          $customer->name=$req->name;
          $customer->dob=$req->dob;
          $customer->phone=$req->phone;
          $customer->password=$req->password;
          $customer->email=$req->email;
          $result=$customer->save();
          if($result)
          {
            return["Result"=>"Data has been added"];

          }
          else
          {
            return["Result"=>"Data not added successfully"];
          }

          
         
         
      }

      function search($name)
      {
          return Customer::where("name","like","%".$name."%")->get();
      }

      function update1(Request $req)
          {
            
            $customer= Customer::find($req->id);
            $customer->name=$req->name;
            $customer->dob=$req->dob;
            $customer->phone=$req->phone;
            $customer->email=$req->email;
            $customer->password=$req->password;
            $result=$customer->save();
            if($result)
            {
            return["Result"=>"Data has been updated"];
            }
            else
            {
                return["Result"=>"Data not added successfully"];
            }

          }

      function delete($customer_id)
      {
        
        $customer= Customer::find($customer_id);
        $result=$customer->delete();
        if($result)
        {
        return["Result"=>"Data has been deleted"];
        }
        else
        {
            return["Result"=>"Data has not deleted successfully"];
        }

      }
}
    