<?php

use Carbon\Carbon;
use Faker\Factory as Faker;
use Phinx\Seed\AbstractSeed;

class PostSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $this->execute('TRUNCATE TABLE posts');

        $faker = Faker::create('zh_TW');
        $data  = [];
        $total = 10;

        foreach (range(1, $total) as $index) {
            $data[] = [
                'title'      => $faker->realText(10),
                'content'    => $faker->realText(500),
                'created_at' => Carbon::now()->subDays($total - $index),
                'updated_at' => Carbon::now()->subDays($total - $index),
            ];
        }

        $posts = $this->table('posts');

        $posts->insert($data)
            ->save();
    }
}
