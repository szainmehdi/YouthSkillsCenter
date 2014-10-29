<?php namespace YouthSkillsCenter\Validation;

use Closure;

interface Validatable {

    /**
     * Checks if the current user is valid using the ConfideUserValidator.
     *
     * @return bool
     */
    public function isValid();

    /**
     * Save the model. If invalid, throw an exception.
     *
     * @param $options
     *
     * @return bool
     * @throws \YouthSkillsCenter\Exceptions\ValidationException
     */
    public function saveOrFail($options);

    /**
     * Save the model without validating.
     *
     * @param array $options
     *
     * @return bool
     */
    public function forceSave(array $options = []);

    /**
     * Returns a MessageBag object that store any error
     * regarding the user validation.
     *
     * @return \Illuminate\Support\MessageBag
     */
    public function errors();

    /**
     * Validation Rules
     *
     * @return array
     */
    public function getValidationRules();

    /**
     * Add custom validation to the model.
     *
     * @return Closure
     */
    public function customValidation();
} 