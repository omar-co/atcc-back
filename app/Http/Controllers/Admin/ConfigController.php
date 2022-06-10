<?php

namespace App\Http\Controllers\Admin;

use \App\Http\Controllers\Core\ControllerAbstract as CoreController;
use App\Http\Requests\ConfigRequest;
use App\Http\Resources\ConfigResource;
use App\Models\Config;
use App\Services\ConfigService ;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

class ConfigController extends CoreController
{
    /**
     * ConfigController constructor.
     * @param ConfigService $configService
     */
    public function __construct(ConfigService $configService) {
        $this->modelService = $configService;
        $this->modelClass = Config::class;
        $this->modelResource = ConfigResource::class;
    }

    /**
     * @param Config $config
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    public function show(Config $config) {
        return $this->get($config);
    }

    /**
     * @param ConfigRequest $request
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    public function store(ConfigRequest $request) {
        return $this->create($request);
    }

    /**
     * @param Config $config
     * @param ConfigRequest $request
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    public function update(Config $config, ConfigRequest $request) {
        return $this->edit($config, $request);
    }

}
