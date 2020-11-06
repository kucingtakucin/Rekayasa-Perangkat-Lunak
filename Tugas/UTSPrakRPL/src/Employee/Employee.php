<?php
namespace src\Employee;

class Employee
{
    private int $id;
    private string $name;
    private int $basic_salary;

    /**
     * Employee constructor.
     * @param int $id
     * @param string $name
     * @param int $basic_salary
     */
    public function __construct(int $id, string $name, int $basic_salary)
    {
        $this->id = $id;
        $this->name = $name;
        $this->basic_salary = $basic_salary;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getBasicSalary(): int
    {
        return $this->basic_salary;
    }
}