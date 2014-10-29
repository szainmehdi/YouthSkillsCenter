<?php namespace YouthSkillsCenter\Auth;

use Zizaco\Entrust\EntrustRole;

/**
 * YouthSkillsCenter\Auth\Role
 *
 * @property integer $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Config::get('auth.model[] $users
 * @property-read \Illuminate\Database\Eloquent\Collection|\Config::get('entrust::permission[] $perms
 * @property mixed $permissions
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\Role whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\Role whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\Role whereUpdatedAt($value)
 */
class Role extends EntrustRole {

} 