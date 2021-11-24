<?php

namespace App\Repositories;

use App\Models\Employee;

class EmployeeRepository {

    public function create($employee)
    {
        Employee::create($employee);
    }

    public function getAll()
    {
        return Employee::all();
    }
}
