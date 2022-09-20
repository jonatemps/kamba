<div class="footer">
    <div class="container">
        <div class="agile-footer-grids">
            <div class="col-md-3 w3-agile-footer-grid">
                <h3>{{__("A propos")}}</h3>
                <p>{{__("Déterminé à jouer un rôle de premier plan et de mettre notre intelligence au service de la nation congolaise en vue de promouvoir son développement.")}}</p>
            </div>
            {{-- <div class="col-md-3 w3-agile-footer-grid">
                <h3>Evénements</h3>
                <ul>
                    <li>12th Aug <a href="single.html">Curabitur</a></li>
                    <li>10th Sept <a href="single.html">Fusce urna</a></li>
                    <li>24th Sept <a href="single.html">Praesent</a></li>
                    <li>17th Oct <a href="single.html">Malesuada </a></li>
                    <li>09th Dec <a href="single.html">Cum sociis</a></li>
                </ul>
            </div> --}}
            <div class="col-md-3 w3-agile-footer-grid">
                <h3>Navigation</h3>
                <ul>
                    <li class="text"><a href="{{route('about')}}">{{__("A propos")}}</a></li>
                    <li class="text"><a href="{{route('gallery.images')}}">{{__("Gallérie")}}</a></li>
                    <li class="text"><a href="{{route('posts')}}">Blog</a></li>
                    <li class="text"><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3 w3-agile-footer-grid">
                <h3>Newsletter</h3>
                <form action="{{route('newsletter.submit')}}" method="post">
                    @csrf
                    <input type="email" id="mc4wp_email" name="EMAIL" placeholder="{{__("Entrez votre adresse email")}}" required="">
                    <input type="submit" value="{{__("Souscrire")}}">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
