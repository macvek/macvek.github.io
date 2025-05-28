---
layout: post
title: Jednak nie haxe
---

{{ page.title }}
================

Kilka dni temu trafiłem na bardzo interesujący język - [Haxe](https://haxe.org/)

Projekt o tyle ciekawy, że kod jest generowany do innego języka programowania lub jako bytecode do maszyny wirtualnej.
Kod można przekompilować do pythona, php, javascript, czy C++ i z moich wstępnych testów wszystko rzeczywiście działa jak należy.
Docelowo kod może też trafiać na platformy mobilne.

## Czemu haxe jest niszą?

Projekt jest od ponad 20 lat publiczny i swoje początki ma w ActionScript, który był bliźniakiem javascriptu używanym przez FlashPlayer.

Składania jest bliźniaczo podobna do C++/C#/Java, obsługuje pattern patching, ciekawy mechanizm abstrakcyjnych typów i generalnie jest łatwa do nauczenia.

Język ma wspacie dla vscode, sam kompilator jest dosyć prosty i wszystko tutaj po prostu działa.

Dlaczego ten język nie jest popularnie używany? Rozwiązuje sporo problemów i wydaje się, że mógłby być dobrym narzędziem do zaprojektowania przenaszalnego kodu.

W mojej ocenie brakuje tu kilku narzędzi oczekiwanych od obecnych rozwiązań:
* Kod jest kompilowany na inną platformę, więc nie ma wbudowanego debuggera; można debugować kod przez source mapy, ale to nie pozwoli rozwiązać skomplikowanych błędów w algorytmach
* Brakuje jednolitego narzędzia do testów jednostkowych. Brak debugera można kompensować testami jednostkowymi, ale jeżeli nie ma do tego narzędzia, pozostaje tylko `echo` do konsoli

[haxelib](https://lib.haxe.org/), czyli pakiety do haxe, agregują kilkaset komponentów. Są to zarówno silniki do gier jak i małe pomocnicze narzędzia. Największą popularność mają narzędzia do tworzenia gier, jednakże:
* Te usługi nie są aktualizowane, najpopularniejsze narzędzia są wydane kilka/kilkanaście miesięcy temu;
* Paczka do YAML jest z przed 5 lat i pobrana niewiele ponad 10000 razy. Rysuje to społeczność jako hobbystów.

## Zmarnowany potencjał

Zastanawia mnie jak taki projekt mógł żyć tak długo. Może trafiają się hobbyści, którzy co raz dodadzą swoje trzy grosze i zbudują kolejny projekt w oparciu o `haxe`.

Czy gdyby jakaś duża firma zainwenstowała w takie rozwiązanie, udało by się mu zyskać na popularności? 

Może wniosek jest inny i język zbudowany w założeniu, że będzie kompilowany na wiele platform, nie może budzić zaufania zespołów developerskich? 
Jest to ryzykowna zależność. Nic nie gwarantuje, że wynikowy `kod`, nadal będzie działał na danej platformie za kilka miesięcy czy lat. 

Po krótkiej przygodzie z tym projektem odłożyłem go z niedosytem. Zastanawiam się czy w czasie powszechnych LLMów realną potrzebą jest posiadać kod, który trzeba portować na inne platformy.

## Jak trafiłem na haxe?

Szukając otwartego silnika do zrobienia prototypu gry, trafiłem na [Armory3d](https://armory3d.org/engine/). Silnik pokazuje bardzo obiecujące dema, które działają w przeglądarce.

Niestety próba uruchomienia tego projektu mi się nie udała, owocując serią błędów w Blenderze. Najpewniej udałoby mi się ten projekt podnieść przy większej odrobinie wysiłku, ale brak popularnej gry zbudowanej na tym silniku, każe mi go traktować jako demo technologiczne. 

## Podsumowanie

* Cieszy, że nadal udaje mi się znaleźć niszowe projekty utrzymywane przez społeczność,
* Haxe pokazuje, że nawet solidny produkt nie nabierze wiatru w skrzydła, bez mocnego wsparcia społeczności,
* Rynek obecnie stawia wiele wymagań i oczekiwań od narzędzi do programowania. Wymieniłem tylko brak debugera i testów, ale też sprawdzanie CVE, lintery i inne automaty do budowania są oczekiwane przed wybraniem technologii.
* Haxe odkładam na półkę. Najpewniej budując produkt trafiłbym na brak jakiejś fundamentalnej funkcji, której dodanie/poprawienie doprowadziłoby mnie do białej gorączki, a wujek google nie mógłby pomóc. 
