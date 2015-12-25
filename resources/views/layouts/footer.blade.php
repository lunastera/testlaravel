@section('footer')
<footer class="row">
    <p class="text-center">© 2015 宇野.</p>
    <script type="text/javascript" src="/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(window).scroll(function() {
          if ($(document).scrollTop() > 50) {
            $('.navbar').addClass('navbar-shrink');
        } else {
            $('.navbar').removeClass('navbar-shrink');
        }
        });
    </script>
</footer>
@endsection
