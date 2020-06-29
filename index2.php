<!DOCTYPE html>
<html>
<head>
    <meta chrset="UTF 8">
    <title>Event Registration</title>
</head>
<body>

<script src="https://code.angularjs.org/1.6.9/angular-route.js"></script>
<script src="https://code.angularjs.org/1.6.9/angular.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <h1> Guru99 Global Event</h1>
<div ng-app="DemoApp" ng-controller="DemoController">
    Tutorial Name : <input type="text" ng-model="tutorialName"><br>
    <br>
    This tutorial is {{tutorialName | uppercase}}

</div>
<script type="text/javascript">
    var app = angular.module('DemoApp',[]);
    app.controller('DemoController',function($scope){

        $scope.tutorialName ="Angular JS";
    });
</script>

</body>
</html>
Code Explanation:

Here we are passing a string which is a combination of lowercase and uppercase characters "Angular JS" in a member variable called "tutorialName" and attaching it to the scope object.
We are using the member variable "tutorialName" and putting a filter symbol (|), which means that the output needs to be modified by using a filter. We then use the uppercase keyword to say to use the built-in filter to output the entire string in uppercase.
If the code is executed successfully, the following Output will be shown when you run your code in the browser.

Output:

Learn AngularJS Filter: Lowercase, Uppercase, json,Number, Currency, Custom

From the output,

It can be seen that the string which was passed in the variable tutorialName which was a combination of lowercase and uppercase characters has been outputted in all uppercase.
Number
This filter formats a number and can apply a limit to the decimal points for a number.

Let's look at an example of AngularJS filters with the number option.

In the example below,

We wanted to showcase how we can use the number filter to format a number to display with a restriction of 2 decimal places.

We will use a controller to send a number to a view via the scope object. We will then use a filter in the view to apply the number filter.

Learn AngularJS Filter: Lowercase, Uppercase, json,Number, Currency, Custom

<!DOCTYPE html>
<html>
<head>
    <meta chrset="UTF 8">
    <title>Event Registration</title>
</head>
<body>

<script src="https://code.angularjs.org/1.6.9/angular-route.js"></script>
<script src="https://code.angularjs.org/1.6.9/angular.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<h1> Guru99 Global Event</h1>
<div ng-app="DemoApp" ng-controller="DemoController">

    This tutorialID is {{tutorialID | number:2}}

</div>
<script type="text/javascript">
    var app = angular.module('DemoApp',[]);
    app.controller('DemoController',function($scope){

        $scope.tutorialID =3.565656;
    });
</script>

</body>
</html>
Code Explanation:

Here we are passing a number with a larger number of decimal places in a member variable called tutorialID and attaching it to the scope object.
We are using the member variable tutorialID and putting a filter symbol (|) along with the number filter. Now in number:2, the two indicates that the filter should restrict the number of decimal places to 2.
If the code is executed successfully, the following Output will be shown when you run your code in the browser.

Output:

Learn AngularJS Filter: Lowercase, Uppercase, json,Number, Currency, Custom

From the output,

It can be seen that the number which was passed in the variable tutorialID which had a large number of decimal points has been limited to 2 decimal places because of the number: 2 filters which was applied.
Currency
This filter formats a currency filter to a number.

Suppose, if you wanted to display a number with a currency such as $, then this filter can be used.

In the below example we will use a controller to send a number to a view via the scope object. We will then use a filter in the view to apply the current filter.

Learn AngularJS Filter: Lowercase, Uppercase, json,Number, Currency, Custom

<!DOCTYPE html>
<html>
<head>
    <meta chrset="UTF 8">
    <title>Event Registration</title>
</head>
<body>

<script src="https://code.angularjs.org/1.6.9/angular-route.js"></script>
<script src="https://code.angularjs.org/1.6.9/angular.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<h1> Guru99 Global Event</h1>
<div ng-app="DemoApp" ng-controller="DemoController">

    This tutorial Price is {{tutorialprice | currency}}

</div>
<script type="text/javascript">
    var app = angular.module('DemoApp',[]);
    app.controller('DemoController',function($scope){

        $scope.tutorialprice =20.56;
    });
</script>

</body>
</html>
Code Explanation:

