<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();

        return view('backOffice.admin', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('back');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new About();
        $store->p_birthday = $request->p_birthday;
        $store->birthday = $request->birthday;

        $store->p_website = $request->p_website;
        $store->website = $request->website;

        $store->p_phone = $request->p_phone;
        $store->phone = $request->phone;

        $store->p_city = $request->p_city;
        $store->city = $request->city;

        $store->p_age = $request->p_age;
        $store->age = $request->age;

        $store->p_degree = $request->p_degree;
        $store->degree = $request->degree;

        $store->p_email = $request->p_email;
        $store->email = $request->email;

        $store->p_freelance = $request->p_freelance;
        $store->freelance = $request->freelance;
        $store->save();
        return redirect('back');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = About::find($id);

        return redirect('back', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = About::find($id);
        $update->p_birthday = $request->p_birthday;
        $update->birthday = $request->birthday;

        $update->p_website = $request->p_website;
        $update->website = $request->website;

        $update->p_phone = $request->p_phone;
        $update->phone = $request->phone;

        $update->p_city = $request->p_city;
        $update->city = $request->city;

        $update->p_age = $request->p_age;
        $update->age = $request->age;

        $update->p_degree = $request->p_degree;
        $update->degree = $request->degree;

        $update->p_email = $request->p_email;
        $update->email = $request->email;

        $update->p_freelance = $request->p_freelance;
        $update->freelance = $request->freelance;
        $update->save();
        return redirect('back');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = About::find($id);
        $destroy->delete();
        return redirect('back');
    }
}
