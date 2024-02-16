<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $this->renderSection('title') ?>
  </title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    :root {
      box-sizing: border-box;
    }

    .bg-green {
      background-color: green;
    }
  </style>
</head>

<body>





  <!-- Notification Toast -->
  <?php if (session()->has("message")): ?>

    <div id="myToast"
      class="toast fade   <?= session("toastType") ?? "text-bg-primary" ?>  align-items-center mx-auto  position-fixed   border-0 z-2"
      style="bottom:40px;right:10px;min-width:300px;" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body w-100 d-flex justify-content-evenly">
          <?= session("message") ?>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
            aria-label="Close"></button>
        </div>
      </div>

    </div>



  <?php endif; ?>





  <?= $this->include("shared/navbar") ?>







  <?= $this->renderSection('content') ?>


  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script> -->
  <script>
    $(document).ready(function () {
      $("#myToast").toast({
        animation: true
      });

      // Get the toast element
      var toastElement = $("#myToast");
      // Add "hide" class to the toast after 2 seconds
      setTimeout(function () {
        toastElement.addClass("show");
      }, 700);
      setTimeout(function () {
        toastElement.addClass("hide");
        toastElement.removeClass("show")
      }, 4500);

    });


  </script>
</body>

</html>