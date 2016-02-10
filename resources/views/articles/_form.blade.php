<div class="form-group">
    <label for="title">Title:</label>
    <input type="text" name="title" class="form-control" value="{{isset($article) ? $article->title : '' }}">
</div>

<div class="form-group">
    <label for="body">Body:</label>
    <textarea name="body" rows="8" cols="40" class="form-control">{{isset($article) ? $article->body : ''}}</textarea>
</div>

<div class="form-group">
    <label for="published_at">Publish On:</label>
    <input type="date" name="published_at" class="form-control" value="{{date('Y-m-d')}}">
</div>

<div class="form-group">
    <input type="submit" value="{{$submitButtomText}}" class="btn btn-primary form-control">
</div>
