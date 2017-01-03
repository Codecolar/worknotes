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


