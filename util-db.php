<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'joshuape_hw3user', 'Jpect#051701', 'joshuape_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
