
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>網頁前端範例</title>
</head>
<body>
<h1>網頁前端範例</h1>

<?php
    /**
     * 取得當前目錄下所有 .html 檔案名稱的函數
     *
     * @return array 包含所有 .html 檔案名稱的陣列，如果沒有找到則返回空陣列。
     */
    function getHtmlFileNames() {
        // 取得當前腳本所在的目錄路徑
        $current_dir = __DIR__;

        // 使用 glob 函數來尋找匹配特定模式的檔案路徑。
        // {*.html} 是模式，GLOB_BRACE 旗標允許使用 {} 來匹配多個模式，
        // 但在只需要匹配 .html 的情況下，可以簡化為 "*.html"。
        // 這裡我們直接使用 "*.html" 來匹配所有以 .html 結尾的檔案。
        $html_files = glob("*.html");

        // glob 函數返回的是完整或相對路徑的陣列。
        // 在當前目錄下，它通常返回檔案名稱。
        return $html_files;
    }

    // 呼叫函數並取得結果
    $html_file_list = getHtmlFileNames();

    $html = "<ul>";
    if (!empty($html_file_list)) {
        // 輸出找到的檔案名稱
        foreach ($html_file_list as $file) {
            $html = $html . "<li><a href='{$file}' target='_blank'>{$file}</a></li>";
        }
    }
    $html = $html . "</ul>";
    echo $html;
?>

</body>
</html>

