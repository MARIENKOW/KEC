<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$info = $_POST['info'];
$case = $_POST['case'];

const TOKEN = '';
const CHATID = '';
$post = "Name: $name;\n
Phone: $phone\n
About: $info\n
";

if(isset($_POST['case'])){
   $post.="Case: $case";
}

$txt = strip_tags(urlencode($post));
$textSendStatus = @file_get_contents('https://api.telegram.org/bot'. TOKEN .'/sendMessage?chat_id=' . CHATID . '&parse_mode=html&text=' . $txt);
if($textSendStatus){
   echo "true";
}else{
   echo "false";
}
?>