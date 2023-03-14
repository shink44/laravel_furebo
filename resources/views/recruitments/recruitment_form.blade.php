@extends('layouts.app')
 
 @section('content')
 <div style="margin: 60px 250px 10px 250px">
    <img src="{{asset('img/apexlogo.jpg')}}" width="68">&emsp;Apex Legends エーペックスレジェンズ
    <p class="description">
      ・こちらのサイトはフレンドや境遇の仲間を集めるサイトとしてご利用してください。<br>
      ※当サイトは出会い系目的や暴言等を書き込むサイトではございません。<br>
      ご利用の際は上記の内容をきちんとお守りください。
   </p>

    <div class="inquiry">・お問い合わせは
      <a href="">こちら</a>
    </div>
    <div class="improvement">※改善点や希望などは上記まで</div>
    <div class="registration">
      <p>・当サイトは簡易的なユーザー登録要素もあります。<br>
      &emsp;登録を行う事で登録したID（ゲームIDなど）を元に投稿時の打ち込み要素を簡素化できます。<br>
      &emsp;※尚、登録には個人情報などは必要ありません。
      </p>
    </div>



<!-- 別機種サイトへのリンク -->

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <a class="btn mt-3 d-flex justify-content-center border border-dark furebo-PC" href="">
        PC
      </a>
    </div>
    <div class="col-md-4 text-center">
      <a class="btn mt-3 d-flex justify-content-center border border-dark furebo-PS4PS5" href="">
        PS4/PS5
      </a>
    </div>
    <div class="col-md-4">
       <a class="btn mt-3 d-flex justify-content-center border border-dark furebo-XboxOne" href="">
         XboxOne
       </a>
    </div>
  </div>
</div>



<!-- 書き込み一覧 -->

<form method="POST" action="{{ url('/create') }}">
  @csrf
  <div class="list">
        <div class="model_name">機種名:
          <select name="model_name">
            <option value="" disabled selected style='display:none;'>機種名を選択してください</option>
            <option value="PC">PC</option>
            <option value="PS4/PS5">PS4/PS5</option>
            <option value="XboxOne">XboxOne</option>
          </select>
        </div>
        <div class="game_mode">ゲームモード:
          <select name="game_mode">
          <option value="" disabled selected style='display:none;'>モードを選択してください</option>
            <option value="バトルロイヤル">バトルロイヤル</option>
            <option value="アリーナ">アリーナ</option>
            <option value="プライベートマッチ">プライベートマッチ</option>
            <option value="射撃訓練場">射撃訓練場</option>
          </select>
        </div>
        <div class="rank">マッチング:
          <select name="rank">
          <option value="" disabled selected style='display:none;'>マッチングを選択してください</option>
            <option value="カジュアル">カジュアル</option>
            <option value="ランクリーグ">ランクリーグ</option>
          </select>
        </div>
        <div class="purpose">目的要素:
          <select name="purpose">
          <option value="" disabled selected style='display:none;'>目的を選択してください</option>
            <option value="フレンド">フレンド</option>
            <option value="協力">協力</option>
            <option value="対戦">対戦</option>
         </select>
        </div>
        <div class="applicant">募集人数:
          <select name="applicant">
          <option value="" disabled selected style='display:none;'>募集人数を選択してください</option>
            <option value="1人">1人</option>
            <option value="2人">2人</option>
          </select>
        </div>
        <div class="game_id">ゲーム ID:
		        <input type="text" name="game_id" size="28" placeholder="PlayStation IDをお書きください">     
	      </div>
        <div class="discord_id">Discord ID:
		        <input type="text" name="discord_id" size="28" placeholder="Discord IDをお書きください">     
	      </div>
        <div class="content">
		        <label>内容：</label>
		        <textarea name="content" placeholder="募集内容をお書きください"></textarea>
	      </div>
	      <button type="submit" class="btn btn-secondary shadow button">
            書き込む
        </button>
        <p class="period">※投稿内容は3日後に自動削除されます</p>
    </div>
  </div>
</form>


<hr>
@endsection

