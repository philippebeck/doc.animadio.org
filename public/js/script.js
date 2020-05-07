"use strict";

document.addEventListener("DOMContentLoaded", function() {
  var anima = new Input(
      ["name", "function", "count", "direction"],
      ["anima", ["check", "hub", "goal"]],
      [2000, {few: 2, many: 5, loop: 30}]
  );

  var display = new Input(
      ["display"],
      ["display", ["check", "hub", "goal"]]
  );

  var position = new Input(
      ["position"],
      ["position", ["check", "hub", "goal"]]
  );

  var bg = new Input(
      ["bg"],
      ["bg", ["check", "hub", "goal"]]
  );

  var color = new Input(
      ["color"],
      ["color", ["check", "hub", "goal"]]
  );
});
