<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'Make'=>$faker->randomelement($array=array('honda','toyota','ford')),
        'Model'=>$faker->address,
        'Year'=>$faker->year,
    ];
});
