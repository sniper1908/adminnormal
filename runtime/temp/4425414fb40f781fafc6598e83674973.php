<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:79:"D:\phpStudy\WWW\adminnormal\public/../application/admin\view\modular\index.html";i:1552103660;s:69:"D:\phpStudy\WWW\adminnormal\application\admin\view\layout\layout.html";i:1537319633;s:69:"D:\phpStudy\WWW\adminnormal\application\admin\view\layout\header.html";i:1553479369;s:66:"D:\phpStudy\WWW\adminnormal\application\admin\view\layout\nav.html";i:1540169717;s:73:"D:\phpStudy\WWW\adminnormal\application\admin\view\layout\breadcrumb.html";i:1537322472;s:69:"D:\phpStudy\WWW\adminnormal\application\admin\view\layout\footer.html";i:1545879240;}*/ ?>

<!DOCTYPE html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <meta charset="UTF-8">
    <title><?php echo $title; ?> -- <?php echo \think\Config::get('admin_system.name'); ?></title>
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="../static/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../static/vendor/bootstrap/css/fileinput.css">
    <link rel="stylesheet" href="../static/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../static/vendor/linearicons/style.css">
    <link rel="stylesheet" href="../static/vendor/chartist/css/chartist-custom.css">
    <link rel="stylesheet" href="../static/vendor/css/form_validation.css">
    <link rel="stylesheet" href="../static/vendor/css/icons.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../static/admin/css/main.css">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="../static/admin/css/demo.css">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="../static/admin/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../static/admin/img/favicon.png">
</head>
    
