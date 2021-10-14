<?php
class TroisPoints{
private point $_premier;
private point $_deuxieme;
private point $_troisieme;

public function __construct(point $_premierpoint, point $_deuxiemepoint , point $_troisiemepoint)
{
$this->_premier = $_premierpoint;
$this->_deuxieme = $_deuxiemepoint;
$this->_troisieme = $_troisiemepoint;
}

    /**
     * @return point
     */
    public function getPremier(): point
    {
        return $this->_premier;
    }

    /**
     * @param point $premier
     */
    public function setPremier(point $premier): void
    {
        $this->_premier = $premier;
    }

    /**
     * @return point
     */
    public function getDeuxieme(): point
    {
        return $this->_deuxieme;
    }

    /**
     * @param point $deuxieme
     */
    public function setDeuxieme(point $deuxieme): void
    {
        $this->_deuxieme = $deuxieme;
    }

    /**
     * @return point
     */
    public function getTroisieme(): point
    {
        return $this->_troisieme;
    }

    /**
     * @param point $troisieme
     */
    public function setTroisieme(point $troisieme): void
    {
        $this->_troisieme = $troisieme;
    }
    public function sontAlignes():bool
    {
        $AC = $this->getPremier()->calculerDistance($this->getTroisieme());
        $BC = $this->getDeuxieme()->calculerDistance($this->getTroisieme());
        $AB = $this->getPremier()->calculerDistance($this->getDeuxieme());

        /*
        * premierTest
    */
        if ($AB == $AC + $BC){
            $premierTest = true;
        }
        else{
            $premierTest = false;
        }
        /*
         * deuxiemeTest
        */
        if ($AC == $AB + $BC){
            $deuxiemeTest = true;
        }
        else{
            $deuxiemeTest = false;
        }
        /**
         * troisiemeTest
         */
        if ($BC == $AC + $AB){
            $troisiemeTest = true;
        }
        else{
            $troisiemeTest = false;
        }

        return $premierTest || $deuxiemeTest || $troisiemeTest ;

    }
    public function isocele():bool
    {
        $AC = $this->getPremier()->calculerDistance($this->getTroisieme());
        $BC = $this->getDeuxieme()->calculerDistance($this->getTroisieme());
        $AB = $this->getPremier()->calculerDistance($this->getDeuxieme());

        /*
        * premierTest
    */
        if ($AB == $AC){
            $premierTest = true;
        }
        else{
            $premierTest = false;
        }
        /*
         * deuxiemeTest
        */
        if ($AB == $BC){
            $deuxiemeTest = true;
        }
        else{
            $deuxiemeTest = false;
        }
        /**
         * troisiemeTest
         */
        if ($BC == $AC){
            $troisiemeTest = true;
        }
        else{
            $troisiemeTest = false;
        }

        return $premierTest || $deuxiemeTest || $troisiemeTest ;

    }

}