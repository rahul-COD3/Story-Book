<?php
session_start();
if (!isset($_SESSION['name'])) {
    header('Location: logIn-page.php');
}
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: ../logIn-page.php');
}
?>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="profile.css">
</head>

<body>

    <!-- <input type="submit" name="logout" value="Logout" /> -->

    <form method="post">
        <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
            <div class="card p-4">
                <div class=" image d-flex flex-column justify-content-center align-items-center"> <button
                        class="btn btn-secondary"> <img src="https://i.imgur.com/wvxPV9S.png" height="100"
                            width="100" /></button> <span class="name mt-3"><?php echo $_SESSION['name']; ?></span>
                    <span class="idd">@<?php echo $_SESSION['name']; ?></span>
                    <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span
                            class="idd1">Oxc4c16a645_b21a</span> <span><i class="fa fa-copy"></i></span> </div>
                    <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span
                            class="number">1069 <span class="follow">Followers</span></span> </div>
                    <div class=" d-flex mt-2"> <button class="btn1 btn-dark" type="submit" name="logout"
                            value="logout">Log Out</button> </div>
                    <div class="text mt-3"> <span><?php echo $_SESSION['name']; ?> is a creator of minimalistic x bold
                            graphics and digital artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with
                            FND night. </span> </div>
                    <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i
                                class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i
                                class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
                    <div class=" px-2 rounded mt-4 date "> <span class="join">Joined May,2021</span> </div>
                </div>
            </div>
        </div>
    </form>
</body>