<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class IncreassePointsController extends Controller
{
    public function index(){

        $equipe = Equipe::all();

        return view("points.index",compact("equipe"));
    }


    public function validatePoints(Request $request){
    $equipeId = $request->input('equipe_id');
    
    $equipe = Equipe::find($equipeId);
    
    $checkboxValue = $request->input('checkbox');
    
    $points = $request->input('number');
    
    if ($checkboxValue === 'AV') {
        $equipe->score += $points;
    } else if ($checkboxValue === 'AR') {
        $equipe->score -= $points;
    }
    
    $equipe->save();
    
    return redirect()->route('equipe.index')->with('success', 'Points added successfully.');
}

}
