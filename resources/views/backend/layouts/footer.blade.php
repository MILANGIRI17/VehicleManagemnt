@section('footer')
<!-- footer content -->
<footer>
    <div class="pull-right">
        Developed By: <a href="#">Milan Giri</a>
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

    <!-- jQuery -->
    <script src="{{url('backend-ui/vendors/jquery/dist/jquery.min.js')}}"></script>
    {{-- ImageMagnify --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{url('backend-ui/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{url('backend-ui/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    {{-- <script src="{{url('backend-ui/vendors/nprogress/nprogress.js')}}"></script> --}}
    {{-- date picker --}}
    <script src="{{url('backend-ui/vendors/moment/min/moment.min.js')}}"></script>
    {{-- <script src="{{url('backend-ui/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{url('backend-ui/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script> --}}
    <!-- bootstrap-wysiwyg -->
    {{-- <script src="{{url('backend-ui/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script> --}}
    <script src="{{url('backend-ui/vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
    {{-- <script src="{{url('backend-ui/vendors/google-code-prettify/src/prettify.js')}}"></script> --}}

    <!-- Custom Theme Scripts -->
    <script src="{{url('backend-ui/vendors/tag-input/dist/bootstrap-tagsinput.js')}}"></script>

    {{-- CKeditor --}}
    <script src="{{url('backend-ui/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src="{{url('backend-ui/custom/custom.js')}}"></script>
    <script src="{{url('backend-ui/build/js/custom.min.js')}}"></script>

    </body>
    </html>
@endsection
