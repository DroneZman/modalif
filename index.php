<?php include 'header.php';?>
<body>

<div class="remodal-bg">
  <a href="#modal">Modal №1</a><br>
</div>

<div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  <div>
    <h2 id="modal1Title">Remodal</h2>
    <p id="modal1Desc">
      Responsive, lightweight, fast, synchronized with CSS animations, fully customizable modal window plugin
      with declarative state notation and hash tracking.
    </p>
  </div>
  <br>
  <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
  <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
</div>


<!-- You can define the global options -->
<script>
  // window.REMODAL_GLOBALS = {
  //   NAMESPACE: 'remodal',
  //   DEFAULTS: {
  //     hashTracking: true,
  //     closeOnConfirm: true,
  //     closeOnCancel: true,
  //     closeOnEscape: true,
  //     closeOnOutsideClick: true,
  //     modifier: ''
  //   }
  // };
</script>



</body>
</html>
