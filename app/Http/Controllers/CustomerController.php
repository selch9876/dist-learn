<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreCustomer;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')
        ->only(['create', 'store', 'edit', 'update', 'destroy', 'index']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $packages = DB::select('select * from packages');
        $customers = Customer::all();
        
        $sumAge = (int)$customers->sum('age');
        $avarageAge = (int)($sumAge / count($customers));

        return view('admin.students', [
            'packages' => $packages, 
            'user' => $user, 
            'customers' => $customers, 
            'avarageAge' => $avarageAge
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomer $request)
    {
        $validated = $request->validated();
        //$validated['user_id'] = $request->user()->id;
        $customer =  new Customer();
        $customer->customer_name = $validated['customer_name'];
        $customer->customer_email = $request['customer_email'];
        $customer->customer_phone = $request['customer_phone'];
        $customer->customer_password = $request['password'];
        $customer->save();
        
        /* if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('thumbnails');
            $customer->image()->save(
                Image::create(['path'=>$path])
            );
        } */

        $request->session()->flash('status', 'The student was created');

        return redirect()->route('home.index', ['customer'=>$customer->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
