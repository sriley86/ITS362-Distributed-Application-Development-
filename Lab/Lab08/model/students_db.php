<?php
  // initial query from the database

    function get_students() {
        global $db;
    $queryAllStudents = 'SELECT * FROM Student
              ORDER BY StudentID';
    $statement2 = $db->prepare($queryAllStudents);
    $statement2->bindValue;
    $statement2->execute();
    $studentList = $statement2->fetchAll();
    $statement2->closeCursor();
    return $studentList;
    }

    function get_studentsName() {
      global $db;
    $queryAllStudents = 'SELECT * FROM Student
          ORDER BY Name';
    $statement2 = $db->prepare($queryAllStudents);
    $statement2->bindValue;
    $statement2->execute();
    $studentList = $statement2->fetchAll();
    $statement2->closeCursor();
    return $studentList;
    }

    function get_studentsHometown() {
      global $db;
      $queryAllStudents = 'SELECT * FROM Student
              ORDER BY Hometown';
      $statement2 = $db->prepare($queryAllStudents);
      $statement2->bindValue;
      $statement2->execute();
      $studentList = $statement2->fetchAll();
      $statement2->closeCursor();
      return $studentList;
    }

    function get_studentsAge() {
      global $db;
      $queryAllStudents = 'SELECT * FROM Student
              ORDER BY Age';
      $statement2 = $db->prepare($queryAllStudents);
      $statement2->bindValue;
      $statement2->execute();
      $studentList = $statement2->fetchAll();
      $statement2->closeCursor();
      return $studentList;
    }

    function get_studentsMajor() {
      global $db;
      $queryAllStudents = 'SELECT * FROM Student
            ORDER BY Major';
      $statement2 = $db->prepare($queryAllStudents);
      $statement2->bindValue;
      $statement2->execute();
      $studentList = $statement2->fetchAll();
      $statement2->closeCursor();
      return $studentList;
    }

    function get_studentsGender() {
      global $db;
      $queryAllStudents = 'SELECT * FROM Student
           ORDER BY Gender';
      $statement2 = $db->prepare($queryAllStudents);
      $statement2->bindValue;
      $statement2->execute();
      $studentList = $statement2->fetchAll();
      $statement2->closeCursor();
      return $studentList;
    }

    function get_studentsGPA() {
      global $db;
      $queryAllStudents = 'SELECT * FROM Student
            ORDER BY GPA';
      $statement2 = $db->prepare($queryAllStudents);
      $statement2->bindValue;
      $statement2->execute();
      $studentList = $statement2->fetchAll();
      $statement2->closeCursor();
      return $studentList;
    }


?>