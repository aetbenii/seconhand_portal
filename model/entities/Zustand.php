<?php
class Zustand{
    use ActiveRecordable, Deletable, Findable, Persistable;

    private int $id = 0;
    private string $zustand;
    
    protected static $table = 'zustand';

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
     * Get the value of zustand
     */ 
    public function getZustand()
    {
        return $this->zustand;
    }

    /**
     * Set the value of zustand
     *
     * @return  self
     */ 
    public function setZustand($zustand)
    {
        $this->zustand = $zustand;

        return $this;
    }
}