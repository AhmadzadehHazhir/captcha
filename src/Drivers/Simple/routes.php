<?php
    Route::get(
        'captcha',
        '\Shetabit\Captcha\Drivers\Simple\Controllers\CaptchaController@getCaptcha'
    )
    ->middleware(
        config('captcha.drivers.simple.middleware')
    )
    ->name(
        config('captcha.drivers.simple.route','captcha')
    );
