1	How Ruby deals with proc type parameter in the last place.
If the last argument to a method is preceded by an ampersand, Ruby assumes that it is a Proc object. It removes it from the parameter list, converts the Proc object into a block, and associates it with the method.

2	Ruby面向对象概述
Ruby 是纯面向对象的语言，Ruby 中的一切都是以对象的形式出现。Ruby 中的每个值都是一个对象，即使是最原始的东西：字符串、数字，甚至连 true 和 false 都是对象。类本身也是一个对象，是 Class 类的一个实例

3	What is Module in Ruby?
A Module is a collection of methods and constants. The methods in a module may be instance methods or module methods. Instance methods appear as methods in a class when the module is included, module methods do not. Conversely, module methods may be called without creating an encapsulating object, while instance methods may not. 
4	Nested Classes in Classes or Modules in Ruby

Other OOP languages have inner classes which cannot be instantiated without being bound to an upper level class. For instance, in Java,
class Car {
    class Wheel { }
}
only methods in the Car class can create Wheels.
Ruby doesn’t have that behaviour.
In Ruby,
class Car
  class Wheel
  end
end
differs from
class Car
end

class Wheel
end
only in the name of the class Wheel vs. Car::Wheel. This difference in name can make explicit to programmers that the Car::Wheel class can only represent a car wheel, as opposed to a general wheel. Nesting class definitions in Ruby is a matter of preference, but it serves a purpose in the sense that it more strongly enforces a contract between the two classes and in doing so conveys more information about them and their uses.
But to the Ruby interpreter, it’s only a difference in name.
As for your second observation, classes nested inside of modules are generally used to namespace the classes. For instance:
module ActiveRecord
  class Base
  end
end
differs from
module ActionMailer
  class Base
  end
end
Although this is not the only use of classes nested inside of modules, it is generally the most common.

5	How do I check if a class is defined?
Object.constants
6	Objects and Classes Wrap-Up
What’s an object? It’s just a bunch of instance variables, plus a link to
a class. The object’s methods don’t live in the object—they live in the
object’s class, where they’re called the instance methods of the class.
What’s a class? It’s just an object (an instance of Class), plus a list of
instance methods and a link to a superclass. Class is a subclass of
Module, so a class is also a module.
