---
layout: default
title: 📧 CONTACT B.F. Griffith
permalink: /contact/
---

<div id="response" style="display:flex; align-items:center;"></div>
<!--CONTACT-->
<form name="contact-form" id="contact" style="display:flex;flex-direction:column;align-content:start;">
  <label for="first_name">First Name</label>
  <input id="first_name" type="text" placeholder="First Name" pattern="[A-Za-z\- ]+" title="Please enter a valid first name." required="required" />
  <br>
  <label for="last_name">Last Name</label>
  <input id="last_name" type="text" placeholder="Last Name" pattern="[A-Za-z\- ]+" title="Please enter a valid “surname” or family name." required="required" />
  <br>
  <label for="email">📧&#8239;eMail&nbsp;Address</label>
  <input id="email" type="email" placeholder="Email Address" required="required" />
  <br>
  <label for="website">Website&nbsp;(optional)</label>
  <input id="website" type="url" placeholder="Website" title="Please enter a valid URL (must begin with “http://” or “https://”)." />
  <br>
  <label for="phone">Telephone&#8239;＃ (📞&nbsp;or&nbsp;📱)</label>
  <input id="phone" type="tel" placeholder="Telephone Number" />
  <br>
  <label for="message">Message</label>
  <textarea id="message" placeholder="Enter your message here…" form="contact" required="required"></textarea>
  <br>
  <button type="submit" style="max-width:4em;">SEND</button>
</form>
<script src="./post-eMail.js" type="text/JavaScript"></script>