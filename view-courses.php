<h1>Instructors</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <th>ID</th>
      <th>Number</th>
      <th>Description</th>
      <th></th>
    </thead>
    <tbody>
<?php
while($course = $courses->fetch_assoc()){
?>
  <tr>
    <td><?php echo $course['course_id'];?></td>
    <td><?php echo $course['course_number'];?></td>
    <td><?php echo $course['course_description'];?></td>
    <td>
      <form method="post" action="sections-by-course.php">
        <input type="hidden" name="cid" value="<?php echo $course['course_id'];?>">
        <button type="submit" class="btn btn-primary">Sections</button>
      </form>
    </td>
  </tr>
<?php
}
?>

    </tbody>
  </table>
</div>
