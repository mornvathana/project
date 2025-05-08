

</body>
<script src="assets/js/flowbite.min.js"></script>
<script src="assets/js/apexcharts.js"></script>
<script src= "assets/js/charts.js"></script>
<script src= "assets/js/custom.js"></script>
<script src= "assets/js/Data.js"></script>
<script src = "assets/js/sweetalert2@11.js"></script>
<!-- toast message -->
<script src = "assets/js/toastr.min.js"></script>
<script>
    <?php if (isset($_SESSION['message'])): ?>
        toastr.success("<?= $_SESSION['message'] ?>");
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>
    </scr>
     <script>
    <?php if (isset($_SESSION['message1'])): ?>
        toastr.warning("<?= $_SESSION['message1'] ?>");
        <?php unset($_SESSION['message1']); ?>
    <?php endif; ?>
    </script>

</html>