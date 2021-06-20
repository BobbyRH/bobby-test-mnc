<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beritas')->insert([
                'title'	=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                'description'=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a tortor ornare, volutpat urna non, pulvinar elit. Quisque fringilla nisl odio, in gravida magna ultrices id. Praesent malesuada ante feugiat ornare semper. Interdum et malesuada fames ac ante ipsum primis in faucibus.",
                'content'	=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a tortor ornare, volutpat urna non, pulvinar elit. Quisque fringilla nisl odio, in gravida magna ultrices id. Praesent malesuada ante feugiat ornare semper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse pulvinar ligula sed leo efficitur, sed consequat magna venenatis. Aliquam tincidunt augue et ipsum interdum fermentum vitae eu purus. Nulla congue sit amet magna sed eleifend. Integer iaculis, mauris sed aliquam commodo, turpis magna tempus dolor, iaculis lacinia lacus ante nec tortor. Etiam at cursus leo.",
                'publish_date'	=> "2021-07-10"
        ]);
        DB::table('beritas')->insert([
                'title'	=> "Pellentesque elit tellus, rhoncus sit amet enim eget, pulvinar bibendum est.",
                'description'	=> "Pellentesque elit tellus, rhoncus sit amet enim eget, pulvinar bibendum est. Vivamus euismod ut sapien eget rutrum. Sed blandit dui ac magna commodo blandit.",
                'content'	=> "Pellentesque elit tellus, rhoncus sit amet enim eget, pulvinar bibendum est. Vivamus euismod ut sapien eget rutrum. Sed blandit dui ac magna commodo blandit. Aliquam erat volutpat. Pellentesque non magna vestibulum, accumsan lectus at, hendrerit nunc. Integer non semper dolor, quis feugiat nisi. Cras a mauris at turpis tempor elementum. Praesent ornare, lacus et molestie fringilla, turpis enim gravida elit, sed pharetra leo arcu ultricies nisl. Aliquam eget nulla ut dui pulvinar molestie. Suspendisse potenti. Vestibulum rutrum massa sit amet tortor suscipit, id sagittis elit tempus.",
                'publish_date'	=> "2021-07-12"
        ]);
        DB::table('beritas')->insert([
                'title'	=> "Quisque augue metus, sagittis sed maximus eu, faucibus vel lorem.",
                'description'	=> "Quisque augue metus, sagittis sed maximus eu, faucibus vel lorem. Suspendisse venenatis volutpat porta. Integer vitae venenatis dui, at malesuada nibh. Etiam porttitor odio odio, sed viverra purus pellentesque ut.",
                'content'	=> "Quisque augue metus, sagittis sed maximus eu, faucibus vel lorem. Suspendisse venenatis volutpat porta. Integer vitae venenatis dui, at malesuada nibh. Etiam porttitor odio odio, sed viverra purus pellentesque ut. Quisque fermentum dolor a lacus eleifend, fermentum consequat diam dignissim. Nam at nibh scelerisque, posuere metus ut, feugiat enim. Nam molestie facilisis quam eu auctor. Duis lobortis maximus ex, a malesuada enim tristique in. Morbi ullamcorper, nunc id pharetra vulputate, libero ex interdum nulla, at porta dolor nulla et sapien. Ut in est porta, gravida nibh in, egestas metus. Suspendisse ullamcorper posuere urna, non pharetra ipsum fermentum eget. Aenean eros dui, tempor ullamcorper convallis eu, aliquet nec mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent feugiat ullamcorper felis.",
                'publish_date'	=> "2021-07-15"
        ]);
        DB::table('beritas')->insert([
                'title'	=> "Fusce tincidunt, nulla pharetra finibus cursus, orci libero luctus felis, sit amet commodo ante nunc ut lorem.",
                'description'	=> "Fusce tincidunt, nulla pharetra finibus cursus, orci libero luctus felis, sit amet commodo ante nunc ut lorem. Vestibulum iaculis sodales turpis, eget tempus nisi pharetra quis. ",
                'content'	=> "Fusce tincidunt, nulla pharetra finibus cursus, orci libero luctus felis, sit amet commodo ante nunc ut lorem. Vestibulum iaculis sodales turpis, eget tempus nisi pharetra quis. Nullam commodo in augue nec dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dapibus urna vel dolor aliquam, et ornare dolor euismod. Phasellus vestibulum accumsan pellentesque. Nullam lacus neque, semper quis auctor ac, gravida at nibh. Sed eros diam, viverra ut dolor at, pulvinar tincidunt est. Duis neque mauris, volutpat id commodo id, molestie vel augue. Proin hendrerit elit eget purus porta rhoncus. Aenean orci risus, rutrum vel nisi eget, scelerisque commodo leo. Aliquam ut ultricies purus. Sed non mattis nulla, sit amet vestibulum nibh. Donec sollicitudin egestas augue. Sed id libero ac quam finibus posuere a pretium ipsum.",
                'publish_date'	=> "2021-07-16"
        ]);
        DB::table('beritas')->insert([
                'title'	=> "Maecenas leo purus, cursus aliquet massa sed, tempor convallis dui.",
                'description'	=> "Maecenas leo purus, cursus aliquet massa sed, tempor convallis dui. Praesent a finibus tellus, ut sollicitudin dui. Praesent tristique iaculis turpis, id vulputate nibh ornare sit amet.",
                'content'	=> "Maecenas leo purus, cursus aliquet massa sed, tempor convallis dui. Praesent a finibus tellus, ut sollicitudin dui. Praesent tristique iaculis turpis, id vulputate nibh ornare sit amet. Nulla posuere imperdiet rutrum. In vel arcu metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin ac felis quis ipsum efficitur vehicula. Vestibulum tempor ullamcorper posuere. Pellentesque ligula lectus, hendrerit quis scelerisque mattis, dignissim a dui. Aliquam augue nisl, tempus id libero sed, commodo commodo lorem.",
                'publish_date'	=> "2021-07-18"
        ]);
    }
}
