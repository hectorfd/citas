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

    public function store(Request $request) {

        $rules = [
            'scheduled_time' => 'required',
            'type' => 'required',
            'description' => 'required',
            'doctor_id' => 'exists:users,id',
            'specialty_id' => 'exists:specialties,id'
        ];

        $messages = [
            'scheduled_time.required' => 'Debe seleccionar una hora para su cita.',
            'type.required' => 'Debe seleccionar el tipo de consulta.',
            'description.required' => 'Debe poner sus síntomas.'
        ];

        // $validator = Validator::make($request->all(), $rules, $messages);

        // $validator->after(function ($validator) use ($request, $horarioServiceInterface) {

        //     $date = $request->input('scheduled_date');
        //     $doctorId = $request->input('doctor_id');
        //     $scheduled_time = $request->input('scheduled_time');
        //     if ($date && $doctorId && $scheduled_time) {
        //         $start = new Carbon($scheduled_time);
        //     }else {
        //         return;
        //     }

        //     if (!$horarioServiceInterface->isAvailableInterval($date, $doctorId, $start)) {
        //         $validator->errors()->add(
        //             'available_time', 'La hora seleccionada ya se encuentra reservada por otro paciente.'
        //         );
        //     }
        // });

        // if ($validator->fails()) {
        //     return back()
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        $this->validate($request,$rules,$messages);

        $data = $request->only([
            'scheduled_date',
            'scheduled_time',
            'type',
            'description',
            'doctor_id',
            'specialty_id'
        ]);
        $data['patient_id'] = auth()->id();
        
        $carbonTime = Carbon::createFromFormat('g:i A', $data['scheduled_time']);
        $data['scheduled_time'] = $carbonTime->format('H:i:s');

        Appointment::create($data);

        $notification = 'La cita se ha realizado correctamente.';
        return back()->with(compact('notification'));
        // return redirect('/miscitas')->with(compact('notification'));
    }
}
