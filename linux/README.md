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