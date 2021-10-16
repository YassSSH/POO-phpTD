<?php
class Formation {
    private string $_intitulé;
    private int $_nbrJours;
    private array $_stagiaire;

    public function __construct( string $_intitulé, int $_nbrJours, array $_stagiaire){
        $this->_intitulé=$_intitulé;
        $this->_nbrJours=$_nbrJours;
        $this->_stagiaire=$_stagiaire;
    }

    /**
     * @return string
     */
    public function getIntitulé(): string
    {
        return $this->_intitulé;
    }

    /**
     * @param string $intitulé
     */
    public function setIntitulé(string $intitulé): void
    {
        $this->_intitulé = $intitulé;
    }

    /**
     * @return int
     */
    public function getNbrJours(): int
    {
        return $this->_nbrJours;
    }

    /**
     * @param int $nbrJours
     */
    public function setNbrJours(int $nbrJours): void
    {
        $this->_nbrJours = $nbrJours;
    }


    /**
     * @return array
     */
    public function getStagiaire(): array
    {
        return $this->_stagiaire;
    }

    /**
     * @param array $stagiaire
     */
    public function setStagiaire(array $stagiaire): void
    {
        $this->_stagiaire = $stagiaire;
    }
    public function calculerMoyenneFormation(){

        $test = array_sum($this->_stagiaire) / count($this->_stagiaire);
        return $test;
    }
}