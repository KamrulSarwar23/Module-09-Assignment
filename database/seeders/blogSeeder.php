<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class blogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        DB::table('blogs')->insert([

            [
                'blog_name' => 'Blog-01',
                'blog' => 'This is Blog 01',
            ],


            [
                'blog_name' => 'Blog-02',
                'blog' => 'This is Blog 02',
            ],

            [
                'blog_name' => 'Blog-03',
                'blog' => 'This is Blog 03',
            ],

            [
                'blog_name' => 'Blog-04',
                'blog' => 'This is Blog 04',
            ],

            [
                'blog_name' => 'Blog-05',
                'blog' => 'This is Blog 05',
            ],
            
            [
                'blog_name' => 'Blog-06',
                'blog' => 'This is Blog 06',
            ],

            [
                'blog_name' => 'Blog-07',
                'blog' => 'This is Blog 07',
            ],

            [
                'blog_name' => 'Blog-08',
                'blog' => 'This is Blog 08',
            ],
    
            [
                'blog_name' => 'Blog-09',
                'blog' => 'This is Blog 09',
            ],

        ]);
    }
}
