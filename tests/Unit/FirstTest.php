<?php

namespace Tests\Unit;
use App\Caixa;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FirstTest extends TestCase
{
   public function testCaixaContemItem()
   {
       $caixa = new Caixa(['obj1', 'obj2', 'obj3']);
       $this->assertTrue($caixa->contem('obj1'));
       $this->assertfalse($caixa->contem('errorTest'));
   }

   public function testCaixaContemUmItem()
   {
       $caixa = new Caixa(['newObj']);
       $this->assertEquals('newObj', $caixa->pegarUm());
       
       //Null, agora a caixa está vazia
       $this->assertNull($caixa->pegarUm());
    }
    
    public function testComecaComLetra()
    {
        $caixa = new Caixa(['teclado','mouse','fone','monitor','cooler','manete']);

        $results = $caixa->comecaCom('m');

        $this->assertCount(3, $results);
        $this->assertContains('monitor', $results);
        $this->assertContains('mouse', $results);
        $this->assertContains('manete', $results);

        //Devolve um Array vazio
        $this->assertEmpty($caixa->comecaCom('a'));
    }
}
