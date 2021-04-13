<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASWORD", "");
    define("DB_NAME", "baig_darbas");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASWORD, DB_NAME);
    if($mysqli->connect_error){
        echo "Atsiprasome, bet svetaine susidure su problema. \n";
        echo 'Klaida: ' . $mysqli->connect_error . '\n';
        exit();
    }
    
    mysqli_query($mysqli, "INSERT INTO contact_form (vardas, email, message)
    VALUES('$_POST[vardas]', '$_POST[email]', '$_POST[message]')");