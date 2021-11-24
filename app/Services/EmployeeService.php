<?php

namespace App\Services;

use App\Models\Employee;
use App\Repositories\EmployeeRepository;

class EmployeeService {

    private $repo;

    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->repo = $employeeRepository;
    }

    public function create($employee)
    {
        $this->repo->create($employee);
    }

    public function getAll()
    {
        return $this->repo->getAll();
    }
}
