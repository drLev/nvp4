<form method="POST" action="{{ url('/') }}">
    {{ csrf_field() }}
    <input name="email" value="">
    <input name="text" value="">
    <input type="submit" value="Отправить"/>
</form>