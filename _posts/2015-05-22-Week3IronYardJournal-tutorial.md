---
layout: post
title: Week Three &#10137; Iron Yard Tutorial Journal
---

### How to create an **IIFE** and a simple "guard function" with vanilla JavaScript in an **MVC** model:

Beyond the basic examples and syntax in preparatory online tutorials, this was one of the first really "important" and widely useful bits of code that I learned early on at the Iron Yard to control a very basic function with JavaScript and make sure that only pressing the `Enter` key will yield result (hence the empty `return`). Also, it's often important to clear the field afterwards so that the user knows the data has been entered (this also clears any filler or prompt text that the user replaced), so that is important. Some of this code is specific to the example we were building, but much of it would be generally applicable and could be widely used. I mostly chose it because it was one of the first times I really saw and understood the logical potential of JavaScript in action and how it can produce essential functionalities for websites. Furthermore, EventListeners and querySelectors are crucial JavaScript concepts to know and be able to put into practice.

This code also relates to responsibly implementing fundamental design concepts that've been emphasized here at the Iron Yard such as:
* separation of concerns
* single responsibility principle
* encapsulation

```
//in controller: IIFE with "guard clause"
(function(window) { //IIFE: Immediately Invoked Function Expression
  'use strict';

  var newEnterInput = document.querySelector('input.new-item')
  var todoCount = document.querySelector('span.item-count');
  newEnterInput.addEventListener('keyup', function addInputController(event) {
    if (event.keyCode !== 13 || newEnterInput.value == "") return; //AND presses the "Enter" key
    var fieldOne = newEnterInput.value;
  //
    model.addInputToList(input, model.inputList);
  //
    newEnterInput.value = "";
  //
    model.footerTotal(inputCount);
  //
    document.querySelector('ul.todo-list').innerHTML += ("<li><div><input class='toggle' type='checkbox'><label>" + task + "<button class='destroy'>")
    console.log(model.inputList);
    console.log(model.inputList.length);
});
```
