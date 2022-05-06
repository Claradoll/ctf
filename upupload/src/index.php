<title>正面上传我啊</title>
<img src="lai.jpg">
<form method="POST" enctype="multipart/form-data" action="upload.php" onsubmit="return checkFile()">
    <input type="file" name="image" />
    <input type="submit" name="btn" value="upload" />
</form>


<script type="text/javascript">
    function checkFile() {
        var file = document.getElementsByName('image')[0].value;
        if (file == null || file == "") {
            alert("请选择要上传的文件!");
            return false;
        }
        //定义允许上传的文件类型
        var allow_ext = ".jpg|.png|.gif";
        //提取上传文件的类型
        var ext_name = file.substring(file.lastIndexOf("."));
        //判断上传文件类型是否允许上传
        if (allow_ext.indexOf(ext_name) == -1) {
            var errMsg = "你想干什么？";
            alert(errMsg);
            return false;
        }
    }
</script>
</body>
</html>
