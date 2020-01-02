<div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>id</th>
            <th>cateegory title</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include_once ("../includes/functions.php");
        $allCategories = get_all_categories();
        $count = count($allCategories);
        $i=0;
        while($i<$count){
            echo<<<TR
<tr>
TR;
            echo<<<TR
<td>{$allCategories[$i]['cat_id']}</td>
TR;
            echo<<<TR
<td>{$allCategories[$i]['cat_title']}</td>
TR;
            $id=$allCategories[$i]['cat_id'];
            echo "<td><a href='{$_SERVER['PHP_SELF']}?id=$id'>Edit</a></td>";
            echo "<td><a href='includes/delete_data.php?cat_id=$id'>Delete</a></td>";
            echo<<<TR
</tr>
TR;
            $i++;
        }

        ?>
        </tbody>
    </table>
</div>
</div>