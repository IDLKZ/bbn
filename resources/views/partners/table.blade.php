<div class="table-responsive">
    <table class="table" id="partners-table">
        <thead>
        <tr>
            <th>Наименование компании</th>
        <th>Ссылка</th>
        <th>Логотип</th>
            <th colspan="3">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($partners as $partners)
            <tr>
                <td>{{ $partners->title }}</td>
            <td><a href="{{ $partners->link }}" target="_blank">{{ $partners->link }}</a></td>
            <td><img src="{{ $partners->getFile('logo') }}" width="50" height="50"></td>
                <td width="120">
                    {!! Form::open(['route' => ['partners.destroy', $partners->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('partners.show', [$partners->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('partners.edit', [$partners->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
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
