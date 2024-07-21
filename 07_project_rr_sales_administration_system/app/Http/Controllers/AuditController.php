<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Audit;
use App\Models\Establishment;


class AuditController extends Controller
{
    public function Audit()
    {
        $audit = Audit::orderBy('id', 'desc')->paginate(10);
        return view("audit.audit", compact("audit"));
    }
}
