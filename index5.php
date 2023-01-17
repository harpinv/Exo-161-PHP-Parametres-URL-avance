<?php
if (isset($_GET['semaine'])) {
    echo $_GET['semaine'];
} else {
    echo "ses paramêtre n'existe pas";
}