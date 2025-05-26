---
layout: home
title: Pomysły o programowaniu
description: "To jest opis tego materiału"
permalink: /
---

<div id="home">
  <h1>Publikacje</h1>
  <ul class="posts">
    {% for post in site.posts %}
      <li><span>{{ post.date | date_to_string }}</span> &raquo; <a href="{{ post.url }}">{{ post.title }}</a></li>
    {% endfor %}
  </ul>

</div>
