<script src=" {{ asset('public/js/app.js') }}" ></script>
<footer class="footer">
{{--  short about us  | opening hours | Contact us:  address, phone, email --}}
    <div class="contrainer-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 ml-auto">Contact Us
                <ul class="list-unstyled">
                    <li class="nav-link" > T: 0420728658</li>
                    <li><a class="nav-link" href="https://www.google.com.au/search?q=1+flinders+street">A: 1 Flinder st</a> </li>
                    <li></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 ml-auto">Our stocks
                <ul class="list-unstyled">
                    <li><a class="nav-link" href="{!! url('/sale') !!}">On sale</a> </li>
                    <li><a class="nav-link" href="{!! url('/book') !!}">Book test drive</a> </li>
                    <li><a class="nav-link" href="{!! url('/cars') !!}">Browse all</a> </li>
              </ul>
            </div>
            
            <div class="col-lg-2 col-md-6 ml-auto">New Car
                <ul class="list-unstyled">
                    <li><a class="nav-link" href="{!! url('/book') !!}">Book test drive</a> </li>
                    <li><a class="nav-link" href="{!! url('/new-cars') !!}">Browse</a> </li>
              </ul>
            </div>
           
            <div class="col-lg-2 col-md-6 ml-auto">Company
                <ul class="list-unstyled">
                    <li><a class="nav-link" href="{!! url('/about') !!}">About Us</a> </li>
                    <li><a class="nav-link" href="{!! url('/contact') !!}">Contact Us</a> </li>
              </ul>
            </div>
            
    </div>
    <p class="text-center">&copy 2018 Tam Huynh</p>
        </div>
   
</footer>