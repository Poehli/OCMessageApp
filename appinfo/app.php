<?php

namespace OCA\test\Controller;

require '/var/www/oc_apps/test/controller/messages.php';

use \OCA\test\Controller\PageController;

use \OCA\test\DependencyInjection\DIContainer;
// dont break owncloud when the appframework is not enabled
if(\OCP\App::isEnabled('appframework')){
	
    $api = new \OCA\AppFramework\Core\API('test');

    $message = new \OCA\test\Controller\MessagesQuery();
    $logo = $name =  "";
    if ($message->hasUnreadMessage()){
    	$logo = "new_msg.png";
    	$name = "Neu (".$message->unreadMessageCount().")";
    } else {
    	$logo = "no_new_msg.png";
    	$name = "Nachrichten";
    }
    
    $api->addNavigationEntry(array(

      // the string under which your app will be referenced in owncloud
      'id' => $api->getAppName(),

      // sorting weight for the navigation. The higher the number, the higher
      // will it be listed in the navigation
      'order' => 10,

      // the route that will be shown on startup
      'href' => $api->linkToRoute('test_index'),

      // the icon that will be shown in the navigation
      // this file needs to exist in img/example.png
      'icon' => $api->imagePath($logo),

      // the title of your application. This will be used in the
      // navigation or on the settings page of your app
      'name' => $name

    ));
} else {
  $msg = 'Can not enable the test app because the App Framework App is disabled';
  \OCP\Util::writeLog('test', $msg, \OCP\Util::ERROR);
}
