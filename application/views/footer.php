<footer class="text-white bg-travel-purple" style="padding: 0px !important; width: 120%; margin-left: -10%;
            margin-bottom: -25% !important;">
      <div class="container mt-4">
        <p class="text-white text-center mt-4"> 
        </br>
        Desenvolvido por: </br> <b> Matheus Zaché e Niuan Lucas. </b>
        </br>
         &copy; Calendário de Eventos Rio </p>
        </br>
      </div>
    </footer>

        </div>

    </div>




    <div class="overlay"></div>

    <script src="/CalendarioCultural/js/jquery.js"></script>
    <script src="/CalendarioCultural/js/bootstrap.js"></script>
    <script src="/CalendarioCultural/js/bootstrap.bundle.js"></script>

    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>


</body>

</html>