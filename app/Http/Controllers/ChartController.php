<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ChartController;

class ChartController extends Controller
{
    public function DonutChart(){
        $students = DB::table('users')
            ->select('classe', DB::raw('COUNT(id) as count'))
            ->where('id', '<>', 1) // exclude user with id = 1
            ->groupBy('classe')
            ->get();
        return view('admin.chart', compact('students'));
    }
}