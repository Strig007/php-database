<?php

    require 'DbConnect.php';

    function login ($username, $password)
    {
        $conn = connect();
        $sql =  $conn->prepare("SELECT * FROM user WHERE UserName = ? and Password = ?");
        $sql->bind_param("ss", $username, $password);
        $sql->execute();
        $res = $sql->get_result();
        return $res->num_rows === 1;
    }

?>