<?php
namespace App\Services;

use Illuminate\Support\Facades\Storage;
use App\Models\User;

class UserService
{
    public function getUserWithImagePath($userId)
    {
        $user = User::findOrFail($userId);
        $userImagePath = Storage::url('avatars/' . $user->id . '/avatar.jpg');

        return compact('user', 'userImagePath');
    }
}