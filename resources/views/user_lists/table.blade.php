<div class="table-responsive">
    <table class="table" id="userLists-table">
        <thead>
        <tr>
            <th>Логин</th>
            <th>Email</th>
            <th>Номер</th>
            <th>Ава</th>
            <th>Мотивация</th>
            <th colspan="3">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($userLists as $userList)
            <tr>
                <td>{{ $userList->login }}</td>
                <td>{{ $userList->email }}</td>
                <td>{{ $userList->phone }}</td>
                <td><img class="ava" src="{{$userList->getFile('image')}}"></td>
                <td>{{ $userList->motivation }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['userLists.destroy', $userList->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('userLists.edit', [$userList->id]) }}"
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
    {!! $userLists->links() !!}
</div>
