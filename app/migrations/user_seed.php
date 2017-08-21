<?php

$tablename = "users";

try {
    $db = new PDO("mysql:dbname=$dbname;host=$host;CHARSET=utf8;COLLATE=utf8_unicode_ci", $user, $pass);
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $db->exec("TRUNCATE TABLE $tablename;");
    $db->exec("INSERT INTO $tablename (name, email, address) VALUES ('Dracule', 'dracule@mail.com', 'Jalan ganteng kali no. 1')");
    $db->exec("INSERT INTO $tablename (name, email, address) VALUES ('Mihawk', 'mihawk@mail.com', 'Jalan ganteng kali no. 2')");
    print("Seed $tablename Table success.\n");
} catch(PDOException $e) {
    echo $e->getMessage();
}