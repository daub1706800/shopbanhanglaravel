<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Roles;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    // protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
  $factory->define (Admin::class, function (Faker $faker) {
      return [
            'admin_name' => $this->faker->name,
            'admin_email' => $this->faker->unique()->safeEmail,
            'admin_phone' => '0869185438',
            'admin_password' => 'e10adc3949ba59abbe56e057f20f883e', // password
        ];

            });
$factory->afterCreating(Admin::class,function($admin,$faker){
    $roles=Roles::where('name','user')->get();
    $admin->roles()->sync($roles->pluck('id_roles')->toArray());

});


