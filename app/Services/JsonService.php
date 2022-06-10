<?php

namespace App\Services;

use App\Models\DownloadTracking;
use App\Models\Json;
use App\Models\User;
use Illuminate\Http\Request;

class JsonService {

    private $dt;

    public function saveJson(Request $request) {
        return Json::updateOrCreate(
            ['content' => json_encode($request->all())],
            ['download_tracking_id' => $this->getDT()->id]
        );
    }

    /**
     * @return DownloadTracking
     */
    public function getDT(): DownloadTracking {
        if (!$this->dt) {
            /** @var User $user */
            $user = auth()->user();

            $this->dt = $this->hasDT($user);

            if (!$this->dt ) {
                $this->dt = DownloadTracking::create([
                    'user_id' => $user->getId(),
                ]);
            }
        }

        return $this->dt;
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function hasDT(User $user) {
        return DownloadTracking::where('user_id', $user->getId())
            ->where('active', true)
            ->get()
            ->first();
    }

}