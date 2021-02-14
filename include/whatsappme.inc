<!-- BOTON WHATSAPP ME -->
<script type="text/javascript">
  (function () {
  var options = {
  whatsapp: "+5491127835577", // WhatsApp number
  call_to_action: "Envíanos un mensaje", // Call to action
  position: "left", // Position may be 'right' or 'left'
  };
  var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
  s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
  var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
  })();
  
  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
  </script>
  <!-- /GetButton.io widget -->