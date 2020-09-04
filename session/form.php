<!DOCTYPE html>
<html>
...
<body>
<div class="container col-4">
    <h1 class="text-center">登录表单</h1>
    <?php if (!empty($error)): ?>
    <div class="alert alert-danger" role="alert">
        <?= $error ?>
    </div>
    <?php endif; ?>
    <form method="post" action="login.php">
        <!-- name form input -->
        <div class="form-group">
            <label for="name">用户名</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="password">密码</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">登录</button>
    </form>
</div>
</body>
</html>