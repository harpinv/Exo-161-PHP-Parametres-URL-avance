<?php
if (isset($_GET['dateDebut']) && isset($_GET['dateFin'])) {
    echo $_GET['dateDebut'] . " " . $_GET['dateFin'];
} else {
    echo "ses paramêtre n'existe pas";
}