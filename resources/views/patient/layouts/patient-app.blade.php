<!DOCTYPE html>
<html lang="en">

<head>
  
    @include('layouts.head')

    @stack('style')
    <style>
        li.pass-message {
    display: block;
    padding: 5px;
    background: darkturquoise;
    color: black;
}
    </style>

</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

    @include('layouts.header')

    @include('layouts.menu')

    @section('main-content')
    @show

</div>
<!-- /Main Wrapper -->

    @include('layouts.partials.script')

    <script>
        $(function(){
           setTimeout(function(){
            $("#hide_message").fadeOut();
           },2000);
        });
    </script>

    @stack('script')

</body>

</html>
