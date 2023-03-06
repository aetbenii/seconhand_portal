<?php
class Artikel{
    use ActiveRecordable, Deletable, Findable, Persistable;

    private int $id = 0;
    private string $bezeichnung;
    private string $beschreibung;
    private float $preis;
    private string $einstelldatum;
    private int $Person_Personid;
    private int $Zustand_Zustandid;

    protected static $table = 'artikel';

    public static function findeAlle(){
        $sql = 'SELECT * FROM artikel';
        $abfrage = DB::getDB()->query($sql);
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Artikel');
        return $abfrage->fetchAll();
    }

    public static function zeigeNachZustandAuf(){
        $sql = 'SELECT * FROM artikel ORDER BY Zustand_Zustandid ASC';
        $abfrage = DB::getDB()->query($sql);
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Artikel');
        return $abfrage->fetchAll();
    }

    public static function zeigeNachZustandAb(){
        $sql = 'SELECT * FROM artikel ORDER BY Zustand_Zustandid DESC';
        $abfrage = DB::getDB()->query($sql);
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Artikel');
        return $abfrage->fetchAll();
    }

    public static function findeNachPerson(int $person_id){
        $sql = "SELECT * from artikel where person_id=".$person_id;
        $abfrage = DB::getDB()->query($sql);
        //$abfrage->execute(array('person_id' => $person_id));
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Artikel');
        return $abfrage->fetchAll();
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of bezeichnung
     */ 
    public function getBezeichnung()
    {
        return $this->bezeichnung;
    }

    /**
     * Set the value of bezeichnung
     *
     * @return  self
     */ 
    public function setBezeichnung($bezeichnung)
    {
        $this->bezeichnung = $bezeichnung;

        return $this;
    }

    /**
     * Get the value of beschreibung
     */ 
    public function getBeschreibung()
    {
        return $this->beschreibung;
    }

    /**
     * Set the value of beschreibung
     *
     * @return  self
     */ 
    public function setBeschreibung($beschreibung)
    {
        $this->beschreibung = $beschreibung;

        return $this;
    }

    /**
     * Get the value of preis
     */ 
    public function getPreis()
    {
        return $this->preis;
    }

    /**
     * Set the value of preis
     *
     * @return  self
     */ 
    public function setPreis($preis)
    {
        $this->preis = $preis;

        return $this;
    }

    /**
     * Get the value of einstelldatum
     */ 
    public function getEinstelldatum()
    {
        return $this->einstelldatum;
    }

    /**
     * Set the value of einstelldatum
     *
     * @return  self
     */ 
    public function setEinstelldatum($einstelldatum)
    {
        $this->einstelldatum = $einstelldatum;

        return $this;
    }

    /**
     * Get the value of person_id
     */ 
    public function getPerson_id()
    {
        return $this->Person_Personid;
    }

    /**
     * Get the value of zustand_id
     */ 
    public function getZustand_id()
    {
        return $this->Zustand_Zustandid;
    }
}