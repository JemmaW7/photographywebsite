<?php
include 'connect.php';



// escape string
function e($val){
    global $db;
    return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
    global $errors;

    if (count($errors) > 0){
            echo '<div class="error">';
                    foreach ($errors as $error){
                            echo $error .'<br>';
                    }
            echo '</div>';
    }
}



?>