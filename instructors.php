<?php
require_once("util-db.php");
require_once("model-instructors.php");

$pageTitle = "Instructors";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add":
      if(insertInstructor($_POST['name'], $_POST['office'])){
        echo '<div class="alert alert-success" role="alert">Instructor Added.</div>';
      }
      else{
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
      case "Delete":
      if(deleteInstructor($_POST['iid'])){
        echo '<div class="alert alert-success" role="alert">Instructor Deleted.</div>';
      }
      else{
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
      case "Edit":
      if(updateInstructor($_POST['name'], $_POST['office'], $_POST['iid'])){
        echo '<div class="alert alert-success" role="alert">Instructor
        Edited.</div>';
      }
      else{
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}



$instructors = selectInstructors();
include "view-instructors.php";
include "view-footer.php";
?>
