
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="{{ mix('js/mks_scripts.js') }}"></script>

    {{-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fc3978178b01b8b"></script> --}}
      <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>

      <script type="text/javascript">
        $(document).ready(function () {
            //Disable cut copy paste
            $('body').bind('cut copy', function (e) {
                e.preventDefault();
            });
          
            //Disable mouse right click
            $("body").on("contextmenu",function(e){
                return false;
            });
        });
      </script>

      <script type="text/javascript">
        var img = document.getElementById('thumbnail');
        var modalImg = document.getElementById("modalthumbnail");
        $("#thumbnail").on({
            change: function () {
                if (this.files && this.files[0]){
                    modalImg.src = URL.createObjectURL(this.files[0]);
                }
            }
        });

        $('#previewBtn').click(function() {
            $('#modalposttitle').text($('#posttitle').val());
            $('#modalthumbnail').text($('#thumbnail').val());
            $('#modalcategory').text($('#category').val());
            $('#modaldescription').text($('#description').val());
            $('#modalwriter').text($('#writer').val());
            $('#modalblog').text($('#blog').val());
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
        $(".btn-success").click(function(){ 
            var html = $(".clone").html();
            $(".increment").after(html);
        });
        $("body").on("click",".btn-danger",function(){ 
            $(this).parents(".control-group").remove();
        });
        });
    </script>

  </body>
</html>