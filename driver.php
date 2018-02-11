$adminemail="vladislavbesso@yandex.ru";
$date=date("d.m.y");
 
$time=date("H:i"); 


$login = $_POST['login'];
$comment = $_POST['comment'];
$secondname = $_POST['secondname'];
$password = $_POST['password'];

mail("$adminemail", "$date $time Сообщение 
от $login"); 
 
 $f = fopen("message.txt", "a+"); 
 
fwrite($f," \n $date $time Сообщение от $name"); 
 
fwrite($f,"\n $msg "); 
 
fwrite($f,"\n ---------------"); 
 
fclose($f); 

print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000); 
//--></script> 