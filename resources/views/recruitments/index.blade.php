
<!-- 投稿フォーム -->


@include("recruitments.recruitment_form")

<h2>募集一覧</h2>

@foreach ($recruitments as $recruitment)
<div class="entry">
	<h5>{{ $Recruitment->model_name }}</h5>
	<div>
		{{ $Recruitment->game_mode }}
	</div>
</div>
@endforeach

@if(isset( $recruitments ))
@endif
@if(count($recruitments) < 1)
<p>投稿がありません</p>
@endif