<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="index.html"><img src="../static/admin/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                </div>
                <!-- <form class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" value="" class="form-control" placeholder="Search dashboard...">
                        <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
                    </div>
                </form> -->
                <!-- <div class="navbar-btn navbar-btn-right">
                    <a class="btn btn-success update-pro" href="#downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
                </div> -->
                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="lnr lnr-alarm"></i>
                                <span class="badge bg-danger">5</span>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
                                <li><a href="#" class="more">See all notifications</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Basic Use</a></li>
                                <li><a href="#">Working With Data</a></li>
                                <li><a href="#">Security</a></li>
                                <li><a href="#">Troubleshooting</a></li>
                            </ul>
                        </li> -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../static/admin/img/user.png" class="img-circle" alt="Avatar"> <span>管理员：<?php echo $sessionAdmin['admin_username']; ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <!-- <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                                <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
                                <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li> -->
                                <li><a href="<?php echo url('login/logout'); ?>"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a class="update-pro" href="#downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->


        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="<?php echo url('index/index'); ?>" class='<?php if(request()->controller() == 'Index'): ?>active<?php endif; ?>'><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                        <?php if(!(empty($menu) || (($menu instanceof \think\Collection || $menu instanceof \think\Paginator ) && $menu->isEmpty()))): if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
                        <li>
                            <a href="#sub<?php echo $value['modular_name_code']; ?>" data-toggle="collapse" class='collapsed <?php if(in_array((request()->controller()), is_array($value['controller_name_str'])?$value['controller_name_str']:explode(',',$value['controller_name_str']))): ?>active<?php endif; ?>'><i class="<?php echo $value['modular_icon']; ?>"></i> <span><?php echo $value['modular_name']; ?></span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="sub<?php echo $value['modular_name_code']; ?>" class="collapse ">
                                <ul class="nav">
                                    <?php if(!(empty($value['children']) || (($value['children'] instanceof \think\Collection || $value['children'] instanceof \think\Paginator ) && $value['children']->isEmpty()))): if(is_array($value["children"]) || $value["children"] instanceof \think\Collection || $value["children"] instanceof \think\Paginator): $i = 0; $__LIST__ = $value["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                                    <li><a href="<?php echo url($val['modular_controller'].'/'.$val['modular_action']); ?>" class=''><?php echo $val['modular_name']; ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                </ul>
                            </div>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                        <!-- <li>
                            <a href="#subRbac" data-toggle="collapse" class='collapsed <?php if(in_array((request()->controller()), explode(',',"Permission,Role,Admin,AdminLog"))): ?>active<?php endif; ?>'><i class="fa fa-cog"></i> <span>权限管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subRbac" class="collapse ">
                                <ul class="nav">
                                    <li><a href="<?php echo url('permission/index'); ?>" class=''>权限列表</a></li>
                                    <li><a href="<?php echo url('permission/add'); ?>" class="">添加权限</a></li>
                                    <li><a href="<?php echo url('role/index'); ?>" class=''>角色列表</a></li>
                                    <li><a href="<?php echo url('role/add'); ?>" class="">添加角色</a></li>
                                    <li><a href="<?php echo url('admin/index'); ?>" class=''>管理员列表</a></li>
                                    <li><a href="<?php echo url('admin/add'); ?>" class="">添加管理员</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#subModular" data-toggle="collapse" class="collapsed <?php if(in_array((request()->controller()), explode(',',"Modular"))): ?>active<?php endif; ?>"><i class="fa fa-table"></i> <span>模块管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subModular" class="collapse ">
                                <ul class="nav">
                                    <li><a href="<?php echo url('modular/index'); ?>" class=''>模块列表</a></li>
                                    <li><a href="<?php echo url('modular/add'); ?>" class="">添加模块</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#subSite" data-toggle="collapse" class="collapsed <?php if(in_array((request()->controller()), explode(',',"WebsiteSet"))): ?>active<?php endif; ?>"><i class="fa fa-pencil"></i> <span>网站设置</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subSite" class="collapse ">
                                <ul class="nav">
                                    <li><a href="<?php echo url('admin/index'); ?>" class=''>权限列表</a></li>
                                    <li><a href="<?php echo url('admin/add'); ?>" class="">添加权限</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#subUsers" data-toggle="collapse" class="collapsed <?php if(in_array((request()->controller()), explode(',',"User"))): ?>active<?php endif; ?>"><i class="lnr lnr-user"></i> <span>会员管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subUsers" class="collapse ">
                                <ul class="nav">
                                    <li><a href="<?php echo url('user/index'); ?>" class=''>会员列表</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#subGoods" data-toggle="collapse" class="collapsed <?php if(in_array((request()->controller()), explode(',',"Goods,GoodsCat"))): ?>active<?php endif; ?>"><i class="fa fa-tasks"></i> <span>商品管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subGoods" class="collapse ">
                                <ul class="nav">
                                    <li><a href="<?php echo url('goods/index'); ?>" class=''>商品列表</a></li>
                                    <li><a href="<?php echo url('goods/add'); ?>" class="">添加商品</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#subArticles" data-toggle="collapse" class="collapsed <?php if(in_array((request()->controller()), explode(',',"Article,ArticleCat"))): ?>active<?php endif; ?>"><i class="fa fa-bars"></i> <span>内容管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subArticles" class="collapse ">
                                <ul class="nav">
                                    <li><a href="<?php echo url('article_cat/index'); ?>" class=''>分类列表</a></li>
                                    <li><a href="<?php echo url('article_cat/add'); ?>" class="">添加分类</a></li>
                                    <li><a href="<?php echo url('article/index'); ?>" class="">文章列表</a></li>
                                    <li><a href="<?php echo url('article/add'); ?>" class="">添加文章</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#subAds" data-toggle="collapse" class="collapsed <?php if(in_array((request()->controller()), explode(',',"Ads,Advertising"))): ?>active<?php endif; ?>"><i class="fa fa-star"></i> <span>广告管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subAds" class="collapse ">
                                <ul class="nav">
                                    <li><a href="<?php echo url('advertising/index'); ?>" class=''>广告位列表</a></li>
                                    <li><a href="<?php echo url('advertising/add'); ?>" class="">添加广告位</a></li>
                                    <li><a href="<?php echo url('ads/index'); ?>" class=''>广告列表</a></li>
                                    <li><a href="<?php echo url('ads/add'); ?>" class="">添加广告</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#subPromotion" data-toggle="collapse" class="collapsed <?php if(in_array((request()->controller()), explode(',',"Promotion"))): ?>active<?php endif; ?>"><i class="fa fa-exchange"></i> <span>促销管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPromotion" class="collapse ">
                                <ul class="nav">
                                    <li><a href="<?php echo url('admin/index'); ?>" class=''>促销列表</a></li>
                                    <li><a href="<?php echo url('admin/add'); ?>" class="">添加促销</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#subPlugs" data-toggle="collapse" class="collapsed <?php if(in_array((request()->controller()), explode(',',"Plugs"))): ?>active<?php endif; ?>"><i class="fa fa-plug"></i> <span>插件工具</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPlugs" class="collapse ">
                                <ul class="nav">
                                    <li><a href="<?php echo url('admin/index'); ?>" class=''>插件列表</a></li>
                                    <li><a href="<?php echo url('admin/add'); ?>" class="">添加插件</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#subWechat" data-toggle="collapse" class="collapsed <?php if(in_array((request()->controller()), explode(',',"Wechat"))): ?>active<?php endif; ?>"><i class="fa fa-wechat"></i> <span>微信管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subWechat" class="collapse ">
                                <ul class="nav">
                                    <li><a href="<?php echo url('admin/index'); ?>" class=''>权限列表</a></li>
                                    <li><a href="<?php echo url('admin/add'); ?>" class="">添加权限</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#subOrders" data-toggle="collapse" class="collapsed <?php if(in_array((request()->controller()), explode(',',"Orders"))): ?>active<?php endif; ?>"><i class="fa fa-flag"></i> <span>订单管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subOrders" class="collapse ">
                                <ul class="nav">
                                    <li><a href="<?php echo url('orders/index'); ?>" class=''>订单列表</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#subTemplates" data-toggle="collapse" class="collapsed <?php if(in_array((request()->controller()), explode(',',"Templates"))): ?>active<?php endif; ?>"><i class="fa fa-book"></i> <span>模板管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subTemplates" class="collapse ">
                                <ul class="nav">
                                    <li><a href="<?php echo url('admin/index'); ?>" class=''>PC端模板</a></li>
                                    <li><a href="<?php echo url('admin/add'); ?>" class="">手机端模板</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#subCharts" data-toggle="collapse" class="collapsed <?php if(in_array((request()->controller()), explode(',',"Charts"))): ?>active<?php endif; ?>"><i class="fa fa-bar-chart"></i> <span>报表统计</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subCharts" class="collapse ">
                                <ul class="nav">
                                    <li><a href="<?php echo url('admin/index'); ?>" class=''>统计列表</a></li>
                                    <li><a href="<?php echo url('admin/add'); ?>" class="">添加权限</a></li>
                                </ul>
                            </div>
                        </li> -->
                        <!-- <li><a href="elements.html" class=""><i class="lnr lnr-code"></i> <span>Elements</span></a></li>
                        <li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a></li>
                        <li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
                        <li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
                        <li>
                            <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPages" class="collapse ">
                                <ul class="nav">
                                    <li><a href="page-profile.html" class="">Profile</a></li>
                                    <li><a href="page-login.html" class="">Login</a></li>
                                    <li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
                        <li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
                        <li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li> -->
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
		<!-- Content -->
        <!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					
					 				<div class="row">
	 				<!-- Breadcrumb -->
	                <ol class="breadcrumb_customer hidden-xs">
	                    <li><a href="<?php echo url('index/index'); ?>">Home</a></li>
	                    
	                    <?php 
	                        if(!empty($breadcrumb)):
	                            foreach($breadcrumb as $v):
	                                if($v['url']):
	                                    echo '<li><a href="'.url($v['url']).'">'.$v['name'].'</a></li>';
	                                else:
	                                    echo '<li class="active">'.$v['name'].'</li>';
	                                endif;
	                            endforeach;
	                        endif;
	                     ?>
	                </ol>
	                
	                <h4 class="page-title_customer"><?php echo $title; ?></h4>
 				</div>
		        								<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<p class="panel-title pull-right">
										<a href="<?php echo url('add'); ?>?page=<?php echo $page; ?>"><span class="label label-primary">添加数据</span></a>
									</p>
                        			<div class="clearfix"></div>
								</div>
								<div class="panel-body">
									<form action="<?php echo url('delall'); ?>" method="post">
										<table class="table table-striped table-hover">
											<thead>
												<tr>
													<th><input type="checkbox" id="allChk"></th>
													<th>#</th>
													<th>模块名称</th>
													<th>所属模块</th>
													<th>排序数字</th>
													<th>菜单上显示</th>
													<th>是否关闭</th>
													<th>管理</th>
												</tr>
											</thead>
											<tbody>
												<?php if(is_array($listData) || $listData instanceof \think\Collection || $listData instanceof \think\Paginator): $i = 0; $__LIST__ = $listData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
												<tr>
													<td><input type="checkbox" name="delId[]" class="allChkVal" value="<?php echo $value['id']; ?>"></td>
													<td><?php echo $value['id']; ?></td>
													<td><?php echo $value['modular_name']; ?></td>
													<td><?php echo $value['parent_name']; ?></td>
													<td><?php echo $value['sort_order']; ?></td>
													<td><?php if($value['show_in_nav'] == 1): ?>是<?php else: ?>否<?php endif; ?></td>
													<td><?php if($value['is_lock'] == 1): ?>是<?php else: ?>否<?php endif; ?></td>
													<td><a href="<?php echo url('edit?id='.$value["id"]); ?>"><span class="label label-primary">编辑</span></a>  <a href="<?php echo url('del?id='.$value["id"]); ?>"><span class="label label-danger">删除</span></a></td>
												</tr>
												<?php if(!(empty($value['children']) || (($value['children'] instanceof \think\Collection || $value['children'] instanceof \think\Paginator ) && $value['children']->isEmpty()))): if(is_array($value['children']) || $value['children'] instanceof \think\Collection || $value['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $value['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
												<tr>
													<td><input type="checkbox" name="delId[]" class="allChkVal" value="<?php echo $val['id']; ?>"></td>
													<td><?php echo $val['id']; ?></td>
													<td><?php echo $val['modular_name']; ?></td>
													<td><?php echo $val['parent_name']; ?></td>
													<td><?php echo $val['sort_order']; ?></td>
													<td><?php if($val['show_in_nav'] == 1): ?>是<?php else: ?>否<?php endif; ?></td>
													<td><?php if($val['is_lock'] == 1): ?>是<?php else: ?>否<?php endif; ?></td>
													<td><a href="<?php echo url('edit?id='.$val["id"]); ?>"><span class="label label-primary">编辑</span></a>  <a href="<?php echo url('del?id='.$val["id"]); ?>"><span class="label label-danger">删除</span></a></td>
												</tr>
												<?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
											</tbody>
										</table>
										<div class="form-group">
				                            <div class="col-center-block">
				                                <button type="submit" class="btn btn-info btn-sm m-t-10">批量删除</button>
				                            </div>
				                        </div>
									</form>
								</div>
								<div class="panel-footer">
									
									<!-- 分页 -->
									<div class="media text-center">
										<?php echo $listData->render(); ?>
				                    </div>
				                    <!-- 分页结束 -->
				                    
								</div>
							</div>
							<!-- END TABLE HOVER -->
		        </div>
		        <!-- CONTAINER-FLUID END -->
		    </div>
		    <!-- MAIN-CONTENT END -->
        </div>
		<!-- END MAIN -->

    
        <div class="clearfix"></div>
        <footer>
            <div class="container-fluid">
                <p class="copyright">Copyright &copy; 2017.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
                
            </div>
        </footer>

    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <script src="../static/vendor/jquery/jquery.min.js"></script>
    <?php if(isset($isUpload)&&$isUpload==1): ?>
    <script src="../static/vendor/bootstrap/js/fileinput.js"></script>
    <script src="../static/vendor/bootstrap/js/fileinput_locale_zh.js"></script>
    <?php endif; ?>
    <script src="../static/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../static/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../static/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="../static/vendor/chartist/js/chartist.min.js"></script>
    <script src="../static/admin/js/klorofil-common.js"></script>
    <?php if($isForm == '1'): ?>
    <!--  Form Related -->
    <script src="../static/vendor/validation/validate.min.js"></script> <!-- jQuery Form Validation Library -->
    <script src="../static/vendor/validation/validationEngine.min.js"></script> <!-- jQuery Form Validation Library - requirred with above js -->
    <script src="../static/vendor/bootstrap/js/bootstrap-colorpicker.js"></script>
    <script src="../static/vendor/js/fileupload.min.js"></script> 
    <!-- File Upload -->
    <!-- Text Editor -->
    <script type='text/javascript' src='../static/vendor/kindeditor/kindeditor.js'></script>
    <script charset="utf-8" src="../static/vendor/kindeditor/lang/zh_CN.js"></script> 
    <script charset="utf-8" src="../static/vendor/kindeditor/plugins/code/prettify.js"></script> 
    <script type="text/javascript" src="../static/admin/js/<?php echo strtolower(request()->controller()); ?>/add.js"></script>
    <?php if(!in_array((request()->action()), explode(',',"add,edit"))): ?>
    <script type="text/javascript" src="../static/admin/js/<?php echo strtolower(request()->controller()); ?>/<?php echo strtolower(request()->action()); ?>.js"></script>
    <?php endif; endif; if($hasScript == '1'): ?>
    <script type="text/javascript" src="../static/admin/js/<?php echo strtolower(request()->controller()); ?>/<?php echo strtolower(request()->action()); ?>.js"></script>
    <?php endif; ?>
    <!-- All JS functions -->
    <script src="../static/admin/js/functions.js"></script>
</body>

</html>

