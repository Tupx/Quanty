$('document').ready(function () {

  setInterval (function () {
    $('#MessagesBadge').load('scripts/getBadge.php', {b:'msg'});
    $('#NotificationBadge').load('scripts/getBadge.php',{b:'notif'});
  }, 1000);

});
