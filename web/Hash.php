<?php

//echo password_hash("123456ab", PASSWORD_DEFAULT);
//echo "<br/>";
//echo md5("123456ab");

$db_password = password_hash("12345", PASSWORD_DEFAULT);

$login_password = "12345abc";


if (password_verify($login_password, $db_password))
{
  echo "The password is matched";
}else {
  echo "The password is incorrect! Try again!";
}




 ?>
