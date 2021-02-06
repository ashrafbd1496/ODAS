<span id="hide_message">
    @if(session()->has('message'))
    <li class="pass-message">
        {{ session()->get('message') }}
    </li>
    @endif
</span>