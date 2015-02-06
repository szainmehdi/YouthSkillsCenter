<?php

return [
    'secret_key' => getenv('stripe_secret'),
    'publishable_key' => getenv('stripe_publishable'),
];