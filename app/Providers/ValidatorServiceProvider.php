<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

class ValidatorServiceProvider extends ServiceProvider {

    public function boot()
    {
      $this->app['validator']->extend('greater_than', function($attribute, $value, $parameters, $validator) {
        $min_field = $parameters[0];
        $data = $validator->getData();
        $min_value = $data[$min_field];
        //dd($value,$min_value);
        return intval($value) >= intval($min_value);
      });

      Validator::replacer('greater_than', function($message, $attribute, $rule, $parameters) {
        return str_replace(':field', $parameters[0], $message);
      });
    }

    public function register()
    {
        //
    }
}
