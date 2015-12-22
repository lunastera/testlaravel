@extends('layouts.master')
@include('layouts.navbar')
@include('layouts.header')

@section('content')
    <div class="row">
        <div class="col-sm-offset-1 col-sm-11">
            <div class="col-sm-3">
                <h2><?php echo date('Y-m-d H:i:s') ?></h2>
            </div>
            <div class="col-sm-9 lead">
                <h1>テストだよ</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-offset-1 col-sm-11">
            <div class="col-sm-3">
                <h2><?php echo date('Y-m-d H:i:s') ?></h2>
            </div>
            <div class="col-sm-9 lead">
                <h1>テストだよ</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-offset-1 col-sm-11">
            <div class="col-sm-3">
                <h2><?php echo date('Y-m-d H:i:s') ?></h2>
            </div>
            <div class="col-sm-9 lead">
                <h1>テストだよ</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-offset-1 col-sm-11">
            <div class="col-sm-3">
                <h2><?php echo date('Y-m-d H:i:s') ?></h2>
            </div>
            <div class="col-sm-9 lead">
                <h1>テストだよ</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-offset-1 col-sm-11">
            <div class="col-sm-3">
                <h2><?php echo date('Y-m-d H:i:s') ?></h2>
            </div>
            <div class="col-sm-9 lead">
                <h1>テストだよ</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-offset-1 col-sm-11">
            <div class="col-sm-3">
                <h2><?php echo date('Y-m-d H:i:s') ?></h2>
            </div>
            <div class="col-sm-9 lead">
                <h1>テストだよ</h1>
            </div>
        </div>
    </div>

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

@include('layouts.footer')
