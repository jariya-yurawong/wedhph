<!DOCTYPE html>
<html>
    <head>
<title>การสร้างฟอร์มด้วย HTML</title>
<meta charset="UTF-8">
<meta name="viewport"content="width=device-width,initial-scale=1.0">
<link rel ="stylesheet" type="text/css"href="mystyle.css">
</head>
<body>
    <h1>Form สมัครสมาชิก</h1>
    กรุณากรอกข้อมูล
    <br>
    <br>
    <form>
    คำนำหน้าชื่อ : <input list="title"><br>
    <datalist id = "title">
        <option>นาย</option>
        <option>น.ส.</option>
        <option>นาง</option>
    </datalist>
    ชื่อ :<input type="text" value="xx" required/autofcus><br>
    <label for ="male">ชาย</label>
    <input type="radio" name="gender" value="ชาย">
    <label for ="female">หญิง</label>
    <input type="radio" name="gender" value="หญิง"><br>
    รหัสผ่าน:<input type="password"value=""/><br>
    เบอร์โทร:<input type="text"value=""/placeholder="0xx-xxx-xxxx"><br>
    ค้นหา : <input type="search" value=""/><br>
    E-mail :<input type="email" value=""name="email"/><br>
    วันเกิด: <input type="time" value=""/><br>
    เวลาเกิด : <input type="" value=""/><br>
    อายุ: <input type="number" value=""/><br>
    <select name ="education">
            <option value="ปริญญาตรี">ปริญญาตรี</option>
            <option value="ปริญญาโท">ปริญญาโท</option>
        </select><br>
    สีที่ชอบ:<input type="color"value=""/><br>
    <progress value="20" max="100"></progress><br>
    <textarea rows="4" cols="30" placeholder="แสดงความคิดเห็น"></textarea><br>
    <input type="checkbox" name="accept" value="yes">ยอมรับเงื่อนไข<br>
    <input type="checkbox" name="subscribe" value= "no">ติดตามข่าวสาร<br>
    <input type="submit" value="สมัคร"/>
    <input type="reset" value="ยกเลิก"/>
    </form>
    </body>
</html>