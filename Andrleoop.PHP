<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//abstraktní trida ustredny a v ni protected $napetí
abstract class  ustredny_FilipAnrdle{

    protected $napeti_FilipAnrdle;
    //nastavení napeti
    public function setNapeti_FilipAnrdle($napeti_FilipAnrdle){
        $this->napeti_FilipAnrdle = $napeti_FilipAnrdle;
    }
    //precteni napeti
    public function getNapeti_Andrlik() {
        return $this-> napeti_FilipAnrdle;
    }
}
// class ustredna se dedi do abs. class ustredny
class  ustredna_FilipAnrdle extends ustredny_FilipAnrdle{
   public $Napeti_FilipAnrdle= 15;
   //nastaveni konstanty type
   const TYPE ="12";
}
//class iustredna dedi interface od abs. class ustredny
    //vypise nastavene hodnoty
//}

//pres vardummp vypise hodnotu v type a hodnotu napeti na ustredne
 var_dump (ustredna_FilipAnrdle::TYPE);

?>
