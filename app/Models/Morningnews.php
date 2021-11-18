<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Morningnews
 *
 * @property int $id
 * @property string $title
 * @property string $news_text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Morningnews newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Morningnews newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Morningnews query()
 * @method static \Illuminate\Database\Eloquent\Builder|Morningnews whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Morningnews whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Morningnews whereNewsText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Morningnews whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Morningnews whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Morningnews extends Model
{
    use HasFactory;

    protected $table = "morning_news";

    protected $fillable = ['title', 'news_text'];
}
