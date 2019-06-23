<?php

use Illuminate\Database\Seeder;

use App\RecordLabel;

class RecordLabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recordLabels = json_decode(file_get_contents(__DIR__.'\\..\\importdata\\RecordLabels.json'));

        foreach ($recordLabels as $label) {
        	RecordLabel::create([
        		'name' => $label->name,
        		'color' => $label->color,
        	]);
        }
    }
}
