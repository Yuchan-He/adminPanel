@extends('admin.common.main')

@section('content')

<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 管理項目 <span class="c-gray en">&gt;</span> 役割管理 <span class="c-gray en">&gt;</span>　役割編集 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="更新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<article class="page-container">
	<form action="{{route('admin.role.update',['id' => $model ->id])}}" method="post" class="form form-horizontal" id="form-admin-role-add">
		<!-- 提出方法を設定する-->
		@method('PUT')
		@csrf
		<!-- エラー情報の表示 -->
		@include('admin.common.validate')
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>役割名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" id="roleName" name="roleName" value="{{$model -> roleName}}">
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius updated" type="submit" value="&nbsp;&nbsp;更新&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>

@endsection

@section('js')
<script type="text/javascript" src="/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/localization/messages_ja.js"></script>
<script type="text/javascript">

$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});

// $('.updated').click(function(evt) {
// 	var index = parent.layer.getFrameIndex(window.name);
// 	// console.log(index);
// 	parent.layer.close(index);
// 	// parent.location.reload();	
// });
	
// 	$("#form-member-add").validate({
// 		rules:{
// 			username:{
// 				required:true,
// 				minlength:2,
// 				maxlength:16
// 			},
// 			sex:{
// 				required:true,
// 			},
			
// 			mobile:{
// 				required:true,
// 				IsMobile:true,
// 			},
// 			email:{
// 				required:true,
// 				email:true,
// 			},	
// 			spassword:"required",
// 			password_confirmation:{
// 					equalTo: "#password"
// 			}
				
// 		},
		
// 		messages:{
// 			username:{
// 				required:'ユーザー名をご入力ください'
// 			},
// 		},
// 		// 取消键盘事件
// 		onkeyup:false,
// 		focusCleanup:true,

// 		success:"valid",

// 		submitHandler:function(form){

// 			form.submit();

// 		}
// 	});
// });
// // 自分が設定電話ルール
// $.validator.addMethod("IsMobile",function(value,element){
// 	var tel = /^0[789]0-[0-9]{4}-[0-9]{4}$/;
// 	return this.optional(element) || (tel.test(value));
// },"XXX-XXXX-XXXX形式で入力してください");

</script> 

@endsection