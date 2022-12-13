<?php

namespace Tests\Recipes;

use App\Recipes\DbRepository;
use App\Recipes\FileRepository;
use App\Recipes\Recipes;
use PHPUnit\Framework\TestCase;

class RecipesTest extends TestCase
{

    public function testsaveInDB()
    {
        $dbRepository = new DbRepository();
        $recipes = new Recipes($dbRepository);
        $sut = $recipes->save();
        $this->assertEquals('The recipe was saved in a db', $sut);
    }

    public function testsaveInFile()
    {
        $FileRepository = new FileRepository();
        $recipes = new Recipes($FileRepository);
        $sut = $recipes->save();
        $this->assertEquals('The recipe was saved in a file', $sut);
    }
}
