<div class="card">
    <div class="card-header">
        Current Task

        {{-- Kiểm tra nếu có session del_success thì hiển thị ra thông báo xóa thành công --}}
        @if(session()->has('del_success'))
            <div class="alert alert-success">
                {{ session()->get('del_success') }}
            </div>
        @endif

        {{-- Kiểm tra nếu có session del_not_success thì hiển thị ra thông báo xóa không thành công --}}
        @if(session()->has('del_not_success'))
            <div class="alert alert-error">
                {{ session()->get('del_not_success') }}
            </div>
        @endif

    </div>
    <div class="card-body">
        <table class="table table-striped">
            <tr>
                <th>Task</th>
                <th></th>
            </tr>

            @foreach ($task as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>
                    <a href="del/{{$item->id}}" class="btn btn-outline-danger">Delete</a>
                </td>
            </tr>
            @endforeach
            
        </table>
    </div>
</div>