<?php
    require_once 'functions.php';

     $error= $name = $user = $pass = "";

     

     if (isset($_POST['user']))
     {
       $user = sanitizeString($_POST['user']);
       $pass = sanitizeString($_POST['pass']);
       if ($user == "" || $pass == "")
         $error = "Not all fields were entered<br><br>";
   else {
         $result = queryMysql("SELECT * FROM students WHERE user='$user'");
         if ($result->num_rows)
           $error = "That username already exists<br><br>";
   else {
           queryMysql("INSERT INTO students VALUES('$name','$user', '$pass')");
           die("<h4>Student account created</h4>Please Log in.<br><br>");
           header("location: studentLogin.php");
         }
   } }
     echo <<<_END
       <form method='post' action='register.php'>$error
       <span class='fieldname'>Name</span>
       <input type='text' maxlength='16' name='name' value='$name'
       <span class='fieldname'>Username</span>
       <input type='text' maxlength='16' name='user' value='$user'
       <span class='filename'> Password</span>
        <input type='text' maxlength='16' name='pass'
        value='$pass'><br>

       _END
?>

        <span class='fieldname'>&nbsp;</span>
        <input type='submit' value='Register'>
        </form></div><br>
</body>
</html> 