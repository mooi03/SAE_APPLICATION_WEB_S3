<?php
function rc4($cle, $message, $chiffrement = true)
{
    $S = range(0, 255);
    $j = 0;

    // KSA
    for ($i = 0; $i < 256; $i++) {
        $cle_binaire = ord($cle[$i % strlen($cle)]);
        $j = ($j + $S[$i] + $cle_binaire) % 256;
        list($S[$i], $S[$j]) = array($S[$j], $S[$i]);
    }
    $i = $j = 0;

    // PRGA
    $texterempli = [];
    $message_len = strlen($message);
    for ($k = 0; $k < $message_len; $k++) {
        $i = ($i + 1) % 256;
        $j = ($j + $S[$i]) % 256;
        list($S[$i], $S[$j]) = array($S[$j], $S[$i]);
        $k_temp = $S[($S[$i] + $S[$j]) % 256];

        // Filtrer pour obtenir des caractères ASCII
        $char = chr(ord($message[$k]) ^ $k_temp & 0x7F);

        // Ajouter ou retirer la séquence spécifique en fonction du mode
        if ($chiffrement) {
            $texterempli[] = $char;
        } else {
            // Retirer la séquence spécifique à la fin
            if ($char != 'sequence_specifique') {
                $texterempli[] = $char;
            }
        }
    }

    $resultat = implode("", $texterempli);
    return $resultat;
}
