![niRvana](http://s-sh-4619-blog.oss.dogecdn.com/screenshot.png)

# typecho-theme-niRvana

[niRvana-Theme](https://github.com/michaelliunsky/niRvana-theme) 的 typecho 移植版

# 关于

typecho-Theme-niRvana 移植自 WordPress 版 niRvana 主题。

## 项目状态

目前没有精力维护移植版，只维护 Wordpress 版本。Wordpress 的新功能将不会来到 typecho 版本，只进行必要的 BUG 修复。~~（很少用 typecho）~~

欢迎提交 Pull Request 贡献/移植新功能/修复 BUG。

# 安装

环境要求：**PHP8.3 兼容最佳**
在 [Release](https://github.com/michaelliunsky/typecho-theme-niRvana/releases) 页面下载 .zip 文件，上传到/usr/themes 并解压缩，在 typecho 后台找到外观并启用本主题。

# typecho 版相比 Wordpress 版

- 保留了 Wordpress 版的大部分特性
- 相同的界面
- 暂时不支持多语言（欢迎 PR）
- 目前暂不支持评论

# 使用

### 设置教程

#### 后台设置

![settings](http://s-sh-4619-blog.oss.dogecdn.com/settings.png)

#### 搜索页面

使用区域：右上角搜索按钮

请按照如下固定格式配置即可

![so](http://s-sh-4619-blog.oss.dogecdn.com/so.png)

#### 图标格式

使用区域：猜你喜欢、分类菜单、顶栏菜单

    icon font_family icon-表上内容

![icon](http://s-sh-4619-blog.oss.dogecdn.com/icon.png)

#### 猜你喜欢

使用区域：后台设置 - 相关文章

    <div class="relate-posts clearfix"><div class="post-model"><i class="far fa-star"></i>标题</div><div class="posts clearfix">内容</div></div>

# 更新日志

## 20240310 v1.2

- **修复**：代码高亮
- **新增**：文章内 css 美化

## 20240303 v1.1

- 适配**PHP8.3**
- 文章封面图支持**自动获取**
- 代码全部**格式化**
- **感谢 typecho.work 对本主题的贡献**

## 20230822 v1.0

- 新主题发布

# 捐赠

如果你觉得 niRvana 主题不错，可以请我一杯咖啡来支持我的开发。
![微信捐赠码](http://s-sh-4619-blog.oss.dogecdn.com/wechat.jpg)
![支付宝捐赠码](http://s-sh-4619-blog.oss.dogecdn.com/alipay.jpg)
