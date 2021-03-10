<?php
require __DIR__ . '/database_conn/database.php';

function getRandName() {
    $names = ['Antonio', 'Ernestio', 'Alessandro', 'Enrico', 'Anna', 'Virginia'];
    $lastNames = ['Spacco', 'Spaccamela', 'Cristo', 'Bidone', 'Bond', 'Amidala'];
    $name = mt_rand(0, count($names)-1);
    $lastName = mt_rand(0, count($lastNames)-1);

    return "$names[$name] $lastNames[$lastName]";
}

function getRandEmail($name) {
    $domains = ['@yahoo.com', '@google.com', '@pornhub.com', '@alice.it'];
    $domain = mt_rand(0, count($domains)-1);

    $userName = str_replace(' ', '.', $name);
    $email = $userName . mt_rand(1, 99) . $domains[$domain];

    return strtolower($email);

}

// Genera codice fiscale (in base alla tabella asci) http://www.asciitable.com/
function codiceFiscale() {
    $codiceFiscale = '';

    // Prime 6 lettere del codice fiscale
    for($i = 1; $i <= 6; $i++) {
        $codiceFiscale .= chr(mt_rand(65, 90));
    }

    // due cifre
    for($i = 1; $i <= 2; $i++) {
        $codiceFiscale .= chr(mt_rand(48, 57));
    }
    // Concateno 1 Lettera e 2 cifre e 1 lettera
    $codiceFiscale .= chr(mt_rand(65, 90)) . chr(mt_rand(48, 57)). chr(mt_rand(48, 57)) . chr(mt_rand(65, 90));

    // 3 Lettere
    for($i = 1; $i <= 3; $i++) {
        $codiceFiscale .= chr(mt_rand(48, 57));
    }

    $codiceFiscale .= chr(mt_rand(65, 90));

    return $codiceFiscale;
}

/**
 * @desc inserimento utente nel DataBase
 * @param $totale
 * @param mysqli $conn
 */
function insertNewUser($totale, mysqli $conn)
{
    for ($i=0; $i<=$totale; $i++) {
        $userName = getRandName();
        $email = getRandEmail($userName);
        $codFiscale = codiceFiscale();
        $age = mt_rand(20, 55);

        $sql = 'INSERT INTO `users`(username, email, codice_fiscale, age) VALUES ';
        $sql .= "('$userName','$email','$codFiscale','$age')";
        $res = $conn->query($sql);
    }

}
//insertNewUser(25, $conn);

/**
 * @param mysqli $conn
 * @param array $params
 * @param int $limit
 * @return array
 */
function getUsers(mysqli $conn, array $params = [], int $limit = 10) {
    $records = [];

    $orderBy = getParams('orderBy', 'id');

    $results = $conn->query("SELECT * FROM `users` ORDER BY $orderBy LIMIT $limit");
    while($row = $results->fetch_assoc()) {
        $records[] = $row;
    }
    return $records;
}

/**
 * @param string $param
 * @param string $default
 * @return mixed|null
 */
function getParams(string $param, $default = '') {
    return !empty($_REQUEST[$param]) ? $_REQUEST[$param] : $default ;
}