<?php
require 'sqlhelper.php';
header("content-type: text/xml;charset=utf-8");
header("Cache-Control: no-cache");
function getMessage(){
   // if (Session::has('email')) {
        $sql = "select * from chat where sent=0 and sender='Guest'";
   // }else{
    //    $sql = "select * from chat where sent=0 and sender='Admin'";

   // }
    //file_put_contents("C:/Users/bij0520/Documents/chatlog.log",$sql."/r/n",FILE_APPEND);
    $sqlhelper = new SQLHelper();
   $array = $sqlhelper->execute_dql($sql);
    $messageInfo="<mes>";
    for($i=0;$i<count($array);$i++){
        $row=$array[$i];
        $messageInfo.="<mesid>{$row['id']}</mesid><sender>{$row['sender']}</sender>

<getter>{$row['getter']}</getter><con>{$row['content']}</con>

<sendTime>{$row['sendTime']}</sendTime>";

    }
    $messageInfo.="</mes>";
   // if (Session::has('email')) {
        $sql = "update chat set sent=1 where sender='Guest'";
   // }else{
    //    $sql = "update chat set sent=1 where sender='Admin'";

  //  }
    $sqlhelper->execute_dml($sql);
    //file_put_contents("C:/Users/bij0520/Documents/chatlog.log",$messageInfo."/r/n",FILE_APPEND);
    return $messageInfo;
    $sqlhelper->close_connect();
}
$mesList = getMessage();
echo $mesList;