<?php
if (isset($_GET['batiment']) && isset($_GET['salle'])) {
    echo $_GET['batiment'] . " " . $_GET['salle'];
} else {
    echo "ses paramêtre n'existe pas";
}