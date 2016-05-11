<!DOCTYPE html>
<html xmlns:ng="http://angularjs.org" ng-app="app">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>河內塔 - jim60105</title>
        <!-- 先引用 jQuery，順序很重要 -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>

        <!--RandomColor/rcolor.js at master · sterlingwes/RandomColor
        https://github.com/sterlingwes/RandomColor/blob/master/rcolor.js-->
        <script src="library/rcolor.js"></script>

        <script src="JS/index.js"></script>
    </head>
    <body style="text-align: center;margin:50px 50px 0px 0px " ng-controller="Controller" ng-init="init()">
        <div class="container" style="width:100%;line-height: 22px;text-align: center">
            <input ng-model="amount" type="number" style="width:50px;text-align:right" ng-change="makeStock()"></input>
            <button ng-click="calculate()">RUN</button>
            共{{stepCount}}步
            <table style="width:100%">
                <tbody style="vertical-align:top">
                    <tr>
                        <td style="width:25%" ng-bind-html="layout">Layout:</td>
                        <td style="width:25%;text-align: center">A<br>
                            <div ng-style="{'width':layerWidth(layer,stockA.length),'margin':'0px auto','background-color': colorList[layer-1]}" ng-repeat="layer in stockA track by $index" ng-bind="{{layer}}"></div>
                        </td>
                        <td style="width:25%">B<br>
                            <div ng-style="{'width':layerWidth(layer,stockB.length),'margin':'0px auto','background-color': colorList[layer-1]}" ng-repeat="layer in stockB track by $index" ng-bind="{{layer}}"></div>
                        </td>
                        <td style="width:25%">C<br>
                            <div ng-style="{'width':layerWidth(layer,stockC.length),'margin':'0px auto','background-color': colorList[layer-1]}" ng-repeat="layer in stockC track by $index" ng-bind="{{layer}}"></div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div style="margin-top:100px;float: right">
                v16.05.12.0
            </div>
        </div>
    </body>
</html>
