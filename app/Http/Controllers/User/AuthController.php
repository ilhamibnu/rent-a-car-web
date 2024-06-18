<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function index()
    {
        return view('landing.auth.login');
    }

    public function profil()
    {
        return view('landing.pages.profil');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password tidak boleh kosong'
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect('/')->with('login', 'Login berhasil');
        } else {
            return back()->with('gagallogin', 'Login gagal');
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'repassword' => 'required|same:password'
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password tidak boleh kosong',
            'repassword.required' => 'Konfirmasi password tidak boleh kosong',
            'repassword.same' => 'Konfirmasi password tidak sama'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->google = '0';
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/user/login')->with('register', 'Register berhasil');
    }

    public function updateprofil(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . auth()->user()->id,
            'password' => 'nullable',
            'repassword' => 'nullable|same:password'
        ], [
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password tidak boleh kosong',
            'repassword.required' => 'Konfirmasi password tidak boleh kosong',
            'repassword.same' => 'Konfirmasi password tidak sama'
        ]);

        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        return back()->with('updateprofil', 'Profil berhasil diupdate');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('logout', 'Logout berhasil');
    }

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function GoogleCallback()
    {
        try {

            $data = Socialite::driver('google')->user();

            $cekuser = User::where('email', $data->email)->first();

            if ($cekuser) {
                Auth::login($cekuser);
                if (Auth::user()->role == 'admin') {
                    return redirect('/dashboard')->with('login', 'Anda berhasil login');
                } else {
                    return redirect('/')->with('login', 'Anda berhasil login');
                }
            } else {
                $newuser = new User;
                $newuser->name = $data->name;
                $newuser->email = $data->email;
                $newuser->google = '1';
                $newuser->password = bcrypt('fgyqwcbrq3bgbw7rq3bbubhjwfvb3q8yvbcbruq3b7587gucrxiuqr4cb');
                $newuser->save();

                Auth::login($newuser);
                if (Auth::user()->role == 'admin') {
                    return redirect('/dashboard')->with('login', 'Anda berhasil login');
                } else {
                    return redirect('/')->with('login', 'Anda berhasil login');
                }
            }
        } catch (Exception $e) {
            return redirect('/loginuser')->with('loginerror', 'Login Gagal');
        }
    }


    public function linkresetpassword()
    {
        return view('landing.auth.reset-password');
    }

    public function changepassword($code)
    {
        $user = User::where('code', $code)->where('status_code', 'aktif')->where('role', 'user')->first();
        if ($user) {
            return view('landing.auth.change-password', [
                'user' => $user,
            ]);
        } else {
            return redirect('/')->with('linkkadaluarsa', 'Reset Password Gagal');
        }
    }

    public function changepasswordpost(Request $request)
    {
        $user = User::where('code', $request->code)->where('status_code', 'aktif')->where('role', 'user')->first();
        $request->validate([
            'password' => 'required',
            'repassword' => 'required|same:password',
        ], [
            'password.required' => 'Password tidak boleh kosong',
            'repassword.required' => 'Re-Password tidak boleh kosong',
            'repassword.same' => 'Re-Password tidak sama dengan Password',
        ]);

        $user->password = bcrypt($request->password);
        $user->code = null;
        $user->status_code = "tidak_aktif";
        $user->save();

        return redirect('/')->with('resetpasswordberhasil', 'Reset Password Berhasil');
    }

    public function sendlinkresetpassword(Request $request)
    {
        $request->validate([
            'email' => ['required'],
        ], [
            'email.required' => 'Email tidak boleh kosong',
        ]);

        $user = User::where('email', $request->email)->where('role', 'user')->first();

        if ($user) {
            if ($user->google == '1') {
                return redirect()->back()->with('emailgoogle', 'Email ini terdaftar dengan google');
            }
            try {
                $mail = new PHPMailer(true);

                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'monza.id.domainesia.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'rentcar@kaliansenang.my.id';                     //SMTP username
                $mail->Password   = 'Gituajamarah#23';                               //SMTP password
                $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
                $mail->Port       = 465;
                //Recipients
                $mail->setFrom('rentcar@kaliansenang.my.id', 'Rent A Car Admin');
                $mail->addAddress($request->email);     //Add a recipient

                $Code = substr((str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ")), 0, 10);

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Password Reset';
                $mail->Body    = 'To reset your password, please click the link below:<br><br><a href="https://msib-6-sewa-mobil-dan-motor-04.educalab.id/user/change-password/' . $Code . '">Reset Password</a>';
                $updatecode = User::where('email', '=', $request->email)->first();
                $updatecode->code = $Code;
                $updatecode->status_code = 'aktif';
                $updatecode->save();

                $mail->send();

                return redirect('/user/reset-password')->with('linkresetdikirim', 'Link reset password telah dikirim ke email');
            } catch (Exception $e) {
            }
        } else {
            return redirect()->back()->with('emailtidakditemukan', 'Email tidak ditemukan');
        }
    }
}
