---
layout: default
title: 5th Edition Dungeons & Dragons Character-Build Statblock Template
permalink: /RPGs/5eDnD_character-build-statblock-template/
---

<!-- 
The CSS and markup template for this statblock is based on
a modified and customized version of:
https://github.com/Valloric/statblock5e
This is licensed under the Apache License, Version 2.0
You may not use this file except in compliance with that License.
You may obtain a copy of that License at:
http://www.apache.org/licenses/LICENSE-2.0
Unless required by applicable law or agreed to in writing, software
distributed under the Apache License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the Apache License for the specific language governing permissions and
limitations under the License.
-->

<style type="text/css">
  .content, .container, .sidebar { padding: 0; }
  .content { margin-left: 20rem; }
  stat-block {
    margin-top: 2rem;
    margin-bottom: 1rem;
  }
</style>
<script type="text/javascript">
  function createCustomElement(name, contentNode, elementClass = null) {
    if(elementClass === null) {
      customElements.define(name,
        class extends HTMLElement {
          constructor() {
            super();
            this.attachShadow({mode: 'open'})
              .appendChild(contentNode.cloneNode(true));
          }
        }
      )
    } else {
      customElements.define(name, elementClass(contentNode));
    }
  };
</script>
<template id="stat-block">
<style type="text/css">
  .bar {
    height: 5px;
    background: #E69A28;
    border: 1px solid #000;
    position: relative;
    z-index: 1;
  }
  :host {
    display: inline-block;
  }
  #content-wrap {
    font-family: 'Noto Sans', 'Myriad Pro', Calibri, Helvetica, Arial, sans-serif !important;
    font-size: 13.5px;
    background: #FDF1DC;
    padding: 0.6em;
    padding-bottom: 0.5em;
    border: 1px #DDD solid;
    box-shadow: 0 0 1.5em #867453;
    position: relative;
    z-index: 0;
    margin-left: 2px;
    margin-right: 2px;
    width: 400px;
    -webkit-columns: 400px;
      -moz-columns: 400px;
            columns: 400px;
    -webkit-column-gap: 40px;
      -moz-column-gap: 40px;
            column-gap: 40px;
    height: var(--data-content-height);
    -webkit-column-fill: auto;
      -moz-column-fill: auto;
            column-fill: auto;
  }
  :host([data-two-column]) #content-wrap {
    width: 840px;
  }
  ::slotted(h3) {
    border-bottom: 1px solid #7A200D;
    color: #7A200D;
    font-size: 21px !important;
    font-variant: small-caps;
    font-weight: normal;
    letter-spacing: 1px;
    margin: 0;
    margin-bottom: 0.3em;
    break-inside: avoid-column;
    break-after: avoid-column;
  }
  ::slotted(p) {
    margin-top: 0.3em;
    margin-bottom: 0.9em;
    line-height: 1.5;
  }
  ::slotted(*:last-child) {
    margin-bottom: 0;
  }
  @media  only screen and (max-device-width: 896px)
          and (-webkit-min-device-pixel-ratio: 3) {
    #content-wrap, #content-wrap:host { vw: 100 };
  }
</style>
<!-- STAT-BLOCK CONTENT -->
<div class="bar"></div>
<div id="content-wrap">
  <slot></slot>
</div>
<div class="bar"></div>
</template>
<script type="text/javascript">{
  let templateElement = document.getElementById('stat-block');
  createCustomElement('stat-block', templateElement.content);
}</script>
<template id="creature-heading">
  <style type="text/css">
    ::slotted(h1) {
      font-family: 'Libre Baskerville', 'Lora', 'Calisto MT',
                  'Bookman Old Style', Bookman, 'Goudy Old Style',
                  Garamond, 'Hoefler Text', 'Bitstream Charter',
                  Georgia, serif !important;
      color: #7A200D !important;
      font-weight: 700;
      margin: 0px;
      font-size: 23px !important;
      letter-spacing: 1px;
      font-variant: small-caps;
    }
    ::slotted(h2) {
      color: black !important;
      font-weight: normal;
      font-style: italic;
      font-size: 18px !important;
      margin: 0;
    }
  </style>
  <slot></slot>
</template>
<script type="text/javascript">{
  let templateElement = document.getElementById('creature-heading');
  createCustomElement('creature-heading', templateElement.content);
}</script>
<template id="tapered-rule">
<style type="text/css">
  svg {
    fill: #922610;
    stroke: #922610;
    margin-top: 0.6em;
    margin-bottom: 0.35em;
  }
