
    <!-- FOOTER -->
    <footer id="footer">
      <div class="container main-color-bg">
        <p>Copyright &copy; 2017 | Arianggi</p>
      </div>
    </footer>
    <!-- End of FOOTER -->



    <!-- jQuery and Bootstrap
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('assets/js/jquery-3.1.1.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/bootstrap.js'); ?>" type="text/javascript"></script>

    <script type="text/javascript">

      $(document).ready(function() {

        $("#codes").addClass("active");
        $.ajax({
          url: "<?=site_url('Icd10/getTable'); ?>",
          type: "post",
          dataType: 'json',
          data: {op:'codes'},
          cache: false,
          success : function(z) {
            $("#table-content").html(z.hasil);
          },
          error : function(e) {
            console.log(e);
          }
        });

        $(".btnOption").click(function() {
          var option = $(this).attr("id");

          $(".btnOption").removeClass('active');
          $("#"+option).addClass('active');

          // Menggunakan method POST
          $.ajax({
            url: "<?=site_url('Icd10/getTable'); ?>",
            type: "post",
            dataType: 'json',
            data: {op:option},
            cache: false,
            success : function(z) {
              $("#table-content").html(z.hasil);
            },
            error : function(e) {
              console.log(e);
            }
          });

          // Jika menggunakan method GET
          // $.ajax({
          //   url: "<?=site_url('Icd10/getTable'); ?>",
          //   type: "get",
          //   data: "op="+option,
          //   cache: false,
          //   success : function(z) {
          //     console.log('ANJAY SUKSESSSSSS');
          //   },
          //   error : function(e) {
          //     console.log(e);
          //   }
          // });
        });
      });

    </script>
  </body>
</html>
