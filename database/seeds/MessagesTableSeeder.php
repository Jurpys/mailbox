<?php

use Illuminate\Database\Seeder;
use App\Message;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/messages_sample.json");
        $data = json_decode($json, true);


        $items = [];

        // TODO bulk insert
        foreach ($data as $obj){
            $attributes = [];
            foreach($obj as $key => $value){
                $attributes[$key] = $value;
            }

            $items = $attributes;
        }

        Message::insert($items);
    }
}
