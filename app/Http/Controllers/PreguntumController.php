<?php

namespace App\Http\Controllers;

use App\Models\Preguntum;
use App\Models\Enquestum;
use Illuminate\Http\Request;

/**
 * Class PreguntumController
 * @package App\Http\Controllers
 */
class PreguntumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pregunta = Preguntum::paginate();

        return view('preguntum.index', compact('pregunta'))
            ->with('i', (request()->input('page', 1) - 1) * $pregunta->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $preguntum = new Preguntum();
        $enquestum= Enquestum::pluck("descripcio","id");
        return view('preguntum.create', compact('preguntum',"enquestum"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Preguntum::$rules);

        $preguntum = Preguntum::create($request->all());

        return redirect()->route('pregunta.index')
            ->with('success', 'Pregunta creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $preguntum = Preguntum::find($id);

        return view('preguntum.show', compact('preguntum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $preguntum = Preguntum::find($id);

        $enquestum= Enquestum::pluck("descripcio","id");


        return view('preguntum.edit', compact('preguntum','enquestum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Preguntum $preguntum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preguntum $preguntum)
    {
        request()->validate(Preguntum::$rules);

        $preguntum->update($request->all());

        return redirect()->route('pregunta.index')
            ->with('success', 'Preguntum updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $preguntum = Preguntum::find($id)->delete();

        return redirect()->route('pregunta.index')
            ->with('success', 'Preguntum deleted successfully');
    }
}
