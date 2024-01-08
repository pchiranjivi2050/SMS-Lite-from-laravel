
@php
$systemData = App\Models\System::all();
@endphp
@foreach($systemData as $system)
    </div> <!-- /.container-fluid -->
    </div><!-- /#page-wrapper -->       
    <footer class="footer text-center"> 2021 &copy; {{$system->footer}} | {{$system->name}} |</footer>
@endforeach
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/jqueryui/jquery-ui.min.js')}}"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('backend/bootstrap/dist/js/tether.min.js')}}"></script>
    <script src="{{asset('backend/bootstrap/dist/js/bootstrap-3.3.7.min.js')}}"></script>
    <script src="{{asset('backend/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
     
    <!--slimscroll JavaScript -->
    <script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('backend/js/waves.js')}}"></script>
    <!-- Sweet-Alert  -->
    <script src="{{asset('plugins/bower_components/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('backend/js/custom.min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- Calendar JavaScript -->
    <script src="{{asset('plugins/bower_components/calendar/jquery-ui.min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/moment/moment.js')}}"></script>
    <script src="{{asset('plugins/bower_components/calendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/calendar/dist/cal-init.js')}}"></script>
        <!--Style Switcher -->
    <!--Style Switcher -->
    <script src="{{asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
    <!--BlockUI Script -->
    <script src="{{asset('plugins/bower_components/blockUI/jquery.blockUI.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script src="{{asset('plugins/bower_components/switchery/dist/switchery.min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/custom-select/custom-select.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>
    
    <script>
    $(document).ready(function() {
        $("#print").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("div.printableArea").printArea(options);
        });
    });
    </script>



@include('admin.body.script_footer')
</body>

</html>