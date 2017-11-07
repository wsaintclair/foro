<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
      $user = factory(App\User::class)->create([
          'name' => 'Wilber Saint Clair',
          'email'=> 'wsc@pulpora.com'
      ]);

      $this->actingAs($user, 'api');

      $this->visit('/api/user')
           ->see('Wilber Saint Clair');
    }
}
