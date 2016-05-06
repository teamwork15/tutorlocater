/**
 * Created by Pankaj on 07-04-2016.
 */
(function(angular) {
    'use strict';
    var tutorlocater = angular.module("tutorLocater", []);

    tutorlocater.controller('pages', ['$scope','$sce', function ($scope,$sce) {
        $scope.submit = function() {
            console.log($scope.pageForm);
            $scope.pageForm.$submitted = true;
            console.log($scope.pageForm.$valid);
            if ($scope.pageForm.$valid) {

            }
        }
    }]);
    tutorlocater.directive('slugValidate', function () {
        return {
            require: 'ngModel',
            link: function (scope, element, attr, mCtrl) {
                function slugChecker(value) {
                    if (value.match(/\`|\~|\!|\@|\#|\$|\%|\^|\&|\*|\(|\)|\+|\=|\[|\{|\]|\}|\||\\|\'|\<|\,|\.|\>|\?|\/|\""|\;|\:|\s/g)) {
                        mCtrl.$setValidity('slug', true);
                    } else {
                        mCtrl.$setValidity('slug', false);
                    }
                    return value;
                }

                mCtrl.$parsers.push(slugChecker);
            }
        }
    });
})(window.angular);
/*tutorlocater.directive('pageContentValidate',function(){
   return {
       require: 'ngModel',
       link: function(scope, elm, attr, ngModel) {
           console.log(elm[0]);
           var ck = CKEDITOR.replace(elm[0]);
            console.log(ck.getData());
           if (!ngModel) return;

           ck.on('instanceReady', function() {
               ck.setData(ngModel.$viewValue);
           });

           function updateModel() {
               scope.$apply(function() {
                   ngModel.$setViewValue(ck.getData());
               });
           }

           ck.on('change', updateModel);
           ck.on('key', updateModel);
           ck.on('dataReady', updateModel);

           ngModel.$render = function(value) {
               ck.setData(ngModel.$viewValue);
           };
       }
   }
});*/
