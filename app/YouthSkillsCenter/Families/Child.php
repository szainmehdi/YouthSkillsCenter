<?php namespace YouthSkillsCenter\Families;

use Eloquent;
use YouthSkillsCenter\Validation\HasValidator;

class Child extends Eloquent {

    /**
     * @var array
     */
    protected $guarded = [];

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

    use HasValidator;

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
                'weekly_tuition' => 'required|numeric|between:1000,50000'
            ],
            'update' => [
                'first_name' => 'required',
                'last_name' => 'required',
                'weekly_tuition' => 'required|numeric|between:1000,50000'
            ]
        ];
    }

}