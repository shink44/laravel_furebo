
<!-- 投稿フォーム -->


@include("recruitments.recruitment_form")

<div style="margin: 10px 230px 10px 230px">
<h2>募集一覧</h2>

@foreach ($recruitments as $recruitment)
<div class="entry__sheet">
	<p class="mona">{{ $recruitment->model_name }}</p>
	<div>
		{{ $recruitment->game_mode }}
	</div>
	<div>
		{{ $recruitment->rank }}
	</div>
	<div>
		{{ $recruitment->purpose }}
	</div>
	<div>
		{{ $recruitment->applicant }}
	</div>
	<div>
		{{ $recruitment->game_id }}
	</div>
	<div>
		{{ $recruitment->discord_id }}
	</div>
	<div>
		{{ $recruitment->content }}
	</div>
</div>
@endforeach

@if(isset( $recruitments ))
@endif
@if(count($recruitments) < 1)
<p>投稿がありません</p>
@endif