<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success p-4">
                <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Profile</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="row">
                <div class="col-11">
                <div class="m-3" style="display: flex; align-items: center; justify-content: center;">
                        <img width="30" height="30" src="https://img.icons8.com/color/48/cheap-2--v1.png" alt="cheap-2--v1" />
                        <span style="vertical-align: super; font-size: larger;" class="mx-2">
                            <?php
                            include '../connection.php';

                            $query = "SELECT * FROM user WHERE username='$_SESSION[username]'";
                            $sql = mysqli_query($connection, $query);
                            $data = mysqli_fetch_row($sql);

                            foreach ($sql as $row) {
                                if (!(function_exists('rupiah'))) {
                                    function rupiah($angka)
                                    {
                                        $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                                        return $hasil_rupiah;
                                    }
                                }
                                echo rupiah($row['saldo']);
                            }
                            ?>
                        </span>
                    </div>
                    <div class="input-group m-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $_SESSION['name'] ?>" disabled>
                    </div>
                    <div class="input-group m-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Full Name</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $_SESSION['username'] ?>" disabled>
                    </div>
                    <div class="input-group m-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">E-mail </span>
                        <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="<?php echo $_SESSION['email'] ?>" disabled>
                    </div>
                </div>
            </div>
            <div class="modal-body border-0 p-4">
                <div class="d-grid"><button class="btn btn-success rounded-pill btn-lg" name="profile" type="button" data-bs-dismiss="modal" aria-label="Close" onclick="window.location.href='../logout.php'">Log out</button>
                </div>
            </div>
        </div>
    </div>
</div>