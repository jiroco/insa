<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class PoneysTest extends TestCase
{
    /**
     * Undocumented function
     * 
     * @return void
     */
    public function testRemovePoneyFromField()
    {
        // Setup
        $Poneys = new Poneys();

        // Action
        $Poneys->removePoneyFromField(3);

        // Assert
        $this->assertEquals(5, $Poneys->getCount());
    }
    
    /**
     * Undocumented function
     * 
     * @return void
     */
    public function testAddPoneyFromField()
    {
        // Setup
        $Poneys = new Poneys();

        // Action
        $Poneys->addPoneyFromField(2);

        // Assert
        $this->assertEquals(10, $Poneys->getCount());
    }

    /**
     * Undocumented function
     * @dataprovider additionProvider
     * @return void
     */
    public function testremove2poneyFromField()
    {
        // Setup
        $Poneys = new Poneys();
        $this->expectExceptionMessage('error number negatif');
        // Action
        $Poneys->removePoneyFromField(-2);

    }

    public function additionProvider(){
        return array(1,2,-2);
    }

   



}
?>
