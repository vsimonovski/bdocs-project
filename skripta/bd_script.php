<?php
function generate($str) {
    $rasp = explode(", ", $str);

    echo "// <strong>" . $rasp[0] . "</strong>";
    echo "\n";
    echo "<a class=\"ime-filma-link\" title=\"" . $rasp[1] . "\"" . " href=\"" . $rasp[2] . "\"" . ">";
    echo "<span class=\"vreme-filma\">" . $rasp[3] . "</span>";
    echo "<span class=\"ime-filma\">" . $rasp[1] . "</span>";
    echo "<span class=\"program-filma\">" . $rasp[4] . "</span></a>";

    echo "\n\n";
}

$handle = fopen("input.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // skips blank line
        if(!empty(trim($line)))
            generate($line);
    }
    fclose($handle);
} else {
    echo "Greska prilikom citanja fajla";
}

?>
