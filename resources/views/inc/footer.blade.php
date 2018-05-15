<footer class="footer">
    <div class="container text-center">
        <span class="text-muted">
          Avenida Cândido de Abreu, 526 - sala 304 - bloco B<br>
          Centro Cívico, Curitiba - PR<br>
          CEP: 80530-000
          </span>
    </div>
</footer>



    <script href="{{asset('public/js/app.js')}}"> </script>



<script>

window.onscroll = function() {myFunction()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky-top")
  } else {
    navbar.classList.remove("sticky-top");
  }
}
</script>

