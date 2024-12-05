<?php
  
namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Mail\StudentRegistered; 
use Illuminate\Support\Facades\Mail;
use DB; 
use Illuminate\Support\Str;
use Carbon\Carbon;



class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(): View
    {
        return view('auth.login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration(): View
    {
        return view('auth.registration');
    }
      
    /**
     * 
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('exam.index')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->withError('Oppes! You have entered invalid credentials');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request): RedirectResponse
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            
            'password' => 'required|string|min:8|confirmed',
          
        ]);
           

        $data = $request->all();
        $user = $this->create($data);
            
        Auth::login($user); 

      
        return redirect()->route('frontend.Checkout')->withSuccess('Great! You have Successfully loggedin');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => $data['password'], // Hash the password
      ]);
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout(): RedirectResponse
    {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }


    public function submitForgetPasswordForm(Request $request)

    {

        $request->validate([

            'email' => 'required|email|exists:users',

        ]);



        $token = Str::random(64);



        DB::table('password_resets')->insert([

            'email' => $request->email, 

            'token' => $token, 

            'created_at' => Carbon::now()

          ]);



          Mail::send('emails.forgetPassword', ['token' => $token], function($message) use($request) {
            $message->to($request->email);
            $message->subject('Password Reset');
        });
        


        return back()->with('message', 'We have e-mailed your password reset link!');

    }

    public function showForgetPasswordForm()

    {

       return view('auth.forgetPassword');

    }

    public function showResetPasswordForm($token) { 

        return view('auth.forgetPasswordLink', ['token' => $token]);

     }



        /**

       * Write code on Method

       *

       * @return response()

       */

       public function submitResetPasswordForm(Request $request)

       {
 
           $request->validate([
 
               'email' => 'required|email|exists:users',
 
               'password' => 'required|string|min:6|confirmed',
 
               'password_confirmation' => 'required'
 
           ]);
 
   
 
           $updatePassword = DB::table('password_resets')
 
                               ->where([
 
                                 'email' => $request->email, 
 
                                 'token' => $request->token
 
                               ])
 
                               ->first();
 
   
 
           if(!$updatePassword){
 
               return back()->withInput()->with('error', 'Invalid token!');
 
           }
 
   
 
           $user = User::where('email', $request->email)
 
                       ->update(['password' => Hash::make($request->password)]);
 
  
 
           DB::table('password_resets')->where(['email'=> $request->email])->delete();
 
   
 
           return redirect('/login')->with('message', 'Your password has been changed!');
 
       }

}