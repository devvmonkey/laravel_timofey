 {!! csrf_field() !!}


<div class="row">
<div class="col-sm-3">
</div>
<div class="col-sm-6">
            <h1 style="color:white; font-size:33px; margin:0; margin-bottom:30px; text-align:center;">Добавление панели</h1>
</div>
<div class="col-sm-3">
</div>
</div>
<div class="row">
<div class="col-sm-3" ><h2 style="color:white; margin:0; ">Имя</h2></div>
<div class="col-sm-6">
            
            <input type="text"
	 name="title"
	 id="title">
</div>
</div>
<div class="row" style="margin-top:3rem;">
<div class="col-sm-4">
</div>
<div class="col-sm-4">
	<button type="submit" class="btn full-width">Добавить</button>
	<input type="text" name="p_u_id" value="{{ Auth::user()->id }}" style="display:none">
        </div>
<div class="col-sm-4">
</div>

</div>

</div>
</div>
