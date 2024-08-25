<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/assets/images/favicon_ct.ico') }}">
    <title>Abaccus Production - Dashboard</title>
    <!-- This page CSS -->
    <link href="{{ asset('backend/assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}" rel="stylesheet" />

    <!--Toaster Popup message CSS -->
    {{-- <link href="{{ asset('backend/assets/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('backend/eliteadmin/dist/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/node_modules/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/node_modules/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css" />
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ asset('backend/eliteadmin/dist/css/pages/dashboard1.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-blue fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Cargo Trends</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- Topbar header - style you can find in pages.scss -->
        @include('admin.body.header')
        <!-- End Topbar header -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        @include('admin.body.sidebar')
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- Page wrapper  -->
        @yield('admin')
        <!-- End Page wrapper  -->
        <!-- footer -->
        @include('admin.body.footer')
        <!-- End footer -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('backend/assets/node_modules/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('backend/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('backend/eliteadmin/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('backend/eliteadmin/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('backend/eliteadmin/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('backend/eliteadmin/dist/js/custom.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>    
    <!-- Chart JS -->
    {{-- <script src="{{ asset('backend/eliteadmin/dist/js/dashboard1.js') }}"></script>
    <script src="{{ asset('backend/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script> --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- jQuery peity -->
    <script src="{{ asset('backend/assets/node_modules/peity/jquery.peity.min.js')}}"></script>
    <script src="{{ asset('backend/assets/node_modules/peity/jquery.peity.init.js')}}"></script>
     <!-- This is data table -->
     <script src="{{ asset('backend/assets/node_modules/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('backend/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
     <script src="{{ asset('backend/assets/node_modules/datatables.net/js/jquery.dataTables.min.js') }}"></script>
     <script src="{{ asset('backend/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js') }}"></script>
      <!-- wysuhtml5 Plugin JavaScript -->
    <script src="{{ asset('backend/assets/node_modules/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('backend/assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('backend/assets/node_modules/select2/dist/js/select2.full.min.js') }}" type="text/javascript"></script>
    
    <script>
        @if(Session::has('message'))
            var type = "{{ Session::get('alert-type','info') }}"
            switch(type){
                case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

                case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

                case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

                case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
            }
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script>
    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
        <script>
            toastr.error("{{ $error }}");
        </script>
        @endforeach
    @endif --}}
    <script>
    $(document).ready(function() {

        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
            });
        }
    });
    </script>
    <script>
        $(function () {
           
            // For select 2
        //    $(".select2").select2();
        //    $('.selectpicker').selectpicker();


            $(".select2").select2();

            $(".select2").on("select2:select", function (evt) {
            var element = evt.params.data.element;
            var $element = $(element);
            
            $element.detach();
            $(this).append($element);
            $(this).trigger("change");
            });

            
            // For multiselect
            $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
                selectableOptgroup: true
            });
            $('#public-methods').multiSelect();
            $('#select-all').click(function () {
                $('#public-methods').multiSelect('select_all');
                return false;
            });
            $('#deselect-all').click(function () {
                $('#public-methods').multiSelect('deselect_all');
                return false;
            });
            $('#refresh').on('click', function () {
                $('#public-methods').multiSelect('refresh');
                return false;
            });
            $('#add-option').on('click', function () {
                $('#public-methods').multiSelect('addOption', {
                    value: 42,
                    text: 'test 42',
                    index: 0
                });
                return false;
            });
            $(".ajax").select2({
                ajax: {
                    url: "https://api.github.com/search/repositories",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        // parse the results into the format expected by Select2
                        // since we are using custom formatting functions we do not need to
                        // alter the remote JSON data, except to indicate that infinite
                        // scrolling can be used
                        params.page = params.page || 1;
                        return {
                            results: data.items,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    },
                    cache: true
                },
                escapeMarkup: function (markup) {
                    return markup;
                }, // let our custom formatter work
                minimumInputLength: 1,
                //templateResult: formatRepo, // omitted for brevity, see the source of this page
                //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
            });
        });
    </script>
    
    <script>
        $(function () {
            // responsive table
            $('#ct-Table').DataTable({
				dom: 'lBfrtip',
				// responsive: true,
				"order": [
                    [0, 'desc']
                ],
            });
        });

        $(function () {
            // responsive table
            $('#ct-Table-1').DataTable({
				dom: 'lBfrtip',
				// responsive: true,
				// "order": [
                //     [0, 'desc']
                // ],
            });
        });

    </script>	

</body>

</html>