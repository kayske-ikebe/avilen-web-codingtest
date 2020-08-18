<?php
$endpoint = explode('/', $_SERVER['PATH_INFO'])[1];
if($endpoint=="start"){
    include("index.html");
    exit;
}

if($endpoint=="api"){
    $file = "out.txt";
    // header("Content-Type: text/javascript; charset=utf-8");

    // ここに処理を記述してください。
    // 受け取る
    // $post_data = isset($_POST['pattern']) ? $_POST['pattern'] : null;
    // $json_string = new object;
    // $json_string = file_get_contents("php://input");
    // $json_string = $pattern;
    file_put_contents($file, $_POST["obj"]);
    
    $objjson = json_decode($json_string);
    // $ah = $objjson;
    
    // 処理する

    // 返す
    // header("Content-Type: text/javascript; charset=utf-8");
    $data = array(
        "data" => "1, 3, Fizz",
        // "data" => $ah,
    );
    $json = json_encode($data);
    // $json = json_encode($pattern);
    print $json;
    // echo "$pattern["num"][0]";
    exit;
}

?>