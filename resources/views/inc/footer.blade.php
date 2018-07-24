<footer class="footer footer-body">
    <div class="container text-center">
        <span class="text-white">
          Avenida Cândido de Abreu, 526 - sala 304 - bloco B<br>
          Centro Cívico, Curitiba - PR<br>
          CEP: 80530-000
          </span>
    </div>
</footer>
<script href="{{asset('public/js/app.js')}}"> </script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script>

$( document ).ready(function() {
  $('.carousel').carousel({
    interval: 100
  })
});

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