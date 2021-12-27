<?php
include_once('../dbconn.php');

if(isset($_post['stusignup']) && isset($_post['stuname']) && isset($_post['stuemail']) && isset($_post['stupass']))
{
    $stuname = $_post['stuname'];
    $stuemail = $_post['stuemail'];
    $stupass= $_post['stupass'];

    $sql = "insert into student(stu_name, stuemail, stu_pass) values 
    ('$stuname', '$stuemail', '$stupass')";

    if($conn->query($sql) == true)
    {
        echo json_encode("OK");
    }
    else{
        echo json_encode("Failed");
    }
}

?>