<?php
    

    $error = $std = $pro = "";
    

    if (isset($_POST['prof']))
    {
        header("location: profLogin.php");
        
    }

    else if (isset($_POST['stud']))
    {
        header("location: studentLogin.php");
    }

    echo <<<_END
    <html>
        <head>
        <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <form method='post' action='login.php'> $error 
                <button class='adjust' name='stud' value='$std'>STUDENT</button>
                OR
                <button class='adjust' name='prof' value='$pro'>PROFESSOR</button>
        
    
    _END;
?>
     </form>
  </body>
</html>
