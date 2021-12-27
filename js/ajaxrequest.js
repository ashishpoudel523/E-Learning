function addStu(){
    var stuname = $("#stuname").val();
    var stuemail = $("#stuemail").val();
    var stupass = $("#stupass").val();

    $.ajax({
        url:'Student/addstudent.php',
        method: "post",
        dataType: "json",
        data: {
            stusignup: "stusignup",
            stuname: stuname,
            stuemail: stuemail,
            stupass: stupass,
        },
        success: function(data){
            console.log(data);
            if(data == "OK"){
                $('#successMsg').html("<span>Registration Successful !</span>");
            } else if(data == "failed"){
                $('#successMsg').html("<span>Unable to Register. </span>");
            }
        },
    })

}