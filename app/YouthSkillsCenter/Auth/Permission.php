<?php namespace YouthSkillsCenter\Auth;

use Zizaco\Entrust\EntrustPermission;

/**
 * YouthSkillsCenter\Auth\Permission
 *
 * @property integer $id
 * @property string $name
 * @property string $display_name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Config::get('entrust::role[] $roles
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\Permission whereId($value) 
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\Permission whereName($value) 
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\Permission whereDisplayName($value) 
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\Permission whereCreatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\YouthSkillsCenter\Auth\Permission whereUpdatedAt($value) 
 */
class Permission extends EntrustPermission {

} 