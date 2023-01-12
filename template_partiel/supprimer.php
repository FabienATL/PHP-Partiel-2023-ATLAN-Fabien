<?php

  if(isset($_POST['formdeleteuser']) AND isset($_POST['datadelet'])){
    $datadelet = $_POST['datadelet'];
    $req = $DB->query("DELETE FROM utilisateurs WHERE :nom = nom",array('nom' => $datadelet));
    header('Location: index.php');
    $_SESSION['flash']['success'] = "L'utilisateur' à été supprimé";
    exit;
}
