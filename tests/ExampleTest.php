<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;

    public function setUp()
    {
        parent::setUp();
    
        // We create a factory in the setup, 
        // but it nevers gets rolled back.
       factory(User::class)->create(); 
    }
    
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        // If we create the factory here, it'll roll back properly
        // after the test finishes.
        
        //factory(User::class)->create(); 

        $this->visit('/')
             ->see('Laravel 5');
    }
}
