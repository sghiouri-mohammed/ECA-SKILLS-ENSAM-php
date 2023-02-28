<?php
session_start();
class student{
    public $cne;
    public $nom;
    public $prenom;
    public $temps;
    public $mail;
    public $phone;

    public function __construct($i,$n,$p,$a,$g,$e){
        $this->cne =$i;
        $this->nom =$n;
        $this->prenom =$p;
        $this->temps =$a;
        $this->mail =$g;
        $this->phone =$e;
    }
}

class instructeur{
    public $id;
    public $nom;
    public $tel;

    public function __construct($i,$n,$t){
        $this->id = $i;
        $this->nom = $n;
        $this->tel = $t;
    }
    public function connect(){
        $c = NULL;
        try{
            $c = new PDO("mysql:host=localhost;dbname=phpmyadmin","root","");
        }
        catch(PDOException $e){
            echo "PB de connexion ....";
        }
        return $c;
    }
    public function authentif($l,$p){
        $id = NULL;
        $c = $this->connect();
        $sql = "SELECT * FROM `newinstructor` WHERE `Mail` = '".$l."' AND `Password` = '".$p."'";
        $cc = $c->query($sql);
        foreach($cc as $v){
        $id = $v[0]  ;
        }
        return $id;
    }
    public function addstud($n,$a,$g,$e,$i,$j){
        $c = $this->connect();
        $sql = "INSERT INTO `student` (`cne`, `nom`, `prenom`, `temps`, `mail`, `phone`) VALUES (NULL, '".$n."', '".$a."', '".$g."', '".$e."', '".$i."', '".$j."')";
        $cc = $c->prepare($sql);
        $cc->execute();
    }
    public function deletetud($id){
        $c = $this->connect();
        $sql = "DELETE FROM `newstudents` WHERE `cne` = '".$id."'";
        $cc = $c->prepare($sql);
        $cc->execute();
    }
    public function modiftud($n,$a,$g,$e,$i){
        $c = $this->connect();
        $sql = "UPDATE `newstudents` SET `nom`='".$n."',`prenom`='".$a."',`temps`='".$g."',`mail`='".$e."' WHERE `cne`='".$i."'";
        $cc = $c->prepare($sql);
        $cc->execute();
    }
   
}


?>