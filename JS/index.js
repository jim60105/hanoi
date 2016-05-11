var app = angular.module('app', []);
app.controller("Controller", function($scope,$sce,$timeout){
    //先call bodyInit()
    $scope.init = function(){
        $scope.amount = 0;
        $scope.makeStock();
    }

    //產生ng-bind-html的sce內容
    $scope.renderHtml = function(html_code)
    {
        return $sce.trustAsHtml(html_code);
    };

    $scope.makeStock = function(callback){
        var color = new RColor;
        $scope.stepCount = 0;
        $scope.stepList = [];
        $scope.stockA = [];
        $scope.stockB = [];
        $scope.stockC = [];
        $scope.layout = $scope.renderHtml('');
        $scope.colorList = [];
        for(var i=0;i<$scope.amount;i++){
            $scope.stockA.push(i+1);
            $scope.colorList.push(color.get(true));
        }
    }

    $scope.layerWidth = function(layer,amount){
        return eval(100*layer/amount)+'%';
    }

    $scope.calculate = function(){
        $scope.makeStock();
        $scope.move($scope.amount,$scope.stockA,$scope.stockC,$scope.stockB,['A','C','B']);
    }

    $scope.move = function(value,source,target,temp,letter){
        if(value==1){
            //target.unshift(source.shift());
            $scope.layout=$scope.renderHtml($scope.layout+value+' : '+letter[0]+' → '+letter[1]+'<br>');
            $scope.stepList.push(letter);
            $scope.stepCount ++;
        }else{
            $scope.move(value-1,source,temp,target,[letter[0],letter[2],letter[1]]);

            //target.unshift(source.shift());
            $scope.layout=$scope.renderHtml($scope.layout+value+' : '+letter[0]+' → '+letter[1]+'<br>');
            $scope.stepList.push(letter);
            $scope.stepCount ++;
            
            $scope.move(value-1,temp,target,source,[letter[2],letter[1],letter[0]]);
        }
    }

    $scope.next = function(){
        var step = $scope.stepList.shift();
        eval('$scope.stock'+step[1]+'.unshift($scope.stock'+step[0]+'.shift());');
    }
});
