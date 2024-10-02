<?php
include 'connect.php';



//inputs
            $cemail =  $_POST['cemail'];
            $type =  $_POST['type'];
            $cname =  $_POST['cname'];
            $cno =  $_POST['cno'];
            $notes =  $_POST['notes'];
            
            
            // Compose email message
            $to = "jwadmin@jwphotography.tech"; // Replace with recipient email
            $subject = "New Booking";
            $message = "Name: $cname\n";
            $message .= "Phone Number: $cno\n";
            $message .= "Email: $cemail\n";
            $message .= "Type: $type\n";
            $message .= "Notes: $notes\n";
        
            // Set additional headers
            $headers = "From: $cemail\r\n";
            $headers .= "Reply-To: $cemail\r\n";
            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        

            

// attempt insert query execution

mysqli_query($conn, "INSERT INTO booking (cname, cno, cemail, type, notes) VALUES ('$cname', '$cno', '$cemail', '$type', '$notes')");

if(mysqli_affected_rows($conn)>0){

    echo "<script>alert('Booking confirmed!');</script>";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Booking confirmed!');</script>";
        header("Location: bookingform.html");
    } else {
        echo "<script>alert('ERROR: Could not send email.');</script>";
        header("Location: index.html");
    }

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    echo "<script>alert('ERROR');</script>";
    header("Location:index.html", false );
}

    exit(); 



// close connection

mysqli_close($conn);

?>
