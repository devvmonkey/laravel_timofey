 @extends('layouts.admin')

@section('content')




    <main id="main">

            <div class="panel2">
                <h3>Все панели</h3>
<ul class="adm_menu">
@foreach($panels as $panel) 
                <li><a href="/panel/{{ $panel->id }}">{{ $panel->title }}</a></li>

            
@endforeach
</ul>

            </div>
</main>
@endsection


