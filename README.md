<h2>介绍</h2>
<p>学习使用  slim微型框+Mysql数据库  架构最简易项目代码结构。


<h2>安装</h2>
<p>使用 克隆或直接下载项目到本地</p>

<p>git checkout https://github.com/FrankLee33/slim-mvc-example.git</p>
<p>在根目录下使用命令行执行下面代码，安装php 依赖的模块</p>

<p>composer install</p>
<p>在根目录下找到create.sql文件，导入到你的MySQL数据库中</p>

<p>修改app/config.php文件,根据上一步的数据库信息，修改数据库连接</p>
<pre>
// 修改数据库连接地址
'db' => array(
  'server' => 'localhost',
  'name' => 'test',
  'username' => 'root',
  'password' => 'root',
),
</pre>
<h2>启动项目</h2>

<p>php -S localhost:3000 -t ./public </p>
