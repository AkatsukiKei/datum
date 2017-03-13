<!DOCTYPE html>
<html>
<head>
  <title>new document</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>

<body>
  <h2>菜单</h2>
  1---红烧肉
  <br />
  2---西红柿鸡蛋
  <br />
  3---粉蒸肉
  <br />
  4---羊肉泡馍
  <br />
  <div style=" color:red;">
  <?php
    $number = rand(1,5);
    switch ($number){
      case 1:
        echo "你随机选择了红烧肉，请慢用";
        break;
      case 2:
        echo "你随机选择了西红柿鸡蛋，请慢用";
        break;
      case 3:
        echo "你随机选择了粉蒸肉，请慢用";
        break;
      case 4:
        echo "你随机选择了羊肉泡馍，请慢用";
        break;
      default:
        echo "不好意思，您没有选到任何菜，忍一下吧";
        break;
    }
  ?>
  </div>
</body>
</html>