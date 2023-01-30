require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$(document).ready(function(){
    function setCurrency (currency) {
        if (!currency.id) { return currency.text; }
          var $currency = $('<span class="glyphicon glyphicon-' + currency.element.value + '">' + currency.text + '</span>');
          return $currency;
      };
      $(".templatingSelect2").select2({
          placeholder: "What currency do you use?", //placeholder
          templateResult: setCurrency,
          templateSelection: setCurrency
      });
  })