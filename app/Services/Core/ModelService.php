<?php

namespace App\Services\Core;

use Illuminate\Container\Container;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;


class ModelService {

    /**
     * @param bool $returnAsCollection
     * @return Collection
     */
    public function getModels(bool $returnAsCollection = false): Collection {
        $models = collect(File::allFiles(app_path()))
            ->map(function ($item) {
                $path = $item->getRelativePathName();
                return sprintf('\%s%s',
                    Container::getInstance()->getNamespace(),
                    strtr(substr($path, 0, strrpos($path, '.')), '/', '\\'));
            })
            ->filter(function ($class) {
                $valid = false;

                if (class_exists($class)) {
                    $reflection = new \ReflectionClass($class);
                    $valid = $reflection->isSubclassOf(Model::class) &&
                        !$reflection->isAbstract();
                }

                return $valid;
            })
            ->map(function ($item) {
                $nameArr = explode('\\', $item);
                return lcfirst(end($nameArr));
            });

        if ($returnAsCollection) {
            return $models;
        }

        return $models->values();
    }

}