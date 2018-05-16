<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $settings = [
          [
              'slug'  => 'title',
              'value' => 'Oasis College of Technology'
          ],
          [
              'slug'  => 'description',
              'value' => 'Oasis College of Technology is a technology institution in Eldoret, training in the fields of Information Technology, Information Science, Agriculture among other courses.'
          ],
          [
              'slug'  => 'address',
              'value' => 'Eldoret, Nandi RD',
          ],
          [
              'slug'  => 'phone',
              'value' => '+254724871111',
          ],
          [
              'slug'  => 'email',
              'value' => 'info@oct.com'
          ],
          [
              'slug'  => 'postbox',
              'value' => ''
          ],
          [
              'slug'  => 'facebook',
              'value' => 'https://www.facebook.com'
          ],
          [
              'slug'  => 'twitter',
              'value' => 'https://www.twitter.com'
          ],
          [
              'slug'  => 'google_plus',
              'value' => 'https://www.google.com'
          ],
          [
              'slug'  => 'logo',
              'value' => '/img/logo.png'
          ],
          [
              'slug'  => 'notification-emails',
              'value' => 'admin@oct.com'
          ],
          [
              'slug'  => 'placeholder',
              'value' => '/img/logo.jpg'
          ]
      ];

      DB::table('settings')->truncate();

      DB::table('settings')->insert($settings);
    }
}
