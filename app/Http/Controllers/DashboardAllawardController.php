<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;

class DashboardAllawardController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.allaward.index', [
            'title' => 'PMII Cabang Ciputat | All Achievments',
            'awards' => Award::all()
        ]);
    }
    public function show(Award $award)
    {
        return view('dashboard.allaward.detail', [
            'title' => 'PMII Cabang Ciputat | Detail Award',
            'award' => $award
        ]);
    }
    public function destroy(Award $award)
    {
        Award::destroy($award->id);
        return redirect('/allaward/award')->with('message', '<div class="alert alert-success" role="alert">
        Your award has been deleted
      </div>');
    }
}
