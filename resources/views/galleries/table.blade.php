<div class="table-responsive">
    <table class="table" id="galleries-table">
        <thead>
        <tr>
            <th>Картинка</th>
            <th colspan="3">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($galleries as $gallery)
            <tr>
                <td><img src="{{ $gallery->getFile('image') }}" width="150"></td>
                <td width="120">
                    {!! Form::open(['route' => ['galleries.destroy', $gallery->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $galleries->links() !!}
</div>
