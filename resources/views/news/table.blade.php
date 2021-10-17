<div class="table-responsive">
    <table class="table" id="news-table">
        <thead>
        <tr>
            <th>Заголовок</th>
        <th>Описание</th>
        <th>Картинка</th>
            <th colspan="3">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $new)
            <tr>
                <td>{{ $new->title }}</td>
            <td>{!! $new->description !!}</td>
            <td><img src="{{ $new->getFile('image') }}" width="100" height="100"></td>
                <td width="120">
                    {!! Form::open(['route' => ['news.destroy', $new->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('news.show', [$new->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('news.edit', [$new->id]) }}"
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

    {!! $news->links() !!}
</div>
