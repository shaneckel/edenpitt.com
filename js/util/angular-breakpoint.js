/*
 * angularjs-breakpoint v0.0.1
 * http://snapjay.github.com/angularjs-breakpoint/
 */
 
 var breakpointApp=angular.module("breakpointApp",[]);breakpointApp.directive("breakpoint",["$window","$rootScope",function(e,t){return{restrict:"A",link:function(n,r,i){function o(e){t.$broadcast("breakpointChange",n.breakpoint,e)}function u(){n.breakpoint.windowSize=e.innerWidth;if(!n.$$phase)n.$apply()}function a(e){var t=s[Object.keys(s)[0]];for(var i in s){if(i<e)t=s[i];r.removeClass(s[i])}r.addClass(t);n.breakpoint.class=t;if(!n.$$phase)n.$apply()}n.breakpoint={"class":"",windowSize:e.innerWidth};var s=n.$eval(i.breakpoint);angular.element(e).bind("resize",u);n.$watch("breakpoint.windowSize",function(e,t){a(e)});n.$watch("breakpoint.class",function(e,t){if(e!=t)o()})}}}])