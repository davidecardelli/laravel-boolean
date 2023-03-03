<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tool;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tools = config('tools');

        foreach ($tools as $tool) {
            $new_tool = new Tool();
            $new_tool->fill($tool);
            $new_tool->save();
        }
    }
}
