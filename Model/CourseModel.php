<?php

class CourseModel extends Database
{

    private $courses;

    function __construct()
    {
        $this->connect();
    }

    function listCourses()
    {
        return $this->select("SELECT * FROM courses", array());
    }

    function detailCourse($id)
    {
        return $this->select("SELECT * FROM courses WHERE id = :id", array("id" => $id));
    }

    function addCourse($data)
    {
        $this->executeStatement("INSERT courses (id, name) VALUES (:id, :name)", array("name" => $data["name"], "id" => $data["id"]));
    }

    function updateCourse($id, $data)
    {
        $this->executeStatement("UPDATE courses SET name = :name WHERE id = :id", array("name" => $data["name"], "id" => $id));
    }

    function deleteCourse($id)
    {
        $this->executeStatement("DELETE FROM courses WHERE id = :id", array("id" => $id));
    }
}
