<div class="container" style="text-align: justify;">
    <hr size="10px"><br>
    <div class="row" style="border-block: 2px;">
        <div class="col-3">
            <div>
                <img src="<?= base_url('Asset/img/');  ?>LogoBongsang.png" alt="bongsang" width="52%" style="margin-left: 25%;">
                <br>
                <hr>
            </div>
            <div style="border-top: lightgray; border: 2px;">
                Desa Pringgacala, Ke. Karangampel, Kab. Indramayu, Jawa Barat. Kode Pos: 45283
            </div>
        </div>
        <div class="col-1"></div>
        <div class="col-2" style="text-decoration: none;">
            <font>MAIN MENU</font><br>
            <a href="Toko.html">Home</a><br>
            <a href="company profil.html">About</a><br>
            <a href="">Toko</a><br>
            <a href="">Help</a><br>
        </div>
        <div class="col-2" style="text-decoration: none;">
            <font>COMPANY</font><br>
            <a href="">UMKM</a><br>
            <a href="">Careers</a><br>
            <a href="">Berita</a><br>
        </div>
        <div class="col-2" style="text-decoration: none;">
            <font>DISCOVER</font><br>
            <a href="">The Team</a><br>
            <a href="">Our History</a><br>
            <a href="">Brand Motto</a><br>
        </div>
        <div class="col-2" style="text-decoration: none;">
            <font>FIND US ON</font><br>
            <a href="https://www.facebook.com/abo.pink.1">Facebook</a><br>
            <a href="https://www.instagram.com/bongsang.id">Instagram</a><br>
            <a href="https://www.youtube.com/channel/UCLLUo9HWtHM-fET-U79q4Kw">YouTube</a><br>
        </div>
    </div>
</div>
<br>
<footer class="navbar navbar-expand-lg navbar-light bg-warning">
    <font style="margin-left: 5%;">&copy 2019 Bongsang Keranjang Ane</font>
</footer>
<!-- Scripts -->
<script src="<?= base_url('Asset/js/');  ?>jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="<?= base_url('Asset/js/');  ?>bootstrap.js"></script>
<script src="<?= base_url('Asset/js/');  ?>bootstrap.min.js"></script>
<script src="<?= base_url('Asset/js/');  ?>bootstrap.bundle.js"></script>
<script src="<?= base_url('Asset/js/');  ?>bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="<?= base_url('Asset/js/');  ?>main.js"></script>

<!--  Chart js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

<!--Chartist Chart-->
<script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
<script src="<?= base_url('Asset/js/init/');  ?>weather-init.js"></script>

<script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
<script src="<?= base_url('Asset/js/init/');  ?>fullcalendar-init.js"></script>
<script defer src="<?= base_url('Asset/js/');  ?>all.js"></script>

<script>
    $(document).ready(function() {
        $('#image').change(function() {
            readURL(this);
        });
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#prev_foto').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
</body>

</html>