<?php
function selectInstructors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT instructor_id, instructor_name, office_number FROM `instructor`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectCoursesByInstructor($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.course_id, course_number, course_description, semester, room, day_time FROM `course` c join section s on s.course_id=c.course_id where s.instructor_id =?");
        $stmt->bind_param("i", $iid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertSection($iid, $cid, $sem, $room, $time) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Insert Into 'section' ('instructor_id, 'course_id', 'semester', 'room', 'day_time') VALUES(?, ?, ?, ?, ?)");
        $stmt->bind_param("iisssi", $iid, $cid, $sem, $room, $time, $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateSection($iid, $cid, $sem, $room, $time, $sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update 'section' set 'instructor_id = ?, 'course_id'= ?, 'semester'=?, 'room'=?, 'day_time'=?,");
        $stmt->bind_param("iisssi", $iid, $cid, $sem, $room, $time, $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteSection($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from section where section_id=?");
        $stmt->bind_param("i", $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
