<?php
require_once("util-db.php");
require_once("model-instructors-with-courses.php");

$pageTitle = "Instructors with Courses";
include "view-header.php";

if (isset($_POST['actionType'])){
  switch ($_POST['actionType']){
    case "Add":
      if(insertSection($_POST['iid'], $_POST['cid'], $_POST['semester'], $_POST['room'], $_POST['day_time'])){
        echo '<div class="alert alert-success" role="alert">Section Added.</div>';
      }
      else{
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
      case "Delete":
      if(deleteCourse($_POST['sid'])){
        echo '<div class="alert alert-success" role="alert">Section Deleted.</div>';
      }
      else{
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
      case "Edit":
      if(updateCourse($_POST['sid'], $_POST['iid'], $_POST['cid'], $_POST['semester'],$_POST['room'],$_POST['day_time'])){
        echo '<div class="alert alert-success" role="alert">Section Edited.</div>';
      }
      else{
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$instructors = selectInstructors();
include "view-instructors-with-courses.php";
include "view-footer.php";
?>
