<?php
class Stagiaire {
private string $_nom;
private  array  $_notes;

public function __construct(string $_nom , array $_notes){
    $this->_nom = $_nom;
    $this->_notes = $_notes;
}

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->_nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->_nom = $nom;
    }

    /**
     * @return array
     */
    public function getNotes(): array
    {
        return $this->_notes;
    }

    /**
     * @param array $notes
     */
    public function setNotes(array $notes): void
    {
        $this->_notes = $notes;
    }


    public function calculeMoyenne() {
   $moyenne = array_sum($this->_notes) / count($this->_notes);

    return round($moyenne , 2);
    }


}