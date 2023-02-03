<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['list'])) {
        $compteur = count($_POST['list']);
        $name = $_POST['username'];
        echo $name . " a " . $compteur . " couleurs prefere qui sont : ";
        foreach ($_POST['list'] as $select) {
            echo "<li>" . $select . "</li>";
        }
    } else {
        $name = $_POST['username'];
        echo "<p>$name n'as pas de couleur prefere</p>";
    }
}
?>