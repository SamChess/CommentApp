<?php

use Illuminate\Database\Seeder;
use App\Comments;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();

        Comments::create(array(
            'author' => 'Sam Mulwa',
            'text' => 'Look I am a test comment.'
        ));

        Comments::create(array(
            'author' => 'Nemanja Matic',
            'text' => 'This is going to be super crazy.'
        ));

        Comments::create(array(
            'author' => 'Garry Cahill',
            'text' => 'I am a master of Laravel and Angular.'
        ));
    }
}
