<h1>
    欢迎:
    <?php
    $user = $this->session->userdata('user');
//    将 'user' 键值对应的项赋值给 $user 变量
    echo $user->name
    ?>
</h1>