<?php

namespace Minminer_app\Http\Controllers;

use Illuminate\Http\Request;

//use Minminer_app\Http\Requests;

use Illuminate\Support\Facades\Validator;

use Minminer_app\Models\StratigraphicSection;

//Importar la clase requests para las validaciones
use Minminer_app\Http\Requests\StratigraphicSectionsFormRequest;
class StratigraphicSectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stratigraphic_sections=StratigraphicSection::all();
        return view('stratigraphic_sections.index',compact('stratigraphic_sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stratigraphic_sections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StratigraphicSectionsFormRequest $request)
    {
        //$this->validate($request,$rules);
        $nueva_seccion = new StratigraphicSection;
        $nueva_seccion->fill($request->all());
        $nueva_seccion->save();
        $request->session()->flash('bien', 'Sección creada correctamente.');
        //return redirect()->back();
        return redirect('secciones_estratograficas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stratigraphic_sections=StratigraphicSection::find($id);
        return view('stratigraphic_sections.show',compact('stratigraphic_sections'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stratigraphic_sections=StratigraphicSection::find($id);
        return view('stratigraphic_sections.edit',compact('stratigraphic_sections'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StratigraphicSectionsFormRequest $request, $id)
    {
          $seccionUpdate=$request->all();
          $seccion=StratigraphicSection::find($id);
          $seccion->update($seccionUpdate);
          
         
         //$book->update($bookUpdate);
         return redirect('secciones_estratograficas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StratigraphicSection::find($id)->delete();
         return redirect('secciones_estratograficas');
    }
}
