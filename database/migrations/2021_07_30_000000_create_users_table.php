<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->boolean('active')->default(true);
            $table->foreignId('role_id')->default(1)->constrained();
            $table->foreignId('ramo_id')->nullable()->constrained();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        $this->createUsers();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }

    private function createUsers() {
        DB::table('users')->insert(
            [
                [
                    'name' => 'ramo',
                    'last_name' => '1',
                    'email' => '1',
                    'password' => Hash::make('passramo1'),
                    'ramo_id' => 1,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '2',
                    'email' => '2',
                    'password' => Hash::make('passramo2'),
                    'ramo_id' => 2,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '3',
                    'email' => '3',
                    'password' => Hash::make('passramo3'),
                    'ramo_id' => 3,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '4',
                    'email' => '4',
                    'password' => Hash::make('passramo4'),
                    'ramo_id' => 4,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '5',
                    'email' => '5',
                    'password' => Hash::make('passramo5'),
                    'ramo_id' => 5,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '6',
                    'email' => '6',
                    'password' => Hash::make('passramo6'),
                    'ramo_id' => 6,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '7',
                    'email' => '7',
                    'password' => Hash::make('passramo7'),
                    'ramo_id' => 7,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '8',
                    'email' => '8',
                    'password' => Hash::make('passramo8'),
                    'ramo_id' => 8,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '9',
                    'email' => '9',
                    'password' => Hash::make('passramo9'),
                    'ramo_id' => 9,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '10',
                    'email' => '10',
                    'password' => Hash::make('passramo10'),
                    'ramo_id' => 10,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '11',
                    'email' => '11',
                    'password' => Hash::make('passramo11'),
                    'ramo_id' => 11,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '12',
                    'email' => '12',
                    'password' => Hash::make('passramo12'),
                    'ramo_id' => 12,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '13',
                    'email' => '13',
                    'password' => Hash::make('passramo13'),
                    'ramo_id' => 13,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '14',
                    'email' => '14',
                    'password' => Hash::make('passramo14'),
                    'ramo_id' => 14,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '15',
                    'email' => '15',
                    'password' => Hash::make('passramo15'),
                    'ramo_id' => 15,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '16',
                    'email' => '16',
                    'password' => Hash::make('passramo16'),
                    'ramo_id' => 16,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '18',
                    'email' => '18',
                    'password' => Hash::make('passramo18'),
                    'ramo_id' => 18,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '19',
                    'email' => '19',
                    'password' => Hash::make('passramo19'),
                    'ramo_id' => 19,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '20',
                    'email' => '20',
                    'password' => Hash::make('passramo20'),
                    'ramo_id' => 20,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '21',
                    'email' => '21',
                    'password' => Hash::make('passramo21'),
                    'ramo_id' => 21,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '22',
                    'email' => '22',
                    'password' => Hash::make('passramo22'),
                    'ramo_id' => 22,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '23',
                    'email' => '23',
                    'password' => Hash::make('passramo23'),
                    'ramo_id' => 23,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '24',
                    'email' => '24',
                    'password' => Hash::make('passramo24'),
                    'ramo_id' => 24,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '25',
                    'email' => '25',
                    'password' => Hash::make('passramo25'),
                    'ramo_id' => 25,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '27',
                    'email' => '27',
                    'password' => Hash::make('passramo27'),
                    'ramo_id' => 27,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '28',
                    'email' => '28',
                    'password' => Hash::make('passramo28'),
                    'ramo_id' => 28,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '29',
                    'email' => '29',
                    'password' => Hash::make('passramo29'),
                    'ramo_id' => 29,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '30',
                    'email' => '30',
                    'password' => Hash::make('passramo30'),
                    'ramo_id' => 30,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '31',
                    'email' => '31',
                    'password' => Hash::make('passramo31'),
                    'ramo_id' => 31,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '32',
                    'email' => '32',
                    'password' => Hash::make('passramo32'),
                    'ramo_id' => 32,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '33',
                    'email' => '33',
                    'password' => Hash::make('passramo33'),
                    'ramo_id' => 33,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '34',
                    'email' => '34',
                    'password' => Hash::make('passramo34'),
                    'ramo_id' => 34,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '35',
                    'email' => '35',
                    'password' => Hash::make('passramo35'),
                    'ramo_id' => 35,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '36',
                    'email' => '36',
                    'password' => Hash::make('passramo36'),
                    'ramo_id' => 36,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '37',
                    'email' => '37',
                    'password' => Hash::make('passramo37'),
                    'ramo_id' => 37,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '38',
                    'email' => '38',
                    'password' => Hash::make('passramo38'),
                    'ramo_id' => 38,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '40',
                    'email' => '40',
                    'password' => Hash::make('passramo40'),
                    'ramo_id' => 40,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '41',
                    'email' => '41',
                    'password' => Hash::make('passramo41'),
                    'ramo_id' => 41,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '43',
                    'email' => '43',
                    'password' => Hash::make('passramo43'),
                    'ramo_id' => 43,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '44',
                    'email' => '44',
                    'password' => Hash::make('passramo44'),
                    'ramo_id' => 44,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '45',
                    'email' => '45',
                    'password' => Hash::make('passramo45'),
                    'ramo_id' => 45,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '46',
                    'email' => '46',
                    'password' => Hash::make('passramo46'),
                    'ramo_id' => 46,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '47',
                    'email' => '47',
                    'password' => Hash::make('passramo47'),
                    'ramo_id' => 47,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '48',
                    'email' => '48',
                    'password' => Hash::make('passramo48'),
                    'ramo_id' => 48,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '49',
                    'email' => '49',
                    'password' => Hash::make('passramo49'),
                    'ramo_id' => 49,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '50',
                    'email' => '50',
                    'password' => Hash::make('passramo50'),
                    'ramo_id' => 50,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '51',
                    'email' => '51',
                    'password' => Hash::make('passramo51'),
                    'ramo_id' => 51,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '52',
                    'email' => '52',
                    'password' => Hash::make('passramo52'),
                    'ramo_id' => 52,
                ],
                [
                    'name' => 'ramo',
                    'last_name' => '53',
                    'email' => '53',
                    'password' => Hash::make('passramo53'),
                    'ramo_id' => 53,
                ],
                [
                    'name' => 'admin',
                    'last_name' => 'admin',
                    'email' => 'admin',
                    'password' => Hash::make('password'),
                    'role_id' => 2,
                ]
            ]
        );
    }



}
