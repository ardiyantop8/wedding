<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Ardi Website <?= date('Y'); ?></span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src=<?= base_url("assets/vendor/jquery/jquery.min.js");  ?>></script>
<script src=<?= base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js");  ?>></script>

<!-- Core plugin JavaScript-->
<script src=<?= base_url("assets/vendor/jquery-easing/jquery.easing.min.js");  ?>></script>

<!-- Custom scripts for all pages-->
<script src=<?= base_url("assets/js/sb-admin-2.min.js");  ?>></script>
<script type="">

  $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });




    $('.form-check-input').on('click', function() {
       const menuId = $(this).data('menu');
       const roleId = $(this).data('role');

       $.ajax({
          url     : "<?= base_url('admin/changeAccess');  ?>",
          type    : 'post',
          data    : {
                  menuId: menuId,
                  roleId: roleId
          },
          success : function(){
            document.location.href = "<?= base_url('admin/roleAccess/');  ?>" + roleId;
          }
       });
    });

    /* untuk view tamu_undangan */
    $('#btn_add_list_tamu').on('click',function(){
        
    });

    // Detect pagination click
    $('#pagination').on('click', 'a', function(e) {
            e.preventDefault();
            var pageno = $(this).attr('data-ci-pagination-page');
            loadPagination(pageno);
        });

        loadPagination(0);

        // Load pagination
        function loadPagination(pagno) {
            $.ajax({
                url: "<?= base_url('Admin/loadRecord/') ?>" + pagno,
                type: "get",
                dataType: "json",
                success: function(response) {
                    $('#pagination').html(response.pagination);
                    createTable(response.result, response.row);
                }
            });
        }

        // Create table list
        function createTable(result, sno) {
            sno = Number(sno);
            $('#postsList tbody').empty();
            for (index in result) {
                var id = result[index].idTamu;
                var nama = result[index].nama;
                var get = result[index].get;
                // content = content.substr(0, 60) + " ...";
                // var link = result[index].link;
                sno += 1;

                var tr = "<tr>";
                tr += "<td>" + sno + "</td>";
                tr += "<td>" + nama+"</td>";
                tr += "<td>" + get + "</td>";
                tr += "</tr>";
                $('#postsList tbody').append(tr);

            }
        }

    /* tutup untuk view tamu_undangan */
  </script>

</body>

</html>