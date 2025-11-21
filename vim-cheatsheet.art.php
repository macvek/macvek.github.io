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
<h3>Summary of shortcuts and topics</h3>
<p>
VIM has a number of environment variables, lookup paths and concepts which are spread across multiple documents. The point of this article is to 
gather them all into a single place.

<h3>Tips</h3>
<ul>
<li><code>:help index</code> - open help file with all the commands</li>
<li><code>/</code> - to start searching; then <code>n</code> - to move to next;<code>shift+n</code> - to move to prev; type <code>:noh&lt;ENTER&gt;</code> - to turn off highlighted text</li>
<li>hover over a <code>&lt;word&gt;</code> and type <code>*</code> - it will behave as typing <code>:/&lt;word&gt;</code></li
<li><code>:set ignorecase?</code> for making case insensitive searches</li>
<li><code>set insearch</code> - to highlight text while  - jump to mark with a last change</li>riting - also TAB works as autocomplete</li>
<li>if you have multiple windows, <code>CTRL+W T</code> will place current windows into separate tab</li>
<li><code>:tab help</code> to have a full page help in a different tab</li>
<li><code>:set SOMETHING?</code> - will answer SOMETHING or noSOMETHING; like <code>:set number?</code></li>
<li><code>:set SOMETHING</code>- turns ON feature SOMETHING</li>
<li><code>:set noSOMETHING</code> - turns OFF feature SOMETHING</li>
<li><code>:set makeDefault&amp;</code> - &amp; suffixed restores default value</li>
<li><code>:scriptnames</code> - lists ALL the sourced scripts</li>
<li><code>CTRL + C</code> or <code>ESC</code> - back to NORMAL mode from INSERT mode</li>
<li><code>CTRL + O</code> - back to NORMAL - execute command (i.e. type <code>:something</code>) - get back to INSERT</li>
<ul>
  <li><code>CTRL+I</code> / <code>CTRL+O</code> (figure I/O are next to each other on keyboard) shuffles forward/backward via cursor movement</li>
  <li>note:<code>CTRL+I</code> = <code>&lt;TAB&gt;</code> 
</ul>
<li><code>CTRL + D</code> / <code>CTRL + T</code> - shift line by 1 tab left/right</li>
<li><code>:r <filename></code> - insert content of file name at the cursor position; try <code>:r /etc/hosts</code> </li>
<li><code>:r! &lt;cmd&gt;</code> - insert content of executed cmd at the cursor position; try <code>:r! ls /</code></li>
<li><code>:e</code> - reloads initial version of a file (i.e. :earlier)</li>
<li>while selected in visual mode, run <code>!&lt;cmd&gt;</code> to filter lines via <code>&lt;cmd&gt;</code>, try sequence:
  <ul>
    <li><code>:r! ls / &lt;ENTER&gt; V</code> (to select lines) <code>:! grep lib &lt;ENTER&gt;</code> </li>
    <li>should leave you with line containing only <code>lib</code></li>
  </ul>
</li>
<li><code>z&lt;ENTER&gt;</code> - in NORMAL - redraws window with current line near top; check 'set scrolloff?' for number of line from top</li>
<li>pasting from system clipboard is via <code>"*p</code> (i.e. double quote ; star ; p ) - further reading <code>:help clipboard</code></li>
<li>Place with bundled plugins : <code>$VIMRUNTIME/runtime/pack/dist/opt</code> </li>
<li><code>:h usr_05.txt</code> -- few words about bundled plugins + <code>:h local-additions</code> + <code>:h load-plugins</code> + <code>:h vimball</code> + <code>:h getscript</code></li>a
<li>ALL the options are visible under <code>:options</code> ; there while hovering over option + ENTER you can toggle on/off then</li>
<li><code>:set list</code> - toggle whitespace characters</li>
<li><code>:3new</code> - 3 - means the number of lines; <code>:new</code> is a command for new window, it works the same for <code>:split</code> filename</li>
<li>about macros - <code>:h usr_10.txt</code></li>
<li><code>q:</code> - interactive history</li>
<li><code>fold:</code> zo/zc/zf - create</li>
<li><code>:help</code> function-list</li>

<li><code>function/endfunction</code> -- legacy script; def / enddef -- vim9 scripts ; vim9 are compilable (<code>:help defcompile</code>)</li>
<li><code>:def</code> - lists all defined defs and functions</li>
<li>general <code>:help vim9</code></li>
<li><code>&lt;PLUG&gt;</code> or <code>&lt;SID&gt;</code> in a name is a convention limiting key mappings; i.e. it works as an alias; so binding references <code>&lt;PLUG&gt;</code> and later <code>&lt;PLUG&gt;</code> is defined</li>
<li><code>:verbose</code> command - shows all the places where each user-defined command was added from</li>
<li>my thoughs : biggest flaw of vim family is lack of plugin framework</li>
</ul>


