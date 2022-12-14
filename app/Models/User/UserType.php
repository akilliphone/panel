<?php

namespace App\Models\User;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * App\Models\UserType
 *
 * @property int $type_id
 * @property string $code
 * @property string $name
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Role[] $roles
 * @property-read int|null $roles_count
 * @property-read Collection|User[] $users
 * @property-read int|null $users_count
 * @method static Builder|UserType newModelQuery()
 * @method static Builder|UserType newQuery()
 * @method static Builder|UserType query()
 * @method static Builder|UserType whereCode($value)
 * @method static Builder|UserType whereCreatedAt($value)
 * @method static Builder|UserType whereName($value)
 * @method static Builder|UserType whereStatus($value)
 * @method static Builder|UserType whereTypeId($value)
 * @method static Builder|UserType whereUpdatedAt($value)
 * @mixin Eloquent
 */
class UserType extends Model
{
    use HasFactory;

    /**
     * Attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'name',
        'status'
    ];

    /**
     * Model table name
     *
     * @var string
     */
    protected $table = 'user_types';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'status' => 1
    ];

    /**
     * Primary key that should be using
     *
     * @var string
     */
    protected $primaryKey = 'type_id';

    /**
     * Relationships to users
     *
     * @return HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * Relationships to roles
     *
     * @return HasMany
     */
    public function roles(): HasMany
    {
        return $this->hasMany(Role::class);
    }


}
