@section('footer')
    <!-- Footer -->
    <section id="footer">

        <!-- Go to Top -->
        <div id="go-to-top" onclick="scroll_to_top();"><span class="icon glyphicon glyphicon-chevron-up"></span></div>

        <ul class="social-icons">
            <li><a href="#" target="_blank" title="Facebook"><img src="{{asset('img/facebook.png')}}" alt="Facebook"></a></li>
            <li><a href="#" target="_blank" title="Twitter"><img src="{{asset('img/twitter.png')}}" alt="Twitter"></a></li>
            <li><a href="#" target="_blank" title="Google+"><img src="{{asset('img/googleplus.png')}}" alt="Google+"></a></li>
        </ul>

        <!-- copyright text -->
        <div class="footer-text-line">© {{date('Y')}}<br> ФЛП Аксёнова Алина Юрьевна</div>
    </section>
    <!-- end: Footer -->
    @endsection