---
layout: page
title: 🕯 About the Author 👁
permalink: /about/
---

<style type="text/css">
#author_biographical_summation_tags {
  position: relative;
  white-space: nowrap;
}
#author_biographical_summation_tags span {
	position: absolute;
	opacity: 0;
	overflow: hidden;
	width: 100%;
}
</style>
<script type="text/JavaScript">
var words = [
  '✍🏼 writer'
  ,'💻 coder'
  ,'🤯 educator'
  ,'📖 bibliophilic ❣️ philosopher 💭'
  ,'⏳🔙📜 historian'
  ,'🔎🧠 skeptic'
  ,'🎲 gamer'
  ,'🧙🏼‍♂️ lifelong learner… 📚'],
    part,
    i = 0,
    offset = 0,
    len = words.length,
    forwards = true,
    skip_count = 0,
    skip_delay = 20,
    speed = 90;
var wordflick = function () {
  setInterval(function () {
    if (forwards) {
      if (offset >= words[i].length) {
        ++skip_count;
        if (skip_count == skip_delay) { forwards = false; skip_count = 0; }
      }
    }
    else {
      if (offset == 0) {
        forwards = true; i++; offset = 0;
        if (i >= len) { i = 0; }
      }
    }
    //words[i].replace('�','');
    part = words[i].substr(0, offset);
    if (skip_count == 0) {
      if (forwards) { offset++; }
      else { offset--; }
    }
    var elem = document.getElementById('author_biographical_summation_tags');
    elem.innerText = part;
  },speed);
};
document.addEventListener('DOMContentLoaded', function () {
  wordflick();
}, false);
</script>

<!-- B.F. Griffith’s biographical summary -->

🧔🏽 _Menschliches, Allzumenschliches_ ꞉ **B.F. Griffith** is just another middle-aged nerdy intellectual with too many hobbies and never enough time for them all; he’s a verbose, sardonic, discerning, skeptical, and sometimes cynical iconoclast－but also a convivial, amiable, voluptuary, and humanistic Epicurean. As a former history teacher and longtime student of philosophy with a keen interest in historiography, he spends much of his free time happily dwelling in the past (or in fantastical worlds of his own imagining), and he is an insatiable bibliophile. 📖&#9829;&#65039;

Growing up in Toledo, Ohio was a beautifully vibrant artistic and cultural experience for him－featuring such awesome highlights as the world-class Toledo Museum of Art or the irreplaceable Rusty’s Jazz Cafe 🎷 (which featured live music every night for almost 40 years)－as well as plenty more to do in nearby Ann Arbor, Michigan.

<p>⛵ Also, due to its proximity to the Western end of Lake Erie, it was a great region in which to learn to sail and enjoy dinghy racing and freshwater cruising－especially to nearby Put-in-Bay on South Bass Island as well as Cedar Point (near Sandusky), the roller-coaster capital of the world! 🎢</p>
<p>During his boyhood and most of his primary and secondary schooling, B.F. Griffith was extremely fortunate to attend <a href="https://www.mvcds.org/" target="_blank">Maumee Valley Country Day school</a>, an idyllic and nurturingly rigorous extremely creative independent liberal-arts environment with an extraordinarily worldly pluralistic outlook and inquisitive Deweyan pedagogy. Indeed, while he was privileged to have many inspirational intellectual influences throughout his youth, it’s no exaggeration to acknowledge that this school changed his life－and that many of the personal qualities, interests, and habits of mind that bring him the most joy, and have most enduringly shaped his intellect, would definitely not be nearly so thoroughly cultivated or as deeply ingrained and abiding capabilities or characteristics if he’d been educated elsewhere. In a more just world than the one we live in, everyone should be so lucky as to have such exceptional educational opportunities, which ideally always ought to be about so much more than merely basic “professional” or career skills competency training at minimal cost to taxpayers.</p>
<p>Anyway, as an adult, Mr. Griffith has thus far ended up settling-down in Central Florida, where he resides with his wife and several pets, surrounded by plenty of vibrant local creative cultural entertainment venues to enjoy in addition to being situated within easy drive of many delightful freshwater cool springs as well as a plethora of famous beaches along both the Atlantic﹠Gulf coasts. 🌊🏖</p>
<p class="lead">
  <h3>Ben Forbes Griffith &#10137; <a id="T_handle" href="https://twitter.com/BFGriffith" target="_blank"><span><img id="bluebird" src="/IMAGES/bluebird.png" alt="Twitter handle = "> @BFGriffith</span></a>
  </h3>
