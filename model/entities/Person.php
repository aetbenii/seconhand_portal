<?php
class Person{
    use ActiveRecordable, Deletable, Findable, Persistable;

    private int $id = 0;
    private String $name;
    #private ?string $name = null;
    private string $passwort;
    private string $email;
    private string $telefonnummer;

    protected static $table = 'person';

     public static function findeAlle(){
        $sql = 'SELECT * FROM person';
        $abfrage = DB::getDB()->query($sql);
        $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Person');
        return $abfrage->fetchAll();
    }

    public function getArtikel(){
        return Artikel::findeNachPerson($this->getId());
    }

    public function getTelefonnummer()
    {
        return $this->telefonnummer;
    }

    public function setTelefonnummer($telefonnummer)
    {
        $this->telefonnummer = $telefonnummer;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

 
    public function getPasswort()
    {
        return $this->passwort;
    }

    public function setPasswort($passwort)
    {
        $this->passwort = $passwort;

        return $this;
    }
 
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
}