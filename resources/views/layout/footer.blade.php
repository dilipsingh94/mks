<div class="site-footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <h3 class="footer-heading mb-4">About Us</h3>
                <p>A P2P Lending Company</p>
            </div>
            <div class="col-md-3 ml-auto">
                <!-- <h3 class="footer-heading mb-4">Navigation</h3> -->
                <ul class="list-unstyled float-left mr-5">
                    <li><a href="/videos/show">Videos</a></li>
                    <li><a href="/audios/show">Audio</a></li>
                    <li><a href="/show/presentations">Presentations</a></li>
                    <li><a href="/show/document">Documents</a></li>
                    <li><a href="/blogs/show">Blogs</a></li>
                </ul>
                {{-- <ul class="list-unstyled float-left">
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Lifestyle</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Nature</a></li>
                </ul> --}}
            </div>
            <div class="col-md-4">
                <div>
                    <h3 class="footer-heading mb-4">Connect With Us</h3>
                    <p>
                    <a href="#"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                    <a href="#"><span class="icon-twitter p-2"></span></a>
                    <a href="#"><span class="icon-instagram p-2"></span></a>
                    <a href="#"><span class="icon-rss p-2"></span></a>
                    <a href="#"><span class="icon-envelope p-2"></span></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy; 2020 All rights reserved by INVESKY
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</div>
<!--end of footer-->

<!--All js and jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('learning-plug-ins/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('learning-plug-ins/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{ asset('learning-plug-ins/js/jquery-ui.js')}}"></script>
<script src="{{ asset('learning-plug-ins/js/popper.min.js')}}"></script>
<script src="{{ asset('learning-plug-ins/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('learning-plug-ins/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('learning-plug-ins/js/jquery.stellar.min.js')}}"></script>
<script src="{{ asset('learning-plug-ins/js/jquery.countdown.min.js')}}"></script>
<script src="{{ asset('learning-plug-ins/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('learning-plug-ins/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('learning-plug-ins/js/aos.js')}}"></script>
<script src="{{ asset('learning-plug-ins/js/main.js')}}"></script>
<!-- This is data table -->
<script src="https://kit.fontawesome.com/ae36382a7d.js" crossorigin="anonymous"></script>
<!-- Sweet-Alert  -->
{{-- <script src="{{ asset('learning-plug-ins/js/sweetalert.min.js')}}"></script>
<script src="{{ asset('learning-plug-ins/js/jquery.sweet-alert.custom.js')}}"></script> --}}
<!--sweet alert end-->

<script src="{{ asset('learning-plug-ins/js/jquery.dataTables.min.js')}}"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only --> 
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
             'print'
        ]
    });
</script>

<script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
</script>

<!-- custom file input js-->
<script type="text/javascript">

    $('.custom-file input').change(function (e) {
        var files = [];
        for (var i = 0; i < $(this)[0].files.length; i++) {
            files.push($(this)[0].files[i].name);
        }
        $(this).next('.custom-file-label').html(files.join(', '));
    });

</script>
<!-- end ofcustom file input js-->


</body>
</html>
                

  


