<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Country;
use App\Http\Requests\CountryRequest;

class CountryController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CountryRequest $request)
    {
        Country::create($request->all());
        return redirect()
            ->route('users.index')
            ->with(['success' => 'Country has been saved']);
    }


}