<h3>Navigation</h3>
<ul>
<li><code>&lt;NUMBER&gt;G</code>- jump to line &lt;NUMBER&gt;</li>
<li><code>ESC</code> - jump to normal mode</li>
<li><code>CTRL + [</code> - the same behavior as hitting ESC key</li>
<li><code>:(colon)</code> - start typing command (from NORMAL mode)</li>
<li><code>CTRL + ]</code> - follow link</li>
<li><code>CTRL + O</code> - move back to previous cursor position</li>
<li><code>CTRL + T</code> - move back on TAG stack (it will jump at most to your first CTRL+] ), check tags stack using :tags</li>
<li>once mouse enabled <code>:set mouse=a</code> ; double click follows link; CTRL+right click - move back</li>
<li><code>CTRL + D</code> - in middle of typing command, to show possible matching values (similar to using TAB)</li>
<li><code>:cnext</code> / <code>:copen</code> - shuffle through errors/tooltips</li>
<li><code>CTRL+D(down)</code> - <code>CTRL+U(up)</code> - scrolling - better than pageup/pagedown as it makes it less jumpy</li>
<li>in NORMAL mode - m&lt;letter&gt; sets mark; jump to mark is by `&lt;letter&gt;</li>
<li>upper-case letters are global marks working across files</li>
<li><code>`.</code> - jump to mark with a last change</li>
<li><code>:noremap</code> ; <code>:unmap;</code> &lt;Nop&gt; - noremap, will not use values as aliases; unmap - clears; &lt;Nop&gt; is for empty op</li>
<li><code>:command</code> - list all the commands</li>
<li>An autocommand is a command that is executed automatically in response to some event</li>
</ul>

<h3>Editing (in normal mode)</h3>
<ul>
<li><code>x</code> - delete a single character</li>
<li><code>0</code> - jump to start of a line</li>
<li><code>$</code> - jump to end of a line</li>
<li><code>^</code> - jump to first character of a line</li>
<li><code>%</code> - jump to closure of paratheses like between { } or ( )</li>
<li><code>J</code> - delete line ending - i.e join lines</li>
<li><code>u</code> - undo</li>
<li><code>CTRL+R</code> - redo</li> 
</ul>

<h3>Window handling</h3>
<ul>
<li><code>:vsplit</code> - vertical split</li>
<li><code>:split</code> - horisontal split</li>
<li><code>:help windows.txt</code> - manual only about resizing and moving etc.</li>
<li>Resizing of the window is supported by mouse - try to drag border, works for most consoles</li>
</ul>

<h3>Tabs handling</h3>
<ul>
<li>TAB is not a window, but a collection of windows. It is as if a separately opened vim which you can switch to</li>
<li><code>:tab</code> CMD - run CMD and if it opens new window, will create TAB instead;
<li><code>:tab</code> help - open help but in new tab</li>
<li><code>:help</code> tabpage.txt - all about tabs</li>
<li><code>:tab split</code> - open current window in a new tab</li>
<li><code>:tabnew</code> <code>:tabclose</code> - open / close tab</li>
<li>(on the TAB panel) double mouse click / clicking on X on the far right - open / close tab
<li><code>:tab&lt;TAB&gt;</code> - check other tab related commands</li>
</ul>

<h3>Environment variables</h3>
<ul>
<li><code>VIMRUNTIME</code> - path to a folder with all initial scripts with defaults</li>
<li><code>VIMINIT</code> - value is a first command executed by vim - like 'source PATH.TO.VIM.RC</li>
<li><code>VIM</code> - the path to a 'global' vim dir where vimrc can be stored</li>
<li>note: there are also env variables <code>$MYVIMDIR</code> and <code>$MYVIMRC</code>, but these are created inside already loaded vim during its config discovery, see <code>:help starting.txt</code></li>
</ul>

<h3>Files</h3>
<ul>
<li><code>$VIMRUNTIME/defaults.vim</code> - a set of defaults IF you have no .vimrc - also sourced from vimrc_example</li>
<li><code>$VIMRUNTIME/vimrc_example.vim</code> - a copy-paste example of how .vimrc can look from scratch</li>
</ul>

<h3>Commands/names</h3>
<ul>
<li><code>:source</code> - it includes content of a file and execute every command as if they were typed manually</li>
<li><code>:packadd!</code> - loads plugin
</ul>

<h3>Help related</h3>
<ul>
<li><code>:help helphelp</code> - shows help about using help</li>
<li>all docs from help commands are stored under <code>$VIMRUNTIME/docs</code></li>
<li>to find key binding explanation, try to type it to help, like <code>:help CTRL-W</code> to get into first topic about <code>CTRL-W</code> shortcut;</li>
<li><code>:help patterns.txt</code> - manual about pattern matching</li>
<li><code>:help usr_toc.txt</code> - table of content for a manual, good place to start navigation from</li>
<li><code>:help usr_32.txt</code> - manual about undo/redo tree</li> 
</ul>

<h3>Copy/Pasting - i.e. delete, yank, put</h3>
<ul>
<li><code>v</code> - turn on VISUAL mode, to select text</li>
<li><code>V</code> - turn on LINE VISUAL mode, to select lines</li>
<li><code>y</code> - yank - copy</li>
<li><code>p</code> - put - paste</li>
<li><code>d</code> - delete - cut</li>
<li>NOTE: every content is stored in a registry - registry is named with a SINGLE charcter, and cutting is stacked in 1-9 registries</li>
<li><code>"&lt;char&gt;</code> - like "a - select &lt;char&gt; registry - like registry 'a'</li>
<li><code>:reg</code> - show content of all registries</li>
</ul>

</div>
</body>
</html>

