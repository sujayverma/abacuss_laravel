<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.client.list');
    }

    public function ajax_client(Request $request)
    {
        if(isset($request->show_data)){
            $show_data = $request->show_data;
        }else{
            $show_data = 10;
        }
        $clients = Client::latest()->paginate($show_data);

        if($request->search != ''){
            $clients = Client::all()->latest()->paginate($show_data);
        }

        return view('admin.client.ajax_list', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) 
    {
       
        
        $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'phone_no' => 'required',
            'address' => 'required',
            'status' => 'required',
        ],[
            'name.required' => 'Client name is required',
            'email.required' => 'Client Email is required',
            'phone_no.required' => 'Client Phone is required',
            'address.required' => 'Client Address is required',
            'status.required' => 'Please check the status',
        ]);

        Client::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'address' => $request->address,
            'status' => $request->status,
        ]);
        $notification = array (
            'message' => 'Client added successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('clients')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
