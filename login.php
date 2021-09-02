<html>
<h1>existing user? log in here</h1><br>
<form action="" name="login" method="POST">
<input type="text" name="username" value="" placeholder="username"><br>
<input type="text" name="password" value="" placeholder="password"><br>
<input type="submit" name="login" value="login"><br>
</form>

<h1>new user? register here!</h1><br>
<form action="" name="register" method="POST">
<input type="text" name="newusername" value="" placeholder="enter your username"><br>
<input type="text" name="newpassword" value="" placeholder="enter your password"><br>
<input type="submit" name="register" value="register"><br>
</form>

<?php
//here it is checked if the required boxes are filled
 isset($existinguname = $_POST["username"]);
 isset($existingpword = $_POST["password"]);
 isset($newuname = $_POST["newusername"]);
 isset($newpword = $_POST["newpassword"]);

 







?>
</html>


