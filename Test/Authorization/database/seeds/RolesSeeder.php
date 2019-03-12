<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $author = \App\Role::create([
            'name' => 'Author',
            'slug' => 'author',
            'permissions' => json_encode([
                'create-post' => true,
            ]),
        ]);

        $editor = \App\Role::create([
            'name' => 'Editor',
            'slug' => 'editor',
            'permissions' => json_encode([
                'update-post' => true,
                'publish-post' => true,
            ])
        ]);
    }
}
