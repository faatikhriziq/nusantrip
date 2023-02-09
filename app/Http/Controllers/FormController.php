<?php

namespace App\Http\Controllers;

use App\Models\Regency;
use App\Models\Village;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form()
    {
        $provinces = Province::all();

        return view('form',compact('provinces'));
    }

    public function getkabupaten(Request $request){
        $id_provinsi = $request->id_provinsi;
        $kabupatens = Regency::where('province_id',$id_provinsi)->get();

        foreach ($kabupatens as $kabupaten) {
            echo "<option value='$kabupaten->id'>$kabupaten->name</option>";
        }
    }
}
