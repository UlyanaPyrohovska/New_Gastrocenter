<link href="{{ asset ('css/ask_form.css') }}" rel="stylesheet"/>
<form method="post" action="{{ route('ask_form') }}" class="ask_form">
    @csrf
    <header class="form_head">ПОСТАВИТИ ЗАПИТАННЯ СПЕЦІАЛІСТУ</header>
    <div class="fields_container">
        <div class="fields">
            <div class="d"><input type="text" placeholder="Ім'я" name="name" autocomplete="off" class="name"  value="">
                @if($errors->has('name'))<span class="error">*</span>{{ $errors->first('name') }}</span>@endif
            </div>
            <div class="d"><input type="text" placeholder="Місто" name="city" autocomplete="off" class="city" value="">
                @if($errors->has('city'))<span class="error">*</span>{{ $errors->first('city') }}</span>@endif
            </div>
            <div class="d"><input type="text" placeholder="Ел. пошта" name="email" autocomplete="off" class="email" value="">
                @if($errors->has('email'))<span class="error">*</span>{{ $errors->first('email') }}</span>@endif
            </div>
            <div class="d"><input type="text" placeholder="Вік" name="age" autocomplete="off" class="age" value="">
                @if($errors->has('age'))<span class="error">*</span>{{ $errors->first('age') }}</span>@endif
            </div>
        </div>
        <div class="d"><textarea rows = "5" cols = "60"  placeholder="Повідомлення" name="message" autocomplete="off" class="bigfield" ></textarea>
            @if($errors->has('message'))<span class="error">*</span>{{ $errors->first('message') }}</span>@endif
        </div>
    </div>
    <button class="send"><a>НАДІСЛАТИ</a></button>
</form>
