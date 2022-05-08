<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Speciality;

use App\Product;
use Illuminate\Support\Str;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search =null;
        $speciality = Speciality::orderBy('name', 'asc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $speciality = $speciality->where('name', 'like', '%'.$sort_search.'%');
        }
        $speciality = $speciality->paginate(15);
        return view('backend.product.speciality.index', compact('speciality', 'sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $speciality = new Speciality;
        $speciality->name = $request->name;
        $speciality->save();

       /**  $speciality_translation = SegmentTranslation::firstOrNew(['lang' => env('DEFAULT_LANGUAGE'), 'brand_id' => $speciality->id]);
        $speciality_translation->name = $request->name;
        $speciality_translation->save();*/

        flash(translate('Speciality has been inserted successfully'))->success();
        return redirect()->route('speciality.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $lang   = $request->lang;
        $speciality  = Speciality::findOrFail($id);
        return view('backend.product.speciality.edit', compact('speciality','lang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $speciality = Speciality::findOrFail($id);
        if($request->lang == env("DEFAULT_LANGUAGE")){
            $speciality->name = $request->name;
        }
       
        $speciality->save();

         /**$speciality_translation = SegmentTranslation::firstOrNew(['lang' => $request->lang, 'brand_id' => $speciality->id]);
        $speciality_translation->name = $request->name;
        $speciality_translation->save();*/

        flash(translate('Speciality has been updated successfully'))->success();
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $speciality = Speciality::findOrFail($id);
        Product::where('brand_id', $speciality->id)->delete();
       /** foreach ($speciality->brand_translations as $key => $speciality_translation) {
            $speciality_translation->delete();
        } */
        Speciality::destroy($id);

        flash(translate('Speciality has been deleted successfully'))->success();
        return redirect()->route('speciality.index');

    }
}
