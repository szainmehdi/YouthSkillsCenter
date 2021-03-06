<?php namespace YouthSkillsCenter\Auth;

use App;
use Lang;
use YouthSkillsCenter\Families\Family;
use Zizaco\Confide\ConfideUserInterface;
use Zizaco\Confide\UserValidatorInterface;

class UserValidator implements UserValidatorInterface {

    /**
     * Confide repository instance.
     *
     * @var \Zizaco\Confide\RepositoryInterface
     */
    public $repo;

    /**
     * Validation rules for this Validator.
     *
     * @var array
     */
    public $rules = [
        'create' => [
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required|email|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4|confirmed',
            'access_code' => 'required',
        ],
        'update' => [
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required|email|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4',
        ]
    ];



    /**
     * Validates the given user. Should check if all the fields are correctly.
     *
     * @param ConfideUserInterface $user Instance to be tested.
     *
     * @return boolean True if the $user is valid.
     */
    public function validate(ConfideUserInterface $user, $ruleset = 'create') {
        // Set the $repo as a ConfideRepository object
        $this->repo = App::make('confide.repository');


        // Validate object
        if (!$this->validateAttributes($user, $ruleset)) {
            return false;
        }

        if(!$this->validatePassword($user)) {
            return false;
        }

        /*if(!$this->validateIsUnique($user)) {
            return false;
        }*/

        if (!$this->validateAccessCode($user)) {
            return false;
        }

        return true;
    }

    /**
     * Validates the password and password_confirmation of the given user.
     *
     * @param ConfideUserInterface $user
     *
     * @return boolean True if password is valid.
     */
    public function validatePassword(ConfideUserInterface $user) {
        $hash = App::make('hash');

        if ($user->getOriginal('password') != $user->password) {
            if ($user->password === $user->password_confirmation) {

                // Hashes password and unset password_confirmation field
                $user->password = $hash->make($user->password);
            } else {
                $this->attachErrorMsg(
                    $user,
                    'confide::confide.alerts.password_confirmation',
                    'password_confirmation'
                );
                return false;
            }
        }

        unset($user->password_confirmation);

        return true;
    }

    public function validateAccessCode(ConfideUserInterface $user) {
        if($user->exists) return true;

        $access_code = $user->access_code;

        /** @var Family $family */
        $family = Family::whereAccessCode($access_code)->first();

        if(is_null($family)){
            $this->attachErrorMsg(
                $user,
                'Invalid access code.',
                'access_code'
            );
            return false;
        }

        $user->family_id = $family->id;
        $family->resetAccessCode();

        unset($user->access_code);
        return true;
    }

    /**
     * Validates if the given user is unique. If there is another
     * user with the same credentials but a different id, this
     * method will return false.
     *
     * @param ConfideUserInterface $user
     *
     * @return boolean True if user is unique.
     */
    public function validateIsUnique(ConfideUserInterface $user) {
        $identity = [
            'email' => $user->email,
        ];

        foreach ($identity as $attribute => $value) {

            $similar = $this->repo->getUserByIdentity([$attribute => $value]);

            if (!$similar || $similar->getKey() == $user->getKey()) {
                unset($identity[$attribute]);
            } else {
                $this->attachErrorMsg(
                    $user,
                    'confide::confide.alerts.duplicated_credentials',
                    $attribute
                );
            }

        }

        if (!$identity) {
            return true;
        }

        return false;
    }

    /**
     * Uses Laravel Validator in order to check if the attributes of the
     * $user object are valid for the given $ruleset.
     *
     * @param ConfideUserInterface $user
     * @param string $ruleset The name of the key in the UserValidator->$rules array
     *
     * @return boolean True if the attributes are valid.
     */
    public function validateAttributes(ConfideUserInterface $user, $ruleset = 'create') {
        $attributes = $user->toArray();

        // Force getting password since it may be hidden from array form
        $attributes['password'] = $user->getAuthPassword();

        $rules = $this->rules[$ruleset];
        if($ruleset == 'update' && !is_null($user->id)) {
            $rules['username'] .= ",username,{$user->id}";
            $rules['email'] .= ",email,{$user->id}";
        }

        $validator = \Validator::make($attributes, $rules);

        // Validate and attach errors
        if ($validator->fails()) {
            $user->errors = $validator->errors();
            return false;
        } else {
            return true;
        }
    }

    /**
     * Creates a \Illuminate\Support\MessageBag object, add the error message
     * to it and then set the errors attribute of the user with that bag.
     *
     * @param ConfideUserInterface $user
     * @param string $errorMsg The error message.
     * @param string $key The key if the error message.
     */
    public function attachErrorMsg(ConfideUserInterface $user, $errorMsg, $key = 'confide') {
        $messageBag = $user->errors;

        if (!$messageBag instanceof MessageBag) {
            $messageBag = App::make('Illuminate\Support\MessageBag');
        }

        $messageBag->add($key, Lang::get($errorMsg));
        $user->errors = $messageBag;
    }
}