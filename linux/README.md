#### Linux空闲等待时间

在`/etc/profile`中设置TMOUT

```shell
export TMOUT=900    # 设置900秒内用户无操作就字段断开终端
readonly TMOUT      # 将值设置为readonly 防止用户更改
```

logout后重新登录有效

#### vim中tab修改为4个空格

修改`/etc/vimrc`文件

```shell
set ts=4
set expandtab
set autoindent
```

#### Xshell连接后无法使用数字键盘

修改Xshell配置

文件->属性->终端->终端类型

xterm改为linux

#### Nginx + uWSGI + Django

pip安装django和uwsgi

修改nginx.conf

```shell
upstream django {
	server 127.0.0.1:8001; # for a web port socket
}

server {
    listen       80;
    server_name  localhost;

    location / {
    	root   /var/www/html;  # your html path
    	index  index.html index.htm;
    }

	# 注意这里的/api，是前端请求的格式，urls.py中要设置成相同的格式
	# 前端请求： http://localhost/api/test
	# urls.py： url(r'^api/test',test.views)
    location /api {
    	proxy_pass   http://django;
    }
}

```

启动uwsgi

```shell
uwsgi --http :8001 --file /your/wsgi.py/path/wsgi.py
```

