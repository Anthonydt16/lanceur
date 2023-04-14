<?php
namespace Controller;
use Kernel\Security\Vulnerability\Xss;
use Kernel\Security\Vulnerability\Csrf;
use Kernel\Security\Validation;
use Kernel\Io\Render;
use Kernel\Url\Router;


/**
 * Controleur du composant Lunch.
 * 
 * @author chris
 * @version 1.0
 * @package Controller
 * @category Component controller
 */
class Lunch extends Render {

    /**
     * Point d'entrée du controleur.
     * @access public
     * @return void
     */
    function __construct() {
        $projets = [
            [
                'logo' => 'icons8-typescript',
                'title' => 'TypeScript',
                'author' => 'Anthonydt16',
                'technos' => ['html', 'scss', 'javascript','php'],
                'description' => 'Voici un site web qui présente TypeScript!',
                'description_long' => 'TypeScript est un langage de programmation libre et open-source développé par Microsoft. Il est un sur-ensemble de JavaScript, c\'est-à-dire qu\'il est entièrement compatible avec ce dernier, et qu\'il ajoute des fonctionnalités supplémentaires. TypeScript est principalement utilisé pour le développement d\'applications web front-end, mais peut également être utilisé pour le développement d\'applications côté serveur (Node.js) et pour le développement d\'applications mobiles (Ionic, NativeScript, React Native, etc.).',
                'price' => 'Gratuit',
                'link' => 'https://devopti.fr/IUT/',
                'github' => 'https://github.com/Anthonydt16/TypeScript_Presentation',
                'captures' => [
                    '/lanceur/assets/img/ts.JPG',
                    '/lanceur/assets/img/ts2.JPG',
                ]
            ],
            [
                'logo' => 'Yams',
                'title' => 'Yams',
                'author' => 'Anthonydt16',
                'technos' => ['html', 'css', 'javascript','JQuery'],
                'description' => 'Un petit jeux réalisé pour un projets web sur jquery !',
                'description_long' => 'Yams est un jeux de dés avec des régle très précise et il nous à étais demander de le reproduire. ',
                'price' => 'Gratuit',
                'link' => 'https://github.com/Anthonydt16/Yams',
                'github' => 'https://github.com/Anthonydt16/Yams',
                'captures' => [
                    '/lanceur/assets/img/Yams2.JPG',
                    '/lanceur/assets/img/Yams.JPG',
                ]
            ],
            [
                'logo' => 'reactTD',
                'title' => 'VelMap',
                'author' => 'Anthonydt16',
                'technos' => ['html', 'sass', 'javascript','reactjs', 'router'],
                'description' => 'un petit site en front-end avec reactjs',
                'description_long' => 'Le principe est simple on nous fournie une API avec des données sur les vélos et le stations, avec les contrats des villes partenaires. On devait par la suite les afficher sur une carte. ',
                'price' => 'Gratuit',
                'link' => 'https://anthonydt16.github.io/VelMap.github.io/',
                'github' => 'https://github.com/Anthonydt16/VelMap',
                'captures' => [
                    "/lanceur/assets/img/velMap.JPG",
                    "/lanceur/assets/img/velMap2.JPG",
                    "/lanceur/assets/img/velMap3.JPG",
                    "/lanceur/assets/img/velMap4.JPG",
                ]
            ],
            [
                'logo' => 'robot',
                'title' => 'TradingBot',
                'author' => 'Anthonydt16',
                'technos' => ['python'],
                'description' => 'Un bot de trading sur avec l API Bybit.',
                'description_long' => "De la réflexion, à la réalisation, recherche sur la documentation sur l'API de Bybit, avec le Backtesting de la stratégie avec un bot et ensuite de la mise en production et de la maintenance. J'ai tous fais seul mais le projets n'est encore qu'en face de test.",
                'price' => 'Gratuit',
                'link' => 'https://github.com/Anthonydt16/botCryptoBybit',
                'github' => 'https://github.com/Anthonydt16/botCryptoBybit',
                'captures' => [
                ]
            ],
            [
                'logo' => 'Hallowod',
                'title' => 'Hallowod',
                'author' => 'Anthonydt16',
                'technos' => ['VueJS', 'NodeJS', 'MySQL', 'Docker', 'ExpressJS','PrismaJS'],
                'description' => 'Une application fullstack avec une API REST et une interface web. Accès sur le sport pour prévoir ces séances',
                'description_long' => "Hallowod est une application fullstack qui permet de prévoir ses séances de sport. Elle est composée d'une API REST et d'une interface web. L'API est développée en NodeJS avec ExpressJS et PrismaJS. L'interface web est développée en VueJS. L'application est déployée sur un serveur VPS avec Docker. L'atout de cette web application est le faites de pouvoir y upload c'est séance qui sont déjà réalisé par un coach en format .txt l'app l'analyse au format JSON et l'ajoute dans la base de donnée. ",
                'price' => 'Gratuit',
                'link' => 'http://hallowod.fr/',
                'github' => 'https://github.com/Anthonydt16/front_hallowod_vueJS',
                'captures' => [
                    '/lanceur/assets/img/HallowodAccueil.jpg',
                    '/lanceur/assets/img/HallowodAjout.jpg',
                    '/lanceur/assets/img/HallowodMaquette.jpg',
                ]
            ],
            [
                'logo' => 'robot',
                'title' => 'PenAI',
                'author' => 'Anthonydt16',
                'technos' => ['python'],
                'description' => 'Un Micro-Framework pour entrainer ces model de Machine Learning.',
                'description_long' => " Un Micro-framework réaliser pour simplifier la standardisation des donnée fournies pour le model, la création du model, l'entrainement du model et la sauvegarde du model. Utiliser avec le framework Tensorflow",
                'price' => 'Gratuit',
                'link' => 'https://github.com/Anthonydt16/botCryptoBybit',
                'github' => 'https://github.com/Anthonydt16/botCryptoBybit',
                'captures' => [
                ]
            ],
        ];

        $this->view(
            $projets[Router::params()['id']]
        );

    }

}

?>