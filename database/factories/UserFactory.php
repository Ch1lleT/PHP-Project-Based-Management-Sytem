<?php

namespace Database\Factories;

use App\Models\Have_Role;
use App\Utilities\UUID;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = User::class;

    public function admin(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => 'admin'
            ];
        });
    }

    public function powerUser(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => 'powerUser'
            ];
        });
    }

    public function supervisor(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => 'supervisor'
            ];
        });
    }

    public function executive(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => 'executive'
            ];
        });
    }

    public function editor(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => 'user'
            ];
        });
    }

    public function randRole(): Factory
    {
        return $this->state(function (array $attributes) {
            $Roles = ['admin', 'powerUser', 'supervisor', 'executive', 'user'];
            return [
                'role' => $Roles[mt_rand(0, count($Roles) - 1)]
            ];
        });
    }


    public function definition(): array
    {
        $genders = ['ชาย', 'หญิง', 'ไม่ระบุ'];
        $prefixes = ['นาย', 'นาง', 'นางสาว'];
        return [
            'user_id' => UUID::uuid(User::class),
            // 'email' => fake()->unique()->safeEmail(),
            'prefix' => $prefixes[mt_rand(0, count($prefixes) - 1)],
            'username' => fake()->unique()->userName(),
            'password' => Hash::make('test'),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            // 'citizen_id' => strval(fake()->randomNumber(8)).strval(fake()->randomNumber(5)),
            // 'position' => 'tester',
            'gender' => $genders[mt_rand(0, count($genders) - 1)],
            // 'birth_date' => Carbon::now(),
            'card_code' => strval(fake()->randomNumber(5)),
            // 'phone' => '0'.strval(fake()->randomNumber(9)),
            // 'address' => 'Bangkok',
            'role' => 'powerUser',
            'is_active' => true
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
}
