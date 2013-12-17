<?php

    function etunote_connect(){
        $HOST = 'localhost'; $USR = 'root'; $PWD = 'root'; $BDDMI = 'etunote';
        $LNK = mysql_connect($HOST, $USR, $PWD);
        if(!$LNK){
            die (mysql_error()); 
        } else {
            if (!$BDD = mysql_select_db($BDDMI, $LNK)) {
                die (mysql_error());
            }
        }
        return $LNK;
    }
    
    function etunote_close(){	
        mysql_close();
    }
    
    function insert_note($idetu, $idexe, $note){
        if(etunote_connect()){
            $sql = sprintf("INSERT INTO NOTES VALUES('%d', '%d', '%d')",
                    mysql_real_escape_string($idetu),
                    mysql_real_escape_string($idexe),
                    mysql_real_escape_string($note));
            if(!mysql_query($sql)){
                die(mysql_error());
            }
            etunote_close();
        }
    }
    
    function select_all_etudiant(){ 
        if(etunote_connect()){
            $sql = sprintf("SELECT * FROM ETUDIANTS");
            if($rslt = mysql_query($sql)){
                if(mysql_num_rows($rslt) != 0){
                    $data = array(); $i = 0;
                    while ($row = mysql_fetch_array($rslt, MYSQL_BOTH)){
                        $data[$i] = $row; $i++;
                    }
                    return $data;
                }
            } else {
                die(mysql_error());
            }
        }
    }
    
    function select_all_exercice(){ 
        if(etunote_connect()){
            $sql = sprintf("SELECT * FROM EXERCICES");
            if($rslt = mysql_query($sql)){
                if(mysql_num_rows($rslt) != 0){
                    $data = array(); $i = 0;
                    while ($row = mysql_fetch_array($rslt, MYSQL_BOTH)){
                        $data[$i] = $row; $i++;
                    }
                    return $data;
                }
            } else {
                die(mysql_error());
            }
        }
    }
?>
