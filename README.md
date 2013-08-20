Apple风格wp主题:HotNewsPro
来源: 网络 | 作者: 知更鸟 

HotNews pro 2.2版
新版功能简介:

A.为适应不同用户的需求，此版集成自动截图功能。
B.增加对Wordpress 3.0+版自定义菜单功能的支持。
C.添加IE浏览器下，导航文字浮雕效果。
D.删除一上版对登录窗口的美化，添加前台直接登录功能。
E.为顶部热点文章缩略图添加圆角及标题滑动显示效果。
F.增加置顶文章提示图片。
G.为底部热门标签增加彩色效果。
H.侧边添加读者墙模块。
I.增强主题SEO功能。
J.美化了一下回复按钮，

一、启用新版主题前，需删除之前的版本，并先启用Wordpress 3.0默认主题，再启用2.2版主题，否则可能会提示错误，原因就是大部分具有后台控制功能的主题之间可能会产生冲突。
二、可以通过主题控制面板选择是否开启自动截图功能，自动截图不支持外链图片，但可以通过添加自定义域屏蔽自动截图，并支持外链图片，不开启自动截图功能时，保留随机缩略图功能。顶部热点文章缩略图自定义域为：image，主体部分和相关日志缩略图为：thumbnail。开启自动截图功能，需保证主题目录中cache文件夹权限在；755以上。
三、主题拥有两个自定义菜单，可以分别应用在顶部导航及页角。
四、默认启用IE浏览器下，导航文字浮雕效果。需要注意的是导航自定义菜单字数不可太长，否则会错位，如果需要可以在后台主题控制面板中选择关闭此特效。
五、顶部热点文章缩略图尺寸要求宽度大于236px,高度随意。
六、启用主题后，需到主题控制面板中进行相关设置并保存。一定不要忘了在SEO设置中，输入首页网站描述及关键字，否则可能会影响网站收录。
七、主题可以更换Gravatar默认头像，需到WP后台评论设置中选择自定义头像，否则当留言者无头像时，头像处可能会是空白，当然也可以选择WP默认头像。
最后说一下分类图标设置：
这次为大家提供了50几个各类小图标，将下载的压缩包解压，里面有两个文件：HotNewspro22.zip和caticon.zip。
首先，将分类图标压缩包caticon.zip解压，上传到空间Wordpress程序的wp-content文件夹中。
之后，登录网站后台，在分类设置页面，分别修改各分类的缩略名为小图标图片的名称，比如：cat_ico1、cat_ico2、cat_ico3等，某个分类决定使用哪个图标就修改缩略名为图标的名称。
最后，在主题控制面板中，选择启用分类图标功能，即可。







之前发布的HotNews1.0主题只是当初的练习作品，需手动修改模板才能正常使用，对一些新手而言使用难度不小，有网友要求分享也就发布了。经过一段时间使用，修正了部分BUG，也添加了不少功能。为了方便用户使用，在原1.0版基础上重写了大部分代码，增设多达十几项的主题设置面板，实现功能模块化，不启用某项功能，也不会影响到整体布局及其它功能。由于功能的逐步强化，所以直接跳到2.0,并更名为HotNews Pro（热点新闻专业版）。新版主题几乎无需手动修改模板文件就可以正常使用，新添加的随机缩略图功能，也一定程度上减小了发日志时添加缩略图的繁琐，只要找一些与博客内容相关的图片，放到相应的文件夹中，缩略图就会在每次刷新后随机变幻。
2.0版无需任何插件，就可以实现全功能使用。唯一推荐安装的是单篇日志统计插件WP-PostViews，WP为什么不集成该项功能，也是最让国人不理解的一个问题，道理很简单，国外博主对国人关心的点击率不是很在意，他们更注重沟通或者自娱自乐，没有国人这么强的虚荣心，所以记数功能可能永远也不会集成到WordPress程序中，当然不安装该插件也不会影响正常使用。

主题功能简介：
1.全功能的主题后台控制面板，各项功能模块化，无需任何插件；
2.摒弃1.0使用timthumb.php函数自动截图功能（无法使用外链图片），首页缩略图自定义字段为：thumbnail，顶部热点文章图片为：image；
3.增设默认缩略图随机显示功能，不添加自定义字段也不会让页面显得单调；
4.分类图标功能（默认不显示），图片格式为.png,大小40*40,将主题包中的caticon文件夹上传到\wp-content目录中，后台设置修改各分类别名（英文），并将自己找到的心仪图片（png）名称修改为各分类的别名，然后上传到caticon目录中，后台设置显示分类图标即可；
5.首页可以选择是否显示缩略图，如果不显示则首页取消文字截断，并显示全文。
6.图片延迟加载功能（默认开启），据说可以提高页面打开速度，如果认为相反可以关闭该功能；
7.默认显示博客标题及副标题，可以后台设置显示LOGO,另附LOGO源文件，主题支持IE6 png透明图片；
8.无需插件显示相关日志及缩略图（默认不显示缩略图）和随机日志；
9.登录后侧边显示站点管理面板，方便直接跳转到WordPress后台相应功能；
10.侧边集成最新日志、最热文章、最新评论功能，并支持自定义小工具；
11.后台添加订阅代码，方便浏览者订阅；
12.后台添加博客统计代码，无需手动修改模板，为博客添加统计；
13.集成分页功能，wp-pagenavi分页插件也可以删除了。
14.替换WordPress默认登录界面；
15.调用WP默认表情（默认不显示），方便在留言中加入表情；
16.替换avatar默认头像，可以到后台讨论设置选项中设置。
17.网站SEO设置（默认未开启），这是唯一需手动修改模板的功能，打开主题includes文件夹中的seo.php模板文件，将“你的首页描述”和“你首页关键字”修改为自己的内容；
18.最后一个需说明的是底部分类显示，如果你的博客分类比较多，可能会撑破模板，解决办法是，在角页剔除部分分类，打开footer.php文件定位到，在exclude=后面添加准备剔除的分类ID,格式为exclude=1,23,225，逗号为英文标点。

注：使用或修改主题请保留页角作者链接，谢谢合作！