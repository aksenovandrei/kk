<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<h2 style="color: red">На сайте была оформлена заявка с корзины:</h2>

<p>Имя: {!! $name !!}</p>
@if($email)
    <p>Email: {!! $email !!}</p>
@endif
@if($phone)
    <p>Телефон: {!! $phone !!}</p>
@endif
@if($msg)
    <p>Сообщение: {!! $msg !!}</p>
@endif
{{--<p>Имя: {{ $message }}</p>--}}
</body>
</html>