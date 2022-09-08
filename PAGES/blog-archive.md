---
layout: page
title: 🗂 BLOG 🗃 ARCHIVE 🗄
permalink: /blog-archive/
---

Welcome to a reverse-chronological archive of the [web-development and software-engineering blog]({{base}}/coding-blog/) of [**B.F. Griffith**]({{base}}/about), a [skilled full-stack practitioner with several years of coding experience designing and planning as well as functionally developing, deploying, and maintaining responsive, efficient, and user-friendly enterprise-scale applications using a variety of frameworks and libraries.]({{base}}/resume/)
<p>Please feel free to browse by title to read posts pertaining to whichever subjects most interest you. 🖖🏼
</p><!--Vulcan-salute-->
<p>
  <img 
    id="bow-arrow_Artemesian" 
    src="/IMAGES/bow-arrow_Artemesian.png" 
    alt="decorative Artemesian bow and arrow" 
    style="margin:0 auto;" 
    height="auto" width="50">
</p>
<!-- coding BLOG posts꞉ reverse-chronological archival list -->
{% for post in site.posts %}
  * {{ post.date | date: "%B %-d, %Y" }} &#10132; [ {{ post.title }} ]({{ post.url }})
{% endfor %}