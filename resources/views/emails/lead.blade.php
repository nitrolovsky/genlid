<body style="font-family: Verdana;font-size:13px;">
    @if (isset($name))
        Имя - {{ $name or "" }}<br>
    @endif
    @if (isset($email))
        Email - {{ $email or ""}}<br>
    @endif
    @if (isset($phone))
        Телефон - {{ $phone or ""}}<br>
    @endif
    @if (isset($source))
        Источник - {{ $source or ""}}<br><br>
    @endif
</body>
