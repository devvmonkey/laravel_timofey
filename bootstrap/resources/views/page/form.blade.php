{!! csrf_field() !!}

 
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">

  <label for="title" class="control-label">
    Название
  </label>

  <input type="text"
         name="title"
         id="title"
         value="{{ old('title', @$page->title) }}"
         placeholder="title"
         required
         class="form-control">

  @if ($errors->has('title'))
    <div class="help-block">
      {{ $errors->first('title') }}
    </div>
  @endif
</div>

<div class="form-group">

  <label for="game" class="control-label">
    Игра
  </label>


         
<select id="game" name="game" class="form-control" required>
  <option selected="{{ old('game', @$page->game) }}">{{ old('game', @$page->game) }}</option>
  <option value="dota">dota</option>
  <option value="fortnite">fortnite</option>
  <option value="csgo">csgo</option>
  <option value="pubg">pubg</option>
</select>
</div>

<div class="form-group">

  <label for="status" class="control-label">
    Статус
  </label>


         
<select id="status" name="status" class="form-control" required>
  <option selected="{{ old('status', @$page->status) }}">{{ old('status', @$page->status) }}</option>
  <option value="Прошедший">Прошедший</option>
  <option value="Предстоящий">Предстоящий</option>
  <option value="Активный">Активный</option>
</select>
</div>

<div class="form-group">

  <label for="format" class="control-label">
    Формат
  </label>


         
<select id="format" name="format" class="form-control" required>
  <option selected="{{ old('format', @$page->format) }}">{{ old('format', @$page->format) }}</option>
  <option value="2x2">2x2</option>
  <option value="3x3">3x3</option>
  <option value="4x4">4x4</option>
  <option value="5x5">5x5</option>
  <option value="6x6">6x6</option>
  <option value="7x7">7x7</option>
  <option value="8x8">8x8</option>
  <option value="9x9">9x9</option>

</select>
</div>

<div class="form-group">

  <label for="format_desc" class="control-label">
    Формат описание
  </label>

<select id="format_desc" name="format_desc" class="form-control" required>
  <option selected="{{ old('format_desc', @$page->format_desc) }}">{{ old('format_desc', @$page->format_desc) }}</option>
  <option value="Double Elimination">Double Elimination</option>
</select>

</div>

<div class="form-group ">

  <label for="prizes" class="control-label">
    Призы
  </label>

  <input type="text"
         name="prizes"
         id="prizes"
         value="{{ old('prizes', @$page->prizes) }}"
         placeholder="prizes"
         required
         class="form-control">
</div>

<div class="form-group ">

  <label for="start_at" class="control-label">
    Начало
  </label>

  <input type="datetime-local"
         name="start_at"
         id="start_at"
         value="{{ old('start_at', @$page->start_at) }}"
         placeholder=""
         required
         class="form-control">
</div>

<div class="form-group ">

  <input type="text"
         name="changed_by"
         id="changed_by"
         value="{{ Auth::user()->name }}"
         placeholder=""
         required
         class="form-control" style="display:none;">

</div>

<div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">

  <label for="content" class="control-label">
    Описание
  </label>

      <textarea
          name="content"
          id="content"
          placeholder="content"
          required
          class="form-control">{{ old('content', @$page->content) }}</textarea>

  @if ($errors->has('content'))
    <div class="help-block">
      {{ $errors->first('content') }}
    </div>
  @endif
</div>



<div class="form-group">
  <button type="submit" class="btn btn-success">Сохранить</button>
  <a href="/page" class="btn btn-default">Назад к списку</a>
</div>
<script>
$( document ).ready(function() {
$("select").removeClass("select-hidden");
$("div").removeClass("select");
$(".select-styled").hide();
});
</script>

