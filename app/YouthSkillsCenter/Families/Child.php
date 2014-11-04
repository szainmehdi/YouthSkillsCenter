<?php namespace YouthSkillsCenter\Families;

use App;
use Eloquent;
use Illuminate\Support\MessageBag;
use YouthSkillsCenter\Families\Family;
use YouthSkillsCenter\Observers\ChildObserver;
use YouthSkillsCenter\Validation\HasValidator;
use YouthSkillsCenter\Validation\Validatable;

/**
 * YouthSkillsCenter\Families\Child
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $photo
 * @property string $dob
 * @property integer $weekly_tuition
 * @property integer $family_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read mixed $name
 * @property-read Family $family
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Families\Child whereId($value) 
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Families\Child whereFirstName($value) 
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Families\Child whereLastName($value) 
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Families\Child wherePhoto($value) 
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Families\Child whereDob($value) 
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Families\Child whereWeeklyTuition($value) 
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Families\Child whereFamilyId($value) 
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Families\Child whereCreatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Families\Child whereUpdatedAt($value) 
 */
class Child extends Eloquent implements Validatable {

    use HasValidator;

    /**
     * @var array
     */
    protected $guarded = [];

    public static function boot() {
        parent::boot();

        Child::observe(App::make(ChildObserver::class));
    }

    /*
	|--------------------------------------------------------------------------
	| Attributes
	|--------------------------------------------------------------------------
	*/
    protected $appends = ['name'];

    public function getNameAttribute() {
        return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
    }

    public function getWeeklyTuitionAttribute() {
        return (float)$this->attributes['weekly_tuition']/100;
    }
    public function setWeeklyTuitionAttribute($val) {
        $this->attributes['weekly_tuition'] = (int)($val*100);
    }

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    /**
     * Child belongs to Family
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function family() {
        return $this->belongsTo(Family::class);
    }

    /*
	|--------------------------------------------------------------------------
	| Validation
	|--------------------------------------------------------------------------
	*/

    /**
     * Validation Rules
     *
     * @return array
     */
    public function getValidationRules() {
        return [
            'create' => [
                'first_name' => 'required',
                'last_name' => 'required',
                'weekly_tuition' => 'required|numeric'
            ],
            'update' => [
                'first_name' => 'required',
                'last_name' => 'required',
                'weekly_tuition' => 'required|numeric'
            ]
        ];
    }

    public function customValidation() {
        return function(self $child) {
            $newAmount = (int)$child->weekly_tuition * 100;
            $oldAmount = $child->getOriginal('weekly_tuition');

            if(!is_null($child->family) && $child->family->isSignedUpForAutoPay() && $newAmount != $oldAmount) {
                $child->errors = new MessageBag(['weekly_tuition' => 'Cannot change weekly tuition while the family is signed up for AutoPay.']);
                return false;
            }
            return true;
        };
    }


}