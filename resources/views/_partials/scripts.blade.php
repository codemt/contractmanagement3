<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('js/select2.js') }}"></script>
<script src="{{ asset('js/jquery.table2excel.js') }}"></script>
{{-- <script src="{{ asset('js/bootstrap3-wysihtml5.all.min.js') }}"></script> --}}
{{-- <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script> --}}

<script src="{{ asset('js/adminwow.min.js') }}"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script> --}}
{{-- <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script> --}}
{{-- <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script> --}}
<script type="text/javascript">
    $(function () {        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('[data-toggle="tooltip"]').tooltip();
        
        $('.select2').select2();

        $('.date').datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true
        });

        $('.month-picker').datepicker({
           format: "mm-yyyy",
            startView: "months", 
            minViewMode: "months"
        });
        
        $('.dataTable').DataTable({
           "scrollX": true
       });
    });
</script>
