 {!! csrf_field() !!}



        <div class="dob_pan">
            <h1>Добавление панели</h1>
            <h2>Имя</h2>
            <input type="text"
	 name="title"
	 id="title"
	 value="{{ old('title', @$panel->title) }}">
	<button type="submit" class="btn btn-success">Добавить</button>
	<input type="text" name="p_u_id" value="{{ Auth::user()->id }}" style="display:none">
        </div>
