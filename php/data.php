<!-- <?php
    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                or outgoing_msg_id = {$row['unique_id']}) and (outgoing_msg_id = {$outgoing_id} 
                or incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($conn,$sql2);
        $use = mysqli_num_rows($query2);
        if($use > 0){
            $row2 = mysqli_fetch_assoc($query2);
            if($row2['msg_id'] == $row['msg_id']){
                $msg_id = $row['msg_id'];
            }else{
                $msg_id = $row2['msg_id'];
            }
            if($msg_id == $outgoing_id){
                $outgoing_id = $row['outgoing_msg_id'];
            }
            if($msg_id == $incoming_id){
                $incoming_id = $row['incoming_msg_id'];
            }
            if($msg_id == $outgoing_id || $msg_id == $incoming_
                    || $msg_id == $outgoing_id){
                        echo $msg_id;
            }
            

 //       $row2 = mysqli_fetch_assoc($query2);
 /*       (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="No message available";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['outgoing_msg_id'])){
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
        }*/else{
            $you = "";
        }
        ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
        ($outgoing_id == $row['unique_id']) ? $hid_me = "hide" : $hid_me = "";

        $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
                    <div class="content">
                    <img src="php/images/'. $row['img'] .'" alt="">
                    <div class="details">
                        <span>'. $row['fname']. " " . $row['lname'] .'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                </a>';
    }
}
?>  