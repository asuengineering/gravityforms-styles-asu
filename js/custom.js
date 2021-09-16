"use strict";

jQuery(document).ready(function ($) {});
"use strict";

jQuery(document).ready(function ($) {
  // Wrap repeated form elements in a generic div for styling purposes.
  gform.addFilter('gform_repeater_item_pre_add', function (clone, item) {
    clone.wrap("<div class='repeated-fields'></div>");
    return clone;
  });
});