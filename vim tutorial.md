#Vim Tutorial
**h** __j__ **k** __k__ represent **left down up right**  
**x** deletes charcter  
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

###the **put** command

