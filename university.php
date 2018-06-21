<?php

class Person {
    protected $name;

    // obligatory person to create
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Students {
    protected $students = [];

    // func to add a student to University
    public function addStudent(Person $person)
    {
        $this->students[] = $person;
    }


    public function getAll()
    {
        return $this->students;
    }
}

class University {
    protected $name;
    protected $students;

    public function __construct($name, Students $students)
    {
        $this->name = $name;
        $this->students = $students;
    }

    // func to enrol Students to SAE
    public function enrolls(Person $person)
    {
        $this->students->addStudent($person);
    }

    public function getStudents() {
        return $this->students->getAall();
    }

}

$anastasia = new Person('Anastasiia');
$sae = new University('SAE');
$sae_students = new Students();

$sae->enrolls($anastasia);
$sae->getStudents;