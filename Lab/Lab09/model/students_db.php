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

    function add_student($id, $name, $hometown, $age, $major, $gender, $gpa) {
      global $db;
      $query = 'INSERT INTO Student
                   ( StudentID, Name, Hometown, Age, Major, Gender, GPA)
                VALUES
                   (:id, :name, :hometown, :age, :major, :gender, :gpa)';
  
      try {
          $statement = $db->prepare($query);
          $statement->bindValue(':id', $id);
          $statement->bindValue(':name', $name);
          $statement->bindValue(':hometown', $hometown);
          $statement->bindValue(':age', $age);
          $statement->bindValue(':major', $major);
          $statement->bindValue(':gender', $gender);
          $statement->bindValue(':gpa', $gpa);
          $statement->execute();
          $statement->closeCursor();
  
          // Get the last student ID that was automatically generated
          $id = $db->lastInsertId();
          return $id;
      } catch (PDOException $e) {
          $error_message = $e->getMessage();
          display_db_error($error_message);
      }
  }

?>