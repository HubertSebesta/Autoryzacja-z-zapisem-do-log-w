<?php

class Autentykacja{


    //zmienna z loginem
    private $login = 'adminek' ;

    //zmienna z haslem - dziewczyna admina ;)
    private $haslo = 'kunegunda' ;

    private $plikLogow = 'logi.txt' ;


    //funkcja, jako składnik obiektu, zawsze ma dostęp do wszystkich innych jego składników
    //(również prywatnych)
    public function test($login,$haslo){
        if (trim($login)==''){
            $this->log("Podano pusty login");
            return false; //wymagane
        }
    if (trim($haslo)==''){
            $this->log("Podano puste haslo");
            return false; //wymagane
        }
    if ($this->login==$login and $this->haslo==$haslo){
        $this->log("Wykonano poprawna autentykację");
        return true;
    }else{
        $this->log("Podano bledny login lub haslo");
        return false;
    }

  }

    //funkcja, jako składnik obiektu, zawsze ma dostęp do wszystkich innych jego składników
    //(również prywatnych)
    private function log($tresc){
        file_put_contents($this->plikLogow,date("Y-m-d H:i:s")." ".$tresc ."\n");
    }

}


