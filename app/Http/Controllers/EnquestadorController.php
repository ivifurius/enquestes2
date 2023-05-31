<?php

namespace App\Http\Controllers;

use App\Models\Enquestador;
use Illuminate\Http\Request;

/**
 * Class EnquestadorController
 * @package App\Http\Controllers
 */
class EnquestadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enquestadors = Enquestador::paginate();

        return view('enquestador.index', compact('enquestadors'))
            ->with('i', (request()->input('page', 1) - 1) * $enquestadors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enquestador = new Enquestador();
        return view('enquestador.create', compact('enquestador'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Enquestador::$rules);

        $enquestador = Enquestador::create($request->all());

        return redirect()->route('enquestadors.index')
            ->with('success', 'Enquestador created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enquestador = Enquestador::find($id);

        return view('enquestador.show', compact('enquestador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enquestador = Enquestador::find($id);

        return view('enquestador.edit', compact('enquestador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Enquestador $enquestador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enquestador $enquestador)
    {
        request()->validate(Enquestador::$rules);

        $enquestador->update($request->all());

        return redirect()->route('enquestadors.index')
            ->with('success', 'Enquestador updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $enquestador = Enquestador::find($id)->delete();

        return redirect()->route('enquestadors.index')
            ->with('success', 'Enquestador deleted successfully');
    }
}
