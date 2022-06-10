<?php


namespace App\Traits\Models\Auth;

use App\Models\Auth\Ability;
use App\Models\Auth\Role;

/**
 * Trait AbilityTrait
 * @package App\Traits\Models\Auth
 *
 * @property integer id
 * @property string name
 * @property Role[] roles
 */
trait AbilityTrait {

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
     * @return Role[]
     */
    public function getRoles(): array {
        return $this->roles;
    }
}