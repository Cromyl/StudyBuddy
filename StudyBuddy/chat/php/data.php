<?php
    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = '{$row['Rollno']}'
                OR outgoing_msg_id = '{$row['Rollno']}') AND (outgoing_msg_id = '{$outgoing_id}' 
                OR incoming_msg_id = '{$outgoing_id}') ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="No message available";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['outgoing_msg_id'])){
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }
        //($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
        $name=$row['Name'];
        ($outgoing_id == $row['Rollno']) ? $hid_me = "hide" : $hid_me = "";

        $output .= '<a href="chat.php?user_id='. $row['Rollno'] .'">
                    <div class="content">
                    
                    <div class="details">
                        <p>'. $name . '</p>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                    
                </a>';
    }
?>