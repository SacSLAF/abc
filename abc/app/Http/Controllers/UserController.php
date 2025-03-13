<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        User::create($request->all());
        return redirect()->route('user.index')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect()->route('user.index')->with('success', 'User deleted successfully.');
    }

    public function login()
    {
        return view('user.login');
    }

    public function LoginAction(Request $request)
    {
        try {
            $rules = array(
                'email' => 'required',
                'password' => 'required',
            );

            $customMessages = [
                'email.required' => 'Email cannot be empty',
                'password.required' => 'Password cannot be empty',
            ];

            $validator = Validator::make($request->all(), $rules, $customMessages);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput($request->all());
            } else {
                if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                    $request->session()->regenerate();

                    // $role = Auth::user()->role;
                    // Redirect based on role
                    // return match ($role) {
                    //     'player' => redirect()->route('player.dashboard')->with('success', 'Login successful'),
                    //     'manager' => redirect()->route('manager.dashboard')->with('success', 'Login successful'),
                    //     'coach' => redirect()->route('coach.dashboard')->with('success', 'Login successful'),
                    //     default => redirect()->route('home')->with('success', 'Login successful'),
                    // };
                    return redirect()->intended('/user')->with('success', 'Login successful');
                }
                return back()->with('error', "Wrong username or password!");
            }
        } catch (\Throwable $th) {
            $th->getMessage();
        }
    }

    public function register()
    {
        return view('user.register');
    }

    public function RegisterAction(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed',
                'role' => 'required|in:player,manager,coach',
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => $request->role,
            ]);

            return redirect()->route('user.index')->with('success', 'User registered successfully.');
        } catch (\Throwable $th) {
            return redirect()->route('register')->with('error', 'Registration failed: ' . $th->getMessage());
        }
    }

    public function logoutAction()
    {
        Auth::logout();
        return redirect()->route('login.action')->with('success', 'Logout successful');
    }

    // public function playerDashboard()
    // {
    //     return view('player.dashboard');
    // }

    // public function managerDashboard()
    // {
    //     return view('manager.dashboard');
    // }

    // public function coachDashboard()
    // {
    //     return view('coach.dashboard');
    // }
}
