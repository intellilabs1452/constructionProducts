<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Resources\V2\LocationCollection;
use App\Http\Resources\V2\ShopCollection;
use App\Models\BusinessSetting;
use App\Models\SellerLocation;
use App\User;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LocationController extends Controller
{

    public function index(Request $request)
    {
        $location_query = SellerLocation::query();
        if($request->name != "" || $request->name != null){
            $location_query->where('name', 'like', '%'.$request->name.'%');
        }
        return new LocationCollection($location_query->paginate(10));
    }
    
     public function seller($id, Request $request)
    {
        /*$sellers = DB::table('shops')
            ->join('sellers', 'shops.user_id', '=', 'sellers.user_id')
            ->select('shops.*', 'sellers.verification_status')
            ->where('sellers.verification_status', 1)
            ->where('shops.locations', 'like', '%"'.$id.'"%')
            ->get();*/
         $sellers = Shop::select('shops.*')->join('sellers', 'sellers.user_id', '=', 'shops.user_id')->where('shops.locations', 'like', '%"'.$id.'"%');
         return new ShopCollection($sellers->where('sellers.verification_status', 1)->paginate(10));
      
      // $location_name = SellerLocation::findOrFail($id);
      return $sellers;

       
    }
    public function premiumsellers(Request $request)
    {
      
      $shop_query = Shop::select('shops.*')->join('users', 'users.id', '=', 'shops.user_id');
      return new ShopCollection($shop_query->where('seller_package_id', '1')->paginate(10));
     
       
    }
 
}
