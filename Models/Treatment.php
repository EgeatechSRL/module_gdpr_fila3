<?php

declare(strict_types=1);

namespace Modules\Gdpr\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

/**
 * @property string $id
 * @property int $active
 * @property int $required
 * @property string $name
 * @property string $description
 * @property string|null $documentVersion
 * @property string|null $documentUrl
 * @property int $weight
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 *
 * @method static \Modules\Gdpr\Database\Factories\TreatmentFactory factory($count = null, $state = [])
 * @method static Builder|Treatment newModelQuery()
 * @method static Builder|Treatment newQuery()
 * @method static Builder|Treatment query()
 * @method static Builder|Treatment whereActive($value)
 * @method static Builder|Treatment whereCreatedAt($value)
 * @method static Builder|Treatment whereDescription($value)
 * @method static Builder|Treatment whereDocumentUrl($value)
 * @method static Builder|Treatment whereDocumentVersion($value)
 * @method static Builder|Treatment whereId($value)
 * @method static Builder|Treatment whereName($value)
 * @method static Builder|Treatment whereRequired($value)
 * @method static Builder|Treatment whereUpdatedAt($value)
 * @method static Builder|Treatment whereWeight($value)
 * @method static Builder|Treatment newModelQuery()
 * @method static Builder|Treatment newQuery()
 * @method static Builder|Treatment query()
 * @method static Builder|Treatment whereActive($value)
 * @method static Builder|Treatment whereCreatedAt($value)
 * @method static Builder|Treatment whereDescription($value)
 * @method static Builder|Treatment whereDocumentUrl($value)
 * @method static Builder|Treatment whereDocumentVersion($value)
 * @method static Builder|Treatment whereId($value)
 * @method static Builder|Treatment whereName($value)
 * @method static Builder|Treatment whereRequired($value)
 * @method static Builder|Treatment whereUpdatedAt($value)
 * @method static Builder|Treatment whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereUpdatedBy($value)
 *
 * @property string|null $deleted_by
 *
 * @method static \Modules\Gdpr\Database\Factories\TreatmentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDocumentUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDocumentVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereWeight($value)
 *
 * @mixin \Eloquent
 */
class Treatment extends BaseModel
{
    use HasUuids;

    protected $fillable = [''];

    // protected $table = 'treatment';
    public $incrementing = false;
}