Here we are passing a number in a member variable called tutorialprice and attaching it to the scope object.
We are using the member variable tutorialprice and putting a filter symbol (|) along with the currency filter. Note that the currency which is applied depends on the language settings which are applied to the machine.
If the code is executed successfully, the following Output will be shown when you run your code in the browser.

Output:

Learn AngularJS Filter: Lowercase, Uppercase, json,Number, Currency, Custom

From the output

It can be seen the currency symbol has been appended to the number which was passed in the variable tutorialprice.
In our case, since the language settings are English (United States), the $ symbol is inserted as the currency.
JSON
This filter formats a JSON like input and applies the JSON filter to give the output in JSON.

In the below example we will use a controller to send a JSON type object to a view via the scope object. We will then use a filter in the view to apply the JSON filter.


Learn AngularJS Filter: Lowercase, Uppercase, json,Number, Currency, Custom

<!DOCTYPE html>
<html>
<head>
    <meta chrset="UTF 8">
    <title>Event Registration</title>
</head>
<body>

<script src="https://code.angularjs.org/1.6.9/angular-route.js"></script>
<script src="https://code.angularjs.org/1.6.9/angular.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<h1> Guru99 Global Event</h1>
<div ng-app="DemoApp" ng-controller="DemoController">

    This tutorial is {{tutorial | json}}

</div>
<script type="text/javascript">
    var app = angular.module('DemoApp',[]);
    app.controller('DemoController',function($scope){

        $scope.tutorial ={TutorialID:12,tutorialName:"Angular"};
    });
</script>

</body>
</html>
Code Explanation:

Here we are passing a number in a member variable called "tutorial" and attaching it to the scope object. This member variable contains a JSON type string of Tutorial ID:12, and TutorialName:"Angular".
We are using the member variable tutorial and putting a filter symbol (|) along with the JSON filter.
If the code is executed successfully, the following Output will be shown when you run your code in the browser.

Output:

Learn AngularJS Filter: Lowercase, Uppercase, json,Number, Currency, Custom

From the output,

It can be seen that the JSON like a string is parsed and displayed a proper JSON object in the browser.
Summary:

Filters are used to change the way the output is displayed to the user.
Angular provides built-in filters such as the lowercase and uppercase filters to change the output of strings to lower and uppercase respectively.
There is also a provision for changing the way numbers are displayed by using the number filter by specifying the number of decimal points to be displayed in the number.
One can also use the currency filter to append the currency symbol to any number.
If there is a requirement to have json specific output, angular also provides the JSON filter for filtering any JSON like string into JSON format.
 

 PrevReport a BugNext 
YOU MIGHT LIKE:
ANGULARJS

React vs Angular: 10 Most Important Differences You Must Know!
What is React JS? React is a Javascript library developed by Facebook which allows you to build UI...

Read more
ANGULARJS

AngularJS Form Submit with Example [ng-submit]
How to Submit a form using ng-submit The processes of submitting information on a web page are...

Read more
ANGULARJS

AngularJS Tutorial for Beginners PDF
AngularJS is a JavaScript framework used for building MVC based applications. It is probably one...

Read more
ANGULARJS

Top 75 AngularJS Interview Questions and Answers
Following are frequently asked AngularJS interview questions for freshers as well as experienced...

Read more
ANGULARJS

10 BEST AngularJS Books (2020 Update)
AngularJS is a JavaScript framework used for creating single web page applications. It allows you...

Read more
ANGULARJS

How to Create CUSTOM Directive in AngularJS with Example
What is Custom Directive? A custom directive in Angular Js is a user-defined directive with your...

Read more



AngularJS Tutorial
4) $Scope in AngularJS
5) AngularJS ng-repeat
6) ng-model in AngularJS
7) AngularJS ng-view
8) AngularJS Expressions
9) AngularJS Filter Example
10) AngularJS Custom Filter
11) Directive
12) Angularjs CUSTOM Directive
13) AngularJS Module
14) AngularJS Events

<!DOCTYPE html>
<html>
<head>
    <meta chrset="UTF 8">
    <title>Event Registration</title>
</head>
<body>

<script src="https://code.angularjs.org/1.6.9/angular-route.js"></script>
<script src="https://code.angularjs.org/1.6.9/angular.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <h1> Guru99 Global Event</h1>
<div ng-app="DemoApp" ng-controller="DemoController">
    Tutorial Name : <input type="text" ng-model="tutorialName"><br>
    <br>
    This tutorial is {{tutorialName | uppercase}}

