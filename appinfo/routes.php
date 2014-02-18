<?php

namespace OCA\OCMessage;

use \OCA\AppFramework\App;
use \OCA\OCMessage\DependencyInjection\DIContainer;

$this->create('ocmessage_index', '/')->action(
    function($params){
        // call the index method on the class PageController
        App::main('PageController', 'index', $params, new DIContainer());
    }
);

$this->create('ocmessage_getMessage', '/test/{id}')->action(
		function($params){
	// call the index method on the class PageController
	App::main('messages', 'getMessages', $params, new DIContainer());
}
);
$this->create('ocmessage_getSendMessage', '/test/{id}')->action(
		function($params){
	// call the index method on the class PageController
	App::main('messages', 'getSendMessages', $params, new DIContainer());
}
);
$this->create('ocmessage_getUnreadMessages', '/test/{id}')->action(
		function($params){
	// call the index method on the class PageController
	App::main('messages', 'getUnreadMessages', $params, new DIContainer());
}
);
$this->create('ocmessage_sendMessage', '/test/{id}')->action(
		function($params){
	// call the index method on the class PageController
	App::main('messages', 'sendMessage', $params, new DIContainer());
}
);
$this->create('ocmessage_setMessageRead', '/test/{id}')->action(
		function($params){
	// call the index method on the class PageController
	App::main('PageController', 'setMessageRead', $params, new DIContainer());
}
);
$this->create('ocmessage_setAllMessagesRead', '/test/{id}')->action(
		function($params){
	// call the index method on the class PageController
	App::main('messages', 'setAllMessagesRead', $params, new DIContainer());
}
);
$this->create('ocmessage_hasUnreadMessage', '/test/{id}')->action(
		function($params){
	// call the index method on the class PageController
	App::main('messages', 'hasUnreadMessage', $params, new DIContainer());
}
);
$this->create('ocmessage_unreadMessageCount', '/test/{id}')->action(
		function($params){
	// call the index method on the class PageController
	App::main('messages', 'unreadMessageCount', $params, new DIContainer());
}
);

