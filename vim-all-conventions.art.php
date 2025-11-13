<?php require 'article.inc.php'; ?>
<!doctype html>
<html>
<?=head()?>
<body>
<div id="main">
<?= intro() ?>
<?= toc() ?>

<div class="section">
<?= heading() ?>
<h3>Summary of what I find most useful</h3>
<p>
VIM has a number of environment variables, lookup paths and concepts which are spread across multiple documents. The point of this article is to 
gather them all into a single place.

<h3>Tips</h3>
<ul>
<li>:help index - open help file with all the commands</li>
<li>/ - to start searching; then n - to move to next; shift+n - to move to prev; type :noh<ENTER> - to turn off highlighted text
<ul>
<li>hover over a <word> and type * - it will behave as typing :/<word>
<li>check :set ignorecase? for making case insensitive searches</li>
<li>set insearch - to highlight text while writing - also TAB works as autocomplete</li>
</ul>
<li>if you have multiple windows, <span class="code-key">CTRL+W T</span> will place current windows into separate tab</li>
<li><span class="code-cmd">:tab help</span> to have a full page help in a different tab</li>
<li>:set SOMETHING? - will answer SOMETHING or noSOMETHING; like :set number?</li>
<li>:set SOMETHING - turns ON feature SOMETHING</li>
<li>:set noSOMETHING - turns OFF feature SOMETHING</li>
<li>:set makeDefault&amp; - &amp; suffixed restores default value</li>
<li>:scriptnames - lists ALL the sourced scripts</li>
<li>CTRL + C or ESC - back to NORMAL mode from INSERT mode</li>
<li>CTRL + O - back to NORMAL - execute command (i.e. type :something) - get back to INSERT</li>
<ul>
  <li>CTRL+I / CTRL+O (figure I/O are next to each other on keyboard) shuffles forward/backward via cursor movement</li>
  <li>note:CTRL+I = &lt;TAB&gt;; 
</ul>
<li>CTRL + D / CTRL + T - shift line by 1 tab left/right</li>
<li>:r <filename> - insert content of file name at the cursor position; try <span class="code-cmd">:r /etc/hosts</span> </li>
<li>:r! <cmd> - insert content of executed cmd at the cursor position; try <span class="code-cmd">:r! ls /</span></li>
<li>:e - reloads initial version of a file (i.e. :earlier)</li>
<li>while selected in visual mode, run !<cmd> to filter lines via <cmd> , try sequence:
  <ul>
    <li>:r! ls / &lt;ENTER&gt; V (to select lines) :! grep lib &lt;ENTER&gt; </li>
    <li>should leave you with line containing only 'lib'</li>
  </ul>
</li>
<li>z<ENTER> - in NORMAL - redraws window with current line near top; check 'set scrolloff?' for number of line from top</li>
<li>pasting from system clipboard is via "*p (i.e. double quote ; star ; p ) - further reading :help clipboard</li>
<li>Place with bundled plugins : $VIMRUNTIME/runtime/pack/dist/opt </li>
<li>:h usr_05.txt -- few words about bundled plugins + :h local-additions + :h load-plugins + :h vimball + :h getscript</li>a
<li>ALL the options are visible under :options ; there while hovering over option + ENTER you can toggle on/off then<li>
<li>:set list - toggle whitespace characters</li>
</ul>

