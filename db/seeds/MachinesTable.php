<?php

use Phinx\Seed\AbstractSeed;

class MachinesTable extends AbstractSeed
{
    public function run ()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'coiling_way'      => $faker->randomElement(['cold', 'hot']),
                'spring_type'      => $faker->word,
                'model'            => $faker->randomLetter.'-'.$faker->randomNumber(),
                'wire_800_min'     => $faker->randomFloat(),
                'wire_800_max'     => $faker->randomDigitNotNull(),
                'wire_1300_min'    => $faker->randomFloat(),
                'wire_1300_max'    => $faker->randomDigitNotNull,
                'wire_1900_min'    => $faker->randomFloat(),
                'wire_1900_max'    => $faker->randomDigitNotNull,
                'spring_od_min'    => $faker->randomDigitNotNull,
                'spring_od_max'    => $faker->randomDigitNotNull,
                'productivity'     => $faker->randomDigitNotNull,
                'trimming_machine' => $faker->optional()->randomLetter,
                'looping_machine'  => $faker->optional()->word,
                'power_reel'       => $faker->optional()->words(rand(2, 5), true),
                'mode'             => $faker->word,
                'description'      => $faker->sentences((rand(1, 3)),true)
            ];
        }

        $this->insert('machines', $data);
    }
}
