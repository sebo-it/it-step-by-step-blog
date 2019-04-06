<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment = new Comment();
        $comment -> author = "Janusz";
        $comment -> text = "Cześć! Zapowiada się ciekawie. Powodzenia!";
        $comment -> post_id = 1;
        $comment->created_at = "2018-03-01 14:00:00";
        $comment->updated_at = "2018-03-01 14:00:00"; 
        $comment -> save();
        
        $comment = new Comment();
        $comment -> author = "Robert";
        $comment -> text = "Możesz napisać tutoriale do Audacity?";
        $comment -> post_id = 6;
        $comment->created_at = "2018-04-04 18:25:01";
        $comment->updated_at = "2018-04-04 18:25:01"; 
        $comment -> save();
        
        $comment = new Comment();
        $comment -> author = "Janek";
        $comment -> text = "Jestem za. Audacity jest ok!";
        $comment -> post_id = 6;
        $comment->created_at = "2018-04-04 21:02:15";
        $comment->updated_at = "2018-04-04 21:02:15"; 
        $comment -> save();
        
        $comment = new Comment();
        $comment -> author = "LinuxVSMac";
        $comment -> text = "Jaka jest Twoja ulubiona dystrybucja?";
        $comment -> post_id = 5;
        $comment->created_at = "2018-03-27 08:22:45";
        $comment->updated_at = "2018-03-27 08:22:45"; 
        $comment -> save();
    }
}
