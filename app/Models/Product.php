<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property int kindId
 * @property int $publisherId
 * @property string $name
 * @property string $price
 * @property int $stock
 * @property int $discountRate
 * @property int $isKediKumu
 * @property int $isKediMamasi
 * @property int $isKediEsya
 * @property string $descriptionHead
 * @property string $description
 * @property string $systemRequirementsText
 * @property string $imagesPaths
 * @property string $coverImage
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescriptionHead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDiscountRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereIsKediKumu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereIsKediMamasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereIsKediEsya($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePhotoUrls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePublisherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSystemRequirementsText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'kindId',
        'publisherId',
        'name',
        'price',
        'stock',
        'discountRate',
        'isKediKumu',
        'isKediMamasi',
        'isKediEsya',
        'descriptionHead',
        'descriptionText',
        'systemRequirementsText',
        'coverImage',
        'imagesPaths',
    ];

    public function publisherDetail()
    {
        return $this->hasOne('App\Models\Publisher', 'id', 'publisherId');
    }

    public function kindDetail()
    {
        return $this->hasOne('App\Models\Kind', 'id', 'kindId');
    }
}
