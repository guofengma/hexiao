<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>编辑更新课程信息</title>
    <script src="jquery.min.js"></script>
</head>
<body>

<center>
    <form method="post" action="<?php echo U(CourseTeacher/editCourse);?>">
        <h1 style="margin-top:200px">编辑更新课程信息</h1>
        <table>
            <tr>
                <td>课程信息</td>
            </tr>
            <tr>
                <td>课程unique_id：</td>
                <td><input type="text" name="course_name" value="0"></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;课程原名称：</td>
                <td><input type="text" name="discribe" value="30分钟学会弹钢琴"></td>
            </tr>
            <tr>
                <td>课程修改后名称：</td>
                <td><input type="text" name="course_name" value="test30分钟学会弹钢琴"></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;课程简介：</td>
                <td><input type="text" name="discribe" value="零基础也 能轻轻松松完整谈曲子"></td>
            </tr>
            <tr>
                <td>预约单位：</td>
                <td><input type="text" name="unit" value="课"></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;课程详情：</td>
                <td><input type="text" name="content" value="商品详情"></td>
            </tr>
            <tr>
                <td>课程标签：</td>
                <td><input type="text" name="tag" value="弹钢琴"></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;课程类型：</td>
                <td><input type="text" name="type" value="钢琴"></td>
            </tr>
            <tr>
                <td>提前预约时间：</td>
                <td><input type="text" name="advance" value="7"></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;课程展示图：</td>
                <td><input type="text" name="main_img_url" value="http://cms.joyfamliy.com/Data/UploadFiles/literature/product-class@14.jpg"></td>
            </tr>
            <tr>
                <td><input type="submit" value="下一步"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>