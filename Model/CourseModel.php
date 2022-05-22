<?php

class CourseModel extends Database
{

    private $courses;

    function __construct()
    {
        $this->courses = array(
            (object) array(
                "id" => 1,
                "name" => "Pemrograman Berbasis Web"
            ),
            (object) array(
                "id" => 2,
                "name" => "Pemrograman Android"
            )
        );
    }

    function listCourses()
    {
        return $this->courses;
    }
}
