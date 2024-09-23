$(document).ready(function ($) {

  $('#main-menu').smartmenus({
    // current item defined with MenuProcessor
    markCurrentItem: 0,
    showTimeout:0,
    subMenusMaxWidth:0,
  });
  //$('#main-menu').smartmenus('keyboardSetHotkey', 123, ['ctrlKey', 'altKey', 'shiftKey']);

  $('#main-menu-v').smartmenus({
    // current item defined with MenuProcessor
    markCurrentItem: 0,
    showTimeout: 0
  });
});
