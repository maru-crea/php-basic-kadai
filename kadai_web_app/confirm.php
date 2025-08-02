<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>確認画面</title>
</head>
<body>
    <h1>入力内容をご確認ください。</h1>
    <table border="1" cellpadding="8">
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <td>社員名</td>
            <td><?php echo htmlspecialchars($_POST['employee_name'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><?php echo htmlspecialchars($_POST['employee_age'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
            <td>所属部署</td>
            <td><?php echo htmlspecialchars($_POST['department'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
    </table>

    <form action="complete.php" method="post" style="margin-top:20px;">
        <!-- 入力情報をhiddenで引き継ぐ -->
        <input type="hidden" name="employee_name" value="<?php echo htmlspecialchars($_POST['employee_name'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="employee_age" value="<?php echo htmlspecialchars($_POST['employee_age'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="department" value="<?php echo htmlspecialchars($_POST['department'], ENT_QUOTES, 'UTF-8'); ?>">
        <input type="submit" value="確定">
    </form>

    <form action="form.php" method="post" style="margin-top:10px;">
        <input type="submit" value="キャンセル">
    </form>
</body>
</html>