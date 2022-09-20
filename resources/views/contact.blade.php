@extends('master')


@section('content')
<h6 hidden>{{$active5='active'}}</h6>
<h6 hidden>{{$page='about-banner'}}</h6>

<!-- contact -->
<div class="contact">
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="agile-contact-form">
            <div class="col-md-6 contact-form-left">
                <div class="w3layouts-contact-form-top">
                    <h3>{{__("Contactez-nous")}}</h3>
                    <p>{{__("Retrouvez tous les moyens de rentrer en contact avec la Fondation KAMBA sur cette page. Nous sommes et resterons ouvert à toutes sollicitations.")}}</p>
                </div>
                <div class="agileits-contact-address">
                    <ul>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> <span>+243 895 193 650</span></li>
                        <li><i class="fa fa-phone fa-envelope" aria-hidden="true"></i> <span><a href="mailto:info@fondationkamba.orgm">info@fondationkamba.org</a></span></li>
                        {{-- <li><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Eiusmod Tempor inclore Place,Kingsport 56777.</span></li> --}}
                        <li><i class="fa fa-whatsapp" aria-hidden="true"></i> <span>+243 819 873 249</span></li>
                        <li><i class="fa fa-facebook" aria-hidden="true"></i> <span><a href="https://web.facebook.com/fondationkamba71">fondationkamba71</a></span></li>
                        <li><i class="fa fa-twitter" aria-hidden="true"></i> <span><a href="https://twitter.com/FondationKamba">fondationkamba71</a></span></li>
                        <li><i class="fa fa-youtube-play" aria-hidden="true"></i> <span><a href="https://www.youtube.com/channel/UCsZPcGqLgxZ01RIpYDezLDQ">fondationkamba71</a></span></li>
                        <li><i class="fa fa-instagram" aria-hidden="true"></i> <span><a href="https://www.youtube.com/channel/UCsZPcGqLgxZ01RIpYDezLDQ">fondationkamba71</a></span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 contact-form-right">
                <div class="contact-form-top">
                    <h3>{{__("Envoyez-nous un message")}}</h3>
                </div>
                <div class="agileinfo-contact-form-grid">
                    <form action="{{route('contact.submit')}}" method="post">
                        @csrf
                        <input type="text" name="name" placeholder="{{__("Nom")}}" required="">
                        <input type="email" name="email" placeholder="{{__("Email")}}" required="">
                        <input type="text" name="phone" placeholder="{{__("Téléphone")}}" required="">
                        <textarea name="Message" placeholder="message" required=""></textarea>
                        <button class="btn1">{{__("Envoyer")}}</button>
                    </form>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!---728x90--->

        {{-- <div class="w3agile-map">
            <h3>Retrouvez-nous ici</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102623.04862310845!2d-82.59779327009554!3d36.506579763153326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x885a856b70074b97%3A0x6f9cc0d30bcc841f!2sKingsport%2C+TN%2C+USA!5e0!3m2!1sen!2sin!4v1471495038514"  allowfullscreen></iframe>
        </div> --}}
    </div>
</div>
<!-- //contact -->
<!---728x90--->

@endsection
