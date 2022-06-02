<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $data = Appointment::latest()->get();
        return view('admin.appoint.index', compact('data'));
    }

    public function approve($id)
    {
        $data = Appointment::find($id);
        $data->status = 'Approve';
        $data->save();
        return redirect()->back();
    }

    public function delete($id){
        $data=Appointment::find($id);
        $data->delete();
        return redirect()->back();
    }
}
