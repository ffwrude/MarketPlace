<?php

    class Product{
        private $id;
        private $nom;
        private $descirption;
        private $prix;
        private $quantite;

        public function setId($id){
            $this->id = $id;
        }

        public function setNom($nom){
            $this->nom = $nom;
        }

        public function setDescription($description){
            $this->descirption = $description;
        }

        public function setPrix($prix){
            $this->prix = $prix;
        }

        public function setQuantite($quantite){
            $this->quantite = $quantite;
        }

        public function getId(){
            return $this->id;
        }

        public function getNom(){
            return $this->nom;
        }

        public function getDescription(){
            return $this->descirption;
        }

        public function getPrix(){
            return $this->prix;
        }

        public function getQuantite(){
            return $this->quantite;
        }

        public function gimmeArray(){
            return array($this->getId(),$this->getNom(),$this->getDescription,$this->getPrix(),$this->getQuantite());
        }
    }
?>