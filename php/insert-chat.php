<?php 
    session_start();
    if(isset($_SESSION['unique_id']) && $_POST['incoming_id'] && $_POST['massage']){
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $massage = mysqli_real_escape_string($conn, $_POST['massage']);
        if(!empty($massage)){
            $sql = mysqli_query($conn, "INSERT INTO massages (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$massage}')") or die();
        }
    }else{
        header("location: ../login.php");
    }


   
?>