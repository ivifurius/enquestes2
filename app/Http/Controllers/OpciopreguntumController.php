<?php

namespace App\Http\Controllers;

use App\Models\Opciopreguntum;
use Illuminate\Http\Request;

/**
 * Class OpciopreguntumController
 * @package App\Http\Controllers
 */
class OpciopreguntumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opciopregunta = Opciopreguntum::paginate();

        return view('opciopreguntum.index', compact('opciopregunta'))
            ->with('i', (request()->input('page', 1) - 1) * $opciopregunta->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opciopreguntum = new Opciopreguntum();
        return view('opciopreguntum.create', compact('opciopreguntum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Opciopreguntum::$rules);

        $opciopreguntum = Opciopreguntum::create($request->all());

        return redirect()->route('opciopregunta.index')
            ->with('success', 'Opciopreguntum created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $opciopreguntum = Opciopreguntum::find($id);

        return view('opciopreguntum.show', compact('opciopreguntum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opciopreguntum = Opciopreguntum::find($id);

        return view('opciopreguntum.edit', compact('opciopreguntum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Opciopreguntum $opciopreguntum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Opciopreguntum $opciopreguntum)
    {
        request()->validate(Opciopreguntum::$rules);

        $opciopreguntum->update($request->all());

        return redirect()->route('opciopregunta.index')
            ->with('success', 'Opciopreguntum updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $opciopreguntum = Opciopreguntum::find($id)->delete();

        return redirect()->route('opciopregunta.index')
            ->with('success', 'Opciopreguntum deleted successfully');
    }
}
