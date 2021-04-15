<?php

class Student
{

    private int $id;
    private string $name;
    private string $dob;
    private string $address;
    private int $math;
    private int $phys;
    private int $chem;

    public function __construct(
        string $name,
        string $dob,
        string $address,
        int $math,
        int $phys,
        int $chem
    )
    {
        $this->name = $name;
        $this->dob = $dob;
        $this->address = $address;
        $this->math = $math;
        $this->phys = $phys;
        $this->chem = $chem;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDob(): string
    {
        return $this->dob;
    }

    public function setDob(string $dob): void
    {
        $this->dob = $dob;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getMath(): int
    {
        return $this->math;
    }

    public function setMath(int $math): void
    {
        $this->math = $math;
    }

    public function getPhys(): int
    {
        return $this->phys;
    }

    public function setPhys(int $phys): void
    {
        $this->phys = $phys;
    }

    public function getChem(): int
    {
        return $this->chem;
    }

    public function setChem(int $chem): void
    {
        $this->chem = $chem;
    }

    public function getGPA(): int
    {
        return ($this->math + $this->phys + $this->chem)/3;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

}