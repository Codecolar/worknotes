###1、What does dot (.) mean in a struct initializer?

Answer：
This is a C99 feature that allows you to set specific fields of the struct by name in an initializer.
Before this, the initializer needed to contain just the values, for all fields, in order -- which still works, of course.

Example:
So for the following struct:
struct demo_s {
  int     first;
  int     second;
  int     third;
};

...you can use
struct demo_s demo = { 1, 2, 3 };

...or:
struct demo_s demo = { .first = 1, .second = 2, .third = 3 };

...or even:
struct demo_s demo = { .first = 1, .third = 3, .second = 2 };

...though the last two are for C99 only.
