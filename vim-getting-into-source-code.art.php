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
<h3>Why to get into vim?</h3>
<p>
I have a mixed felling about vim. In my regular work I use neovim. After few weeks I got into all (I guess) relevant keybindings and I can say - it works for me.</p>

<p>
There is a BUT here. The BUT is about how horrible, for me, is extending this editor. The biggest struggles I find, as a software developer, is to 'feel' where to place new stuff if I want to extends something,
and where should it be in the first place, once I want to modify it. With vim/neovim it gives me creeps. I feel lost every time I want to alter any settings.</p>
<p>
My setup is <a href="<?=urlTo('neovim')?>">neovim</a> + <a href="<?=urlTo('nvchad')?>">nvchad</a>, which just works for most cases. While finding configs in cloned plugin repository, I managed to turn on LSP support and it all so so works. BUT still I'm not confident enough to figure how it all works together.</p>

<p>
Experience with Visual Studio Code gave me mixed feelings (mainly due to performance of the editor itself), still it always had this single <i>extensions</i> tab accessible to browse what is installed.
The extension management is really super easy in comparison to what I get for vim. So the goal is to figure out how all these plugins and extensions work and combine together.</p>

<p>
I figured that as it already works for me for 95%, I should get into a source code and try to understand concepts behind how vim/neovim is designed and try to solve the mistery of where stuff should be,
in order to modify it / add something or disable something without breaking the whole setup.</p>

<h3>Setup</h3>
<p>
First things first. To get started into source code, it must be pulled from somewhere. 
Vim is hosted on github: <?=hrefTo('git-vim') ?>.

<p>
Before getting into source code, there are:
<ul>
<li><?=hrefTo('vim')?> - an official vim website </li>
<li><?=hrefTo('vim-manual')?> - here jump down to 'Tuning Vim' section for vim-script tutorial.</li>
</ul>

</p>

<h3>Building it</h3>
<p>
Vim is using autotools setup, which in a nutshell requires calling 
<code>./configure</code> and <code>make</code>
<p>
The resulting binary lands in <code>src/vim</code>. I want to focus on an isolated environment, so the task is to setup it in a way it only search for files in current repository. Therefore just after compilation, I check <code>git status</code>
to make sure <code>.gitignore</code> is correctly set and so subsequest changes will track all my experimenting with the code.
<p>
To separate changes, I create a branch 'local' and so I will have all my play tracked.
<p>
Next is to have development environment along source code and to run vim from custom location. There is a special environment variable called VIMINIT.
<p>
VIMINIT is a command which will be executed as a first command during vim boot. I will use it to load commands from my custom folder.
<p>
VIMRUNTIME is another environment variable which I need to tune, 
so vim will use a <i>runtime</i> folder from a source code.
Otherwise it try to load content from <code>/usr/local/vim</code>.

<p>
Last step is to create a <code>local</code> folder and place there a an empty <code>vimrc</code> file.
<p>
My command looks now like this: <code>VIM="$(pwd)/local" VIMRUNTIME=$(pwd)/runtime src/vim</code>.
<p>By default vimrc is being looked inside $VIM folder; you can check all folders by running :version command
<p>(note: I used to use $VIMINIT command, but then I found $VIM as a ultimate override of a vimrc dir)
<p>
I execute from a source code directory. Vim starts with a default prompt.
To test if local file was correctly loaded, I simply insert incorrect command, literally rubish like asd123asd123 and check if it starts with
an error.
<p>
Once I confirmed that both VIMINIT nad VIMRUNTIME are correctly loaded, I pack it all into a <code>local/vim</code> script:
<pre class="code-bash">
#!/bin/sh
export VIMINIT="source $(pwd)/local/vimrc"
export VIMRUNTIME="$(pwd)/runtime"
exec $(pwd)/src/vim $@  
</pre>

which from now on will be my script to start vim during development.

<h3>Trying to be first timer again</h3>

<p>
Now as I wanted to have a full recap of what vim offers, I decided to try to behave as a first timer... meaning I followed hints and typed F1 for help.
Experience was strange, as I already knew how to navigate, switch windows etc. Still next few hours I've spent on trying to recap all shortcuts 
and to figure how little piece of functionalities I actually use every day.
<p>
One of the things I totally forgot how to do, was all about macros and handling copy/paste, which I always had replaced with clipboard provider.
<p><b>note:</b> at this point I started writing separate text with <?=linkTo('vim-cheatsheet')?> to gather all the conventions vim has
<p>

During browsing of a help / tutorial I've found an example vimrc file under <code>runtime/vimrc-example.vim</code>. 
I've copied it to my <code>local/vimrc</code> and this was my starting point.
<p>
<i>Next opening of vim shows that it is sourced by displaying help with colored text</i>

<p>
(for 2 weeks I've paused working on this content to figure out what vim offers)
</p>


<p>
(to be concluded with how to make some vimscript workbench, so a scripting can happen)
<hr/>

</div>

</div>
</body>
</html>
