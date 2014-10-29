<?php namespace YouthSkillsCenter\Auth;

use Eloquent;
use Illuminate\Auth\UserInterface;
use YouthSkillsCenter\Exceptions\ValidationException;
use YouthSkillsCenter\Families\Family;
use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;
use Zizaco\Entrust\HasRole;
use Laravel\Cashier\BillableTrait;
use Laravel\Cashier\BillableInterface;

/**
 * YouthSkillsCenter\Auth\User
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property string $password
 * @property string $confirmation_code
 * @property string $remember_token
 * @property boolean $confirmed
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Config::get('entrust::role[] $roles
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User whereConfirmationCode($value)
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User whereConfirmed($value)
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User whereUpdatedAt($value)
 * @property integer $family_id
 * @property-read mixed $name
 * @property-read \Family::class $family
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User whereFamilyId($value)
 */
class User extends Eloquent implements ConfideUserInterface, BillableInterface {
    use ConfideUser;
    use BillableTrait;
    use HasRole;

    /*
	|--------------------------------------------------------------------------
	| Attributes
	|--------------------------------------------------------------------------
	*/
    protected $appends = ['name'];
    protected $dates = ['trial_ends_at', 'subscription_ends_at'];

    public function getNameAttribute() {
        return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
    }


    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    /**
     * User belongs to Family
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function family() {
        return $this->belongsTo(Family::class);
    }

}
