<?php
    include "function.php";
    // On verifie si le variable $_POST contient des valeurs
    echo '';
    if($_POST['etudiants'] != '' && $_POST['exercices'] != '' && $_POST['notes'] != ''){
       insert_note($_POST['etudiants'], $_POST['exercices'], $_POST['notes']);
       echo "<script language=\"Javascript\"> alert (\"Note enregistrée\") </script>";
    } else {
       echo "<script language=\"Javascript\"> alert (\"Note non enregistrée\") </script>";
    }
    
    $etudiant = select_all_etudiant();
    $exercice = select_all_exercice();

    $l_etudiants= "";
    foreach ($etudiant as $key=>$value) {
        $l_etudiants .= "<option value=\"".$etudiant[$key][IDETUDIANT]."\">".$etudiant[$key][NOM]."</option>";
    } 
    $l_exercices= "";
    foreach ($exercice as $key=>$value) {
        $l_exercices .= "<option value=\"".$exercice[$key][IDEXERCICE]."\">".$exercice[$key][INTITULE]."</option>";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style type="text/css">
            input {width: 200px;}
            select {width: 200px;}
        </style>
    </head>
    <body>
        <form method=post action="ecrire.php">
            <table class="save" border=0>
                <tr> <td>
                    <select name="etudiants" size="1">
                        <?php print $l_etudiants; ?>
                    </select>
                </td></tr>
                <tr><td>
                    <select name="exercices" size="1">
                        <?php print $l_exercices; ?>
                    </select>
                </td></tr>

                <tr><td>
                    <input type=text name="notes">
                </td></tr>

                <tr>
                    <td><input type="submit" value="Enregistrer"></td>
                </tr>
            </table>
        </form>
    </body>
</html>