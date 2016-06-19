<!DOCTYPE html>
<html>

@include('includes.head')

<body>

<!-- Wrapper-->
<div class="wrapper">


@include('includes.header')

@include('includes.nav')


@yield('content')

</div>
<!-- End wrapper-->





@include('includes.footer')