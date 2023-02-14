<?php
namespace app;

class Autoloader {

    /**
     * Founction permettant de charger les différentes classes 
     * * __CLASS__ : Récupère la classe courante
     */
    public static function register () {
        spl_autoload_register ([__CLASS__, 'autoload']);
    }

    /**
     * @param class Le nom de la classe à charger 
     * * Remplacer les '\' par des '/' pour garder une cohérence de fichier.
     * * __NAMESPACE__ : récupère le namespace courant
     * * __DIR__ : récupère le dossier parent 
     */

    public static function autoload (string $class) {
        $class = str_replace(__NAMESPACE__ . '\\','', $class);
        $class = str_replace('\\', '/', $class);
        require __DIR__ . '\\' . $class . '.php';
    }

}