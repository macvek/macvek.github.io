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
in order to modify it / add something or disable something without breaking the whole setup.
<hr/>
(work in progress)
</div>

</div>
</body>
</html>
