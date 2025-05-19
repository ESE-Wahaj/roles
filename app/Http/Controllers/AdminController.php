<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $pList = SuoerAdmin::all();
        return view('dashboards.admindashboard.create', compact('pList'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $wahaj = new Admin();
        $wahaj->name = $request->name;
        $wahaj->email = $request->email;
        $wahaj->phone = Hash::make($request->phone);
        $wahaj->address = $request->address;

        $wahaj->primary_id = $request->choose;
       
        $wahaj->save();
        return redirect()->route('dashboards.admindashboard.create');
    
    }
    /**
     * Handle login functionality based on user roles.
     */


 

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //

        $admindashboards = Admin::all();

        return view('dashboards.admindashboard.read', compact('admindashboards'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
        $id= $request->edit;
        $admindashboard = Admin::where('id', $id)->first();
            $pList = Primary::all();
        return view ('dashboards.admindashboard.update',compact('admindashboard', 'pList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $foreign = Admin::find($request->id);
        if($foreign){
            $foreign->name = $request->name;    
            $foreign->email = $request->email;
            $foreign->phone = $request->phone;
            $foreign->address = $request->address;

            $foreign->primary_id = $request->choose;

            $foreign->update();
            return redirect()->route('dashboards.admindashboard.read');
        }
        return redirect()->route('dashboards.admindashboard.read');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->delete;
        Admin::destroy($id);
        return redirect()->route('dashboards.admindashboard.read');
    }


















    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Admin $admin)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Admin $admin)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Admin $admin)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Admin $admin)
    // {
    //     //
    // }
}
