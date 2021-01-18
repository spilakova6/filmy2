@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <style>

        #footer-area{
            padding: 90px 0 60px 0;
            background: #262626;
            color: #fff;
        }
        .footer-social {
            margin-top:  20px;


        }
        .single-footer h3{
            font-weight: 500;
            margin-bottom: 25px;
            color: #fafafa;
            font-family: Merienda;
        }
        .link-area li {
            padding: 5px 5px 5px 0;
            list-style: none;
        }
        .link-area li a {
            text-transform: capitalize;
            color: #ddd;
            font-family: Merienda;
        }

        .link-area li a i{
            margin-right: 10px;
            color: #ddd;

        }
        .link-area {
            padding: 0;
        }
        .single-footer p{
            font-family: Merienda;
        }

        .footer-social a {
            width: 30px;
            height: 30px;
           margin-left: 20px;
        }
        .footer-social li a i{
            color: #fff;
            padding: 8px;
        }
        .widget li {
            float: left;
            width: 50%;

        }
        .widget li a img{
            margin-bottom: -10px;
            width: 150%;
            height: 200px;
        }
        .copyright-area {
            background: #000;
            padding: 30px 0;
            margin-top: 30px;
            border-radius: 5px;
        }
        .copyright-area p{
            font-weight: 600;
            color: #fafafa;
        }
    </style>



    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">

            @foreach($pictures->take(4) as $picture)
                <div class="text-center carousel-item @if($loop->first) active @endif">
                    <img class="d-block mx-auto img-fluid" src="{{$picture->picture}}" alt="First slide">
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


<footer >
    <p></p>
    <div id="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-footer">
                        <h3>O nás</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac massa et enim rutrum gravida vel et ligula. Morbi sed est sit amet lacus tristique hendrerit vitae et mi. Vivamus ornar.</p>
                        <div class="footer-social list-inline ">
                            <a href=""><i class="fa fa-facebook-f"></i></a>
                           <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-pinterest"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                            <a href=""><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-footer">
                        <h3>Cinema</h3>
                        <ul class="link-area">
                            <li><a href="#"><i class="fa fa-long-arrow-right"></i>Product FAQs</a></li>
                            <li><a href="#"><i class="fa fa-long-arrow-right"></i>Otváracie hodiny</a></li>
                            <li><a href="#"><i class="fa fa-long-arrow-right"></i>Kariéra</a></li>
                            <li><a href="#"><i class="fa fa-long-arrow-right"></i>Mapa</a></li>
                            <li><a href="#"><i class="fa fa-long-arrow-right"></i>Kontakt</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-footer">
                        <h3>Kontakt</h3>
                        <ul class="link-area">
                            <li><a href="#"><i class="fa fa-phone"></i>+421949785025</a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i>cinemas@cinemas.com</a></li>
                            <li><a href="#"><i class="fa fa-map"></i>821 05, Bajkalská, Bratislava</a></li>
                            <li><a href="#"><i class="fa fa-globe"></i>www.webcinema.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-footer">
                        <ul class="link-area widget list-inline">
                            <li>
                                <a href="#"><img src="{{asset('logo/logo.png')}}" alt=""></a>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-area text-center">
                        <p>&copy; 2021, All Right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



</footer>



@endsection
