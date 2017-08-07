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
                'coiling way'      => $faker->randomElement(['cold', 'hot']),
                'spring type'      => $faker->word,
                'model'            => $faker->randomLetter.'-'.$faker->randomNumber(),
                'wire 800 min'     => $faker->randomFloat(),
                'wire 800 max'     => $faker->randomDigitNotNull(),
                'wire 1300 min'    => $faker->randomFloat(),
                'wire 1300 max'    => $faker->randomDigitNotNull,
                'wire 1900 min'    => $faker->randomFloat(),
                'wire 1900 max'    => $faker->randomDigitNotNull,
                'spring od min'    => $faker->randomDigitNotNull,
                'spring od max'    => $faker->randomDigitNotNull,
                'productivity'     => $faker->randomDigitNotNull,
                'trimming machine' => $faker->randomLetter.'-'.$faker->randomNumber(),
                'looping machine'  => $faker->randomLetter.'-'.$faker->randomNumber(),
                'power reel'       => $faker->words(rand(2, 5), true),
                'mode'             => $faker->word,
                'description'      => $faker->sentences((rand(1, 3)),true)
            ];
        }

        $this->insert('machines', $data);
    }
}
