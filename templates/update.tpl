<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head> 
<body class="container col-6 ">
    
    <form action='update2.php'>
        <table class="table table-striped ">
            <tr>
                <th>ID</th>
                <td><textarea name='id' readonly=true style='width:30px;height:30px;resize:none' >{$data['id']}</textarea></td>
            </tr>
            <tr>
                <th>帳號</th>
                <td><input type='text' name='account' value='{$data["account"]}'></td>
            </tr>
            <tr>
                <th>姓名</th>
                <td><input type='text' name='name' value='{$data["name"]}'></td>
            </tr>
            <tr>
                <th>性別</th>
                <td><input type='text' name='gender' value='{$data["gender"]}'></td>
            </tr>
            <tr>
                <th>生日</th>
                <td><input type='text' name='birth' value='{$data["birth"]}'></td>
            </tr>
            <tr>
                <th>信箱</th>
                <td><input type='text' name='mail' value='{$data["mail"]}'></td>
            </tr>
            <tr>
                <th>備註</th>
                <td><textarea name='remark' style='width:200px;height:80px;resize:none' >{$data['remark']}</textarea></td>
            </tr>
                    
        </table>
        
        <button type='submit' class="btn btn-primary">確認更改</button>
    </form>

    <a href='index.php'><button type='submit' class="btn btn-secondary ">返回</button></a>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
   
</body>
</html>