</div>
<script type="text/javascript">
    var app = angular.module('DemoApp',[]);
    app.controller('DemoController',function($scope){

        $scope.tutorialName ="Angular JS";
    });
</script>

</body>
</html>
Code Explanation:

Here we are passing a string which is a combination of lowercase and uppercase characters "Angular JS" in a member variable called "tutorialName" and attaching it to the scope object.
We are using the member variable "tutorialName" and putting a filter symbol (|), which means that the output needs to be modified by using a filter. We then use the uppercase keyword to say to use the built-in filter to output the entire string in uppercase.
If the code is executed successfully, the following Output will be shown when you run your code in the browser.

Output:

Learn AngularJS Filter: Lowercase, Uppercase, json,Number, Currency, Custom

From the output,

It can be seen that the string which was passed in the variable tutorialName which was a combination of lowercase and uppercase characters has been outputted in all uppercase.
Number
This filter formats a number and can apply a limit to the decimal points for a number.

Let's look at an example of AngularJS filters with the number option.

In the example below,

We wanted to showcase how we can use the number filter to format a number to display with a restriction of 2 decimal places.

We will use a controller to send a number to a view via the scope object. We will then use a filter in the view to apply the number filter.

Learn AngularJS Filter: Lowercase, Uppercase, json,Number, Currency, Custom

<!DOCTYPE html>
<html>
<head>
    <meta chrset="UTF 8">
    <title>Event Registration</title>
</head>
<body>

<script src="https://code.angularjs.org/1.6.9/angular-route.js"></script>
<script src="https://code.angularjs.org/1.6.9/angular.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<h1> Guru99 Global Event</h1>
<div ng-app="DemoApp" ng-controller="DemoController">

    This tutorialID is {{tutorialID | number:2}}

</div>
<script type="text/javascript">
    var app = angular.module('DemoApp',[]);
    app.controller('DemoController',function($scope){

        $scope.tutorialID =3.565656;
    });
</script>

</body>
</html>
Code Explanation:

Here we are passing a number with a larger number of decimal places in a member variable called tutorialID and attaching it to the scope object.
We are using the member variable tutorialID and putting a filter symbol (|) along with the number filter. Now in number:2, the two indicates that the filter should restrict the number of decimal places to 2.
If the code is executed successfully, the following Output will be shown when you run your code in the browser.

Output:

Learn AngularJS Filter: Lowercase, Uppercase, json,Number, Currency, Custom

From the output,

It can be seen that the number which was passed in the variable tutorialID which had a large number of decimal points has been limited to 2 decimal places because of the number: 2 filters which was applied.
Currency
This filter formats a currency filter to a number.

Suppose, if you wanted to display a number with a currency such as $, then this filter can be used.

In the below example we will use a controller to send a number to a view via the scope object. We will then use a filter in the view to apply the current filter.

Learn AngularJS Filter: Lowercase, Uppercase, json,Number, Currency, Custom

<!DOCTYPE html>
<html>
<head>
    <meta chrset="UTF 8">
    <title>Event Registration</title>
</head>
<body>

<script src="https://code.angularjs.org/1.6.9/angular-route.js"></script>
<script src="https://code.angularjs.org/1.6.9/angular.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<h1> Guru99 Global Event</h1>
<div ng-app="DemoApp" ng-controller="DemoController">

    This tutorial Price is {{tutorialprice | currency}}

</div>
<script type="text/javascript">
    var app = angular.module('DemoApp',[]);
    app.controller('DemoController',function($scope){

        $scope.tutorialprice =20.56;
    });
</script>

</body>
</html>
Code Explanation:

Here we are passing a number in a member variable called tutorialprice and attaching it to the scope object.
We are using the member variable tutorialprice and putting a filter symbol (|) along with the currency filter. Note that the currency which is applied depends on the language settings which are applied to the machine.
If the code is executed successfully, the following Output will be shown when you run your code in the browser.

Output:

Learn AngularJS Filter: Lowercase, Uppercase, json,Number, Currency, Custom

From the output

