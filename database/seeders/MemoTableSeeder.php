<?php

namespace Database\Seeders;

use App\Models\Memo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class MemoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memo')->delete();

        Memo::create([
            'title' => '7/1 企業説明会', 'content' => '企業の説明を聞きました。'
        ]);

        Memo::create([
            'title' => '12/6 laravel勉強会', 'content' => 'Viewの表示をしました。'
        ]);
    }
}
