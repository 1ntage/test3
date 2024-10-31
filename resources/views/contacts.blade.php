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
    <h1>Ваши контакты</h1>
    @foreach($contacts as $contact)
        <p><a href="{{route('contact_show', $contact->id)}}">{{$contact->lastname}} {{$contact->firstname}} {{$contact->middlename}}</a></p>
    @endforeach

    <form action="{{ route('contacts_store') }}" method="POST">
        @csrf
        <label for="lastname">Фамилия</label>
        <input type="text" name="lastname" id="lastname" required>
        <label for="firstname">Имя</label>
        <input type="text" name="firstname" id="firstname" required>
        <label for="middlename">Отчество</label>
        <input type="text" name="middlename" id="middlename" required>
        <button type="submit">Сохранить контакт</button>
    </form>

@if(session())
    <div class="alert alert_success">
        <p>{{session('success')}}</p>
    </div>
@endif
</body>
</html>
