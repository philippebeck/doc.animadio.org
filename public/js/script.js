"use strict";

document.addEventListener("DOMContentLoaded", function() {
  var animadio = new Animadio(
      ["name", "function", "count", "direction"],
      "anima",
      [2000, {few: 2, many: 5, loop: 30}]
  );

  var display   = new Animadio(["display"], "display");
  var position  = new Animadio(["position"], "position");

  var bg    = new Animadio(["bg"], "bg");
  var color = new Animadio(["color"], "color");
});
