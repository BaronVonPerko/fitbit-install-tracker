<?php

namespace Tests\Feature;

use App\FitbitApp;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterAppTest extends TestCase
{
    use RefreshDatabase;


    /** @test */
    function an_app_belongs_to_a_user(){
    	$user = factory(User::class)->create();

    	factory(FitbitApp::class)->create(['user_id' => $user]);

    	$this->assertCount(1, $user->apps);
    }
}
