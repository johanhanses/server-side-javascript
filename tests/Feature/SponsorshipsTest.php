<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SponsorshipsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function can_view_sponsorships_page()
    {
         $this->get("/")->assertSuccessful();
    }

    /** @test */
    public function can_fetch_developers_partials()
    {
        User::factory(5)->create();

        $this->get("/partials/developers")
            ->assertViewHas("users", function ($users) {
                return count($users) === 5;
            })
            ->assertSuccessful();
    }
}
