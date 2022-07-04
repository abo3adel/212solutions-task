<?php

namespace App\Http\Controllers;

use App\Models\Company;
use DataTables;
use Illuminate\Http\Request;

class GetCompaniesList extends Controller
{
    public function __invoke()
    {
        return DataTables()->of(Company::query())->make(true);
    }
}
