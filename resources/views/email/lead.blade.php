<body style="font-family: Verdana;font-size:17px;">
    Имя - {{ $name or "" }}
    <br>
    Email - {{ $email or ""}}
    <br>
    Телефон - {{ $phone or ""}}
    <br>
    Источник - {{ $source or ""}}
    <br>
    <br>
    @if ($calc)
        {{ $calc or "" }}<br>
    @endif
    @if ($nar)
        {{ $nar or "" }}<br>
    @endif
    @if ($vn)
        {{ $vn or "" }}<br>
    @endif
    @if ($kol)
        {{ $kol or "" }}<br>
    @endif
    @if ($davl)
        {{ $davl or "" }}<br>
    @endif
    @if ($dlina)
        {{ $dlina or "" }}<br>
    @endif
    @if ($dym)
        {{ $dym or "" }}<br>
    @endif
    @if ($kotel)
        {{ $kotel or "" }}<br>
    @endif
    @if ($ob)
        {{ $ob or "" }}<br>
    @endif
    @if ($op1)
        {{ $op1 or "" }}<br>
    @endif
    @if ($op2)
        {{ $op2 or "" }}<br>
    @endif
    @if ($op3)
        {{ $op3 or "" }}<br>
    @endif
    @if ($op4)
        {{ $op4 or "" }}<br>
    @endif
    @if ($op5)
        {{ $op5 or "" }}<br>
    @endif
    @if ($op6)
        {{ $op6 or "" }}<br>
    @endif
    @if ($op7)
        {{ $op7 or "" }}<br>
    @endif
    @if ($op8)
        {{ $op8 or "" }}<br>
    @endif
    @if ($op9)
        {{ $op9 or "" }}<br>
    @endif
    @if ($op10)
        {{ $op10 or "" }}
    @endif
</body>
