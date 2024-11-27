<?php
function get($key) {
    return isset($_GET[$key]) ? $_GET[$key] : null;
}
include "header.php"; 
?>
<!-- //header-ends -->
<div id="page-wrapper">
    <div class="graphs">
        <h3 class="blank1">All Vacancies</h3>
        <div class="xs tabls">
            <div class="panel-body1">
                <?php if(isset($_GET["success"])): ?>
                    <div>
                        <?= App::message("success", "Successfully deleted a News!") ?>
                    </div>
                <?php endif; ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!isset($_GET["page"])) {
                            $_GET["page"] = 1;
                        }

                        $tbl_name = "vacancies"; // your table name
                        $adjacents = 3;

                        $get_posts_tbl = ORM::for_table($tbl_name)->find_array();
                        $total_pages = count($get_posts_tbl);
                        $targetpage = "pagination.php"; // your file name
                        $limit = 10; // how many items to show per page
                        $page = $_GET['page'];
                        if ($page) 
                            $start = ($page - 1) * $limit; // first item to display on this page
                        else
                            $start = 0; // if no page var is given, set start to 0
                        
                        $result = $db->prepare("SELECT * FROM vacancies ORDER BY id DESC LIMIT $start, $limit");
                        $result->execute();
                        
                        if ($page == 0) $page = 1; // if no page var is given, default to 1.
                        $prev = $page - 1; // previous page is page - 1
                        $next = $page + 1; // next page is page + 1
                        $lastpage = ceil($total_pages / $limit); // lastpage is total pages / items per page, rounded up.
                        $lpm1 = $lastpage - 1;
                        ?>
                        
                        <span class="text-muted m-r-sm">Showing
                            <?php if ($lastpage == $next - 1): ?>
                                <?= $total_pages ?>
                            <?php else: ?>
                                <?= $page * $limit ?>
                            <?php endif; ?>
                            of <?= $total_pages ?>
                        </span>
                        
                        <div class="btn-group">
                            <?php if ($page != 1): ?>
                                <a class="btn btn-default" href="?page=<?= $prev ?>"><i class="fa fa-angle-left"></i></a>
                            <?php endif; ?>

                            <?php if ($lastpage == $next - 1): ?>
                            <?php else: ?>
                                <a class="btn btn-default" href="?page=<?= $next ?>"><i class="fa fa-angle-right"></i></a>
                            <?php endif; ?>
                        </div>
                        
                    </div>
                </div>
                <table class="table">
                    <?php
                    for ($i = 1; $row = $result->fetch(); $i++): 
                    ?> 
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= htmlspecialchars($row['vacancy_title']) ?></td>
                            <td><?= htmlspecialchars($row['date']) ?></td>
                            <td>
                                <a href="../vacancy_post.php?id=<?= $row['id'] ?>" target="_blank" class="fa fa-eye-slash btn btn-xs btn-primary">View</a>
                                <a href="deletevacancy.php?id=<?= $row['id'] ?>" class="fa fa-eraser btn btn-xs btn-success warning_4 delbtn">Delete</a>
                            </td>
                        </tr>
                    <?php 
                    endfor; // Properly closing the for loop
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>