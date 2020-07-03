@extends('layouts.main')

@section('body-config')
ondragstart="return false;" ondrop="return false;" style="width:100%;"
@endsection

@section('content')
<div class="background-no-game">
    <div class="container">
        @foreach ($balances as $balance)
            <div class="" style="color: white;">
                <span>
                    {{ $balance }}
                </span>
            </div>
        @endforeach
        {{ $balances->links() }}
    </div> 
</div>

<script>

</script>

 @endsection