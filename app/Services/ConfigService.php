<?php


namespace App\Services;


use App\Http\Requests\ConfigRequest;
use App\Models\Config;
use Illuminate\Database\Eloquent\Collection;

class ConfigService {

    /**
     * @param Config $config
     * @param ConfigRequest $request
     * @return Config
     */
    public function saveFromRequest(Config $config, ConfigRequest $request) {
        return $this->update($this->getCalendar(), $request);
    }

    private function getCalendar() {
        return Config::whereIn('key', ['ejercicio', 'corte'])->get();
    }

    private function update(Collection $collection, ConfigRequest $request) {
        $ejercicio = $collection->where('key', 'ejercicio')->first();

        $ejercicio->value = $request->ejercicio;
        $ejercicio->save();

        $corte = $collection->where('key', 'corte')->first();

        $corte->value = $request->corte;
        $corte->save();


        return $corte;
    }

}
