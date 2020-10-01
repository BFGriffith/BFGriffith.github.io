---
layout: page
title: About the Author
permalink: /about/
---

<style type="text/css">
/* accordion styles */
.accordion {
  box-shadow: 0 1px 8px rgba(0, 0, 0, 0.25);
} 
/* radio inputs */
.accordion input[name='panel'] {
  display: none;
}
/* labels */
.accordion label {
  box-sizing: border-box;
  position: relative;
  display: block;
  padding: 1em;
  background-color: #E6E2DA;
  border-bottom: 1px solid rgba(0, 0, 0, 0.15);
  /* box-shadow: inset 0 2px 0 #fff; */
  font-size: 1.5em;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.75);
  color: #666;
  cursor: pointer;
  transition: all 0.4s cubic-bezier(0.865, 0.14, 0.095, 0.87);
}
.accordion label:after {
  content: '\002316';
  position: absolute;
  right: 1em;
  width: 1.6em;
  height: 1.6em;
  color: #eee;
  text-align: center;
  border-radius: 50%;
  background: #268bd2;
  box-shadow: inset 0 1px 6px rgba(0, 0, 0, 0.5), 0 1px 0 #fff;
  text-shadow: 0 1px 0 rgba(0, 0, 0, 0.75);
}
.accordion label:hover, .accordion label:hover:after {
  color: #8f5536;
  /* color: #2980b9; */
}
.accordion input:checked + label {
  color: #2980b9;
}
.accordion input:checked + label:after {
  content: '\002718';
  /* adjsut line-height to vertically center icon */
  /* line-height: .9em; */
}
/* panel content */
.accordion .accordion_content {
  overflow: hidden;
  max-height: 0em;
  position: relative;
  padding: 0 1.5em;
  box-shadow: inset 4px 0 0 0 #2980b9, inset 0 3px 6px rgba(0, 0, 0, 0.75);
  background: #444;
  background: linear-gradient(to bottom, #444444 0%, #222222 100%);
  color: #eee;
  transition: all 0.4s cubic-bezier(0.865, 0.14, 0.095, 0.87);
}
.accordion .accordion_content:not(:last-of-type) {
  box-shadow: inset 0 -2px 2px rgba(0, 0, 0, 0.25), inset 4px 0 0 0 #2980b9, inset 0 3px 6px rgba(0, 0, 0, 0.75);
}
.accordion .accordion_content .accordion_header {
  padding: 1em 0;
}
.accordion .accordion_content .accordion_body {
  font-size: .825em;
  line-height: 1.4em;
  padding: 0 0 1.5em;
}
input[name='panel']:checked ~ .accordion_content {
  /* set close to maximum accordion content height */
  max-height: 150em;
}
</style>
<!-- B.F. Griffith’s biographical summary: -->
<p>
  <span style="font-style:italic;">Menschliches, Allzumenschliches:&nbsp;</span>B.F. Griffith is just another middle-aged nerdy intellectual with too many hobbies and never enough time for them all; he’s a verbose, sardonic, discerning, skeptical, and sometimes cynical iconoclast — but also a convivial, amiable, voluptuary, and humanistic Epicurean. As a former history teacher and longtime student of philosophy with a keen interest in historiography, he spends much of his free time happily dwelling in the past (or in fantastical worlds of his own imagining), and is an insatiable bibliophile.&#128214;
</p>
<p>Growing up in Toledo, Ohio was a beautifully vibrant artistic and cultural experience for him — featuring such awesome highlights as the world-class Toledo Museum of Art or the irreplaceable Rusty’s Jazz Cafe (which featured live music every night for almost 40 years) — as well as plenty more to do in nearby Ann Arbor, Michigan.</p>
<p>&#9973;Also, due to its proximity to the Western end of Lake Erie, it was a great region in which to learn to sail and enjoy freshwater cruising — especially to nearby Put-in-Bay on South Bass Island as well as Cedar Point (near Sandusky), the roller-coaster capital of the world!&#127906;</p>
<p>In his youth and throughout most of his primary and secondary schooling, B.F. Griffith was fortunate enough to attend <a href="https://www.mvcds.org/" target="_blank">Maumee Valley Country Day school</a> — an idyllic and nurturingly rigorous extremely creative independent liberal-arts environment with an extraordinarily worldly pluralistic outlook and inquisitive Deweyan pedagogy. Indeed, while he had many great intellectual influences throughout his boyhood, it’s no exaggeration to state that this school changed his life — and that many of the qualities, interests, and habits of mind that bring him the most joy and have most enduringly shaped his intellect would definitely not be nearly so cultivated or as deeply ingrained and abiding if he had been educated elsewhere. In a more just world than the one we live in, everyone should be so fortunate as to have such privileged educational opportunities.</p>
<p>Anyway, as an adult, Mr. Griffith ended up settling-down in Central Florida — where he resides with his wife and several pets, surrounded by plenty of vibrant local creative culture and entertainment to enjoy as well as within easy drive of the Atlantic or Gulf coasts.</p>
<p class="lead">
  <h3>Ben Forbes Griffith &#10137; <a id="T_handle" href="https://twitter.com/BFGriffith" target="_blank"><span><img id="bluebird" src="/IMAGES/bluebird.png" alt="Twitter handle = "> @BFGriffith</span></a>
  </h3>
</p>
<hr>
<div>
  <h1 
    style="font-family:Londrina Shadow, sans-serif; float:left;">
    <span title="philosophiα et septem αrtes liberαles">“Would You Like To Know More?”</span>
    <img 
      id="WouldYouLikeToKnowMore_icon" 
      src="/IMAGES/FederalNetworkIcon_WouldYouLikeToKnowMore.png" 
      alt="Federal Network Icon: “Would You Like To Know More?”" 
      height="45px" 
      width="45px" 
      style="float:right;">
  </h1>
</div>
<br>
<div class="accordion" style="clear:both;">
  <!-- accordion-panel: creative-writing -->
  <div>
    <input type="checkbox" name="panel" id="writing-panel">
    <label for="writing-panel">WRITING:</label>
    <div class="accordion_content">
      <h2 
        class="accordion_header" 
        title="“Tenet insαnαbile multos scribendi cαcœthes.” —Iuvenαlis Sάturæ (Sαtires of “Juvenαl” [Decimus Junius Juvenalis])">The Lifelong Ambitions of an Aspiring Author...</h2>
      <p class="accordion_body">Coming soon: find out more about the ongoing progress of B.F. Griffith’s burgeoning <a href="{{site.baseurl}}writing-portfolio/">creative writing</a>, worldbuilding, and mythopœία projects!
      </p>
      <ul>
        <li>Ɛxoτerran Légion Chronicles</li>
        <li>Έpic of Ἄpειron</li>
        <li>Æromariner Corsair Chronicles</li>
      </ul>
    </div>
  </div>
  <!-- accordion-panel: coding -->
  <div>
    <input type="checkbox" name="panel" id="coding-panel">
    <label for="coding-panel">CODING:</label>
    <div class="accordion_content">
      <h2 
        class="accordion_header" 
        title="“The Road goes ever on and on, Down from the door where it began. Now far ahead the Road has gone, And I must follow, if I can...”">“An Unexpected Journey”
        <br>Into Web-Development:
      </h2>
      <p class="accordion_body">Learn more about B.F. Griffith’s transition into a challenging and rewarding second career as a full-stack web-developer by reading his <a href="{{base}}/coding-blog/">blog</a> or checking out his <a href="{{base}}/professional-portfolio/">portfolio of open-source projects</a> and <a href="https://github.com/BFGriffith?tab=repositories" target="_blank">code-repositories</a>.&#128187;</p>
    </div>
  </div>
  <!-- accordion-panel: teaching -->
  <div>
    <input type="checkbox" name="panel" id="teaching-panel">
    <label for="teaching-panel">TEACHING:</label>
    <div class="accordion_content">
      <h2 class="accordion_header" 
        title="Senecα the Younger to Lucilius Junior in “Epistulæ Morαles” (50-65ᴄᴇ)">“Docendo Discimus”</h2>
      <div class="accordion_body">
        <p>Mr. Griffith was proud to serve for almost a decade as a public schoolteacher in various capacities — but mostly he taught ninth through twelfth graders such classes as Advanced Placement world history, world history, American history, “global studies” / geography, American government, and economics (including honors level versions of nearly all of those classes).</p>
        <p>As a member of Florida’s 2009 first-place High School Literacy Leadership Team of the year, B.F. Griffith fostered excellence in literacy education and contributed to the continuous improvement of students’ reading-comprehension and writing skills, encouraged enthusiasm for unassigned reading as well as abiding lifelong enjoyment of books, conducted and participated in faculty professional development sessions focused on teaching reading, and enhanced the overall literary rigor of the academic environment.</p>
        <p>Mr. Griffith also volunteered for seven years as Chess club coach as well as faculty-facilitator of an after-school Fine-Arts club, since the school where he taught lacked any formal visual-arts program (so the club was a great opportunity to teach interested students basic drawing and painting fundamentals in addition to more advanced techniques of perspective, proportion, composition, blending, and shading).</p>
      </div>
    </div>
  </div>
  <!-- accordion-panel: favorite-quotes -->
  <div>
    <input type="checkbox" name="panel" id="quotes-panel">
    <label for="quotes-panel">Favorite Quotes:</label>
    <div class="accordion_content">
      <!-- <h2 class="accordion_header">Header</h2> -->
      <div class="accordion_body"><br>
        <p>At the risk of being a bit esoteric,&#129335;
          <br>I’ll share some of my favorite quotes here
          <br>drawn from a wide variety of sources
          <br>and in no particular sequence...
        </p>
        <p>“Truth may seem, but cannot be;
        <br>Beauty brag, but `tis not she;
        <br>Truth and Beauty buried be.”
        <br><small>—William Shakespeare 
        <br>The Phoenix and the Turtle, lines 62-64</small>
        </p>
        <p>“What seest thou else
        <br>In the dark backward and abysm of time.”
        <br><small>—Prospero in William Shakespeare’s The Tempest: Act 1, Scene 2, Lines 49-50</small>
        </p>
        <p>
          <span style="color:#E6E2DA;">玄之又玄</span>
          <br><span style="color:#E6E2DA;">眾妙之門</span>
          <br>“Darkness within darkness.
          <br>The gate to all mystery.”
          <br><small>—Laozi 老子 (Tao Te Ching 道德經)</small>
        </p>
        <p>But at my back I always hear
        <br>Time’s wingèd chariot hurrying near;
        <br>And yonder all before us lie
        <br>Deserts of vast eternity.
        <br><small>—Andrew Marvell</small>
        </p>
        <p>“To be really mediæval one should have no body. To be really modern one should have no soul. To be really Greek one should have no clothes.”
        <br><small>—Oscar Wilde (A Few Maxims For The Instruction Of The Over-Educated, 1894)</small>
        </p>
        <p>“Acts of injustice done
        <br>Between the setting and the rising sun
        <br>In history lie like bones, each one.”
        <br><small>—W.H. Auden</small>
        </p>
        <p>“The first lesson of history is the good of evil”
        <br><small>—Ralph Waldo Emerson</small>
        </p>
        <p><span style="color:#E6E2DA;">Wyrd bið ful aræd.</span>
        <br><span style="font-style:italic;">Fate is inexorable.</span>
        </p>
        <p>
          <span style="color:#E6E2DA;">…Com on wanre niht scri∂an sceadugenga</span>
          <br><span style="font-style:italic;">from out of the wan night slides the shadow walker</span>
          <br><small>—Beowulf</small>
        </p>
        <p>
          <span style="color:#E6E2DA;">Ac her forÞ berað; fugelas singað, gylleð græghama.</span>
          <br><span style="font-style:italic;">For here starts war, carrion birds sing, and gray wolves howl.</span>
          <br><small>—The Fight at Finnsburh</small>
        </p>
        <p>Vain are the thousand creeds
        <br>That move men’s hearts: unutterably vain;
        <br>Worthless as withered weeds,
        <br>Or idlest froth amid the boundless main,<br>
        <small>—No Coward Soul Is Mine, by Emily Brontë</small>
        </p>
        <p>We returned to our places, these Kingdoms, 
        <br>But no longer at ease here, in the old dispensation, 
        <br>With an alien people clutching their gods. 
        <br>I should be glad of another death.<br>
        <small>—T.S. Eliot’s poem “The Journey of the Magi”</small>
        </p>
        <p>Turning and turning in the widening gyre
        <br>The falcon cannot hear the falconer;
        <br>Things fall apart; the centre cannot hold;
        <br>Mere anarchy is loosed upon the world,
        <br>The blood-dimmed tide is loosed, and everywhere
        <br>The ceremony of innocence is drowned;
        <br>The best lack all convictions, while the worst
        <br>Are full of passionate intensity.<br>
        <small>—The Second Coming, by William Butler Yeats</small>
        </p>
        <p>When lilacs last in the dooryard bloom’d,
        <br>And the great star early droop’d in the western sky in the night,
        <br>I mourn’d, and yet shall mourn with ever-returning spring.
        <br><small>—Walt Whitman</small>
        </p>
      </div>
    </div>
  </div>
</div><!-- .accordion -->

# CONTACT the author:
<img style="float: right;" src="/IMAGES/BFGriffith_cartoon.png" alt="BFGriffth cartoon portrait" height="110px" width="auto" />
<p class="message"><span>Have questions or want to contact B.F. Griffith? Feel free to </span>
  <a 
    href="https://twitter.com/BFGriffith" 
    target="_blank">ask on Twitter</a> or <a href="mailto:benjaminforbesgriffith@gmail.com">send an <strong>email</strong>.
  </a>
</p>
<p>Thanks for reading!</p>
<hr>
The ongoing development of this *[GitHub Pages](https://pages.github.com/)* + [Jekyll](http://jekyllrb.com) [personal website]({{base}}/) and [portfolio]({{base}}/professional-portfolio) is currently designated as:
<br>
<span style="font-size:0.66rem;">version </span>
<span>{{site.version}}</span>
