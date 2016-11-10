@if (count($proposals) > 0)
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>
                    Номер заявки
                </th>
                <th>
                    Дата добавления
                </th>
                <th>
                    Имя
                </th>
                <th>
                    Email
                </th>
                <th>
                    Телефон
                </th>
                <th>
                    Страница источник
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proposals as $proposal)
                <tr>
                    <td>
                        {{ $proposal->id }}
                    </td>
                    <td>
                        {{ $proposal->created_at }}
                    </td>
                    <td>
                        {{ $proposal->name }}
                    </td>
                    <td>
                        {{ $proposal->email }}
                    </td>
                    <td>
                        {{ $proposal->phone }}
                    </td>
                    <td>
                        {{ $proposal->page_id }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
