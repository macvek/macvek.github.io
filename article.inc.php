<?php
function when($d,$m,$y) {
  $r= new DateTime();
  $r->setDate($y, $m, $d);
  return $r;
}

function byDate($a,$b) {
  return $a['date'] < $b['date'] ? -1 : 1;
}

function showDate($r) {
  return $r->format("d.m.Y");
}

function loadMeta($name) {
  $e = include 'meta/'. $name . '.meta.php';
  if (!array_key_exists('title', $e) || !array_key_exists('date', $e)) {
    die("Improper metadata for : $name");
  }

  $e['id']=$name;
  return $e;
}

function meta() {
  global $argv;
  $here = $argv[0];
  $suffix = '.art.php';
  if (!str_ends_with($here, $suffix)) {
    die("failed to find meta for $here");
  }

  $name = substr($here, 0, strlen($here) - strlen($suffix));
  return loadMeta($name);
}

function styles() {
  ob_start();
?>
<link rel="stylesheet" href="styles.css"> 
<?php
  return ob_get_clean();
}

function head() {
  ob_start();
  $m = meta();
?>
<head>
<title><?=$m['title']?></title>
<?= styles() ?>
</head>
<?php
  return ob_get_clean();
}

function buildtoc() {
  $dir = opendir('meta');
  if (!$dir) {
    die("Failed to open dir");
  }

  $dict = [];
  $suffix = '.meta.php';
  for (;;) {
    $entry = readdir($dir);
    if ($entry === false) {
      break;
    }

    if ($entry == '.' || $entry == '..') continue;

    
    if (str_ends_with($entry, $suffix)) {
      $name = substr($entry, 0, strlen($entry) - strlen($suffix));
      $dict[] = loadMeta($name);
    }   
  }

  uasort($dict, 'byDate');
  return $dict;
}

function linkTo($name) {
  $r = loadMeta($name); 
  ob_start();
?>
<a href="<?=$r['id']?>.html"><?=$r['title']?></a>
<?php 
  return ob_get_clean();
}

function intro() {
  ob_start();
?>
<div>
<h1>Writing about good-old-software, how it was built and how it works.</h1>
</div>
<?php
  return ob_get_clean();
}

function heading() {
  ob_start();
  $m = meta();
?>
<div class="heading">
<h2><?=$m['title']?></h2>
</div>
<?php
  return ob_get_clean();
}

function toc($linkToIndex=true) {
  $entries = buildtoc();
  ob_start();
?>
<div class="toc">
  <ul>
<? if ($linkToIndex): ?>
  <li><a href="index.html"><i>home</i></a></li>
<? endif ?>
<?php foreach ($entries as $k=>$v): ?>
    <li><a href="<?=$v['id'] ?>.html"><?=$v['title'] ?></a> <i><?=showDate($v['date']) ?></i></li>
<?php endforeach ?>
  </ul>
</div>
<?php
  return ob_get_clean();
}

