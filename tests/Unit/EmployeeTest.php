<?php

namespace Tests\Unit;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmployeeTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_employee_belongs_to_company()
    {
        $company = Company::factory()->create();
        $employee = Employee::factory()->create([
            'company_id' => $company->id,
        ]);

        $this->assertNotNull($employee->company);
        $this->assertEquals($employee->company->name, $company->name);
    }
}
