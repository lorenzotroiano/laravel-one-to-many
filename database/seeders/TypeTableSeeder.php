<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;
use App\Models\Type;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = Type::factory()->count(50)->make();

        foreach ($types as $type) {

            $project = Project::inRandomOrder()->first();

            $type->project_id = $project->id;
            $type->save();
        }
    }
}
