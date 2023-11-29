<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([

            'is_default_home' => 1,
            'title' => 'Home',
            'slug' => 'home',
            'content' => '<div>&nbsp;Lorem ipsum dolor sit amet, consectetur afdipiscing elit. Nunc laoreet, ante at egestas suscipit, sem lectus tincidunt libero, vel rhoncus felis nibh ut est. Nullam luctus elit ipsum, et rutrum dolor blandit commodo. Curabitur interdum tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla in metus et varius. Maecenas nulla lorem, posuere id mattis sit amet, pulvinar ullamcorper tellus. Suspendisse gravida auctor dui. Maecenas interdum vitae quam sed vulputate. Vestibulum laoreet neque vel tempor laoreet.&nbsp;</div><div>&nbsp;Quisque et finibus libero. Maecenas porta dui leo, id porta ex dignissim et. Suspendisse est tellus, iaculis id placerat sed, placerat facilisis ipsum. Pellentesque quis sem tempor, varius eros at, luctus magna. Fusce consectetur sagittis congue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis mattis ligula diam. Fusce viverra libero sem, a vehicula libero porta quis. Cras pellentesque nisi non sapien rutrum, in lobortis tortor porttitor. Donec eros justo, viverra nec diam ac, cursus luctus mi.&nbsp;</div><div>&nbsp;Vestibulum ac metus ornare, rhoncus sem sed, luctus metus. Fusce ante mauris, mollis in bibendum eleifend, consequat ut ex. Praesent vitae sodales lectus. Nullam faucibus nisl vitae nisl condimentum gravida. Quisque blandit purus lacus, a ultricies tellus tincidunt ultrices. Aenean vitae ullamcorper orci. Vivamus sed vulputate nibh. Pellentesque et dictum nibh. In tempus sodales erat, lacinia blandit mauris consequat in. Vestibulum imperdiet arcu sed hendrerit malesuada. In eu eros venenatis, tempor dui sed, malesuada risus. Sed at est ullamcorper, pretium lacus non, tincidunt massa. Duis eget placerat leo. Morbi vehicula lacinia purus. Nunc aliquet convallis felis, quis interdum lectus vestibulum a.&nbsp;</div><div>&nbsp;Phasellus eu cursus nulla. Nunc vel orci sit amet risus sodales pellentesque. Suspendisse ut tristique purus. Duis et lacinia risus, at facilisis quam. Morbi eu nisi finibus erat cursus tincidunt. Sed mi felis, viverra pretium aliquet eu, faucibus sit amet velit. Mauris ornare turpis ac mi ultrices, sit amet pharetra massa fermentum. Nunc quis metus semper neque mattis vestibulum eget ut urna. Phasellus bibendum, neque et laoreet convallis, justo nisi sollicitudin sapien, nec consequat quam ipsum non orci. Fusce at consequat ipsum, a ornare est. Nam arcu lacus, sagittis eu porttitor at, pharetra vitae turpis. Quisque sapien orci, consectetur ac elementum sit amet, commodo eget erat. Aenean finibus lacus ac velit scelerisque vestibulum. Praesent vestibulum facilisis eros, a volutpat est consequat vel. Ut sit amet rhoncus nisl.&nbsp;</div>'
        ]);
        Page::create([
            'title' => 'About',
            'slug' => 'about',
            'content' => '<div>&nbsp;Lorem ipsum dolor sit amet, consectetur afdipiscing elit. Nunc laoreet, ante at egestas suscipit, sem lectus tincidunt libero, vel rhoncus felis nibh ut est. Nullam luctus elit ipsum, et rutrum dolor blandit commodo. Curabitur interdum tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla in metus et varius. Maecenas nulla lorem, posuere id mattis sit amet, pulvinar ullamcorper tellus. Suspendisse gravida auctor dui. Maecenas interdum vitae quam sed vulputate. Vestibulum laoreet neque vel tempor laoreet.&nbsp;</div><div>&nbsp;Quisque et finibus libero. Maecenas porta dui leo, id porta ex dignissim et. Suspendisse est tellus, iaculis id placerat sed, placerat facilisis ipsum. Pellentesque quis sem tempor, varius eros at, luctus magna. Fusce consectetur sagittis congue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis mattis ligula diam. Fusce viverra libero sem, a vehicula libero porta quis. Cras pellentesque nisi non sapien rutrum, in lobortis tortor porttitor. Donec eros justo, viverra nec diam ac, cursus luctus mi.&nbsp;</div><div>&nbsp;Vestibulum ac metus ornare, rhoncus sem sed, luctus metus. Fusce ante mauris, mollis in bibendum eleifend, consequat ut ex. Praesent vitae sodales lectus. Nullam faucibus nisl vitae nisl condimentum gravida. Quisque blandit purus lacus, a ultricies tellus tincidunt ultrices. Aenean vitae ullamcorper orci. Vivamus sed vulputate nibh. Pellentesque et dictum nibh. In tempus sodales erat, lacinia blandit mauris consequat in. Vestibulum imperdiet arcu sed hendrerit malesuada. In eu eros venenatis, tempor dui sed, malesuada risus. Sed at est ullamcorper, pretium lacus non, tincidunt massa. Duis eget placerat leo. Morbi vehicula lacinia purus. Nunc aliquet convallis felis, quis interdum lectus vestibulum a.&nbsp;</div><div>&nbsp;Phasellus eu cursus nulla. Nunc vel orci sit amet risus sodales pellentesque. Suspendisse ut tristique purus. Duis et lacinia risus, at facilisis quam. Morbi eu nisi finibus erat cursus tincidunt. Sed mi felis, viverra pretium aliquet eu, faucibus sit amet velit. Mauris ornare turpis ac mi ultrices, sit amet pharetra massa fermentum. Nunc quis metus semper neque mattis vestibulum eget ut urna. Phasellus bibendum, neque et laoreet convallis, justo nisi sollicitudin sapien, nec consequat quam ipsum non orci. Fusce at consequat ipsum, a ornare est. Nam arcu lacus, sagittis eu porttitor at, pharetra vitae turpis. Quisque sapien orci, consectetur ac elementum sit amet, commodo eget erat. Aenean finibus lacus ac velit scelerisque vestibulum. Praesent vestibulum facilisis eros, a volutpat est consequat vel. Ut sit amet rhoncus nisl.&nbsp;</div>'
        ]);
        Page::create([
            'is_default_404' => 1,
            'title' => 'Not Found',
            'slug' => 'not-found',
            'content' => '<div>404 error - not found</div>'
        ]);
        Page::create([
            'title' => 'Contact',
            'slug' => 'contact',
            'content' => '<div>&nbsp;Lorem ipsum dolor sit amet, consectetur afdipiscing elit. Nunc laoreet, ante at egestas suscipit, sem lectus tincidunt libero, vel rhoncus felis nibh ut est. Nullam luctus elit ipsum, et rutrum dolor blandit commodo. Curabitur interdum tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla in metus et varius. Maecenas nulla lorem, posuere id mattis sit amet, pulvinar ullamcorper tellus. Suspendisse gravida auctor dui. Maecenas interdum vitae quam sed vulputate. Vestibulum laoreet neque vel tempor laoreet.&nbsp;</div><div>&nbsp;Quisque et finibus libero. Maecenas porta dui leo, id porta ex dignissim et. Suspendisse est tellus, iaculis id placerat sed, placerat facilisis ipsum. Pellentesque quis sem tempor, varius eros at, luctus magna. Fusce consectetur sagittis congue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis mattis ligula diam. Fusce viverra libero sem, a vehicula libero porta quis. Cras pellentesque nisi non sapien rutrum, in lobortis tortor porttitor. Donec eros justo, viverra nec diam ac, cursus luctus mi.&nbsp;</div><div>&nbsp;Vestibulum ac metus ornare, rhoncus sem sed, luctus metus. Fusce ante mauris, mollis in bibendum eleifend, consequat ut ex. Praesent vitae sodales lectus. Nullam faucibus nisl vitae nisl condimentum gravida. Quisque blandit purus lacus, a ultricies tellus tincidunt ultrices. Aenean vitae ullamcorper orci. Vivamus sed vulputate nibh. Pellentesque et dictum nibh. In tempus sodales erat, lacinia blandit mauris consequat in. Vestibulum imperdiet arcu sed hendrerit malesuada. In eu eros venenatis, tempor dui sed, malesuada risus. Sed at est ullamcorper, pretium lacus non, tincidunt massa. Duis eget placerat leo. Morbi vehicula lacinia purus. Nunc aliquet convallis felis, quis interdum lectus vestibulum a.&nbsp;</div><div>&nbsp;Phasellus eu cursus nulla. Nunc vel orci sit amet risus sodales pellentesque. Suspendisse ut tristique purus. Duis et lacinia risus, at facilisis quam. Morbi eu nisi finibus erat cursus tincidunt. Sed mi felis, viverra pretium aliquet eu, faucibus sit amet velit. Mauris ornare turpis ac mi ultrices, sit amet pharetra massa fermentum. Nunc quis metus semper neque mattis vestibulum eget ut urna. Phasellus bibendum, neque et laoreet convallis, justo nisi sollicitudin sapien, nec consequat quam ipsum non orci. Fusce at consequat ipsum, a ornare est. Nam arcu lacus, sagittis eu porttitor at, pharetra vitae turpis. Quisque sapien orci, consectetur ac elementum sit amet, commodo eget erat. Aenean finibus lacus ac velit scelerisque vestibulum. Praesent vestibulum facilisis eros, a volutpat est consequat vel. Ut sit amet rhoncus nisl.&nbsp;</div>'
        ]);
    }
}