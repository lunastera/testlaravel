@section('scrollbar')
<script type="text/javascript">
    $(window).scroll(function() {
      if ($(document).scrollTop() > 50) {
        $('.navbar').addClass('navbar-shrink');
    } else {
        $('.navbar').removeClass('navbar-shrink');
    }
    });
</script>
@endsection
