<?php

namespace App\Http\Controllers;

use App\Utility\PayfastUtility;
use Illuminate\Http\Request;
use App\SellerPackage;
use App\SellerPermission;
use App\SellerPackageTranslation;
use App\SellerPackagePayment;
use App\Wallet;
use App\BusinessSetting;
use App\Reference;
use Auth;
use Session;
use App\User;
use App\Http\Controllers\PublicSslCommerzPaymentController;
use App\Http\Controllers\InstamojoController;
use App\Http\Controllers\RazorpayController;
use App\Http\Controllers\VoguePayController;
use App\Utility\PayhereUtility;
use Mail;
use App\Mail\SellerMailManager;
class SellerPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seller_packages = SellerPackage::all();
        return view('backend.seller.seller_packages.index', compact('seller_packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.seller.seller_packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seller_package = new SellerPackage;
        $seller_package->name = $request->name;
        $seller_package->amount = $request->amount;
        $seller_package->logo = $request->logo;

        $seller_package->save();
        $id=$seller_package->id;
        $seller_permission = new SellerPermission;
        $seller_permission->package_id=$id;
        $perm = array();
        $seller_permission->permissions = json_encode($perm);
        $seller_permission->save();
      //  $seller_package_translation = SellerPackageTranslation::firstOrNew(['lang' => env('DEFAULT_LANGUAGE'), 'customer_package_id' => $seller_package->id]);
      //  $seller_package_translation->name = $request->name;
      //  $seller_package_translation->save();


        flash(translate('Package has been inserted successfully'))->success();
        return redirect()->route('seller_packages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $lang = $request->lang;
        $seller_package = SellerPackage::findOrFail($id);
        return view('backend.seller.seller_packages.edit', compact('seller_package', 'lang'));
    }
    
     public function edit_permission(Request $request, $id)
    {
        $lang = $request->lang;
       // $permission = SellerPermission::findOrFail($id);
        $lang = $request->lang;
        $package_name   = SellerPackage::where('id', $id)->first();
          $permission   = SellerPermission::where('package_id', $id)->first();
        return view('backend.seller.sellerpermission.edit', compact('permission','package_name','lang'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update_permission(Request $request,$id)
    {
      $permission = SellerPermission::findOrFail($id);
      //if($request->has('permissions')){
            if($request->lang == env("DEFAULT_LANGUAGE")){
                $role->name = $request->name;
            }
            $permission->permissions = json_encode($request->permissions);
            $permission->locations=$request->locations;
            $permission->segments=$request->segments;
            $permission->speciality=$request->speciality;
            $permission->categories=$request->categories;
            $permission->save();

           

            flash(translate('Seller Permission has been updated successfully'))->success();
           return back();
       // }
       // flash(translate('Something went wrong'))->error();
       // return back();
    }
    
    
    public function update(Request $request, $id)
    {
        $seller_package = SellerPackage::findOrFail($id);
        if ($request->lang == env("DEFAULT_LANGUAGE")) {
            $seller_package->name = $request->name;
        }
        $seller_package->amount = $request->amount;
       // $seller_package->product_upload = $request->product_upload;
        $seller_package->logo = $request->logo;

        $seller_package->save();

       // $seller_package_translation = SellerPackageTranslation::firstOrNew(['lang' => $request->lang, 'customer_package_id' => $seller_package->id]);
       // $seller_package_translation->name = $request->name;
       // $seller_package_translation->save();

        flash(translate('Package has been updated successfully'))->success();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seller_package = SellerPackage::findOrFail($id);
        //foreach ($seller_package->customer_package_translations as $key => $seller_package_translation) {
          //  $seller_package_translation->delete();
       // }
        SellerPackage::destroy($id);

        flash(translate('Package has been deleted successfully'))->success();
        return redirect()->route('seller_packages.index');
    }

     public function purchase_package(Request $request)
    {
        $data['seller_package_id'] = $request->seller_package_id;
        $data['payment_method'] = $request->payment_option;
        $request->session()->put('payment_type', 'seller_package_payment');
        $request->session()->put('payment_data', $data);

        $seller_package = SellerPackage::findOrFail(Session::get('payment_data')['seller_package_id']);

        if ($seller_package->amount == 0) {
            $user = User::findOrFail(Auth::user()->id);
            if ($user->seller_package_id != $seller_package->id) {
                return $this->purchase_payment_done(Session::get('payment_data'), null);
            } else {
                flash(translate('You can not purchase this package anymore.'))->warning();
                return back();
            }
        }
        
        if ($request->payment_option == 'offline') {
            $user = User::findOrFail(Auth::user()->id);
            if ($user->seller_package_id != $seller_package->id) {
            $user->offline_payment=1;
            $user->payment_done=0;
            $user->save();
                return $this->purchase_payment_done(Session::get('payment_data'), null,'offline');
            } else {
                flash(translate('You can not purchase this package anymore.'))->warning();
                return back();
            }
        }
       

        elseif ($request->payment_option == 'paypal') {
            $paypal = new PaypalController;
            return $paypal->getCheckout();
        } elseif ($request->payment_option == 'stripe') {
            $stripe = new StripePaymentController;
            return $stripe->stripe();
        } elseif ($request->payment_option == 'sslcommerz_payment') {
            $sslcommerz = new PublicSslCommerzPaymentController;
            return $sslcommerz->index($request);
        } elseif ($request->payment_option == 'instamojo') {
            $instamojo = new InstamojoController;
            return $instamojo->pay($request);
        } elseif ($request->payment_option == 'razorpay') {
            $user->offline_payment=0;
            $user->payment_done=1;
            $user->save();
            $razorpay = new RazorpayController;
            return $razorpay->payWithRazorpay($request);
        } elseif ($request->payment_option == 'paystack') {
            $paystack = new PaystackController;
            return $paystack->redirectToGateway($request);
        } elseif ($request->payment_option == 'voguepay') {
            $voguePay = new VoguePayController;
            return $voguePay->customer_showForm();
        } elseif ($request->payment_option == 'payhere') {
            $order_id = rand(100000, 999999);
            $user_id = Auth::user()->id;
            $package_id = $request->seller_package_id;
            $amount = $seller_package->amount;
            $first_name = Auth::user()->name;
            $last_name = 'X';
            $phone = '123456789';
            $email = Auth::user()->email;
            $address = 'dummy address';
            $city = 'Colombo';

            return PayhereUtility::create_customer_package_form($user_id, $package_id, $order_id, $amount, $first_name, $last_name, $phone, $email, $address, $city);
        } elseif ($request->payment_option == 'payfast') {
            $user_id = Auth::user()->id;
            $package_id = $request->seller_package_id;
            $amount = $seller_package->amount;

            return PayfastUtility::create_customer_package_form($user_id, $package_id, $amount);
        } elseif ($request->payment_option == 'ngenius') {
            $ngenius = new NgeniusController();
            return $ngenius->pay();
        } else if ($request->payment_option == 'iyzico') {
            $iyzico = new IyzicoController();
            return $iyzico->pay();
        } elseif ($request->payment_option == 'proxypay') {
            $proxy = new ProxypayController;
            return $proxy->create_reference($request);
        } else if ($request->payment_option == 'nagad') {
            $nagad = new NagadController();
            return $nagad->getSession();
        } else if ($request->payment_option == 'bkash') {
            $bkash = new BkashController();
            return $bkash->pay();
        }
        else if ($request->payment_option == 'mpesa') {
            $mpesa = new MpesaController();
            return $mpesa->pay();
        } else if ($request->payment_option == 'flutterwave') {
            $flutterwave = new FlutterwaveController();
            return $flutterwave->pay();
        }
    }
    
    
     public function purchase_payment_done($payment_data, $payment,$offline=null)
     {
        $user = User::findOrFail(Auth::user()->id);
        $user->seller_package_id = $payment_data['seller_package_id'];
        $customer_package = SellerPackage::findOrFail($payment_data['seller_package_id']);
        if($user->save()){
          
        $pname = SellerPackage::findOrFail($payment_data['seller_package_id']);
        $array['view'] = 'emails.sellerverify';
        $array['subject'] = 'Package Purchase Successful';
        $array['from']    = env('MAIL_FROM_ADDRESS');
        $array['user']    = Auth::user()->name;
        $futureDate=date('Y-M-d', strtotime('+1 year'));
        if($offline!='')
        {
             $array['content']    = 'Thank you for choosing Construction Products as your online platform for selling your products. You have selected the '.$pname->name.' package.Your package verification is under approval stage by the admin. Once approved after the payment has been made, you will receive a notification with all details.';
        }
        else
        {
        $array['content']    = 'Thank you for choosing Construction Products as your online platform for selling your products. You have selected the '.$pname->name.' package.You package would get expired on '.$futureDate.'. We would notify you beforehand in order to renew or choose another package or your choice. You can also cancel your subscription anytime and restart them later.We wish you all the best';
        }
       // print_r($array);die;
        try {
            Mail::to($user->email)->queue(new SellerMailManager($array));

        } catch (\Exception $e) {
            // return $e->getMessage();
            $response['status'] = 0;
            $response['message'] = $e->getMessage();
        }
    }

        flash(translate('Package purchasing successful'))->success();
        return redirect()->route('dashboard');
    }
}
