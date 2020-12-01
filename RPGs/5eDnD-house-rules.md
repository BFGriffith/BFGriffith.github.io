---
layout: default
title: house-rules &#10137; 5eD&D
permalink: /RPGs/5eDnD/house-rules/
---

<div class="page">
  <h1 class="page-title">{{page.title}}</h1>
  <p 
    style="font-size:0.75rem; font-style:italic;"
    >The following are house-rules that B.F. Griffith has used and often prefers (or is seriously contemplating implementing in at least some future campaign settings) in his 5th Edition Dungeons & Dragons tabletop-roleplaying games.<br>Any mechanics not specified or amended in these house-rules can be assumed to default to 5eD&D officially published “rules as written” + errata and any relevant “Sage Advice” clarifications.
  </p>
  <h3>GENERAL GAMEPLAY and COMBAT MECHANICS:</h3>
  <div class="accordion" style="clear:both;">
    <!-- accordion-panel: Ability-Scores -->
    <div>
      <input type="checkbox" name="panel" id="ability-scores">
      <label for="ability-scores">Ability-Scores:</label>
      <div class="accordion_content">
        <h2 
          class="accordion_header" 
          title="quod nocet, sæpe doce">EXPANDED MIN-MAX OPTIONS:</h2>
        <p class="accordion_body">B.F. Griffith personally prefers the point-buy system detailed on PHBpage13 (rather than rolling) for ability-score generation (before applying racial-modifiers), mostly for reasons of both fairness and balance/consistency according to the central 5eD&D philosophy of “bounded-accuracy” — however, the usual point-buy options could be expanded to allow selections beyond ability-scores of 15 (such as the following arrays which go beyond the “standard array” options and point-buy system presented in the PHB), by spending (out of 27 starting points for ability-score buying):</p>
        <ul class="accordion_body">
          <li>12 points for an ability-score of 16</li>
          <li>15 points for an ability-score of 17</li>
          <li>19 points for an ability-score of 18</li>
          <li>24 points for an ability-score of 19</li>
          <li>or (though I don’t know why this would ever be a better option than aligning a favored score with racial-modifiers) all 27 points for an ability-score of 20 (leaving the rest at 8)</li>
        </ul>
        <p class="accordion_body">This house-rule is designed to be fully consistent with point-buy of ability-scores using the standard 27 starting points being accomplished before applying racial-modifiers, as usual, and no scores lower than 8 allowed unless players really want to min-max with some semi-disabled characters in some aspects, in which case a DM might consider the following extension table below which could grant players more than 27 starting points if they take some ability scores even lower than 8.<br>An additional advantage of point-buy is that, without any need for secure-digital rolling, it allows players to more easily discuss and plan their characters in advance of session-zero/one rather than having to entirely “roll-up” characters at the table (ideally, this should allow more time in-person/session-zero for planning party bonds, more detailed backstories, party “balance” or areas of expertise to spotlight, hard or soft limits, house-rules, thematic or content focus expectations, etc.). It’s just simpler as well as more balanced, and anyone who doesn’t want to bother it can simply take the standard-array.</p>
        <ul class="accordion_body">
          <li>Anyway, here are some even more extreme alternatives for min-max if the DM is willing to allow some essentially disabled-level heavily-penalized abilities (below 8) to add extra points beyond 27 to point-buy:</li>
        </ul>
        <table style="width:100%">
          <tr style="color:#313131;">
            <th>Score</th><th>Modifier</th><th>Point-Value</th>
          </tr>
          <tr><td>3</td><td>-4</td><td>+3</td></tr>
          <tr style="color:#313131;"><td>4</td><td>-3</td><td>+2</td></tr>
          <tr><td>5</td><td>-3</td><td>+2</td></tr>
          <tr style="color:#313131;"><td>6</td><td>-2</td><td>+1</td></tr>
          <tr><td>7</td><td>-2</td><td>+1</td></tr>
        </table>
      </div>
    </div>
    <!-- accordion-panel: critical-hits -->
    <div>
      <input type="checkbox" name="panel" id="critical-hits">
      <label for="critical-hits">Critical-Hits:</label>
      <div class="accordion_content">
        <h2 
          class="accordion_header" 
          title="“Rollant his stroke on a dark stone repeats, And more of it breaks off than I can speak. The sword cries out, yet breaks not in the least, Back from the blow into the air it leaps.”">“With Durendal I’ll lay on thick and stout,<br>In blood the blade, to its golden hilt, I’ll drown.”</h2>
        <p class="accordion_body">A Critical-Hit scores double the damage-dice, plus any usual modifiers, as per usual 5eRAW, but one of the additional damage-dice rolled is automatically treated as the maximum result of that die-type; however, this also applies to enemies and monsters when they score a critical-hit on PCs, of course! For example, if you critical-hit with a weapon or ranged-attack spell that normally does 2d6 points of damage, a critical-hit under this house-rule would do: 3d6+6+any-usual-mods points of damage (whereas a critical-hit with a 1d8 damage weapon would do 8+1d8+any-usual-mods damage). This way, critical-hits almost always satisfyingly result in greater than normal max-roll damage instead of rolling snake-eyes (though, of course, the danger is that enemies also gain this benefit to their critical-hits — so it makes critical-hits guaranteed to be more eventful, whether dishing out or receiving, but still less extreme and less swingy than maximizing or doubling the entirety of the damage would be).</p>
      </div>
    </div>
    <!-- accordion-panel: death -->
    <div>
      <input type="checkbox" name="panel" id="death">
      <label for="death">Death and Unconsciousness:</label>
      <div class="accordion_content">
        <h2 
          class="accordion_header" 
          title="“Pulvis et umbra sumus.”">“It just so happens that your friend here is only MOSTLY dead.”</h2>
        <ul class="accordion_body">
          <li>revised <span style="font-weight:bold;">death-saving-throws:</span> death-saving-throw successes <span style="text-decoration:underline;">do</span> reset when a character regains consciousness, but death-saving-throw failures do <span style="text-decoration:underline;">not</span> reset when a character regains consciousness; however, after each successfully completed short-rest, one failed death-save is removed — or, after a successfully completed long-rest, all failed-death-saves are reset; additionally, most DMs using this rule may decide to somewhat “balance it out” by allowing that one casting of Lesser-Restoration can optionally be used to remove one accumulated death-save — or one casting of Greater-Restoration can optionally be used to remove all accumulated failed-death-saves</li>
          <li>PCs can creatively use the <span style="font-weight:bold;">“Help” action</span> to make a check that, if successful, will grant a dying player advantage on a death-saving-throw (using Medicine-check or something more creative: e.g. Strength to apply firm pressure on and bind the wound, Dexterity to remove fragments or insert a staunching item or rig a brace, an Arcana-check to call out to a player’s spirit, a Persuasion or Religion check screaming into the void dramatically for the ally to hold fast to life or praying for divine intercession, etc.)</li>
          <li><span style="font-weight:bold;">Heroic-Recovery:</span> a character that successfully saves on all three death-saving-throws immediately comes back ready to fight at one-hit-point (for more epic moments); death-saving-throws occur at the beginning of a character's turn (so characters don’t ever achieve a third success on their turn but do nothing; however, this also applies to important enemies and NPCs)</li>
          <li>In summary: Pathfinder style “wounded” condition (to provide an ultimate fix of “whack-a-mole” dynamics): if a character is healed from unconscious or all three successful death-saves are achieved such that a character returns to consciousness (including magically), the character gains the “Wounded 1” condition (starts with one failed-death-saving-throw if knocked unconscious again) — then, if dropped unconscious again but healed or returned to consciousness, the character gains the “Wounded 2” condition (two failed-death-saving-throws) — then, if healed or all successful-saves again, the character gains “Wounded 3” condition (a “pending” three failed death-saving-throws) such that the character would immediately die if dropped unconscious again! (see above for removing failed death-saving-throws accumulated due to “Wounded” condition by resting)</li>
          <li><span style="font-weight:bold;">OPTIONAL</span> increased <span style="font-weight:bold;">“coup de grâce” lethality:</span> if a character gets hit by anything while unconscious, 1→25damage = add one automatic death-save failure, 26→50damage = add two automatic death-save failures, 50+damage = three death-save failures and instant death</li>
          <li><span style="font-weight:bold;">OPTIONALLY:</span> conduct death-saving-throws as somewhat secret rolls seen only by the DM and the unconscious/dying PC, so the whole party does NOT know how many successes or failures have been achieved? (to increase drama regarding whether to stabilize or heal a potentially dying PC or fight on to vanquish a deadly enemy with less metagaming)</li>
        </ul>
      </div>
    </div>
    <!-- accordion-panel: gritty-healing -->
    <div>
      <input type="checkbox" name="panel" id="gritty-healing">
      <label for="gritty-healing">Grittier Healing:</label>
      <div class="accordion_content">
        <h2 
          class="accordion_header" 
          title="morituri te salutant">MORE REASONABLE AND BALANCED NATURAL-HEALING MECHANICS:</h2>
        <p class="accordion_body" style="color:#e40712;">(tougher and at least slightly more “realistic” healing rules than 5eRAW default, but arguably still plenty “heroic” for fast-paced adventures — especially in settings retaining ample 5eRAW magical-healing options/features and not deviating too far from RAW, in general)</p>
        <ul class="accordion_body">
          <li>Whenever you’re forced unconscious, you also gain one point of exhaustion, in addition to the normal effects. However, the first level of exhaustion is revised/softened to only subtract 10 from Speed, while disadvantage on ability-checks is moved to the second level of exhaustion along with halved-Speed.</li>
          <li>During a Long-Rest (amending PHBpage186), rather than automatically regaining all hit-points up to maximum, a character’s remaining hit-dice (if any) can be spent (rolled + Constitution-modifier for each) as usual to regain hit-points after at least one-hour spent resting rather than engaged in “light activity” on watch (similarly to DMGpage267 “Slow Natural Healing” rules), which is essentially like taking a short-rest within part of the long-rest, and then ½ total hit-dice are regained at the end of any successful long-rest not interrupted by any strenuous adventuring activity (per the usual rules).
            <ul><li>Furthermore, these just regained ½ of total hit-dice can also be spent immediately to regain hit-points after a successful long-rest during which no more than one-hour out of the eight total was spent by that character at “light activity” such as keeping watch, or these hit-dice can be spent after an immediately subsequent short-rest if time allows (i.e. nine hours total rest with up to two hours light-activity or on watch as with a typical long-rest). As usual, a character can only benefit mechanically from one long-rest per 24 hour period — so spending hit-dice immediately after a successful long-rest that might be needed before another long-rest can be completed is a calculated risk. In most settings, the DM anticipates this should be somewhat balanced by the possibility in many cases of attempting to flee or tactically-retreat by vehicle, mounts, or other magical means to escape danger if necessary (which isn’t an option in other settings or dire stakes battles that need to be won at any cost), as well as by encouraging increased fast-forwarded “downtime” compared to an overland campaign under constant threat in wilderness or a megadungeon, though there is no doubt this will sometimes require the party to be more strategic compared to a traditional “heroic” high-fantasy campaign with routine miraculously complete recovery after each night’s rest.</li></ul>
          </li>
          <li>To compensate somewhat for increased grittiness in healing and recovery mechanics, a sensible house-rule can be to roll the hit-die for the increase to maximum hit-points upon each level-up, but let any roll below the average number [“(or ?)” next to the hit-die in the class description] default to that average number as a “floor” (plus Constitution-modifier as usual).</li>
          <li><span style="color:green;font-weight:bold;">Healer feat</span> (PHBpage167): When you use a healer’s kit to stabilize a dying creature as an action, that creature also regains 1 hit-point and typically regains consciousness. During a short-rest (not as an action), you can spend one use of a healer’s kit per hour to tend extensively to one creature and restore 1d6+4 hit-points to it plus additional hit-points equal to your proficiency-bonus. The creature cannot regain hit-points from this feat again until it finishes a long-rest (and you do not gain the benefits of a short-rest if working on healing someone during it, however, using the kit in this way during a long-rest can be done as part of time “on watch” and still allow the healer to gain the normal benefits of the long-rest as long as no more than two creatures are healed in this way, in place of the normal two hours of “light activity” or “on-watch” time allowed during a successful long-rest).</li>
        </ul>
      </div>
    </div>
    <!-- accordion-panel: hardcore-mode -->
    <div>
      <input type="checkbox" name="panel" id="hardcore-mode">
      <label for="hardcore-mode">HARDCORE-MODE!</label>
      <div class="accordion_content">
        <h2 
          class="accordion_header" 
          title="Qui Audet Adipiscitur">“oD&D style” gritty NATURAL-HEALING RULES:</h2>
        <p class="accordion_body" style="color:#e40712;">(an attempt at significantly tougher and relatively much more “realistic” healing rules than 5eRAW default, mostly inspired by Starfinder as well as classic editions of D&D mechanics — but still arguably adequately “heroic” and “playable” within 5eD&D mechanics, especially in settings retaining ample 5eRAW magical-healing options/features; however, these rules certainly may increase impetus for PCs to more frequently seek “downtime” recovery interludes or else they will significantly increase lethality risks of multiple prolonged combats over time whenever extended respite is not possible)</p>
        <ul class="accordion_body">
          <li>Whenever you’re forced unconscious, you also gain one point of exhaustion, in addition to the normal effects. However, the first level of exhaustion is revised/softened to only subtract 10 from Speed, while disadvantage on ability-checks is moved to the second level of exhaustion along with halved-Speed.</li>
          <li>Instead of simply a pool of hit-points as per 5eD&D RAW, player-characters (and some important monsters or NPCs who may follow similar mechanics at the DM’s discretion) have both “hit-points” and “Stamina-points” which increase at each level, with a separate and distinct maximum-total for each maintained as the character gains levels.</li>
          <li>Somewhat similarly to 2eAdvanced-D&D mechanics: assuming adequate food+water, characters normally heal naturally at a rate of one-hit-point per “day” of “low activity” up to their hit-point-maximum total at current character-level — with “low” activity defined as nothing more strenuous throughout the day than “light”/downtime activities as during “rests” when not sleeping (per 5eRAW), including keeping watch, or even riding a mount/vehicle at an unhurried/normal pace from one place to another in a not too harsh environment. However, activities at any point throughout the day like fighting, running/galloping or forced-marches, lifting a heavy-boulder, subsisting through and enduring unsheltered treks through harsh environments full of difficult-terrain, or any other “strenuous” physical activity prevent naturally healing any hit-points that day since they strain old or still tender wounds and may even reopen or otherwise aggravate them. A “low activity” day begins after successful completion of a long-rest (at least eight-hours) subsequent to losing hit-points (regardless of whether that long-rest was too soon after the previous one to benefit mechanically from more than one long-rest per 24-hour period) and that low-activity “day” ends after successful completion of the next long-rest (at least eight-hours ending more than 24 hours after the beginning of the previous long-rest that started the “low activity” day).
            <ul>
              <li>If a character can manage complete “bedrest” (doing nothing but very “light” activities such as lounging [in a relatively smooth-riding vehicle and comfortable enough climate or an even more restful and sheltered environment], conversing, reading, adequate eating/drinking, napping, moving very little, etc.) for an entire day (between two long-rests more than 24-hours apart as above) — then that character can regain three-hit-points per day. For each complete week of “bedrest” as above, the character can add any positive Constitution-modifier to the base of 21 hit-points of healing (three hit-points per day) regained during that week.</li>
              <li><span style="font-style:bold;">OPTIONALLY:</span> To compensate somewhat for increased grittiness in healing and recovery mechanics, a sensible house-rule can be to roll the hit-die for the increase to maximum Stamina-points upon each level-up, but let any roll below the average number “(or ?)” next to the hit-die in the class description default to that average number as a “floor” of the minimum numbers of Stamina-points gained.</li>
              <li>Any effects or features in 5eD&D RAW that add or grant “temporary-hit-points” instead add or grant “temporary-Stamina-points” which do not permanently add to the maximum Stamina-point total, and are lost before normal Stamina-points whenever a character takes damage.</li>
            </ul>
          </li>
        </ul>
        <ul class="accordion_body">
          <li style="font-style:bold;">Hit-points could then be the initial level starting-HP only, with all subsequent levels' hit-dice to stamina plus optionally including a 1st level hit-dice to starting stamina, and then the DM would need to decide whether to add Constitution-mod (or minimum one) hit-points per level, or to add that to stamina, or to both; or to add Constitution-mod to stamina each level and increase hit-points by one per level past one (or vice versa).
            <ul><li style="font-style:italic;">Another option under this system would be for most magical healing to only affect hit-points and not stamina, while some other restorative spells could be modified to be able to allow players to spend hit-die to regain stamina-points outside of rests or replenish hit-die faster than normal.</li></ul>
          </li>
        </ul>
        <p class="accordion_body">It requires no extensive justification, I hope, to state that there are both more as well as less “crunchy” rule-systems available in various tabletop-RPGs compared to D&D, and that “hit-points” have always been somewhat of an abstraction, with specific or crippling injuries being rare in D&D rules, characters generally fighting with maximal effectiveness right to the brink of unconsciousness and risking death, and thus “hit-points” often largely conceptualized as mounting-exhaustion from desperate parries or dodges wearing a character down a certain number of times before a fatal mistake finally leads to a potentially lethal hit landing. These house-rules would thus leave “Stamina-points” to fill that more traditional role (and remain more easily recovered between fights by rolling hit-dice [“Stamina-dice”]), whereas “hit-points” could finally serve a more realistically simulationist role to somewhat represent lingering injuries and physical impairments resulting from more desperate combats (as well as ensuring that magic which quickly heals wounds by restoring hit-points would not necessarily restore one’s élan, morale, or “endurance” through sustained combat — as represented by “Stamina-points” — or vice versa...). This system also arguably allows for more realistic “rest and recovery” as well as “natural healing” mechanics by separating these, while still allowing traditional magical means of more rapid healing.</p>
      </div>
    </div>
    <!-- accordion-panel: help-action -->
    <div>
      <input type="checkbox" name="panel" id="help-action">
      <label for="help-action">Help action:</label>
      <div class="accordion_content">
        <h2 
          class="accordion_header" 
          title="“teamwork makes the dream work”">Our Powers Combine:</h2>
        <p class="accordion_body">In order to give someone “help” with a Skill-check by using this action, the “helper” must be proficient with the relevant skill the creature receiving help is using.</p>
      </div>
    </div>
    <!-- accordion-panel: Identify spell -->
    <div>
      <input type="checkbox" name="panel" id="identify">
      <label for="identify">Identify:</label>
      <div class="accordion_content">
        <h2 
          class="accordion_header" 
          title="omne ignotum pro mαgnifico">PUTTING SOME MYSTIQUE BACK IN IDENTIFICATIONS:</h2>
        <ul class="accordion_body">
          <li><span style="color:#e40712;">Ignore 5eDMG page 136 — “Alternatively, a character can focus on one magic item during a short rest, while being in physical contact with the item. At the end of the rest, the character learns the item’s properties, as well as how to use them. Potions are an exception; a little taste is enough to tell the taster what the potion does.”</span>
            <ul>
              <li>Instead prefer rules along the lines of the following in the DMG:</li>
              <li style="color:#2980b9;font-style:italic;">&laquo;Wearing or experimenting with an item can also offer hints about its properties. For example, if a character puts on a ring of jumping, you could say, “Your steps feel strangely springy.” Perhaps the character then jumps up and down to see what happens. You then say the character jumps unexpectedly high... Sometimes a magic item carries a clue to its properties. The command word to activate a ring might be etched in tiny letters inside it, or a feathered design might suggest that it’s a ring of feather falling.&raquo;</li>
              <li>An Intelligence (Arcana) check measures your ability to recall lore about spells, magic items, eldritch symbols, magical traditions, the planes of existence, and the inhabitants of those planes. This check requires special training or lore and thus normally has disadvantage (or may be impossible in some cases) unless proficient. However, if proficient, time spent studying the item (given resources to do such research such as a library) or experimenting with it can give advantage on this check.</li>
              <li>Similar rules should apply to identifying poisons or potions: Wisdom (Medicine) check, with proficiency if using and proficient with the appropriate kit (poisoner’s / herbalism).</li>
              <li>Also, per 5eDMG page 138 — Most methods of identifying items, including the identify spell, fail to reveal a curse, although lore might hint at it. A curse should be a surprise to the item’s user when the curse’s effects are revealed. Attunement to a cursed item can’t be ended voluntarily unless the curse is broken first, such as with the remove curse spell.</li>
            </ul>
          </li>
          <li><span style="color:gold;">Identify Spell</span> revised to:
            <ul>
              <li style="font-style:italic;">1st-level divination (ritual)</li>
              <li>Casting Time: 1 minute, Range: Touch, Components: V, S, M (a pearl worth at least 100gp and an owl feather) Duration: Instantaneous</li>
              <li>Make a spellcasting d20 roll + spellcasting ability modifier + proficiency bonus. You choose one object that you must touch throughout the casting of the spell. If it is a magic item or some other magic-imbued object, your roll (versus the DC of whatever magic/enchantments may be involved) will determine how much you learn of its magic properties, how to use them, whether it requires attunement to use, any command words or gestures, and how many charges it has (if any), whether any spells are affecting the item and what they are, which spell created the item (if any), etc. If you instead touch a creature throughout the casting, you learn what spells, if any, are currently affecting it, assuming these are not mysterious enchantment or illusion magic with a higher DC than your roll (in which case you would still detect what school of magic was in effect).</li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!-- accordion-panel: intelligence -->
    <div>
      <input type="checkbox" name="panel" id="intelligence">
      <label for="intelligence">Intelligence-modifier:</label>
      <div class="accordion_content">
        <h2 
          class="accordion_header" 
          title="“Elementary, my dear...”">Scientia Potestas Est:</h2>
        <p class="accordion_body">If you have a positive Intelligence-modifier of at least +2, you can take ½ of your Intelligence-modifier (rounded-down) of extra Languages that you can speak, read, and write — or tool-proficiencies (i.e. up to two extra languages or tools with the maximum 20 Intelligence-score and a +5 Intelligence-modifier). This house-rule is an attempt to somewhat better balance Intelligence against the benefits of other primary abilities such as Dexterity or Wisdom.</p>
      </div>
    </div>
    <!-- accordion-panel: potions -->
    <div>
      <input type="checkbox" name="panel" id="potions">
      <label for="potions">Potions:</label>
      <div class="accordion_content">
        <h2 
          class="accordion_header" 
          title="変若水 “ochimizu”">VISCE BEATHA:</h2>
        <p class="accordion_body">A character can drink a potion as a bonus-action, however, it still requires an action to feed a potion to another person — and, in either case, at least one free hand in addition to the one “interact with object” action typically available per turn is required to draw the potion forth from where it was accessibly carried and get it ready to drink or feed to someone (with a couple fingers of a second hand or one’s teeth assumed to be sufficient to unstopper a potion in most cases); however, drinking a potion as a bonus-action or feeding one to someone as an action, or any other similar object interaction that the DM deems may put a character momentarily “off-guard” during combat (loading a weapon with that property, interacting with any relatively complex mechanism beyond operating a mere single switch/lever, handle, or knob, etc.), may provoke a reaction “attack-of-opportunity” from any adjacent hostile creatures within mêlée-attack-range, at the DM’s discretion.</p>
      </div>
    </div>
  </div><!-- .accordion -->
  <h3>
    <ul>
      <li><a href="/RPGs/homebrew/firearms/">5eD&D weapons + firearms homebrew options</a></li>
      <li><a href="/RPGs/homebrew/vehicles/">5eD&D vehicle homebrew options</a></li>
    </ul>
  </h3>
  <p>
    <img 
      id="bow-arrow_Artemesian" 
      src="/IMAGES/bow-arrow_Artemesian.png" 
      alt="decorative Artemesian bow and arrow" 
      style="margin:0 auto;" 
      height="auto" width="50">
  </p>
  <h3>CLASS-SPECIFIC HOUSE-RULES:</h3>
  <div class="accordion" style="clear:both;">
    <!-- accordion-panel: Warlock spells -->
    <div>
      <input type="checkbox" name="panel" id="warlock-spells">
      <label for="warlock-spells">Warlock spells:</label>
      <div class="accordion_content">
        <h2 
          class="accordion_header" 
          title="“Ph'nglui mglw'nafh Cthulhu R'lyeh wgah'nagl fhtagn.”">SPELLS-KNOWN UPGRADE:</h2>
        <p class="accordion_body">Warlocks automatically get all the “Patron Spells” listed for their selected Patron as spells known when they reach the indicated Warlock levels, and these Patron spells do not compete with or count against the normal numbers of Warlock spells known that must be selected from the Warlock list. They don’t have to choose between either Patron Spells or the generic Warlock spells, they just get the Patron spells (similarly to Paladin or Cleric Oath/Domain spells). Warlocks have few enough spells they can cast in a day that this is arguably harmless enough to game balance. Thus Warlocks become slightly more viable and versatile spellcasters with this house-rule, and players can connect a lot more easily with the flavor of their patron when they get to have this boon.</p>
      </div>
    </div>
  </div><!-- .accordion -->
  <h3>
    <ul><li><a href="/RPGs/homebrew/Beastmaster-Ranger/">Ranger &#10137; Beastmaster</a></li></ul>
  </h3>
  <p>
    <img 
      id="bow-arrow_Artemesian" 
      src="/IMAGES/bow-arrow_Artemesian.png" 
      alt="decorative Artemesian bow and arrow" 
      style="margin:0 auto;" 
      height="auto" width="50">
  </p>
  <p><a href="/RPGs/">&#8672; return to main RPGs page</a></p>
</div><!-- .page -->
