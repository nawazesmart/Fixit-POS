
<script src="{{asset('/')}}assets/js/jquery-2.1.4.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>


{{--<script src="{{asset('/')}}assets/js/jquery-1.11.3.min.js"></script>--}}

<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='{{asset('/')}}assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="{{asset('/')}}assets/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}assets/js/jquery.maskedinput.min.js"></script>
<script src="{{asset('/')}}assets/js/chosen.jquery.min.js"></script>
<script src="{{asset('/')}}assets/js/axios.min.js"></script>


<script src="{{asset('/')}}assets/js/excanvas.min.js"></script>
<script src="{{asset('/')}}assets/js/bootstrap-datepicker.min.js"></script>

<script src="{{asset('/')}}assets/js/jquery-ui.custom.min.js"></script>
<script src="{{asset('/')}}assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="{{asset('/')}}assets/js/jquery.easypiechart.min.js"></script>
<script src="{{asset('/')}}assets/js/jquery.sparkline.index.min.js"></script>
<script src="{{asset('/')}}assets/js/jquery.flot.min.js"></script>
<script src="{{asset('/')}}assets/js/jquery.flot.pie.min.js"></script>
<script src="{{asset('/')}}assets/js/jquery.flot.resize.min.js"></script>



<script src="{{asset('/')}}assets/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}assets/js/jquery.dataTables.bootstrap.min.js"></script>
<script src="{{asset('/')}}assets/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/')}}assets/js/buttons.flash.min.js"></script>
<script src="{{asset('/')}}assets/js/buttons.html5.min.js"></script>
<script src="{{asset('/')}}assets/js/buttons.print.min.js"></script>
<script src="{{asset('/')}}assets/js/buttons.colVis.min.js"></script>
<script src="{{asset('/')}}assets/js/dataTables.select.min.js"></script>


<script src="{{asset('/')}}assets/js/ace-elements.min.js"></script>
<script src="{{asset('/')}}assets/js/ace.min.js"></script>


{{--<script src="{{asset('/')}}include/js/bootstrap.bundle.js"></script>--}}
{{--<script src="{{asset('/')}}include/js/bootstrap.bundle.min.js"></script>--}}







@yield('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script>
    $(document).ready(function() {
        $("#searchInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#productTable tbody tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });

        $('#button4').click(function () {
            // Perform action for Button 4
            Swal.fire({
                title: 'Use the sale option !',
                showDenyButton: true,
                // showCancelButton: true,
                // confirmButtonText: 'Save',
                denyButtonText: `Don't save`,
            })
        });
    });
</script>





<!-- inline scripts related to this page -->
<script src="{{asset('/')}}assets/js/ace-extra.min.js"></script>


