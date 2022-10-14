<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;

/**
 * App\Models\HasRoles
 *
 * @property int $role_id
 * @property string $model_type
 * @property int $model_id
 * @property-read Role|null $roles
 * @method static \Illuminate\Database\Eloquent\Builder|HasRoles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HasRoles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HasRoles query()
 * @method static \Illuminate\Database\Eloquent\Builder|HasRoles whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HasRoles whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HasRoles whereRoleId($value)
 * @mixin \Eloquent
 */
class HasRoles extends Model
{
    
/*
|--------------------------------------------------------------------------
| Rumah Dev
| Backend Developer : ibudirsan
| Email             : ibnudirsan@gmail.com
| Copyright © RumahDev 2022
|--------------------------------------------------------------------------
*/
    use HasFactory;
    protected $table = 'model_has_roles';

    public function roles() {
        return $this->hasOne(Role::class,'id','role_id');
    }
}
