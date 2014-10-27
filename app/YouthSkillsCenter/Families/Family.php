<?php namespace YouthSkillsCenter\Families;

use Eloquent;
use Families\Child;

class Family extends Eloquent {

    protected $guarded = [];

    /**
     * Family has many Child
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children() {
        return $this->hasMany(Child::class);
    }
}