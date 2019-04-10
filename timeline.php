<!-- mylo carson 2019-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Timeline</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/newtm.css">
</head>
<body class="">
    <div class="container-fluid">

        <div class="row">

        <!-- Sidebar Starts -->
        <div class="col-sm-3 side-info p-4">
          <div class="logo-area mb-5 mx-4">
            <img src="assets/img/zikilogo.png" alt="" class="logo" />
          </div>

          <div class="profile-pic-area mx-auto mt-5">
            <img src="assets/img/dp.png" alt="" class="profile-pic" />
          </div>

          <div class="personal-info text-center ">
            <h1>Tamz Hallz</h1>
            <div class="font-weight-bold skillset">
              UI/UX Designer | Content Designer | Product Newbie
            </div>
            <div class="shortbio">
              I'm kinda weird in a good way..... I design for survival
            </div>
          </div>

          <div class="sidebar-icons text-center my-3">
            <a href="https://github.com"><i class="fab fa-github social"></i></a>
            <a href="https://dribble.com"><i class="fab fa-dribbble social"></i></a>
            <a href="https://rss.com"><i class="fas fa-rss social"></i></a>
          </div>

          <ul class="nav flex-column p-5 my-5 text-center">
            <li class="nav-item">
              <a class="nav-link" href="#">My Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Insights</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/user-profile-setting.php">Settings</a>
            </li>
          </ul>
        </div>
        <!-- Sidebar Ends -->
            <div class="col-md-9">
            <div class="row justify-content-end">
            <a href="/auth.php" class="btn align-self-end px-5 font-weight-bold"
              >Log out</a
            >
          </div>

                <!-- Post Box Begins -->
                <div class="mx-auto mt-5 mb-2 px-5">
                    <div class="post-box p-2">
                        <form method="POST" action="post.php">
                        <div class="form-group px-3">
                            <textarea
                            name="body"
                            id=""
                            rows="3"
                            class="editable medium-editor-textarea form-control post-text"
                            placeholder="What's Happening"
                            ></textarea>
                            <div class="toolbars row my-4 ">
                            <div class="col">
                                <img src="assets/img/timeline_icons/type.png" alt="" />
                                <img src="assets/img/timeline_icons/italic.png" alt="" />
                                <img
                                src="assets/img/timeline_icons/attachment2.png"
                                alt=""
                                />
                                <img src="assets/img/timeline_icons/underline.png" alt="" />
                                <img src="assets/img/timeline_icons/bold.png" alt="" />
                            </div>
                            <div class="col text-right">
                                <img
                                src="assets/img/timeline_icons/attachment.png"
                                alt=""
                                />
                                <img
                                src="assets/img/timeline_icons/attachment2.png"
                                alt=""
                                />
                                <img src="assets/img/timeline_icons/mic.png" alt="" />
                                <button type="submit" class="btn btn-publish">
                                Publish
                                </button>
                            </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>


                    <!-- Feature not needed now
                        <div class="row mx-0 d-flex flex-row align-items-center  justify-content-between">
                        <div class="col-md-8 line ml-md-5"></div>
                        <div class="col d-inline-flex mr-md-5 flex-row justify-content-between">
                            <p class="post-filter"><span class="post-filter-title">Sort by:</span> Most Recent Posts</p>
                            <img src="assets/img/caret.svg">
                        </div>
                    </div> -->

                    <div class="post-section"></div>
                <!-- </div> -->

            </div>

        </div>

    </div>

    <script>
    const toggleThemeBtn = document.querySelector('.toggle-theme');
    toggleThemeBtn.addEventListener('click', e => document.querySelector('body').classList.toggle('dark'));
    </script>
</body>
</html>
