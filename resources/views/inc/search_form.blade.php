<link href="{{ asset ('css/search.css') }}" rel="stylesheet"/>
<div class="search_wrap">
    <form method="get" action="{{ route('search_form') }}" class="wrap_wrap">
        <input type="text" placeholder="Пошук..." name="search_str" autocomplete="off" class="search">
        <button class="icon-loupe"></button>
    </form>
</div>
