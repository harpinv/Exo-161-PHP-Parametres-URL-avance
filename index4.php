<?php
if (isset($_GET['langage']) && isset($_GET['serveur'])) {
    echo $_GET['langage'] . " " . $_GET['serveur'];
} else {
    echo "ses paramêtre n'existe pas";
}