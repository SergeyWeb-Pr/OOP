<?php
class User
{
    public $name = 'Sergey';
    public $age;
    private $experience;
    protected $info;

    public function showName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setExperience($experience)
    {
        return $experience;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    // public function __construct($name, $age)
    // {
    //     $this->name = $name;
    //     $this->age = $age;
    // }
}

class Employee extends User
{
    private $salary;
    public function getSalary()
    {
        return $this->salary;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

}

$user = new User;

echo $user->showName();

$user->setName('Влад');
echo $user->name;

$salary = $user->setSalary('100');
echo $salary;

$user = new User('Sergey', 26);
echo $user->name;
echo $user->age;

$user->setExperience(2);

$employee = new Employee;
echo $employee->name;
