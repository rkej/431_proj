<?php

   namespace App\Http\Controllers\Auth;

   use App\Http\Controllers\Controller;
   use Illuminate\Foundation\Auth\AuthenticatesUsers;
   use App\Student;
   use Illuminate\Http\Request;
   use Auth;

   class LoginController extends Controller
   {

       public function __construct()
       {
           $this->middleware('guest')->except('logout');
           $this->middleware('guest:student')->except('logout');
}
public function showStudentLoginForm()
    {
        return view('auth.student.login', ['url' => 'student']);
    }

    public function studentLogin(Request $request)
    {
        $this->validate($request, [
            'student_email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('student')->attempt(['student_email' => $request->student_email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/student/dashboard');
        }
        return back()->withInput($request->only('student_email', 'remember'));
    }
