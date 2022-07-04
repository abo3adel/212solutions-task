<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use DataTables;
use Illuminate\Http\Request;

class GetEmployeeList extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return DataTables()->of(Employee::query())->make(true);
    }
}