<h3>Navigation</h3>
<ul>
<li><NUMBER>G - jump to line <NUMBER></li>
<li>ESC - jump to normal mode</li>
<li>CTRL + [ - the same behavior as hitting ESC key</li>
<li>:(colon) - start typing command (from NORMAL mode)</li>
<li>CTRL + ] - follow link</li>
<li>CTRL + O - move back to previous cursor position</li>
<li>CTRL + T - move back on TAG stack (it will jump at most to your first CTRL+] )</li>
<li>once mouse enabled <i>:set mouse=a</i> ; double click follows link; CTRL+right click - move back</li>
<li>CTRL + D - in middle of typing command, to show possible matching values (similar to using TAB)</li>
<li>:cnext / :copen - shuffle through errors/tooltips</li>
<li>CTRL+D(down) - CTRL+U(up) - scrolling - better than pageup/pagedown as it makes it less jumpy</li>
<li>in NORMAL mode - m<letter> sets mark; jump to mark is by `<letter> 
</ul>

<h3>Editing (in normal mode)</h3>
<ul>
<li>x - delete a single character</li>
<li>0 - jump to start of a line<li>
<li>$ - jump to end of a line</li>
<li>^ - jump to first character of a line</li>
<li>% - jump to closure of paratheses like between { } or ( )
<li>J - delete line ending - i.e join lines</li>
<li>u - undo</li>
<li>CTRL+R - redo</li> 
</ul>

<h3>Window handling</h3>
<ul>
<li>:vsplit - vertical split</li>
<li>:split - horisontal split</li>
<li>:help windows.txt - manual only about resizing and moving etc.</li>
<li>Resizing of the window is supported by mouse - try to drag border, works for most consoles</li>
</ul>

<h3>Tabs handling</h3>
<ul>
<li>TAB is not a window, but a collection of windows. It is as if a separately opened vim which you can switch to</li>
<li>:tab CMD - run CMD and if it opens new window, will create TAB instead;
<li>:tab help - open help but in new tab</li>
<li>:help tabpage.txt - all about tabs</li>
<li>:tab split - open current window in a new tab</li>
<li>:tabnew :tabclose - open / close tab</li>
<li>(on the TAB panel) double mouse click / clicking on X on the far right - open / close tab
<li>:tab<TAB> - check other tab related commands</li>
</ul>

<h3>Environment variables</h3>
<ul>
<li>VIMRUNTIME - path to a folder with all initial scripts with defaults</li>
<li>VIMINIT - value is a first command executed by vim - like 'source PATH.TO.VIM.RC</li>
<li>VIM - the path to a 'global' vim dir where vimrc can be stored</li>
<li>note: there are also env variables $MYVIMDIR and $MYVIMRC, but these are created inside already loaded vim during its config discovery, see :help starting.txt</li>
</ul>

<h3>Files</h3>
<ul>
<li>$VIMRUNTIME/defaults.vim - a set of defaults IF you have no .vimrc - also sourced from vimrc_example</li>
<li>$VIMRUNTIME/vimrc_example.vim - a copy-paste example of how .vimrc can look from scratch</li>
</ul>

<h3>Commands/names</h3>
<ul>
<li>:source - it includes content of a file and execute every command as if they were typed manually</li>
<li>:packadd! - loads plugin
</ul>

<h3>Help related</h3>
<ul>
<li>:help helphelp - shows help about using help</li>
<li>all docs from help commands are stored under $VIMRUNTIME/docs</li>
<li>to find key binding explanation, try to type it to help, like :help CTRL-W to get into first topic about CTRL-W shortcut;</li>
<li>:help patterns.txt - manual about pattern matching</li>
<li>:help usr_toc.txt - table of content for a manual, good place to start navigation from</li>
<li>:help usr_32.txt - manual about undo/redo tree</li> 
</ul>
<h3>Copy/Pasting - i.e. delete, yank, put</h3>
<ul>
<li>v - turn on VISUAL mode, to select text</li>
<li>V - turn on LINE VISUAL mode, to select lines</li>
<li>y - yank - copy</li>
<li>p - put - paste</li>
<li>d - delete - cut</li>
<li>NOTE: every content is stored in a registry - registry is named with a SINGLE charcter, and cutting is stacked in 1-9 registries</li>
<li>"<char> - like "a - select <char> registry - like registry 'a'</li>
<li>:reg - show content of all registries</li>
<li></li>
</ul>
<p>



<hr/>
(work in progress)
</div>

</div>
</body>
</html>
