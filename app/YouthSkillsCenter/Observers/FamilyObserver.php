<?php namespace YouthSkillsCenter\Observers;

use YouthSkillsCenter\Families\Family;

class FamilyObserver {
    public function creating(Family $family) {

        // When creating a new family, we need to generate a random, unique
        // access token and assign it to the family.

        $family->access_code = Family::generateAccessCode();
    }
}