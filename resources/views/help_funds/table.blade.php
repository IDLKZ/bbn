<div class="table-responsive">
    <table class="table" id="helpFunds-table">
        <thead>
        <tr>
            <th>Логин</th>
        <th>Email</th>
        <th>Номер</th>
        <th>Наименование компании</th>
        <th>Текст</th>
        <th>Статус</th>
            <th colspan="3">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($helpFunds as $helpFunds)
            <tr>
                <td>{{ $helpFunds->login }}</td>
            <td>{{ $helpFunds->email }}</td>
            <td>{{ $helpFunds->phone }}</td>
            <td>{{ $helpFunds->title }}</td>
            <td>{{ $helpFunds->text }}</td>
            <td>{!! $helpFunds->status ? "<span class='text-success'>Просмотрен</span>" : "<span class='text-danger'>Не просмотрен</span>" !!} </td>
                <td width="120">
                    {!! Form::open(['route' => ['helpFunds.destroy', $helpFunds->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('change-funds', [$helpFunds->id]) }}"
                           class='btn btn-default btn-xs'>
                            @if($helpFunds->status)
                                <i class="fa fa-ban"></i>
                            @else
                                <i class="fa fa-check"></i>
                            @endif
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
