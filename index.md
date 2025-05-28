---
layout: home
title: Pomysły o programowaniu
description: "To jest opis tego materiału"
permalink: /
nav_order: 1
---

<div id="home">
  <p>Poniżej znajduje się seria moich przemyśleń na temat różnych rozwiązań pojawiających się w świecie IT.</p>

  <h1>Publikacje</h1>
  <ul class="posts">
    {% for post in site.posts %}
      <li><span>{{ post.date | date_to_string }}</span> &raquo; <a href="{{ post.url }}">{{ post.title }}</a></li>
    {% endfor %}
  </ul>

</div>
