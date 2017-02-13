
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
    <script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/bootstrap.js'); ?>" type="text/javascript"></script>

    <script type="text/javascript">

      $(document).ready(function() {

        $("#codes").addClass("active");
        $.ajax({
          url: "<?=site_url('Icd10/initTable'); ?>",
          type: "post",
          cache: false,
          success : function(z) {
            $("#table-content").html(z);
            // DATA TABLES AJAX
            $('#table-icd').DataTable( {
                "ajax": "<?=site_url('Icd10/getTable/codes'); ?>",
                "columns": [
                    { "data": "id" },
                    { "data": "descriptions" },
                ],
                "info": true, // info banyak entri ditampilkan (aslinya sudah default true)
                "lengthChange": false // disabled fitur yang disediakan DataTables
            });
          },
          error : function(e) {
            console.log(e);
          }
        });


        // $.ajax({
        //   url: "<?=site_url('Icd10/getTable'); ?>",
        //   type: "post",
        //   dataType: 'json',
        //   data: {op:'codes'},
        //   cache: false,
        //   success : function(z) {
        //     $("#table-content").html(z.hasil);
        //   },
        //   error : function(e) {
        //     console.log(e);
        //   }
        // });


        $(".btnOption").click(function() {
          var option = $(this).attr("id");

          $(".btnOption").removeClass('active');
          $("#"+option).addClass('active');

          // Hapus elemen table, agar inisialisasi DataTables berikutnya berhasil
          $("#table-icd").remove();
          //DATA TABLES AJAX
          $.ajax({
            url: "<?=site_url('Icd10/initTable'); ?>",
            type: "post",
            cache: false,
            success : function(z) {
              $("#table-content").html(z);
              // DATA TABLES AJAX
              $('#table-icd').DataTable( {
                  "ajax": "<?=site_url('Icd10/getTable/'); ?>" + option,
                  "columns": [
                      { "data": "id" },
                      { "data": "descriptions" },
                  ],
                  "info": true,
                  "lengthChange": false
              });
            },
            error : function(e) {
              console.log(e);
            }
          });
        });

      });

    </script>
  </body>
</html>
