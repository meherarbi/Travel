<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Categorie;

class CategorieUnitTest extends TestCase
{
    public function testIsCategorie(): void
    {
        $categorie = new Categorie();
        $categorie->setNom("Bord de mere");


        $this->assertTrue($categorie->getNom() === "Bord de mere");
    }
}
