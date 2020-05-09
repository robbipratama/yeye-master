<!-- MENU SIDEBAR-->
<aside class="menu-sidebar3 js-spe-sidebar">
    <nav class="navbar-sidebar2 navbar-sidebar3">
        <ul class="list-unstyled navbar__list">
            @foreach($menu as $data)
            @php($menuaktif = $data->active)
            <li @if($active == $menuaktif) class="active" @endif>
                <a href="{{{ url($data->url) }}}">
                    <i class="{{ $data->icon }}"></i>{{ $data->nama }}
                </a>
            </li>
            @endforeach
        </ul>
    </nav>
</aside>
<!-- END MENU SIDEBAR-->
