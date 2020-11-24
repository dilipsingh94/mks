
      <script src="{{ asset('js/app.js') }}"></script>
      <script src="{{ mix('js/mks_scripts.js') }}"></script>

      <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>

      <script type="text/javascript">
        $(document).ready(function () {
            //Disable cut copy paste
            $('body').bind('cut copy paste', function (e) {
                e.preventDefault();
            });
          
            //Disable mouse right click
            $("body").on("contextmenu",function(e){
                return false;
            });
        });
      </script>
  </body>
</html>