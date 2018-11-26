<?php
/**
 * Gestion de poneys
 */
class Poneys
{
    

    /**
     * Retourne le nombre de poneys
     *
     * @return void
     */
    public function getCount(): int
    {
        return $this->_count;
    }



    public function setCount(int $number): void
    {
        $this->_count= $number;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function removePoneyFromField(int $number): void
    {
        if ($number < 0){
            throw new Exception('error number negatif');
        }else{
            $this->_count -= $number;
        }
    }

    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
    public function getNames(): array
    {

    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function addPoneyFromField(int $number): void
    {
        $this->_count += $number;
    }

    public function isFull(){
        if($this->_count<=15){
            return true;
        }else{
            return false;
        }
    }



}
?>
