<?php

namespace Database\Seeders;

use App\Models\Award;
use App\Models\Categoryproduct;
use Illuminate\Database\Seeder;
use App\Models\Program;
use App\Models\Categoryprogram;
use App\Models\News;
use App\Models\Product;
use App\Models\Secretary;
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
        User::factory(11)->create();
        Program::factory(25)->create();
        News::factory(25)->create();
        Award::factory(25)->create();
        Secretary::factory(25)->create();
        Product::factory(25)->create();

        Categoryprogram::create([
            'name' => 'Web Programming',
            'slug' => 'webprogramming',
        ]);
        Categoryprogram::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        Categoryprogram::create([
            'name' => 'Sport',
            'slug' => 'sport',
        ]);
        Categoryprogram::create([
            'name' => 'Healthy',
            'slug' => 'health',
        ]);
        Categoryprogram::create([
            'name' => 'Bussines',
            'slug' => 'Bussines',
        ]);
        Categoryprogram::create([
            'name' => 'Food',
            'slug' => 'Food',
        ]);
        Categoryprogram::create([
            'name' => 'Education',
            'slug' => 'education',
        ]);

        Categoryproduct::create([
            'name' => 'Web Developer',
            'slug' => 'webdeveloper',
        ]);
        Categoryproduct::create([
            'name' => 'Mobile Developer',
            'slug' => 'mobiledeveloper',
        ]);
        Categoryproduct::create([
            'name' => 'Dokter',
            'slug' => 'dokter',
        ]);
        Categoryproduct::create([
            'name' => 'Designer',
            'slug' => 'designer',
        ]);
        Categoryproduct::create([
            'name' => 'Entrepreneur',
            'slug' => 'entrepreneur',
        ]);

        User::create([
            'name' => 'PMII Cabang Ciputat',
            'title' => 'PC. Ciputat',
            'initials' => 'CC',
            'username' => 'pmiicabangciputat',
            'role' => 1,
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Sekertaris PC.PMII Ciputat',
            'title' => 'Sek. Ciputat',
            'initials' => 'SPC',
            'username' => 'sekertarispmiiciputat',
            'role' => 2,
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'PMII KOMNIVPAM',
            'title' => 'PK. Unpam',
            'initials' => 'PKU',
            'username' => 'pmiikomnivpam',
            'role' => 3,
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'PMII KOMFAST',
            'title' => 'PK. Saintek',
            'initials' => 'PKS',
            'username' => 'pmiikomfast',
            'role' => 3,
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'PMII KOMFAKDA',
            'title' => 'PK. Dakwah',
            'initials' => 'PKD',
            'username' => 'pmiikomfakda',
            'role' => 3,
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'PMII KOMFAKTAR',
            'title' => 'PK. Tarbiyah',
            'initials' => 'PKT',
            'username' => 'pmiikomfaktar',
            'role' => 3,
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'PMII KOMFAKKES',
            'title' => 'PK. Kesehatan',
            'initials' => 'PKK',
            'username' => 'pmiikomfakes',
            'role' => 3,
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'PMII KOMFEIS',
            'title' => 'PK. Ekonomi & Bisnis',
            'initials' => 'PKE',
            'username' => 'pmiikomfeis',
            'role' => 3,
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'PMII KOMFAKSYAHUM',
            'title' => 'PK. FAKSYAHUM',
            'initials' => 'PKSH',
            'username' => 'pmiikomfaksyahum',
            'role' => 3,
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'PMII KOMFUSPERTUM',
            'title' => 'PK. FUSPERTUM',
            'initials' => 'PKFP',
            'username' => 'pmiikomfuspertum',
            'role' => 3,
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'PMII KOMFAKDISH',
            'title' => 'PK. FAKDISH',
            'initials' => 'PKDS',
            'username' => 'pmiikomfakdish',
            'role' => 3,
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'PMII KOMFAKA',
            'title' => 'PK. Adab',
            'initials' => 'PKA',
            'username' => 'pmiikomfaka',
            'role' => 3,
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'PMII KOMFAPSI',
            'title' => 'PK. Psychology',
            'initials' => 'PKP',
            'username' => 'pmiikomfapsi',
            'role' => 3,
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'PMII KOMFISIP',
            'title' => 'PK. FISIP',
            'initials' => 'PKFI',
            'username' => 'pmiikomfisip',
            'role' => 3,
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
