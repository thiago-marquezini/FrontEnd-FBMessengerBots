<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>NitroBots - Bots inteligentes para Facebook Messenger</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets_dash/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets_dash/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../assets_dash/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../assets_dash/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../assets_dash/images/favicon.png" />

  <!-- Emojis -->
  <link rel="stylesheet" href="../assets_dash/css/emojionearea.min.css">

  <!-- SweetAlerts -->
  <link rel="stylesheet" href="../assets_dash/sweetalert/sweetalert2.all.min.css">

  <!-- HintCSS -->
  <link rel="stylesheet" href="../assets_dash/hintcss/hint.min.css"></link>


</head>

<body>

  <div class="container-scroller">


    <?php
      require_once('dash.fragments/fragment.navbar.php');
    ?>


    <div class="container-fluid page-body-wrapper">

    <?php
      require_once('dash.fragments/fragment.sidebar.php');
    ?>


      

      <div class="main-panel">

        <div class="content-wrapper">

          <div class="loaderparent">
            <div class="loader"></div>
          </div>
          

        </div>
        <!-- content-wrapper ends -->

        <?php
          require_once('dash.fragments/fragment.footer.php');
        ?>

      </div>
      <!-- main-panel ends -->



    </div>
    <!-- page-body-wrapper ends -->


  </div>
  <!-- container-scroller -->



  <!-- plugins:js -->
  <script src="../assets_dash/vendors/js/vendor.bundle.base.js"></script>
  <script src="../assets_dash/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->

  <!-- inject:js -->
  <script src="../assets_dash/js/off-canvas.js"></script>
  <script src="../assets_dash/js/misc.js"></script>
  <!-- endinject -->


  <!-- Emojis -->
  <script type="text/javascript" src="../assets_dash/js/emojionearea.min.js"></script>

  <!-- SweetAlerts -->
  <script type="text/javascript" src="../assets_dash/sweetalert/sweetalert2.all.min.js"></script>

  <!-- jQuery Sortable -->
  <script type="text/javascript" src="../assets_dash/js/jquery-sortable.js"></script>
  


  <!-- Custom js for this page-->
  <script src="../assets_dash/js/dashboard.js"></script>
  <script src="../assets_dash/js/ajax.js"></script>
  <!-- End custom js for this page-->

  <script type="text/javascript">
      
      function dash_js_createbot()
      {
        swal({
              title: 'Digite o Nome do Bot',
              input: 'text',
              inputAttributes: 
              {
                autocapitalize: 'off'
              },
              showCancelButton: true,
              confirmButtonText: 'Criar Bot',
              showLoaderOnConfirm: true,
              preConfirm: (botname) => 
              {
                return fetch(`https://dash.nitrogram.com.br/setup/${botname}`)
                  .then(response => 
                  {
                    if (!response.ok) 
                    {
                      throw new Error(response.statusText)
                    }
                    return response.json()
                  })
                  .catch(error => 
                  {
                    swal.showValidationError(
                      `Request failed: ${error}`
                    )
                  })
              },
              allowOutsideClick: () => !swal.isLoading()

            }).then((result) => 
            {
              if (result.value) 
              {
                swal({
                  title: `Bot criado com sucesso!`,
                  imageUrl: result.value.avatar_url
                })
              }
            });
      }


      function StepsModal()
      {
        swal.mixin({
                    input: 'text',
                    confirmButtonText: 'Next &rarr;',
                    showCancelButton: true,
                    progressSteps: ['1', '2', '3']
                  }).queue([
                    {
                      title: 'Digite o nome do seu bot',
                      text: 'Chaining swal2 modals is easy'
                    },
                    'Question 2'
                  ]).then((result) => {
                    if (result.value) {
                      swal({
                        title: 'All done!',
                        html:
                          'Your answers: <pre><code>' +
                            JSON.stringify(result.value) +
                          '</code></pre>',
                        confirmButtonText: 'Lovely!'
                      })
                    }
                  });
      }

      function dash_js_showerror(Title, Message, FooterLink = '', FooterText = '')
      {
        swal({
              type: 'error',
              title: Title,
              text: Message,
              footer: '<a href="' + FooterLink + '">' + FooterText + '</a>'
            });
      }

  </script>

</body>

</html>