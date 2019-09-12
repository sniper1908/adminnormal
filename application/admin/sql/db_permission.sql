
CREATE TABLE `db_permission` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `permission_name` varchar(30) NOT NULL DEFAULT '' COMMENT '权限名称',
  `permission_name_code` varchar(30) NOT NULL DEFAULT '' COMMENT '权限名称代码',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '父级id',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COMMENT='网站权限列表';

INSERT INTO `db_permission` VALUES 
(1,'权限管理','permission_manage',0,1),
(2,'模块管理','modular_manage',0,2),
(3,'网站设置','system_set',0,3),
(4,'内容管理','article_manage',0,4),

(7,'管理员添加/编辑','admin_add_edit',1,6),
(8,'删除管理员','admin_remove_back',1,7),
(9,'权限添加/编辑','permission_add_edit',1,1),
(10,'权限删除','permission_remove_back',1,2),
(11,'角色添加/编辑','role_add_edit',1,3),
(12,'角色删除','role_remove_back',1,4),
(13,'分配权限','role_permission',1,5),
(14,'管理日志列表','adminlog_list',1,6),
(15,'管理日志删除','adminlog_remove',1,7),

(16,'模块添加/编辑','modular_add_edit',2,1),
(17,'模块删除','modular_remove_back',2,2),

(18,'网站设置','shop_config_set',3,1),
(21,'友情链接管理','friend_link_manage',3,6),
(22,'数据备份','data_backup_manage',3,8),
(23,'数据恢复','data_return_manage',3,9),
(24,'自定义导航栏','custom_nav_bar',3,11),

(25,'文章分类管理','article_cat_manage',4,1),
(26,'文章内容管理','article_content_manage',4,2),
(27,'文章自动发布','article_auto_publish',4,3);


(5,'模板管理','template_manage',0,5),
(6,'报表统计','chart_manage',0,6),
(19,'邮件服务器设置','email_smtp_set',3,4),
(20,'地区列表管理','area_list_manage',3,5),
