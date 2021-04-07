<?php
    require_once('../../connection/Connection.php');
    require_once('../../model/Admin.php');
    
    $provider = new Provider();
    
    echo json_encode($provider->getAll());
?>