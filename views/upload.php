<div style="text-align: center;">
    <div style="margin: 50px 50px 50px 50px; border: 1px solid black;">
        <div style="margin: 10px 10px 10px 10px; text-align:left; font-family:Verdana, Geneva, Tahoma, sans-serif;">
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <label>
                    <span>Title:</span>
                    <input type="text" name="title"><br><br>
                    <span>File:</span>
                    <input type="file" name="image" accept="image/*,video/*,audio/*" required>
                    <p style="font-size:10px; color:#AAA">Supported file types: mp3, mp4, gif, jpg, jpeg, png, webp, webm. Any other type could not work properly.</p>
                    <br>
                    <span>Thumbnail:</span>
                    <input type="file" name="thumbnail" accept="image/*">
                    <p style="font-size:10px; color:#AAA">Supported file types: jpg, jpeg, png, webp. Any other type could not work properly.</p>
                    <br><br>

                    <span>Comment (optional):</span><br>
                    <textarea name="comment" rows="4" cols="50" placeholder="Write something..."></textarea><br><br>
                </label>
                <br>
                <input type="submit" name="submit" value="Upload file or comment">
            </form>

            <?php
            if ($confirm === 1) {
                echo "<p>El archivo o comentario se ha subido correctamente</p>";
            } else if ($confirm === 0) {
                echo "<p style='color:red;'>Error: Debe subir un archivo o ingresar un comentario válido.</p>";
            }
            ?>
        </div>
    </div>
</div>