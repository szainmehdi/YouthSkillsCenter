<?php namespace YouthSkillsCenter\Validation;

use Validator;
use YouthSkillsCenter\Exceptions\ValidationException;

trait HasValidator {

    /**
     * A MessageBag object that store any error regarding the confide User.
     *
     * @var \Illuminate\Support\MessageBag
     */
    public $errors;

    /**
     * If true, saving the model with invalid data will throw an exception.
     * Otherwise, the save method will return false.
     *
     * @var bool
     */
    public $throwValidationExceptions = false;

    /**
     * Checks if the current user is valid using the ConfideUserValidator.
     *
     * @return bool
     */
    public function isValid()
    {
        // If the model already exists in the database we call validate with
        // the update ruleset
        $rules = ($this->exists) ? $this->getValidationRules()['update'] : $this->getValidationRules()['create'];

        $validator = Validator::make($this->toArray(), $rules);

        if($validator->fails()) {
            $this->errors = $validator->messages();
        }

        $validate = $this->customValidation();
        if(! $validate($this)) {
            return false;
        }

        return $validator->passes();
    }

    /**
     * Overwrites the original save method in order to perform
     * validation before actually saving the object.
     *
     * @param array $options
     * @param bool $validate
     *
     * @throws \YouthSkillsCenter\Exceptions\ValidationException
     * @return bool
     */
    public function save(array $options = [], $validate = true, $forceException = false)
    {
        if ($validate && !$this->isValid()) {
            if($this->throwValidationExceptions or $forceException)
                throw new ValidationException($this->errors);
            else
                return false;
        }

        return parent::save($options);
    }


    /**
     * Save the model. If invalid, throw an exception.
     *
     * @param $options
     *
     * @return bool
     * @throws \YouthSkillsCenter\Exceptions\ValidationException
     */
    public function saveOrFail($options) {
        return $this->save($options, true, true);
    }

    /**
     * Save the model without validating.
     *
     * @param array $options
     *
     * @return mixed
     */
    public function forceSave(array $options = []) {
        return parent::save($options);
    }

    /**
     * Returns a MessageBag object that store any error
     * regarding the user validation.
     *
     * @return \Illuminate\Support\MessageBag
     */
    public function errors()
    {
        return $this->errors ?: $this->errors = App::make('Illuminate\Support\MessageBag');
    }

    /**
     * Validation Rules
     *
     * @return array
     */
    public function getValidationRules() {
        return [
            'create' => [],
            'update' => []
        ];
    }

    public function customValidation() {
        return function(self $model) {
            // do custom validation.
        };
    }
} 