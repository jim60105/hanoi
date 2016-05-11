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
        <style>
            *{
                font-family: "Noto Sans", "Noto Sans JP","Noto Sans TC","Noto Sans SC", "Microsoft JhengHei", "Heiti TC", sans-serif;
            }
        </style>
    </head>
    <body style="text-align: center" ng-controller="Controller" ng-init="init()">
        <div style="color:red;font-size:40px;margin-top:20px">河內塔問題</div>
        <div class="container" style="width:100%;line-height: 22px;text-align: center;margin:20px 50px 0px 0px">
            <form>
                選擇層數：
                <input ng-model="amount" type="number" style="width:50px;text-align:right" ng-submit="calculate()"></input>
                <button ng-click="calculate()">RUN</button>
                共{{stepCount}}步
            </form>
            <table style="width:100%">
                <tbody style="vertical-align:bottom">
                    <tr>
                        <td>Layout:</td>
                        <td>A</td>
                        <td>B</td>
                        <td>C</td>
                    </tr>
                    <tr>
                        <td style="width:25%;vertical-align:top" ng-bind-html="layout"></td>
                        <td style="width:25%;text-align: center">
                            <div ng-style="{'width':layerWidth(layerA,amount),'margin':'0px auto','background-color': colorList[layerA-1]}" ng-repeat="layerA in stockA track by $index">&nbsp;</div>
                        </td>
                        <td style="width:25%">
                            <div ng-style="{'width':layerWidth(layerB,amount),'margin':'0px auto','background-color': colorList[layerB-1]}" ng-repeat="layerB in stockB track by $index">&nbsp;</div>
                        </td>
                        <td style="width:25%">
                            <div ng-style="{'width':layerWidth(layerC,amount),'margin':'0px auto','background-color': colorList[layerC-1]}" ng-repeat="layerC in stockC track by $index">&nbsp;</div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button ng-click="next()" ng-disabled="stepList.length<1" style="margin:0px auto">下一步</button><br>
            <div style="margin-top:100px;float: right;text-align:right;margin-right:50px;font-size:14px">
                版本號： v16.05.12.1<br>
                Github : <a href="https://github.com/jim60105/hanoi">https://github.com/jim60105/hanoi</a>
<!-- Facebook Badge START --><br><a href="https://www.facebook.com/jim60105" title="&#x9673;&#x921e;" target="_TOP"><img class="img" src="https://badge.facebook.com/badge/100000288615898.2549.1160939690.png" style="border: 0px;" alt="" /></a><!-- Facebook Badge END -->
            </div>
        </div>
    </body>
</html>
