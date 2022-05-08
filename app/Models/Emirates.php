<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Emirates
 *
 * @property int $id
 * @property string $name
 * @property string|null $banner
 * @property string|null $icon
 * @property int $featured
 * @property int $top
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Emirates newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Emirates newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Emirates query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Emirates whereBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Emirates whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Emirates whereFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Emirates whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Emirates whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Emirates whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Emirates whereTop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Emirates whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class Emirates extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('alphabetical', function (Builder $builder) {
            $builder->orderBy('name', 'asc');
        });
    }

   
}
