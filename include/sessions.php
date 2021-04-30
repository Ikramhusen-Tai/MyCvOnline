<?php
if (isset($_SESSION['logged_in_user_id'])) {
    $id = $_SESSION['logged_in_user_id'];
    if ($_SESSION['logged_in_user_category'] == 'company') {
        $select = "Select * from companies Where company_id='$id'";
        $result = mysqli_query($myconn, $select);
        $data = mysqli_fetch_array($result);
    } else {
        $select = "Select * from candidates Where candidate_id='$id'";
        $result = mysqli_query($myconn, $select);
        $data = mysqli_fetch_array($result);
    }
    $_SESSION['logged_in_user_data'] = $data;
}
else if (isset($_POST['logout'])){
    echo ('Logout');
}
if (isset($_POST['logout'])) {
    unset($data);
    unset($_SESSION['logged_in_user_data']);
    unset($_SESSION['logged_in_user_id']);
    unset($_SESSION['logged_in_user_category']);
    // unset($_POST['logout']);
    header("location: index.php");

}
?>