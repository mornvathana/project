

</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src= "assets/js/charts.js"></script>
<script src= "assets/js/custom.js"></script>
<script src= "assets/js/Data.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- toast message -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    <?php if (isset($_SESSION['message'])): ?>
        toastr.success("<?= $_SESSION['message'] ?>");
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>
    </script>
     <script>
    <?php if (isset($_SESSION['message1'])): ?>
        toastr.warning("<?= $_SESSION['message1'] ?>");
        <?php unset($_SESSION['message1']); ?>
    <?php endif; ?>
    </script>

</html>