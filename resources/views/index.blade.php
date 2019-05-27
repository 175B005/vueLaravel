<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>他:他</title>
</head>
<body>
    <form method="post">
        {{ csrf_field() }}
        <input style="width:400px; height:160px" name="contents">
	<input style="width:300px; height:30px" name="writelineTags"
		placeholder="「,」で区切って、タグ付けする(上限5コ)">
        <button>投稿</button>
    </form>
    @foreach ($twiite as $tw)
    <p>{{ $tw->contents }}</p>
    @endforeach
</body>
</html>
