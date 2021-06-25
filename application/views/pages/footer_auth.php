  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/'); ?>sbadmin/js/sb-admin-2.min.js"></script>

  <script>
    $(document).ready(function() {
      $('.form-checkbox').click(function() {
        if ($(this).is(':checked')) {
          $('.form-password').attr('type', 'text');
        } else {
          $('.form-password').attr('type', 'password');
        }
      });
    });
  </script>
  </body>

  </html>