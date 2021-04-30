<?php
        session_start();
        $myconn = mysqli_connect('127.0.0.1', 'root', '', 'my_cv_online') or die("Error");
        
        if (isset($_POST['login'])) {

            $email = $_POST['email'];  
            $password = $_POST['password'];

            $select1 = "Select * from users WHERE user_email='$email'";
            $result = mysqli_query($myconn, $select1);
            $data = mysqli_fetch_array($result);
                
            if (isset($data)) {
                if ($_POST['password'] == $data['user_password']) {
                    $_SESSION['logged_in_useer_id'] = $data['user_id'];
                    $_SESSION['logged_in_usr_category'] = $data['user_category'];
                    header("Location: include/index.php");
                } else {
                    echo "<script type='text/javascript'>alert('Worng Email or Password');</script>";
                }
                unset($data);
            }else{
                echo "<script type='text/javascript'>alert('User not found');</script>";
                unset($data);
            }
        }
    ?>