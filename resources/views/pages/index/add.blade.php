<div class="card">
    <div class="card-header">
      New Task
    
    {{-- Kiểm tra nếu có session save_success thì hiển thị ra thông báo lưu thành công --}}
    @if (session()->has('save_success'))
        <div class="alert alert-success">
            {{ session()->get('save_success') }}
        </div>
    @endif

    {{-- Kiểm tra nếu có session save_not_success thì hiển thị ra thông báo lưu không thành công --}}
    @if (session()->has('save_not_success'))
        <div class="alert alert-error">
            {{ session()->get('save_not_success') }}
        </div>
    @endif
    
    </div>
    <div class="card-body">
        <div class="mb-3">
            <form action="create" method="POST" enctype="multipart/form-data">
                @csrf
                <label class="form-label">Task</label>
                <input type="text" class="form-control" name="task" id="task" value=""><br>
                <button type="submit" class="btn btn-outline-primary"><i class="bi bi-plus"> </i>Add Task</button>
            </form>

            @if (count($errors) > 0)
                @foreach ($errors->all() as $msg)
                    <p style="color: red">{{$msg}}</p>
                @endforeach
            @endif
        </div>
    </div>
</div>