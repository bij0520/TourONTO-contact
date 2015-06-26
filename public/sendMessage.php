<?php
require 'sqlhelper.php';
$con=$_POST['con'];
//file_put_contents("C:/Users/bij0520/Documents/chatlog.log",$con."/r/n",FILE_APPEND);
function addMessage($con){
    if (isset($_SESSION['email'])){
        $sql="insert into chat (sender,getter, content,sendTime) values('Admin','Guest','$con',now())";
        file_put_contents("C:/Users/bij0520/Documents/chatlog.log",$_SESSION['email']."/r/n",FILE_APPEND);
    }else{
        $sql="insert into chat (sender,getter, content,sendTime) values('Guest','Admin','$con',now())";
        file_put_contents("C:/Users/bij0520/Documents/chatlog.log",$sql."/r/n",FILE_APPEND);
    }

    $sqlhelper = new SQLHelper();
    $sqlhelper->execute_dml($sql);
    $sqlhelper->close_connect();
}

if(addMessage($con)==1){
    echo "success";

}else{
    echo "error";

}