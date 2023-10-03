<div class="table-responsive">
    <table class="table" id="colleges-table">
        <thead>
        <tr>
            <th>Name</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($colleges as $college)
            <tr>
                <td>{{ $college->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['colleges.destroy', $college->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('colleges.show', [$college->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('colleges.edit', [$college->id]) }}"
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
