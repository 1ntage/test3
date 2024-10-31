<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Телефонная книга</title>
</head>
<body>
<p><a>{{$contact->lastname}} {{$contact->firstname}} {{$contact->middlename}}</a></p>
<p>Номер телефона: {{ $phones->phone }}</p>
<form action="{{ route('phone_store', $contact->id) }}" method="POST">
    @csrf
    <label for="phone">Добавить номер телефона</label>
    <input type="text" name="phone" id="phone" required min="11" placeholder="89999999999">
    <button type="submit">Сохранить номер телефона</button>
</form>

@if(session())
    <div class="alert alert_success">
        <p>{{session('success')}}</p>
    </div>
@endif
</body>
</html>
