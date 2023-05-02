---
layout: page
title: 🗂 Journal 🗃 ARCHIVES 🗄
permalink: /journals-archive/
---

Welcome to a reverse-chronological archival index of the sporadic public [JOURNAL entries]({{base}}/journal/) of [**B.F. Griffith**]({{base}}/about), a [skilled full-stack web-development practitioner with extensive experience designing＆planning as well as functionally developing, deploying, or maintaining responsive, efficient, and user-friendly enterprise-scale applications using a variety of popular frameworks＆libraries.]({{base}}/resume/)
<p>Please feel free to browse around by title to read entries pertaining to whichever subjects most interest you. 🖖🏼
</p>
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