<?php


namespace App\Traits\Models\Auth;

use App\Models\Auth\Ability;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

/**
 * Trait RoleTrait
 * @package App\Traits\Models
 *
 *
 * @property integer id
 * @property string name
 * @property User[] users
 * @property Collection abilities
 */
trait RoleTrait {

    /**
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function setName(string $name) {
        $this->name = $name;

        return $this;
    }

    /**
     * @return User[]
     */
    public function getUsers(): array {
        return $this->users;
    }

    /**
     * @return Collection|array
     */
    public function getAbilities() {
        return $this->abilities;
    }
}