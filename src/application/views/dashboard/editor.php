<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <title> CKEditor 5 </title>
    <script src="/static/lib/ckeditor/ckeditor.js"></script>
</head>
<body>
    <div id="container">
        <form action="dashboard/save" method="post">
            <div class="form-group">
                <label for="title">제목</label>
                <input id="title" type="text" name="title" placeholder="제목을 입력하세요." value=<?php echo $title?>>
            </div>
            <div class="form-group">
                <label for="content">내용</label>
                <textarea name="content" id="editor"> <?php echo $content; ?> </textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ), {
                            language: {ui:'ko', content: 'ko'}
                        })
                        .catch( error => {
                            console.log( error );
                        } );
                </script>
            </div>
            <input type="submit" name="submit" value="저장">
        </form>
    </div>
</body>

</html>