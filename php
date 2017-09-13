Basic PHP Syntax
<?php
// PHP code goes here
?>

Comments in PHP
//  #   single-line comment
/*   
multiple-lines comment
*/

PHP Case Sensitivity:
all keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are NOT case-sensitive.
all variable names are case-sensitive.

PHP Variables: starts with the $ sign
PHP has no command for declaring a variable. It is created the moment you first assign a value to it.

echo "I love $txt!"; same with echo "I love " . $txt . "!";
sum of two variables: echo $x + $y; ( really is echo ($x+$y) )

PHP is a Loosely Typed Language:
automatically converts the variable to the correct data type, depending on its value.

PHP Variables Scope:
three different variable scopes:
local: A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
global: A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:
        global keyword is used to access a global variable from within a function.
        PHP also stores all global variables in an array called $GLOBALS[index].
static: local variable NOT to be deleted
        use the static keyword when you first declare the variable
        
two basic ways to get output: echo and print. more or less the same
        differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. 
        echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally 
        faster than print.
        print statement can be used with or without parentheses: print or print().

PHP supports the following data types:
String: can use single or double quotes
Integer: three formats: decimal , hexadecimal (prefixed with 0x) or octal (prefixed with 0)
Float (floating point numbers - also called double)
Boolean: TRUE or FALSE true or false
Array: array("Volvo","BMW","Toyota")
        three types of arrays
        Indexed arrays - Arrays with a numeric index
        Associative arrays - Arrays with named keys
            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        Multidimensional arrays - Arrays containing one or more arrays
        count() function is used to return the length
Object: an object must be explicitly declared; first declare a class, then new the class;
NULL: can have only one value: NULL. used to empty variables
Resource: not an actual data type. It is the storing of a reference to functions and resources external to PHP.
var_dump() function returns the data type and value

PHP String Functions:
strlen()
str_word_count()
strrev()
strpos() function searches for a specific text within a string return position or false
str_replace() function replaces some characters with some other characters in a string
more info in PHP string reference

PHP Constants
A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
constants are automatically global across the entire script.
To create a constant, use the define() function.
define(name, value, case-insensitive)

PHP Operators
Operators are used to perform operations on variables and values.
divided in following groups:
Arithmetic operators
Assignment operators
Comparison operators:
        == equal
        === identical (same type)
        != <> not equal
        !== not identical
Increment/Decrement operators
Logical operators:
        and or x0r && || !
String operators
        . concatenation
        .= concatenation assignment
Array operators
        + union of both
        == same key value pairs
        === identical key/value pairs (both in order and types)
        != <> inequality
        !== nonidentiyt

PHP Conditional Statements
if: if(condition)  { code to be excuted if condition is true }
if...else
if...elseif...else
switch
switch (n) {
    case label1:
        code to be executed if n=label1;
        break;
    case label2:
        code to be executed if n=label2;
        break;
    case label3:
        code to be executed if n=label3;
        break;
    ...
    default:
        code to be executed if n is different from all labels;
}

PHP Loops
while: while(condition) { code to be executed }   // var in condition may possiblely be a global
do...while；
for： for loop is used when you know in advance how many times the script should run.
        for(init counter; test counter; increment counter){
            code;
        }
        var in for condition is global too
foreach: foreach loop works only on arrays
        foreach ($array as $value) or ($array as $key=>$value) {
            code to be executed;
        }
        
PHP 5 Functions: more than 1000 built-in functions.
A function is a block of statements that can be used repeatedly in a program.
function functionName() {
    code to be executed;
}
Function Arguments：
as many arguments as you want, just separate them with a comma
default argument value: func_name($var_name=default_value)

PHP array sort functions:
sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key

Global Variables - Superglobals
built-in variables that are always available in all scopes.
The PHP superglobal variables are:
$GLOBALS: used to access global variables from anywhere in the PHP script
$_SERVER: holds information about headers, paths, and script locations.
$_REQUEST: used to collect data after submitting an HTML form.
$_POST: used to collect form data after submitting an HTML form with method="post".
$_GET: used to collect form data after submitting an HTML form with method="get".can also collect data sent in the URL.
$_FILES
$_ENV
$_COOKIE
$_SESSION

