<?php namespace YouthSkillsCenter\Families;

use Eloquent;
use Faker\Factory as Faker;
use Faker\Provider\Base;
use YouthSkillsCenter\Observers\FamilyObserver;
use YouthSkillsCenter\Validation\HasValidator;

/**
 * YouthSkillsCenter\Families\Family
 *
 * @property integer $id
 * @property string $family_key
 * @property string $nickname
 * @property string $access_code
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Child::class[] $children
 * @property-read mixed $key
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Families\Family whereId($value) 
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Families\Family whereFamilyKey($value) 
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Families\Family whereNickname($value) 
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Families\Family whereAccessCode($value) 
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Families\Family whereCreatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Families\Family whereUpdatedAt($value) 
 */
class Family extends Eloquent {

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        Family::observe(new FamilyObserver());
    }

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    /**
     * Family has many Child
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children() {
        return $this->hasMany(Child::class);
    }

    /*
	|--------------------------------------------------------------------------
	| Attributes
	|--------------------------------------------------------------------------
	*/

    protected $appends = ['key'];

    public function getKeyAttribute()
    {
        return $this->attributes['family_key'];
    }

    /*
	|--------------------------------------------------------------------------
	| Validation
	|--------------------------------------------------------------------------
	*/

    use HasValidator;

    /**
     * Validation Rules
     *
     * @return array
     */
    public function getValidationRules() {
        return [
            'create' => [
                'family_key' => 'required|min:4|unique:families',
            ],
            'update' => [
                'family_key' => "required|min:4|unique:families,family_key,{$this->id}",
            ]
        ];
    }



    /*
	|--------------------------------------------------------------------------
	| Public Functions
	|--------------------------------------------------------------------------
	*/

    /**
     * Generate a unique 9-digit access code.
     *
     * @return int
     */
    public static function generateAccessCode() {
        $faker = Faker::create();
        $faker->addProvider(new Base($faker));
        $access_code = $faker->randomNumber(9, true);

        if(!Family::accessCodeIsUnique($access_code))
            return Family::generateAccessCode();

        return $access_code;
    }

    /**
     * Verify uniqueness of the access code.
     *
     * @param $access_code
     *
     * @return bool
     */
    public static function accessCodeIsUnique($access_code) {
        return Family::whereAccessCode($access_code)->count() == 0;
    }

}