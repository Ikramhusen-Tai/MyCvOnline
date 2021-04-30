<?php
session_start();
$myconn = mysqli_connect('127.0.0.1', 'root', '', 'my_cv_online') or die("Error");
// include "logged_in_user.php";

?>
<?php
    if (isset($_POST['register_candidate'])) {
        $myfname = $_POST['c_first_name'];
        $mylname = $_POST['c_last_name'];
        $myemail = $_POST['c_email'];
        $myphone = $_POST['c_phone'];
        $mypass = $_POST['c_password'];
        // $myeducation = $_POST['can-education'];
        // $myaddress = $_POST['can-address'];
        // $mycity = $_POST['can-city'];
        // $mypro = $_POST['can-pro'];
        // $mycountry = $_POST['can-country'];
        // $myint = $_POST['can-int'];
        
        // $temp = explode(".", $_FILES["file"]["name"]);
        // $newfilename = $myemail . "_" . time() . '.' . end($temp);
        // $newfilename = $newfilename."";
        
        //connection
        $myconn = mysqli_connect('127.0.0.1', 'root', '', 'my_cv_online') or die("Error");
        //insert
        // echo ($myfname);
        // echo ('Registered');
        $insert1 = "INSERT INTO candidates(candidate_fname,candidate_lname,candidate_email,candidate_phone)
                   VALUES('$myfname','$mylname','$myemail','$myphone')";

        $rows = mysqli_query($myconn, $insert1) or die("Error while inserting values 1");

        $select1 = "Select candidate_id from candidates Where candidate_email='$myemail'";
        $result = mysqli_query($myconn, $select1) or die("Error");

        $data = mysqli_fetch_array($result);

        $user_id = $data['candidate_id'];
        $insert2 = "INSERT INTO users(user_email,user_password,user_id,user_category)
               VALUES('$myemail','$mypass',' $user_id','candidate')";   
        $run2 = mysqli_query($myconn, $insert2) or die("Error while inserting  values 2");

        // $update1 = "UPDATE candidates SET candidate_image='$newfilename' WHERE candidate_id='$user_id'";
        // $run3 = mysqli_query($myconn, $update1) or die("Error while Updating values");

        // move_uploaded_file($_FILES["file"]["tmp_name"], "images/candidates/" . $newfilename);
        //close
        mysqli_close($myconn);
    }
    
    header("location:login.php");

?>