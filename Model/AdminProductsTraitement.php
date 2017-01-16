<?php

include (__DIR__."/Model.php");

class AdminProductsTraitement extends Model{
    private $nom;
    private $description;
    private $quantite;
    private $prix;

    public function __construct(array $tableau){
        //On va hydrater avec le post
        $this->hydrate($tableau);
    }

    private function hydrate($tableau){
        foreach($tableau as $key=>$val) {
            $explode = explode("_", $key);
            $test = $explode[1];    //On peut pas directement faire $this->$explode[1] alors obligé de faire un $test... WTF ? Normal ?
            $this->$test = $val;
        }
    }

    public function doInsert(){
        /*$requette = "INSERT INTO
                        products
                    (nom,description,prix,quantite)
                      VALUES
                    ('".$this->nom."','".$this->description."','".$this->prix."','".$this->quantite."')
        ";
        $this->PDO()->query($requette);*/

        $requette = "INSERT INTO
                      products
                    (nom,description,prix,quantite)
                      VALUES
                    (
                      :nom,
                      :description,
                      :prix,
                      :quantite
                    )
        ";
        $prepare = $this->PDO()->prepare($requette);
        $tableau = array(
            'nom'=>$this->nom,
            'description'=>$this->description,
            'prix'=>$this->prix,
            'quantite'=>$this->quantite
        );
        var_dump($tableau);
        //exit();
        $prepare->execute($tableau);

        /* Normalement je mettrais dans VALUES ($1,$2,$3,$4) mais je sais pas comment faire un pg_query_params($requette,array($this->nom),$this->description,$this->prix,$this->quantite) */

        $this->headerLocation();
    }

    private function headerLocation(){
        header("Location: ../web/index.php?pg=products");
    }
}
/* Le code du dessous ne devrait pas être dans cette page mais je vois pas ou. Dans une vue ? Mais dans ce cas qui render la page de traitement ? C'est pas du render en plus alors suis pas sur*/

?>
