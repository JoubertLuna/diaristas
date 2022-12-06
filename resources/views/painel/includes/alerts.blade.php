    @if ($errors->any())
        <div class="card-body">
            <div class="alert alert-dark">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        </div>
    @endif

    @if (session('success'))
        <div class="card-body">
            <div class="alert alert-primary">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="card-body">
            <div class="alert alert-dark">
                {{ session('error') }}
            </div>
        </div>
    @endif

    @if (session('danger'))
        <div class="card-body">
            <div class="alert alert-danger">
                {{ session('danger') }}
            </div>
        </div>
    @endif
