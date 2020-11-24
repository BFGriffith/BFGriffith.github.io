---
layout: default
title: house-rules &#10137; 5eD&D
permalink: /RPGs/5eDnD/house-rules/
---

<div class="page">
  <h1 class="page-title">{{page.title}}</h1>
  <p 
    style="font-size:0.75rem; font-style:italic;"
    >The following are house-rules that B.F. Griffith has used and often prefers (or is seriously contemplating implementing in at least some future campaign settings) in his 5th Edition Dungeons & Dragons tabletop-roleplaying games. Any mechanics not specified or amended in these house-rules can be assumed to default to 5eD&D officially published “rules as written” + errata and any relevant “Sage Advice” clarifications.
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
        <p class="accordion_body">B.F. Griffith personally prefers the point-buy system detailed on PHBpage13 (rather than rolling) for ability-score generation (before applying racial-modifiers), for reasons of both fairness and balance/consistency according to the central 5eD&D philosophy of “bounded-accuracy” — however, the point-buy options could be expanded to allow selections beyond ability-scores of 15 (such as these arrays which go beyond the “standard array” options presented in the PHB), by spending (out of 27 starting points for ability-score buying): 12 points for an ability-score of 16, 15 points for an ability-score of 17, 19 points for an ability-score of 18, 24 points for an ability-score of 19, or (though I don’t know why this would be a better option than aligning a favored score with racial-modifiers) all 27 points for an ability-score of 20 leaving the rest at 8 (with all point-buy of ability-scores using the standard 27 starting points being accomplished before applying racial-modifiers, as usual, and no scores lower than 8 allowed unless players really want to min-max with some semi-disabled characters in some aspects, in which case we could consider the following extension table below which could grant players more than 27 points if they take some ability scores even lower than 8); an additional advantage of point-buy is that, without any need for secure-digital rolling, it allows players to more easily discuss and plan their characters in advance of session-zero/one rather than having to entirely “roll-up” characters at the table (ideally, this should allow more time in-person/session-zero for planning party bonds, more detailed backstories, or planning party “balance” / areas of expertise to spotlight). It’s just simpler as well as more balanced.</p>
        <ul class="accordion_body">
          <li>alternatives for extreme min-max if one is willing to allow some essentially disabled-level heavily-penalized abilities (below 8) to add extra points beyond 27 to point-buy:</li>
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
          <li><span style="color:green;font-style:bold;">Healer feat</span> (PHBpage167): When you use a healer’s kit to stabilize a dying creature as an action, that creature also regains 1 hit-point and typically regains consciousness. During a short-rest (not as an action), you can spend one use of a healer’s kit per hour to tend extensively to one creature and restore 1d6+4 hit-points to it plus additional hit-points equal to your proficiency-bonus. The creature cannot regain hit-points from this feat again until it finishes a long-rest (and you do not gain the benefits of a short-rest if working on healing someone during it, however, using the kit in this way during a long-rest can be done as part of time “on watch” and still allow the healer to gain the normal benefits of the long-rest as long as no more than two creatures are healed in this way, in place of the normal two hours of “light activity” or on-watch time allowed).</li>
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
          title="Qui Audet Adipiscitur">“oD&D style” NATURAL-HEALING RULES:</h2>
        <p class="accordion_body" style="color:#e40712;">(an attempt at significantly tougher and relatively much more “realistic” healing rules than 5eRAW default, mostly inspired by Starfinder as well as classic editions of D&D mechanics — but still arguably adequately “heroic” and “playable” within 5eD&D mechanics, especially in settings retaining ample 5eRAW magical-healing options/features; however, these rules may increase impetus for PCs to more frequently seek “downtime” recovery interludes or else significantly increase lethality risks of multiple prolonged combats over time whenever extended respite is not possible)</p>
        <ul class="accordion_body">
          <li>Whenever you’re forced unconscious, you also gain one point of exhaustion, in addition to the normal effects. However, the first level of exhaustion is revised/softened to only subtract 10 from Speed, while disadvantage on ability-checks is moved to the second level of exhaustion along with halved-Speed.</li>
          <li>Instead of simply a pool of hit-points as per 5eD&D RAW, player-characters (and some important monsters or NPCs who may follow similar mechanics at the DM’s discretion) have both “hit-points” and “Stamina-points” which increase at each level, with a separate and distinct maximum-total for each maintained as the character gains levels.</li>
          <li>Somewhat similarly to 2eAdvanced-D&D mechanics: assuming adequate food+water, characters normally heal naturally at a rate of one-hit-point per “day” of “low activity” up to their hit-point-maximum total at current character-level — with “low” activity defined as nothing more strenuous throughout the day than “light”/downtime activities as during “rests” when not sleeping (per 5eRAW), including keeping watch, or even riding a mount/vehicle or traveling on foot at an unhurried/normal pace from one place to another in a not too harsh environment. However, activities at any point throughout the day like fighting, running/galloping or forced-marches, lifting a heavy-boulder, subsisting through and enduring unsheltered treks through harsh environments, or any other “strenuous” physical activity prevent naturally healing any hit-points that day since they strain old or still tender wounds and may even reopen or otherwise aggravate them. A “low activity” day begins after successful completion of a long-rest (at least eight-hours) subsequent to losing hit-points (regardless of whether that long-rest was too soon after the previous one to benefit mechanically from more than one long-rest per 24-hour period) and that low-activity “day” ends after successful completion of the next long-rest (at least eight-hours ending more than 24 hours after the beginning of the previous long-rest that started the “low activity” day).
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
          <li><span style="color:#e40712;">Get rid of 5eDMG page 136 — “Alternatively, a character can focus on one magic item during a short rest, while being in physical contact with the item. At the end of the rest, the character learns the item’s properties, as well as how to use them. Potions are an exception; a little taste is enough to tell the taster what the potion does.”</span>
            <ul style="color:#2980b9;">
              <li>Instead: &laquo;Wearing or experimenting with an item can also offer hints about its properties. For example, if a character puts on a ring of jumping, you could say, “Your steps feel strangely springy.” Perhaps the character then jumps up and down to see what happens. You then say the character jumps unexpectedly high... Sometimes a magic item carries a clue to its properties. The command word to activate a ring might be etched in tiny letters inside it, or a feathered design might suggest that it’s a ring of feather falling.&raquo;</li>
              <li>Intelligence (Arcana) check measures your ability to recall lore about spells, magic items, eldritch symbols, magical traditions, the planes of existence, and the inhabitants of those planes. This check requires special training or lore and thus normally has disadvantage (or may be impossible in some cases) unless proficient. However, if proficient, time spent studying the item (given resources to do such research such as a library) or experimenting with it can give advantage on this check.</li>
              <li>Similar rules should apply to identifying poisons or potions: Wisdom (Medicine) check, with proficiency if using and proficient with the appropriate kit (poisoner’s / herbalism).</li>
              <li>Also, per 5eDMG page 138 — Most methods of identifying items, including the identify spell, fail to reveal a curse, although lore might hint at it. A curse should be a surprise to the item’s user when the curse’s effects are revealed. Attunement to a cursed item can’t be ended voluntarily unless the curse is broken first, such as with the remove curse spell.</li>
            </ul>
          </li>
          <li>Identify Spell revised to:
            <ul>
              <li style="font-style:italic;">1st-level divination (ritual)</li>
              <li>Casting Time: 1 minute, Range: Touch, Components: V, S, M (a pearl worth at least 100gp and an owl feather) Duration: Instantaneous</li>
              <li>Make a spellcasting d20 roll + spellcasting ability modifier + proficiency bonus. You choose one object that you must touch throughout the casting of the spell. If it is a magic item or some other magic-imbued object, your roll (versus the DC of whatever magic/enchantments may be involved) will determine how much you learn of its magic properties, how to use them, whether it requires attunement to use, any command words or gestures, and how many charges it has (if any), whether any spells are affecting the item and what they are, which spell created the item (if any), etc. If you instead touch a creature throughout the casting, you learn what spells, if any, are currently affecting it, assuming these are not mysterious enchantment or illusion magic with a higher DC than your roll (in which case you would still detect what school of magic was in effect).</li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div><!-- .accordion -->
  <br>
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
        <p class="accordion_body">Warlocks automatically get all the Patron Spells listed for their selected Patron as spells known when they reach the indicated Warlock levels. They don’t have to choose between either Patron Spells or the generic Warlock spells, they just get them. Warlocks have few enough spells they can cast in a day that this is arguably harmless to game balance. They become slightly more viable and versatile spellcasters with this house-rule, just a little, and players can connect a lot more easily with the flavor of their patron when they get to have this boon.</p>
      </div>
    </div>
  </div><!-- .accordion -->
  <h3>
    <ul><li><a href="/RPGs/homebrew/Beastmaster-Ranger/">Ranger &#10137; Beastmaster</a></li></ul>
  </h3>
</div><!-- .page -->
