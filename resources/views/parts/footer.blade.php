<footer id="footer" class = "@if(Request::path() != '/') grey @endif">
    <div class = "container">
        <div class = "footer-container">
        <div class = "copy-text mobile-hidden">{{settings('site.copy-text')}}</div>
            <div class = "footer-right">
                <a class = "footer-right-element" href = "privacy">{{__('site.privacy')}}</a>
                <a class = "footer-right-element" href = "cookie">{{__('site.cookie')}}</a>
            </div>
            <div class = "copy-text desktop-hidden">{{settings('site.copy-text')}}</div>
        </div>
    </div>
</footer>