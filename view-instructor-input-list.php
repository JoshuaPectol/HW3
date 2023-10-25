<select class="form-select" id="iid" name="iid">
<?php
while ($instructorItem = $instructorList ->fetch_assoc()){
?>
  <option value="<?php echo $instructor['instructor_id']; ?>"><?php echo $instructor['instructor_name']; ?></option>
<?php
}
?>
</select>
