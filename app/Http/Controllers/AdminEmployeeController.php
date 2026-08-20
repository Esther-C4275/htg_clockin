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
    
        $employeesQuery = User::query()->where('is_admin', false);
    
        if ($first_name) {
            $employeesQuery->where('first_name', 'LIKE', "%{$first_name}%");
        }
    
        if ($last_name) {
            $employeesQuery->where('last_name', 'LIKE', "%{$last_name}%");   
        }
        
      
        $employees = $employeesQuery->latest()->paginate(10)->appends($request->query());
    
       
        $todaysRecords = HtgModel::query()->where('date', today()->format('Y-m-d'))->whereIn('user_id', $employees->pluck('id'))->get();
    
        
        foreach ($employees as $employee) {
            $attendanceToday = $todaysRecords->where('user_id', $employee->id)->first();
            $employee->row_status = $attendanceToday ? 'Active' : 'Absent';
        }
    
        return view('pages.admin-employee', compact('employees', 'adminUser'));
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
