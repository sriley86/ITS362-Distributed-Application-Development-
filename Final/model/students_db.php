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


  function delete_student($id) {
  global $db;
  $query = 'DELETE FROM Student WHERE StudentID = :id';
  try {
    $statement = $db->prepare($query);
    $statement->bindValue('id', $id);
    $statement->execute();
    $statement->closeCursor();
  } catch (PDOException $e) {
    $error_message = $e->getMessage();
    display_db_error($error_message);
  }
  
  }
  function get_studentSmith() {

  global $db;
  $queryStudentSmith = 'SELECT StudentID, lastName, firstName, dateOfBirth FROM Student
    WHERE lastName = "smith"';
  $statement2 = $db->prepare($queryStudentSmith);
  $statement2->bindValue;
  $statement2->execute();
  $studentSmith = $statement2->fetchAll();
  $statement2->closeCursor();
  return $studentSmith;
  }

  function add_student($id, $fname, $lname, $dob) {
    global $db;
    $query = 'INSERT INTO Student
                ( StudentID, firstName, lastName, dateOfBirth)
            VALUES
                (:id, :firstName, :lastName, :dateOfBirth)';
  
    try {
      $statement = $db->prepare($query);
      $statement->bindValue(':id', $id);
      $statement->bindValue(':firstName', $fname);
      $statement->bindValue(':lastName', $lname);
      $statement->bindValue(':dateOfBirth', $dob);
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
    function update_student($id, $fname, $lname, $dob) {
      global $db;
      $query =
          'UPDATE Student
           SET lastName = :lname
           WHERE StudentID = :id';
      try {
          $statement = $db->prepare($query);
          $statement->bindValue(':id', $id);
          $statement->bindValue(':firstName', $fname);
          $statement->bindValue(':lastName', $lname);
          $statement->bindValue(':dateOfBirth', $dob);
          $row_count = $statement->execute();
          $statement->closeCursor();
          return $row_count;
      } catch (PDOException $e) {
          $error_message = $e->getMessage();
          display_db_error($error_message);
      }
  }
  
  ?>