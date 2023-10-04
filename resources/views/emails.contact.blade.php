<!DOCTYPE html>
<html>
<head>
    <title>Thông báo liên hệ từ website</title>
</head>
<body>
    <h1>Xin chào,</h1>
    <p>Bạn đã nhận được một tin nhắn từ liên hệ:</p>
    <p><strong>Tên:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Số điện thoại:</strong> {{ $data['phone'] }}</p>
    <p><strong>Thông tin:</strong> {{ $data['message'] }}</p>
</body>
</html>
