<?php

namespace OCA\test\DependencyInjection;

use OCA\test\Controller\MessagesQuery;

use \OCA\AppFramework\DependencyInjection\DIContainer as BaseContainer;

use \OCA\test\Controller\PageController;

class DIContainer extends BaseContainer {

    public function __construct(){
        parent::__construct('test');

        // use this to specify the template directory
       // $this['TwigTemplateDirectory'] = __DIR__ . '/../templates';

        $this['PageController'] = $this->share(function($c){
            return new PageController($c['API'], $c['Request']);
        });
        
        $this['messages'] = $this->share(function($c){
        	return new MessagesQuery();
        });
    }

}

