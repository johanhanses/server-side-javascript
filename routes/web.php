<?php

use App\Models\User;

Route::get("/", function () {
   return view("sponsorships");
});

Route::get("/partials/developers", function () {
    $users = User::inRandomOrder()->limit(5)->get();

    return view("_developers", compact("users"));
});
