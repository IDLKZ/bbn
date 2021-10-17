<div class="table-responsive">
    <table class="table" id="getConsultations-table">
        <thead>
        <tr>
            <th>Имя</th>
        <th>Номер телефона</th>
        <th>Статус</th>
            <th colspan="3">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($getConsultations as $getConsultation)
            <tr>
                <td>{{ $getConsultation->name }}</td>
            <td>{{ $getConsultation->phone }}</td>
            <td>{!! $getConsultation->status ? "<span class='text-success'>Просмотрен</span>" : "<span class='text-danger'>Не просмотрен</span>" !!} </td>
                <td width="120">
                    {!! Form::open(['route' => ['getConsultations.destroy', $getConsultation->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('change-consultation', [$getConsultation->id]) }}"
                           class='btn btn-default btn-xs'>
                            @if($getConsultation->status)
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
