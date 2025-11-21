<?php
$pallete = "a";

if ("a" == $pallete) {
  $C1 = "#0d0c1d";
  $C2 = "#161b33";
  $C3 = "#474973";
  $C4 = "#a69cac";
  $C5 = "#f1dac4";
  $C6 = "#E000c8";
}

$LINK = $C6;
$LINK_H = $C5;
$BG = $C1;
$FG = $C4;
$HD = $C5;

?>
body {
  background-color: <?=$BG ?>;
  color: <?=$FG ?>;
  font-family: vendsans;
  font-size: 1.3em;
  line-height:1.8;
}

code {
  color: #ffffff;
}

#main {
  min-width:800px;
  max-width:50%;
  margin: auto;
}

.section {
  padding: 30px;
  outline: 3px solid <?=$C3 ?>;
}

.section h1 {
  margin-top:0px;
}

@font-face {
  font-family: vendsans;
  src: url(static/VendSans-Regular.ttf)
}

.intro h3{
  color: <?=$C3;?>;
}

h1, h2, h3 {
  color: <?=$HD ?>;
}

a, a:link, a:visited, a:active{
  color: <?=$LINK?>;
}

a:hover {
  color: <?=$LINK_H?>;
}


