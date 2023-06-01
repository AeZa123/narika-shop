<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/templateLTE/plugins/jquery/jquery.min.js')}}"></script>
{{-- <script src="plugins/jquery/jquery.min.js"></script> --}}
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assets/templateLTE/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/templateLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
{{-- <script src="{{asset('assets/templateLTE/plugins/chart.js/Chart.min.js')}}"></script> --}}
<!-- Sparkline -->
{{-- <script src="{{asset('assets/templateLTE/plugins/sparklines/sparkline.js')}}"></script> --}}
<!-- JQVMap -->
{{-- <script src="{{asset('assets/templateLTE/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/templateLTE/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script> --}}
<!-- jQuery Knob Chart -->
{{-- <script src="{{asset('assets/templateLTE/plugins/jquery-knob/jquery.knob.min.js')}}"></script> --}}
<!-- daterangepicker -->
{{-- <script src="{{asset('assets/templateLTE/plugins/moment/moment.min.js')}}"></script> --}}
{{-- <script src="{{asset('assets/templateLTE/plugins/daterangepicker/daterangepicker.js')}}"></script> --}}
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/templateLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>


<!-- DataTables  & Plugins -->
{{-- <script src="{{asset('assets/templateLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/templateLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/templateLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/templateLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/templateLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/templateLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/templateLTE/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assets/templateLTE/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/templateLTE/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/templateLTE/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/templateLTE/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/templateLTE/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script> --}}














<!-- Summernote -->
{{-- <script src="{{asset('assets/templateLTE/plugins/summernote/summernote-bs4.min.js')}}"></script> --}}
<!-- overlayScrollbars -->
<script src="{{asset('assets/templateLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<!-- jquery-validation -->
<script src="{{asset('assets/templateLTE/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/templateLTE/plugins/jquery-validation/additional-methods.min.js')}}"></script>



<!-- AdminLTE App -->
<script src="{{asset('assets/templateLTE/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="dist/js/demo.js"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/templateLTE/dist/js/pages/dashboard.js')}}"></script>



{{-- js custom --}}
{{-- <script src="{{asset('assets/templateLTE/js/m_user.js')}}"></script> --}}


{{-- <script src="{{$js_custom}}"></script> --}}

@php
$js_custom = isset($js_custom) ? $js_custom : '';
 echo $js_custom;
@endphp