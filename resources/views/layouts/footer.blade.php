<footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    <li>
                        <a href="#" target="_blank">{{ __('') }}</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">{{ __('') }}</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">{{ __('') }}</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">{{ __('') }}</a>
                    </li>
                </ul>
            </nav>
            <div class="credits ml-auto">
                <span class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>{{ __(', Developed ') }}<i class="#"></i>{{ __(' by ') }}<a class="@if(Auth::guest()) text-white @endif" href="#" target="_blank" style="text-decoration:none;">{{ __('Joshua Ezeh') }}</a>{{ __('  ') }}<a class="@if(Auth::guest()) text-white @endif" target="_blank" href="#">{{ __('') }}</a>
                </span>
            </div>
        </div>
    </div>
</footer>