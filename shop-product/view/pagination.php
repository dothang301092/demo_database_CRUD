<!-- <?php var_dump($total_records); ?> -->

<?php for($i=1;$i<=$total_page;$i++){ ?>
    <a href="index.php?page=<?php echo $i ?>"><?php echo $i ?></a>
<?php } ?>
