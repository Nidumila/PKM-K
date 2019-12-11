<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keranjang Ane</title>
    <link rel="shortcut icon" href="<?= base_url('Asset/img/');  ?>icon.png">
    <link rel="stylesheet" type="text/css" href="<?= base_url('Asset/');  ?>css/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('Asset/');  ?>css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('Asset/');  ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="<?= base_url('Asset/');  ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?= base_url('Asset/');  ?>js/bootstrap.js"></script>
    <script type="text/javascript" src="<?= base_url('Asset/');  ?>js/bootstrap.min.js"></script>
    <style>
        #searchbox {
            border: 2px solid gray;
            -moz-border-radius: 8px;
            -webkit-border-radius: 8px;
            border-radius: 8px;
            width: 250%;
            height: 35px;
        }

        input:focus::-webkit-input-placeholder {
            color: transparent;
        }

        input:focus:-moz-placeholder {
            color: transparent;
        }

        input:focus::-moz-placeholder {
            color: transparent;
        }

        #searchbox input {
            outline: none;
        }

        #searchbox input[type="text"] {
            background: transparent;
            padding: 5px 0px 5px 10px;
            border-width: 0px;
            font-family: "Arial Narrow", Arial, sans-serif;
            font-size: 15px;
            color: #828282;
            width: 70%;
            display: inline-table;
            vertical-align: top;
        }

        #button-submit {
            background: url(<?= base_url('Asset/img/');  ?>off.png);
            float: left;
            border-width: 0px;
            cursor: pointer;
            margin-left: 10px;
            margin-top: 4px;
            width: 21px;
            height: 22px;
        }

        #button-submit:hover {
            background: url(<?= base_url('Asset/img/');  ?>on.png);
            float: left;
            ;
        }

        #button-submit:active {
            background: url(<?= base_url('Asset/img/');  ?>on.png);
            float: left;
            outline: none;
        }

        #button-submit::-moz-focus-inner {
            border: 0;
        }

        .kotak {
            border: 2px solid gray;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 3px;
        }
    </style>
</head>

<body>