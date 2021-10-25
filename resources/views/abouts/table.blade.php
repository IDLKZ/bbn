<div class="table-responsive">
    <table class="table" id="abouts-table">
        <thead>
        <tr>
            <th>Текст</th>
            <th colspan="3">Редактировать</th>
        </tr>
        </thead>
        <tbody>
        @foreach($abouts as $about)
            <tr>
                <td>{!! $about->text !!}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('abouts.edit', [$about->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
