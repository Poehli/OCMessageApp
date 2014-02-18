var msg = angular.module("message",["OC"]);

msg.controller("tabCtrl", ["$scope", function ($scope){

	$scope.tabName = "read";
	
	$scope.isTab = function( name ){
		return $scope.tabName == name;
	};
	
	$scope.setTab = function( name ){
		$scope.tabName = name;
	}
	
	$scope.activeTab = function( name ){
		if ($scope.tabName == name){
			return "active";
		} else {
			return "inactive";
		}
	}
}]);

msg.controller("msgCtrl", ["$scope", "$http", function($scope, $http){
	
	$scope.getUsers = function (){
		if ($scope.msg_to == "alle" ||$scope.msg_to == "all"){
			$scope.msg_to = "";
			for (var i = 0; i < $scope.users.length; i++){
				if (i < 1)
					$scope.msg_to = $scope.users[i];
				else
					$scope.msg_to = $scope.msg_to+";"+$scope.users[i];
			}
		}
	}


	$scope.msg_subject = "Betreff";
	$scope.msg_content = "Nachricht";
	$scope.send = function (){
		$http({method:"post", url: "controller/send.php",
			data: {msg_subject: $scope.msg_subject,
				msg_content: $scope.msg_content, 
				msg_to: $scope.msg_to}})
			.success(function(data){
				if (data !== ""){
					alert(data);
				}
			});
		
		req = new _Request($http, new _Publisher(), Router);
		req.get('test_index');
	};
}]);