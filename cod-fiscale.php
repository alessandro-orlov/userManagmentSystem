<?php
include __DIR__ . "/helper_functions.php";
$stringa = 'UEGRLR05P99G788A';

function codiceFiscaleCheck($stringa) {
    // Controllo se il vlore passato è una stringa
    if (is_string($stringa)) {
        // Controllo se la lunghezza della stringa corrisponde al CF (16 caratteri)
        if (strlen($stringa) === 16) {
            // Trasformo la stringa in array
            $cfArray = str_split($stringa);
            // Controllo se il carrattere nella posizione indicata è numerico o meno
            if (!is_numeric($cfArray[5])) {
                echo 'il codice fiscale è corretto';
            } else {
                echo 'il codice fiscale è sbagliato';
            }

        } else {
            echo "La lunghezza non corrisonde al Codice Fiscale";
        }
    } else {
        echo 'valore non valido';
    }
}
codiceFiscaleCheck($stringa);

//var_dump(str_split($stringa));
?>
<html>
<head>
    <title>User managment</title>
</head>
<body>
    <h1>User managment</h1>

        <?php
            for ($i=0; $i<10; $i++) {
                echo "<ul>";
                $utente = getRandName();
                echo "<li> Nome Utente: " . $utente . "</li>";
                echo "<li> Email: " . getRandEmail($utente) . "</li>";
                echo "<li> CF: " . codiceFiscale() . "</li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
