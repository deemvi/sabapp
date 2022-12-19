 <!-- footer -->

 <!-- #/ footer -->
 </div>

 <!-- Common JS -->
 <script src="<?= base_url(); ?>assets/plugins/common/common.min.js"></script>
 <!-- Custom script -->
 <script src="<?= base_url(); ?>assets/js/custom.min.js"></script>
 <script src="<?= base_url(); ?>assets/plugins/tables/js/jquery.dataTables.min.js"></script>
 <script src="<?= base_url(); ?>assets/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
 <script src="<?= base_url(); ?>assets/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
 <!-- Chartjs chart -->
 <script src="<?= base_url(); ?>assets/plugins/chartjs/Chart.bundle.js"></script>
 <!-- Custom dashboard script -->
 <script src="<?= base_url(); ?>assets/js/dashboard-1.js"></script>
 <script>
     function previewImg() {
         const fileInput = document.querySelector('#gambar');
         const labelFile = document.querySelector('.custom-file-label');

         labelFile.textContent = fileInput.files[0].name;
     }
 </script>
 </body>

 </html>