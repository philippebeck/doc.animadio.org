"use strict";

document.addEventListener("DOMContentLoaded", function() {
  var anima = new Animadio(
      ["name", "function", "count", "direction"],
      ["anima", ["check", "hub", "goal"]],
      [2000, {few: 2, many: 5, loop: 30}]
  );

  var display = new Animadio(
      ["display"],
      ["display", ["check", "hub", "goal"]]
  );

  var position = new Animadio(
      ["position"],
      ["position", ["check", "hub", "goal"]]
  );

  var bg = new Animadio(
      ["bg"],
      ["bg", ["check", "hub", "goal"]]
  );

  var color = new Animadio(
      ["color"],
      ["color", ["check", "hub", "goal"]]
  );
});
