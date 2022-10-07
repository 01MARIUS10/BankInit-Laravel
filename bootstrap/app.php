<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
| La première chose que nous ferons est de créer une nouvelle instance d'application Laravel
| qui sert de "colle" pour tous les composants de Laravel, et est
| le conteneur IoC pour le système liant toutes les différentes parties.

*/

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.

| Ensuite, nous devons lier certaines interfaces importantes dans le conteneur afin
| nous pourrons les résoudre en cas de besoin. Les noyaux servent le
| les requêtes entrantes vers cette application à partir du Web et de la CLI.

|
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|

| Ce script renvoie l'instance de l'application. L'instance est donnée à
| le script d'appel afin que nous puissions séparer la construction des instances
| de l'exécution réelle de l'application et de l'envoi des réponses.

|
*/

return $app;
