<?php namespace YouthSkillsCenter\Observers;

use YouthSkillsCenter\Billing\BillingInterface;
use YouthSkillsCenter\Families\Child;

class ChildObserver {

    /**
     * @var BillingInterface
     */
    private $billing;

    public function __construct(BillingInterface $billing) {

        $this->billing = $billing;
    }

    public function saving(Child $child) {
//        $newAmount = (int)$child->weekly_tuition * 100;
//        $oldAmount = $child->getOriginal('weekly_tuition');
//
//        if($newAmount != $oldAmount && $child->family->isSignedUpForAutoPay()) {
//
//            return false;
//
//        }
//        return true;
    }
}