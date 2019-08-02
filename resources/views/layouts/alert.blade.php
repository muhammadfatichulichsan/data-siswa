@if (session('success'))
    <div class="alert alert-success">
    	<button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('success') }}
    </div>
@endif

@if (session('info'))
    <div class="alert alert-info">
    	<button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('info') }}
    </div>
@endif

@if (session('danger'))
    <div class="alert alert-danger">
        {{ session('danger') }}
        <button type="button" class="close" data-dismiss="alert">×</button>
    </div>
@endif