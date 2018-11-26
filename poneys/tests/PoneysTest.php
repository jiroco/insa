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

    /**
     * Undocumented function
     * @dataProvider additionProvider
     * @return void
     */
    public function testremoveproviderponeyFromField($a,$b)
    {
        // Setup
        $Poneys = new Poneys();
        // Action
        $Poneys->removePoneyFromField($a);
        $this->assertEquals($b, $Poneys->getCount());

    }

    public function additionProvider(){
        return [[1,7],[2,6]];
    }

    public function teststubPoneyname(){
        $stub=$this->createMock(Poneys::class);
        $stub->method('getNames')
             ->willReturn(['toto','tata','titi']);
        
        $this->assertSame(['toto','tata','titi'], $stub->getNames());

    }

   



}
?>
