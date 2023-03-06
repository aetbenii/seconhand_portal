<?php

class IndexController extends AbstractBase{

// Alle Seminartermine auslesen
public function allePAktion(){
  $this->addContext("personen", Person::findeAlle());
}

public function alleArtikelAktion(){
  $this->addContext("artikel", Artikel::findeAlle());
}

public function alleArtikelAufAktion(){
  $this->addContext("artikel", Artikel::zeigeNachZustandAuf());
}

public function alleArtikelAbAktion(){
  $this->addContext("artikel", Artikel::zeigeNachZustandAb());
}

}