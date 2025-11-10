#!/bin/sh

C="podman run -v $(pwd):$(pwd) -w $(pwd) --rm -ti php:8.2-cli php"

rm *.html
$C index.php > index.html

for ART in $(find *.art.php) ; do 
  DST=$(echo $ART | sed -e s/art\\.php/html/)
  echo Compile $ART
  $C $ART > $DST
done

#$C first-entry.art.php > first-entry.html

