<?php

namespace App\Http\Controllers;

use App\Models\SampleModel;

class WelcomeController extends Controller
{
    public function index()
    {
        $records = SampleModel::query()
            ->orderBy('Page_SequenceNo')
            ->limit(5)
            ->get();

        return view('welcome', compact('records'));
    }
}
