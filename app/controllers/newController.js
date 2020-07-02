
app.controller("homeCtrl",function($scope){

$scope.addName="";
$scope.addEmail="";

$scope.pushItem= function()


{
    if($scope.addName && $scope.addEmail!="")
{
    
    $scope.item1=`Name: ${$scope.addName}`;
    $scope.item2=`Email: ${$scope.addEmail}`;
    alert("hii " + $scope.addName + "," + " Your email is " + $scope.addEmail);

    $scope.addName="";
    $scope.addEmail="";

}else
alert("please enter two fields");
}
} );