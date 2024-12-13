<?php

namespace Jllopez\EstructureDesing;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;


class AtomicDesignServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Carga las vistas desde el paquete
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'estructure-desing');
    }

    public function boot()
    {
        // Registrar componentes Livewire
        Livewire::component('atoms.button', \Jllopez\EstructureDesing\Components\Atoms\Button::class);
        Livewire::component('molecules.search-field', \Jllopez\EstructureDesing\Components\Molecules\SearchField::class);

        // Publicar vistas para permitir sobrescritura
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/estructure-desing'),
        ], 'views');
    }
}
