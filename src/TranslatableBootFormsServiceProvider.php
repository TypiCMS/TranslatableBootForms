<?php
namespace TypiCMS\TranslatableBootForms;

use AdamWathan\BootForms\BootFormsServiceProvider;

class TranslatableBootFormsServiceProvider extends BootFormsServiceProvider {

    protected function registerFormBuilder()
    {
        $this->app['adamwathan.form'] = $this->app->share(function($app)
        {
            $formBuilder = new TranslatableFormBuilder;
            $formBuilder->setErrorStore($app['adamwathan.form.errorstore']);
            $formBuilder->setOldInputProvider($app['adamwathan.form.oldinput']);
            $formBuilder->setToken($app['session.store']->getToken());

            return $formBuilder;
        });
    }

}
