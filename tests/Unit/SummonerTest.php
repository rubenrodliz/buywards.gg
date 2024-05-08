<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Summoner;

class SummonerTest extends TestCase
{
    public function testExecute()
    {
        $summoner = new Summoner('Choice', 'HAG', 'europe');
        $summoner->execute();

        $this->assertNotNull($summoner->getData());
        $this->assertEquals('ValorEsperado', $summoner->getData()->campoEsperado);
    }


}
