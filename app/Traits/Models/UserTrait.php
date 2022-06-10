<?php


namespace App\Traits\Models;


use App\Models\Auth\Role;
use App\Models\Ramo;

/**
 * Trait UserTrait
 * @package App\Traits
 *
 *
 * @property integer id
 * @property string name
 * @property string last_name
 * @property string full_name
 * @property string email
 * @property string password
 * @property boolean active
 * @property integer role_id
 * @property integer ramo_id
 * @property Role role
 * @property Ramo ramo
 * @property array abilities
 */
trait UserTrait {

    /**
     * @var string[]|null
     */
    protected $dbAbilities;

    /**
     * @return string
     */
    public function getFullNameAttribute(): string {
        return $this->getName() . ' ' . $this->getLastName();
    }

    /**
     * @param string $name
     */
    public function setNameAttribute(string $name) {
        $this->attributes['name'] = ucfirst($name);
    }

    /**
     * @param string $lastName
     */
    public function setLastNameAttribute(string $lastName) {
        $this->attributes['last_name'] = ucfirst($lastName);
    }

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
     * @return string
     */
    public function getLastName(): string {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     * @return mixed
     */
    public function setLastName(string $last_name) {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string {
        return $this->email;
    }

    /**
     * @param string $email
     * @return mixed
     */
    public function setEmail(string $email) {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * @param string $password
     * @return mixed
     */
    public function setPassword(string $password) {
        $this->password = $password;

        return $this;
    }

    /**
     * @return bool
     */
    public function isActive(): ?bool {
        return $this->active;
    }

    /**
     * @param bool|null $active
     * @return mixed
     */
    public function setActive(?bool $active) {
        $this->active = $active;

        return $this;
    }

    /**
     * @return string
     */
    public function getFullName(): string {
        return $this->full_name;
    }

    /**
     * @return int
     */
    public function getRoleId(): ?int {
        return $this->role_id;
    }

    /**
     * @param int|null $roleId
     * @return mixed
     */
    public function setRoleId(?int $roleId) {
        $this->role_id = $roleId;

        return $this;
    }

    /**
     * @return int
     */
    public function getRamoId(): ?int {
        return $this->ramo_id;
    }

    /**
     * @param int|null $ramoId
     * @return mixed
     */
    public function setRamoId(?int $ramoId) {
        $this->ramo_id = $ramoId;

        return $this;
    }

    /**
     * @return string
     */
    public function getRoleName(): string {
        return $this->role->getName();
    }

    /**
     * @return bool
     */
    public function isAdministrator(): bool {
        return $this->getRoleName() === Role::ROLE_ADMIN;
    }

    /**
     * @return string[]|null
     */
    public function getAbilities() {
        return $this->abilities;
    }

    /**
     * @return Role
     */
    public function getRole(): Role {
        return $this->role;
    }

    /**
     * @return Ramo
     */
    public function getRamo(): Ramo {
        return $this->ramo;
    }

}
