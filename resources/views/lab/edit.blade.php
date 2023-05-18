@extends('layouts.app')

@section('content')
    
<section class="container" >

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                </div>

                <div class="card-body">

    <h2 class="text-light bg-success text-center">Edit PC form</h2>
    <form method="POST" action="{{ route('computer.update', $computer->id) }}">
        @method('patch')
        @csrf
        <div class="form-group">
            <label for="pcname">PC Name</label>
            <input value="{{ $computer->pcname }}" type="text" name="pcname" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="pcserial_number">PC Serial Number</label>
            <input  value="{{ $computer->pcserial_number }}" type="text" name="pcserial_number" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="pc_lab">PC Lab</label>
            <select name="pc_lab" class="form-control" required>
                <option value="{{ $computer->pc_lab }}">{{ $computer->pc_lab }}</option>
                <option value="lab 1">Lab 1</option>
                <option value="lab 2">Lab 2</option>
                <option value="lab 3">Lab 3</option>
                <option value="lab 4">Lab 4</option>
                <option value="lab 5">Lab 5</option>
                <option value="lab 6">Lab 6</option>
                <option value="lab 7">Lab 7</option>
            </select>
        </div>
        
        
        <div class="form-group">
            <label for="pc_status">PC Status</label>
            <input value="{{ $computer->pc_status }}"  type="text" name="pc_status" class="form-control" required>
        </div>
        
        
        
        <div class="modal-footer">
            <button type="submit" class="btn btn-danger">Cancel</button>
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>

</div>
</div>
</div>
</div>
</section>
@endsection