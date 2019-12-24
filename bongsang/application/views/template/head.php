<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dasboard</title>
    <meta name="description" content="Keranjang Ane - Bongsang">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?= base_url('Asset/img/');  ?>icon.png">
    <link rel="shortcut icon" href="<?= base_url('Asset/img/');  ?>icon.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="<?= base_url('Asset/css/'); ?>bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('Asset/css/'); ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('Asset/css/'); ?>bootstrap-grid.css">
    <link rel="stylesheet" href="<?= base_url('Asset/css/'); ?>bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= base_url('Asset/css/'); ?>bootstrap-reboot.css">
    <link rel="stylesheet" href="<?= base_url('Asset/css/'); ?>bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?= base_url('Asset/css/'); ?>fontawesome-all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url('Asset/css/');  ?>cs-skin-elastic.css">
    <link rel="stylesheet" href="<?= base_url('Asset/css/');  ?>style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <link href="<?= base_url('Asset/css/'); ?>../css/froala_style.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('Asset/css/'); ?>froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?= base_url('Asset/js/'); ?>froala_editor.pkgd.min.js"></script>

    <style>
        #weatherWidget .currentDesc {
            color: #ffffff !important;
        }

        .traffic-chart {
            min-height: 335px;
        }

        #flotPie1 {
            height: 150px;
        }

        #flotPie1 td {
            padding: 3px;
        }

        #flotPie1 table {
            top: 20px !important;
            right: -10px !important;
        }

        .chart-container {
            display: table;
            min-width: 270px;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #flotLine5 {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }

        #cellPaiChart {
            height: 160px;
        }
    </style>
    <script>
        function tampilkan() {
            var kategori = document.getElementById("produk").kategori.value;

            if (kategori == "Makanan") {
                document.getElementById("sub").innerHTML = "<option selected>Pilih Rasa</option><option value='original'>Original</option><option value='pedas'>Pedas</option><option value='jagung bakar'>Jagung Bakar</option><option value='barbeque'>Barbeque</option><option value='balado'>Balado</option>";
            } else if (kategori == "Alat Kebersihan") {
                document.getElementById("sub").innerHTML = "<option selected>Pilih Jenis</option><option value='sabun'>Sabun</option><option value='facial foam'>Facial Foam</option><option value='masker'>Masker</option>";
            } else if (kategori == "Bahan Olah") {
                document.getElementById("sub").innerHTML = "<option selected>Pilih Bahan</option><option value='tepung'>Tepung</option>";
            }
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</head>

<body style="background-color: orange;">