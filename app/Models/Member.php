<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    public static function getFirstMemberData()
    {
        $member = self::first();
        if ($member) {
            return [
                'name' => $member->name,
                'age' => $member->age,
                'address' => $member->address
            ];
        }
        return null;
    }
}
