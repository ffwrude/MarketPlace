<?php
    require_once (__DIR__."/PDOManager.php");
    require_once (__DIR__."/../Entity/Product.php");

    class ProductManager{
        private $pdo;
        private $product;

        public function __construct(){
            $pdo= new PDOManager();
            $this->pdo = $pdo->init()->getPDO();
            $this->product = new Product();
        }

        public function hydrate($tableau){
            foreach($tableau as $key=>$val){
                $test = "set".ucwords($key);
                $this->product->$test($val);
            }
        }

        private function get($id){
            $where = "";
            if($id != ""){
                $where = "WHERE id='".$id."'";
            }
            $requette = "SELECT * FROM products ".$where;
            $result = $this->pdo->query($requette);
            if($id != ""){
                return $result->fetch(PDO::FETCH_ASSOC);
            }else{
                return $result->fetchAll(PDO::FETCH_ASSOC);
            }
        }

        public function getObject($id){
            $this->hydrate($this->get($id));
            return $this->product;
        }

        public function getArray($id){
            return $this->get($id);
        }

        public function add($tableau){
            $cols = $vals = "";
            foreach($tableau as $key=>$val){
                $cols .= $key.",";
                $vals .= ":".$key.",";
            }
            $cols = substr($cols,0,-1);
            $vals = substr($vals,0,-1);

            $requette = "INSERT INTO
                            products
                        (".$cols.")
                          VALUES
                        (".$vals.")
            ";
            $prepare = $this->pdo->prepare($requette);
            $prepare->execute($tableau);
        }

        public function update($tableau,$id){
            $cols = "";
            foreach($tableau as $key=>$val){
                $cols .= $key."=:".$key.",";
            }
            $cols = substr($cols,0,-1);

            $requette = "UPDATE
                            products
                        SET
                          ".$cols."
                        WHERE
                            id=:id
            ";
            $tableau["id"] = $id;
            $prepare = $this->pdo->prepare($requette);
            $prepare->execute($tableau);
        }

        public function delete($id){
            $requette = "DELETE FROM products WHERE id=:id";
            $prepare = $this->pdo->prepare($requette);
            $prepare->execute(array("id"=>$id));
        }

        public function last(){
            $requette = "SELECT id FROM products WHERE id=(SELECT MAX(id) FROM products)";
            $prepare = $this->pdo->prepare($requette);
            $prepare->execute();
            $result = $prepare->fetch(PDO::FETCH_ASSOC);
            return $result["id"];
        }
/*
        public funtion getArray($id,$truc){
            if(!is_numeric($id)){
                echo "Va te faire mettre ".$_SERVER["REMOTE_ADDR"]." stockée";
            }else{
                $requette = "SELECT * FROM products WHERE id='".$id."'";
                $result = $this->pdo->query($requette);
                if($truc == 1){
                    $this->hydrate($result->fetch(PDO::FETCH_ASSOC));
                    return $this->product;
                }else{
                    return $result->fetch(PDO::FETCH_ASSOC);
                }
             }
        }*/
    }

/*
$truc = new ProductManager();
$truc = $truc->get(1);
var_dump($truc);
*/
$test = new ProductManager();
//$test = $test->add(array("nom"=>5,"description"=>5,"prix"=>5,"quantite"=>5));

//$test = $test->update(array("description"=>"TROP MOCHE"),23);

//$test = $test->delete(23);

?>