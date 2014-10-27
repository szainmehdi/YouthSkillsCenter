<?php namespace YouthSkillsCenter\Auth;

use Eloquent;
use Illuminate\Auth\UserInterface;
use YouthSkillsCenter\Exceptions\ValidationException;
use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;

/**
 * YouthSkillsCenter\Auth\User
 *
 * @property integer $id
 * @property string $email
 * @property string $password
 * @property string $confirmation_code
 * @property string $remember_token
 * @property boolean $confirmed
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User whereConfirmationCode($value)
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User whereConfirmed($value)
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User whereUpdatedAt($value)
 * @property string $first_name
 * @property string $last_name
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\User whereLastName($value)
 */
class User extends Eloquent implements ConfideUserInterface {
    use ConfideUser;



}
