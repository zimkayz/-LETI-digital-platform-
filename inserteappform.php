<?php
include_once 'db_connection.php';
if(isset($_POST['save']))
{    
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $gender = $_POST['gender'];
     $email_app = $_POST['email_app'];
     $phone_empl = $_POST['phone_empl'];
     $applied_job = $_POST['applied_job'];


     $sql = "INSERT INTO applicants (first_name,last_name,gender,email_app,phone_empl,applied_job)
     VALUES ('$first_name','$last_name','$gender','$email_app','$phone_empl','$applied_job')";
     if (mysqli_query($conn, $sql)) {
        echo "<script>
                    alert('Form sent.Your form is under review and we will contact you soon.Thank you');
                    window.location.href = 'index.html';
                    </script>";
     } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>