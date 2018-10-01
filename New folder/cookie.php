<?php
setcookie("mycookie",$value,time()+7200*24);
setcookie("anothercookie",$value,time()+7);
?>
<?php
  foreach($_COOKIE as $key =>$value){
     print$key."=>".$value."<br>";
  }
?>