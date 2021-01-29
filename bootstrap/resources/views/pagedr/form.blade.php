{!! csrf_field() !!}

<div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">

  <label for="url" class="control-label">
    Изображение
  </label>

  <input type="text"  
         name="url"
         id="url"
         value="{{ old('url', @$pagedr->url) }}"
         placeholder="url"
         required
         class="form-control">

  @if ($errors->has('url'))
    <div class="help-block">
      {{ $errors->first('url') }}
    </div>
  @endif
</div>
 
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">

  <label for="title" class="control-label">
    Название
  </label>

  <input type="text"
         name="title"
         id="title"
         value="{{ old('title', @$pagedr->title) }}"
         placeholder="title"
         required
         class="form-control">

  @if ($errors->has('title '))
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
  <option selected="{{ old('game', @$pagedr->game) }}">{{ old('game', @$pagedr->game) }}</option>
  <option value="dota">dota</option>
  <option value="fortnite">fortnite</option>
  <option value="csgo">csgo</option>
  <option value="pubg">pubg</option>
</select>
</div>

<div class="form-group">

  <label for="format" class="control-label">
    Формат
  </label>


         
<select id="format" name="format" class="form-control" required>
  <option selected="{{ old('format', @$pagedr->format) }}">{{ old('format', @$pagedr->format) }}</option>
  <option value="6x6">6x6</option>
  <option value="2x2">2x2</option>
  <option value="5x5">5x5</option>
</select>
</div>

<div class="form-group">

  <label for="format_desc" class="control-label">
    Формат описание
  </label>

<select id="format_desc" name="format_desc" class="form-control" required>
  <option selected="{{ old('format_desc', @$pagedr->format_desc) }}">{{ old('format_desc', @$pagedr->format_desc) }}</option>
  <option value="Double Elimination">Double Elimination</option>
</select>

</div>

<div class="form-group ">

  <label for="prizes" class="control-label">
    Название
  </label>

  <input type="text"
         name="prizes"
         id="prizes"
         value="{{ old('prizes', @$pagedr->prizes) }}"
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
         value="{{ old('start_at', @$pagedr->start_at) }}"
         placeholder=""
         required
         class="form-control">
</div>

<div class="form-group ">

  <label for="end_at" class="control-label">
    Конец
  </label>

  <input type="datetime-local"
         name="end_at"
         id="end_at"
         value="{{ old('end_at', @$pagedr->end_at) }}"
         placeholder=""
         required
         class="form-control">

  <input type="text"
         name="edited_by"
         id="edited_by"
         value="{{ old('edited_by', @Auth::user()->name) }}"
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
          class="form-control">{{ old('content', @$pagedr->content) }}</textarea>

  @if ($errors->has('content'))
    <div class="help-block">
      {{ $errors->first('content') }}
    </div>
  @endif
</div>



<div class="form-group">
  <button type="submit" class="btn btn-success">Сохранить</button>
  <a href="/pagedr" class="btn btn-default">Назад к списку</a>
</div>

