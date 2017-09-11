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


















