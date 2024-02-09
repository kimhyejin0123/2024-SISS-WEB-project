<?php
    include "connect.php"; 
    include "inc_head.php";

    if(isset($_GET['post_id'])){
        $post_id = $_GET['post_id']; 
    }
    
    $loginID = $_SESSION['userID'];

    $sql = "SELECT * FROM question WHERE id='$post_id'";
    $result = $conn->query($sql);
    if (!$result) {
        // 쿼리 수행 중 오류가 발생한 경우
        die("Query failed: " . $conn->error);
        //에러문 확인 가능 (에러 나서 필요했다)
    }
    $question = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>숙명 지식IN</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/noonsong.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link href="css\post.css" rel="stylesheet" />

    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">숙명 지식IN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="write.php">질문하기</a></li>
                        <li class="nav-item"><a class="nav-link" href="mypage.php">마이페이지</a></li>
                        <?php 
                            if($jb_login) {
                                
                        ?>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="logout.php">로그아웃</a></li>
                        <?php 
                            } else {
                        ?>
                            <li class="nav-item"><a class="nav-link active" 
                        aria-current="page" href="login-regist.php">로그인</a></li>
                        <?php 
                            }
                        ?> 
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">숙명 지식IN </h1>
                    <p class="lead mb-0">새송이들을 구원할 숙명여대 백과사전</p>
                </div>
            </div>
        </header>
        <!-- Page content-->

            <div class="row">
                <!-- 질문글 (좌측)-->
                <div class="col-lg-8">
                    <div class="row">
                        <!--목록으로 수정한 곳-->
                        <div class="question_post">
                            <h1> Q. <?php echo $question['title']; ?></h1>
                            <hr>
                            <div class="question_content"> 
                                <?php echo $question['content']; ?>
                            </div> <!-- 크기 설정합시다  -->
                            <div class="question_footer">
                                <!-- 그외 정보 footer -->
                                <div><?php echo $question['author']; ?> </div>
                                <div> <?php echo $question['date']; ?> </div>
                                <div> # <?php echo $question['hashtag']; ?></div>
                            </div>
                            <div class="question_edit"> 
                            <button> <a href="edit.php?post_id=<?php echo $id ?>"> 수정 </a> </button>
                            <button> <a href="delete.php?post_id=<?php echo $id ?>">삭제</a></button>
                        </div>
                        </div>
                    </div>
                    
                </div>
                <!-- 답변글 (우측)-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">답변글 작성자</div>
                        <div class="card-body">
                            <div class="answer_content">답변 내용</div>
                        </div>
                        <hr>
                        <div class="answer_footer">  
                            <!-- 그외 정보 footer -->
                            <div>작성자 이름 </div>
                            <div> 날짜 </div>
                            <div>#해시태그</div>
                        </div>
                        <div class="answer_edit"> 
                            <!-- 작성자와 name이 다르다면 버튼 숨기기 -->
                            <button> <a href="edit.php?post_id=<?php echo $id ?>"> 수정 </a> </button>
                            <button> <a href="delete.php?post_id=<?php echo $id ?>"> 삭제 </a> </button>
                        </div>
                    </div>
                    
                    <!-- Side widget (혹시 몰라서 남겨둠)
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                    -->
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; SOOKMYUNG SISS: Jisoo Kim & Hyejin Kim</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
