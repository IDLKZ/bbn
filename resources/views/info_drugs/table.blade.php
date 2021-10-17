<div class="table-responsive">
    <table class="table" id="infoDrugs-table">
        <thead>
        <tr>
            <th>Имя</th>
        <th>Email</th>
        <th>Номер</th>
        <th>Город</th>
        <th>Адрес</th>
        <th>Текст</th>
        <th>Фотография</th>
        <th>Статус</th>
            <th colspan="3">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($infoDrugs as $infoDrug)
            <tr>
                <td>{{ $infoDrug->name }}</td>
            <td>{{ $infoDrug->email }}</td>
            <td>{{ $infoDrug->phone }}</td>
            <td>{{ $infoDrug->city }}</td>
            <td>{{ $infoDrug->address }}</td>
            <td>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text">
                            {{ $infoDrug->text }}
                        </p>
                    </div>
                </div>
            </td>
            <td><img src="{{ $infoDrug->getFile('image') }}" width="100" height="100"></td>
            <td>{!! $infoDrug->status ? "<span class='text-success'>Проверен</span>" : "<span class='text-danger'>Не проверен</span>" !!} </td>
                <td width="120">
                    {!! Form::open(['route' => ['infoDrugs.destroy', $infoDrug->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('change-drug', [$infoDrug->id]) }}"
                           class='btn btn-default btn-xs'>
                            @if($infoDrug->status)
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
