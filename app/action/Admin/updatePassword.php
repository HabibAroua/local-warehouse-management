<?php
    session_start ();
    if(($_POST['old_password']) && ($_POST['new_password']))
    {
        if(sha1($_SESSION['password']) == sha1($_POST['old_password']))
        {
            echo "good";
            //header ('location: ../../../Admin/logout.php');
        }
        else
        {
            echo "Verif your old password";
        }
    }
    else
    {
        
    }
?>