<?php
declare(strict_types= 1);

function get_username(object $pdo, string $username){
    $query="Select username from users where username =:username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function get_email(object $pdo, string $email){
    $query="Select username from users where email =:email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function set_user( object $pdo,string  $username, string $pwd,string  $email ){
    $query="Insert into users (username,pwd,email) values(:username,:pwd,:email);";
    $stmt = $pdo->prepare($query);
    $options = [
        'cost' => 12
    ];
    $hasedPwd=password_hash($pwd, PASSWORD_BCRYPT, $options);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd", $hasedPwd);
    $stmt->bindParam(":email", $email);

    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}


?>