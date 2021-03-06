<?php


namespace App\Services;


use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService {

    /**
     * @param User $user
     * @param UserRequest $request
     * @return User
     */
    public function saveFromRequest(User $user, UserRequest $request): User {
        $user
            ->setName($request->getName())
            ->setLastName($request->getLastName())
            ->setEmail($request->getEmail())
            ->setActive($this->active($request))
            ->setRoleId($request->getRoleId())
            ->setRamoId($request->getRamoId())
        ;

        if ($request->getPassword()) {
            $user->setPassword(Hash::make($request->getPassword()));
        }

        $user->save();

        return $user;
    }

    /**
     * @param UserRequest $request
     * @return bool|null
     */
    private function active(UserRequest $request): ?bool {
        if ($request->has('active')) {
            return $request->isActive();
        }

        return true;
    }

}
