<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Sistema acadêmico</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ base_url('assets/css/bootstrap.min.css') }}">

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ base_url('assets/js/jquery.min.js') }}"></script>
    <script src="{{ base_url('assets/js/popper.min.js') }}"></script>
    <script src="{{ base_url('assets/js/bootstrap.min.js') }}"></script>
</head>
<body>
    @include('layout/header')

    <!-- Exibe o conteudo da pagina -->
    @yield('content')
    
    @include('layout/footer')
    
</body>
</html>