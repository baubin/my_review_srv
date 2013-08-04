<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Reviews</title>

</head>
<body>


  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />






  <!--
  - Test form
  -->

  
  <form action="medias" method="post">

    <label>Type</label>
    <select name="type">
      <option>image</option>
      <option>video</option>
    </select>
    <br><br>

    <label>Name</label>
    <input type="text" name="name" />
    <br><br>

    <label>URL</label>
    <input type="text" name="url" />
    <br><br>

    <label>Description</label>
    <input type="textarea" name="description" />
    <br><br>

    <input type="submit" name="Envoyer" />
</form>

  <form action="medias" method="get">
    <label>Test</label>
    <input type="submit" name="GET" />
</form>

</body>

<script src="http://underscorejs.org/underscore.js"></script>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="http://backbonejs.org/backbone.js"></script>
<script src="js/vendor/backbone.localstorage.js"></script>
<script src="js/my_review.js"></script>

</html>
