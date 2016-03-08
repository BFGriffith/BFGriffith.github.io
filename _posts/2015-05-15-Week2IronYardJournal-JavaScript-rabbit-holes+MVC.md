---
layout: post
title: Week Two Iron Yard Journal
---

### Week Two Iron Yard Journal — "JavaScript rabbit-holes & MVC"
In week two we progressed beyond the _Buddhist-**sand-Mandala**-style_ "black-box" of jammin' in the **Terminal** **`CLI`**(command-line-interface) experimental environment of merely testing and logging rather incorporeal vanilla JavaScript in the vacuum of **node**, so to speak. What has been most fascinating for me this week is how we've now "peeled back the curtain of the internet" to finally see all three of the core languages that're the focus of this course (HTML, CSS, & JavaScript) operating together in concert (or error) in order to make various sorts of [template-websites](http://tympanus.net/codrops/category/blueprints/) display and function (or not so much, in some cases, as we struggled to coordinate even one out of three of those components at once).

Throughout the week, we gradually entered ["the temple of DOM" (Document Object Model)](https://developer.mozilla.org/en-US/docs/Web/API/Document_Object_Model) and became progressively more familiar and comfortable with inspecting and playing with DOM elements in **Chrome** (my browser of choice), as well as running [browser-sync](http://www.browsersync.io/) through **Terminal**. Through this sandbox process, we learned a lot about the basics of finding and selecting elements in the browser, "listening" for them with JavaScript, as well as conceptualizing the hierarchy tree of parents and children. We also installed the [**lodash**](https://lodash.com/) tool to add some extra functionality to our JavaScript...

Another focus of the week was more intermediate philosophies of application program interface ("API") design. There was a strong focus on todo-driven and test-driven development throughout. Encapuslation also remains an important principle in terms of packing of data and functions into a single component when possible, creating a mechanism for restricting access to some of an object's components, or constructing code that facilitates bundling of data with methods (or other functions) operating on that data. Some of this can be accomplished through Global versus Local scope variables in JavaScript.

---

![MVC](http://upload.wikimedia.org/wikipedia/commons/a/a0/MVC-Process.svg)

* **CLI to MVC** — The biggest change in moving from command-line-interface to the more complex MVC model this week was in conceptualizing and implementing separation of concerns and interaction between each part of the model...
  * **model** — This portion contains JavaScript functions that store data retrieved by the controller and displayed in the view; whenever there is a change to the data this must be updated by the controller.
  * **view** — This portion includes the display, interface, and what the user sees and reacts to; it requests information from the model that it uses to generate an output UI representation to the user.
  * **controller** — This portion connects the view and model and tells the model and view what to do after recieving input.
