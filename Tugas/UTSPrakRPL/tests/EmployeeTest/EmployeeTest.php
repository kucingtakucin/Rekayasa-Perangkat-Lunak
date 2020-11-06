<?php
namespace EmployeeTest;

use src\Employee\Employee;
use PHPUnit\Framework\TestCase;

class EmployeeTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function shouldCreateObject(): void
    {
        $id = 1;
        $name = 'John Smith';
        $basic_salary = 1000000;

        $employee = new Employee($id, $name, $basic_salary);
        $this->assertEquals($id, $employee->getId());
        $this->assertEquals($name, $employee->getName());
        $this->assertEquals($basic_salary, $employee->getBasicSalary());
    }
}
