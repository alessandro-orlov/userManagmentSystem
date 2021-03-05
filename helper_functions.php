<?php

function getRandName() {
    $names = ['Antonio', 'Ernestio', 'Alessandro', 'Enrico', 'Anna', 'Virginia'];
    $lastNames = ['Spacco', 'Spaccamela', 'Cristo', 'Bidone', 'Bond', 'Amidala'];
    $name = mt_rand(0, count($names)-1);
    $lastName = mt_rand(0, count($lastNames)-1);

    return "$names[$name] $lastNames[$lastName]";
}

function getRanEmail($name) {
    $domains = ['@yahoo.com', '@google.com', '@pornhub.com', '@alice.it'];
    $domain = mt_rand(0, count($domains)-1);

    $userName = str_replace(' ', '.', $name);
    $email = $userName . mt_rand(1, 99) . $domains[$domain];

    return strtolower($email);

}

// Genera codice fiscale (in base alla tabella asci)
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
    $codiceFiscale .= chr(mt_rand(65, 95)) . chr(mt_rand(48, 57)). chr(mt_rand(48, 57)) . chr(mt_rand(65, 95));

    // 3 Lettere
    for($i = 1; $i <= 3; $i++) {
        $codiceFiscale .= chr(mt_rand(48, 57));
    }

    $codiceFiscale .= chr(mt_rand(65, 90));

    return $codiceFiscale;
}

