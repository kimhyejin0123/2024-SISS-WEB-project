<?php 
    include "connect.php";
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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="login-regist.php">로그인</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="logout.php">로그아웃</a></li>
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
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->

                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <!--목록으로 수정한 곳-->
                        <div class="board_list_wrap">
                            <div class="board_list">
                                <div class="top">
                                    <div class="num">번호</div>
                                    <div class="title">제목</div>
                                    <div class="field">카테고리</div>
                                    <div class="answer">답변 수</div>
                                    <div class="date">작성일자</div>
                                </div>
                                <div>
                                    <div class="num">1</div>
                                    <div class="title"><a href="#">글 제목이 들어갑니다.</a></div>
                                    <div class="field">교내생활</div>
                                    <div class="answer">0</div>
                                    <div class="date">2024.01.19</div>
                                </div>
                                <div>
                                    <div class="num">2</div>
                                    <div class="title"><a href="#">글 제목이 들어갑니다.</a></div>
                                    <div class="field">교내생활</div>
                                    <div class="answer">0</div>
                                    <div class="date">2024.01.19</div>
                                </div>
                                <div>
                                    <div class="num">3</div>
                                    <div class="title"><a href="#">글 제목이 들어갑니다.</a></div>
                                    <div class="field">교내생활</div>
                                    <div class="answer">0</div>
                                    <div class="date">2024.01.19</div>
                                </div>
                                <div>
                                    <div class="num">4</div>
                                    <div class="title"><a href="#">글 제목이 들어갑니다.</a></div>
                                    <div class="field">교내생활</div>
                                    <div class="answer">0</div>
                                    <div class="date">2024.01.19</div>
                                </div>
                                <div>
                                    <div class="num">5</div>
                                    <div class="title"><a href="#">글 제목이 들어갑니다.</a></div>
                                    <div class="field">교내생활</div>
                                    <div class="answer">0</div>
                                    <div class="date">2024.01.19</div>
                                </div>
                                <div>
                                    <div class="num">6</div>
                                    <div class="title"><a href="#">글 제목이 들어갑니다.</a></div>
                                    <div class="field">교내생활</div>
                                    <div class="answer">0</div>
                                    <div class="date">2024.01.19</div>
                                </div>
                                <div>
                                    <div class="num">7</div>
                                    <div class="title"><a href="#">글 제목이 들어갑니다.</a></div>
                                    <div class="field">교내생활</div>
                                    <div class="answer">0</div>
                                    <div class="date">2024.01.19</div>
                                </div>
                                <div>
                                    <div class="num">8</div>
                                    <div class="title"><a href="#">글 제목이 들어갑니다.</a></div>
                                    <div class="field">교내생활</div>
                                    <div class="answer">0</div>
                                    <div class="date">2024.01.19</div>
                                </div>
                                <div>
                                    <div class="num">9</div>
                                    <div class="title"><a href="#">글 제목이 들어갑니다.</a></div>
                                    <div class="field">교내생활</div>
                                    <div class="answer">0</div>
                                    <div class="date">2024.01.19</div>
                                </div>
                                <div>
                                    <div class="num">10</div>
                                    <div class="title"><a href="#">글 제목이 들어갑니다.</a></div>
                                    <div class="field">교내생활</div>
                                    <div class="answer">0</div>
                                    <div class="date">2024.01.19</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true"><<</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">10</a></li>
                            <li class="page-item"><a class="page-link" href="#!">>></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">검색</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="검색어를 입력하세요.." aria-label="검색어를 입력하세요.." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">카테고리</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">교내생활</a></li>
                                        <li><a href="#!">전공</a></li>
                                        <li><a href="#!">진로</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">학식</a></li>
                                        <li><a href="#!">학사/행정</a></li>
                                        <li><a href="#!">수업</a></li>
                                    </ul>
                                </div>
                            </div>
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
