<?php

namespace App\Http\Controllers;

use App\Constants\DefaultPassword;
use App\Models\HtgModel;
use App\Models\User;
use App\Notifications\EmployeeLoginDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\View\View;

class AdminEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $adminUser = Auth::user();
        
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');

        $users = User::query()->where('is_admin', false);


        if ($first_name) {
            $users->where('first_name', 'LIKE', "%$first_name%");   //the double string is just to avoid typing '%' . '$query'
        }

        if ($last_name) {
            $users->where('last_name', 'LIKE', "%$last_name%");   
        }
        
        $users = $users->latest()->get();
        $employees = User::query()->where('is_admin', false)->latest()->get();
        $todaysRecords = HtgModel::query()->where('date', today()->format('Y-m-d'))->get();

        foreach($employees as $employee){
            $attendanceToday = $todaysRecords->where('user_id', $employee->id)->first();
            if($attendanceToday){
                $employee->row_status = 'Active';
             }else{
                $employee->row_status = 'Absent';
             }
        }



        return view('pages.admin-employee', compact('users', 'adminUser','employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $adminUser = Auth::user();
        return view('pages.new-employee', compact('adminUser'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $password = DefaultPassword::Password2->value;
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|string|email|max:50',
            'department' => 'required|string|max:100',
            'phone' => 'required|string|max:100',
            'company' => 'required|string|max:50',
            'position' => 'nullable|string|max:50',
            'date' => 'required|string|max:100'
        ]);

        

        $user = User::create([
            ...$validatedData,
            'password' => Hash::make($password),
            'is_admin' => false
        ]);

        // $setupUrl = URL::temporarySignedRoute(
        //     'password.setup', 
        //     now()->addHours(24), 
        //     ['id' => $user->id]
        // );
        $user->notify(new EmployeeLoginDetails($user, $password));

        return redirect()->route('admin-employee.index')->with('success', 'New employee created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

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
        //
    }
}
