<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Codevery Test</title>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-comments.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-comments.js"></script>
    <script type="text/javascript">
        $(function() {
            var saveComment = function(data) {
                // Convert pings to human readable format
                $(data.pings).each(function(index, id) {
                    var user = usersArray.filter(function(user){return user.id == id})[0];
                    data.content = data.content.replace('@' + id, '@' + user.fullname);
                });
                return data;
            }
            $('#comments-container').comments({
                profilePictureURL: 'https://viima-app.s3.amazonaws.com/media/user_profiles/user-icon.png',
                currentUserId: 1,
                roundProfilePictures: true,
                textareaRows: 1,
                enableAttachments: true,
                enableHashtags: true,
                enablePinging: true,
                getUsers: function(success, error) {
                    setTimeout(function() {
                        success(usersArray);
                    }, 500);
                },
                getComments: function(success, error) {
                    setTimeout(function() {
                        success(commentsArray);
                    }, 500);
                },
                postComment: function(data, success, error) {
                    setTimeout(function() {
                        success(saveComment(data));
                    }, 500);
                },
                putComment: function(data, success, error) {
                    setTimeout(function() {
                        success(saveComment(data));
                    }, 500);
                },
                deleteComment: function(data, success, error) {
                    setTimeout(function() {
                        success();
                    }, 500);
                },
                upvoteComment: function(data, success, error) {
                    setTimeout(function() {
                        success(data);
                    }, 500);
                },
                uploadAttachments: function(dataArray, success, error) {
                    setTimeout(function() {
                        success(dataArray);
                    }, 500);
                },
            });
        });
    </script>
</head>
<body>
    <h1>СООБЩЕНИЯ</h1>
        <div>
        <a href="index.php">Вернутся к странице входа</a>
    </div>
    <div id="comments-container"></div>

</body>
</html>