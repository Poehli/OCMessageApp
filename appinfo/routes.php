<?php

namespace OCA\test;

use \OCA\AppFramework\App;
use \OCA\test\DependencyInjection\DIContainer;

$this->create('test_index', '/')->action(
    function($params){
        // call the index method on the class PageController
        App::main('PageController', 'index', $params, new DIContainer());
    }
);

$this->create('test_getMessage', '/test/{id}')->action(
		function($params){
	// call the index method on the class PageController
	App::main('messages', 'getMessages', $params, new DIContainer());
}
);
$this->create('test_getSendMessage', '/test/{id}')->action(
		function($params){
	// call the index method on the class PageController
	App::main('messages', 'getSendMessages', $params, new DIContainer());
}
);
$this->create('test_getUnreadMessages', '/test/{id}')->action(
		function($params){
	// call the index method on the class PageController
	App::main('messages', 'getUnreadMessages', $params, new DIContainer());
}
);
$this->create('test_sendMessage', '/test/{id}')->action(
		function($params){
	// call the index method on the class PageController
	App::main('messages', 'sendMessage', $params, new DIContainer());
}
);
$this->create('test_setMessageRead', '/test/{id}')->action(
		function($params){
	// call the index method on the class PageController
	App::main('PageController', 'setMessageRead', $params, new DIContainer());
}
);
$this->create('test_setAllMessagesRead', '/test/{id}')->action(
		function($params){
	// call the index method on the class PageController
	App::main('messages', 'setAllMessagesRead', $params, new DIContainer());
}
);
$this->create('test_hasUnreadMessage', '/test/{id}')->action(
		function($params){
	// call the index method on the class PageController
	App::main('messages', 'hasUnreadMessage', $params, new DIContainer());
}
);
$this->create('test_unreadMessageCount', '/test/{id}')->action(
		function($params){
	// call the index method on the class PageController
	App::main('messages', 'unreadMessageCount', $params, new DIContainer());
}
);

