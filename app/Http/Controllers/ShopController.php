<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Shop;
use App\SellerPermission;
use App\User;
use App\Seller;
use App\BusinessSetting;
use Auth;
use Hash;
use App\Notifications\EmailVerificationNotification;
use Mail;
use App\Mail\SellerMailManager;
class ShopController extends Controller
{

    public function __construct()
    {
        $this->middleware('user', ['only' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop = Auth::user()->shop;
        $package_id = Auth::user()->seller_package_id;
        if($package_id>0)
        {
            $locations  = SellerPermission::where('package_id', $package_id)->first();
        }
        else
        {
            $locations=array();
        }
        return view('frontend.user.seller.shop', compact('shop','locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createform()
    {
        if(Auth::check() && Auth::user()->user_type == 'admin'){
            flash(translate('Admin can not be a seller'))->error();
            return back();
        }
        elseif(Auth::check())
        {
            $shop=Shop::where('user_id', Auth::user()->id)->first();
            if($shop)
            {
                flash(translate('Shop already created'))->error();
                return redirect()->route('dashboard');

                
            }
            else
            {
            return view('frontend.seller_form');
            }
        }
        else
        {
          flash(translate('Please Login First'))->error();
          return view('frontend.user_login');
        
        }
     
    }
    public function create()
    {
      
            return view('frontend.user.seller.info');
     
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = null;
        if(!Auth::check()){
            if(User::where('email', $request->email)->first() != null){
                flash(translate('Email already exists!'))->error();
                return back();
            }
            if($request->password == $request->password_confirmation){
                $user = new User;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->user_type = "seller";
                $user->password = Hash::make($request->password);
                $user->save();
            }
            else{
                flash(translate('Sorry! Password did not match.'))->error();
                return back();
            }
        }
        else{
            $user = Auth::user();
            if($user->customer != null){
                $user->customer->delete();
            }
            $user->user_type = "seller";
            $user->save();
        }

        $seller = new Seller;
        $seller->user_id = $user->id;
        $seller->save();

        if(Shop::where('user_id', $user->id)->first() == null){
            $shop = new Shop;
            $shop->user_id = $user->id;
            $shop->name = $request->name;
            $shop->address = $request->address;
            $shop->slug = preg_replace('/\s+/', '-', $request->name).'-'.$shop->id;
            if($request->has('location') && count($request->location) > 0){
            $shop->locations = json_encode($request->location);
            }
            else{
            $linked = array();
            $shop->locations = json_encode($linked);
            }
            if($shop->save()){
                auth()->login($user, false);
                if(BusinessSetting::where('type', 'email_verification')->first()->value != 1){
                    $user->email_verified_at = date('Y-m-d H:m:s');
                    $user->save();
                }
                else {
                   // $user->notify(new EmailVerificationNotification());
                }

                flash(translate('Your Shop has been created successfully!Please select a package to continue. Only after selecting a package will you be able to sell and manage your products through Construction Solutions'))->success();
                return redirect()->route('seller_packages_list_show');
            }
            else{
                $seller->delete();
                $user->user_type == 'customer';
                $user->save();
            }
        }

        flash(translate('Sorry! Something went wrong.'))->error();
        return back();
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
    public function edit($id)
    {
        //
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
        $shop = Shop::find($id);

        if($request->has('name') && $request->has('address')){
            $shop->name = $request->name;
            if ($request->has('shipping_cost')) {
                $shop->shipping_cost = $request->shipping_cost;
            }
            if($request->has('location') && count($request->location) > 0){
               // echo count($request->location);die;
            $shop->locations = json_encode($request->location);
            }
            else{
            $linked = array();
            $shop->locations = json_encode($linked);
            }
            $shop->address = $request->address;
            $shop->phone = $request->phone;
            $shop->slug = preg_replace('/\s+/', '-', $request->name).'-'.$shop->id;

            $shop->meta_title = $request->meta_title;
            $shop->meta_description = $request->meta_description;
            $shop->logo = $request->logo;

            if ($request->has('pick_up_point_id')) {
                $shop->pick_up_point_id = json_encode($request->pick_up_point_id);
            }
            else {
                $shop->pick_up_point_id = json_encode(array());
            }
        }

        elseif($request->has('facebook') || $request->has('google') || $request->has('twitter') || $request->has('youtube') || $request->has('instagram')){
            $shop->facebook = $request->facebook;
            $shop->google = $request->google;
            $shop->twitter = $request->twitter;
            $shop->youtube = $request->youtube;
        }

        else{
            $shop->sliders = $request->sliders;
        }

        if($shop->save()){
            flash(translate('Your Shop has been updated successfully!'))->success();
            return back();
        }

        flash(translate('Sorry! Something went wrong.'))->error();
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
        //
    }

    public function verify_form(Request $request)
    {
        if(Auth::user()->seller->verification_info != null){
            $shop = Auth::user()->shop;
            return view('frontend.user.seller.verify_form', compact('shop'));
        }
        else {
            flash(translate('Sorry! You have sent verification request already.'))->error();
            return back();
        }
    }

    public function verify_form_store(Request $request)
    {
        $data = array();
        $i = 0;
        foreach (json_decode(BusinessSetting::where('type', 'verification_form')->first()->value) as $key => $element) {
            $item = array();
            if ($element->type == 'text') {
                $item['type'] = 'text';
                $item['label'] = $element->label;
                $item['value'] = $request['element_'.$i];
            }
            elseif ($element->type == 'select' || $element->type == 'radio') {
                $item['type'] = 'select';
                $item['label'] = $element->label;
                $item['value'] = $request['element_'.$i];
            }
            elseif ($element->type == 'multi_select') {
                $item['type'] = 'multi_select';
                $item['label'] = $element->label;
                $item['value'] = json_encode($request['element_'.$i]);
            }
            elseif ($element->type == 'file') {
                if($request['element_'.$i]!='')
                {
                $item['type'] = 'file';
                $item['label'] = $element->label;
                $item['value'] = $request['element_'.$i]->store('uploads/verification_form');
                }
                else
                {
                     $item['type'] = 'file';
                $item['label'] = '';
                $item['value'] = '';
                    
                }
            }
            array_push($data, $item);
            $i++;
        }
        $seller = Auth::user()->seller;
        $seller->verification_info = json_encode($data);
        $shop = Auth::user()->shop;
        if($seller->save()){
             $array=array();
        $array['view']    = 'emails.sellerverify';
        $array['subject'] = 'Seller Account Verification';
        $array['from']    = env('MAIL_FROM_ADDRESS');
        $array['user']    = $shop->name;
        $array['content']= 'Your seller account has been submitted for admin approval. Once approved, you can start managing your seller account.';
       // print_r($array);die;
        try {
            Mail::to(Auth::user()->email)->queue(new SellerMailManager($array));

        flash(translate('Your shop verification request has been submitted successfully!'))->success();
            return redirect()->route('dashboard');

        } catch (\Exception $e) {
            // return $e->getMessage();
            $response['status'] = 0;
            $response['message'] = $e->getMessage();
        }

          
        }

        flash(translate('Sorry! Something went wrong.'))->error();
        return back();
    }
}
