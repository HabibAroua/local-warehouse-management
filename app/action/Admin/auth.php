<?php
    require_once('../../connection/Connection.php');
    require_once('../../model/Admin.php');
    require_once('../../session/session.php');
    $admin = new Admin();
    //echo json_encode($admin->getAll());
    if((isset($_POST['login'])) AND (isset($_POST['password'])))
    {
        $test = false;
        foreach($admin->getAll() as $v)
        {
            if($_POST['login'] == $v{'login'})
            {
                if(sha1($_POST['password']) == $v{'password'})
                {
                    $test = true;
                    break;
                }
                else
                {
                    echo "Verif your password ";
                    break;
                }
            }
        }
        if($test == true)
        {
            $session = new Session();
            $session->connect($admin->getLogin(),$admin->getPassword(),'../../../Admin/index.php',3600);

        }
        else
        {
            echo "Bad";
        }
    }
    else
    {
        echo "Error";
    }
?>