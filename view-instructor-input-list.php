<select class="form-select" id="iid" name="iid">
<?php
while ($instructorItem = $instructorList ->fetch_assoc()){
  $selText = "";
  if($selectedInstructor == $instructorItem['instructor_id']{
     $selText = "selected";
?>
  <option value="<?php echo $instructor['instructor_id']; ?>" <?=$selText?>><?php echo $instructor['instructor_name']; ?></option>
<?php
}
?>
</select>
