<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Customer;
use App\UserRegistration;
use App\Cart;
use App\BusinessSetting;
use App\OtpConfiguration;
use App\Http\Controllers\Controller;
use App\Http\Controllers\OTPVerificationController;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Cookie;
use Session;
use Nexmo;
use Twilio\Rest\Client;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
    protected function validator_step2(array $data)
    {
        return Validator::make($data, [
            'company_name' => 'required|string|max:255',
            'street_address'=> 'required|string|max:255',
            'postbox'=> 'required|string|max:255',
            'office_email'=> 'required|email|max:255',
            'office_telephone'=> 'required|string|max:255',
            'office_fax'=> 'required|string|max:255',
            'trade_license_validity'=> 'required|string|max:255',
            'coc_validity'=> 'required|string|max:255',
            'country'=> 'required|not_in:0',
            'emirate'=> 'required|not_in:0',
            'vat_typeof_industry'=> 'required|not_in:0',
           
            'designation'=> 'required|not_in:0',
            
            'sister_companies'=> 'required|string|max:255',
            'sister_companies_type'=> 'required|not_in:0',
            'trade_ref'=> 'required|string|max:255',
            'trade_ref_tel'=> 'required|string|max:255',
            'credit_facility_required'=> 'required|not_in:0',
            'credit_period'=> 'required|not_in:0',
            'credit_terms'=>'required|not_in:0',
            'initial_credit_limit'=> 'required|string|max:255',
            'authorized_office_email'=> 'required|string|max:255',
            'authorized_tel_no'=> 'required|string|max:255',
            
            'name'=> 'required|string|max:255',
            'user_designation'=> 'required|string|max:255',
            'place'=> 'required|string|max:255',
            
            
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if (filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            $customer = new Customer;
            $customer->user_id = $user->id;
            $customer->save();
        }
        else {
            if (addon_is_activated('otp_system')){
                $user = User::create([
                    'name' => $data['name'],
                    'phone' => '+'.$data['country_code'].$data['phone'],
                    'password' => Hash::make($data['password']),
                    'verification_code' => rand(100000, 999999)
                ]);

                $customer = new Customer;
                $customer->user_id = $user->id;
                $customer->save();

                $otpController = new OTPVerificationController;
                $otpController->send_code($user);
            }
        }
        
        if(session('temp_user_id') != null){
            Cart::where('temp_user_id', session('temp_user_id'))
                    ->update([
                        'user_id' => $user->id,
                        'temp_user_id' => null
            ]);

            Session::forget('temp_user_id');
        }

        if(Cookie::has('referral_code')){
            $referral_code = Cookie::get('referral_code');
            $referred_by_user = User::where('referral_code', $referral_code)->first();
            if($referred_by_user != null){
                $user->referred_by = $referred_by_user->id;
                $user->save();
            }
        }

        return $user;
    }

    public function register(Request $request)
    {
        if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            if(User::where('email', $request->email)->first() != null){
                flash(translate('Email or Phone already exists.'));
                return back();
            }
        }
        elseif (User::where('phone', '+'.$request->country_code.$request->phone)->first() != null) {
            flash(translate('Phone already exists.'));
            return back();
        }

        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        $this->guard()->login($user);

        if($user->email != null){
            if(BusinessSetting::where('type', 'email_verification')->first()->value != 1){
                $user->email_verified_at = date('Y-m-d H:m:s');
                $user->save();
                flash(translate('Registration successfull.'))->success();
            }
            else {
                event(new Registered($user));
                flash(translate('Registration successfull. Please verify your email.'))->success();
            }
        }

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }
    
    public function register2(Request $request)
    {
        $this->validator_step2($request->all())->validate();
        $user = new UserRegistration;
        
        $user->company_name= $request->company_name;
        $user->user_id= $request->user_id;
        $user->street_address= $request->street_address;
        $user->postbox= $request->postbox;
        $user->emirate= $request->emirate;
        $user->country= $request->country;
        $user->office_email= $request->office_email;
        $user->office_telephone= $request->office_telephone;
        $user->office_fax= $request->office_fax;
 
        
        $user->trade_license= $request->trade_license;
        $user->trade_license_validity= $request->trade_license_validity;
        $user->chamber_of_commerce= $request->chamber_of_commerce;
        $user->coc_validity= $request->coc_validity;
        $user->vat_typeof_industry= $request->vat_typeof_industry;
        $user->sister_companies= $request->sister_companies;
        $user->sister_companies_type= $request->sister_companies_type;
         
        $user->trade_ref= $request->trade_ref;
        $user->trade_ref_tel= $request->trade_ref_tel;
        $user->credit_facility_required= $request->credit_facility_required;
        $user->credit_period= $request->credit_period;
        $user->initial_credit_limit= $request->initial_credit_limit;
         
        $user->credit_terms= $request->credit_terms;
        $user->authorized_person= $request->authorized_person;
        $user->designation= $request->designation;
        $user->authorized_office_email= $request->authorized_office_email;
        
         $user->name= $request->name;
        $user->user_designation= $request->user_designation;
        $user->registration_date= $request->registration_date;
        $user->place= $request->place;
         
        $user->authorized_tel_no= $request->authorized_tel_no;
        
        $user->save();
         
         flash(translate('Registration Completed.'))->success();
         return redirect()->route('dashboard');
     
    }
    
      public function updatecreditfacility(Request $request)
    {
        $this->validator_step2($request->all())->validate();
       // echo $request->id;die();
        //$user = new UserRegistration;
        $user= UserRegistration::findOrFail($request->id);
        $user->company_name= $request->company_name;
        $user->user_id= $request->user_id;
        $user->street_address= $request->street_address;
        $user->postbox= $request->postbox;
        $user->emirate= $request->emirate;
        $user->country= $request->country;
        $user->office_email= $request->office_email;
        $user->office_telephone= $request->office_telephone;
        $user->office_fax= $request->office_fax;
 
        
        $user->trade_license= $request->trade_license;
        $user->trade_license_validity= $request->trade_license_validity;
        $user->chamber_of_commerce= $request->chamber_of_commerce;
        $user->coc_validity= $request->coc_validity;
        $user->vat_typeof_industry= $request->vat_typeof_industry;
        $user->sister_companies= $request->sister_companies;
        $user->sister_companies_type= $request->sister_companies_type;
         
        $user->trade_ref= $request->trade_ref;
        $user->trade_ref_tel= $request->trade_ref_tel;
        $user->credit_facility_required= $request->credit_facility_required;
        $user->credit_period= $request->credit_period;
        $user->initial_credit_limit= $request->initial_credit_limit;
         
        $user->credit_terms= $request->credit_terms;
        $user->authorized_person= $request->authorized_person;
        $user->designation= $request->designation;
        $user->authorized_office_email= $request->authorized_office_email;
        
        $user->name= $request->name;
        $user->user_designation= $request->user_designation;
        $user->registration_date= $request->registration_date;
        $user->place= $request->place;
         
        $user->authorized_tel_no= $request->authorized_tel_no;
        
        $user->save();
         
         flash(translate('Updated Credit Form Successfully.'))->success();
         return redirect()->route('dashboard');
    }

    protected function registered(Request $request, $user)
    {
        if ($user->email == null) {
            return redirect()->route('verification');
        }elseif(session('link') != null){
            return redirect(session('link'));
        }else {
            return redirect()->route('home');
        }
    }
}
