<?php
namespace App\Http\Controllers;

use App\Models\SampleModel;

class SampleController extends Controller
{
    public function index()
    {
        $records = SampleModel::query()
            ->orderBy('Page_SequenceNo')
            ->limit(5)
            ->get();

        return view('samples.index', compact('records'));
    }
}
