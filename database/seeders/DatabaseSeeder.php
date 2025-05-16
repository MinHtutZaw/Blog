<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $user1=User::factory()->create(['name'=>'Leo','username'=>'leo']);
        $user2=User::factory()->create(['name'=>'jame','username'=>'jame']);
        $frontend=Category::factory()->create(['name'=>'frontend','slug'=>'frontend']);
        $backend=Category::factory()->create(['name'=>'backend','slug'=>'backend']);
        
        Blog::factory(2)->create(['category_id'=>$frontend->id,'user_id'=>$user1->id]);
        Blog::factory(2)->create(['category_id'=>$backend->id,'user_id'=>$user2->id]);

        Blog::factory(10)->create();

      

        
        
    }
}
    

