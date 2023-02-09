<?php

    
    
    if(empty($_POST["username"])){
        die("Username is required");
    }

    if(strlen($_POST["password"]) < 8){
        die("Password needs to be at least 8 characters");
    }

    if ( ! preg_match("/[a-z]/i",$_POST["password"])){
        die("Password must contain at least one letter");
    }

    if(! preg_match("/[0-9]/i",$_POST["password"])){
        die("Password must contain at least one number");
    }
    if(! preg_match("/[\[^\'£$%^&*()}{@:\'#~?><>,;@\|\-=\-_+\-\`\]]/",$_POST["password"])){
        die("Password must contain at least one special character");
    }

    

    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
    

    $mysqli = require __DIR__ . "/server.php";

    $sql = "INSERT INTO loginform (username, password) VALUES (?, ?)";

    $stmt = $mysqli->stmt_init();

    if ( ! $stmt->prepare($sql)) {
        die("SQL ERR: " . $mysqli->error);
    }

    $stmt->bind_param("ss",
                     $_POST["username"],
                     $password_hash);

    if ($stmt->execute()){

        header("Location: signuppage2.php");
        exit;
        
    } else{
        die($mysqli->error . "" . $mysqli->errno);
    }

    


    echo "Signup successful";


    

?>