</style>
  <svg height="5" width="400">
    <polyline points="0,0 400,2.5 0,5"></polyline>
  </svg>
</template>

<script type="text/javascript">{
  let templateElement = document.getElementById('tapered-rule');
  createCustomElement('tapered-rule', templateElement.content);
}</script>
<template id="top-stats">
<style type="text/css">
  ::slotted(*) {
    color: #7A200D !important;
  }
</style>
  <tapered-rule></tapered-rule><slot></slot><tapered-rule></tapered-rule>
</template>
<script type="text/javascript">{
  let templateElement = document.getElementById('top-stats');
  createCustomElement('top-stats', templateElement.content);
}</script>

<!-- ABILITY-SCORES and MODIFIERS -->
<template id="abilities-block">
  <style type="text/css">
    table {
      width: 100%;
      border: 0px;
      border-collapse: collapse;
    }
    th, td {
      width: 50px;
      text-align: center;
    }
  </style>
  
  <table>
    <tbody>
      <tr><th>STR</th><th>DEX</th><th>CON</th><th>INT</th><th>WIS</th><th>CHA</th></tr>
      <tr>
        <td id="str"></td>
        <td id="dex"></td>
        <td id="con"></td>
        <td id="int"></td>
        <td id="wis"></td>
        <td id="cha"></td>
      </tr>
    </tbody>
  </table>
  <tapered-rule></tapered-rule>
</template>
<script type="text/javascript">{
  function abilityModifier(abilityScore) {
  let score = parseInt(abilityScore, 10);
  return Math.floor((score - 10) / 2);
}
function formattedModifier(abilityModifier) {
  if (abilityModifier >= 0) {
    return '+' + abilityModifier;
  }
  return '-' + Math.abs(abilityModifier);// use em dash for better visibility
}
function abilityText(abilityScore) {
  return [String(abilityScore),
    ' (',
    formattedModifier(abilityModifier(abilityScore)),
    ')'].join('');
}
function elementClass(contentNode) {
  return class extends HTMLElement {
    constructor() {
      super();
      this.attachShadow({mode: 'open'})
        .appendChild(contentNode.cloneNode(true));
    }
    connectedCallback() {
      let root = this.shadowRoot;
      for (let i = 0; i < this.attributes.length; i++) {
        let attribute = this.attributes[i];
        let abilityShortName = attribute.name.split('-')[1];
        root.getElementById(abilityShortName).textContent =
           abilityText(attribute.value);
      }
    }
  }
}

  let templateElement = document.getElementById('abilities-block');
  createCustomElement('abilities-block', templateElement.content, elementClass);
}</script>

<template id="property-line">
  <style type="text/css">
    :host {
      line-height: 1.4;
      display: block;
      text-indent: -1em;
      padding-left: 1em;
    }
    ::slotted(h4) {
      margin: 0;
      display: inline;
      font-weight: bold;
    }
    ::slotted(p:first-of-type) {
      display: inline;
      text-indent: 0;
    }
    ::slotted(p) {
      text-indent: 1em;
      margin: 0;
    }
  </style>
  <slot></slot>
</template>
<script type="text/javascript">{
  let templateElement = document.getElementById('property-line');
  createCustomElement('property-line', templateElement.content);
}</script>

<template id="property-block">
  <style type="text/css">
    :host {
      margin-top: 0.3em;
      margin-bottom: 0.9em;
      line-height: 1.5;
      display: block;
    }
    ::slotted(h4), ::slotted(h5) {
      margin: 0;
      display: inline;
      font-weight: bold;
      font-style: italic;
    }
    ::slotted(p:first-of-type) {
      display: inline;
      text-indent: 0;
    }
    ::slotted(p) {
      text-indent: 1em;
      margin: 0;
    }
  </style>
  <slot></slot>
</template>

