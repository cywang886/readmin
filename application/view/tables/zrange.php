<h5><?php echo $command ?></h5>
<?php echo $paginator ?>
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th class="span1">Rank</th>
        <th class="span2">Score</th>
        <th class="span8">Value</th>
        <th class="action">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($value as $val => $score) : ?>
    <tr>
        <td><?php echo Command_ZSets::zRank($key, $val) ?></td>
        <td><?php echo $score ?></td>
        <td><?php echo $val ?></td>
        <td>
            <div class="btn-group">
                <a class="btn" data-toggle="dropdown" href="#">
                    <i class="icon-edit"></i>
                </a>
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <?php echo Helper_ZSets::anchorActionDelete($key, $val) ?>
                </ul>
            </div>

        </td>
    </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $paginator ?>
