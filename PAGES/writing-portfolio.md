---
layout: page
title: 📝 Writing Portfolio ㊞
permalink: /writing-portfolio/
---

<style type="text/css">
.content {
  width: auto; max-width: 100%;
}
table { border-top: 2px solid #515151 !important; }
/* max-width before this table gets nasty; this query will take effect for any screen smaller than 760px and also iPads, specifically. */
@media
  only screen 
  and (max-width: 760px), (min-device-width: 768px) 
  and (max-device-width: 1024px) {
  table { border: 2px solid #515151 !important; }
  /* force-table to not be like tables anymore */
  table, thead, tbody, th, td, tr { display: block; }
  thead tr {/* hide table headers (but not display: none;, for accessibility) */
    position: absolute;
    top: -9999px;
    left: -9999px;
  }
  /* tr { margin: 0 0 1rem 0; } */
  tr { margin: 0; }
  tr:nth-child(odd) { background: #ccc; }
  td {/* behave like a "row" */
    border: none;
    border-bottom: 1px solid #eee;
    position: relative;
  }
  td:before {/* behave like a table header */
    position: absolute;
    /* top/left values mimic padding */
    top: 0;
    left: 6px;
    width: 45%;
    padding-right: 10px;
    white-space: nowrap;
  }
}
#writing_portfolio_description {
  display: -webkit-flex;    
  display: -ms-flexbox;   
  display: flex;
  overflow: none;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}
#writing_portfolio_description .col:nth-child(1) {
  flex: 7;
  flex-shrink: 2;
}
#writing_portfolio_description .col:nth-child(2) {
  margin-left: auto;
  margin-right: 0;
  margin-top: 0;
  text-align: right;
  flex: initial;
  flex-shrink: 1;
  align-self: self-end;
}
</style>

<div id="writing_portfolio_description">
  <div class="col">
    <p>Coming soon: find out more about B.F. Griffith’s most extensive and ambitious ongoing long-form creative-writing＆worldbuilding projects currently under active creative development whenever he can find the time to work on them… The following prospective series each have at least one novel thoroughly outlined as well as substantial progress of at least several chapters working toward a first draft, but more extensive details will follow once closer to fully completing publications in any of the following settings／series:</p>
  </div>
  <div class="col">
    <img src="/IMAGES/BFGriffith_cartoon.png" alt="BFGriffth cartoon portrait" height="150px" width="auto" />
  </div>
</div>
<br>
<table role="table">
  <thead role="rowgroup">
    <tr role="row">
      <th role="columnheader" colspan="2">
        <h3 
          style="font-family:Londrina Shadow, sans-serif; margin-top:10px;"
        >Creative-Works:</h3>
      </th>
      <th role="columnheader" colspan="3">
        <h3 
          style="font-family:Londrina Shadow, sans-serif; margin-top:10px;"
        >GENRE / medium</h3>
      </th>
    </tr>
  </thead>
  <tbody role="rowgroup">
    <tr role="row" style="border-top: 1px solid #515151;">
      <td role="cell" rowspan="4" class="fictionTableGroup">
        <a href="{{site.baseurl}}writing-portfolio/">📚</a>
      </td>
    </tr>
    <tr role="row">
      <td role="cell" class="fictionTableCell"><!-- TITLE -->
        <a href="{{site.baseurl}}writing-portfolio/">Ɛxoτerran Légion Chronicles</a>
      </td>
      <td role="cell" colspan="2" class="fictionTableCell"><!-- GENRE -->
        <span>🤖 Cyberpunk＋alternate-historical 🛸 military science-fiction 🧑🏼‍🚀</span>
      </td>
      <td role="cell" class="fictionTableCell"><!-- TYPE/medium -->
        <span>📖</span>
      </td>
    </tr>
    <tr role="row">
      <td role="cell" class="fictionTableCell"><!-- TITLE -->
        <a href="{{site.baseurl}}writing-portfolio/">Έpic of Ἄpειron</a>
      </td>
      <td role="cell" colspan="2" class="fictionTableCell"><!-- GENRE -->
        <span>🩸“grimdark” epic fantasy 🗡</span>
      </td>
      <td role="cell" class="fictionTableCell"><!-- TYPE/medium -->
        <span>📖</span>
      </td>
    </tr>
    <tr role="row">
      <td role="cell" class="fictionTableCell"><!-- TITLE -->
        <a href="{{site.baseurl}}writing-portfolio/">Æromariner Corsair Chronicles</a>
      </td>
      <td role="cell" colspan="2" class="fictionTableCell"><!-- GENRE -->
        <span>🚂 Steampunk ⚙️ (Dieselpunk) ⛽＋Biopunk swashbuckling “pulp” adventures…</span>
      </td>
      <td role="cell" class="fictionTableCell"><!-- TYPE/medium -->
        <span>📖</span>
      </td>
    </tr>
  </tbody>
</table>
<ul>
  <li>🚂🛤⚙️ Steampunk＆Dieselpunk ⛽🚛 → 5ₜₕ Edition D&D compatible “<strong>Dynamo Compendium</strong>” homebrew rules supplement＆setting-guide for the world’s most popular tabletop roleplaying game featuring extensive examples＆content from the <strong>Æromariner Corsair Chronicles</strong> swashbuckling “pulp” adventure setting!</li>
</ul>
