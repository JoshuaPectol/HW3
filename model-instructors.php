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
function insertInstructor($name, $office) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `instructor` (`instructor_name`, `office_number`) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $office);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateInstructor($name, $office, $iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `instructor` set `instructor_name` = ? , `office_number` = ? where instructor_id = ?");
        $stmt->bind_param("ssi", $name, $office, $iid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteInstructor($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from instructor where instructor_id = ?");
        $stmt->bind_param("i", $iid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
