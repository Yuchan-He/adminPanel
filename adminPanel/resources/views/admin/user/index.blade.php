
@extends('admin.common.main')

@section('css')
<link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/css/style.css" />
@endsection

@section('content')

<!-- エラー情報の表示 -->
@include('admin.common.msg')
<div class="page-container">
	<form method="get" class="text-c">		
		<input type="text" class="input-text" style="width:250px" placeholder="ユーザー名の一部を入力" name="kw" value = "{{$kw}}" autocomplete="off">
		<button type="submit" class="btn btn-success"  name=""><i class="Hui-iconfont">&#xe665;</i> ユーザー検索</button>
	</form>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> 
		<span class="l">
			<a href="{{route('admin.user.create')}}"  class="btn btn-primary radius">
				<i class="Hui-iconfont">&#xe600;</i> ユーザー追加
			</a>
		</span> 
	</div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr class="text-c">
				<th width="140">ユーザー名</th>
				<th width="120">携帯</th>
				<th width="80">性別</th>
				<th width="130">登録時間</th>
				<th>編集</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $value)
			<tr class="text-c">	
				@if(auth() -> guard('admin')-> id() != $value -> id)
				<td>{{$value -> username}}</td>
				<td>{{$value -> mobile}}</td>
				@if($value -> sex==1)
					<td>女性</td>
				@elseif($value -> sex==2)
					<td>男性</td>
				@else
					<td>秘密</td>
				@endif
				<td>{{$value -> created_at}}</td>
				<td class="td-manage">
					<a title="編集" href="{{route('admin.user.edit',['id' => $value -> id])}}"  class="btn btn-success radius" style="text-decoration:none">
						<i class="Hui-iconfont">&#xe6df;</i>編集
					</a>			
					<a title="削除" href="{{route('admin.user.del',['id' => $value -> id])}}" class="ml-5 delbtn btn btn-warning radius" style="text-decoration:none">
						<i class="Hui-iconfont">&#xe6e2;</i>削除
					</a>
					@endif
				</td>
			</tr>
			@endforeach
			
		</tbody>
	</table>
	<!-- ページ数を設定する -->
	{{$data -> links()}}
</div>
@endsection
@section('js')
<script type="text/javascript" src="/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">

// ユーザー追加のtoken csrfを追加
const _token = "{{csrf_token()}}";
/*ユーザー追加*/
// function user_add(title,url,w,h){
// 	layer_show(title,url,w,h);
// }

// ajaxを通して、deleteのリクエストを送る
$('.delbtn').click(function(evt) {
	// リクエストのurlを取得する
	let url = $(this).attr('href');

	$.ajax({
		url,
		data:{_token},
		type:'DELETE',
		dataType:'json'
	}).then(({status,msg}) => {
		if(status == 0) {
			// 削除成功メッセージ
			layer.msg(msg,{time:2000,icon:2},() => {
			// view中行を削除
			$(this).parents('tr').remove();			
			});
		}
	});

	// ディフォルト事件はhref画面に戻す、この事件をキャンセル
	return false;
});

</script>

@endsection