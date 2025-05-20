<?php

namespace App\Http\Controllers;

use App\Models\SuoerAdmin;
use Illuminate\Http\Request;

class SuoerAdminController extends Controller
{

    public function index()
    {
        return view('dashboards.superadmindashboard.create');

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
        $wahaj = new SuoerAdmin();
        $wahaj->name = $request->name;
        $wahaj->email = $request->email;
        $wahaj->phone = $request->phone;
        $wahaj->address = $request->address;
        $wahaj->save();
        return redirect()->route('dashboards.superadmindashboard.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(SuoerAdmin $suoerAdmin)
    {
        //

        $superadmindashboards = SuoerAdmin::all();
        return view('dashboards.superadmindashboard.read', compact('superadmindashboards'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
        $id= $request->edit;
        $superadmindashboard = SuoerAdmin::where('id', $id)->first();
        return view ('dashboards.superadmindashboard.update',compact('superadmindashboard'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $superadmindashboard = SuoerAdmin::find($request->id);
        if($superadmindashboard){
            $superadmindashboard->name = $request->name;    
            $superadmindashboard->email = $request->email;
            $superadmindashboard->phone = $request->phone;
            $superadmindashboard->address = $request->address;
            $superadmindashboard->update();
            return redirect()->route('dashboards.superadmindashboard.read');
        }
        return redirect()->route('dashboards.superadmindashboard.read');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->delete;
        SuoerAdmin::destroy($id);
        return redirect()->route('dashboards.superadmindashboard.read');
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
    // public function show(SuoerAdmin $suoerAdmin)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(SuoerAdmin $suoerAdmin)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, SuoerAdmin $suoerAdmin)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(SuoerAdmin $suoerAdmin)
    // {
    //     //
    // }
}
