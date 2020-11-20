@extends('layout.mks_Main')
@section('content')
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 order-md-2 text-center">
                    {{-- <img src="mks-resources/mks-logo.png" alt="Image" class="img-fluid"> --}}
                    <img src="mks-resources/symbol-icon.png" style="padding-top: 20%;" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-7 mr-auto order-md-1" style="padding-top: 3%;">
                    <h2>About MKS News</h2>
                    <p class="text-justify">Welcome to Muradnagar ki shaan, your number one source for latest national news. We’re dedicated to providing you the best of news, with an emphasis on all social, political, cultural, national news. Muradnagar ki shaan is RNI registered news paper (RNI No. UPHIN/2019/78722).</p>
                    <p class="text-justify">Founded in 2019 by Mr. Sudarshan Prasad, Muradnagar ki shaan has come a long way from its beginnings in Ghaziabad UP. When Mr. Sudarshan Prasad first started out, his passion for news drove them to start their own business.</p>
                    <p class="text-justify">We hope you enjoy our news paper as much as we enjoy offering them to you. If you have any questions or comments, please don’t hesitate to contact us.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 order-md-2 py-5">
                    <h4 class="footer-heading mb-3">Head Office</h4>
                    <address>
                        Registered Address: <br>
                        House No.34, Radheyshyam vihar phase 3, <br>
                        Basantpur Sainthli chowk, Muradnagar, <br>
                        Ghaziabad, Uttar Pradesh <br>
                        Pincode-201206
                    </address>
                </div>
            </div>
            <div class="row" style="padding: 1%;">
                <div class="col-md-4 mb-2 text-right">
                    <img src="./mks-resources/photo.jpg" alt="Image" class="img-fluid rounded">
                </div>
                <div class="col-md-4 mb-2 text-left">
                    <p class="mt-4">
                        <h2 class="mb-3 h5">Mr. Sudarshan Prasad</h2>
                        <h6> <strong>Cheif Editor</strong></h6>
                        <h6>Contact No. – +91 8279769983, +91 7900749983</h6>
                        <h6>Email-id – chiefeditor@mksnews.ind.in</h6>
                        <a target="_blank" href="https://www.facebook.com/sudarshan.prasad.526" class="p-2"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://www.instagram.com/dilipsir.4444/?igshid=bt4lx57gsfy7" class="p-2"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="https://twitter.com/Sudarsh73265000" class="p-2"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="https://www.youtube.com/channel/UCvEWO5VLjnaLw7Q_c8jdvUw" class="p-2"><i class="fa fa-youtube"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <a href="{{ url('/') }}" class="float">
            <i class="fa fa-reply my-float"></i>
        </a>
    </div>
@endsection