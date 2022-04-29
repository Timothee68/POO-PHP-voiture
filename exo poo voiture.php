<?php
// principe d'encapsulation = privat ---> donnée accessible que dans la classe on ne  peut les modifier(les attributs et méthodes) en dehors de la classe
//                            public ---> donnée accessible  et modifiable partout même en dehors de la classe
//                            protected ----> donnée accessible par les enfant de la class mère et dans la classe mère on ne peut modifier les parametres                             
class Voiture {
    protected $marque;
    protected $modele;// protected principe d'encapsulation sert a avoir un acces dans la class mere et enfant qui peut avoir acces et modifer dans la class enfants


public function __construct($marque,$modele){// __construct() = methode magique permettant de créer une instance d'une classe , c'est à dire  un objet ( la class voulue ??? )

        $this-> marque = $marque;
        $this-> modele = $modele;
    }

    public function getMarque(){
        return $this-> marque;
    }

    public function getModele(){
        return $this-> modele;
    }
    public function __toString(){//__toString  methode magique permettant de transformer l'objet en châine de caractères/ ex: echo $objet1 , il affichera le to string
        return $this->marque."<br>".$this->modele."<br>";
    }
}
    class Electrique extends Voiture {  // extends  --->   class enfant de la class mère 
        private $autonomie;   // on déclare un nouvelle attribut ici $autonomie   

            public function __construct($marque,$modele,$autonomie){// on recréez un nouveau __construct avec le nouvelle attributs en valeur        
                parent::__construct($marque,$modele);//parent:: permet de dire la class enfant a acces a la class mere (au protected et au construct() ) .            
                $this -> autonomie =$autonomie;
            }


                public function getAutonomie(){// get permet d'afficher la valeur         
                    return $this -> autonomie;
                }
                                              // set a modifier la valuer de la variable (attribut de la class mère ou enfant )
        
                public function __toString(){//__toString  methode magique permettant de dire ce que l'objet doit  afficher.  renvoyer une chaîne de caractères complexe, par exemple un paragraphe répertoriant tous les attributs de l’objet, son état, etc.
                    return $this->marque."<br>".$this->modele."<br>".$this->autonomie."<br>";
                }
        
    } 

$v1 = new Voiture("Peugeot","408");
$ev1 = new Electrique("BMW","I3",100);
// ci dessus methode __construct() appelle automatiquement quand on instancie $v1 et $ve1
// UNE METHODE MAGIQUE EST APPLER AUTOMATIQUEMENT SANS FAIRE APPELLE A ELLE !!!!!!!!
// cu dessous on appelle __toString automatiquement en faisant echo !
echo $v1."<br>"; // $this->marque.$this->modele
echo $ev1; // $this->marque.$this->modele.$this->autonomie

// echo $v1->getMarque().$v1->getModele().$v1->getModele()."<br/>";
// echo $ve1->getMarque().$ve1->getModele().$ve1->getAutonomie()"<br/>";
?>