</p>
<div style="font-family: 'Comfortaa', 'Rajdhani';">
  <span id="author_biographical_summation_tags"></span>
  &VeryThinSpace;
  <!-- <span>✍🏼 writer</span>
  <span>💻 coder</span>
  <span>🤯 educator</span>
  <span>📖 bibliophilic &#10083;&#65039; philosopher 💭</span>
  <span>⏳🔙📜 historian</span>
  <span>🔎🧠 skeptic</span>
  <span>🎲 gamer</span>
  <span>🧙🏼‍♂️ lifelong learner… 📚</span> -->
</div>
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
      title="“Come on, you apes! You wanna live forever?”" 
      style="float:right;">
  </h1>
</div>
<br>
<div class="accordion" style="clear:both;">
  <!-- accordion-panel꞉ creative-writing -->
  <div>
    <input type="checkbox" name="panel" id="writing-panel">
    <label for="writing-panel">✍🏼 WRITING꞉</label>
    <div class="accordion_content">
      <h2 
        class="accordion_header" 
        title="“Tenet insαnαbile multos scribendi cαcœthes.” －Iuvenαlis Sάturæ (Sαtires of “Juvenαl” [Decimus Junius Juvenalis])">The Lifelong Ambitions of an Aspiring Author...</h2>
      <p class="accordion_body" style="margin-bottom:0;">Find out more about the ongoing progress of B.F. Griffith’s burgeoning <a href="{{site.baseurl}}writing-portfolio/">creative writing</a>, worldbuilding, and mythopœία projects!
      </p>
      <ul>
        <li>
          <span style="float:left;">
          <a href="{{site.baseurl}}writing-portfolio/">Ɛxoτerran Légion Chronicles</a></span>
          <span style="float:right;">⟦“speculative” alternate history military science-fiction⟧</span>
        </li>
        <li style="clear:both;">
          <span style="float:left;">
          <a href="{{site.baseurl}}writing-portfolio/">Έpic of Ἄpειron</a></span>
          <span style="float:right;">⟦Sword﹠Sorcery “grimdark” Fantasy⟧</span>
        </li>
        <li style="clear:both;">
          <span style="float:left;">
          <a href="{{site.baseurl}}writing-portfolio/">Æromariner Corsair Chronicles</a></span>
          <span style="float:right;">⟦“Steampunk” ⤳ “Dieselpunk” swashbuckling adventures with elements of “Cosmic” Lovecraftian horror⟧</span><br style="clear:both;">
        </li>
      </ul>
    </div>
  </div>
  <!-- accordion-panel꞉ coding -->
  <div>
    <input type="checkbox" name="panel" id="coding-panel">
    <label for="coding-panel">💻 CODING꞉</label>
    <div class="accordion_content">
      <h2 
        class="accordion_header" 
        title="“The Road goes ever on and on, Down from the door where it began. Now far ahead the Road has gone, And I must follow, if I can…”">“An Unexpected Journey”
        <br>Into Web-Development꞉
      </h2>
      <p class="accordion_body">Learn more about B.F. Griffith’s midlife transition into a challenging and rewarding second career as a full-stack web-developer by reading his <a href="{{base}}/coding-blog/">blog</a> or checking out his <a href="{{base}}/professional-portfolio/">portfolio of open-source projects</a>﹠<a href="https://github.com/BFGriffith?tab=repositories" target="_blank">code-repositories</a>.&#128187;</p>
    </div>
  </div>
  <!-- accordion-panel꞉ teaching -->
  <div>
    <input type="checkbox" name="panel" id="teaching-panel">
    <label for="teaching-panel">🎓 TEACHING꞉</label>
    <div class="accordion_content">
      <h2 class="accordion_header" 
        title="Senecα the Younger to Lucilius Junior in “Epistulæ Morαles” (50⇢65ᴄᴇ)">“Docendo Discimus”</h2>
      <div class="accordion_body">
        <p>Mr. Griffith was proud to serve for almost a decade as a public schoolteacher in various capacities, but mostly he taught ninth through twelfth graders such classes as Advanced Placement world history, world history, American history, “global studies”／geography, American government, and economics (including honors level versions of nearly all of those classes).</p>
        <p>As a member of Florida’s 2009 first-place High School Literacy Leadership Team of the year, B.F. Griffith fostered excellence in literacy education and contributed to the continuous improvement of students’ reading-comprehension and writing skills, encouraged enthusiasm for unassigned reading as well as abiding lifelong enjoyment of books, conducted and participated in faculty professional development sessions focused on teaching reading, and enhanced the overall literary rigor of the academic environment in which he taught.</p>
        <p>Mr. Griffith also volunteered for seven years as Chess club coach as well as faculty-facilitator of an after-school Fine-Arts club, since the school where he taught lacked any formal visual-arts program (so the club was a great opportunity to teach interested students basic drawing and painting fundamentals in addition to more advanced techniques of perspective, proportion, composition, blending, and shading). Comic book nerds, Anime enthusiasts, and aspiring young artists are extremely inspiring and rewarding people to mentor, and they tend to be some of the best and most promising minds of their generation.</p>
      </div>
    </div>
  </div>
  <!-- accordion-panel: education -->
  <div>
    <input type="checkbox" name="panel" id="education-panel">
    <label for="education-panel">📚 LEARNING꞉</label>
    <div class="accordion_content">
      <h2 class="accordion_header" 
        title="－Isaac Asimov">“Education isn’t something you can finish…” 🎓</h2>
      <ul class="accordion_body">
        <li>B.F. Griffith was fortunate enough to experience most of his primary and secondary schooling at <a href="https://www.mvcds.org/" target="_blank" style="font-weight:bold;">Maumee Valley Country Day school</a> in Northwest Ohio, an idyllic and nurturingly rigorous extremely creative independent liberal-arts preparatory environment with an extraordinarily worldly pluralistic outlook and inquisitive Deweyan pedagogy.</li>
        <li>As an undergraduate, B.F. Griffith earned a Bachelor of Arts degree from <a href="https://www.hamilton.edu/" target="_blank" style="font-weight:bold;">Hamilton College</a> in “upstate” Clinton, New York (near Utica) on May 25, 2003, majoring in <span style="font-style:italic;">philosophy</span> with a <span style="font-style:italic;">history</span> minor.</li>
        <li>Subsequently, B.F. Griffith earned a Master of Arts in Teaching degree from <a href="https://www.bennington.edu/" target="_blank" style="font-weight:bold;">Bennington College</a> in the beautiful Green Mountains of Southwestern Vermont on June 4, 2005, before serving as an educator (mostly teaching history) for nearly a decade.</li>
        <li>Before commencing his second career as a web-developer (and in addition to many eBooks and autodidactic online tutorials), B.F. Griffith studied front-end web-development at <a href="https://www.bloc.io/learn-to-code/bc/the-iron-yard" target="_blank" style="font-weight:bold;">The Iron Yard Academy</a> coding-bootcamp in Orlando, Florida from May 4 through July 24 of 2015, followed by also completing the <a href="https://bootcamp.ce.ucf.edu/coding/" target="_blank" style="font-weight:bold;">UCF Coding Bootcamp</a> studying “full-stack” web-development at the Sanford／Lake Mary satellite campus of Seminole State College from March 28 through September 28 of 2016.</li>
      </ul>
    </div>
  </div>
  <!-- accordion-panel꞉ favorite-quotes -->
  <div>
    <input type="checkbox" name="panel" id="quotes-panel">
    <label for="quotes-panel">💬 Favorite Quotes꞉</label>
    <div class="accordion_content">
      <!-- <h2 class="accordion_header">Header</h2> -->
      <div class="accordion_body"><br>
        <p><small style="color:#2980b9 !important;">At the risk of being a bit esoteric, &#129335;
          <br>I’ll share some of my favorite quotes here:
          <br>drawn from a wide variety of sources
          <br>and in no particular sequence…</small>
        </p>
        <p>“Truth may seem, but cannot be;
        <br>Beauty brag, but `tis not she;
        <br>Truth and Beauty buried be.”
        <br><small>－William Shakespeare 
        <br>The Phoenix and the Turtle, lines 62⇢64</small>
        </p>
        <p>“What seest thou else
        <br>In the dark backward and abysm of time.”
        <br><small>－Prospero in William Shakespeare’s The Tempest: Act 1, Scene 2, Lines 49⇢50</small>
        </p>
        <p>
          <span style="color:#E6E2DA;">玄之又玄</span>
          <br><span style="color:#E6E2DA;">眾妙之門</span>
          <br>“Darkness within darkness.
          <br>The gate to all mystery.”
          <br><small>－Laozi 老子 (Tao Te Ching 道德經)</small>
        </p>
        <p>But at my back I always hear
        <br>Time’s wingèd chariot hurrying near;
        <br>And yonder all before us lie
        <br>Deserts of vast eternity.
        <br><small>－Andrew Marvell</small>
        </p>
        <p>“To be really mediæval one should have no body. To be really modern one should have no soul. To be really Greek one should have no clothes.”
        <br><small>－Oscar Wilde (A Few Maxims For The Instruction Of The Over-Educated, 1894)</small>
        </p>
        <p>“Acts of injustice done
        <br>Between the setting and the rising sun
        <br>In history lie like bones, each one.”
        <br><small>－W.H. Auden</small>
        </p>
        <p>“The first lesson of history is the good of evil”
        <br><small>－Ralph Waldo Emerson</small>
        </p>
        <p><span style="color:#E6E2DA;">Wyrd bið ful aræd.</span>
        <br><span style="font-style:italic;">“Fate is inexorable.”</span>
        </p>
        <p>
          <span style="color:#E6E2DA;">…Com on wanre niht scri∂an sceadugenga</span>
          <br><span style="font-style:italic;">“from out of the wan night slides the shadow walker”</span>
          <br><small>－Beowulf</small>
        </p>
        <p>
          <span style="color:#E6E2DA;">Ac her forÞ berað; fugelas singað, gylleð græghama.</span>
          <br><span style="font-style:italic;">“For here starts war, carrion birds sing, and gray wolves howl.”</span>
          <br><small>－The Fight at Finnsburh</small>
        </p>
        <p>Vain are the thousand creeds
        <br>That move men’s hearts: unutterably vain;
        <br>Worthless as withered weeds,
        <br>Or idlest froth amid the boundless main,<br>
        <small>－No Coward Soul Is Mine, by Emily Brontë</small>
        </p>
        <p>We returned to our places, these Kingdoms, 
        <br>But no longer at ease here, in the old dispensation, 
        <br>With an alien people clutching their gods. 
        <br>I should be glad of another death.<br>
        <small>－T.S. Eliot’s poem: “The Journey of the Magi”</small>
        </p>
        <p>Turning and turning in the widening gyre
        <br>The falcon cannot hear the falconer;
        <br>Things fall apart; the centre cannot hold;
        <br>Mere anarchy is loosed upon the world,
        <br>The blood-dimmed tide is loosed, and everywhere
        <br>The ceremony of innocence is drowned;
        <br>The best lack all convictions, while the worst
        <br>Are full of passionate intensity.<br>
        <small>－The Second Coming, by William Butler Yeats</small>
        </p>
        <p>When lilacs last in the dooryard bloom’d,
        <br>And the great star early droop’d in the western sky in the night,
        <br>I mourn’d, and yet shall mourn with ever-returning spring.
        <br><small>－Walt Whitman</small>
        </p>
      </div>
    </div>
  </div>
</div><!-- .accordion -->

# CONTACT the author꞉
<img style="float: right;" src="/IMAGES/BFGriffith_cartoon.png" alt="BFGriffth cartoon portrait" height="110px" width="auto" />
<p class="message"><span>Have questions or want to contact B.F. Griffith?<br>Please feel free to </span>
  <a 
    href="https://twitter.com/BFGriffith" 
    target="_blank">message or ask him on Twitter🐦</a>…
</p>
<p>Thanks for reading! &#9829;&#65039;</p>
<hr>
The ongoing development of this *[GitHub Pages](https://pages.github.com/)* + [Jekyll](http://jekyllrb.com) [personal website]({{base}}/) and [portfolio]({{base}}/professional-portfolio) is currently designated as:
<br>
<span style="font-size:0.66rem;">version </span>
<span>{{site.version}}</span>
