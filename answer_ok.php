<?php
include "connect.php"; 
include 'inc_head.php';

//각 변수에 post.php로부터 input name값들을 저장
$post_id = $_GET['post_id'];
$author = $_POST['author'];
$content = $_POST['acontent'];
$date = $_POST['currentDatetime'];

$query = "INSERT INTO answers (post_id, author, content, date) VALUES ('$post_id', '$author', '$content', '$date')";

if($conn->query($query) === TRUE){
    echo "<script> alert('답변 등록 완료!'); location.href='post.php?post_id=" . $question['id'] . "';</script>";
    // 등록한 질문글 볼 수 있는 페이지로 이동
} else {
    echo "<script> alert('남은 항목을 기입해주세요.'); history.back();</script>"; // 실패시 다시 복귀
}

$conn->close();

?>



