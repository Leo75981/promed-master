<?php

function controleurPrincipal($action)
{
    $lesActions = array();
    $lesActions["defaut"] = CONTROL_DIR."connexion.php";
    $lesActions["connexion"] = CONTROL_DIR."connexion.php";
    $lesActions["newpresta"] = CONTROL_PRATICIEN."edit_prestation.php";
    $lesActions["inscription"] = CONTROL_PATIENT."edit_patient.php";
    $lesActions["comptepro"] = CONTROL_PRATICIEN."monProfilPraticien.php";
    $lesActions["newRdv"] = CONTROL_PATIENT."priseRdv.php";
    $lesActions["planningpro"] = CONTROL_PRATICIEN."planning.php";
    $lesActions["compte"] = CONTROL_PATIENT."monProfilPatient.php";
    $lesActions["inscriptionPro"] =CONTROL_PRATICIEN."edit_praticien.php";



    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}
