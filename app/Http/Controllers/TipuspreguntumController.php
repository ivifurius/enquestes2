<?php

namespace App\Http\Controllers;

use App\Models\Tipuspreguntum;
use Illuminate\Http\Request;

/**
 * Class TipuspreguntumController
 * @package App\Http\Controllers
 */
class TipuspreguntumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipuspregunta = Tipuspreguntum::paginate();

        return view('tipuspreguntum.index', compact('tipuspregunta'))
            ->with('i', (request()->input('page', 1) - 1) * $tipuspregunta->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipuspreguntum = new Tipuspreguntum();
        return view('tipuspreguntum.create', compact('tipuspreguntum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipuspreguntum::$rules);

        $tipuspreguntum = Tipuspreguntum::create($request->all());

        return redirect()->route('tipuspregunta.index')
            ->with('success', 'Tipuspreguntum created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipuspreguntum = Tipuspreguntum::find($id);

        return view('tipuspreguntum.show', compact('tipuspreguntum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipuspreguntum = Tipuspreguntum::find($id);

        return view('tipuspreguntum.edit', compact('tipuspreguntum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipuspreguntum $tipuspreguntum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipuspreguntum $tipuspreguntum)
    {
        request()->validate(Tipuspreguntum::$rules);

        $tipuspreguntum->update($request->all());

        return redirect()->route('tipuspregunta.index')
            ->with('success', 'Tipuspreguntum updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipuspreguntum = Tipuspreguntum::find($id)->delete();

        return redirect()->route('tipuspregunta.index')
            ->with('success', 'Tipuspreguntum deleted successfully');
    }
}
