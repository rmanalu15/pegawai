<!-- Footer -->
<footer class="bg-gradient-dark" style="height: 30px;">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright&copy; Rupinda Manalu <?= date('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<script type="text/javascript" src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/'); ?>vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/'); ?>sbadmin/js/sb-admin-2.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/'); ?>vendor/datatables/js/jquery.dataTables.min.js"></script>

<script>
    function reloadPegawai() {
        table.ajax.reload(null, false);
    }

    table = $('#tablePegawai').DataTable({
        'processing': true,
        'serverSide': true,
        'order': [],
        'ajax': {
            'url': 'pegawai/datapegawai',
            'type': 'POST'
        },
        'columnDefs': [{
            'targets': [-1],
            'orderable': false,
        }, ],
    });
</script>
</body>

</html>