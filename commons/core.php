<?php

// Kết nối CSDL qua PDO
function connectDB() {
    // Kết nối CSDL
    $host = DB_HOST;
    $port = DB_PORT;
    $dbname = DB_NAME;

    try {
        $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", DB_USERNAME, DB_PASSWORD);

        // cài đặt chế độ báo lỗi là xử lý ngoại lệ
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // cài đặt chế độ trả dữ liệu
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
        return $conn;
    } catch (PDOException $e) {
        echo ("Connection failed: " . $e->getMessage());
    }
}
function uploadFile($file, $folderUpload){
    $pathStorage =$folderUpload.time() .$file['name'];
    $from=$file['tmp_name'];
    $to=PATH_ROOT .$pathStorage;
    if(move_uploaded_file($from,$to)){
        return $pathStorage;
    }
    return null;

}
function removeFirstChar($str) {

    if (strlen($str) > 0) {
        return substr($str, 1); 
    }
    return $str; // Trả lại chuỗi gốc nếu chuỗi rỗng
}
function deleteFile($file){
    $pathStorage= PATH_ROOT .$file;
    if(file_exists($pathStorage)){
        unlink($pathStorage);
    }
}
// xoa session sau khoi load trang 
function deleteSessionError(){
    if(isset($_SESSION['flash'])){
        // huy session sau khi tai trang 
        unset($_SESSION['flash']);
        unset($_SESSION['error']);
        // session_unset();
        // session_destroy();
    }
}

//uploads file album anh
function uploadFileAlbum($file, $folderUpload, $key){
    $pathStorage =$folderUpload.time() .$file['name'][$key];
    $from=$file['tmp_name'][$key];
    $to=PATH_ROOT .$pathStorage;
    if(move_uploaded_file($from,$to)){
        return $pathStorage;
    }
    return null;

}
function formatDate($date){
    return date("d-m-Y", strtotime($date));
}
function checkLoginAdmin(){
    if(!isset($_SESSION['user_admin'])){
        header("Location: " . BASE_URL_ADMIN . '?act=show-login-form');
        exit();
    }
}
function formatPrice($price){
    return number_format($price, 0, ',', '.');
}


?>