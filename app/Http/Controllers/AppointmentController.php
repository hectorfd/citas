<?php

namespace App\Http\Controllers;

use App\Interfaces\HorarioServiceInterface;
use App\Models\Appointment;
use App\Models\CancelledAppointment;
use App\Models\Specialty;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    public function create() {
        $specialties = Specialty::all();
        return view('appointments.create', compact('specialties'));
    }
}
