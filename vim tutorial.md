#Vim Tutorial
**h** __j__ **k** __k__ represent **left down up right**  
**x** deletes character  
**u** to undo the last command, **U** to fix the whole line, undo the undo's **ctrl+R**  
press **i** to insert  
press **Esc** to escape to nomal mode  
press **A** to append text  
press **dw** to delete a word in normal mode  
press **d$** to delete to the end of the line in normal mode  
###operators and motions in normal mode
operators [number] + motions  
**example**  
d motion : d represents delete operator, motion is what d would operate on.  
short lists of motions:  
  w - delete from current charcter to the end of the word excluding the space
  e - delete from current to the end of the word including the space
  $ - delete from current to the end of the line  
  0 - delete from current to the begin of the line
  b - delete from current to the begin of the word
press motion button without an operator will move the cursor as specified  
###using a count for a motion
**example**  
2e, 3b, 0, $, 3w, d2w, d2e, d2b, dd, 2dd, 2j, 5k, 5h, 7l  

###the *put* command
type *p* to put previously deleted text after the current cursor  
**example**  
d, p; dd, p  
###the *replace* command
type "__r+*__" to replace the character at the cursor with character *  
###the *change* command
type **ce** to change until the end of a word  
*note*: it is a insert mode operator which deletes the word and place user in **insert** mode
###the *change* operator
type **c** to change used with the same motions as delete **d**  
__c + [number] + motion__  
**example**  
cb, ce, c$, c0, cw  


###cursor location and file status
**ctrl + G** to show location and the file status
**G** to move to the bottom of the file  
**gg** to move to the start of the file
**number + G** to move to the line number specified 
###the *search* command
Type / followed by a phrase to search for the phrase, then type *n* for next, type *N* for previous  
Search backword direction using ? instead of /  
to go back to where we came from press "*ctrl + o*", "*ctrl + I*" to go forword

###vimtutor 4.3 to be continued...
###matching parentheses seraching
type **%** when cursor is on any parenthesis will move curson to the other matching bracket  

###substitute command
:s/old/new - substitute the first occurrence of the old in the line  
:s/old/new/g - substitute all the occurrence of the old in the line  (g for global)  
:#,#s/old/new/g - substitute all the occurrence of the old between line # and #  
:%s/old/new/g - substitute all the occurrence of the old in the whold file  
:%s/old/new/gc - substitute all the occurrence of the old in the whold file with a prompt

###execute external commands
:!+command name and args  
write files - :w filename

###visual selection
press **v** for visual selection

###retrieving and merging files
insert contents of a file - :r filename  
insert output from external command - :r ![command]  

###the *open* command
type lowcase *o* to open up a new line *below* the cursor and go into insert mode  
type uppcase *O* to open up a new line *above* the cursor and go into insert mode  


###insert mode
'a' 'i' 'A' all go into insert mode, the only difference is where the character is inserted  
'R' replace all the characters behind  

###copy and paste
**y** to copy and **p** to paste
use v to visual select text need to paste and type *y* to yank and then go to the place where text need to paste and type p  
**yw** to yank one word  
**y$** to yank whole line  ...et cetera

###set options
:set ic - ignore case  
:set noic - not ignore case  
:set hlsearch/hls - highlight matched words  
:set nohlsearch - not highlight  
:set incsearch/ins - incremental search  
/xxx\c - ingnore case for just one search  


###PS:
ZZ to quit like :q!
type : and then type Tab to see possible completions  
H   move to top of screen  
M   move to middle of screen  
L   move to bottom of screen  

z.  scroll the line with the cursor to the center of the screen  
zt  scroll the line with the cursor to the top  
zb  scroll the line with the cursor to the bottom  

Ctrl-D  move half-page down  
Ctrl-U  move half-page up  
Ctrl-B  page up  
Ctrl-F  page down  
Ctrl-O  jump to last (older) cursor position  
Ctrl-I  jump to next cursor position (after Ctrl-O)  
Ctrl-Y  move view pane up  
Ctrl-E  move view pane down  

###multi tabs
:tabnew filename - new tab  
:tabn - next tab  
:tabp - previous tab  

