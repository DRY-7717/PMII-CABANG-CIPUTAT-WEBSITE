<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;
use App\Models\Categoryprogram;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Program::factory(25)->create();
        Categoryprogram::create([
            'name' => 'Web Programming',
            'slug' => 'webprogramming',
        ]);
        Categoryprogram::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        User::create([
           'name' => 'PMII Cabang Ciputat',
           'title' => 'PC. Ciputat',
           'initials' => 'CC',
           'username' => 'pmiicabangciputat',
           'email' => 'pmiicabangciputat@gmail.com',
           'password' => Hash::make('password') 
        ]);
        

        // Program::create([
        //     'categoryprogram_id' => 2,
        //     'user_id' => 2,
        //     'title' => 'Teknik Bercengkrama',
        //     'slug' => 'teknik-bercengkrama',
        //     'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Non eius aperiam aliquid nam? Animi est incidunt eum minima hic! Nulla totam asperiores tempore, delectus fuga mollitia sapiente et molestiae laborum necessitatibus debitis porro tenetur quibusdam inventore eveniet voluptatibus voluptatum aspernatur laboriosam obcaecati non iste unde.',
        //     'body' => ' <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non eius aperiam aliquid nam? Animi est incidunt eum minima hic! Nulla totam asperiores tempore, delectus fuga mollitia sapiente et molestiae laborum necessitatibus debitis porro tenetur quibusdam inventore eveniet voluptatibus voluptatum aspernatur laboriosam obcaecati non iste unde. Incidunt unde commodi sapiente aperiam nam, animi consectetur cupiditate ullam odio quas quidem rerum tenetur praesentium repellendus quis facilis dolore reiciendis assumenda debitis? Deserunt incidunt officiis quisquam quo voluptates accusamus natus nulla ipsam tempore velit, quidem, rem ea magnam nesciunt alias? Fugiat eum optio labore facilis omnis laborum praesentium odit unde. Neque repellat iste fugiat doloribus.</p><p>Sapiente omnis dolorum harum nemo temporibus laborum, odio excepturi doloremque! Mollitia odit esse minus aperiam sint corrupti natus optio aspernatur porro, voluptatem molestiae obcaecati, assumenda excepturi ullam a voluptate laborum ex, quod autem hic tempora impedit quidem? Exercitationem nesciunt, officiis alias eum sequi esse. Nihil facere fugit recusandae quisquam eligendi accusantium voluptatem? Sapiente quaerat expedita praesentium, totam debitis laudantium corrupti tenetur, veritatis laborum reiciendis maiores. Nisi officia dicta iste asperiores? Animi voluptas magni consequatur ducimus illo saepe doloremque molestiae ipsum. Ab, corporis asperiores nostrum tempora reprehenderit ratione dicta, exercitationem debitis, harum velit in molestias et culpa eos beatae quaerat.</p>'
        // ]);

        // Program::create([
        //     'categoryprogram_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Coding Ceria',
        //     'slug' => 'coding-ceria',
        //     'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Non eius aperiam aliquid nam? Animi est incidunt eum minima hic! Nulla totam asperiores tempore, delectus fuga mollitia sapiente et molestiae laborum necessitatibus debitis porro tenetur quibusdam inventore eveniet voluptatibus voluptatum aspernatur laboriosam obcaecati non iste unde.',
        //     'body' => ' <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non eius aperiam aliquid nam? Animi est incidunt eum minima hic! Nulla totam asperiores tempore, delectus fuga mollitia sapiente et molestiae laborum necessitatibus debitis porro tenetur quibusdam inventore eveniet voluptatibus voluptatum aspernatur laboriosam obcaecati non iste unde. Incidunt unde commodi sapiente aperiam nam, animi consectetur cupiditate ullam odio quas quidem rerum tenetur praesentium repellendus quis facilis dolore reiciendis assumenda debitis? Deserunt incidunt officiis quisquam quo voluptates accusamus natus nulla ipsam tempore velit, quidem, rem ea magnam nesciunt alias? Fugiat eum optio labore facilis omnis laborum praesentium odit unde. Neque repellat iste fugiat doloribus.</p><p>Sapiente omnis dolorum harum nemo temporibus laborum, odio excepturi doloremque! Mollitia odit esse minus aperiam sint corrupti natus optio aspernatur porro, voluptatem molestiae obcaecati, assumenda excepturi ullam a voluptate laborum ex, quod autem hic tempora impedit quidem? Exercitationem nesciunt, officiis alias eum sequi esse. Nihil facere fugit recusandae quisquam eligendi accusantium voluptatem? Sapiente quaerat expedita praesentium, totam debitis laudantium corrupti tenetur, veritatis laborum reiciendis maiores. Nisi officia dicta iste asperiores? Animi voluptas magni consequatur ducimus illo saepe doloremque molestiae ipsum. Ab, corporis asperiores nostrum tempora reprehenderit ratione dicta, exercitationem debitis, harum velit in molestias et culpa eos beatae quaerat.</p>'
        // ]);
        // Program::create([
        //     'categoryprogram_id' => 1,
        //     'user_id' => 2,
        //     'title' => 'Mapaba',
        //     'slug' => 'mapaba',
        //     'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Non eius aperiam aliquid nam? Animi est incidunt eum minima hic! Nulla totam asperiores tempore, delectus fuga mollitia sapiente et molestiae laborum necessitatibus debitis porro tenetur quibusdam inventore eveniet voluptatibus voluptatum aspernatur laboriosam obcaecati non iste unde.',
        //     'body' => ' <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non eius aperiam aliquid nam? Animi est incidunt eum minima hic! Nulla totam asperiores tempore, delectus fuga mollitia sapiente et molestiae laborum necessitatibus debitis porro tenetur quibusdam inventore eveniet voluptatibus voluptatum aspernatur laboriosam obcaecati non iste unde. Incidunt unde commodi sapiente aperiam nam, animi consectetur cupiditate ullam odio quas quidem rerum tenetur praesentium repellendus quis facilis dolore reiciendis assumenda debitis? Deserunt incidunt officiis quisquam quo voluptates accusamus natus nulla ipsam tempore velit, quidem, rem ea magnam nesciunt alias? Fugiat eum optio labore facilis omnis laborum praesentium odit unde. Neque repellat iste fugiat doloribus.</p><p>Sapiente omnis dolorum harum nemo temporibus laborum, odio excepturi doloremque! Mollitia odit esse minus aperiam sint corrupti natus optio aspernatur porro, voluptatem molestiae obcaecati, assumenda excepturi ullam a voluptate laborum ex, quod autem hic tempora impedit quidem? Exercitationem nesciunt, officiis alias eum sequi esse. Nihil facere fugit recusandae quisquam eligendi accusantium voluptatem? Sapiente quaerat expedita praesentium, totam debitis laudantium corrupti tenetur, veritatis laborum reiciendis maiores. Nisi officia dicta iste asperiores? Animi voluptas magni consequatur ducimus illo saepe doloremque molestiae ipsum. Ab, corporis asperiores nostrum tempora reprehenderit ratione dicta, exercitationem debitis, harum velit in molestias et culpa eos beatae quaerat.</p>'
        // ]);

        // Program::create([
        //     'categoryprogram_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Public Discussion',
        //     'slug' => 'public-discussion',
        //     'excerpt' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Non eius aperiam aliquid nam? Animi est incidunt eum minima hic! Nulla totam asperiores tempore, delectus fuga mollitia sapiente et molestiae laborum necessitatibus debitis porro tenetur quibusdam inventore eveniet voluptatibus voluptatum aspernatur laboriosam obcaecati non iste unde.',
        //     'body' => ' <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non eius aperiam aliquid nam? Animi est incidunt eum minima hic! Nulla totam asperiores tempore, delectus fuga mollitia sapiente et molestiae laborum necessitatibus debitis porro tenetur quibusdam inventore eveniet voluptatibus voluptatum aspernatur laboriosam obcaecati non iste unde. Incidunt unde commodi sapiente aperiam nam, animi consectetur cupiditate ullam odio quas quidem rerum tenetur praesentium repellendus quis facilis dolore reiciendis assumenda debitis? Deserunt incidunt officiis quisquam quo voluptates accusamus natus nulla ipsam tempore velit, quidem, rem ea magnam nesciunt alias? Fugiat eum optio labore facilis omnis laborum praesentium odit unde. Neque repellat iste fugiat doloribus.</p><p>Sapiente omnis dolorum harum nemo temporibus laborum, odio excepturi doloremque! Mollitia odit esse minus aperiam sint corrupti natus optio aspernatur porro, voluptatem molestiae obcaecati, assumenda excepturi ullam a voluptate laborum ex, quod autem hic tempora impedit quidem? Exercitationem nesciunt, officiis alias eum sequi esse. Nihil facere fugit recusandae quisquam eligendi accusantium voluptatem? Sapiente quaerat expedita praesentium, totam debitis laudantium corrupti tenetur, veritatis laborum reiciendis maiores. Nisi officia dicta iste asperiores? Animi voluptas magni consequatur ducimus illo saepe doloremque molestiae ipsum. Ab, corporis asperiores nostrum tempora reprehenderit ratione dicta, exercitationem debitis, harum velit in molestias et culpa eos beatae quaerat.</p>'
        // ]);




        // User::create([
        //     'name' => 'Komisariat Fakultas Dakwah',
        //     'email' => 'dakwah@gmail.com',
        //     'password' => bcrypt('123123')
        // ]);
        // User::create([
        //     'name' => 'Komisariat Fakultas Tarbiyah',
        //     'email' => 'tarbiyah@gmail.com',
        //     'password' => bcrypt('123123')
        // ]);
    }
}
