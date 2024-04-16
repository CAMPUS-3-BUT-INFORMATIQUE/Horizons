<?php

namespace App\Http\Controllers;

use Barryvdh\Debugbar\Controllers\BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\View\View;

class DecisionsRecordController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(): View
    {
        return view('decisionsRecords', ['color' => 'blue', "sectionName" => "Relevés des décisions"]);

    }
}
