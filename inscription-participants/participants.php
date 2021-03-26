<?php
class Participant {
    private $Nom;
    private $Prenom;
    private $Email;
      
    
/*     function __construct($Nom,$Prenom,$Email) {
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->Email = $Email;
    }
 */
    public function setnom($nom){
        $this->nom = $nom;
    }
    public function getnom(){
        return $this->nom;
    }

    public function setprenom($prenom){
        $this->prenom = $prenom;
    }

    public function getprenom(){
        return $this->prenom;
    }
    public function setemail($t){
        $this->email = $email;
    }
    public function getemail(){
        return $this->email;
    }
    public function settelephone($telephone){
        $this->telephone = $telephone;
    }
    public function gettelephone(){
        return $this->telephone;
    }


}
?>