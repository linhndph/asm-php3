<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        $allDM = DB::table('danhmucs')
        ->select('id', 'tenDanhMuc', 'created_at', 'updated_at')
        ->get();
        return view('clients.login',compact('allDM'));
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
             /**
             * @var User $user
             */
            // Kiểm tra vai trò người dùng
            $user = Auth::user();
            if ($user->isAdmin()) {
                return redirect()->route('admin.index');
            }

            return redirect()->route('home');
        }

        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ])->onlyInput('name');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
