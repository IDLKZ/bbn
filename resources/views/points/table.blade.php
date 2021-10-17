<div class="table-responsive">
    <table class="table" id="points-table">
        <thead>
        <tr>
            <th>Пользователь</th>
        <th>Вид точки</th>
        <th>Адрес</th>
        <th>Статус</th>
            <th colspan="3">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($points as $point)
            <tr>
                <td>{{ $point->user->login }}</td>
            <td>
                @if($point->bookmarks)
                    Закладка
                @elseif($point->graffiti)
                    Граффити
                @else
                    Курительные изделия
                @endif
            </td>
            <td>{{ $point->address }}</td>
            <td>{{ $point->status ? 'Подтвержден' : 'На модерации' }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['points.destroy', $point->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('points.show', [$point->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
{{--                        <a href="{{ route('points.edit', [$point->id]) }}"--}}
{{--                           class='btn btn-default btn-xs'>--}}
{{--                            <i class="far fa-edit"></i>--}}
{{--                        </a>--}}
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $points->links() !!}
</div>
