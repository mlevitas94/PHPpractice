<?php

    if(isset($_POST['create_post'])){
        $post_title = $_POST['title'];
        $post_author = $_POST['author'];
        $post_category_id = $_POST['post_category_id'];
        $post_status = $_POST['post_status'];

        $post_image = $_FILES['image']['name'];
        $post_image_temp = $_FILES['image']['tmp_name'];

        $post_tags = $_POST['post_tags'];
        $post_content = $_POST['post_content'];
        $post_title = date('d-m-y');
        $post_comment_count = 4;

        move_uploaded_file($post_image_temp, "../images/$post_image");

        $query = 'INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_comment_count, post_status) ';
        $query .="VALUES('{$post_category_id}', '{$post_title}', '{$post_author}', now(), '{$post_image}', '{$post_content}', '{$post_tags}', '{$post_comment_count}', '{$post_status}')";

        $create_post_query = mysqli_query($connection, $query);

        confirm($create_post_query);
    }
?>


<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" class="form-control" name="title" id="title">
    </div>
    <div class="form-group">
        <label for="cat_id">Post Category ID</label>
        <input type="text" class="form-control" name="post_category_id" id="cat_id">
    </div>
    <div class="form-group">
        <label for="author">Post Author</label>
        <input type="text" class="form-control" name="author" name="author" id="author">
    </div>
    <div class="form-group">
        <label for="post_status">Post Status</label>
        <input type="text" class="form-control" name="post_status" name="post_status" id="post_status">
    </div>
    <div class="form-group">
        <label for="image">Post Image</label>
        <input type="file" name="image" id="image">
    </div>
    <div class="form-group">
        <label for="post_tags">Post Tags</label>
        <input type="text" class="form-control" name="author" name="post_tags" id="post_tags">
    </div>
    <div class="form-group">
        <label for="post_content">Post Content</label>
        <textarea class="form-control" name="post_content" id="post_content" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_post" value="Publish Post">
    </div>
</form>