<?php defined('IN_IA') or exit('Access Denied');?><div ng-controller="richTextCtrl">
	<?php  if($_GPC['iseditor']) { ?>
	<!--富文本-->
	<div class="app-richText-edit">
		<div class="arrow-left"></div>
		<div class="app-header-setting-new-inner">
			<div class="panel panel-default">
				<div class="panel-body form-horizontal">
					<div class="form-group">
						<label class="col-xs-3 control-label">背景颜色</label>
						<div class="col-xs-9 ">
							<div class="input-group">
								<div ng-my-colorpicker ng-my-color="activeItem.params.bgColor" ng-my-default-color="'#ffffff'"></div>
							</div>
						</div>
					</div>
					<!--div class="form-group">
						<label class="col-xs-3 control-label">是否全屏</label>
						<div class="col-xs-9">
							<label for="fullScreen" class="checkbox-inline">
								<input id="fullScreen" name="fullScreen" type="checkbox">全屏显示
							</label>
						</div>
					</div-->
					<div class="form-group">
						<div class="col-xs-12">
							<div ng-my-editor ng-my-value="activeItem.params.content"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!--end富文本-->
	<?php  } else { ?>
	<!--富文本-->
	<div class="app-richText" ng-style="{'background-color' : module.params.bgColor}">
		<div class="inner" ng-bind-html="module.params.content" ng-if="module.params.content"></div>
		<div class="inner js-default-content" ng-if="!module.params.content">
			<p>点此编辑『富文本』内容 ——&gt;</p>
			<p>
				你可以对文字进行
				<strong>加粗</strong>、<em>斜体</em>、<span style="text-decoration: underline;">下划线</span>、
				<span style="text-decoration: line-through;">删除线</span>、文字<span style="color: rgb(0, 176, 240);">颜色</span>、
				<span style="background-color: rgb(255, 192, 0); color: rgb(255, 255, 255);">背景色</span>、
				以及字号<span style="font-size: 20px;">大</span><span style="font-size: 14px;">小</span>等简单排版操作。
			</p>
			<p>还可以在这里加入表格了</p>
			<table class="table-bordered">
				<tbody>
					<tr>
						<td>中奖客户</td>
						<td>发放奖品</td>
						<td>备注</td>
					</tr>
					<tr>
						<td>猪猪</td>
						<td>内测码</td>
						<td><em><span class="red">已经发放</span></em></td>
					</tr>
					<tr>
						<td>大麦</td>
						<td>积分</td>
						<td><a href="#" target="_blank">领取地址</a></td>
					</tr>
				</tbody>
			</table>
			<p style="text-align: left;"><span style="text-align: left;">也可在这里插入图片、并对图片加上超级链接，方便用户点击。</span></p>
		</div>
	</div>
	<!--end富文本-->
	<?php  } ?>
</div>