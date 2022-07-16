<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>EDII</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="{{asset('asset/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('asset/plugins/fontawesome-free/css/all.min.css') }}" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('asset/dist/css/adminlte.min.css')}}" />
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />

<link rel="stylesheet" href="{{asset('asset/plugins/summernote/summernote-bs4.css')}}">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    @include('admin.layouts.navbar')
    <!-- /.navbar -->

   @include('admin.layouts.sidebar')

   @yield('content')

    @include('admin.layouts.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
<script src="{{asset('asset/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
<script src="{{asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE App -->
<script src="{{asset('asset/dist/js/adminlte.min.js')}}"></script>
  <!-- ChartJS -->
<script src="{{asset('asset/plugins/chart.js/Chart.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
<script src="{{asset('asset/dist/js/demo.js')}}"></script>
  <!-- DataTables -->
<script src="{{asset('asset/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

<script src="{{asset('asset/plugins/summernote/summernote-bs4.min.js')}}"></script>



<script type="text/javascript">

    $(document).ready(function() {

        var table = $("#tableUser").DataTable();

        table.on('click', '.edit', function() {

            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')){
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);


            $('#username').val(data[2]);
            $('#roleuser').val(data[5]);
            $('#email').val(data[0]);

            
            $('$modal-edit').modal('show')

        })
    })

</script>

</body>

</html>
