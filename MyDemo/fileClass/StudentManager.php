<?php


class StudentManager
{
    protected string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    function loadDataFile()
    {
        $dataFile = file_get_contents($this->filePath);
        return json_decode($dataFile);
    }

    function getAll(): array
    {
        $data = $this->loadDataFile();
        $students = [];
        foreach ($data as $item) {
            $student = new Student(
                $item->name,
                $item->dob,
                $item->address,
                $item->math,
                $item->phys,
                $item->chem);
            $student->setId($item->id);
            array_push($students, $student);
        }

        return $students;
    }

    function add($data)
    {
        $dataFile = $this->loadDataFile();
        $lastStudent = $dataFile[count($dataFile) - 1];

        $data["id"] = $lastStudent->id + 1;

        array_push($dataFile, $data);
        $this->saveDataToFile($dataFile);
    }

    function saveDataToFile($data)
    {
        $dataJson = json_encode($data);
        file_put_contents($this->filePath, $dataJson);
    }


    function remove($index) {
        $dataFile = $this->loadDataFile();
        array_splice($dataFile, $index, 1);
        $this->saveDataToFile($dataFile);
    }

    public function getStudentById($id){
        $data=$this->loadDataFile();
        foreach($data as $item){
            if($id == $_GET["id"]){
                $student = new Student(
                    $item->name,
                    $item->dob,
                    $item->address,
                    $item->math,
                    $item->phys,
                    $item->chem);
                $student->setId($item->id);
                return $student;
            }
        }
    }
}