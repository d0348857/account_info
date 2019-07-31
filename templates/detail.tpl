<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>
    <body class="container col-6 ">
        <table class="table table-striped ">
            <tr>
                <th>帳號</th>
                <td>{$data['account']}</td>
            </tr>
            <tr>
                <th>姓名</th>
                <td>{$data['name']}</td>
            </tr>
            <tr>
                <th>性別</th>
                <td>{$data['gender']}</td>
            </tr>
            <tr>
                <th>生日</th>
                <td>{$data['birth']}</td>
            </tr>
            <tr>
                <th>信箱</th>
                <td>{$data['mail']}</td>
            </tr>
            <tr>
                <th>備註</th>
                <td><textarea readonly=true style='width:200px;height:80px;resize:none' >{$data['remark']}</textarea></td>
            </tr>
            
        </table>
    
        <a href='index.php?page=1&sort=id'><button type='submit' class="btn btn-primary ">首頁</button></a>
        <a href='update.php?id={$data["id"]}'><button type='submit' class="btn btn-secondary">更改</button></a>
        <a href='delete.php?id={$data["id"]}'><button type='submit' class="btn btn-secondary" onclick="confirmDelete(event)">刪除</button></a>
    
    
        <script>
            function confirmDelete(e) {
                if (!confirm('確定刪除?')) {
                    e.preventDefault();
                }
            }
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>


