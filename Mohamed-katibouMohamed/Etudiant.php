<?php
    class Etudiant {
        public $img;
        public $nom;
        public $prenom;
        function __construct($img, $nom, $prenom) {
            $this->img = $img;
            $this->nom = $nom;
            $this->prenom = $prenom;
        }
    }
?>
