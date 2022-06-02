<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Carbon\Carbon;
//use Image;
use Intervention\Image\Facades\Image;
use Intervention\Image\Exception\NotReadableException;


//Use Image;
//use Intervention\Image\Facades\Image;
//use Intervention\Image\ImageManagerStatic as Image;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    //======================addDoctor========================================

    public function index()
    {
        return view('admin.doctor.add-doctor');
    }


    //=======================storeDoctor===================================

    public function addDoctor(Request $request)
    {
        $request->validate([
            'doctor_name' => 'required|max:255',
            'department_name' => 'required|max:255',
            'image_one' => 'required|mimes:jpg,jpeg,png,gif',

        ]);


        $imag_one = $request->file('image_one');
        $name_gen = hexdec(uniqid()) . '.' . $imag_one->getClientOriginalExtension();
        Image::make($imag_one)->resize(340, 340)->save('fontend/img/doctors/upload/' . $name_gen);
        $img_url = 'fontend/img/doctors/upload/' . $name_gen;






        Doctor::create([

            'doctor_name' => $request->doctor_name,
            'department_name' => $request->department_name,
            'doctor_slug' => strtolower(str_replace(' ', '-', $request->doctor_name)),
            'image_one' => $img_url,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back()->with('success', 'Doctor Added');
    }


    //============================Manage Doctor===================================

    public function manageDoctor()
    {
        $doctors = Doctor::orderBy('id', 'DESC')->get();
        return view('admin.doctor.manage-doctor', compact('doctors'));
    }

    //============================edit doctor======================================

    public function editDoctor($doctor_id)
    {
        $doctor = Doctor::findOrFail($doctor_id)->first();
        return view('admin.doctor.edit-doctor', compact('doctor'));
    }



    public function delete($id)
    {
        $data = Doctor::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function active($id)
    {
        $doctor=Doctor::find($id);
        $doctor->status='Active';
        $doctor->save();
        return redirect()->back();
    }
}