<script type="text/javascript">{
  let templateElement = document.getElementById('property-block');
  createCustomElement('property-block', templateElement.content);
}</script>
  <stat-block>
    <creature-heading>
      <h1>suggested character name</h1>
      <h2>BUILD TITLE or TAGLINE</h2>
      <h2>Medium humanoid, unaligned</h2>
    </creature-heading>
    <top-stats>
      <property-line>
        <h4>Armor Class</h4>
        <p>10 (unarmored)</p>
      </property-line>
      <property-line>
        <h4>Hit Points</h4>
        <p>12 (1d12 + 1)</p>
      </property-line>
      <property-line>
        <h4>Speed</h4>
        <p>30feet</p>
      </property-line>
      <tapered-rule></tapered-rule>
      <div style="color:green;">
        <span style="color:gray;">starting Ability-Scores:<br>[Point-Buy: <strong>15,14,13,12,10,8</strong>&nbsp;&rarr;&nbsp;+2?, +1?]</span>
        <abilities-block  
          data-str="15" 
          data-dex="14" 
          data-con="13" 
          data-int="12" 
          data-wis="10" 
          data-cha="8">
        </abilities-block>       
      </div>
      <span style="color:#E69A28;">@20th level &#7936;poth&#941;osis: &ldquo;final&rdquo; Ability-Scores after ASIs/feats:</span>
      <div style="color:#E69A28;">
        <abilities-block  
          data-str="15" 
          data-dex="14" 
          data-con="13" 
          data-int="12" 
          data-wis="10" 
          data-cha="8">
        </abilities-block>
      </div>
      <property-line>
        <h4>Damage Immunities</h4>
        <p>none</p>
      </property-line>
      <property-line>
        <h4>Condition Immunities</h4>
        <p>none</p>
      </property-line>
      <property-line>
        <h4>Senses</h4>
        <p>darkvision 60 feet, passive Perception 10</p>
      </property-line>
      <property-line>
        <h4>Languages</h4>
        <p>the&nbsp;&ldquo;common&rdquo; tongue</p>
      </property-line>
      <property-line>
        <h4>Challenge</h4>
        <p>&ge;12 <span style="color:gray;">(&wedgeq;19,200 XP as level 20 NPC)</span></p>
      </property-line>
    </top-stats>
    <!-- SKILLS -->
    <h3>SKILLS (suggested):</h3>
    <property-block>
      <div style="float:left;">
        <strong style="color:#922610;">Strength:</strong>
        <ul style="list-style-type:none;margin:0;padding:0;">
          <li><!-- ATHLETICS -->
            <label for="Athletics">
              <input  type="checkbox" checked 
                      id="Athletics" name="Athletics"
                      onclick="return false;">Athletics
            </label>
          </li>
        </ul>
        <strong style="color:#922610;">Dexterity:</strong>
        <ul style="list-style-type:none;margin:0;padding:0;">
          <li><!-- ACROBATICS -->
            <label for="Acrobatics">
              <input  type="checkbox"  
                      id="Acrobatics" name="Acrobatics"
                      onclick="return false;">Acrobatics
            </label>
          </li>
          <li><!-- SLEIGHT of HAND -->
            <label for="Sleight_of_Hand">
              <input  type="checkbox"  
                      id="Sleight_of_Hand" name="Sleight of Hand"
                      onclick="return false;">Sleight of Hand
            </label>
          </li>
          <li><!-- STEALTH -->
            <label for="Stealth">
              <input  type="checkbox"  
                      id="Stealth" name="Stealth"
                      onclick="return false;">Stealth
            </label>
          </li>
        </ul>
        <strong style="color:#922610;">Intelligence:</strong>
        <ul style="list-style-type:none;margin:0;padding:0;">
          <li><!-- ARCANA -->
            <label for="Arcana">
              <input  type="checkbox"  
                      id="Arcana" name="Arcana"
                      onclick="return false;">Arcana
            </label>
          </li>
          <li><!-- HISTORY -->
            <label for="History">
              <input  type="checkbox"  
                      id="History" name="History"
                      onclick="return false;">History
            </label>
          </li>
          <li><!-- INVESTIGTION -->
            <label for="Investigation">
              <input  type="checkbox"  
                      id="Investigation" name="Investigation"
                      onclick="return false;">Investigation
            </label>
          </li>
          <li><!-- NATURE -->
            <label for="Nature">
              <input  type="checkbox"  
                      id="Nature" name="Nature"
                      onclick="return false;">Nature
            </label>
          </li>
          <li><!-- RELIGION -->
            <label for="Religion">
              <input  type="checkbox"  
                      id="Religion" name="Religion"
                      onclick="return false;">Religion
            </label>
          </li>
        </ul>
        <property-block></property-block>
      </div>
      <div style="float:right;margin-right:20px;">
        <strong style="color:#922610;">Wisdom:</strong>
        <ul style="list-style-type:none;margin:0;padding:0;">
          <li><!-- ANIMAL-HANDLING -->
            <label for="Animal-Handling">
              <input  type="checkbox"  
                      id="Animal-Handling" name="Animal Handling"
                      onclick="return false;">Animal-Handling
            </label>
          </li>
          <li><!-- INSIGHT -->
            <label for="Insight">
              <input  type="checkbox"  
                      id="Insight" name="Insight"
                      onclick="return false;">Insight
            </label>
          </li>
          <li><!-- MEDICINE -->
            <label for="Medicine">
              <input  type="checkbox"  
                      id="Medicine" name="Medicine"
                      onclick="return false;">Medicine
            </label>
          </li>
          <li><!-- PERCEPTION -->
            <label for="Perception">
              <input  type="checkbox"  
                      id="Perception" name="Perception"
                      onclick="return false;">Perception
            </label>
          </li>
          <li><!-- SURVIVAL -->
            <label for="Survival">
              <input  type="checkbox"  
                      id="Survival" name="Survival"
                      onclick="return false;">Survival
            </label>
          </li>
        </ul>
        <strong style="color:#922610;">Charisma:</strong>
        <ul style="list-style-type:none;margin:0;padding:0;">
          <li><!-- DECEPTION -->
            <label for="Deception">
              <input  type="checkbox"  
                      id="Deception" name="Deception"
                      onclick="return false;">Deception
            </label>
          </li>
          <li><!-- INTIMIDATION -->
            <label for="Intimidation">
              <input  type="checkbox"  
                      id="Intimidation" name="Intimidation"
                      onclick="return false;">Intimidation
            </label>
          </li>
          <li><!-- PERFORMANCE -->
            <label for="Performance">
              <input  type="checkbox"  
                      id="Performance" name="Performance"
                      onclick="return false;">Performance
            </label>
          </li>
          <li><!-- PERSUASION -->
            <label for="Persuasion">
              <input  type="checkbox"  
                      id="Persuasion" name="Persuasion"
                      onclick="return false;">Persuasion
            </label>
          </li>
        </ul>
      </div>
    </property-block>
    <!-- <p style="clear:both;">
      <input  type="checkbox" checked 
              style="filter:invert(1)" 
              onclick="return false;">indicates a skill with&nbsp;&ldquo;Expertise&rdquo; (double proficiency-bonus)
    </p> -->
    <!-- <p style="clear:both;">⧈ indicates a&nbsp;&ldquo;Jack of All Trades&rdquo; skill @Bard2 (&plus;&frac12; proficiency-bonus, rounded-down, to any ability check that doesn&rsquo;t already include proficiency-bonus)</p> -->

    <!-- CLASS-FEATURES -->
    <h3 style="clear:both;">Class-Features:</h3>
    <property-block>
      <h4>&#8253;.</h4>
      <p>...</p>
    </property-block>

    <!-- FEATS -->
    <h3>Feats:</h3>
    <property-block>
      <h4>&#8253;.</h4>
      <p>...</p>
    </property-block>
    <!-- SPELLS -->
    <!--<h3>Spells:</h3>
    <property-block>
      <ul style="list-style-type:none;margin:0;padding:0;">
        <li>
          <label for="cantrips">
            <input  type="checkbox" id="cantrips" name="cantrips"
              ><strong>CANTRIPS:</strong> ?
          </label>
        </li>
        <li>
          <label for="caster-level-1">
            <input  type="checkbox" id="caster-level-1" name="caster level 1"
              >@Caster&nbsp;&nbsp;&nbsp;<strong>1</strong>: ?
          </label>
        </li>
        <li>
          <label for="caster-level-2">
            <input  type="checkbox" id="caster-level-2" name="caster level 2"
              >@Caster&nbsp;&nbsp;&nbsp;<strong>2</strong>: ?
          </label>
        </li>
        <li>
          <label for="caster-level-3">
            <input  type="checkbox" id="caster-level-3" name="caster level 3"
              >@Caster&nbsp;&nbsp;&nbsp;<strong>3</strong>: ?
          </label>
        </li>
        <li>
          <label for="caster-level-4">
            <input  type="checkbox" id="caster-level-4" name="caster level 4"
              >@Caster&nbsp;&nbsp;&nbsp;<strong>4</strong>: ?
          </label>
        </li>
        <li>
          <label for="caster-level-5">
            <input  type="checkbox" id="caster-level-5" name="caster level 5"
              >@Caster&nbsp;&nbsp;&nbsp;<strong>5</strong>: ?
          </label>
        </li>
        <li>
          <label for="caster-level-6">
            <input  type="checkbox" id="caster-level-6" name="caster level 6"
              >@Caster&nbsp;&nbsp;&nbsp;<strong>6</strong>: ?
          </label>
        </li>
        <li>
          <label for="caster-level-7">
            <input  type="checkbox" id="caster-level-7" name="caster level 7"
              >@Caster&nbsp;&nbsp;&nbsp;<strong>7</strong>: ?
          </label>
        </li>
        <li>
          <label for="caster-level-8">
            <input  type="checkbox" id="caster-level-8" name="caster level 8"
              >@Caster&nbsp;&nbsp;&nbsp;<strong>8</strong>: ?
          </label>
        </li>
        <li>
          <label for="caster-level-9">
            <input  type="checkbox" id="caster-level-9" name="caster level 9"
              >@Caster&nbsp;&nbsp;&nbsp;<strong>9</strong>: ?
          </label>
        </li>
        <li>
          <label for="caster-level-10">
            <input  type="checkbox" id="caster-level-10" name="caster level 10"
              >@Caster <strong>10</strong>: ?
          </label>
        </li>
        <li>
          <label for="caster-level-11">
            <input  type="checkbox" id="caster-level-11" name="caster level 11"
              >@Caster <strong>11</strong>: ?
          </label>
        </li>
        <li>
          <label for="caster-level-12">
            <input  type="checkbox" id="caster-level-12" name="caster level 12"
              >@Caster <strong>12</strong>: ?
          </label>
        </li>
        <li>
          <label for="caster-level-13">
            <input  type="checkbox" id="caster-level-13" name="caster level 13"
              >@Caster <strong>13</strong>: ?
          </label>
        </li>
        <li>
          <label for="caster-level-14">
            <input  type="checkbox" id="caster-level-14" name="caster level 14"
              >@Caster <strong>14</strong>: ?
          </label>
        </li>
        <li>
          <label for="caster-level-15">
            <input  type="checkbox" id="caster-level-15" name="caster level 15"
              >@Caster <strong>15</strong>: ?
          </label>
        </li>
        <li>
          <label for="caster-level-16">
            <input  type="checkbox" id="caster-level-16" name="caster level 16"
              >@Caster <strong>16</strong>: ?
          </label>
        </li>
        <li>
          <label for="caster-level-17">
            <input  type="checkbox" id="caster-level-17" name="caster level 17"
              >@Caster <strong>17</strong>: ?
          </label>
        </li>
        <li>
          <label for="caster-level-18">
            <input  type="checkbox" id="caster-level-18" name="caster level 18"
              >@Caster <strong>18</strong>: ?
          </label>
        </li>
        <li>
          <label for="caster-level-19">
            <input  type="checkbox" id="caster-level-19" name="caster level 19"
              >@Caster <strong>19</strong>: ?
          </label>
        </li>
        <li>
          <label for="caster-level-20">
            <input  type="checkbox" id="caster-level-20" name="caster level 20"
              >@Caster <strong>20</strong>: ?
          </label>
        </li>
      </ul>
    </property-block>-->

    <!-- suggested BACKGROUND -->
    <h3>BACKGROUND (suggested):</h3>
    <property-block>
      <h4>Background:</h4>
      <p>?</p><br>
      <h5>two Skills:</h5>
      <span>(?, ?)</span><br>
      <h5>two Tool-Proficiencies or Languages:</h5>
      <span>? kit, ? tools</span><br>
      <h5>Personality-Trait:</h5>
      <span>?</span><br>
      <h5>Ideal:</h5>
      <span>?</span><br>
      <h5>Bonds:</h5>
      <span>?</span><br>
      <h5>Flaw:</h5>
      <span>?</span><br>
      <h5>Background-FEATURE:</h5>
      <span>?</span>
    </property-block>
    <!-- NOVA STRIKE TACTICS -->
    <h3>Optimal Tactics or&nbsp;&ldquo;NOVA&rdquo; strikes:</h3>
    <property-block>
      <h4>Multiattack.</h4>
      <p>You can make two attacks instead of one whenever you take the attack action on your turn.</p>
    </property-block>
    <!-- suggested EQUIPMENT -->
    <style type="text/css">.dark_red { color:#922610; }</style>
    <h3>EQUIPMENT suggested:</h3>
    <property-block>
      <h4>Armor / Weapons:</h4><br>
      <p>
        <label for="dagger">
          <input type="checkbox" checked id="dagger" name="dagger" value="dagger">
          <span class="dark_red">dagger</span>
          <span>&nbsp;(2gp&comma;&nbsp;1lb.) 1d4piercing,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;finesse, light, thrown, &#9441;=20/60</span>
        </label><br>
      </p>
    </property-block>
    <property-block>
      <h4>Tools / special:</h4><br>
      <p>?</p>
    </property-block>
    <property-block>
      <h4>mundane kit...</h4><br>
      <p>
        <label for="backpack">
          <input type="checkbox" checked id="backpack" name="backpack" value="backpack">
          <span class="dark_red">backpack</span>&nbsp;(2gp&comma;&nbsp;5lbs.) one cubic-foot, holds 30lbs.
        </label><br>
        <label for="pouch">
          <input type="checkbox" checked id="pouch" name="pouch" value="pouch">
          <span class="dark_red">pouch</span>&nbsp;(5sp,&nbsp;1lb.), &frac15;cubic-foot, holds 6lbs. of gear
        </label><br>
        <label for="sack">
          <input type="checkbox" checked id="sack" name="sack" value="sack">
          <span class="dark_red">sack</span>&nbsp;(1cp,&nbsp;&frac12;lb.), one cubic-foot, holds 30lbs.
        </label><br>
        <label for="vials">
          <input type="checkbox" id="vials" name="vials" 
            checked 
            onclick="return false;">
          <span class="dark_red">vials</span>
          <input 
            type="number" 
            id="vials_quantity" name="vials quantity" 
            min="0" max="9999" placeholder="1"  
            onchange="checkQuantityInput(vials_quantity.value, 'vials');">
          <span>(1gp each, negligible weight when empty),<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;each hold 4 ounces</span>
        </label><br><br>

        <label for="waterskin">
          <input type="checkbox" checked id="waterskin" name="waterskin" value="waterskin">
          <span class="dark_red">waterskin</span>
          <span>&nbsp;(2sp, 5lbs&period;&nbsp;full), holds four-pints full</span>
        </label><br>
        <label for="mess-kit">
          <input type="checkbox" checked id="mess-kit" name="mess-kit" value="mess-kit">
          <span class="dark_red">mess-kit</span>&nbsp;(2sp, 1lb.)
        </label><br>
        <label for="whetstone">
          <input type="checkbox" checked id="whetstone" name="whetstone" value="whetstone">
          <span class="dark_red">whetstone</span>
          <span>&nbsp;(1cp, 1lb.)</span>
        </label><br>
        <label for="signal-whistle">
          <input type="checkbox" checked id="signal-whistle" name="signal whistle" value="signal-whistle">
          <span class="dark_red">signal-whistle</span>&nbsp;(5cp, negligible weight)
        </label><br>
        <label for="steel-mirror">
          <input type="checkbox" checked id="steel-mirror" name="steel mirror" value="steel-mirror">
          <span class="dark_red">steel-mirror</span>
          <span>&nbsp;(5gp, &frac12;lb.)</span>
        </label><br>
        <label for="tinderbox">
          <input type="checkbox" checked id="tinderbox" name="tinderbox" value="tinderbox">
          <span class="dark_red">tinderbox</span>&nbsp;(5sp, 1lb.): exposed-fuel = one-action to light,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else one-minute to kindle a fire
        </label><br><br>
        
        <label for="chalk">
          <input type="checkbox" checked id="chalk" name="chalk" value="chalk">
          <span class="dark_red">chalk</span>&nbsp;(1cp, negligible weight)
        </label><br>
        <label for="ink-pen">
          <input type="checkbox" checked id="ink-pen" name="ink pen" value="ink-pen">
          <span class="dark_red">ink-pen</span>&nbsp;(2cp, negligible weight)
        </label><br>
        <label for="ink">
          <input type="checkbox" checked id="ink" name="ink" value="ink">
          <span class="dark_red">ink</span>&nbsp;(10gp, negligible weight), one-ounce bottle
        </label><br>
        <label for="sealing-wax">
          <input type="checkbox" checked id="sealing-wax" name="sealing wax" value="sealing-wax">
          <span class="dark_red">sealing-wax</span>&nbsp;(5sp, negligible weight)
        </label><br>
        <label for="signet-ring">
          <input type="checkbox" checked id="signet-ring" name="signet-ring" value="signet-ring">
          <span class="dark_red">signet-ring</span>&nbsp;(5sp, negligible weight), heraldic insignia
        </label><br><br>

        <label for="grappling-hook">
          <input type="checkbox" checked id="grappling-hook" name="grappling-hook" value="grappling-hook">
          <span class="dark_red">grappling-hook</span>
          <span>&nbsp;(2gp&comma;&nbsp;4lbs.)</span>
        </label><br>
        <label for="silk-rope">
          <input type="checkbox" checked id="silk-rope" name="silk-rope" value="silk-rope">
          <span class="dark_red">silk-rope</span>
          <span>&nbsp;(10gp&comma;&nbsp;5lbs.), 50feet</span>
        </label><br><br>

        <label for="traveler_clothes">
          <input type="checkbox" checked id="traveler_clothes" name="traveler's clothes" value="traveler's clothes">
          <span class="dark_red">traveler&rsquo;s clothes</span>&nbsp;(2gp, 4lbs.), includes an ample cloak
        </label><br>
        <label for="blanket">
          <input type="checkbox" checked id="blanket" name="blanket" value="blanket">
          <span class="dark_red">blanket</span>
          <span>&nbsp;(5sp, 3lbs.)</span>
        </label><br><br>
        <span style="color:gray;">~31lbs. + of mundane adventuring gear and tools
          <br>(not including weapons, rations, or coins)
        </span><br>
        <label for="rations">
          <input type="checkbox" id="rations" 
            name="rations" value="rations" 
            onclick="return false;">
          <span class="dark_red"> rations</span>
          <span>&rarr; quantity = </span>
          <input type="number" 
            id="rations_quantity" name="rations quantity" 
            min="0" max="9999" placeholder="?" value="null"
            onchange="checkQuantityInput(rations_quantity.value, 'rations');">
          <span>(each: 5sp&comma;&nbsp;2lbs. per day)</span>
        </label>
      </p>
    </property-block>
    <property-block>
      <h4>Magic-Items to quest for &rarr; WISHLIST:</h4><br>
      <p>
        <ul style="list-style-type:none;margin:0;padding:0;">
          <li>
            <label for="backpack">
              <input type="checkbox" id="backpack" name="backpack" value="backpack">
             &ldquo;Ring of Protection&rdquo; (rare, negligible weight),
              <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;attunement: +1AC, +1Saving-Throws 
            </label>
          </li>
        </ul>
      </p>
    </property-block>
  </stat-block>
  <!-- DESCRIPTION details: -->
  <style type="text/css">
    #sidebar_text {
      position:absolute;
      top:2rem;
      float:right;
      margin:0 20px 20px 460px;
    }
    #sidebar_text > p { font-size:14pt; text-align:justify; }
    @media  only screen and (max-device-width: 48em)
            and (-webkit-min-device-pixel-ratio: 3) {
      .content { margin: 0; max-width: 44em !important; }
      #sidebar_text {
        position: relative; float: none;
        font-size: 12pt;
        margin: 0 20px 20px 20px;
      }
      #sidebar_text > p { font-size: 12pt; text-align: left; }
    }
  </style>
  <div id="sidebar_text">
    <strong>Shared Freely: With Love For Any And All Of My Fellow&nbsp;&ldquo;Analog Players In A Digital World&rdquo;</strong>&#128521;
    <br><span style="color:gray;font-size:10pt;">(or simply those who can&rsquo;t afford, or are otherwise for whatever reason disinclined, to continuously keep up with buying content in character management tools like D&D Beyond)&#128176;</span>
    <p>Due to visual design formatting similar to a monster statblock, these&nbsp;&ldquo;bespoke character builds&rdquo; may of course optionally be conveniently used as &eacute;lite&nbsp;&ldquo;Fourth-Tier&rdquo; NPCs or adversaries by any Dungeon Masters who are so inclined &mdash; with as much simplification (or further customization) as desired compared to rigorously following a fully detailed&nbsp;&ldquo;by the book&rdquo; player-character progression of advancement (which these builds do scrupulously conform to, but which traditionally isn&rsquo;t deemed necessary for most monsters or NPCs).&#129335;</p>
    <p>Their primary purpose, however, is to compactly share the essence of various tightly thematic (but hopefully interestingly enough&nbsp;&ldquo;optimized&rdquo; to be worth sharing)&nbsp;&ldquo;character-builds&rdquo; in a familiar and easily readable 5eD&D&nbsp;&ldquo;Monster-Manual statblock&rdquo; style layout and typesetting. Beyond that, however, these intentionally thorough&nbsp;&ldquo;opinionated build guides&rdquo; are meant to function like&nbsp;&ldquo;grab and go&rdquo; holistic character concepts: enjoyable and ready to play starting at any level &mdash; but with a cohesive plan in place for potential progression through each level of play, and even carefully selected thematically appropriate mundane kit gear as well as suggested magic items to add to a&nbsp;&ldquo;wishlist&rdquo; or deliberately quest for if your DM is amenable (or wants to equip an NPC version of the character with some or all of them). Most&nbsp;&ldquo;mundane&rdquo; (non-magical) equipment suggested in each character build guide template should be easily affordable through the gold-buy options presented on page 143 of the Player&rsquo;s Handbook as a starting character, or through treasure gained shortly thereafter during very few levels of play (depending on the character&rsquo;s starting class and how well the d4 rolls for starting wealth go, of course...); for convenience, thematically appropriate mundane items for these character builds include handy checkboxes in case they cannot all be acquired immediately at the start of play, or in case some are temporarily lost or destroyed during play and you want to track that pending reaquisition or replacement (during which time they can remain unchecked whenever not currently possessed or worn/carried).&#127919;</p>
    <p>These character summaries can essentially function as&nbsp;&ldquo;pregenerated-characters&rdquo; especially suitable for experienced players looking for more variety and complexity through multiclassing to achieve more atypical or cleverly&nbsp;&ldquo;blended&rdquo; character concepts &mdash; in addition to some hopefully quite thrilling as well as powerful synergies combined with the greater versatility that multiclassing usually brings. Some of these builds may even additionally include a full-sized character sheet with ample explanatory notes optimized to only need small pencil-edits or highlighting of class abilities acquired as character levels increase (to the point where tools like D&D Beyond would not be necessary); regardless, the primary goal of the Monster statblock style format is to provide an easy&nbsp;&ldquo;roadmap&rdquo; without any need to buy lots of digital content or click around a lot in complex character-building tools.&#128181;</p>
    <p>That said, while these builds are shared in the hopes that others might find them mechanically interesting (as well as easy to customize and tweak to taste even without any digital character-builder), they&rsquo;re also intended to be thoughtfully conceived and cohesive&nbsp;&ldquo;ready to play in almost any setting&rdquo; clever concepts in terms of suggested names&rsquo; etymologies, suggested backstories, and lots of fun roleplaying potential. Some of the builds published on these pages in this format will be for much-loved characters that B.F. Griffith has personally playtested in various 5eD&D campaigns, while others are merely theorycrafted in the hope that he may one day have the opportunity to experience them in action &mdash; whether roleplayed by himself or someone else. Most include at least one multiclass dip, as there is obviously less to bother documenting for sharing with an audience as well as less extensive creative complexity involved in even a well optimized single-class build with strong spell selections. Anyway, B.F. Griffith hopes you enjoy some of these builds as much as he has in creating and/or playing them &mdash; and he wishes you all great joy in your gaming no matter what sorts of characters you personally prefer to play!&#128513;&#127922;</p>
    <p>
      <a  style="color:#8f5536;text-decoration:none;font-size:20px;line-height:1.5;font-family: 'Poppins', 'Andika', sans-serif;" 
          href="/RPGs/">&#8672; return to main RPGs page
      </a>
    </p>
  </div>
<!-- <style type="text/css">
  @media  only screen and (max-device-width: 896px)
          and (-webkit-min-device-pixel-ratio: 3) {
    #sidebar_text { position: relative; float: none; margin: 20px; }
  }
</style> -->
<script type="text/javascript">
  // checkboxes:
  function checkQuantityInput(input, inputID) {
    var quantity;
    var checkbox;
    if (inputID === "vials") {
      Number(input) >= 0 ? quantity = Number(input) : quantity = 0;
      checkbox = document.getElementById("vials");
      setCheckbox(quantity, checkbox);
    }
    if (inputID === "rations") {
      Number(input) >= 0 ? quantity = Number(input) : quantity = 0;
      checkbox = document.getElementById("rations");
      setCheckbox(quantity, checkbox);
    } else {
      return;
    }
  };
  function setCheckbox(quantity, checkboxID) {
    var cb = checkboxID;
    if (!(quantity >= 1)) { 
      cb.removeAttribute("checked");
    } else {
      cb.setAttribute("checked", "");
    }
  };
  //allow for permanently checked checkboxes
  document.addEventListener("DOMContentLoaded", function(event) { 
    checkbox.addEventListener('click', (event) => {
      event.preventDefault();
      event.stopPropagation();
    });
  });
</script>
