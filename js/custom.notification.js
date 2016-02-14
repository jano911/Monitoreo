/* jQuery Notification (Gritter) */

$(document).ready(function(){

  

  
  /* On click notification. Refer ui.html file */

  /* Regulat notification */
  $(".notify").click(function(e){

            e.preventDefault();
            var unique_id = $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: '<h3> Softv! Monitoreo</h3>',
                // (string | mandatory) the text inside the notification
                text: 'Today you got some messages and new members. Please check it out!',
                // (string | optional) the image to display on the left
                image: './img/user2.png',
                // (bool | optional) if you want it to fade out on its own or just sit there
                sticky: false,
                // (int | optional) the time you want it to be alive for before fading out
                time: '',
                // (string | optional) the class name you want to apply to that specific message
                class_name: 'gritter-custom'
            });

            // You can have it return a unique id, this can be used to manually remove it later using
            setTimeout(function () {
                $.gritter.remove(unique_id, {
                    fade: true,
                    speed: 'slow'
                });
            }, 6000);

  });

  /* Sticky notification */
  $(".notify-sticky").click(function(e){

            e.preventDefault();
            var unique_id = $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: '<h3> Softv! Monitoreo</h3>',
                // (string | mandatory) the text inside the notification
                text: 'Today you got some messages and new members. Please check it out!',
                // (string | optional) the image to display on the left
                image: './img/user1.png',
                // (bool | optional) if you want it to fade out on its own or just sit there
                sticky: false,
                // (int | optional) the time you want it to be alive for before fading out
                time: '',
                // (string | optional) the class name you want to apply to that specific message
                class_name: 'gritter-custom'
            });

  });

  /* Without image notification */
  $(".notify-without-image").click(function(e){

            e.preventDefault();
            var unique_id = $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: '<h3> Softv! Monitoreo</h3>',
                // (string | mandatory) the text inside the notification
                text: 'Datos guardados exitosamente',
                // (bool | optional) if you want it to fade out on its own or just sit there
                sticky: false,
                // (int | optional) the time you want it to be alive for before fading out
                time: '1000',
                // (string | optional) the class name you want to apply to that specific message
                class_name: 'gritter-custom'
            });

  });

/* Remove notification */

    $(".notify-remove").click(function(){

      $.gritter.removeAll();
      return false;

    });


});