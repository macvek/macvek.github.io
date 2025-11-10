<?php require 'article.inc.php' ?>
<!doctype html>
<html>
<head>
<title>macvek - Coding blog</title>
<?= styles() ?>
</head>
<body>
<div id="main">

<?= intro() ?>
<?= toc(false) ?>

<div class="section">
<h1>Recently</h1>
<p>Some ideas on how stuff works and what I focus on in my spare time.</p>
<p>Recently I got inspired to focus again on vim's design. Understand the concepts behind it, how to write plugins, what components it is built from<p>
<p>Follow up: <?= linkTo('vim-getting-into-source-code') ?>

</div>

</div>
</body>
