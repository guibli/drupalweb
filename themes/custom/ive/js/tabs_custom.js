 (function($,Drupal, drupalSettings){
    Drupal.behaviors.addTabs = {
      attach: function(context,settings){
        $( "#tabs",context).tabs();
      }
    }
  })(jQuery,Drupal, drupalSettings);
