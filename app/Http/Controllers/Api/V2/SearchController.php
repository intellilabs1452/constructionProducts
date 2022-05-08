<?php

namespace App\Http\Controllers\Api\V2;

use Illuminate\Http\Request;
use App\Search;
use App\Product;
use App\Category;
use App\FlashDeal;
use App\Brand;
use App\Models\SellerLocation;
use App\Color;
use App\Shop;
use App\Attribute;
use App\AttributeCategory;
use App\Utility\CategoryUtility;

class SearchController extends Controller
{
   

    //Suggestional Search
    public function ajax_search(Request $request)
    {
        $resp=array(array('id' => 1, "query"=>"check1",
            'type' => 'search',
            'type_string'=>'1234','count'=>3),
            array('id' => 2, "query"=>"check2",
            'type' => 'search',
            'type_string'=>'1234','count'=>2)); return response()->json($resp);die;
        return response()->json([
            'id' => '2',
            'type' => 'Category',
            'type_string'=>'4321','count'=>'3'
        ]);
        die;
        $keywords = array();
        $products = Product::where('published', 1)->where('tags', 'like', '%'.$request->query_key.'%')->get();
        foreach ($products as $key => $product) {
            foreach (explode(',',$product->tags) as $key => $tag) {
                if(stripos($tag, $request->search) !== false){
                    if(sizeof($keywords) > 5){
                        break;
                    }
                    else{
                        if(!in_array(strtolower($tag), $keywords)){
                            array_push($keywords, strtolower($tag));
                        }
                    }
                }
            }
        }

        $products = filter_products(Product::query());

        $products = $products->where('published', 1)
                        ->where(function ($q) use($request) {
                            $q->where('name', 'like', '%'.$request->search.'%')
                            ->orWhere('tags', 'like', '%'.$request->search.'%');
                        })
                    ->get();

        $categories = Category::where('name', 'like', '%'.$request->search.'%')->get()->take(3);

        $shops = Shop::whereIn('user_id', verified_sellers_id())->where('name', 'like', '%'.$request->search.'%')->get()->take(3);

        if(sizeof($keywords)>0 || sizeof($categories)>0 || sizeof($products)>0 || sizeof($shops) >0){
            return view('frontend.partials.search_content', compact('products', 'categories', 'keywords', 'shops'));
        }
        return '0';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $search = Search::where('query', $request->keyword)->first();
        if($search != null){
            $search->count = $search->count + 1;
            $search->save();
        }
        else{
            $search = new Search;
            $search->query = $request->keyword;
            $search->save();
        }
    }
}