It can be seen the currency symbol has been appended to the number which was passed in the variable tutorialprice.
In our case, since the language settings are English (United States), the $ symbol is inserted as the currency.
JSON
This filter formats a JSON like input and applies the JSON filter to give the output in JSON.

In the below example we will use a controller to send a JSON type object to a view via the scope object. We will then use a filter in the view to apply the JSON filter.


Learn AngularJS Filter: Lowercase, Uppercase, json,Number, Currency, Custom

<!DOCTYPE html>
<html>
<head>
    <meta chrset="UTF 8">
    <title>Event Registration</title>
</head>
<body>

<script src="https://code.angularjs.org/1.6.9/angular-route.js"></script>
<script src="https://code.angularjs.org/1.6.9/angular.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<h1> Guru99 Global Event</h1>
<div ng-app="DemoApp" ng-controller="DemoController">

    This tutorial is {{tutorial | json}}

</div>
<script type="text/javascript">
    var app = angular.module('DemoApp',[]);
    app.controller('DemoController',function($scope){

        $scope.tutorial ={TutorialID:12,tutorialName:"Angular"};
    });
</script>

</body>
</html>
Code Explanation:

Here we are passing a number in a member variable called "tutorial" and attaching it to the scope object. This member variable contains a JSON type string of Tutorial ID:12, and TutorialName:"Angular".
We are using the member variable tutorial and putting a filter symbol (|) along with the JSON filter.
If the code is executed successfully, the following Output will be shown when you run your code in the browser.

Output:

Learn AngularJS Filter: Lowercase, Uppercase, json,Number, Currency, Custom

From the output,

It can be seen that the JSON like a string is parsed and displayed a proper JSON object in the browser.
Summary:

Filters are used to change the way the output is displayed to the user.
Angular provides built-in filters such as the lowercase and uppercase filters to change the output of strings to lower and uppercase respectively.
There is also a provision for changing the way numbers are displayed by using the number filter by specifying the number of decimal points to be displayed in the number.
One can also use the currency filter to append the currency symbol to any number.
If there is a requirement to have json specific output, angular also provides the JSON filter for filtering any JSON like string into JSON format.
 

 PrevReport a BugNext 
YOU MIGHT LIKE:
ANGULARJS

React vs Angular: 10 Most Important Differences You Must Know!
What is React JS? React is a Javascript library developed by Facebook which allows you to build UI...

Read more
ANGULARJS

AngularJS Form Submit with Example [ng-submit]
How to Submit a form using ng-submit The processes of submitting information on a web page are...

Read more
ANGULARJS

AngularJS Tutorial for Beginners PDF
AngularJS is a JavaScript framework used for building MVC based applications. It is probably one...

Read more
ANGULARJS

Top 75 AngularJS Interview Questions and Answers
Following are frequently asked AngularJS interview questions for freshers as well as experienced...

Read more
ANGULARJS

10 BEST AngularJS Books (2020 Update)
AngularJS is a JavaScript framework used for creating single web page applications. It allows you...

Read more
ANGULARJS

How to Create CUSTOM Directive in AngularJS with Example
What is Custom Directive? A custom directive in Angular Js is a user-defined directive with your...

Read more



AngularJS Tutorial
4) $Scope in AngularJS
5) AngularJS ng-repeat
6) ng-model in AngularJS
7) AngularJS ng-view
8) AngularJS Expressions
9) AngularJS Filter Example
10) AngularJS Custom Filter
11) Directive
12) Angularjs CUSTOM Directive
13) AngularJS Module
14) AngularJS Events

<!DOCTYPE html>
<html>
<head>
    <meta chrset="UTF 8">
    <title>Event Registration</title>
</head>
<body>

<script src="https://code.angularjs.org/1.6.9/angular-route.js"></script>
<script src="https://code.angularjs.org/1.6.9/angular.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <h1> Guru99 Global Event</h1>
<div ng-app="DemoApp" ng-controller="DemoController">
    Tutorial Name : <input type="text" ng-model="tutorialName"><br>
    <br>
    This tutorial is {{tutorialName | uppercase}}

</div>
<script type="text/javascript">
    var app = angular.module('DemoApp',[]);
    app.controller('DemoController',function($scope){

        $scope.tutorialName ="Angular JS";
    });
</script>

</body>
</html>