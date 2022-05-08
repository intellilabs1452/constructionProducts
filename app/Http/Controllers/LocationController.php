<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SellerLocation;
use App\BrandTranslation;
use App\Product;
use Illuminate\Support\Str;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search =null;
        $locations = SellerLocation::orderBy('name', 'asc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $locations = $locations->where('name', 'like', '%'.$sort_search.'%');
        }
        $locations = $locations->paginate(15);
        return view('backend.seller.location.index', compact('locations', 'sort_search'));
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
        $location = new SellerLocation;
        $location->name = $request->name;
        $location->save();

        /**$brand_translation = BrandTranslation::firstOrNew(['lang' => env('DEFAULT_LANGUAGE'), 'brand_id' => $brand->id]);
        $brand_translation->name = $request->name;
        $brand_translation->save(); */

        flash(translate('Location has been inserted successfully'))->success();
        return redirect()->route('location.index');

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
        $location  = SellerLocation::findOrFail($id);
        return view('backend.seller.location.edit', compact('location','lang'));
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
        $location = SellerLocation::findOrFail($id);

        $location->name = $request->name;
        $location->save();

        /** $brand_translation = BrandTranslation::firstOrNew(['lang' => $request->lang, 'brand_id' => $brand->id]);
        $brand_translation->name = $request->name;
        $brand_translation->save(); */

        flash(translate('Location has been updated successfully'))->success();
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
        $location = SellerLocation::findOrFail($id);
        Product::where('brand_id', $location->id)->delete();
         /**foreach ($location->brand_translations as $key => $brand_translation) {
            $brand_translation->delete();
        }*/
        SellerLocation::destroy($id);

        flash(translate('Location has been deleted successfully'))->success();
        return redirect()->route('location.index');

    }
}
