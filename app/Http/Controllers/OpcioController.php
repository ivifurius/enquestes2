<?php

namespace App\Http\Controllers;

use App\Models\Opcio;
use Illuminate\Http\Request;

/**
 * Class OpcioController
 * @package App\Http\Controllers
 */
class OpcioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opcio = Opcio::paginate();

        return view('opcio.index', compact('opcio'))
            ->with('i', (request()->input('page', 1) - 1) * $opcio->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opcio = new Opcio();
        return view('opcio.create', compact('opcio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Opcio::$rules);

        $opcio = Opcio::create($request->all());

        return redirect()->route('opcios.index')
            ->with('success', 'Opcio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $opcio = Opcio::find($id);

        return view('opcio.show', compact('opcio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opcio = Opcio::find($id);

        return view('opcio.edit', compact('opcio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Opcio $opcio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Opcio $opcio)
    {
        request()->validate(Opcio::$rules);

        $opcio->update($request->all());

        return redirect()->route('opcios.index')
            ->with('success', 'Opcio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $opcio = Opcio::find($id)->delete();

        return redirect()->route('opcios.index')
            ->with('success', 'Opcio deleted successfully');
    }
}
