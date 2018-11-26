<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class PoneysTest extends TestCase
{
    protected $Poneys;
    protected function setUp(){
        $this->Poneys = new Poneys();
        $this->Poneys->setCount(10); 
    }

    /**
     * Undocumented function
     * 
     * @return void
     */
    public function testRemovePoneyFromField()
    {

        // Action
        $this->Poneys->removePoneyFromField(3);

        // Assert
        $this->assertEquals(7, $this->Poneys->getCount());
    }
    
    /**
     * Undocumented function
     * 
     * @return void
     */
    public function testAddPoneyFromField()
    {

        // Action
        $this->Poneys->addPoneyFromField(2);

        // Assert
        $this->assertEquals(12, $this->Poneys->getCount());
    }

    /**
     * Undocumented function
     * @return void
     */
    public function testremove2poneyFromField()
    {       
        $this->expectExceptionMessage('error number negatif');
        // Action
        $this->Poneys->removePoneyFromField(-2);

    }

    /**
     * Undocumented function
     * @dataProvider additionProvider
     * @return void
     */
    public function testremoveproviderponeyFromField($a,$b)
    {
      
        // Action
        $this->Poneys->removePoneyFromField($a);
        $this->assertEquals($b, $this->Poneys->getCount());

    }

    public function additionProvider(){
        return [[1,9],[2,8]];
    }

    public function teststubPoneyname(){
        $stub=$this->createMock(Poneys::class);
        $stub->method('getNames')
             ->willReturn(['toto','tata','titi']);
        
        $this->assertSame(['toto','tata','titi'], $stub->getNames());

    }

   public function testdisponible(){
       
        $this->Poneys->addPoneyFromField(1);
        $this->assertTrue($this->Poneys->isFull());
   }

   protected function tearDown()
   {
       unset($this->Poneys);
   }

}
?>
