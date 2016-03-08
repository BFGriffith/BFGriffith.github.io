---
layout: post
title: Week Three Iron Yard Journal
---

###lessons from the Saint Petersburg Front-End-Design conference, May 2015
* One buzzword I heard in several presentations at the conference that was new to me was discussion of cultivating **"T"-shaped** employees — and while this quality would be useful in many fields, I could definitely see why it seems especially apropos in the tech.-industry. Anyway, the visual it invokes is a basic but important concept: namely that an ideal employee has a deep-specialization in some primary capabilties or core competencies (the vertical part of the **T**), but also broad knowledge across a variety of related disciplines (the horizontal top of the **T**) in order to anticipate needs and work collaboratively with colleagues who excell at diverse specialties.
  * That said, another aspect of this metaphorical visual involves adding new deeper vertical specialties over time... For example, one might learn new programming languages, a Front-End guy might learn Back-End server-side skills — or vice-versa — or a coder might learn graphic-art and sophisticated digital design or animation skills (or vice-versa).
* A major emphasis throughout the entire conference was on lightweight, responsively liquid, and mobile-first designs. Reducing page-weight and not using excessive dependencies or pointless flair should be considered fundamental to sound design whenever possible, and enhancements should scale with device capabilities.
  * no flash carosels!
* I was dimly aware, before this conference, that UX and QA testing must be done one websites, but some of the speakers (and my experiences in class so far) have definitely given me a new appreciation for the painstaking complexities and importance of that process — as well as how greatly it can enhance user satisfaction by improving the usability, accessibility, and pleasure provided in any interaction between the user and the product. Late in the development process, I think it's important to approach a web-application from a user-perspective, solicit feedback from many different users, try to break things as a less than competent user (or even as a malicious hacker), etc.
* design and development; practicalities of coding and UI aesthetics
* Chris Coyier gave a great presentation about SVG and its importance as a lightweight and functional image-type for many general uses on the web. Manipulating many of these images can be tricky, but is very different from advanced photo-editing or graphic-design working with pixel-based image formats. On the plus side:
  * SVG images look sharp at any dimension (resolution independent) yet with tiny file sizes — which is great for making responsive websites responsibly.
  * why send pixel data when you can send geometry?
    * SVG is great for JavaScript MVC format: make the computer do more work, since the internet is still the bottleneck...
  * SVG uses declarative syntax, which offers many more design possibilities than one might initially suppose, keyframe animations, can be controlled well with JavaScript to manipulate graphic page elements, etc.
