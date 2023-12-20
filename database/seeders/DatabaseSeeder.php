<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->Users();
        $this->Testimonil();
        $this->Image();
        $this->Activity();
        $this->Sitelog();
        $this->Skills();
        $this->Message();
    }
    public function Users() {
        $dataseed = [
            [
                'name'=>'admin',
                'email'=> 'admin@gmail.com',
                'password'=> Hash::make('1122334455') ,
                'is_role'=> 1,
            ],
            [
                'name'=>'admin',
                'email'=> 'testadmin1@gmail.com',
                'password'=> Hash::make('1122334455') ,
                'is_role'=> 1,
            ],
            [
                'name'=>'admin',
                'email'=> 'testadmin2@gmail.com',
                'password'=> Hash::make('1122334455') ,
                'is_role'=> 1,
            ],
            [
                'name'=>'admin',
                'email'=> 'testadmin3@gmail.com',
                'password'=> Hash::make('1122334455') ,
                'is_role'=> 1,
            ]
        ];
        foreach ($dataseed as $row) {
            DB::table('users')->insert($row);
        }
    }
    public function Testimonil() {
        $dataseed = [
            [
                'sl'=> 'w342we',
                'type'=>'testimonil',
                'name'=>'Clint Name',
                'user_img_link'=>'img/testimonial-1.jpg',
                'profession'=>'professor',
                'country'=>'USA',
                'dilog'=>'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            ],
            [
                'sl'=> 'w343we',
                'type'=>'testimonil',
                'name'=>'Clint Name 2',
                'user_img_link'=>'img/testimonial-2.jpg',
                'profession'=>'Annalysist',
                'country'=>'USA',
                'dilog'=>'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            ],
            [
                'sl'=> 'w344we',
                'type'=>'testimonil',
                'name'=>'Clint Name 3',
                'user_img_link'=>'img/testimonial-3.jpg',
                'profession'=>'Annalysist',
                'country'=>'USA',
                'dilog'=>'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            ]
        ];
        foreach ($dataseed as $row) {
            DB::table('testimonil')->insert($row);
        }
    }
    public function Image() {
        $dataseed = [
            [
                'sl'=>'e3225wq',
                'name'=>'about-1.jpg',
                'img_link'=>'img/',
                'statuses'=>'seeds',
            ],
            [
                'sl'=>'e3226wq',
                'name'=>'about-2.jpg',
                'img_link'=>'img/',
                'statuses'=>'seeds',
            ],
            [
                'sl'=>'e3227wq',
                'name'=>'bg-header.jpg',
                'img_link'=>'img/',
                'statuses'=>'seeds',
            ],
            [
                'sl'=>'e3227wq',
                'name'=>'bg-header.jpg',
                'img_link'=>'img/',
                'statuses'=>'seeds',
            ],
            [
                'sl'=>'e3228wq',
                'name'=>'bg-icon.jpg',
                'img_link'=>'img/',
                'statuses'=>'seeds',
            ],
            [
                'sl'=>'e3229wq',
                'name'=>'profile.jpg',
                'img_link'=>'img/',
                'statuses'=>'seeds',
            ],
            [
                'sl'=>'e3212wq',
                'name'=>'testimonial-2.jpg',
                'img_link'=>'img/',
                'statuses'=>'seeds',
            ],
            [
                'sl'=>'e3213wq',
                'name'=>'testimonial-3.jpg',
                'img_link'=>'img/',
                'statuses'=>'seeds',
            ],
            [
                'sl'=>'e3214wq',
                'name'=>'project-1.jpg',
                'img_link'=>'img/',
                'statuses'=>'seeds',
            ],
            [
                'sl'=>'e3215wq',
                'name'=>'project-2.jpg',
                'img_link'=>'img/',
                'statuses'=>'seeds',
            ],
            [
                'sl'=>'e3216wq',
                'name'=>'project-3.jpg',
                'img_link'=>'img/',
                'statuses'=>'seeds',
            ],
            [
                'sl'=>'e3217wq',
                'name'=>'project-4.jpg',
                'img_link'=>'img/',
                'statuses'=>'seeds',
            ],
            [
                'sl'=>'e3218wq',
                'name'=>'project-5.jpg',
                'img_link'=>'img/',
                'statuses'=>'seeds',
            ],
            [
                'sl'=>'e3219wq',
                'name'=>'project-6.jpg',
                'img_link'=>'img/',
                'statuses'=>'seeds',
            ],
            [
                'sl'=>'e3221wq',
                'name'=>'team-1.jpg',
                'img_link'=>'img/',
                'statuses'=>'seeds',
            ],
            [
                'sl'=>'e3222wq',
                'name'=>'team-2.jpg',
                'img_link'=>'img/',
                'statuses'=>'seeds',
            ],
            [
                'sl'=>'e3223wq',
                'name'=>'team-3.jpg',
                'img_link'=>'img/',
                'statuses'=>'seeds',
            ],
            [
                'sl'=>'e331wq',
                'name'=>'user.jpg',
                'img_link'=>'img/',
                'statuses'=>'seeds',
            ]
        ];
        foreach ($dataseed as $row) {
            DB::table('images')->insert($row);
        }
    }
    public function Activity() {
        $dataseed = [
            [
                'sl'=>'x1337ds',
                'type'=>'education',
                'name'=>'UI Design Course',
                'session_start'=>'april-2020',
                'session_complete'=>'sep-2020',
                'institute'=>'Cambridge University',
                'created'=>'seeds',
            ],
            [
                'sl'=>'x1338ds',
                'type'=>'education',
                'name'=>'IOS Development',
                'session_start'=>'april-2020',
                'session_complete'=>'sep-2020',
                'institute'=>'Cambridge University',
                'created'=>'seeds',
            ],
            [
                'sl'=>'x1339ds',
                'type'=>'education',
                'name'=>'Web Design',
                'session_start'=>'april-2020',
                'session_complete'=>'sep-2020',
                'institute'=>'Cambridge University',
                'created'=>'seeds',
            ],
            [
                'sl'=>'x1339ds',
                'type'=>'education',
                'name'=>'Apps Design',
                'session_start'=>'april-2020',
                'session_complete'=>'sep-2020',
                'institute'=>'Cambridge University',
                'created'=>'seeds',
            ],
            [
                'sl'=>'x1340ds',
                'type'=>'experience',
                'name'=>'UI Designer',
                'session_start'=>'april-2020',
                'session_complete'=>'sep-2020',
                'institute'=>'Apex Software Inc',
                'created'=>'seeds',
            ],
            [
                'sl'=>'x1341ds',
                'type'=>'experience',
                'name'=>'Product Designer',
                'session_start'=>'april-2020',
                'session_complete'=>'sep-2020',
                'institute'=>'Apex Software Inc',
                'created'=>'seeds',
            ],
            [
                'sl'=>'x1342ds',
                'type'=>'experience',
                'name'=>'Web Designer',
                'session_start'=>'april-2020',
                'session_complete'=>'sep-2020',
                'institute'=>'Apex Software Inc',
                'created'=>'seeds',
            ],
            [
                'sl'=>'x1343ds',
                'type'=>'experience',
                'name'=>'Apps Designer',
                'session_start'=>'april-2020',
                'session_complete'=>'sep-2020',
                'institute'=>'Apex Software Inc',
                'created'=>'seeds',
            ],
            [
                'sl'=>'x1344ds',
                'type'=>'servises',
                'name'=>'Creative Design',
                'created'=>'seeds',
                'comments'=>'Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.',
                'price'=>199,
            ],
            [
                'sl'=>'x1345ds',
                'type'=>'servises',
                'name'=>'Web Design',
                'created'=>'seeds',
                'comments'=>'Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.',
                'price'=>199,
            ],
            [
                'sl'=>'x1346ds',
                'type'=>'servises',
                'name'=>'Graphic Design',
                'created'=>'seeds',
                'comments'=>'Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.',
                'price'=>199,
            ],
            [
                'sl'=>'x1347ds',
                'type'=>'servises',
                'name'=>'UI/UX Design',
                'created'=>'seeds',
                'comments'=>'Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.',
                'price'=>199,
            ],
        ];
        foreach ($dataseed as $row) {
            DB::table('activity')->insert($row);
        }
    }
    public function Sitelog() {
        $dataseed = [
            [
                'sl'=>'sl12231',
                'type'=>'basic',
                'name'=>'proMan',
                'link'=>'https://youtu.be/2UGHyxR8gPk',
                'total_project'=>1234,
                'total_project_sammary'=>'Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam amet diam ipsum clita labore dolor duo clita.',
                'happy_clint'=>1234,
                'happy_clint_sammary'=>'Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam amet diam ipsum clita labore dolor duo clita.',
                'comments'=>'Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.',
            ],
            [
                'sl'=>'sl12232',
                'type'=>'uploadcv',
                'name'=>'my_cv.pdf',
                'upload_link'=>'pdf/',
            ],
            [
                'sl'=>'sl12233',
                'type'=>'address',
                'address'=>'123 Street, New York, USA',
                'email'=>'rabbi1365@outlook.com',
                'contact'=>'+8801940562325',
            ],
            [
                'sl'=>'sl12234',
                'type'=>'socile',
                'socile'=> json_encode(['facebook'=>'https://www.youtube.com/channel/UCd--yn_XU9jNqZPxGO1pVpA','twitter'=>'https://www.youtube.com/channel/UCd--yn_XU9jNqZPxGO1pVpA','youtube'=>'https://www.youtube.com/channel/UCd--yn_XU9jNqZPxGO1pVpA','linkedin'=>'https://www.linkedin.com/in/reja-e-rabbi-sarkar-62103a13a/']),
            ],
            [
                'sl'=>'sl12235',
                'type'=>'cvimages',
                'name'=>'profile.png',
                'link'=>'img/profile.png',
                'upload_link'=>'img/',
            ],
            [
                'sl'=>'sl12236',
                'type'=>'userinfo',
                'name'=>'Kate Winslet',
                'total_project'=>15,
                'total_project_sammary'=>'Web Designer, Web Developer, Front End Developer, Apps Designer, Apps Developer',
                'comments'=>'Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam amet diam ipsum clita labore dolor duo clita.',
            ],
            [
                'sl'=>'sl12237',
                'type'=>'Dashbord',
                'total_project'=>10,
                'total_project_sammary'=>'Total link click',
                'happy_clint'=>10,
                'happy_clint_sammary'=>'Project Complete',
            ],
        ];
        foreach ($dataseed as $row) {
            DB::table('sitelog')->insert($row);
        }
    }
    public function Skills() {
        $dataseed = [
            [
                'sl'=>'sl121sk',
                'name'=>'HTML',
                'percent'=>90
            ],
            [
                'sl'=>'sl122sk',
                'name'=>'CSS',
                'percent'=>90
            ],
            [
                'sl'=>'sl123sk',
                'name'=>'PHP',
                'percent'=>90
            ],
            [
                'sl'=>'sl124sk',
                'name'=>'JavaScript',
                'percent'=>90
            ],
            [
                'sl'=>'sl125sk',
                'name'=>'MySql',
                'percent'=>90
            ],
            [
                'sl'=>'sl126sk',
                'name'=>'WordPress',
                'percent'=>90
            ]
        ];
        foreach ($dataseed as $row) {
            DB::table('skills')->insert($row);
        }
    }
    public function Message() {
        $dataseed = [
            [
                'sl'=>'msg121sl',
                'type'=>'customer',
                'name'=>'david',
                'email'=>'davidd@gmail.com',
                'subject'=>'test message',
                'content'=>'Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum clita dolor duo clita sit.',
                'time'=> date("g i a"),
                'date'=> date("F j, Y"),
            ],
            [
                'sl'=>'msg122sl',
                'type'=>'customer',
                'name'=>'david',
                'email'=>'davidd@gmail.com',
                'subject'=>'test message',
                'content'=>'Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum clita dolor duo clita sit.',
                'time'=> date("g i a"),
                'date'=> date("F j, Y"),
            ],
            [
                'sl'=>'msg123sl',
                'type'=>'customer',
                'name'=>'david',
                'email'=>'davidd@gmail.com',
                'subject'=>'test message',
                'content'=>'Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum clita dolor duo clita sit.',
                'time'=> date("g i a"),
                'date'=> date("F j, Y"),
            ],
        ];
        foreach ($dataseed as $row) {
            DB::table('message')->insert($row);
        }
    }
}
