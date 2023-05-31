<?php

namespace App\Http\Controllers;

use App\Models\Enquestum;
use App\Models\Preguntum;

use Illuminate\Http\Request;

/**
 * Class EnquestumController
 * @package App\Http\Controllers
 */
class EnquestumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enquesta = Enquestum::paginate();

        return view('enquestum.index', compact('enquesta'))
            ->with('i', (request()->input('page', 1) - 1) * $enquesta->perPage());
    }


    public function form2()
    {
        $enquestum = Enquestum::paginate();
        $preguntum= Preguntum::pluck("enunciat","enquesta_id");
        
        return view('enquestum.form2', compact('enquestum','preguntum'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enquestum = new Enquestum();
        

        return view('enquestum.create', compact('enquestum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Enquestum::$rules);

        $enquestum = Enquestum::create($request->all());

        return redirect()->route('enquesta.index')
            ->with('success', 'Enquestum created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enquestum = Enquestum::find($id);
        $preguntum= Preguntum::pluck("enquesta_id","enunciat");

        return view('enquestum.show', compact('enquestum','preguntum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enquestum = Enquestum::find($id);

        return view('enquestum.edit', compact('enquestum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Enquestum $enquestum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enquestum $enquestum)
    {
        request()->validate(Enquestum::$rules);

        $enquestum->update($request->all());

        return redirect()->route('enquesta.index')
            ->with('success', 'Enquestum updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $enquestum = Enquestum::find($id)->delete();

        return redirect()->route('enquesta.index')
            ->with('success', 'Enquestum deleted successfully');
    }
}
