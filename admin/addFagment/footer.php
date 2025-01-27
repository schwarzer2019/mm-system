<!-- Modal Logout-->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Select "Logout" below if you are ready to end your current session.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <a class="btn btn-primary" href="l_login.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">

            <div>
                <!-- <a href="#">Privacy Policy</a>
                &middot; -->
                <!-- <a href="#">Terms &amp; Conditions</a> -->
            </div>
            <div class="text-muted">Copyright &copy; TNB&Soft House</div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="../admin/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<!-- <script src="../admin/js/scripts.js"></script> -->
<script src="../admin/js/Chart.min.js" crossorigin="anonymous"></script>
<script src="../admin/assets/demo/chart-area-demo.js"></script>
<script src="../admin/assets/demo/chart-bar-demo.js"></script>
<script src="../admin/js/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<!-- <script src="../admin/js/datatables-simple-demo.js"></script> -->
<script>
    window.addEventListener('DOMContentLoaded', event => {

        // Toggle the side navigation
        const sidebarToggle = document.body.querySelector('#sidebarToggle');
        if (sidebarToggle) {
            // Uncomment Below to persist sidebar toggle between refreshes
            // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
            //     document.body.classList.toggle('sb-sidenav-toggled');
            // }
            sidebarToggle.addEventListener('click', event => {
                event.preventDefault();
                document.body.classList.toggle('sb-sidenav-toggled');
                localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
            });
        }

        // Simple-DataTables
        // https://github.com/fiduswriter/Simple-DataTables/wiki

        const datatablesSimple = document.getElementById('datatablesSimple');
        if (datatablesSimple) {
            new simpleDatatables.DataTable(datatablesSimple);
        }

    });

</script>

</body>

</html>