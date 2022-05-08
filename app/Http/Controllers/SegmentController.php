<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Segment;
use App\SegmentTranslation;
use App\Product;
use Illuminate\Support\Str;
use App\Category;

class SegmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort_search =null;
        $segments = Segment::orderBy('name', 'asc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $segments = $segments->where('name', 'like', '%'.$sort_search.'%');
        }
        $segments = $segments->paginate(15);
        
        $categories = Category::where('parent_id', 0)
            ->where('digital', 0)
            ->get();
        return view('backend.product.segments.index', compact('segments', 'sort_search','categories'));
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
        $segment = new Segment;
        $segment->name = $request->name;
        $segment->category_id = $request->category_id;
        $segment->save();

       /**  $segment_translation = SegmentTranslation::firstOrNew(['lang' => env('DEFAULT_LANGUAGE'), 'brand_id' => $segment->id]);
        $segment_translation->name = $request->name;
        $segment_translation->save();*/

        flash(translate('Segment has been inserted successfully'))->success();
        return redirect()->route('segments.index');

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
        $segment  = Segment::findOrFail($id);
          $categories = Category::where('parent_id', 0)
            ->where('digital', 0)
            ->get();
        return view('backend.product.segments.edit', compact('segment','lang','categories'));
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
        $segment = Segment::findOrFail($id);
        if($request->lang == env("DEFAULT_LANGUAGE")){
            $segment->name = $request->name;
            $segment->category_id = $request->category_id;
        }
       
        $segment->save();

         /**$segment_translation = SegmentTranslation::firstOrNew(['lang' => $request->lang, 'brand_id' => $segment->id]);
        $segment_translation->name = $request->name;
        $segment_translation->save();*/

        flash(translate('Segment has been updated successfully'))->success();
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
        $segment = Segment::findOrFail($id);
        Product::where('brand_id', $segment->id)->delete();
       /** foreach ($segment->brand_translations as $key => $segment_translation) {
            $segment_translation->delete();
        } */
        Segment::destroy($id);

        flash(translate('Segment has been deleted successfully'))->success();
        return redirect()->route('segments.index');

    }
}