PHP 5 Form Handling
Think SECURITY when processing PHP forms!
GET vs. POST
Both GET and POST create an array. This array holds key/value pairs, where keys are the names of the form controls and values are the input data from the user.
Information sent from a form with the GET method is visible to everyone 
Information sent from a form with the POST method is invisible to others (all names/values are embedded within the body of the HTTP request)

$_SERVER['PHP_SELF'] caused a XSS security vulnerability
Assume we have the following form in a page named "test_form.php":
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
Now, if a user enters the normal URL in the address bar like "http://www.example.com/test_form.php", the above code will be translated to:
<form method="post" action="test_form.php">
So far, so good.
However, consider that a user enters the following URL in the address bar:
http://www.example.com/test_form.php/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E
In this case, the above code will be translated to:
<form method="post" action="test_form.php/"><script>alert('hacked')</script>
This code adds a script tag and an alert command. And when the page loads, the JavaScript code will be executed (the user will see an alert box). 
This is just a simple and harmless example how the PHP_SELF variable can be exploited.
How To Avoid $_SERVER["PHP_SELF"] Exploits?
$_SERVER["PHP_SELF"] exploits can be avoided by using the htmlspecialchars() function.
Now if the user tries to exploit the PHP_SELF variable, it will result in the following output:
<form method="post" action="test_form.php/&quot;&gt;&lt;script&gt;alert('hacked')&lt;/script&gt;">

Validate Form Data With PHP
The first thing we will do is to pass all variables through PHP's htmlspecialchars() function.
We will also do two more things when the user submits the form:
Strip unnecessary characters (extra space, tab, newline) from the user input data (with the PHP trim() function)
Remove backslashes (\) from the user input data (with the PHP stripslashes() function)

PHP 5 Include Files
The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it 
into the file that uses the include statement.
The include and require statements are identical, except upon failure:
require will produce a fatal error (E_COMPILE_ERROR) and stop the script
include will only produce a warning (E_WARNING) and the script will continue

PHP 5 File Handling
PHP has several functions for creating, reading, uploading, and editing files.
readfile() function reads a file and writes it to the output buffer.
A better method to open files is with the fopen() function. This function gives you more options than the readfile() function.
open/read create/write upload...

PHP Cookies
A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the 
same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.
 The value of the cookie is automatically URLencoded when sending the cookie, and automatically decoded when received

PHP 5 Sessions
A session is a way to store information (in variables) to be used across multiple pages.
Unlike a cookie, the information is not stored on the users computer.
Session variables solve the user identification problem by storing user information to be used across multiple pages 
(e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.
Session variables hold information about one single user, and are available to all pages in one application.
Notice that session variables are not passed individually to each new page, instead they are retrieved from the session we open at the beginning of each page
Destroy a PHP Session
To remove all global session variables and destroy the session, use session_unset() and session_destroy():

The PHP Filter Extension
PHP filters are used to validate and sanitize external input.
The PHP filter extension has many of the functions needed for checking user input, and is designed to make data validation easier and quicker.
Why Use Filters?
Many web applications receive external input. External input/data can be:
User input from a form
Cookies
Web services data
Server variables
Database query results
PHP filter_var() Function
The filter_var() function both validate and sanitize data.
The filter_var() function filters a single variable with a specified filter. 

PHP Error Handling
default error handling in PHP is very simple. An error message with filename, line number and a message describing the error is sent to the browser.
ome of the most common error checking methods in PHP.
3 different error handling methods:
Simple "die()" statements
Custom errors and error triggers
        Creating a Custom Error Handler
        Set Error Handler
        trigger_error() trigger the error
Error reporting
Error Logging
By default, PHP sends an error log to the server's logging system or a file, 
depending on how the error_log configuration is set in the php.ini file. 
By using the error_log() function you can send error logs to a specified 
file or a remote destination.

PHP Exception Handling
Exception handling is used to change the normal flow of the code execution if a 
specified error (exceptional) condition occurs. This condition is called an exception.
This is what normally happens when an exception is triggered:
The current code state is saved
The code execution will switch to a predefined (custom) exception handler function
Depending on the situation, the handler may then resume the execution from the saved code state, 
terminate the script execution or continue the script from a different location in the code



命名空间：
如果一个文件中包含命名空间，它必须在其它所有代码之前声明命名空间
也可以在同一个文件中定义不同的命名空间代码

PHP面向对象...




















