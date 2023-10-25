<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCourseModal<?php echo $course['courseid']; ?>">
  
</button>

<!-- Modal -->
<div class="modal fade" id="editCourseModal" tabindex="-1" aria-labelledby="editCourseModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editCourseModalLabel">Edit Course</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="cNumber<?php echo $course['courseid'];?>" class="form-label">Course Number</label>
            <input type="text" class="form-control" id="cNumber<?php echo $course['courseid'];?>" name="cNumber" value="<?php echo $course['course_number'];?>">
          </div>
          <div class="mb-3">
            <label for="cDesc<?php echo $course['courseid'];?>" class="form-label">Course Description</label>
            <input type="text" class="form-control" id="cDesc<?php echo $course['courseid'];?>" name="cDesc" value="<?php echo $course['course_description'];?>">
          </div>
          <input type="hidden" name="cid" value="<?php echo $course['courseid'];?>">
          <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
