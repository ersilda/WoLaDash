<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;

/**
 * @property int               $id
 * @property string            $slug
 * @property string            $name
 * @property string|null       $description
 * @property boolean           $status
 * @property array|null        $permissions
 * @property Carbon|null       $created_at
 * @property Carbon|null       $updated_at
 * @property Carbon|null       $deleted_at
 * @property Collection|User[] $users
 *
 * @mixin RoleQueryBuilder
 */
class Role extends Model
{
    use HasFactory;
    use SoftDeletes;

    public static string $morph_key = 'role';

    protected $table = 'roles';

    protected $guarded = ['id'];

    protected $casts = [
        'permissions' => 'json',
        'status' => 'boolean',
    ];

    /**
     * Is The ID of the corresponding role in the database
     */
    const ADMINISTRATOR = 1;
    const USER          = 2;



    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'role_id', 'id');
    }
}
