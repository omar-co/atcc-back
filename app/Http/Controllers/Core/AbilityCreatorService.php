<?php


namespace App\Http\Controllers\Core;


use App\Models\Auth\Ability;
use App\Services\Core\ModelService;
use Illuminate\Support\Collection;

class AbilityCreatorService {

    /**
     * @var ModelService
     */
    private $modelService;

    /**
     * @var Collection
     */
    private $models;

    /**
     * @param ModelService $modelService
     */
    public function __construct(ModelService $modelService) {
        $this->modelService = $modelService;
    }

    /**
     * @return mixed
     */
    public function updateAbilities() {
        return $this->saveNewAbilities();
    }


    /**
     * @return Collection
     */
    private function getModels(): Collection {
        if (!$this->models) {
            $this->models = $this->modelService->getModels(true);
        }

        return $this->models;
    }

    /**
     * @return Collection
     */
    private function createAllAbilities(): Collection {
        $permissions = Ability::getAbilities();
        $models = $this->getModels();

        $result = $models->map(function ($model) use ($permissions) {
            $newAbilities = [];
            foreach ($permissions as $permission) {
                $newAbilities[] = $model . '.' . $permission;
            }

            return $newAbilities;
        });

        return collect(array_merge(...$result));
    }

    /**
     * @return array
     */
    private function getDbAbilities(): array {
        return Ability::all()->pluck('name')->all();
    }


    /**
     * @return Collection
     */
    private function unsavedAbilities(): Collection {
        return $this->createAllAbilities()->diff($this->getDbAbilities())->values();
    }

    /**
     * @return mixed
     */
    private function saveNewAbilities() {
        $unsaved = $this->unsavedAbilities();

        if (!$unsaved) {
            return false;
        }

        $prepared = [];
        foreach ($unsaved as $value) {
            $prepared[] = [
                'name' => $value,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        return Ability::insert($prepared);
    }


}