(function($,Drupal, drupalSettings){
  Drupal.behaviors.externalLink = {
    attach: function(context,settings){
      $( "a[href^='http']",context).attr("target","_blank").addClass("external_links");
    }
  }

  Drupal.behaviors.collpaseBlock = {
    attach: function(context,settings){
      $( ".block h2",context).click(function() {
        $(this).parent().find('.content').toggle();
      });
    }
  }

  Drupal.behaviors.viewMatchHeight= {
    attach: function(context,settings){
      $( ".views-row .views-col",context).matchHeight();
    }
  }

 /* Drupal.behaviors.addTabs = {
    attach: function(context,settings){
      $( "#tabs",context).tabs();
    }
  }*/
})(jQuery,Drupal, drupalSettings);
