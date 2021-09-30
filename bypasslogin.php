<?php
require 'include/front_header.php';
?>

<body data-col="1-column" class=" 1-column  blank-page blank-page">
<div class="layer"></div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper nav-collapsed menu-collapsed">
    <div class="main-panel">
        <div class="main-content">
            <div class="content-wrapper">
                <!--Login Page Starts-->
                <section id="login">
                    <div class="container-fluid">
                        <div class="row full-height-vh">
                            <div class="col-12 d-flex align-items-center justify-content-center">
                                <div class="card gradient-purple-bliss text-center width-400">
                                    <div class="card-img overlap">
                                        <img alt="element 06" class="mb-1" src="<?php echo $fset['logo']; ?>"
                                             width="120">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-block">
                                            <h5 class="black font-weight-normal">Vibgyor Advisors</h5>
                                            <br/>
                                            <br/>
                                            <form method="post">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control" name="inputEmail"
                                                               id="inputEmail" placeholder="Email" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <input type="password" class="form-control" name="inputPass"
                                                               id="inputPass" placeholder="Password" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-12">

                                                        <label for="role">Login as ...</label>
                                                        <select name="role" class="form-control">
                                                            <?php
                                                            $sel = $con->query("select * from roles order by id desc;");
                                                            while ($rs = $sel->fetch_assoc()) {
                                                                ?>
                                                                <option value="<?php echo $rs['shortname']; ?>"><?php echo $rs['role']; ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <button type="submit" name="sub_log"
                                                                class="btn btn-pink btn-block btn-dark">Login
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>

                                    <?php
                                    if (isset($_POST['sub_log'])) {

                                        $email = $_POST['inputEmail'];
                                        $pass = $_POST['inputPass'];
                                        $role = $_POST['role'];

                                        $name = $con->query("select * from `" . $role . "` where email='" . $email . "' and password='" . $pass . "' and status = 1");
                                        $user = $name->fetch_assoc();

                                        if ($name->num_rows != 0) {
                                            $_SESSION['username'] = $user['name'];
                                            $_SESSION['role'] = $role;
                                            $_SESSION['uid'] = $user['id'];
                                            ?>
                                            <script>
                                                window.location.href = "<?php echo $role;?>";
                                            </script>
                                        <?php
                                        } else {
                                        ?>
                                            <script>
                                                alert('Invalid Email Address or Password!\nOr Your Account might be Deactivated!\nContact System Administrator');
                                            </script>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

</body>


</html>