<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View|Factory
    {
        $doctors = Doctor::when($request->input('name'), function ($query, $name) {
            return $query->where('doctor_name', 'like', '%' . $name . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('pages.doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View|Factory
    {
        return view('pages.doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'specialist' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'sip' => 'required'
        ]);

        $doctor = new Doctor();
        $doctor->doctor_name = $request->name;
        $doctor->doctor_specialist = $request->specialist;
        $doctor->doctor_phone = $request->phone;
        $doctor->doctor_email = $request->email;
        $doctor->sip = $request->sip;
        $doctor->save();

        return to_route('doctors.index')->with('success', "Doctor {$doctor->name} created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor): View|Factory
    {
        return view('pages.doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor): View
    {
        return view('pages.doctors.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'specialist' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'sip' => 'required'
        ]);

        $doctor->doctor_name = $request->name;
        $doctor->doctor_specialist = $request->specialist;
        $doctor->doctor_phone = $request->phone;
        $doctor->doctor_email = $request->email;
        $doctor->sip = $request->sip;
        $doctor->save();

        return to_route('doctors.index')->with('success', "Dcotor {$doctor->name} updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor): RedirectResponse
    {
        $name = $doctor->doctor_name;
        $doctor->delete();

        return to_route('doctors.index')->with('success', "Doctor {$name} deleted successfully");
    }
}
