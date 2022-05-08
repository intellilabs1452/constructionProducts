<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SkilledTrade;
use App\SkilledTradeTranslation;
use App\Product;
use Illuminate\Support\Str;

class SkilledtradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search =null;
        $skilledtrades = SkilledTrade::orderBy('name', 'asc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $skilledtrades = $skilledtrades->where('name', 'like', '%'.$sort_search.'%');
        }
        $skilledtrades = $skilledtrades->paginate(15);
        return view('backend.product.skilledtrades.index', compact('skilledtrades', 'sort_search'));
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
        $skilledtrade = new SkilledTrade;
        $skilledtrade->name = $request->name;
        $skilledtrade->save();

       /**  $skilledtrade_translation = SkilledTradeTranslation::firstOrNew(['lang' => env('DEFAULT_LANGUAGE'), 'brand_id' => $skilledtrade->id]);
        $skilledtrade_translation->name = $request->name;
        $skilledtrade_translation->save();*/

        flash(translate('SkilledTrade has been inserted successfully'))->success();
        return redirect()->route('skilledtrades.index');

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
        $skilledtrade  = SkilledTrade::findOrFail($id);
        return view('backend.product.skilledtrades.edit', compact('skilledtrade','lang'));
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
        $skilledtrade = SkilledTrade::findOrFail($id);
        if($request->lang == env("DEFAULT_LANGUAGE")){
            $skilledtrade->name = $request->name;
        }
       
        $skilledtrade->save();

         /**$skilledtrade_translation = SkilledTradeTranslation::firstOrNew(['lang' => $request->lang, 'brand_id' => $skilledtrade->id]);
        $skilledtrade_translation->name = $request->name;
        $skilledtrade_translation->save();*/

        flash(translate('SkilledTrade has been updated successfully'))->success();
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
        $skilledtrade = SkilledTrade::findOrFail($id);
        Product::where('brand_id', $skilledtrade->id)->delete();
       /** foreach ($skilledtrade->brand_translations as $key => $skilledtrade_translation) {
            $skilledtrade_translation->delete();
        } */
        SkilledTrade::destroy($id);

        flash(translate('SkilledTrade has been deleted successfully'))->success();
        return redirect()->route('skilledtrades.index');

    }
}
