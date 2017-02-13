angular.module('app')
	.controller('LoginCtrl', function($scope) {

		$scope.store = function(contact)
		{
			console.log(contact);
			$scope.contactForm.$setPristine();
		}

})

	.controller('RegisterCtrl', function($scope) {

		$scope.store = function(contact)
		{
			console.log(contact);
			if(contact.password == contact.confirm_password)
			{
				$scope.contactForm.$setPristine();
			}else{
				$scope.error = true;
			}
			$scope.contactForm.$setPristine();
		}

	})

	.controller('ResetCtrl', function($scope) {

		$scope.store = function(contact)
		{
			console.log(contact);
		}
	})

