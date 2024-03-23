<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\HorarioServiceInterface;
use App\Models\Horarios;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HorarioController extends Controller
{
    public function hours(Request $request, HorarioServiceInterface $horarioServiceInterface){

        $rules = [
                 'date' => 'required|date_format:"Y-m-d"',
                 'doctor_id' => 'required|exists:users,id'
            ];

        $this->validate($request, $rules);
        $date = $request->input('date');
        
        $doctorId = $request->input( 'doctor_id' );

        


        // $rules = [
        //     'date' => 'required|date_format:"Y-m-d"',
        //     'doctor_id' => 'required|exists:users,id'
        // ];
        // $this->validate($request, $rules);

        // $date = $request->input('date');
        // $doctorId = $request->input('doctor_id');
        
        return $horarioServiceInterface->getAvailableIntervals($date, $doctorId);        
    }

   
}
