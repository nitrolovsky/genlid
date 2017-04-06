<body style="font-family: Verdana;font-size:13px;">
    @if ($name)
        Имя - {{ $name or "" }}<br>
    @endif
    @if ($email)
        Email - {{ $email or ""}}<br>
    @endif
    @if ($phone)
        Телефон - {{ $phone or ""}}<br>
    @endif
    @if ($source)
        Источник - {{ $source or ""}}<br><br>
    @endif
</body>
