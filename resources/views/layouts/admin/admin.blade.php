<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="{{ asset('favicon_panel.ico') }}" >
    <link rel="stylesheet" href="/matrixAdmin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/matrixAdmin/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="/matrixAdmin/css/colorpicker.css">
    <link rel="stylesheet" href="/matrixAdmin/css/datepicker.css">
    <link rel="stylesheet" href="/matrixAdmin/css/uniform.css">
    <link rel="stylesheet" href="/matrixAdmin/css/select2.css">
    <link rel="stylesheet" href="/matrixAdmin/css/matrix-style.css">
    <link rel="stylesheet" href="/matrixAdmin/css/matrix-media.css">
    <link rel="stylesheet" href="/matrixAdmin/css/bootstrap-wysihtml5.css">
    <link rel="stylesheet" href="/matrixAdmin/css/fullcalendar.css" />
    <link href="/matrixAdmin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="/matrixAdmin/css/jquery.gritter.css" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    {{-- ckEditor --}}
    {{-- <script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script> --}}
    <script src="/vendor/ckeditor/ckeditor.js"></script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">


    @yield('head')  
    
  </head>
<body>

  @include('layouts.admin.header') 
  @include('layouts.admin.sidebar') 
  @yield('content')
  @include('layouts.admin.footer') 
  
  



  <script src="{{ asset('/matrixAdmin/js/excanvas.min.js')}}"></script> 
  <script src="{{ asset('/matrixAdmin/js/jquery.min.js')}}"></script> 
  <script src="{{ asset('/matrixAdmin/js/jquery.ui.custom.js')}}"></script> 
  <script src="{{ asset('/matrixAdmin/js/bootstrap.min.js')}}"></script> 
  <script src="{{ asset('/matrixAdmin/js/bootstrap-colorpicker.js')}} "></script> 
  <script src="{{ asset('/matrixAdmin/js/bootstrap-datepicker.js')}} "></script> 
  {{-- <script src="{{ asset('/matrixAdmin/js/jquery.toggle.buttons.js')}} "></script>  --}}
  <script src="{{ asset('/matrixAdmin/js/masked.js')}} "></script> 
  <script src="{{ asset('/matrixAdmin/js/jquery.uniform.js')}} "></script> 
  <script src="{{ asset('/matrixAdmin/js/select2.min.js')}} "></script> 
  <script src="{{ asset('/matrixAdmin/js/matrix.js')}} "></script> 
  <script src="{{ asset('/matrixAdmin/js/matrix.form_common.js')}} "></script> 
  <script src="{{ asset('/matrixAdmin/js/wysihtml5-0.3.0.js')}} "></script> 
  <script src="{{ asset('/matrixAdmin/js/jquery.peity.min.js')}} "></script> 
  <script src="{{ asset('/matrixAdmin/js/bootstrap-wysihtml5.js')}} "></script> 
  <script src="{{ asset('/matrixAdmin/js/jquery.flot.min.js')}}"></script> 
  <script src="{{ asset('/matrixAdmin/js/jquery.flot.resize.min.js')}}"></script> 
  <script src="{{ asset('/matrixAdmin/js/fullcalendar.min.js')}}"></script> 
  <script src="{{ asset('/matrixAdmin/js/matrix.dashboard.js')}}"></script> 
  <script src="{{ asset('/matrixAdmin/js/jquery.gritter.min.js')}}"></script> 
  <script src="{{ asset('/matrixAdmin/js/matrix.interface.js')}}"></script> 
  <script src="{{ asset('/matrixAdmin/js/matrix.chat.js')}}"></script> 
  <script src="{{ asset('/matrixAdmin/js/jquery.validate.js')}}"></script> 
  <script src="{{ asset('/matrixAdmin/js/matrix.form_validation.js')}}"></script> 
  <script src="{{ asset('/matrixAdmin/js/jquery.wizard.js')}}"></script> 
  <script src="{{ asset('/matrixAdmin/js/matrix.popover.js')}}"></script> 
  <script src="{{ asset('/matrixAdmin/js/jquery.dataTables.min.js')}}"></script> 
  <script src="{{ asset('/matrixAdmin/js/matrix.tables.js')}}"></script> 
  
  <script type="text/javascript">
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage (newURL) {

        // if url is empty, skip the menu dividers and reset the menu selection to default
        if (newURL != "") {
        
            // if url is "-", it is this page -- reset the menu:
            if (newURL == "-" ) {
                resetMenu();            
            } 
            // else, send page to designated URL            
            else {  
              document.location.href = newURL;
            }
        }
    }

  // resets the menu selection upon entry to this page:
  function resetMenu() {
     document.gomenu.selector.selectedIndex = 2;
  }
  </script>
  <script src="/js/mainBackend.js"></script>
</body>
</html>
