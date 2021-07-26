<?php
    require 'DbConnect.php';

    function register ($firstname, $lastname, $gender, $dob, $religion, $presentAddress,
    $permanentAddress, $phone, $email,$personal, $username, $password)
    {
        $conn = connect();
        $sql = $conn->prepare("INSERT INTO user (FirstName, LastName, Gender, DateOfBirth, Religion, 
        PresentAddress, PermanentAddress, Phone, Email, PersonalWebLink, UserName, Password) VALUES (?,?,
        ?,?,?,?,?,?,?,?,?,?)");
        $sql->bind_param("ssssssssssss", $firstname, $lastname, $gender, $dob, $religion, $presentAddress,
        $permanentAddress, $phone, $email,$personal, $username, $password);
        
        return $sql->execute();
    }   

?>