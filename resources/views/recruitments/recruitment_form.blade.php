@extends('layouts.app')
 
 @section('content')
<form method="post" action="{{ url('/create') }}">
	@csrf
    
<div class="container">
	<div>
        <p>機種名:
        <select name="model_name" placeholder="機種名を選択してください">
            <option value="値">PC</option>
            <option value="値">PS4/PS5</option>
            <option value="値">XboxOne</option>
        </select>
        </p>
	</div>

	<div>
        <p>ゲームモード:
        <select name="game_mode" placeholder="機種名を選択してください">
            <option value="値">バトルロワイヤル</option>
            <option value="値"></option>
            <option value="値"></option>
        </select>
        </p>
	</div>
	</div>

    <div>
		<label>目的要素:</label>
		<select>
            <option>フレンド</option>
            <option>協力</option>
            <option>対戦</option>
        </select>
        <br>
	</div>



    <div>
		<label>ゲームID:</label>
		<input type="text" placeholder="PlayStation IDをお書きください">
        <br>
	</div>

    <div>
		<label>内容：</label>
		<textarea></textarea>
        <br>
	</div>

	<input type="submit" value="書き込む"> 
</div>
</form>
@endsection