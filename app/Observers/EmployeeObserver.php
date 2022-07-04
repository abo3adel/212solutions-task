<?php

namespace App\Observers;

use App\Mail\EmployeeCreated;
use App\Models\Employee;
use Mail;

class EmployeeObserver
{
    /**
     * Handle the Employee "created" event.
     *
     * @param  \App\Models\Employee  $employee
     * @return void
     */
    public function created(Employee $employee)
    {
        $employee->loadMissing("company");

        Mail::to($employee->email)->send(
            new EmployeeCreated($employee->name, $employee->company->name)
        );
    }
}
