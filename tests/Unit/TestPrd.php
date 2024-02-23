<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class TestPrd extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function Prd_Test(): void
    {

        $data=[
            'libelle'=>"coat cute",
             'prix'=>'300',
              'Quantité'=>'25',
               'image'=>'back.jpg'
        ];
        $this->assertTrue(true);
    }
}